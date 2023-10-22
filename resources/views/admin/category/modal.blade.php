

                <!-- Add testimonial-->
                <div class="modal fade sprukosubcat"  id="addtestimonial" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" >Add New Category</h5>
                                <button  class="close" data-bs-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <form method="POST" enctype="multipart/form-data" id="testimonial_form" name="testimonial_form">
                                <input type="hidden" name="testimonial_id" id="testimonial_id">
                                @csrf
                              
                                <div class="modal-body">
                                    <div class="form-group">
                                        <div class="d-flex d-md-max-block">
                                            <label class="form-label d-flex align-items-center me-6">Name <span class="text-red ms-1">*</span> </label>
                                            <input type="text" class="form-control" name="name" id="name">
                                        </div>
                                        <span id="nameError" class="text-danger alert-message"></span>
                                    </div>
                                    
                                    

                                    <div class="form-group">
                                        <div class="switch_section">
                                            <div class="switch-toggle d-flex  d-md-max-block mt-4 ms-0 ps-0">
                                                <label class="form-label pe-1 me-6">Status:</label>
                                                <a class="onoffswitch2">
                                                    <input type="checkbox"  name="status" id="myonoffswitch188" class=" toggle-class onoffswitch2-checkbox" value="1" >
                                                    <label for="myonoffswitch188" class="toggle-class onoffswitch2-label" "></label>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <a href="#" class="btn btn-outline-danger" data-bs-dismiss="modal">Close</a>
                                    <button type="submit" class="btn btn-success" style="" id="btnsave"  >Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- End  Add testimonial  -->