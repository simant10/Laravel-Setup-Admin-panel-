<?php
namespace App\Http\Controllers;
use App\Http\Service\CurlHit;

class StateController extends Controller
{
    protected $curlHitObj;
    public function __construct(){
        $this->curlHitObj = new CurlHit();
    }
    public function index(){ 
       // $response = $this->curlHitObj->curlHit();
        //TODO 
        // Handle REsponse Here
        return view('statelist', []);
    }
    
}