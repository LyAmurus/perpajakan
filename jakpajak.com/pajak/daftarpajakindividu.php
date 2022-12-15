<?php

    require_once "./connectdata/conn_individu.php";

    $data_pajak = "SELECT * FROM pajak_individu.data_pajak";

    $result = mysqli_query($conn, $data_pajak);
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
    <title>Data Pajak Individu</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-dark bg-secondary fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand text-warning" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-coin"
                        viewBox="0 0 16 16">
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
                                <a class="nav-link active" aria-current="page" href="../index2.html">Home</a>
                            </li>
                            <li class="border-top"></li>
                            <li class="mb-1 text-info">
                                <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed"
                                    data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">
                                    Pendataan
                                </button>
                                <div class="collapse" id="dashboard-collapse">
                                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                        <li><a href="daftarpajakindividu.html" class="link-dark d-inline-flex text-decoration-none rounded">Daftar Pajak
                                                Penghasilan</a>
                                        </li>
                                        <li><a href="daftarpajakperusahaan.html" class="link-dark d-inline-flex text-decoration-none rounded">Daftar Pajak
                                                Perusahaan</a></li>
                                        <li><a href="daftarpajakkendaraan.html" class="link-dark d-inline-flex text-decoration-none rounded">Daftar Pajak
                                                Kendaraan</a>
                                        </li>
                                        <li><a href="daftarpajakpbb.html" class="link-dark d-inline-flex text-decoration-none rounded">Daftar pajak
                                            Tanah dan Bangunan</a>
                                    </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="mb-1 text-info">
                                <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed"
                                    data-bs-toggle="collapse" data-bs-target="#orders-collapse" aria-expanded="false">
                                    Informasi
                                </button>
                                <div class="collapse" id="orders-collapse">
                                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                        <li><a href="informasi/informasipajakindividu.html" class="link-dark d-inline-flex text-decoration-none rounded">Pajak Penghasilan</a>
                                        </li>
                                        <li><a href="informasi/informasipajakperusahaan.html"
                                                class="link-dark d-inline-flex text-decoration-none rounded">Pajak Perusahaan</a>
                                        </li>
                                        <li><a href="informasi/informasipajakkendaraan.html" class="link-dark d-inline-flex text-decoration-none rounded">Pajak Kendaraan</a>
                                        </li>
                                        <li><a href="informasi/informasipajakpbb.html"
                                                class="link-dark d-inline-flex text-decoration-none rounded">Pajak Tanah dan Bangunan</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="border-top my-3"></li>
                            <li class="mb-1 text-info">
                                <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed"
                                    data-bs-toggle="collapse" data-bs-target="#account-collapse" aria-expanded="false">
                                    Akun
                                </button>
                                <div class="collapse" id="account-collapse">
                                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                        <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Profile</a>
                                        </li>
                                        <li><a href="#"
                                                class="link-dark d-inline-flex text-decoration-none rounded">Profile Settings</a>
                                        </li>
                                        <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Sign
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

    <main>
        <nav class="mt-5 container-fluid">
            <table class="table table-hover table-striped-columns caption-top">
                <caption>Berisi daftar pajak masyarakat yang telah diinputkan</caption>
                <thead>
                    <tr>
                        <th scope="col">ID CARD</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Gaji</th>
                        <th scope="col">Persentase Pajak %</th>
                        <th scope="col">Pajak Dalam Rupiah</th>
                        <th scope="col">Perintah</th>
                    </tr>
                </thead>
                <?php
                $no = 1;
                while ($data_individu = mysqli_fetch_array($result)):
                ?>
                <tbody>
                    <tr>
                        <td><?=$no++?></td>
                        <td><?=$data_individu['nama']?></td>
                        <td><?="IDR.".$data_individu['gaji']?></td>
                        <td><?=$data_individu['persentase']."%"?></td>
                        <td><?="IDR.".$data_individu['pajak']?></td>
                        <td>
                            <a href="#" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#updata<?= $no ?>">Edit</a>
                            <a href="./deletedata/deletepajakindividu.php?id=<?=$data_individu['id']?>" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    </tr>
                </tbody>

                  <!--FORM UPDATE-->
                <div class="modal fade" id="updata<?= $no ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Update Data</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    
                    <!--FORM-->
                    <form action="./editdata/editpajakindividu.php" method="POST">
                        <input type="hidden" name="id" value="<?= $data_individu['id']?>">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label">Nama</label>
                            <input type="text" class="form-control" name="nama" value="<?=$data_individu['nama']?>">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Gaji</label>
                            <input type="text" class="form-control" name="gaji" value="<?=$data_individu['gaji']?>">
                        </div>


                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" name="update">Update</button>
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
            <div class="modal fade" id="adddata" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Add Data</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    
                    <!--FORM-->
                    <form action="./inputdata/inputpajakindividu.php" method="POST">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label">Nama</label>
                            <input type="text" class="form-control" name="nama">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Gaji</label>
                            <input type="text" class="form-control" name="gaji">
                        </div>


                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success" name="submit">Add</button>
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    </div>
                    </form>

                    </div>
                </div>
            </div>
            <!--FORM AKHIR DATA-->

            <div class="d-grid gap-2 col-6 mx-auto">
                <a class="btn btn-success" type="button" data-bs-toggle="modal" data-bs-target="#adddata">Tambah Data</a>
                <a class="btn btn-warning" type="button" href="../index2.html">Back</a>
            </div>
        </nav>
    </main>
    
</body>

</html>