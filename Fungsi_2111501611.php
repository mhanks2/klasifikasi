<!-- Arif Firmansyah 2111501611 -->
<?php
 function getJum($conn,$sql){
    $rs=$conn->query($sql);

    if (!$rs) {
      trigger_error('Invalid query: ' . $conn->error);
    }
    $jum= $rs->num_rows;
    return $jum;
  }

 function getJmlKat($conn,$kat){
    $sql="select * from preprocessing_2111501611 where id_kategori='$kat'";
    $jum=getJum($conn,$sql);
    return $jum;
  }

 function getJmlAll($conn){
    $sql="select * from preprocessing_2111501611 where id_kategori is not null";
    $jum=getJum($conn,$sql);
    return $jum;
  }
   
 function getKat($conn,$kat){
    $sql="select nm_kategori from kategori_2111501611 where id_kategori='$kat'";
    $rs=$conn->query($sql);
    $d = mysqli_fetch_row($rs);
    $nm_kategori = $d[0];
    return $nm_kategori;
  }

  function getJmlKata($conn,$data,$kat){
    $sql="select * from preprocessing_2111501611 where data_bersih like '%$data%' and id_kategori=$kat";
    $jum=getJum($conn,$sql);
    $jum=$jum;
    return $jum;
  }

  function getN($conn,$kat){
    $sql="select distinct kata from p_data_2111501611 where id_kategori=$kat";
    $jum=getJum($conn,$sql);
    return $jum;
  }

  function getKosakata($conn){
    $sql="select distinct kata from p_data_2111501611";
    $jum=getJum($conn,$sql);
    return $jum;
  }
  function getTMPNilai($conn,$id){
    $sql="select tmp_nilai from p_kategori_2111501611 where id_kategori='$id'";
    $rs=$conn->query($sql);
    $d = mysqli_fetch_row($rs);
    $tmp_nilai = $d[0];
    return $tmp_nilai;
  }
  function getNilTertinggi($conn){
    $sql="select max(nilai*tmp_nilai) from p_kategori_2111501611";
    $rs=$conn->query($sql);
    $d = mysqli_fetch_row ($rs);
    $nilai = $d[0];
    return $nilai;
  }
  function getKatTerpilih($conn){
    $sql="select * from p_kategori_2111501611 where (nilai*tmp_nilai)=(select max(nilai*tmp_nilai) from p_kategori_2111501611)";


    $rs = $conn->query($sql);
    $d = mysqli_fetch_row($rs);
    $id = $d[0];
    return $id;
  }
  function simpandatauji($conn,$data,$id){
    $sql="select * from classify_2111501611 where data_bersih='$data'";
    $result=$conn->query($sql);
    if ($result->num_rows > 0) {
      $q = "update classify_2111501611 set id_actual='$id'where data_bersih='$data'";
      $result = mysqli_query($conn,$q);
    } else {
      $q = "insert into classify_2111501611 (data_bersih,id_actual) values('$data','$id')";
      $result = mysqli_query($conn,$q);
    }
    if($result){
      $x='Penyimpanan Data Berhasil';
    }else{
      $x='Gagal Melakukan Penyimpanan Data';
    }
    return $x;
  }
  function getDokumenBenar($conn){
    $sql="select * from classify_2111501611 where id_actual=id_predicted";
    $jum = getJum($conn,$sql);
    return $jum;
  }
  function getDokumenAll($conn){
    $sql="select * from classify_2111501611 where id_actual is not null and id_predicted is not null";
    $jum = getJum($conn,$sql);
    return $jum;
  }

  function getTP($conn,$id){
  $sql = "select * from classify_2111501611 where id_actual=id_predicted and id_predicted=$id";
  $jum = getJum($conn, $sql);
  return $jum;

  }
  function getFP($conn,$id){
    $sql = "select * from classify_2111501611 where id_predicted is not null and id_predicted=$id and id_actual!=id_predicted";
    $jum = getJum($conn, $sql);
    return $jum;
}
function getFN($conn, $id){
  $sql = "select * from classify_2111501611 where id_predicted is not null and id_actual=$id and  id_actual!=id_predicted";
  $jum = getJum($conn, $sql);
  return $jum;
}


function getD($conn, $id) {
  $sql="select * from classify_2111501611 where id_actual is not null and id_predicted is not null";
  $jum = getJum($conn, $sql);
  return $jum;
}

function getTerm($conn,$id) {
  $sql = "select * from p_data_2111501611 where kata='$kategori' and id_kategori='$id'";
  $kategori = getTerm($conn,$id);
  return $kata;

}

function getDF($conn,$id){
  $sql = "select * from classify_2111501611 where id_predicted is not null and id_predicted=$id and id_actual!=id_predicted";
  $jum = getJum($conn, $sql);
  return $jum;
}

function getTF($conn, $id) {
  $sql = "select distinct kata from p_data_2111501611";
    $jum = getJum($conn, $sql);
    return $jum;
  }

function getIDF($conn, $id) {
  $sql="select * kata from p_data_2111501611";
$DF = getDF($conn, $id);
$D = getD($conn, $id);
  return log($D / $DF);
}

function getTFIDF($conn, $id) {
  $tf = getTF($conn, $id);
  $idf = getIDF($conn, $id);
  return $tf * $idf;
}
?>