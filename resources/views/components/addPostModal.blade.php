<!-- Create post modal -->
<div class="postModal position-fixed top-50 start-50 translate-middle rounded-3 mt-5" id="postModal">
        
    <div class="modal-dialog modal-dialog-centered">

        <div class="modal-content modalContent">

            <form action="" method="HEAD" enctype="multipart/form-data">

                <!-- Modal header -->
                <div class="modal-header mx-4 my-3">
                    <h5 class="modal-title">Create Post</h5>
                    <button type="button" onclick="closePostModal()" class="btn-close"><i class="bi bi-x-lg"></i></button>
                </div>
                
                <!-- Modal body -->
                <div class="modal-body px-4 my-2">
                    
                    <!-- Blog title -->
                    <label for="title">Blog title<b class="text-danger"> * </b><span class="text-danger">Error</span></label> <!-- Blog title starts here -->
                    <div class="input-group mt-2 mb-3">
                        <span class="input-group-text" id="addon-wrapping">
                            <i class="bi bi-card-heading"></i>
                        </span>
                        <input type="text" class="postModalValue form-control py-2" name="title" value="title" placeholder="Add blog title">
                    </div>
                    
                    <!-- Blog category -->
                    <div class="d-flex justify-content-between align-items-center">
                        <label for="category" class="mt-3">Blog category<b class="text-danger"> * </b><span class="text-danger">Error</span></label> <!-- Blog category starts here -->
                        
                        <!-- Add category button -->
                        <span>
                            <a href="{{ url('/categories') }}" target="_blank" class="addCatBtn btn btn-sm btn-outline-primary">
                                Add category <i class="bi bi-box-arrow-up-right ms-1"></i>
                            </a>
                        </span>
                    </div>
                    
                    <!-- Category select list -->
                    <div class="input-group mt-2 mb-3">
                        <span class="input-group-text rounded-0 rounded-start border-end-0" id="addon-wrapping">
                            <i class="bi bi-list"></i>
                        </span>

                        <select class="form-select py-2" name="category" id="floatingSelect" aria-label="Floating label select example">
                            <option>Select a category</option>
                        </select>
                    </div>

                    
                    <!-- Blog description -->
                    <label for="title">Blog description<b class="text-danger"> * </b><span class="text-danger">Error</span></label> 
                    <div class="input-group mt-2 mb-3">
                        <span class="input-group-text rounded-0 rounded-start border-end-0" id="addon-wrapping">
                            <i class="bi bi-pencil-square"></i>
                        </span>
                        <textarea class="postModalValue form-control rounded-0 rounded-end decriptionField" name="description" placeholder="Add blog description" id="floatingTextarea2" style="height: 100px">description</textarea>
                    </div>
                    
                    <!-- Blog photo -->
                    <label for="title">Blog photo<b class="text-danger"> * </b><span class="text-danger">Error</span></label> <!-- upload blog photo starts here-->
                    <div class="input-group mt-2 mb-3">
                        <span class="input-group-text rounded-0 rounded-start border-end-0" id="addon-wrapping">
                            <i class="bi bi-card-image"></i>
                        </span>
                        <input type="file" class="postModalValue form-control" name="photo" value="photo" aria-describedby="inputGroupFileAddon01" aria-label="Upload">
                    </div>

                </div>

                <!-- Modal footer -->
                <div class="modal-footer m-4">
                    <button type="submit" id="submitBtn" onclick="submitPost()" name="insertPostData" class="sendPostBtn btn btn-primary">
                        Post <i class="bi bi-send"></i>
                    </button>
                </div>

            </form>

        </div>

    </div>

</div>

