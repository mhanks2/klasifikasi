<?php
//2111501611 Arif Firmansyah\\
require_once "Koneksi_2111501611.php";
require_once "Fungsi_2111501611.php";

$sql = "DELETE from p_data_2111501611";
$result0 = mysqli_query($conn,$sql);

$sql = "SELECT * from preprocessing_2111501611 where id_kategori is not null";
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

            $sql = "SELECT * from kategori_2111501611";
            $result2 = $conn->query($sql);

            if ($result2->num_rows == 0) {
                echo "Data Tidak Ditemukan";
            } else {
                while ($d = mysqli_fetch_array($result2)) {
                    $id = $d[0];
                    $nm = $d[1];

                    $jumKata=getJmlKat($conn,$kata,$id);
                    $sql = "SELECT * from p_data_2111501611 where kata='$kata' and id_kategori='$id'";
                    $result3 = $conn->query($sql);

                    if ($result3->num_rows == 0) {
                        $q = "INSERT INTO p_data_2111501611(kata,id_kategori,jml_data)
                        values('$kata','$id','$jumKata')";
                        $result3 = mysqli_query($conn,$q);
                    } else {
                        $q = "UPDATE p_data_2111501611 set jml_data='$jumKata'
                        where kata='$kata' and id_kategori='$id'";
                        $result3 = mysqli_query($conn,$q);
                    }
                    
                }
            }
            
        }
    }
}
$sql = "SELECT * from p_data_2111501611 order by kata";
$result4 = $conn->query($sql);

?>

<div class="col-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Tahap Preprocecing</h6>
                            <div class="table-responsive">
                                <table class="table">
        <td colspan="3"><strong>Daftar Preprocecing Data</strong></td>
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
                            <h6 class="mb-4">Tahap Preprocecing</h6>
                            <div class="table-responsive">
                                <table class="table">
        <td colspan="3"><strong>Daftar Preprocecing Data</strong></td>
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

            $sql = "SELECT * from p_data_2111501611 where kata='$d[0]' and id_kategori='$d[1]'";
            $result5 = $conn->query($sql);
            if ($result5->num_rows > 0) {
                $q = "UPDATE p_data_2111501611 set nilai='$nilai'
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