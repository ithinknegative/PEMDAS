<html>
<?php
    $id = $_GET['id'];
    include("dashboardsesi.php")
?>
    <head>
        <title>transaksi</title>
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
      <div class="collapse navbar-collapse" id="nav4barSupportedContent">
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
<div class="container mt-5">
    <h1 class="text-center pt-3 fw-semibold"> PEMBELIAN PAKET </h1>
    <div class="row justify-content-center pt-3 ">
        <form action="" method="post">
            <div class="bg-dark row rounded py-3">
                    <div class="col-6 p-3">
                        <div class="col-12 my-2">
                            <div class="row justify-content-center">
                                <div class="col-4">
                                    <label class="font text-light fw-bold">No Transaksi</label>
                                </div>
                                <div class="col-8">
                                    <input type="text" name="no_transaksi" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 my-2">
                            <div class="row justify-content-center">
                                <div class="col-4">
                                    <label class="font text-light">Tanggal Transaksi</label>
                                </div>
                                <div class="col-8">
                                    <input type="date" name="tanggal" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 my-2">
                            <div class="row justify-content-center">
                                <div class="col-4">
                                    <label class="font text-light">Nama Customer</label>
                                </div>
                                <div class="col-8">
                                    <input type="text" name="cust" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 my-2">
                            <div class="row justify-content-center">
                                <div class="col-4">
                                    <label class="font text-light">Pilihan Paket</label>
                                </div>
                                <div class="col-8">
                                    <input type="text" name="paket" class="form-control" value=   "<?php echo $produk[$id]["produk"]; ?>" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 my-2">
                            <div class="row justify-content-center">
                                <div class="col-4">
                                    <label class="font text-light"> Harga Paket</label>
                                </div>
                                <div class="col-8">
                                    <input type="text" name="harga" class="form-control" value="<?php echo $produk[$id]["harga"]; ?>" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <button type="submit" name="form1" class="btn btn-outline-light col-12">hitung total harga</button>
                    </div>
            </div>
        </form>
    </div>

    <?php 
    if(isset($_POST['form1'])){
        @$input1 = intval($_POST['harga']);
        @$harga = $input1;
        @$input2 = intval($_POST['tambahan']);
        @$tambahan = $input2;
        @$total = $harga + $tambahan;
    }
    ?>

    <div class="row justify-content-center mt-4">
        <div class="col-6">
            <form action="" method="POST">
                <div class="col-12 my-2">
                    <div class="row justify-content-start my-2">
                        <div class="col-3">
                            <label class="font text-blue">Total Harga :</label>
                        </div>
                        <div class="col-8">
                            
                            <input type="text" class="form-control" value="<?php echo @$total ?>" name="total_harga">
                        </div>
                    </div>
                    <div class="row justify-content-start my-2">
                        <div class="col-3">
                            <label class="font text-blue">Pembayaran :</label>
                        </div>
                        <div class="col-8">
                            <input type="text" class="form-control" name="pembayaran">
                        </div>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-dark" name="kembalian">Hitung Kembalian</button>
                    </div>
                </div>
            </form>
        </div>

        <?php 
            if(isset($_POST['kembalian'])){
                $bayar = intval($_POST['pembayaran']);
                $total_pembayaran = intval($_POST['total_harga']);
                @$kembalian = $bayar - $total_pembayaran;
            }
        ?>
        <div class="col-6">
            <form action="">
                <div class="col-12 my-2">
                    <div class="row justify-content-end my-2">
                        <div class="col-3">
                            <label class="font text-blue">Kembalian :</label>
                        </div>
                        <div class="col-9">
                            <input type="text" value="<?php echo @$kembalian ?>" class="form-control" readonly>
                        </div>
                    </div>
                    <div class="row justify-content-end">
                        <a class="btn btn-outline-primary col-4" data-bs-toggle="modal" href="#modal" role="button">simpan transaksi</a>
                    </div>
                    <div class="modal fade" id="modal" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                            <div class="modal-body text-center">
                                <h3 class="text-success">Success</h3>
                                <p>Pembayaran Telah Berhasil Dilakukan</p>
                            </div>
                            <div class="modal-footer justify-content-center">
                                <a href="dashboard.php" class="btn btn-outline-primary col-12" >Home</a>
                            </div>
                            </div>
                          </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- footer -->
<div class="container-fluid mt-2 bg-dark">
    <div class="text-center pt-5">
        
    </div>
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>