<!DOCTYPE html>
<html lang="en" id="home">

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
                    <li><a href="index.php">Data</a></li>
                    <li><a href="#riwayat">Pendidikan</a></li>
                    <li><a href="#skill">Skills</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#home">Home</a></li>
                </ul>
            </nav>
        <div class="grid_4">
            <div class="profile">
            <img src="images/sunu.jpg" alt="">
                <h3><?php echo $nama; ?></h3>
                <h3><?php echo $karir; ?></h3>
                
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
                                <?php echo $nama2; ?>
                                </td>
                            </tr>
                            <tr>
                                <td>NPM</td>
                                <td>
                                <?php echo $npm; ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td>
                                <?php echo $alamat; ?>
                                </td>
                            </tr>
                            <tr>
                              <td>Golongan Darah</td>
                              <td>
                                <?php echo $goldar; ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Jenis Kelamin</td>
                                <td>
                                <?php echo $jeiskel; ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Status</td>
                                <td>
                                <?php echo $status; ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Agama</td>
                                <td>
                                <?php echo $agama; ?>
                                </td>
                            </tr>
                            <tr>
                                <td>TTL</td>
                                <td>
                                <?php echo $tl; ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>
                                <?php echo $email; ?>
                                </td>
                            </tr>
                            <tr>
                                <td>No. Telp</td>
                                <td>
                                <?php echo $telp; ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Motto</td>
                                <td>
                                <?php echo $motto; ?>
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
                        <?php echo $deskripsi1; ?>
                    </div>
            </div> 

            <div class="grid_6">
                <div class="desc">
                        <?php echo $deskripsi2; ?>
                </div>
            </div>

        <div class="grid_4 suffix_4 prefix_4" id="about2">
            <h2>Description</h2>
        </div>

        <div class="grid_11 boxskill" id="skill">
                <h3>My Skills</h3>
                <h4>
                <?php echo $skill1; ?>
                </h4>
                <p class="percentage">70%</p>
                <div class="skillbar" style="width:70%; animation: html 2s;"></div>

                <h4>
                <?php echo $skill2; ?>
                </h4>
                <p class="percentage">75%</p>
                <div class="skillbar" style="width: 75%; animation: css 2s"></div>

                <h4>
                <?php echo $skill3; ?>
                </h4>
                <p class="percentage">60%</p>
                <div class="skillbar" style="width: 60%; animation: python 2s"></div>

                <h4>
                <?php echo $skill4; ?>
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