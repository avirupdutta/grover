<?php $title = "Create Your Account"; ?>
<?php require_once("layout.php"); ?>

<!-- CUSTOM STYLE -->
<link rel="stylesheet" href="<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
                    <input type="text"class="input-box" placeholder="Enter your First-Name">
                    <input type="text"class="input-box" placeholder="Enter your First-Name"> 
                    <input type="email"class="input-box" placeholder="Enter your E-mail">
                    <input type="password"class="input-box" placeholder="Enter your Password">
                    <input type="password"class="input-box" placeholder="Re-enter your Password">
            </form>        
            </div>
            <div class="col-sm-3"></div>
        </div>
    </section>
</main>

<?php require_once("footer.php"); ?>