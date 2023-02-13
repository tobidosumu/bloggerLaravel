<div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="createModalLabel" aria-hidden="true">

    <div class="modal-dialog">
        <div class="modal-content modalContent">

            <form id="savePostData" action="" method="post">
                <!-- form starts here -->

                <div class="modal-header">
                    <h5 class="modal-title" id="createModalLabel">Create Category</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body px-4 my-2">
                    <!-- modal body starts here -->
                    <label for="title">Category name<b class="text-danger"> * </b><span class="text-danger"><?= $errors['categoryName'] ?? '' ?></span></label> <!-- Blog title starts here -->
                    <div class="input-group mt-2 mb-4">
                        <span class="input-group-text" id="addon-wrapping">
                            <i class="bi bi-card-heading"></i>
                        </span>
                        <input type="text" class="form-control py-2" name="categoryName" placeholder="Enter category name">
                    </div>
                </div> <!-- modal body ends here -->

                <div class="modal-footer">
                    <button type="submit" name="createCategoryBtn" class="sendPostBtn btn btn-primary me-2">Save <i class="bi bi-plus-circle"></i></button>
                </div>

            </form> <!-- form ends here -->

        </div>

    </div>
</div>