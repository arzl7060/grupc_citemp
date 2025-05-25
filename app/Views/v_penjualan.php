<!DOCTYPE html>
<html lang="en">

<head>
  <title>Penjualan</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!--===============================================================================================-->
  <link rel="icon" type="image/png" href="<?= base_url('asset_login') ?>/images/icons/logoc-food.png" />
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?= base_url('asset_penjualan') ?>/css/main.css">
  <!--===============================================================================================-->
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url('AdminLTE') ?>/dist/css/adminlte.min.css?v=3.2.0">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?= base_url('AdminLTE') ?>/plugins/fontawesome-free/css/all.min.css">


</head>
<!-- Navbar -->
<nav class="navbar navbar-expand navbar-info navbar-light fixed-top shadow">
  <div class="container-fluid d-flex justify-content-between align-items-center">

    <!-- Left navbar links -->
    <ul class="navbar-nav me-auto">
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?= base_url('dashboard') ?>" class="nav-link text-white fw-semibold">Dashboard</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link text-white fw-semibold">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link text-white" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('Home/logout') ?>" role="button">
          <i class="fas fa-sign-out-alt"></i>Logout
        </a>
      </li>
    </ul>

  </div>
</nav>
<!-- /.navbar -->

<body>
  <div class="pos-container">
    <!-- Left Cart Section -->
    <div class="cart-section">
      <div class="cart-header">C-Food 14</div>
      <div class="table-info">Order : <span id="order-number">02</span></div>

      <div class="cart-items" id="cart-items">
        <div class="empty-cart">Your cart is empty</div>
        <!-- Cart items will be added here dynamically -->
      </div>

      <div class="total-section">
        <div class="total-row">
          <span>Subtotal</span>
          <span id="subtotal">Rp. 0.00</span>
        </div>
        <div class="total-row">
          <span>Pajak (11%)</span>
          <span id="tax">Rp. 0.00</span>
        </div>
        <div class="total-row" style="font-weight: bold; font-size: 1.1rem;">
          <span>Total</span>
          <span id="total">Rp. 0.00</span>
        </div>
      </div>

      <div class="action-buttons">
        <button class="action-btn btn-print" id="print-btn">Print</button>
        <button class="action-btn btn-payment" id="payment-btn">Payment</button>
      </div>
    </div>

    <!-- Right Menu Section -->
    <div class="menu-section">
      <div class="menu-header">Menu</div>

      <div class="menu-category">
        <div class="category-title">Seafood</div>
        <div class="menu-items">
          <div class="menu-item" data-name="Udang Asam Manis" data-price="25000.00">
            <div>Udang Asam Manis</div>
            <div class="item-price">Rp.25,000</div>
          </div>
          <div class="menu-item" data-name="Udang Bakar Madu" data-price="25000.00">
            <div>Udang Bakar Madu</div>
            <div class="item-price">Rp.25,000</div>
          </div>
          <div class="menu-item" data-name="Kerang Bumbu Padang" data-price="25000.00">
            <div>Kerang Bumbu Padang</div>
            <div class="item-price">Rp.25,000</div>
          </div>
        </div>
      </div>

      <div class="menu-category">
        <div class="category-title">Seafood</div>
        <div class="menu-items">
          <div class="menu-item" data-name="Udang Asam Manis" data-price="25000.00">
            <div>Udang Asam Manis</div>
            <div class="item-price">Rp.25,000</div>
          </div>
          <div class="menu-item" data-name="Udang Bakar Madu" data-price="25000.00">
            <div>Udang Bakar Madu</div>
            <div class="item-price">Rp.25,000</div>
          </div>
          <div class="menu-item" data-name="Kerang Bumbu Padang" data-price="25000.00">
            <div>Kerang Bumbu Padang</div>
            <div class="item-price">Rp.25,000</div>
          </div>
        </div>
      </div>

      <div class="menu-category">
        <div class="category-title">Minuman</div>
        <div class="menu-items">
          <div class="menu-item" data-name="Teh Manis" data-price="8000.00">
            <div>Es Teh Manis</div>
            <div class="item-price">8000</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

<script src="<?= base_url('asset_penjualan') ?>/js/script.js"></script>
<!-- jQuery -->
<script src="<?= base_url('AdminLTE') ?>/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url('AdminLTE') ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('AdminLTE') ?>/dist/js/adminlte.min.js?v=3.2.0"></script>

</html>