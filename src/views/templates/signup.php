<?php $title = "Create Your Account"; ?>
<?php require_once("layout.php"); ?>

<!-- CUSTOM STYLE -->
<link rel="stylesheet" href="<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<style>
    <body>
        {
            margin :0;
            padding:0;
            font-family: sans-serif;
        }

        .sign-up-form
        {
            width:300px;
            box-shadow: 0 0 3px 0 rgba(0,0,0,0.3);
            background: #fff;
            padding : 20px;
            margin: 8% auto 0;
            text-align: center;
        }


    </body>
</head>
<body>
    <?php require_once("navbar.php"); ?>
<main>
    <!-- Content Here -->
    <section class="section-one__login container">
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
            <div class="sign-up-form">
            <h1> Sign Up Nowv</h1>
                <form action="../../controllers/process/login.process.php" method="post">
                    <input type="text"class="input-box" placeholder="Enter your First-Name">
                    <input type="text"class="input-box" placeholder="Enter your First-Name"> 
                    <input type="email"class="input-box" placeholder="Enter your E-mail">
                    <input type="password"class="input-box" placeholder="Enter your Password">
                    <input type="password"class="input-box" placeholder="Re-enter your Password">
                    <p><span><input type="checkbox"></span> I agree to the terms of service </p>
                    <button type="button" class="signup-btn"> Sign-up </button>
                    <hr>
            </form>        
            </div>
            <div class="col-sm-3"></div>
        </div>
    </section>
</main>

<?php require_once("footer.php"); ?>