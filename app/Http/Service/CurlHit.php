<?php
namespace App\Http\Service;


class CurlHit 
{
    
    public function curlHit($method,$params,$type="post",$header=array()){
        $return =array();
        $apiUrl = API_URL.$method;
        $jsonString = json_encode($params,JSON_NUMERIC_CHECK);
        //$header = array("Content-Type:application/json","TOKEN:".$token, "REQUESTVALIDATOR:".hash('sha256',$key.'@'.$jsonString));
        $header = array("Content-Type:application/json");
        $curlInitiate = curl_init();
        curl_setopt($curlInitiate, CURLOPT_URL, $apiUrl);
        if($type == "post"){
            curl_setopt($curlInitiate, CURLOPT_POST, 1);
            curl_setopt($curlInitiate, CURLOPT_POSTFIELDS, $jsonString);
        }
        curl_setopt($curlInitiate, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($curlInitiate, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curlInitiate, CURLOPT_HTTPHEADER, $header);
        $response = curl_exec($curlInitiate); // if($method == 'Configuration/dashboardSummary'){  print_r($response);die();}
        $error_msg = curl_error($curlInitiate);
        curl_close($curlInitiate);
        $return['code']=205;
        $return['status']='error';
        $return['message']='Unable to process curl request';
        if(!empty($response)){
            $curlResponse = json_decode($response,true);
            if(!empty($curlResponse)){
                $return = $curlResponse;
            }else{
                $return['code']=204;
            }
        }
        
        return $return;
    }
    
    
}