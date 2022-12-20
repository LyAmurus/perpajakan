<?php
include '../konek.php';
session_start()
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="profile.css">
    <title>Document</title>
</head>

<body class="gradient-custom-background d-flex flex-column min-vh-100">
    <header>
        <nav class="navbar navbar-dark bg-secondary fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand text-warning" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-coin" viewBox="0 0 16 16">
                        <path
                            d="M5.5 9.511c.076.954.83 1.697 2.182 1.785V12h.6v-.709c1.4-.098 2.218-.846 2.218-1.932 0-.987-.626-1.496-1.745-1.76l-.473-.112V5.57c.6.068.982.396 1.074.85h1.052c-.076-.919-.864-1.638-2.126-1.716V4h-.6v.719c-1.195.117-2.01.836-2.01 1.853 0 .9.606 1.472 1.613 1.707l.397.098v2.034c-.615-.093-1.022-.43-1.114-.9H5.5zm2.177-2.166c-.59-.137-.91-.416-.91-.836 0-.47.345-.822.915-.925v1.76h-.005zm.692 1.193c.717.166 1.048.435 1.048.91 0 .542-.412.914-1.135.982V8.518l.087.02z" />
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                        <path d="M8 13.5a5.5 5.5 0 1 1 0-11 5.5 5.5 0 0 1 0 11zm0 .5A6 6 0 1 0 8 2a6 6 0 0 0 0 12z" />
                    </svg>
                    <span class="fs-5 fw-semibold">JakPajak.com</span>
                </a>
                <button-toggle class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button-toggle>
                <div class="offcanvas offcanvas-end text-bg-secondary" tabindex="-1" id="offcanvasDarkNavbar"
                    aria-labelledby="offcanvasDarkNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Menu</h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                            <li class="border-top"></li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="../../homepageuser.php">Home</a>
                            </li>
                            <li class="border-top"></li>
                            <li class="mb-1 text-info">
                                <button
                                    class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed"
                                    data-bs-toggle="collapse" data-bs-target="#dashboard-collapse"
                                    aria-expanded="false">
                                    Pendataan
                                </button>
                                <div class="collapse" id="dashboard-collapse">
                                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                        <li><a href="../daftarpajakindividu.php"
                                                class="link-dark d-inline-flex text-decoration-none rounded">../Daftar
                                                Pajak
                                                Penghasilan</a>
                                        </li>
                                        <li><a href="../daftarpajakperusahaan.php"
                                                class="link-dark d-inline-flex text-decoration-none rounded">../Daftar
                                                Pajak
                                                Perusahaan</a></li>
                                        <li><a href="../daftarpajakkendaraan.php"
                                                class="link-dark d-inline-flex text-decoration-none rounded">../Daftar
                                                Pajak
                                                Kendaraan</a>
                                        </li>
                                        <li><a href="../daftarpajakpbb.php"
                                                class="link-dark d-inline-flex text-decoration-none rounded">../Daftar
                                                pajak
                                                Tanah dan Bangunan</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="mb-1 text-info">
                                <button
                                    class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed"
                                    data-bs-toggle="collapse" data-bs-target="#orders-collapse" aria-expanded="false">
                                    Informasi
                                </button>
                                <div class="collapse" id="orders-collapse">
                                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                        <li><a href="../informasi/informasipajakindividu.html"
                                                class="link-dark d-inline-flex text-decoration-none rounded">Pajak
                                                Penghasilan</a>
                                        </li>
                                        <li><a href="../informasi/informasipajakperusahaan.html"
                                                class="link-dark d-inline-flex text-decoration-none rounded">Pajak
                                                Perusahaan</a>
                                        </li>
                                        <li><a href="../informasi/informasipajakkendaraan.html"
                                                class="link-dark d-inline-flex text-decoration-none rounded">Pajak
                                                Kendaraan</a>
                                        </li>
                                        <li><a href="../informasi/informasipajakpbb.html"
                                                class="link-dark d-inline-flex text-decoration-none rounded">Pajak Tanah
                                                dan Bangunan</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="border-top my-3"></li>
                            <li class="mb-1 text-info">
                                <button
                                    class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed"
                                    data-bs-toggle="collapse" data-bs-target="#account-collapse" aria-expanded="false">
                                    Akun
                                </button>
                                <div class="collapse" id="account-collapse">
                                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                        <li><a href="profil.php"
                                                class="link-dark d-inline-flex text-decoration-none rounded">Profile</a>
                                        </li>
                                        <li><a href="updateprofile.php"
                                                class="link-dark d-inline-flex text-decoration-none rounded">Profile
                                                Settings</a>
                                        </li>
                                        <li><a href="../../assets/signout.php"
                                                class="link-dark d-inline-flex text-decoration-none rounded">Sign
                                                out</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <main class="mt-5 mb-5">
        <section class="vh-100 gradient-custom-background" >
            <div class="container-fluid py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col mb-4 mb-lg-0">
                        <div class="card mb-3" style="border-radius: .5rem;">
                            <div class="row g-0">
                            <?php 
                        $usersaatini = $_SESSION['username'];
                        $sql = "SELECT * FROM data_user WHERE username='$usersaatini'";
                        $result = mysqli_query($conn, $sql);
                        if($result){
                            if(mysqli_num_rows($result)>0){
                                while($row = mysqli_fetch_array($result)){
                                    $id = $row['id'];
                                    $fname = $row['fname'];
                                    $lname = $row['lname'];
                                    $nik = $row['nik'];
                                    $adress = $row['adress'];
                                    $email = $row['email'];
                                    $lahir = $row['lahir'];
                                    $foto = $row['foto'];

                                    echo "<div class='col-md-4 gradient-custom text-center text-white rounded' style='border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;'>";
                                    echo "<img src='$foto' alt='Avatar' class='img-fluid my-5' style='width: 80px;' />";
                                    echo "<h5>$fname $lname</h5>";
                                    echo "<p>NIK : $nik</p>";
                                    echo "<i class='far fa-edit mb-5'>User</i>";
                                    echo  "</div>";
                                    echo "<div class='col-md-8'>";
                                    echo "<div class='card-body p-4'>";
                                    echo "<h6>Kontak</h6>";
                                    echo "<hr class='mt-0 mb-4'>";
                                    echo "<div class='row pt-1'>";
                                    echo "<div class='col-6 mb-3'>";
                                    echo "<h6>Email</h6>";
                                    echo "<p class='text-muted'>$email</p>";
                                    echo "</div>";
                                    echo "</div>";
                                    echo "<h6> Informasi Pribadi</h6>";
                                    echo "<hr class='mt-0 mb-4'>";
                                    echo "<div class='row pt-1'>";
                                    echo "<div class='col-6 mb-3'>";
                                    echo "<h6>Alamat</h6>";
                                    echo "<p class='text-muted'>$adress</p>";
                                    echo "</div>";
                                    echo "<div class='col-6 mb-3'>";
                                    echo "<h6>Tanggal Lahir</h6>";
                                    echo "<p class='text-muted'>$lahir</p>";
                                    echo "</div>";
                                    echo "</div>";
                                    echo "<div class='d-flex justify-content-end'>";
                                    echo "<a href=''><i class='fab fa-facebook-f text-primary me-3'></i></a>";
                                    echo "<a href=''><i class='fab fa-twitter text-info me-3'></i></a>";
                                    echo "<a href=''><i class='fab fa-instagram text-danger me-3'></i></a>";
                                    echo "<a href=''><i class='fab fa-linkedin-in text-primary'></i></a>";
                                    echo "</div>";
                                    echo "</div>";
                                    echo "</div>";


                                }
                            }
                        }
                        ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

</body>

</html>