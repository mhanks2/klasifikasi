<!DOCTYPE html>
<html>  
<head>   
</head>
<body>
<table class="table table-bordered table-striped">
    <td colspan="3">
 
            
        </script>
        </td>
</table>
<br>

<?php
require_once "Koneksi_2111501611.php";
require_once "Fungsi_2111501611.php";

$sql = "SELECT id_kategori FROM kategori_2111501611";
$result = $conn->query($sql);
if ($result->num_rows == 0) {
    echo "Data Tidak Ditemukan";
} else {
    ?>
    <br></br>
   <table class="table table-bordered table-striped">
    <thead>
        <tr>
            <td colspan="5"><strong>Menghitung Recall</strong></td>
        </tr>
    <tr bgcolor="#191C24"> 
    <th>No.</th>
    <th>Kategori</th>
    <th>True Positive</th>
    <th>False Negative</th>
    <th>Recall</th>
    </tr>
    </thead>
    <?php
    $i=1;
    $tot=0;
    while ($d = mysqli_fetch_array($result)){
        $id = $d['id_kategori'];
        $kategori = getKat($conn, $id);

        $TP = getTP($conn,$id);
        $FN = getFN($conn,$id);
        $P = $TP/($TP+$FN);

        $tot= ($tot+$P);
        ?>
          
        <tr bgcolor="#191C24"> 
            <td><?php echo $i; ?></td>
            <td><?php echo $kategori; ?></td>
            <td><?php echo $TP; ?></td>
            <td><?php echo $FN; ?></td>
            <td><?php echo '('.$TP.'/ ('.$TP.'+'.$FN.') = '.$P; ?></td>
        </tr>
        <?php

        $i=$i+1;
  }
  ?>
 </table>
 <?php
   echo " ==> Nilai Recall Yang Didapat : ".($tot/($i-1))*100;

   require_once "Pengukuran_2111501611.php";
}
?>