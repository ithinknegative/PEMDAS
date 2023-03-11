<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>
<body>
    <!-- Navbar -->
<nav class="fixed-top navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
     <a class="navbar-brand" href="#"><i class="bi bi-cart-dash-fill"></i> School Mart </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#"> About </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#"> contact </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#"> Logout </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

<!-- Main Content-->
<div class="container pt-5">
    <img class="mx-auto d-block pt-3 rounded-2" src="../img/market.jpg" alt="">
</div>
<!-- main content 2 -->
<div class="main-2">
    <div class="container-fluid ">
        <h3 class="fw-bold text-center my-4 text-danger">PAKET EVENT</h3>
        <div class="row">
          <?php $id = 0;?>
        <?php 
            include 'dashboardsesi.php';
            foreach($produk as $p){
        ?>
        <div class="col-3">
            <div class="card" style="width: 18rem;">
                 <img src="<?= $p['gambar'] ?>" class="card-img-top" alt="...">
             <div class="card-body m-3">
                <h4 class="fw-bold"><?= $p['produk']?></h4>
                <p class="fw-light card-text"><?= $p['deskripsi']?></p>
                <a class="btn btn-primary fw-semibold col-12" href="<?php echo 'transaksi.php?id='.$id++?>" >Rp. <?= $p['harga']?></a>
             </div>
            </div>
        </div>
          <?php } ?>
        </div>
    </div>
</div>
<div class="row pt-4">
    <p class="fst-normal text-center bg-dark text-light"> @Copyright by. Haikal akbar</p>
</div>
</body>
</html>