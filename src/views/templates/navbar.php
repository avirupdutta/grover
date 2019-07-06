<nav class="pl-lg-5 pr-lg-5 navbar navbar-expand-lg navbar-dark bg-base fixed-top">
  
  <!-- Hamburger icon -->
  <button class="navbar-toggler">
    <span class="navbar-toggler-icon" id="menuTogglerBtn"></span>
  </button>

    <!-- Grover PNG Logo-->
  <a class="navbar-brand" href="./index.php">
    <img class="nav-logo w-100" src="../images/png-web-logo2.png" alt="logo">
  </a>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-lg-5">
      <li class="nav-item ml-3">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item ml-3">
        <a class="nav-link" href="#">Categories</a>
      </li>
      <li class="nav-item ml-3">
        <a class="nav-link" href="#">Offers</a>
      </li>
    </ul>
    <form class="form-inline input-group text-center mr-lg-5">
      <input class="form-control" type="text" placeholder="Search...">
      <div class="input-group-append">
        <button class="btn btn-warning" type="submit"><i class="fa fa-search"></i></button>
      </div>
    </form>
    <!-- Make these buttons available for logged in user -->
    <!-- <div class="user-logged-in ml-auto">
      <div class="btn-group mr-sm-1">
        <button type="button" class="btn btn-light">Account <i class="fas fa-user-circle"></i></button>
        <button type="button" class="btn btn-light dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span class="sr-only">Toggle Dropdown</span>
        </button>
        <div class="dropdown-menu">
          <a class="dropdown-item mb-3" href="#"><i class="fas fa-list-ul"></i> My Orders</a>
          <a class="dropdown-item mb-3" href="#"><i class="fas fa-heart"></i> Wishlist</a>
          <a class="dropdown-item mb-3" href="#"><i class="fas fa-bell"></i> Notifications</a>
          <a class="dropdown-item mb-3" href="#"><i class="fas fa-sign-in-alt"></i> Logout</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Help Center</a>
        </div>
      </div>
      <a href="#" class="btn btn-warning mr-auto btn-cart"><i class="fas fa-shopping-cart"></i></a>
    </div> -->

    <!-- Make these buttons available for logged out vissitors -->
    <div class="user-logged-out ml-auto">
      <a name="" id="" class="btn btn-light" href="./login.php" role="button">Sign In <i class="fas fa-sign-in-alt"></i></a>
    </div>
  </div>
</nav>

<div class="aside-navbar-fixed" id="asideNavbarFixed">
  <div class="" id="overlayNavbar">
    <!-- <div class="text-right">
      <a href="javascript:void(0)" class="btn-close-navbar" onclick="closeNavbar()">&times;</a>
    </div> -->
    <div class="overlay-content">
      <a href="#">Categories</a>
      <a href="#">Best Offers</a>
      <a href="#">Popular Near You!</a>
      <a href="#">Contact Us</a>
      <hr>
      <a href="#">Best Offers</a>
      <a href="#">Popular Near You!</a>
      <a href="#">Contact Us</a>
      <hr>     
      <a href="#">Best Offers</a>
      <a href="#">Popular Near You!</a>
      <a href="#">Contact Us</a>
    </div>

  </div>
</div>