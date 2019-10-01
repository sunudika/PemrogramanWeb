<!DOCTYPE html>
<html lang="en" id="home">

<?php 
  include ('conn.php'); 
  $status = '';
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $karir = $_POST['karir'];
      $npm = $_POST['npm'];
      $nama = $_POST['nama'];
      $nama2 = $_POST['nama2'];
      $alamat = $_POST['alamat'];
      $goldar = $_POST['goldar'];
      $jeiskel = $_POST['jeiskel'];
      $status = $_POST['status'];
      $agama = $_POST['agama'];
      $tl = $_POST['tl'];
      $email = $_POST['email'];
      $telp = $_POST['telp'];
      $motto = $_POST['motto'];
      $deskripsi1 = $_POST['deskripsi1'];
      $deskripsi2 = $_POST['deskripsi2'];
      $skill1 = $_POST['skill1'];
      $skill2 = $_POST['skill2'];
      $skill3 = $_POST['skill3'];
      $skill4 = $_POST['skill4'];
      //query SQL
      $query = "INSERT INTO biodata (motto,deskripsi1,deskripsi2,skill1,skill2,skill3,skill4,nama2,karir,npm, nama, alamat, goldar, jeiskel, status, agama, tl, email, telp) VALUES('$motto','$deskripsi1','$deskripsi2','$skill1','$skill2', '$skill3','$skill4','$nama2','$karir','$npm','$nama','$alamat','$goldar','$jeiskel', '$status','$agama','$tl','$email','$telp')"; 

      $result = mysqli_query(connection(),$query);
      if ($result) {
        $status = 'ok';
      }
      else{
        $status = 'err';
      }
  }

?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/960_12_col.css">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/dashboard.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <title>Sunu</title>
</head>

<body>
    
    <div class="container_12">
            <nav>
                    <div class="logo">
                        <h1>Sunu</h1>
                    </div>
                <ul>
                    <li><a href="#riwayat">Pendidikan</a></li>
                    <li><a href="#skill">Skills</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#home">Home</a></li>
                </ul>
            </nav>

        <div class="container_12">
        <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>NPM</th>
                  <th>Nama</th>
                  <th>Alamat</th>
                  <th>Status</th>
                  <th>Agama</th>
                  <th>Email</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                  //proses menampilkan data dari database:
                  //siapkan query SQL
                  $query = "SELECT * FROM biodata";
                  $result = mysqli_query(connection(),$query);
                 ?>
                 <?php if(isset($data['nama'])) { ?>
                 
                 <?php }else{ ?>
                  <?php while($data = mysqli_fetch_array($result)): ?>
                  <tr>
                    <td><?php echo $data['NPM'];  ?></td>
                    <td><?php echo $data['Nama'];  ?></td>
                    <td><?php echo $data['Alamat'];  ?></td>
                    <td><?php echo $data['Status'];  ?></td>
                    <td><?php echo $data['Agama'];  ?></td>
                    <td><?php echo $data['Email'];  ?></td>
                    <td>
                      <a href="<?php echo "view.php?npm=".$data['NPM']; ?>" class="btn btn-outline-danger btn-sm"> View</a>
                      &nbsp;&nbsp;
                      <a href="<?php echo "update.php?npm=".$data['NPM']; ?>" class="btn btn-outline-warning btn-sm"> Update</a>
                      &nbsp;&nbsp;
                      <a href="<?php echo "delete.php?npm=".$data['NPM']; ?>" class="btn btn-outline-danger btn-sm"> Delete</a>
                    </td>
                  </tr>
                 <?php endwhile ?>
                 <?php } ?>
              </tbody>
            </table>
            <a href="<?php echo "form.php"; ?>" class="btn btn-dark btn-sm"> Tambah Data Baru</a>
          </div>
        </div>

</body>

<script></script>

</html>