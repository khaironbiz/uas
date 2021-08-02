<?php
session_start();
$user_check=$_SESSION['login_user'];
if($user_check ==""){
    header("location: /ak"); // Mengarahkan ke halaman profil
}
$sql_anggota    = mysqli_query($host, "SELECT * FROM nira WHERE nira='$user_check'");
$anggota        = mysqli_fetch_array($sql_anggota);
?>
<nav class="navbar navbar-expand-md navbar-dark bg-primary shadow fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="http://ppni.rspon.net/assets/img/logo.png" alt="" width="50" class="d-inline-block align-top">
                Acara Kesehatan            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto text-white fw-bold">
                    <li class="nav-item">
                        <a class="nav-link text-white" aria-current="page" href="<?= $site_url?>/event">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" aria-current="page" href="<?= $site_url?>/about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="<?= $site_url?>/profesi">Profesi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="<?= $site_url?>/anggota">Anggota</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="<?= $site_url?>/video">Video</a>
                    </li>
                    <?php
                        if($user_check !=""){
                        ?>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="<?= $site_url?>/video"><?= $anggota['nama']?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="<?= $site_url?>/auth/logout.php">Logout</a>
                    </li>
                    <?php
                        }
                    ?>
                </ul>
            </div>
        </div>
    </nav>