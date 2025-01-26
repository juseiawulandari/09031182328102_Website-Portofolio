<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

$profile = [
    "nama" => "Juseia Wulandari",
    "nim" => "09031182328102",
    "kelas" => "SI Reguler 4C",
    "jurusan" => "Sistem Informasi",
    "fakultas" => "Ilmu Komputer",
    "tempat_tanggal_lahir" => "Palembang, 09 September 2005",
    "jenis_kelamin" => "Perempuan",
    "umur" => "19 Tahun",
    "alamat" => "Plaju, Palembang, Sumatera Selatan",
    "foto" => "http://localhost/PraktikumPW2/TugasPortofolio/Juseia.jpg" // Path foto profil
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profile - Universitas Sriwijaya</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: Arial, sans-serif;
      background: url("http://localhost/PraktikumPW2/TugasPortofolio/UNSRI.jpg") no-repeat center center fixed;
      background-size: cover;
      background-color: rgba(0, 0, 0, 0.5); 
      background-blend-mode: darken;
      color: #333;
    }

    .container {
      max-width: 800px;
      margin: 50px auto;
      background: rgba(255, 255, 255, 0.9);
      border-radius: 10px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
      overflow: hidden;
    }

    .header {
      background-color: rgba(0, 0, 0, 0.7);
      padding: 20px;
      text-align: center;
      color: #fff;
    }

    .header img {
      width: 80px;
      margin-bottom: 10px;
    }

    .header h1 {
      font-size: 20px;
      font-weight: bold;
      margin-bottom: 5px;
    }

    .welcome {
      background-color: rgba(255, 223, 0, 0.9);
      padding: 10px;
      text-align: center;
      font-size: 18px;
      font-weight: bold;
      overflow: hidden;
      white-space: nowrap;
    }

    .welcome marquee {
      font-size: 18px;
      font-weight: bold;
      color: #333;
    }

    .profile-section {
      padding: 20px;
      display: flex;
      align-items: center; 
      gap: 20px;
    }

    .profile-section img {
      width: 150px;
      height: 200px;
      border-radius: 10px;
      object-fit: cover;
    }

    .profile-details {
      flex: 1;
    }

    .profile-details h2 {
      font-size: 18px;
      font-weight: bold;
      margin-bottom: 10px;
      border-bottom: 2px solidrgb(255, 0, 0);
      display: inline-block;
    }

    .profile-details p {
      margin: 5px 0;
      font-size: 16px;
      display: flex;
    }

    .profile-details p span {
      font-weight: bold;
      display: inline-block;
      width: 200px;
    }

    .logout-btn {
      width: 100%;
      background: #dc3545;
      color: white;
      padding: 10px;
      border: none;
      border-radius: 5px;
      font-size: 16px;
      cursor: pointer;
      transition: background 0.3s;
      margin-top: 20px;
    }

    .logout-btn:hover {
      background: #c82333;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="header">
      <img src="http://localhost/PraktikumPW2/TugasPortofolio/Logo.png" alt="Logo Universitas Sriwijaya">
      <h1>FAKULTAS ILMU KOMPUTER<br>UNIVERSITAS SRIWIJAYA</h1>
    </div>
    <div class="welcome">
      <marquee>Halo <?php echo strtoupper($profile['nama']); ?>, Selamat Datang!</marquee>
    </div>
    <div class="profile-section">
      <img src="<?php echo $profile['foto']; ?>" alt="Foto Profil">
      <div class="profile-details">
        <h2>Profile</h2>
        <p><span>Nama Lengkap</span> <?php echo $profile['nama']; ?></p>
        <p><span>NIM</span> <?php echo $profile['nim']; ?></p>
        <p><span>Kelas</span> <?php echo $profile['kelas']; ?></p>
        <p><span>Jurusan</span> <?php echo $profile['jurusan']; ?></p>
        <p><span>Fakultas</span> <?php echo $profile['fakultas']; ?></p>
        <p><span>Tempat, Tanggal Lahir</span> <?php echo $profile['tempat_tanggal_lahir']; ?></p>
        <p><span>Jenis Kelamin</span> <?php echo $profile['jenis_kelamin']; ?></p>
        <p><span>Umur</span> <?php echo $profile['umur']; ?></p>
        <p><span>Alamat</span> <?php echo $profile['alamat']; ?></p>
      </div>
    </div>
    <form action="logout.php" method="post">
      <button type="submit" class="logout-btn">Logout</button>
    </form>
  </div>
</body>
</html>
