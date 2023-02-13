<?php 
    // Start the session
    session_start();

    $loginFailed = false;
    $errors = [];
    
    include './headers/loginHeader.php';
    require './classes/user.loginValidator.php';
    require_once './classes/user.dbQuery.php';
    
    if(isset($_POST['loginUser']))
    {
        $loginValidator = new UserLoginValidator();
        $loginValidator->setEmail($_POST['email']);
        $loginValidator->setPassword($_POST['password']);
       list($errors, $user_details) = $loginValidator->validateUserLogin();

        if (!$errors)
        {
            // User is logged in
            $_SESSION['logged_in'] = true;
            $_SESSION['user_details'] = $user_details;
    
            header('Location: ./index.php');
            exit;

        }
        else
        {
            $loginFailed = true;
        }
    }

?>

<body>
    <?php if ($loginFailed):?>
        <div class="failAlert position-absolute mt-5 top-0 start-50 translate-middle alert alert-danger d-flex align-items-center" role="alert">
            <p><i class="bi bi-emoji-frown me-1"></i> Login failed</p>
        </div>
    <?php endif?>

    <section class="d-flex">
        <aside class="leftAside d-flex flex-column justify-content-center align-items-center">
            <img class="img-fluid" src="assets/svg/loginAnime.svg" alt="login image">
            <div class="d-flex justify-content-center align-items-center"><h2>Login to </h2><img class="img-fluid ms-1" src="assets/svg/bloggerLogoWhite.svg" alt="blogger logo"></div>
        </aside>

        <aside id="rightAside">
            <div class="header d-flex justify-content-end align-items-center">
                <p>Don't have an account?</p>
                <a href="signup.php" class="btn rounded-1" href="#">Signup</a>
            </div>
            <div class="formWrapper d-flex flex-column">
                <div class="formContents d-flex flex-column">
                    <h2 class="py-4">Login to your account</h2>
                    <form action="" method="post"> <!-- signup form -->
                        <div>
                            <label for="email">Email address <b class="text-danger">* </b><span class="text-danger"><?=$errors['email'] ?? '' ?></span></label>
                            <input type="text" name="email" value="" placeholder="Your email address">
                        </div>
                        <div>
                            <label for="password">Password <b class="text-danger">* </b><span class="text-danger"><?=$errors['password'] ?? '' ?></span></label>
                            <input type="password" name="password" value="" placeholder="Your password">
                        </div>
                        <div class="createAcctBtn mt-4">
                            <input type="submit" name="loginUser" class="btn rounded-1" value="Login to account">
                            <a href="#" class="mt-2 ms-2">Forgot password?</a>
                        </div>
                    </form>
                </div>
            </div>
        </aside>

    </section>
</body>