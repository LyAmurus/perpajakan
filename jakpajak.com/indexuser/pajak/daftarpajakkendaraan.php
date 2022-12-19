<?php
include_once("konek.php");
$result = mysqli_query($conn, "SELECT * FROM data_kendaraan_motor1");
$result2 = mysqli_query($conn, "SELECT * FROM data_kendaraan_motor5");
$result3 = mysqli_query($conn, "SELECT * FROM data_kendaraan_mobil1");
$result4 = mysqli_query($conn, "SELECT * FROM data_kendaraan_mobil5");
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
<<<<<<< HEAD
        </script>
    <title>Document</title>
=======
    </script>
    <title>Pajak PBB</title>
>>>>>>> e56ca75853f4406ae118680359b1dc8bf40093b7
</head>


<body class="d-flex flex-column min-vh-100">
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
                                <a class="nav-link active" aria-current="page" href="../homeuser.html">Home</a>
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
                                        <li><a href="daftarpajakindividu.html"
                                                class="link-dark d-inline-flex text-decoration-none rounded">Daftar
                                                Pajak
                                                Penghasilan</a>
                                        </li>
                                        <li><a href="daftarpajakperusahaan.html"
                                                class="link-dark d-inline-flex text-decoration-none rounded">Daftar
                                                Pajak
                                                Perusahaan</a></li>
                                        <li><a href="daftarpajakkendaraan.html"
                                                class="link-dark d-inline-flex text-decoration-none rounded">Daftar
                                                Pajak
                                                Kendaraan</a>
                                        </li>
                                        <li><a href="daftarpajakpbb.php"
                                                class="link-dark d-inline-flex text-decoration-none rounded">Daftar
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
                                        <li><a href="informasi/informasipajakindividu.html"
                                                class="link-dark d-inline-flex text-decoration-none rounded">Pajak
                                                Penghasilan</a>
                                        </li>
                                        <li><a href="informasi/informasipajakperusahaan.html"
                                                class="link-dark d-inline-flex text-decoration-none rounded">Pajak
                                                Perusahaan</a>
                                        </li>
                                        <li><a href="informasi/informasipajakkendaraan.html"
                                                class="link-dark d-inline-flex text-decoration-none rounded">Pajak
                                                Kendaraan</a>
                                        </li>
                                        <li><a href="informasi/informasipajakpbb.html"
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
                                        <li><a href="profile/"
                                                class="link-dark d-inline-flex text-decoration-none rounded">Profile</a>
                                        </li>
                                        <li><a href="#"
                                                class="link-dark d-inline-flex text-decoration-none rounded">Profile
                                                Settings</a>
                                        </li>
                                        <li><a href="#"
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


    <main class="mt-3 mb-5">
        <nav class="mt-5 container-fluid">
            <!-- tombol pertama -->
            <div id="nurunin-mb-1" class="d-grid gap-2 col-6 mx-auto mb-4 pt-4">
                <button onclick="showHidden('show-motor-1', 'tambah-data-1', 'nurunin-mb-1')" class="btn btn-primary" type="button">Motor
                    1 Tahun</button>
            </div>

            <table id="show-motor-1" class="table table-hover table-striped-columns caption-top" style="display: none;">
                <caption>Berisi daftar pajak tanah dan bangunan yang telah diinputkan</caption>
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nama Pemilik</th>
                        <th scope="col">Harga Jual Motor</th>
                        <th scope="col">Nilai Jual Motor</th>
                        <th scope="col">Pajak</th>
                        <th scope="col">Perintah</th>
                    </tr>
                </thead>
                <?php
                    $no = 1;
                    while ($user_data = mysqli_fetch_array($result)):
                ?>
                <tbody>
                    <tr>
                        <td><?= $no++?></td>
                        <td><?= $user_data['nama'] ?></td>
                        <td>IDR.<?= $user_data['hjm'] ?></td>
                        <td>IDR.<?= $user_data['njkb'] ?></td>
                        <td>IDR.<?= $user_data['pajak'] ?></td>
                        <td>
                            <a class='btn btn-warning' href="#" data-bs-toggle="modal"
                                data-bs-target="#updata<?php echo $no ?>">Edit</a>
                            <a class='btn btn-danger' href="./deletedata/pajakkendaraan/deletemotor1.php?id=<?= $user_data['id']?>" onclick="return confirm('Yakin ingin hapus?')">Delete</a>
                            <!-- <a onclick=delete_data(<?=$user_data['id']?>) class='btn btn-danger'>Delete</a> -->
                        </td>
                    </tr>
                </tbody>
                        <!--FORM UPDATE-->
                <div class="modal fade" id="updata<?= $no ?>" data-bs-backdrop="static" data-bs-keyboard="false"
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Update Data</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>

                            <!--FORM-->
                            <form action="./editdata/pajakkendaraan/editmotor1.php" method="POST">
                                <input type="hidden" name="id" value="<?= $user_data['id']?>">
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label class="form-label">Nama Pemilik</label>
                                        <input type="text" class="form-control" name="nama"
                                            value="<?=$user_data['nama']?>">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Harga Jual Motor</label>
                                        <input type="text" class="form-control" name="hjm"
                                            value="<?=$user_data['hjm']?>">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Nilai Jual Motor</label>
                                        <input type="text" class="form-control" name="njkb"
                                            value="<?=$user_data['njkb']?>">
                                    </div>
                                    
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-success" name="update">Update</button>
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!--FORM AKHIR UPDATE-->
                <?php endwhile; ?>
            </table>

            <!--FORM AWAL DATA-->
            <div class="modal fade" id="adddata" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Add Data</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <!--FORM-->
                        <form action="./inputdata/pajakkendaraan/inputmotor1.php" method="POST">
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label class="form-label">Nama pemilik</label>
                                    <input type="text" class="form-control" name="nama">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Harga Jual Motor</label>
                                    <input type="text" class="form-control" name="hjm">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Nilai Jual Motor</label>
                                    <input type="text" class="form-control" name="njkb">
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-success" name="inputpajakmotor1">Add</button>
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
            <!--FORM AKHIR DATA-->

            <div class="d-grid gap-2 col-6 mx-auto mb-4">
                <a style="display: none;" id="tambah-data-1" class="btn btn-success" type="button" data-bs-toggle="modal" data-bs-target="#adddata">Tambahh
                    Data</a>
            </div>

            <!-- tombol kedua -->
            <div id="nurunin-mb-2" class="d-grid gap-2 col-6 mx-auto mb-4" onclick="showHidden('show-motor-5', 'tambah-data-2', 'nurunin-mb-2')">
                <a class="btn btn-primary" type="button">Motor 5 Tahun</a>
            </div>

            <table id="show-motor-5" class="table table-hover table-striped-columns caption-top" style="display: none;">
                <caption>Berisi daftar pajak tanah dan bangunan yang telah diinputkan</caption>
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nama Pemilik</th>
                        <th scope="col">Nilai Jual Motor</th>
                        <th scope="col">Pajak</th>
                        <th scope="col">Perintah</th>
                    </tr>
                </thead>
                <?php
                    $no = 1;
                    while ($user_data = mysqli_fetch_array($result2)):
                ?>
                <tbody>
                    <tr>
                        <td><?= $no++?></td>
                        <td><?= $user_data['nama'] ?></td>
                        <td>IDR.<?= $user_data['njkb'] ?></td>
                        <td>IDR.<?= $user_data['pajak'] ?></td>
                        <td>
                            <a class='btn btn-warning' href="#" data-bs-toggle="modal"
                                data-bs-target="#updata2<?php echo $no ?>">Edit</a>
                            <a class='btn btn-danger' href="./deletedata/pajakkendaraan/deletemotor5.php?id=<?= $user_data['id']?>" onclick="return confirm('Yakin ingin hapus?')">Delete</a>
                            <!-- <a onclick=delete_data(<?=$user_data['id']?>) class='btn btn-danger'>Delete</a> -->
                        </td>
                    </tr>
                </tbody>

                <!--FORM UPDATE-->
                <div class="modal fade" id="updata2<?= $no ?>" data-bs-backdrop="static" data-bs-keyboard="false"
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Update Data</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>

                            <!--FORM-->
                            <form action="./editdata/pajakkendaraan/editmotor5.php" method="POST">
                                <input type="hidden" name="id" value="<?= $user_data['id']?>">
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label class="form-label">Nama Pemilik</label>
                                        <input type="text" class="form-control" name="nama"
                                            value="<?=$user_data['nama']?>">
                                    </div>
                                   
                                    <div class="mb-3">
                                        <label class="form-label">Nilai Jual Motor</label>
                                        <input type="text" class="form-control" name="njkb"
                                            value="<?=$user_data['njkb']?>">
                                    </div>
                                    
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-success" name="update">Update</button>
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!--FORM AKHIR UPDATE-->
                <?php endwhile; ?>
            </table>

            <!--FORM AWAL DATA-->
            <div class="modal fade" id="adddata2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Add Data</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <!--FORM-->
                        <form action="./inputdata/pajakkendaraan/inputmotor5.php" method="POST">
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label class="form-label">Nama pemilik</label>
                                    <input type="text" class="form-control" name="nama">
                                </div>
    
                                <div class="mb-3">
                                    <label class="form-label">Nilai Jual Motor</label>
                                    <input type="text" class="form-control" name="njkb">
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-success" name="inputpajakmotor5">Add</button>
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
            <!--FORM AKHIR DATA-->

            <div class="d-grid gap-2 col-6 mx-auto mb-4">
                <a style="display: none;" id="tambah-data-2" class="btn btn-success" type="button" data-bs-toggle="modal" data-bs-target="#adddata2">Tambahh
                    Data</a>
            </div>

            <!-- tombol ketiga -->
            <div id="nurunin-mb-3" class="d-grid gap-2 col-6 mx-auto mb-4 pt-4">
                <button onclick="showHidden('show-mobil-1', 'tambah-data-3', 'nurunin-mb-3')" class="btn btn-primary" type="button">Mobil
                    1 Tahun</button>
            </div>

            <table id="show-mobil-1" class="table table-hover table-striped-columns caption-top" style="display: none;">
                <caption>Berisi daftar pajak tanah dan bangunan yang telah diinputkan</caption>
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nama Pemilik</th>
                        <th scope="col">Harga Jual mobil</th>
                        <th scope="col">Nilai Jual mobil</th>
                        <th scope="col">Pajak</th>
                        <th scope="col">Perintah</th>
                    </tr>
                </thead>
                <?php
                    $no = 1;
                    while ($user_data = mysqli_fetch_array($result3)):
                ?>
                <tbody>
                    <tr>
                        <td><?= $no++?></td>
                        <td><?= $user_data['nama'] ?></td>
                        <td>IDR.<?= $user_data['hjm'] ?></td>
                        <td>IDR.<?= $user_data['njkb'] ?></td>
                        <td>IDR.<?= $user_data['pajak'] ?></td>
                        <td>
                            <a class='btn btn-warning' href="#" data-bs-toggle="modal"
                                data-bs-target="#updata3<?php echo $no ?>">Edit</a>
                            <a class='btn btn-danger' href="./deletedata/pajakkendaraan/deletemobil1.php?id=<?= $user_data['id']?>" onclick="return confirm('Yakin ingin hapus?')">Delete</a>
                            <!-- <a onclick=delete_data(<?=$user_data['id']?>) class='btn btn-danger'>Delete</a> -->
                        </td>
                    </tr>
                </tbody>
            

            <!--FORM UPDATE-->
            <div class="modal fade" id="updata3<?= $no ?>" data-bs-backdrop="static" data-bs-keyboard="false"
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Update Data</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>

                            <!--FORM-->
                            <form action="./editdata/pajakkendaraan/editmobil1.php" method="POST">
                                <input type="hidden" name="id" value="<?= $user_data['id']?>">
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label class="form-label">Nama Pemilik</label>
                                        <input type="text" class="form-control" name="nama"
                                            value="<?=$user_data['nama']?>">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Harga Jual mobil</label>
                                        <input type="text" class="form-control" name="hjm"
                                            value="<?=$user_data['hjm']?>">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Nilai Jual mobil</label>
                                        <input type="text" class="form-control" name="njkb"
                                            value="<?=$user_data['njkb']?>">
                                    </div>
                                    
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-success" name="update">Update</button>
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!--FORM AKHIR UPDATE-->
                <?php endwhile; ?>
            </table>

            <!--FORM AWAL DATA-->
            <div class="modal fade" id="adddata3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Add Data</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <!--FORM-->
                        <form action="./inputdata/pajakkendaraan/inputmobil1.php" method="POST">
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label class="form-label">Nama pemilik</label>
                                    <input type="text" class="form-control" name="nama">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Harga Jual mobil</label>
                                    <input type="text" class="form-control" name="hjm">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Nilai Jual mobil</label>
                                    <input type="text" class="form-control" name="njkb">
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-success" name="inputpajakmobil1">Add</button>
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
            <!--FORM AKHIR DATA-->

            <div class="d-grid gap-2 col-6 mx-auto mb-4">
                <a style="display: none;" id="tambah-data-3" class="btn btn-success" type="button" data-bs-toggle="modal" data-bs-target="#adddata3">Tambahh
                    Data</a>
            </div>

            <!-- tombol ke empat -->    
            <div id="nurunin-mb-4" class="d-grid gap-2 col-6 mx-auto mb-4 pt-4">
                <button onclick="showHidden('show-mobil-5', 'tambah-data-4', 'nurunin-mb-4')" class="btn btn-primary" type="button">Mobil
                    5 Tahun</button>
            </div>

            <table id="show-mobil-5" class="table table-hover table-striped-columns caption-top" style="display: none;">
                <caption>Berisi daftar pajak tanah dan bangunan yang telah diinputkan</caption>
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nama Pemilik</th>
                        <th scope="col">Nilai Jual Mobil</th>
                        <th scope="col">Pajak</th>
                        <th scope="col">Perintah</th>
                    </tr>
                </thead>
                <?php
                    $no = 1;
                    while ($user_data = mysqli_fetch_array($result4)):
                ?>
                <tbody>
                    <tr>
                        <td><?= $no++?></td>
                        <td><?= $user_data['nama'] ?></td>
                        <td>IDR.<?= $user_data['njkb'] ?></td>
                        <td>IDR.<?= $user_data['pajak'] ?></td>
                        <td>
                            <a class='btn btn-warning' href="#" data-bs-toggle="modal"
                                data-bs-target="#updata4<?php echo $no ?>">Edit</a>
                            <a class='btn btn-danger' href="./deletedata/pajakkendaraan/deletemobil5.php?id=<?= $user_data['id']?>" onclick="return confirm('Yakin ingin hapus?')">Delete</a>
                            <!-- <a onclick=delete_data(<?=$user_data['id']?>) class='btn btn-danger'>Delete</a> -->
                        </td>
                    </tr>
                </tbody>

                <!--FORM UPDATE-->
                <div class="modal fade" id="updata4<?= $no ?>" data-bs-backdrop="static" data-bs-keyboard="false"
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Update Data</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>

                            <!--FORM-->
                            <form action="./editdata/pajakkendaraan/editmobil5.php" method="POST">
                                <input type="hidden" name="id" value="<?= $user_data['id']?>">
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label class="form-label">Nama Pemilik</label>
                                        <input type="text" class="form-control" name="nama"
                                            value="<?=$user_data['nama']?>">
                                    </div>
                                   
                                    <div class="mb-3">
                                        <label class="form-label">Nilai Jual Mobil</label>
                                        <input type="text" class="form-control" name="njkb"
                                            value="<?=$user_data['njkb']?>">
                                    </div>
                                    
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-success" name="update">Update</button>
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!--FORM AKHIR UPDATE-->
                <?php endwhile; ?>
            </table>

            <!--FORM AWAL DATA-->
            <div class="modal fade" id="adddata4" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Add Data</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <!--FORM-->
                        <form action="./inputdata/pajakkendaraan/inputmobil5.php" method="POST">
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label class="form-label">Nama pemilik</label>
                                    <input type="text" class="form-control" name="nama">
                                </div>
    
                                <div class="mb-3">
                                    <label class="form-label">Nilai Jual Mobil</label>
                                    <input type="text" class="form-control" name="njkb">
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-success" name="inputpajakmobil5">Add</button>
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
            <!--FORM AKHIR DATA-->

            <div class="d-grid gap-2 col-6 mx-auto mb-4">
                <a style="display: none;" id="tambah-data-4" class="btn btn-success" type="button" data-bs-toggle="modal" data-bs-target="#adddata4">Tambahh
                    Data</a>
            </div>


            <!-- <div class="d-grid gap-2 col-6 mx-auto">
                <a class="btn btn-success" type="button" href="inputdata/inputpajakindividu.php">Tambah Data</a>
                <a class="btn btn-warning" type="button" href="../homeuser.html">Back</a>
            </div> -->
        </nav>
    </main>


    <footer class="bg-light text-center text-white footer mt-auto">
        <!-- Grid container -->
        <div class="container p-4 pb-0">
            <!-- Section: Social media -->
            <section class="mb-4">
                <!-- Github -->
                <a class="btn text-white btn-floating m-1" style="background-color: #333333;"
                    href="https://github.com/raanui21" role="button"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                        height="16" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                        <path
                            d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z" />
                    </svg>
                    <p>Raka</p>
                </a>
                <a class="btn text-white btn-floating m-1" style="background-color: #333333;"
                    href="https://github.com/nflnsr" role="button"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                        height="16" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                        <path
                            d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z" />
                    </svg>
                    <p>Naufal</p>
                </a>
                <a class="btn text-white btn-floating m-1" style="background-color: #333333;"
                    href="https://github.com/Waafre" role="button"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                        height="16" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                        <path
                            d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z" />
                    </svg>
                    <p>Wahyu</p>
                </a>
                <a class="btn text-white btn-floating m-1" style="background-color: #333333;"
                    href="https://github.com/HaikalAzka19" role="button"><svg xmlns="http://www.w3.org/2000/svg"
                        width="16" height="16" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                        <path
                            d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z" />
                    </svg>
                    <p>Haikal</p>
                </a>
                <a class="btn text-white btn-floating m-1" style="background-color: #333333;"
                    href="https://github.com/IceScout26" role="button"><svg xmlns="http://www.w3.org/2000/svg"
                        width="16" height="16" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                        <path
                            d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z" />
                    </svg>
                    <p>Dhimas</p>
                </a>
                <a class="btn text-white btn-floating m-1" style="background-color: #333333;"
                    href="https://github.com/elysiamori" role="button"><svg xmlns="http://www.w3.org/2000/svg"
                        width="16" height="16" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                        <path
                            d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z" />
                    </svg>
                    <p>Valdy</p>
                </a>
                <a class="btn text-white btn-floating m-1" style="background-color: #333333;"
                    href="https://github.com/LyAmurus" role="button"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                        height="16" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                        <path
                            d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z" />
                    </svg>
                    <p>Mulyadi</p>
                </a>
                <a class="btn text-white btn-floating m-1" style="background-color: #333333;" href="https://github.com/Andisurya01"
                    role="button"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-github" viewBox="0 0 16 16">
                        <path
                            d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z" />
                    </svg>
                    <p>Andi not here :'(</p>
                </a>
            </section>
            <!-- Section: Social media -->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2022 Copyright:
            <a class="text-white" href="https://goo.gl/maps/N1NRsvC4zvSrPQxx8">KostanPakSuprapto.Com</a>
        </div>
        <!-- Copyright -->
    </footer>
    <script type="text/javascript">
        function delete_data(uid) {
            if (confirm('Yakin ingin hapus?')) {
                window.location.href = 'deletedata/deletepajakpbb.php?id=' + uid;
            }
        }

        function showHidden(id1, id2, id3) {
            console.log("showHidden");
            const x = document.getElementById(id1);
            const y = document.getElementById(id2);
            const z = document.getElementById(id3);
            if (x.style.display == "none") {
                x.style.display = "";
                y.style.display = "";
                x.style.marginBottom = "30px";
                z.className = "d-grid gap-2 col-6 mx-auto mb-1";
            } else {
                x.style.display = "none";
                y.style.display = "none";
            }
        }
    </script>
</body>

</html>
