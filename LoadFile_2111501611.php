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
                            <a href="LoadFile_2111501611.php" class="dropdown-item active">Load File</a>
                        </div>
                    <a href="Preprocessing_2111501611.php" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Preprocecing</a>
                    <a href="Labelisasi_2111501611.php" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Labelisasi</a>
                    <a href="klasifikasi_2111501611.php" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Klasifikasi</a>
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
            <?php
include 'Koneksi_2111501611.php';
include 'XML2Array_2111501611.php';

$link = $_GET['link'];
$xml=simplexml_load_file($link);
if( !$xml) //using simplexml_load_file function to load xml file
{
echo 'load XML failed ';
}
else
{
$array = XML2Array($xml);

$a=0;

//save to tabel galert_data
foreach( $array as $key => $value) {
    $id = $array['id'];
    $title = $array['title'];
    $link = $array['link'];
    $update = $array['updated'];

    //select to database
    $sql = "SELECT * FROM galert_data_2111501611 where galert_id='$id'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo"";
    }else{
        //save to database
        $q = "INSERT INTO galert_data_2111501611 (galert_id,galert_title,galert_link,galert_update)
        VALUES('$id','$title','$link','$update')";
        $result = mysqli_query($conn,$q);

        //save to tabel galert_entry
        foreach($xml as $record)
        {
            $id2 = $record->id;
            $title = $record->title;
            $link = $record->link;
            $published = $record->published;
            $update = $record->update;
            $content = $record->content;
            $author = $record->author;

            //select to database
            $sql = "SELECT * FROM galert_entry_2111501611 where entry_id='$id2'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                echo "";
            }else{
                //save to data base
                $q = "INSERT INTO galert_entry_2111501611(entry_id,entry_title,entry_link,entry_published,
                entry_updated,entry_content,entry_author,feed_id)
                VALUES('$id2','$title','$link','$published','$update','$content','$author','$id')";

                $result = mysqli_query($conn,$q);
            }
        }
    }
}

if ($result) {
    echo '<h4>Penyimpanan Data Berhasil </h4>';
}else
    echo '<h2>Gagal Melakukan Penyimpanan Data</h2>';
}
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style>
    body
        {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }
</style>      
</head>
</body>
<body>
<div class="col-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Tahap Preprocecing</h6>
                            <div class="table-responsive">
                                <table class="table">
        <td colspan="3"><strong>Daftar Preprocecing Data</strong></td>
    </tr>
    <tr bgcolor="#191C24">
        <th>No</th>
        <th>ID</th>
        <th>Title</th>
        <th>Link</th>
        <th>Publisher</th>
        <th>Update</th>
        <th>Content</th>
        <th>Author</th>
    </tr>
    <?php

    $i=1;
        foreach($xml as $r)
            {
    ?>
     <div class="col-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Tahap Preprocecing</h6>
                            <div class="table-responsive">
                                <table class="table">
        <td colspan="3"><strong>Daftar Preprocecing Data</strong></td>
    </tr>
    <tr bgcolor="#191C24">
        <td><?php echo $i++;?></td>
        <td><?php echo $r->id;?></td>
        <td><?php echo $r->title?></td>
        <td><?php echo $r->link;?></td>
        <td><?php echo $r->$published;?></td>
        <td><?php echo $r->update;?></td>
        <td><?php echo $r->content;?></td>
        <td><?php echo $r->author;?></td>
    </tr>
    <?php
            }
  ?>
</table><br />
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