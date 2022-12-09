<?
$mysqli = new mysqli("localhost", "root", "", "db_statistik");
 
  /* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}
 
  // ambul ip address user
  $user_ip=$_SERVER['REMOTE_ADDR'];
 
 //cek apakah sudah dikunjungi oleh ip address diatas
  $check_ip = $mysqli->query("select userip from pageview where page='yourpage' and userip='$user_ip'");
  if($check_ip->num_rows>=1)
  { 
  }
  else
  {
    //jika belum dikunjungi oleh ip address user diatas akan melakukan perhitungan
    $mysqli->query("insert into pageview values('','yourpage','$user_ip')");
   $mysqli->query("update totalview set totalvisit = totalvisit+1 where page='yourpage' ");
  }
?>
 
<html>
<head>
head>
 
<body>
  
    //menampilkan statistik pengunjung
    $stmt = $mysqli->query("select totalvisit from totalview where page='yourpage' ");
  ?>
 
    <p>Ip Address Anda  echo $user_ip=$_SERVER['REMOTE_ADDR'];;?>p>

  <p>Halaman ini telah dikunjungi sebangak  echo $stmt->num_rows;?> kali.p>
 
<body>
<html>
