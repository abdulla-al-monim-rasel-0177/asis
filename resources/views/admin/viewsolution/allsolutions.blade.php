@extends('layouts.adminmaster')

		@section('styles')

		<!-- INTERNAL Data table css -->
		<link href="{{asset('assets/plugins/datatable/css/dataTables.bootstrap5.min.css')}}" rel="stylesheet" />
		<link href="{{asset('assets/plugins/datatable/responsive.bootstrap5.css')}}" rel="stylesheet" />

		<!-- INTERNAL Sweet-Alert css -->
		<link href="{{asset('assets/plugins/sweet-alert/sweetalert.css')}}" rel="stylesheet" />
		

		@section('content')

		<!--Page header-->
		<div class="page-header d-xl-flex d-block">
			<div class="page-leftheader">
				<h4 class="page-title"><span class="font-weight-normal text-muted ms-2">All Solution</span></h4>
			</div>
		</div>
		<!--End Page header-->
		
		<!-- All Tickets List-->
		<div class="col-xl-12 col-lg-12 col-md-12">
			<div class="card ">
				<div class="card-header border-0">
					<h4 class="card-title">All Solution</h4>
				</div>
				<div class="card-body" >
					<div class="table-responsive spruko-delete">
						
						<table class="table table-vcenter text-nowrap table-bordered table-striped ticketdeleterow w-100" id="myticket">
							<thead >
								<tr >
									<th >Id</th>
									<th >Si No</th>
									
									
									<th >Tilte</th>
							
							
									<th >Date</th>
									
									<th >Edit</th>
									<th >Delete</th>
								</tr>
							</thead>
							<tbody >
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
		<!--End All Tickets List-->
		@endsection


		@section('scripts')

		<!-- INTERNAL Vertical-scroll js-->
		<script src="{{asset('assets/plugins/vertical-scroll/jquery.bootstrap.newsbox.js')}}"></script>

		<!-- INTERNAL Data tables -->
		<script src="{{asset('assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
		<script src="{{asset('assets/plugins/datatable/js/dataTables.bootstrap5.js')}}"></script>
		<script src="{{asset('assets/plugins/datatable/dataTables.responsive.min.js')}}"></script>
		<script src="{{asset('assets/plugins/datatable/responsive.bootstrap5.min.js')}}"></script>

		<!-- INTERNAL Index js-->
		<script src="{{asset('assets/js/support/support-sidemenu.js')}}"></script>
		<script src="{{asset('assets/js/select2.js')}}"></script>

		<!-- INTERNAL Sweet-Alert js-->
		<script src="{{asset('assets/plugins/sweet-alert/sweetalert.min.js')}}"></script>

		<script type="text/javascript">

			"use strict";

			(function($)  {

				// Variables
				var SITEURL = '{{url('')}}';

				// Csrf Field
				$.ajaxSetup({
					headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
					}
				});

				// Datatable
				var table = $('#myticket').DataTable({
					processing:true,
					serverSide:true,
					ajax: {
						url: "{{ url('admin/allsolutions') }}"
					},
					columns: [
						{data: 'id', name: 'id', 'visible': false},
						{data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false,searchable: false},
						
						{ data: 'title', name: 'title' },
						
						
						{ data: 'created_at', name: 'created_at' },
						{data: 'edit', name: 'edit', orderable: false},
						{data: 'delete', name: 'delete', orderable: false},
					],
					order:[],
					responsive: true,
					drawCallback: function () {
						var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
						var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
							return new bootstrap.Tooltip(tooltipTriggerEl)
						});
						$('.form-select').select2({
							minimumResultsForSearch: Infinity,
							width: '100%'
						});
						$('#customCheckAll').prop('checked', false);
						$('.checkall').on('click', function(){
							if($('.checkall:checked').length == $('.checkall').length){
								$('#customCheckAll').prop('checked', true);
							}else{
								$('#customCheckAll').prop('checked', false);
							}
						});
					},
				});

				// when user click its get modal popup to assigned the ticket
				$('body').on('click', '#assigned', function () {
					var assigned_id = $(this).data('id');
					$('.select2_modalassign').select2({
						dropdownParent: ".sprukosearch",
						minimumResultsForSearch: '',
						placeholder: "Search",
						width: '100%'
					});

					$.get('assigned/' + assigned_id , function (data) {
						console.log(data.assign_data.id)
						$('#assigned_id').val(data.assign_data.id);
						$(".modal-title").text('Assign To Agent');
						$('#username').html(data.table_data);
						$('#addassigned').modal('show');
					});
				});

				// TICKET DELETE SCRIPT
				$('body').on('click', '#show-delete', function () {
					var _id = $(this).data("id");
					swal({
						title: `Are you sure you want to continue?`,
						text: "This might erase your records permanently",
						icon: "warning",
						buttons: true,
						dangerMode: true,
					})
					.then((willDelete) => {
					if (willDelete) {
						$.ajax({
								type: "get",
								url: SITEURL + "/admin/delete-solution/"+_id,
								success: function (data) {
									toastr.error(data.error);
									var oTable = $('#myticket').dataTable();
									oTable.fnDraw(false);
								},
								error: function (data) {
								console.log('Error:', data);
								}
							});
						}
					});
				});
				// TICKET DELETE SCRIPT END

				//Mass Delete 
				$('body').on('click', '#massdelete', function () {

					var id = [];
					$('.checkall:checked').each(function(){
						id.push($(this).val());
					});
					if(id.length > 0){
						swal({
							title: `Are you sure you want to continue?`,
							text: "This might erase your records permanently",
							icon: "warning",
							buttons: true,
							dangerMode: true,
						})
						.then((willDelete) => {
							if (willDelete) {
								$.ajax({
									url:"{{ url('admin/ticket/delete/tickets')}}",
									method:"GET",
									data:{id:id},
									success:function(data)
									{

										$('#myticket').DataTable().ajax.reload();
										toastr.error(data.error);
													
									},
									error:function(data){

									}
								});
							}
						});
					}			
					else{
						toastr.error('{{trans('langconvert.functions.checkboxselect')}}');
					}	
					
				});

				// Assigned Submit button
				$('body').on('submit', '#assigned_form', function (e) {
					e.preventDefault();
					var actionType = $('#btnsave').val();
					var fewSeconds = 2;
					$('#btnsave').html('Sending..');
					$('#btnsave').prop('disabled', true);
						setTimeout(function(){
							$('#btnsave').prop('disabled', false);
						}, fewSeconds*1000);
					var formData = new FormData(this);
					$.ajax({
						type:'POST',
						url: SITEURL + "/admin/assigned/create",
						data: formData,
						cache:false,
						contentType: false,
						processData: false,

						success: (data) => {
							$('#AssignError').html('');
							$('#assigned_form').trigger("reset");
							$('#addassigned').modal('hide');
							$('#btnsave').html('Save Changes');
							var oTable = $('#myticket').dataTable();
							oTable.fnDraw(false);
							toastr.success(data.success);
						},
						error: function(data){
							$('#AssignError').html('');
							$('#AssignError').html(data.responseJSON.errors.assigned_user_id);
							$('#btnsave').html('Save Changes');
						}
					});	
				});

				// Remove the assigned from the ticket
				$('body').on('click', '#btnremove', function () {
					var asid = $(this).data("id");
					console.log(asid)
					swal({
							title: `Are you sure you want to unassign this agent?`,
							text: "This agent may no longer exist for this ticket.",
							icon: "warning",
							buttons: true,
							dangerMode: true,
						})
						.then((willDelete) => {
						if (willDelete) {
							$.ajax({
								type: "get",
								url: SITEURL + "/admin/assigned/update/"+asid,
								success: function (data) {
									var oTable = $('#myticket').dataTable();
									oTable.fnDraw(false);
									toastr.error(data.error);
									console.log(data.error)
								},
								error: function (data) {
									console.log('Error:', data);
								}
							});

						}
					});
				});
				// Mass Delete
				$('body').on('click', '#assignGrop', function () {
					var id = [];

					$('.checkall:checked').each(function(){
						id.push($(this).val());
					});
					if(id.length > 0){
						var assigned_id = id[0];
						var assigned_value = id;
						console.log(assigned_id);
						$('.select2_modalassign').select2({
							dropdownParent: ".sprukosearch",
							minimumResultsForSearch: '',
							placeholder: "Search",
							width: '100%'
						});

						$.get('assigned/' + assigned_id , function (data) {
							console.log(data.assign_data.id);
							$('#assigned_id_id').val(assigned_id);
							$('#assigned_id_group').val(assigned_value);
							$(".modal-title").text('Assign To Agent');
							$('#usernamegroup').html(data.table_data);
							$('#addassignedgroup').modal('show');
						});	
					}else{
						toastr.error('Please select at least one check box.');
					}
				});
				
				// Assigned Submit button
				$('body').on('submit', '#assigned_form_group', function (e) {
					e.preventDefault();
					var actionType = $('#btnsave').val();
					var fewSeconds = 2;
					$('#btnsave').html('Sending..');
					$('#btnsave').prop('disabled', true);
						setTimeout(function(){
							$('#btnsave').prop('disabled', false);
						}, fewSeconds*1000);
					var formData = new FormData(this);
					$.ajax({
						type:'POST',
						url: SITEURL + "/admin/assigned/create/group",
						data: formData,
						cache:false,
						contentType: false,
						processData: false,

						success: (data) => {
							$('#AssignError').html('');
							$('#assigned_form_group').trigger("reset");
							$('#addassignedgroup').modal('hide');
							$('#btnsave').html('Save Changes');
							var oTable = $('#myticket').dataTable();
							oTable.fnDraw(false);
							toastr.success(data.success);
						},
						error: function(data){
							$('#AssignError').html('');
							$('#AssignError').html(data.responseJSON.errors.assigned_user_id);
							$('#btnsave').html('Save Changes');
						}
					});	
				});

				// Checkbox checkall
				$('#customCheckAll').on('click', function() {
					$('.checkall').prop('checked', this.checked);
				});
				
			})(jQuery);

		</script>

		@endsection

	@section('modal')


	
	
	@endsection