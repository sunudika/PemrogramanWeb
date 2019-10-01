<?php 
  include ('conn.php'); 

  $status = '';
  $result = '';

  if ($_SERVER['REQUEST_METHOD'] === 'GET') {
      if (isset($_GET['npm'])) {
          //query SQL
          $npm_upd = $_GET['npm'];
          $query = "SELECT * FROM biodata WHERE npm = '$npm_upd'"; 

          //eksekusi query
          $result = mysqli_query(connection(),$query);
          $data = mysqli_fetch_array($result);
          
          $karir = $data['karir'];
          $npm = $data['NPM'];
          $nama = $data['Nama'];
          $nama2 = $data['Nama2'];
          $alamat = $data['Alamat'];
          $goldar = $data['Goldar'];
          $jeiskel = $data['Jeiskel'];
          $status = $data['Status'];
          $agama = $data['Agama'];
          $tl = $data['TL'];
          $email = $data['Email'];
          $telp = $data['Telp'];
          $motto = $data['motto'];
          $deskripsi1 = $data['deskripsi1'];
          $deskripsi2 = $data['deskripsi2'];
          $skill1 = $data['skill1'];
          $skill2 = $data['skill2'];
          $skill3 = $data['skill3'];
          $skill4 = $data['skill4'];
      }  
  }

  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $npm = $_POST['npm'];
      $karir = $_POST['karir'];
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
      $sql = "UPDATE `biodata` 
        SET 
            `Nama`='$nama',
            `Alamat`='$alamat',
            `Goldar`='$goldar',
            `Jeiskel`='$jeiskel',
            `Status`='$status',
            `Agama`='$agama',
            `TL`='$tl',
            `Email`='$email',
            `Telp`='$telp',
            `Nama2`='$nama2',
            `motto`='$motto',
            `deskripsi1`='$deskripsi1',
            `deskripsi2`='$deskripsi2',
            `skill1`='$skill1',
            `skill2`='$skill2',
            `skill3`='$skill3',
            `skill4`='$skill4',
            `karir`='$karir'
         WHERE `NPM`='$npm'";

      $result = mysqli_query(connection(),$sql);
      if ($result) {
        $status = 'ok';
      }
      else{
        $status = 'err';
      }
      header('Location: index.php?status='.$status);
  }

?>

