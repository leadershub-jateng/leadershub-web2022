<?php
  $connect = mysqli_connect("localhost", "root", "", "lhjateng");

  function query($query){
    global $connect;
    $result = mysqli_query($connect, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
      $rows[] = $row;
    }
    return $rows;
  }


  function add($data){
    global $connect;
    $judul = htmlspecialchars($data["judul"]);
    $penulis = htmlspecialchars($data["penulis"]);
    $isi = $data["isi"];
    $id_tag = htmlspecialchars($data["id_tag"]);
    $tanggal = date("Y-m-d");
    $id_user = 1;
    $gambar = upload();
    if(!$gambar){
      return false;
    }

    $query = "INSERT INTO artikel VALUES('', '$penulis', '$judul', '$tanggal', '$gambar', '$isi', '$id_tag', '$id_user')";
    mysqli_query($connect, $query);
    return  mysqli_affected_rows($connect);
  }


  function upload(){
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    if($error === 4){
      echo "
        <script>
          alert('Pilih gambar terlebih dahulu!');
          document.location.href = 'dashboardAdmin.php';
        </script>
      ";
      return false;
    }

    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar)); 
    if(!in_array($ekstensiGambar, $ekstensiGambarValid)){
      echo "
        <script>
          alert('Upload gambar dengan format jpg, jpeg, atau png!');
          document.location.href = 'addArticle.php';
        </script>
      ";
      return false;
    }
    $namaFileBaru = uniqid();
    $namaFileBaru .= $namaFile;
    move_uploaded_file($tmpName, 'img/article/' . $namaFileBaru);
    return $namaFileBaru;
  }
  function delete($id){
    global $connect;
    mysqli_query($connect, "DELETE FROM artikel WHERE id_artikel = $id");
    return mysqli_affected_rows($connect);
  }


  function edit($data){
    global $connect;
    $id = $data["id"];
    $judul = htmlspecialchars($data["judul"]);
    $penulis = htmlspecialchars($data["penulis"]);
    $isi = $data["isi"];
    $id_tag = htmlspecialchars($data["id_tag"]);
    $gambarLama = htmlspecialchars($_POST["gambarLama"]);
    if($_FILES['gambar']['error'] === 4){
      $gambar = $gambarLama;
    }else{
      $gambar = upload();
    }
    $query = "UPDATE artikel SET
      judul = '$judul', penulis = '$penulis', isi = '$isi',
      id_tag = '$id_tag', gambar = '$gambar' WHERE id_artikel = $id";
    mysqli_query($connect, $query);
    return  mysqli_affected_rows($connect);
  }
?>