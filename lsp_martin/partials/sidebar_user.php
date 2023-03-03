<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<link rel="stylesheet" href="user.css">
</head>
<body>

<div class="w3-sidebar w3-bar-block w3-card w3-animate-left" style="display:none" id="mySidebar">
  <button class="w3-bar-item w3-button w3-large"
  onclick="w3_close()">Close &times;</button>
  <div class="sidebar">
      <ul class="dik">
      <a href="../index.php" class="w3-bar-item w3-button"><i class="fa fa-home">Dashboard</i></a>
  <a href="peminjaman.php" class="w3-bar-item w3-button"><i class="fa fa-search">Peminjaman</i></a>
  <a href="pengembalian.php" class="w3-bar-item w3-button"><i class="fa fa-envelope">Pengembalian</i></a>
  <a href="pesan.php" class="w3-bar-item w3-button"><i class="fa fa-globe"></i>Pesan</a>
  <a href="profil.php" class="w3-bar-item w3-button"><i class="fa fa-globe"></i>Profil Saya</a>
  <a href="../logout.php" class="w3-bar-item w3-button"><i class="fa fa-globe"></i>Log Out</a>

      </ul>
    </div>

</div>

<div id="main">

<div class="w3-teal">
  <button id="openNav" class="w3-button w3-teal w3-xlarge" onclick="w3_open()">&#9776;</button>
  <div class="w3-container">
  <h1>Perpustakaan SMKN 64 JAKARTA</h1>
  <h4>Selamat Datang <?= $data_user['username']?> </h4>
  </div>
</div>


<script>
function w3_open() {
  document.getElementById("main").style.marginLeft = "25%";
  document.getElementById("mySidebar").style.width = "25%";
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("openNav").style.display = 'none';
}
function w3_close() {
  document.getElementById("main").style.marginLeft = "0%";
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("openNav").style.display = "inline-block";
}
</script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html
