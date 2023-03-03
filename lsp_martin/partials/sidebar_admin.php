
<!DOCTYPE html>
<html>
<title>Admin</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<link rel="stylesheet" href="admin.css">
<body>

<div class="w3-sidebar w3-bar-block w3-card w3-animate-left" style="display:none" id="mySidebar">
  <button class="w3-bar-item w3-button w3-large"
  onclick="w3_close()">Tutup &times;</button>
  <div class="sidebar">
  <h3><a href="http://localhost/lsp_martin/admin/index.php" class="w3-bar-item w3-button"><i class="fa fa-home">Dashboard</i></a></h3>

        <h5>Master Data</h5>
            <a href="http://localhost/lsp_martin/admin/master_data/data_anggota/index.php" class="w3-bar-item w3-button"><i class="fa fa-home">Anggota</i></a>
            <a href="http://localhost/lsp_martin/admin/master_data/data_admin/index.php" class="w3-bar-item w3-button"><i class="fa fa-search">Data Admin</i></a>
            <a href="http://localhost/lsp_martin/admin/master_data/data_peminjaman/index.php" class="w3-bar-item w3-button"><i class="fa fa-envelope">Data Peminjaman</i></a>
    <br>
        <h5>Katalog Buku</h5>
            <a href="http://localhost/lsp_martin/admin/katalog_buku/data_buku/index.php" class="w3-bar-item w3-button"><i class="fa fa-book">Buku</i></a>
            <a href="http://localhost/lsp_martin/admin/katalog_buku/data_kategori/index.php" class="w3-bar-item w3-button"><i class="fa fa-category">Kategori</i></a>
            <a href="http://localhost/lsp_martin/admin/katalog_buku/data_penerbit/index.php" class="w3-bar-item w3-button"><i class="fa fa-home">Penerbit</i></a>
    <br>
         <h5>Pesan</h5>
         <a href="http://localhost/lsp_martin/admin/laporan_perpus/index.php" class="w3-bar-item w3-button"><i class="fa fa-home">Pesan</a>
    
    <br>
         <h5>Identitas</h5>
         <a href="http://localhost/lsp_martin/admin/identitas.php" class="w3-bar-item w3-button"><i class="fa fa-home">Identitas</a> 
    <br>
    <br>
         <h5>Log Out</h5>
         <a href="http://localhost/lsp_martin/admin/logout.php" class="w3-bar-item w3-button"><i class="fa fa-home">Logout</a> 
    <br>
    
    </div>
    
    </div>
</div>

<div id="main">

<div class="w3-teal">
  <button id="openNav" class="w3-button w3-teal w3-xlarge" onclick="w3_open()">&#9776;</button>
  <div class="w3-container">
    <h1>Selamat Datang Admin <?=$data_user["username"]?></h1>
  </div>
</div>

<div class="w3-container">
<div class="sidebar">
    <ul>

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

</body>
</html> 