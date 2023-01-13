<nav class="navbar navbar-expand-lg navbar-light bg-white pt-4 fixed-top ">
  <div class="container">
    <a class="navbar-brand d-flex justify-content-between align-items-center order-lg-0" href="<?php echo  APPROOT; ?>/pages/index">
      <span class="text-uppercase fw-lighter ms-2">electroMVC</span>
    </a>

    <div class="order-lg-2 nav-btns">
    <?php if(isset($_SESSION['user_id'])) : ?>

      <button type="button" class="btn">
        <i class="fa fa-shopping-cart position-relitive"></i>
        <span class="postion-absolute top-3 start-30 translate-middle badge bg-primary">2</span>
      </button>

      <button type="button" class="btn">
        <i class="fa fa-heart position-relitive"></i>
        <span class="postion-absolute top-3 start-30 translate-middle badge bg-primary">2</span>
      </button>

      <a href="<?php echo URLROOT; ?>/users/logout  ">
        <button type="button" class="btn">
          <i class="fa fa-sign-out position-relitive"></i>
          <span>logout</span>
        </button>
      </a>
      <?php else : ?>
      <a href="<?php echo URLROOT; ?>/users/login">
        <button type="button" class="btn">
          <i class="fa fa-sign-in position-relitive"></i>
          <span>login</span>
        </button>
      </a>

      <?php endif; ?>
      <button class="navbar-toggler border-0" data-bs-toggle="collapse" data-bs-target="#navMenu">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>

    <div class="collapse navbar-collapse order-lg-1" id="navMenu">
      <ul class="navbar-nav mx-auto text-center">
        <li class="nav-item px-2 py-2"><a href="<?php echo URLROOT; ?>/pages/index" class="nav-link text-uppercase texr-dark">home</a></li>
        <li class="nav-item px-2 py-2 dropdown">
          <a href="<?php echo URLROOT; ?>/pages/categories" class="nav-link text-uppercase texr-dark">categories</a>
        </li>
        <li class="nav-item px-2 py-2 "><a href="<?php echo URLROOT; ?>/pages/aboutUs" class="nav-link text-uppercase texr-dark">about us</a></li>
        <li class="nav-item px-2 py-2 border-0"><a href="<?php echo URLROOT; ?>/pages/contactUs" class="nav-link text-uppercase texr-dark">contact us</a></li>
      </ul>
    </div>
  </div>
</nav>