<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Pendaftaran Siswa Baru | SMK Perubahan</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f9f9f9;
      color: #333;
    }

    header {
      text-align: center;
      background-color: #007BFF;
      color: white;
      padding: 20px;
    }

    header h1 {
      margin: 0;
      font-size: 24px;
    }

    header h3 {
      margin: 0;
      font-size: 18px;
      font-weight: normal;
    }

    nav {
      text-align: center;
      margin: 20px 0;
    }

    nav ul {
      list-style: none;
      padding: 0;
    }

    nav ul li {
      display: inline-block;
      margin: 0 10px;
    }

    nav ul li a {
      text-decoration: none;
      color: white;
      background-color: #28a745;
      padding: 10px 20px;
      border-radius: 5px;
      font-weight: bold;
      transition: background-color 0.3s;
    }

    nav ul li a:hover {
      background-color: #218838;
    }

    p {
      text-align: center;
      font-size: 16px;
      margin-top: 20px;
      font-weight: bold;
      color: #333;
    }

    p.success {
      color: #28a745;
    }

    p.error {
      color: #dc3545;
    }
  </style>
</head>

<body>
    <header>
        <h3>Pendaftaran Siswa Baru</h3>
        <h1>SMK Perubahan</h1>
    </header>

    <nav>
        <ul>
            <li><a href="form-daftar.php">Daftar Baru</a></li>
            <li><a href="list-siswa.php">Pendaftar</a></li>
        </ul>
    </nav>

    <?php if(isset($_GET['status'])): ?>
        <p>
            <?php
                if($_GET['status'] == 'sukses'){
                    echo "Pendaftaran siswa baru berhasil!";
                } else {
                    echo "Pendaftaran gagal!";
            }   
            ?>
        </p>
    <?php endif; ?>

    </body>
</html>