<!DOCTYPE html>
<html lang="en" id="home">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/960_12_col.css">
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
                    <li><a href="index.php">Data</a></li>
                    <li><a href="#riwayat">Pendidikan</a></li>
                    <li><a href="#skill">Skills</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#home">Home</a></li>
                </ul>
            </nav>
        <form action="update.php" method="POST">
        <div class="grid_4">
            <div class="profile">
            <img src="images/sunu.jpg" alt="">
                    <input type="text" placeholder="Nama" name="nama" value="<?php echo $nama; ?>" required="required" style="text-align:center;">
                    <input type="text" placeholder="Career" name="karir" value="<?php echo $karir; ?>" required="required" style="text-align:center;"> <br>
                    <button type="submit">Submit</button>
                
                <div class="s-m">
                        <a href="https://www.facebook.com/Apoloz1" class="fab fa-facebook-f"></a>
                        <a href="https://www.linkedin.com/in/sunu-ilham-043b9b153/" class="fab fa-linkedin"></a>
                        <a href="https://www.instagram.com/sunuilhmp/" class="fab fa-instagram"></a>
                        <a href="https://github.com/sunudika" class="fab fa-github"></a>
                </div>
            </div>
        </div>

        <div class="grid_8">
            <div class="profile2">
                    <table>
                            <tr>
                              <th colspan="2">Biodata</th>
                            </tr>
                            <tr>
                                <td>Nama</td>
                                <td>
                                    <input type="text" placeholder="Nama" name="nama2" value="<?php echo $nama2; ?>" required="required" style="text-align:center;">
                                </td>
                            </tr>
                            <tr>
                                <td>NPM</td>
                                <td>
                                    <input type="text" placeholder="NPM" value="<?php echo $npm; ?>" name="npm" required="required" style="text-align:center;" readonly>
                                </td>
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td>
                                    <input type="text" placeholder="Alamat" name="alamat" value="<?php echo $alamat; ?>" required="required" style="text-align:center;">
                                </td>
                            </tr>
                            <tr>
                              <td>Golongan Darah</td>
                              <td>
                                    <input type="text" placeholder="Golongan Darah" name="goldar" value="<?php echo $goldar; ?>" required="required" style="text-align:center;">
                                </td>
                            </tr>
                            <tr>
                                <td>Jenis Kelamin</td>
                                <td>
                                    <input type="text" placeholder="Jenis Kelamin" value="<?php echo $jeiskel; ?>" required="required" name="jeiskel" style="text-align:center;">
                                </td>
                            </tr>
                            <tr>
                                <td>Status</td>
                                <td>
                                    <input type="text" placeholder="Status" name="status" value="<?php echo $status; ?>" required="required" style="text-align:center;">
                                </td>
                            </tr>
                            <tr>
                                <td>Agama</td>
                                <td>
                                    <input type="text" placeholder="Agama" value="<?php echo $agama; ?>" required="required" name="agama" style="text-align:center;">
                                </td>
                            </tr>
                            <tr>
                                <td>TTL</td>
                                <td>
                                    <input type="text" value="<?php echo $tl; ?>" placeholder="Tanggal Lahir" name="tl" required="required" style="text-align:center;">
                                </td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>
                                    <input type="text" placeholder="Email" value="<?php echo $email; ?>" name="email" required="required" style="text-align:center;">
                                </td>
                            </tr>
                            <tr>
                                <td>No. Telp</td>
                                <td>
                                    <input type="text" placeholder="Nomor Telepon" value="<?php echo $telp; ?>" name="telp" required="required" style="text-align:center;">
                                </td>
                            </tr>
                            <tr>
                                <td>Motto</td>
                                <td>
                                    <input type="text" placeholder="Motto" value="<?php echo $motto; ?>" name="motto" required="required" style="text-align:center;">
                                </td>
                            </tr>
                          </table>
            </div>
        </div>
        
        <div class="grid_12" id="about">
            <h2>Description</h2>
        </div>
            <div class="grid_6">
                    <div class="desc">
                        <textarea type="text" placeholder="Deskripsi 1" rows="3" cols="60%" name="deskripsi1" required="required" style="text-align:center;"><?php echo $deskripsi1; ?></textarea>
                    </div>
            </div> 

            <div class="grid_6">
                <div class="desc">
                        <textarea type="text" placeholder="Deskripsi 2" rows="3" cols="62%" name="deskripsi2" required="required" style="text-align:center;"><?php echo $deskripsi2; ?></textarea>
                </div>
            </div>

        <div class="grid_4 suffix_4 prefix_4" id="about2">
            <h2>Description</h2>
        </div>

        <div class="grid_11 boxskill" id="skill">
                <h3>My Skills</h3>
                <h4>
                    <input type="text" placeholder="Skill1" value="<?php echo $skill1; ?>" required="required" name="skill1" style="text-align:center;">
                
                </h4>
                <p class="percentage">70%</p>
                <div class="skillbar" style="width:70%; animation: html 2s;"></div>

                <h4>
                
                    <input type="text" placeholder="Skill 2" value="<?php echo $skill2; ?>" required="required" name="skill2" style="text-align:center;">
                
                </h4>
                <p class="percentage">75%</p>
                <div class="skillbar" style="width: 75%; animation: css 2s"></div>

                <h4>
               
                    <input type="text" value="<?php echo $skill3; ?>" placeholder="Skill 3" required="required" name="skill3" style="text-align:center;">
                
                </h4>
                <p class="percentage">60%</p>
                <div class="skillbar" style="width: 60%; animation: python 2s"></div>

                <h4>
               
                    <input type="text" placeholder="Skill 4" value="<?php echo $skill4; ?>" required="required" name="skill4" style="text-align:center;">
                </form>
                </h4>
                <p class="percentage">80%</p>
                <div class="skillbar" style="width: 80%; animation: c 2s;"></div>
            </div>
        </div>
    </div>
    
    <div class="container_12 boxed experience">
        <div class="prefix_4 grid_4 suffix_4 title" id="riwayat">
            <h2>Riwayat Pendidikan</h2>
        </div>
        <div class="grid_4 box content">
            <h3>SDN SIDOKLUMPUK</h3>
            <img src="images/sd.jpg" alt="sd">
        </div>
        <div class="grid_4 box content">
            <h3>SMP PGRI 1 BUDURAN</h3>
            <img src="images/pgri1.jpeg" alt="smp">
        </div>
        <div class="grid_4 box content">
            <h3>SMAN 3 SIDOARJO</h3>
            <img src="images/sman3.png" alt="sma">
        </div>
    </div>
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.js"></script>
</body>
</html>