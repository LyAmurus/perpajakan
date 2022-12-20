<?php

include '../konek.php';
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}
$fname = isset ($_POST['fname']) ? $_POST['fname'] : '';
$lname = isset ($_POST['lname']) ? $_POST['lname'] : '';
$nik = isset ($_POST['nik']) ? $_POST['nik'] : '';
$adress = isset ($_POST['adress']) ? $_POST['adress'] : '';
$email = isset ($_POST['email']) ? $_POST['email'] : '';
$lahir = isset ($_POST['lahir']) ? $_POST['lahir'] : '';
$foto = isset ($_POST['foto']) ? $_POST['foto'] : '';



if (isset($_POST['submit'])) {
    $usersaatini = $_SESSION['username'];
    $sql = "UPDATE data_user SET fname='$fname', lname='$lname', nik='$nik', adress='$adress', email='$email', lahir='$lahir', foto='$foto' WHERE username='$usersaatini'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "<script>alert('Data berhasil diupdate!')</script>";
        header ("Location: profil.php");
    } else {
        echo "<script>alert('Data gagal diupdate!')</script>";
    }
}

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
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
    <link rel="stylesheet" href="assets/settinguser/style.css">
    <link rel="stylesheet" href="assets/settinguser/responsive.css">
    <link rel="shortcut icon" href="assets/settinguser/users.svg" type="image/x-icon">

</head>

<body>
    <header>
        <div class="big-header">
            <div class="left">
                <div class="logo">
                    <h1>JakPajak</h1>
                </div>
                <div class="menu-Items">
                    <ul class="main-Ul dul-color">
                        <a href="../../homepageuser.php" style="text-decoration: none;"><li>Home</li></a>
                    </ul>
                </div>
            </div>
            <div class="right">
                <div class="user-avtar">
                    <div class="imgg">
                        <a href="profil.php">
                        <img src="<?php echo $foto; ?>" alt="">
                        </a>
                    </div>
                </div>
                <img src="<?php echo $foto; ?>" class="menu-icon" alt="">
            </div>
        </div>
    </header>


    <section>
        <div class="acc-menu-open-dots">
            <img src="<?php echo $foto; ?>" alt="" id="accMenuThreeDots">
        </div>
    </section>

    <section>
        <div class="account-Menu">
            <div class="account-Menu-sect-items">
                <button>Account</button>
                <button>Socail Profiles</button>
            </div>
        </div>
    </section>
    <section class="second-section">
        <div class="main-account-page-content">
            <div class="sec-right">
                <div class="sect-heading">
                    <h1>Settings Account</h1>
                </div>
                <div class="sect-items">
                    <p><a href ="../../assets/signout.php">Logout</a></p>

                </div>
            </div>



<!-- Account Section -->
            <div class="sect-left" id="accountSection">
                <div class="dect-left-heading-1">
                    <h1>Account</h1>
                </div>
                <div class="sect-left-avatar-2">
                    <div class="sect-left-avatar-img">
                        <img src="<?php echo $foto ?>" alt="">
                    </div>
                    <div class="name-bio">
                        <p class="user-name" id="userNameAccount">
                            User
                        </p>
                        <p class="bio" id="UserBioAccount">
                            .
                        </p>
                    </div>
                </div>
                <!-- <div class="btns">
                    <button>Upload</button>
                </div> -->
                <hr size="1px" style="margin: 30px 0px 10px 0px;">  
                

                <div class="account-edit-form-5">
                    <form method="post" class="acc-edit-frm">
                        <div class="form-1" >
                            <div class="inner-form-1">
                            <input type="hidden" name="id" value="<?php echo $id ?>"/>
                                <p>First Name</p>
                                <input type="text" name="fname" value="<?php echo $fname; ?>">
                            </div>
                            <div class="inner-form-2">
                                <p>Last Name</p>
                                <input type="text" name="lname" value="<?php echo $lname; ?>">
                            </div>
                        </div>
                        <div class="form-2">
                            <div class="inner-form-2-1">
                                <p>NIK</p>
                                <input type="Nik" name="nik" value="<?php echo $nik; ?>">
                            </div>
                            <div class="inner-form-2-2">
                                <p>Tanggal Lahir</p>
                                <input type="text" name="lahir" value="<?php echo $lahir ?>">
                                </div>
                                <div>
                                <p>Insert Link Foto</p>
                                <input type="text" name="foto" value="<?php echo $foto; ?>">
                            </div>
                            <div class="form-3">
                            <div class="inner-form-3-1">
                                <p>Email</p>
                                <input type="email" name="email"value="<?php echo $email; ?>">
                            </div>
                            <div class="inner-form-3-1">
                                <p>Address</p>
                                <input type="Address" name="adress"value="<?php echo $adress; ?>">
                            </div>
                            </div>
                        </div>
                            <input type="submit" name="submit"class="save-btn" value="submit">
                            <a href="../../homepageuser.php"><button>Reset Form</button></a>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="main-account-page-content-mobile" id="mobileAccMenuSection">
            <div class="sec-right-mobile">
                <div class="sect-heading-mobile">
                    <h1>Settings</h1>
                    <img src="https://i.ibb.co/FKXL7gR/Whats-App-Image-2022-12-17-at-12-03-41.jpg" alt="" id="accMenuCross">
                </div>
                <div class="sect-items-mobile">
                    <p id="accountItemMobile">Account</p>
                    <p id="logOutItemMobile">LogOut</p>
                </div>
            </div>
    </section>


</body>

</html>

