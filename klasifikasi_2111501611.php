<!DOCTYPE html>
<html lang="en">
<?php

include 'Koneksi_2111501611.php';
?>
<head>
    <meta charset="utf-8">
    <title>Pemketir_2111501611</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>

        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>2111501611</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="pp.jpg" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">Arif Firmamsyah</h6>
                        <span>mahasiswa</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="index.php" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Input Data</a>
                        <div class="dropdown-menu bg-transparent border-0">
                        <a href="FromLoadFile_2111501611.php" class="dropdown-item">Input Data</a>
                            <a href="LoadFile_2111501611.php" class="dropdown-item">Load File</a>
                        </div>
                    <a href="Preprocessing_2111501611.php" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Preprocecing</a>
                    <a href="Labelisasi_2111501611.php" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Labelisasi</a>
                    <a href="klasifikasi_2111501611.php" class="nav-item nav-link active"><i class="fa fa-table me-2"></i>Klasifikasi</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Input Data Uji</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="InputData_2111501611.php" class="dropdown-item">Input Data Uji</a>
                            <a href="classify_2111501611.php" class="dropdown-item">Klasifikasi Data Uji</a>
                        </div>
                    <a href="Akurasi_2111501611.php" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Akurasi Data</a>
                    <a href="pengukuran_2111501611.php" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Pengukuran</a>
                    <a href="idf.php" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Idf</a>
                    </div>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <form class="d-none d-md-flex ms-4">
                    <input class="form-control bg-dark border-0" type="search" placeholder="Search">
                </form>
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-envelope me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Message</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">See all message</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-bell me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Notificatin</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Profile updated</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">New user added</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Password changed</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">See all notifications</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="pp.jpg" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex">Arif Firmamsyah</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">My Profile</a>
                            <a href="#" class="dropdown-item">Settings</a>
                            <a href="#" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->
<?php
require_once "Koneksi_2111501611.php";
require_once "Fungsi_2111501611.php";

$sql = "delete from p_data_2111501611";
$result0 = mysqli_query($conn,$sql);

$sql = "select * from preprocessing_2111501611 where id_kategori is not null";
$result1 = $conn->query($sql);
if ($result1->num_rows == 0) {
    echo "Data Tidak Ditemukan";
} else {
    while ($d = mysqli_fetch_array($result1)) {
        $data = $d['data_bersih'];

        $data_array = explode(" ",$data);
        $str_data = array();
        foreach ($data_array as $value) {
            $str_data[] = "".$value;
            $kata = $value;

            $sql = "select * from kategori_2111501611";
            $result2 = $conn->query($sql);

            if ($result2->num_rows == 0) {
                echo "Data Tidak Ditemukan";
            } else {
                while ($d = mysqli_fetch_array($result2)) {
                    $id = $d[0];
                    $nm = $d[1];

                    $jumKata=getJmlKata($conn,$kata,$id);
                    $sql = "select * from p_data_2111501611 where kata='$kata' and id_kategori='$id'";
                    $result3 = $conn->query($sql);

                    if ($result3->num_rows == 0) {
                        $q = "insert into p_data_2111501611(kata,id_kategori,jml_data)
                        values('$kata','$id','$jumKata')";
                        $result3 = mysqli_query($conn,$q);
                    } else {
                        $q = "update p_data_2111501611 set jml_data='$jumKata'
                        where kata='$kata' and id_kategori='$id'";
                        $result3 = mysqli_query($conn,$q);
                    }
                    
                }
            }
            
        }
    }
}
$sql = "select * from p_data_2111501611 order by kata";
$result4 = $conn->query($sql);

?>

<table class="table table-bordered table-striped table-hover table-responsive">
    <br><br>
    <tr></tr>
    <tr>
        <td colspan="5"><strong>Probabilitas Kriteria Data Bersih pada Kategori</strong></td>
    </tr>
    <div class="col-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4"></h6>
                            <div class="table-responsive">
                                <table class="table">
        <td colspan="3"><strong></strong></td>
    </tr>
    <tr bgcolor="#191C24">
                <th>No.</th>
                <th>Kategori</th>
                <th>Kata</th>
                <th>Jumlah Kata Per Kategori</th>
                <th>Jumlah Data Per Kategori</th>
                <th>Probabilitas (Jumlah Data Per Data/Jumlah Seluruh Data)</th>

            </tr>
            <?php

    $i=1;
    while ($d = mysqli_fetch_array($result4)) {
        ?>
    <div class="col-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4"></h6>
                            <div class="table-responsive">
                                <table class="table">
        <td colspan="3"><strong></strong></td>
    </tr>
    <tr bgcolor="#191C24">
                <td class="text-center"><?php echo $i; ?></td>
                <td><?php echo getKat($conn,$d[1]); ?></td>
                <td class="text-center"><?php echo $d[0]; ?></td>
                <td class="text-center"><?php echo $d[2]; ?></td>
                <td class="text-center"><?php echo getJmlKat($conn,$d[1]); ?></td>
                <?php

            $N=getN($conn,$d[1]);
            $Kosakata=getKosakata($conn);
            $nilai=($d[2]+1)/($N+$Kosakata);

            $sql = "select * from p_data_2111501611 where kata='$d[0]' and id_kategori='$d[1]'";
            $result5 = $conn->query($sql);
            if ($result5->num_rows > 0) {
                $q = "update p_data_2111501611 set nilai='$nilai'
                where kata='$d[0]' and id_kategori='$d[1]'";
                $result5 = mysqli_query($conn,$q);
            }
            ?>
                <td class="text-center"><?php echo $nilai; ?></td>
            </tr>
            <?php
        $i=$i+1;
    }
    ?>
        </table>
        <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-secondary text-center rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h6 class="mb-0">Area</h6>
                                <a href="">Show All</a>
                            </div>
                            <canvas id="worldwide-sales"></canvas>
                        </div>
                    </div>
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-secondary text-center rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h6 class="mb-0">Area</h6>
                                <a href="">Show All</a>
                            </div>
                            <canvas id="salse-revenue"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sales Chart End -->

            <!-- Footer Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="#">Arif Firmansyah</a>, All Right Reserved. 
                        </div>
                        <div class="col-12 col-sm-6 text-center text-sm-end">
                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            Nim : <a href="https://htmlcodex.com">2111501611</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>