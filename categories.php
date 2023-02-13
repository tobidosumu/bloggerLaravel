<?php
require './classes/dbConnect.php'; // DbConnect
require './classes/category.validator.php'; // CategoryValidator

$categoryNameAdded = false;
$categoryNameUpdated = false;

if (isset($_POST['createCategoryBtn'])) // Checks if category form is submitted
{
    $checkCategoryName = new CategoryValidator();
    $checkCategoryName->setCategoryName($_POST['categoryName']);
    $errors = $checkCategoryName->validatedCategory();

    if (!$errors)
    {
        $validCategoryName = new CategoryQueryDb();
        $validCategoryName->setCategoryName($_POST['categoryName']);
        $validCategoryName->createCategory();

        $categoryNameAdded = true; // Alerts: Category name saved successfully
    }
}

if (isset($_GET['deleteId']))
{
    $categoryRow = new CategoryQueryDb();
    $categoryRow->setCategoryId($_GET['deleteId']);
    $categoryRow->deleteCategory();
}

if (isset($_POST['updateCategoryBtn'])) 
{
    $categoryRow = new CategoryQueryDb();
    $categoryRow->setCategoryId($_GET['id']);
    $categoryRow->setCategoryName($_POST['categoryName']);

    $validateNewCategoryName = new CategoryValidator();
    $validateNewCategoryName->setCategoryName($_POST['categoryName']);
    $errors = $validateNewCategoryName->validatedCategory();

    if (!$errors) 
    {
        $categoryRow->updateCategory();

        $categoryNameUpdated = true; // Alerts: Category name updated successfully
    }
}

?>

<body>

    <div class="mainContainer">

        <?php include './headers/categoriesHeader.php' ?>

        <section class="categoriesWrapper">

            <?php if ($categoryNameAdded): ?>

                <div id="hideSuccessMessage" class="displaySuccessMessage p-4 text-center m-auto border rounded-3">
                    
                    <p>Category name saved successfully!</p>

                    <button type="button" class="btn-close" onclick="hideSuccessMessage()"></button>

                </div>

            <?php endif ?>    

            <?php if (!empty($_GET['id'])): ?>
                
                <?php include './modals/forms/updateCategoryForm.php' ?>

            <?php endif ?>

            <table class="table table-striped table-hover">

                <thead>
                    <tr>
                        <th scope="col">SN</th>
                        <th scope="col">Category Name</th>
                        <th scope="col">Date Created</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>

                <tbody>

                    <?php 
                        $result = new CategoryQueryDb();
                        $categories = $result->fetchAllCategoryNames();
                        foreach ($categories as $key => $category):?>
                        <tr>
                            <th scope="row"><?= $key + 1 ?></th>
                            <td><?= $category['categoryName'] ?></td>
                            <td><?= $category['dateCreated'] ?></td>
                            <td>
                                <!-- This button opens the UPDATE/EDIT form when clicked -->
                                <a href="categories.php?id=<?= $category['id']; ?>" class="me-3">
                                    <i class="bi bi-pencil-square"></i>
                                </a>

                                <!-- This button deletes a category row -->
                                <a href="categories.php?deleteId=<?= $category['id'] ?>">
                                    <i class="bi bi-trash"></i>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach ?>

                </tbody>

            </table>
                
        </section>l

        <?php include './footers/globalFooter.php' ?>

        <!-- Button for create category modal -->
        <button type="button" class="postBtn border-0" data-bs-toggle="modal" data-bs-target="#createModal">
            <i class="bi bi-plus-circle"></i>
        </button>

        <!-- Create category Modal -->
        <?php include './modals/forms/createCategoryForm.php' ?>

    </div>

</body>

</html>