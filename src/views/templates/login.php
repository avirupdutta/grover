<?php $title = "Login Here!"; ?>
<?php require_once("layout.php"); ?>

<!-- CUSTOM STYLE -->
<link rel="stylesheet" href="../css/login.css">
</head>
<body>
    <?php require_once("navbar.php"); ?>
<main>
    <!-- Content Here -->
    <section class="section-one__login container">
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
                <form action="../../controllers/process/login.process.php" method="post">
                    <h2 class="text-center">Login Your Account</h2>
                    <hr>
                    <div class="form-group mt-4 mb-4">
                        <label for="email">Email</label>
                        <input type="email" placeholder="john@example.com" class="form-control" name="email">
                    </div>
                    <div class="form-group mt-4 mb-4">
                        <label for="Password">Password</label>
                        <input type="password" class="form-control" name="password">
                    </div>
                    <div class="form-group mt-4 mb-4 form-check">
                        <input type="checkbox" class="form-check-input" id="rememberMe">
                        <label class="form-check-label" for="rememberMe">Remember Me</label>
                        <p class="mt-4 mb-4 text-center">
                            <a href="#" class="text-danger mr-2">Forget Password?</a> | 
                            <a href="signup.php" class="text-warning ml-2">Create a new Account</a>
                        </p>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block mt-3">Submit <i class="far fa-paper-plane"></i></button>
                </form>        
            </div>
            <div class="col-sm-3"></div>
        </div>
    </section>
</main>

<?php require_once("footer.php"); ?>