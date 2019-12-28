
@extends('layouts.master')

@section('content')
@include('sidebar')
@include('header')

<link rel="stylesheet" href="<?php echo asset('js/datatables/responsive/css/datatables.responsive.css')?>" type="text/css">
<link rel="stylesheet" href="<?php echo asset('js/select2/select2.css')?>" type="text/css">
<script src="<?php echo asset('js/jquery.dataTables.min.js')?>"></script>
<script src="<?php echo asset('js/datatables/TableTools.min.js')?>"></script>
<script src="<?php echo asset('js/dataTables.bootstrap.js')?>"></script>
<script src="<?php echo asset('js/datatables/jquery.dataTables.columnFilter.js')?>"></script>
<script src="<?php echo asset('js/datatables/lodash.min.js')?>"></script>
<script src="<?php echo asset('js/datatables/responsive/js/datatables.responsive.js')?>"></script>
<script src="<?php echo asset('js/select2/select2.min.js')?>"></script>

<h2>State List</h2>
<br />
    <table class="table table-bordered datatable" id="table-1">
    	<thead>
			<tr>
				<th>State Name</th>
				<th>Country</th>
				<th>Status</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
    		<tr>
    			<td>Delhi</td>
    			<td>India</td>
    			<td>Active</td>
    			<td>
    				<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
						<i class="entypo-pencil"></i>
						Edit
					</a>
					<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
						<i class="entypo-cancel"></i>
						Delete
					</a>
				</td>
    		</tr>
		</table>
</div>
<script type="text/javascript">
		var responsiveHelper;
		var breakpointDefinition = {
		    tablet: 1024,
		    phone : 480
		};
		var tableContainer;
		
			jQuery(document).ready(function($)
			{
				tableContainer = $("#table-1");
				
				tableContainer.dataTable({
					"sPaginationType": "bootstrap",
					"aLengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
					"bStateSave": true,
					
		
				    // Responsive Settings
				    bAutoWidth     : false,
				    fnPreDrawCallback: function () {
				        // Initialize the responsive datatables helper once.
				        if (!responsiveHelper) {
				            responsiveHelper = new ResponsiveDatatablesHelper(tableContainer, breakpointDefinition);
				        }
				    },
				    fnRowCallback  : function (nRow, aData, iDisplayIndex, iDisplayIndexFull) {
				        responsiveHelper.createExpandIcon(nRow);
				    },
				    fnDrawCallback : function (oSettings) {
				        responsiveHelper.respond();
				    }
				});
				
				$(".dataTables_wrapper select").select2({
					minimumResultsForSearch: -1
				});
			});
		</script>
		
@endsection

