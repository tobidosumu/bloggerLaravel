<!-- Update category modal -->
<div class="updateModalContainer">
    <form action="" method="HEAD" class="mb-5 p-3 border rounded-3">
        
        <!-- Modal body -->
        <div class="modal-body px-4 my-2">

            <label for="category">Update Category Name<b class="text-danger"> * </b>
                <span class="text-danger">Error</span>
            </label>

            <div class="input-group mt-2 mb-4">
                <span class="input-group-text" id="addon-wrapping">
                    <i class="bi bi-card-heading"></i>
                </span>

                <!-- Blog category name input -->
                <input type="text" class="form-control py-2" name="categoryName" placeholder="New category name" value="">
            
            </div>
        </div> 

        <!-- Modal footer -->
        <div class="modal-footer">
            <button type="submit" name="updateCategoryBtn" class="sendPostBtn btn btn-success me-4">
                Update <i class="bi bi-pencil-square"></i>
            </button>
        </div>

    </form>
</div>
