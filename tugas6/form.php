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
        <div class="grid_4">
            <div class="profile">
            <img src="images/sunu.jpg" alt="">
                <?php
                    if (isset($_POST['nama'])){
                        
                ?>
                <?php 
                    $query = "SELECT * FROM biodata";
                    $result = mysqli_query(connection(),$query);
                ?>
                <?php $data = mysqli_fetch_array($result) ?>
                <h3><?php echo $data['Nama']; ?></h3>
                <h3><?php echo $data['karir'] ?></h3>
                <?php
                }else{
                ?> 
                <form action="index.php" method="post" id="forms">
                    <input type="text" placeholder="Nama" name="nama" style="text-align:center;">
                    <input type="text" placeholder="Career" name="karir" style="text-align:center;"> <br>
                    <button type="submit">Submit</button>
                </form>
                <?php
                }
                ?>
                
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
                    <?php 
                    $query = "SELECT * FROM biodata";
                    $result = mysqli_query(connection(),$query);
                    ?>
                    <?php if(isset($data['nama'])) { ?>
                    
                    <?php }else{ ?>
                    <?php $data = mysqli_fetch_array($result) ?>
                            <tr>
                              <th colspan="2">Biodata</th>
                            </tr>
                            <tr>
                                <td>Nama</td>
                                <td>
                                <form action="index.php" method="post">
                                    <input type="text" placeholder="Nama" name="nama2" form="forms" style="text-align:center;">
                                </form>
                                </td>
                            </tr>
                            <tr>
                                <td>NPM</td>
                                <td>
                                <form action="index.php" method="post">
                                    <input type="text" placeholder="NPM" name="npm" form="forms" style="text-align:center;">
                                </form>
                                </td>
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td>
                                <form action="index.php" method="post">
                                    <input type="text" placeholder="Alamat" name="alamat" form="forms" style="text-align:center;">
                                </form>
                                </td>
                            </tr>
                            <tr>
                              <td>Golongan Darah</td>
                              <td>
                                <form action="index.php" method="post">
                                    <input type="text" placeholder="Golongan Darah" name="goldar" form="forms" style="text-align:center;">
                                </form>
                                </td>
                            </tr>
                            <tr>
                                <td>Jenis Kelamin</td>
                                <td>
                                <form action="index.php" method="post">
                                    <input type="text" placeholder="Jenis Kelamin" name="jeiskel" form="forms" style="text-align:center;">
                                </form>
                                </td>
                            </tr>
                            <tr>
                                <td>Status</td>
                                <td>
                                <form action="index.php" method="post">
                                    <input type="text" placeholder="Status" name="status" form="forms" style="text-align:center;">
                                </form>
                                </td>
                            </tr>
                            <tr>
                                <td>Agama</td>
                                <td>
                                <form action="index.php" method="post">
                                    <input type="text" placeholder="Agama" name="agama" form="forms" style="text-align:center;">
                                </form>
                                </td>
                            </tr>
                            <tr>
                                <td>TTL</td>
                                <td>
                                <form action="index.php" method="post">
                                    <input type="text" placeholder="Tanggal Lahir" name="tl" form="forms" style="text-align:center;">
                                </form>
                                </td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>
                                <form action="index.php" method="post">
                                    <input type="text" placeholder="Email" name="email" form="forms" style="text-align:center;">
                                </form>
                                </td>
                            </tr>
                            <tr>
                                <td>No. Telp</td>
                                <td>
                                <form action="index.php" method="post">
                                    <input type="text" placeholder="Nomor Telepon" name="telp" form="forms" style="text-align:center;">
                                </form>
                                </td>
                            </tr>
                            <tr>
                                <td>Motto</td>
                                <td>
                                <form action="index.php" method="post">
                                    <input type="text" placeholder="Motto" name="motto" form="forms" style="text-align:center;">
                                </form>
                                </td>
                            </tr>
                 <?php } ?>
                          </table>
            </div>
        </div>
        
        <div class="grid_12" id="about">
            <h2>Description</h2>
        </div>
            <div class="grid_6">
                    <div class="desc">
                        <textarea type="text" placeholder="Deskripsi 1" rows="3" cols="60%" name="deskripsi1" form="forms" style="text-align:center;"></textarea>
                    </div>
            </div> 

            <div class="grid_6">
                <div class="desc">
                        <textarea type="text" placeholder="Deskripsi 2" rows="3" cols="62%" name="deskripsi2" form="forms" style="text-align:center;"></textarea>
                </div>
            </div>

        <div class="grid_4 suffix_4 prefix_4" id="about2">
            <h2>Description</h2>
        </div>

        <div class="grid_11 boxskill" id="skill">
                <h3>My Skills</h3>
                <h4>
                <form action="index.php" method="post">
                    <input type="text" placeholder="Skill1" name="skill1" form="forms" style="text-align:center;">
                </form>
                </h4>
                <p class="percentage">70%</p>
                <div class="skillbar" style="width:70%; animation: html 2s;"></div>

                <h4>
                <form action="index.php" method="post">
                    <input type="text" placeholder="Skill 2" name="skill2" form="forms" style="text-align:center;">
                </form>
                </h4>
                <p class="percentage">75%</p>
                <div class="skillbar" style="width: 75%; animation: css 2s"></div>

                <h4>
                <form action="index.php" method="post">
                    <input type="text" placeholder="Skill 3" name="skill3" form="forms" style="text-align:center;">
                </form>
                </h4>
                <p class="percentage">60%</p>
                <div class="skillbar" style="width: 60%; animation: python 2s"></div>

                <h4>
                <form action="index.php" method="post">
                    <input type="text" placeholder="Skill 4" name="skill4" form="forms" style="text-align:center;">
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

</body>

<script></script>

</html>