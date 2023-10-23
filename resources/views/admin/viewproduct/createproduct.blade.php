
@extends('layouts.adminmaster')

@section('styles')

<!-- INTERNAl Summernote css -->
<link rel="stylesheet" href="{{asset('assets/plugins/summernote/summernote.css')}}?v=<?php echo time(); ?>">

<!-- INTERNAl Dropzone css -->
<link href="{{asset('assets/plugins/dropzone/dropzone.css')}}?v=<?php echo time(); ?>" rel="stylesheet" />
<!--  BEGIN CUSTOM STYLE FILE  -->
    <link href="{{asset('assets')}}/plugins/loaders/custom-loader.css" rel="stylesheet" type="text/css" />
    <!--  END CUSTOM STYLE FILE  --> 
@endsection

					@section('content')

					<!--Page header-->
					<div class="page-header d-xl-flex d-block">
						<div class="page-leftheader">
							<h4 class="page-title"><span class="font-weight-normal text-muted ms-2">Create Product</span></h4>
						</div>
					</div>
					<!--End Page header-->

					<!-- Create Ticket List-->
					<div class="col-xl-12 col-lg-12 col-md-12">
						<div class="card ">
							<div class="card-header border-0">
								<h4 class="card-title">New Product</h4>
							</div>
							<!-- //id="admin_form" -->
							<form method="post" method="post" id="admin_form"  enctype="multipart/form-data" >
								@csrf

								<div class="card-body">
									<div class="form-group ">
										<div class="row">
											<div class="col-md-3">
												<label class="form-label mb-0 mt-2">Product Title  <span class="text-red">*</span></label>
											</div>
											<div class="col-md-9">
												<input type="text" id="title" class="form-control @error('title') is-invalid @enderror" placeholder="Title" name="title" value="{{ old('title') }}">
												<span id="TitleError" class="text-danger alert-message"></span>
												@error('title')
												
													<span class="invalid-feedback" role="alert">
														<strong>{{ $message }}</strong>
													</span>
												@enderror

											</div>
										</div>
									</div>
									
									<div class="form-group">
										<div class="row">
											<div class="col-md-3">
												<label class="form-label mb-0 mt-2">Product Category<span class="text-red">*</span></label>
											</div>
											<div class="col-md-9">
												<select  class="form-control select2-show-search  select2 @error('category') is-invalid @enderror"  data-placeholder="Select Category" name="category" id="category">
													<option label="Select Category"></option>
													@foreach ($categories as $category)

														<option value="{{ $category->id }}" @if(old('category') == $category->id) selected @endif>{{ $category->name }}</option>
													@endforeach

												</select>
												<span id="CategoryError" class="text-danger alert-message"></span>
												@error('category')

													<span class="invalid-feedback" role="alert">
														<strong>{{ $message }}</strong>
													</span>
												@enderror

											</div>
										</div>
									</div>
									<div class="form-group ticket-summernote ">
										<div class="row">
											<div class="col-md-3">
												<label class="form-label mb-0 mt-2">Summary Description<span class="text-red">*</span></label>
											</div>
											<div class="col-md-9">
												<textarea class=" form-control @error('sort_description') is-invalid @enderror" rows="7" name="sort_description" >{{old('sort_description')}}</textarea>
												<span id="SortDescriptionError" class="text-danger alert-message"></span>
												@error('sort_description')
													<span class="invalid-feedback" role="alert">
														<strong>{{ $message }}</strong>
													</span>
												@enderror

											</div>
										</div>
									</div>
									<div class="form-group ticket-summernote ">
										<div class="row">
											<div class="col-md-3">
												<label class="form-label mb-0 mt-2">Product Description<span class="text-red">*</span></label>
											</div>
											<div class="col-md-9">
												<textarea class="summernote form-control @error('description') is-invalid @enderror" rows="7" name="description" id="me">{{old('description')}}</textarea>
												<span id="DescriptionError" class="text-danger alert-message"></span>
												@error('description')
													<span class="invalid-feedback" role="alert">
														<strong>{{ $message }}</strong>
													</span>
												@enderror

											</div>
										</div>
									</div>
									
									<div class="form-group">
										<div class="row">
											<div class="col-md-3">
												<label class="form-label mb-0 mt-2">Main Thumbnail</label>
											</div>
											<div class="col-md-9">
												<input type="file" accept="image/*" name="main_image">
												<p>W:765 H:507</p>
												<span id="MainImageError" class="text-danger alert-message"></span>
												@error('main_image')
													<span class="invalid-feedback" role="alert">
														<strong>{{ $message }}</strong>
													</span>
												@enderror
											</div>

										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-md-3">
												<label class="form-label mb-0 mt-2">Banner</label>
											</div>
											<div class="col-md-9">
												<input type="file" accept="image/*" name="banner">
												<p>W:1920 H:400</p>
												<span id="BannerError" class="text-danger alert-message"></span>
												@error('banner')
													<span class="invalid-feedback" role="alert">
														<strong>{{ $message }}</strong>
													</span>
												@enderror
											</div>

										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-md-3">
												<label class="form-label mb-0 mt-2">Image one</label>
											</div>
											<div class="col-md-9">
												<input type="file" accept="image/*" name="image_one">
												<p>W:375 H:238</p>
												<span id="ImageOneError" class="text-danger alert-message"></span>
												@error('image_one')
													<span class="invalid-feedback" role="alert">
														<strong>{{ $message }}</strong>
													</span>
												@enderror
											</div>

										</div>
									</div>
									
									<div class="form-group">
										<div class="row">
											<div class="col-md-3">
												<label class="form-label mb-0 mt-2">Image two</label>
											</div>
											<div class="col-md-9">
												<input type="file" accept="image/*" name="image_two">
												<p>W:375 H:238</p>
												<span id="ImageTwoError" class="text-danger alert-message"></span>
												@error('image_two')
													<span class="invalid-feedback" role="alert">
														<strong>{{ $message }}</strong>
													</span>
												@enderror
											</div>

										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-md-3">
												<label class="form-label mb-0 mt-2">Upload File</label>
											</div>
											<div class="col-md-9">
												<input type="file" name="file">
											</div>
										</div>
									</div>
								</div>
								<div class="card-footer">
									<div class="form-group float-end">
										<input type="submit"  class="btn btn-secondary btn-lg purchasecode" id="createticketbtnstr" value="Create ticket" >
										<button type="submit" id="createticketbtn" class="btn btn-secondary btn-lg purchasecode" disabled="">Loading.. <i class="fa fa-spinner fa-spin"></i></button>
                                    
                                    
									</div>
								</div>
							</form>
						</div>
					</div>
					<!--End Create Ticket List-->
										@endsection

		@section('scripts')
		

		<!-- INTERNAL Vertical-scroll js-->
		<script src="{{asset('assets/plugins/vertical-scroll/jquery.bootstrap.newsbox.js')}}?v=<?php echo time(); ?>"></script>
		<script type="text/javascript">
						$("#createticketbtn").hide();
				        $("#createticketbtnstr").click(function(){
					    	$("#createticketbtnstr").hide();
						    $("#createticketbtn").show();
						 });

					</script>

		<!-- INTERNAL Summernote js  -->
		<script src="{{asset('assets/plugins/summernote/summernote.js')}}?v=<?php echo time(); ?>"></script>

		<!-- INTERNAL Index js-->
		<script src="{{asset('assets/js/support/support-sidemenu.js')}}?v=<?php echo time(); ?>"></script>
		<script src="{{asset('assets/js/support/support-createticket.js')}}?v=<?php echo time(); ?>"></script>
		<script src="{{asset('assets/js/select2.js')}}?v=<?php echo time(); ?>"></script>

		<!-- INTERNAL Dropzone js-->
		<script src="{{asset('assets/plugins/dropzone/dropzone.js')}}?v=<?php echo time(); ?>"></script>

		<script type="text/javascript">

			
				
			// Csrf field
			$.ajaxSetup({
				headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				}
			});
			


			// summernote 
			$('.note-editable').on('keyup', function(e){
				localStorage.setItem('adminmessage', e.target.innerHTML)
			})

			// store subject to local
			$('#subject').on('keyup', function(e){
				localStorage.setItem('adminsubject', e.target.value)
			})
			

			// onload get the data from local
			$(window).on('load', function(){
				if(localStorage.getItem('adminsubject') || localStorage.getItem('adminmessage') || localStorage.getItem('adminemail')){

					document.querySelector('#subject').value = localStorage.getItem('adminsubject');
					document.querySelector('#email').value = localStorage.getItem('adminemail');
					document.querySelector('.summernote').innerHTML = localStorage.getItem('adminmessage');
					document.querySelector('.note-editable').innerHTML = localStorage.getItem('adminmessage');
				}
			})

			// Create Ticket 
			$('body').on('submit', '#admin_form', function (e) {
				e.preventDefault();
				$('#TitleError').html('');
				$('#SortDescriptionError').html('');
				$('#DescriptionError').html('');
				$('#CategoryError').html('');
				$('#MainImageError').html('');
				$('#ImageOneError').html('');
				$('#ImageTwoError').html('');
				$('#BannerError').html('');
				var actionType = $('#btnsave').val();
				var fewSeconds = 2;
				$('#btnsave').html('Sending..');
				$('#btnsave').prop('disabled', true);
					setTimeout(function(){
						$('#btnsave').prop('disabled', false);
					}, fewSeconds*1000);

					$("#createticketbtnstr").hide();
						$("#createticketbtn").show();
				var formData = new FormData(this);

				$.ajax({
					type:'post',
					url: '{{url('/admin/storeprodcuct')}}',
					data: formData,
					cache:false,
					contentType: false,
					processData: false,
	
					success: (data) => {
						

						$('#TitleError').html('');
						$('#SortDescriptionError').html('');
						$('#DescriptionError').html('');
						$('#CategoryError').html('');
						$('#MainImageError').html('');
						$('#ImageOneError').html('');
						$('#ImageTwoError').html('');
						$('#BannerError').html('');
						toastr.success(data.success);
						if(localStorage.getItem('adminsubject') || localStorage.getItem('adminmessage') || localStorage.getItem('adminemail')){
							localStorage.removeItem("adminsubject");
							localStorage.removeItem("adminmessage");
							localStorage.removeItem("adminemail");
						}
						window.location.replace('{{url('admin/allprodcucts')}}');
						
						
						
						
					},
					error: function(data){

						$('#TitleError').html(data.responseJSON.errors.title);
						$('#SortDescriptionError').html(data.responseJSON.errors.sort_description);
						$('#DescriptionError').html(data.responseJSON.errors.description);
						$('#CategoryError').html(data.responseJSON.errors.category);
						$('#MainImageError').html(data.responseJSON.errors.main_image);
						$('#ImageOneError').html(data.responseJSON.errors.image_one);
						$('#ImageTwoError').html(data.responseJSON.errors.image_two);
						$('#BannerError').html(data.responseJSON.errors.banner);
						$("#createticketbtnstr").show();
						$("#createticketbtn").hide();
						
					}
				});
				
			});

			
		</script>

		<!-- <script>
			

	        $(".note-codable").on('keyup', function() {
		    	$("#createticketbtnstr").show();
				$("#createticketbtn").hide();
			});

	        $('#subject').on('keyup', function() {
		    	$("#createticketbtnstr").show();
				$("#createticketbtn").hide();
			});

			$('#email').on('keyup', function() {
		    	$("#createticketbtnstr").show();
				$("#createticketbtn").hide();
			});
			$('#category').on('change', function() {
		    	$("#createticketbtnstr").show();
				$("#createticketbtn").hide();
			});
    </script> -->

		@endsection
