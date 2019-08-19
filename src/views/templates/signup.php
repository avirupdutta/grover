<?php $title = "Create Your Account"; ?>
<?php require_once("layout.php"); ?>

<!-- CUSTOM STYLE -->
<link rel="stylesheet" href="../css/login-signup.css">
</head>
<body>
    <?php require_once("navbar.php"); ?>
<main>
    <!-- Content Here -->
    <section class="section-one__login container">
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
                <h2 class="text-center">Create Your Account</h2>
                <hr>
                <form action="../../controllers/process/login.process.php" method="post">
                    <div class="form-group mb-4">
                        <div class="row">
                            <div class="col-sm-6">
                            <label for="">First Name <span class="text-danger">*</span></label>
                                <input type="text"class="form-control" required>
                            </div>
                            <div class="col-sm-6">
                            <label for="">Last Name <span class="text-danger">*</span></label>
                                <input type="text"class="form-control" required> 
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-4">
                        <label for="">Email <span class="text-danger">*</span></label>
                        <input type="email"class="form-control" placeholder="john@example.com" required>
                    </div>
                    <div class="form-group mb-4">
                        <label for="">Password <span class="text-danger">*</span></label>
                        <input type="password"class="form-control" placeholder="Minimum 6 characters" required>
                    </div>
                    <div class="form-group text-center mb-4">
                        <p>Already have an Account? <a class="text-warning" href="./login.php">Login Here</a></p>
                        <p>By creating your account you agree to accept our <a href="#">Terms and Conditions</a></p>
                    </div>
                    <button type="submit" class="signup-btn btn btn-block btn-success">Sign-up <i class="far fa-paper-plane"></i></button>
                </form>        
            </div>
            <div class="col-sm-3"></div>
        </div>
    </section>
</main>

<?php require_once("footer.php"); ?>