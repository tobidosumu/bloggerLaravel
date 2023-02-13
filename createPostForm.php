<!-- Create POST Modal -->
<div class="postModal position-fixed top-50 start-50 translate-middle rounded-3 mt-5" id="postModal">
        
    <div class="modal-dialog modal-dialog-centered">

        <div class="modal-content modalContent">

            <form action="" method="post" enctype="multipart/form-data">

                <div class="modal-header mx-4 my-3">
                    <h5 class="modal-title">Create Post</h5>
                    <button type="button" onclick="closePostModal()" class="btn-close"><i class="bi bi-x-lg"></i></button>
                </div>

                <div class="modal-body px-4 my-2">

                    <label for="title">Blog title<b class="text-danger"> * </b><span class="text-danger"><?= $errors['title'] ?? '' ?></span></label> <!-- Blog title starts here -->
                    <div class="input-group mt-2 mb-3">
                        <span class="input-group-text" id="addon-wrapping">
                            <i class="bi bi-card-heading"></i>
                        </span>
                        <input type="text" class="postModalValue form-control py-2" name="title" value="<?= $_POST['title'] ?? '' ?>" placeholder="Add blog title">
                    </div>

                    <div class="d-flex justify-content-between align-items-center">
                        <label for="title" class="mt-3">Blog category<b class="text-danger"> * </b><span class="text-danger"><?= $errors['category'] ?? '' ?></span></label> <!-- Blog category starts here -->
                        <span><a href="./categories.php" target="_blank" class="addCatBtn btn btn-sm btn-outline-primary">Add category <i class="bi bi-box-arrow-up-right ms-1"></i></a></span>
                    </div>

                    <div class="input-group mt-2 mb-3">

                        <span class="input-group-text rounded-0 rounded-start border-end-0" id="addon-wrapping">
                            <i class="bi bi-list"></i>
                        </span>

                        <select class="form-select py-2" name="category" id="floatingSelect" aria-label="Floating label select example">
                            
                            <option>Select a category</option>

                            <?php

                                $categoryNames = new CategoryQueryDb();
                                $categories = $categoryNames->fetchAllCategoryNames();

                                foreach ($categories as $category): ?>

                                    <?php 

                                        if ((isset($_POST['category']) && $_POST['category'] == $category['id'])): 
                                    ?>

                                        <option class="postModalValue" value="<?= $category['id'] ?>" selected> 
                                            <?= $category['categoryName'] ?> 
                                        </option> ;
                        
                                    <?php endif ?>
                                
                                    <option class="postModalValue" value="<?= $category['id'] ?>"> 
                                        <?= $category['categoryName'] ?> 
                                    </option> 

                            <?php endforeach ?>

                        </select>

                    </div>

                    <label for="title">Blog description<b class="text-danger"> * </b><span class="text-danger"><?= $errors['description'] ?? '' ?></span></label> <!-- blog description starts here-->
                    
                    <div class="input-group mt-2 mb-3">

                        <span class="input-group-text rounded-0 rounded-start border-end-0" id="addon-wrapping">
                            <i class="bi bi-pencil-square"></i>
                        </span>

                        <textarea class="postModalValue form-control rounded-0 rounded-end decriptionField" name="description" placeholder="Add blog description" id="floatingTextarea2" style="height: 100px"><?= $_POST['description'] ?? '' ?></textarea>
                    
                    </div>

                    <label for="title">Blog photo<b class="text-danger"> * </b><span class="text-danger"><?= $errors['photo'] ?? '' ?></span></label> <!-- upload blog photo starts here-->
                    <div class="input-group mt-2 mb-3">
                        <span class="input-group-text rounded-0 rounded-start border-end-0" id="addon-wrapping">
                            <i class="bi bi-card-image"></i>
                        </span>
                        <input type="file" class="postModalValue form-control" name="photo" value="<?= $_POST['photo'] ?? '' ?>" aria-describedby="inputGroupFileAddon01" aria-label="Upload">
                    </div>

                </div> <!-- modal body ends here -->

                <div class="modal-footer m-4">
                    <button type="submit" id="submitBtn" onclick="submitPost()" name="insertPostData" class="sendPostBtn btn btn-primary">Post <i class="bi bi-send"></i></button>
                </div>

            </form> <!-- form ends here -->

        </div>

    </div>

</div>

