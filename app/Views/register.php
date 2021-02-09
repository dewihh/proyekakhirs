<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Welcome to CodeIgniter 4!</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Sniglet&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Zetta&display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico" />
    <link rel="stylesheet" href="<?= base_url('assets/css/custom.css') ?>" />
    <!-- STYLES -->
</head>

<body>
    <div class="homepages">
        <div class="homepages__title">
            <h1>Selamat Datang</h1>
            <p>Sistem Informasi Pelayanan Kesehatan</p>
        </div>
        <div class="homepages__navbar">
            <div class="navbar__menu">
                <ul>
                    <li>
                        <a class="overlay" href="<?= base_url('Home') ?>"><span class="texts">Home</span></a>
                    </li>
                    <li>
                        <a class="overlay" href="<?= base_url('Home/register') ?>"><span class="texts">Registration</span></a>
                    </li>
                    <li>
                        <a class="overlay" href="<?= base_url('Home/read') ?>"><span class="texts">Read Tag ID</span></a>
                    </li>
                    <li>
                        <a class="overlay" href="./home.html"><span class="texts">Service</span></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="homepages__main">
            <h1>Registration Form</h1>
            <div class="input__main">
                <div class="container__input">
                    <form class="form-horizontal" action="insertDB.php" method="post">
                        <div class="control-group">
                            <label class="control-label">ID Pasien</label>
                            <div class="controls">
                                <textarea name="id" id="getUID" placeholder="Please Scan your Card / Key Chain to display ID" rows="1" cols="1" required></textarea>
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label">Nama Pasien</label>
                            <div class="controls">
                                <input id="div_refresh" name="name" type="text" placeholder="" required>
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label">Jenis Kelamin</label>
                            <div class="controls">
                                <select name="gender">
                                    <option value="Male">Laki-Laki</option>
                                    <option value="Female">Perempuan</option>
                                </select>
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label">Usia</label>
                            <div class="controls">
                                <input name="usia" type="text" placeholder="" required>
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label">Nama KK</label>
                            <div class="controls">
                                <input name="card" type="text" placeholder="" required>
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label">Alamat</label>
                            <div class="controls">
                                <input name="address" type="text" placeholder="" required>
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label">Nomor Telepon</label>
                            <div class="controls">
                                <input name="mobile" type="text" placeholder="" required>
                            </div>
                        </div>

                        <div class="form-actions">
                            <button type="submit" class="btn btn-success">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</body>

</html>