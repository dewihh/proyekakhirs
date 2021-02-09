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
            <h1>Puskesmas Teknologi Rekayasa Internet</h1>
            <div class="container">
                <div class="card">
                    <div class="card__satu">
                        <a href="<?= base_url('Home/service') ?>">
                            <img src="<?= base_url('assets/img/poli umum.svg') ?>">
                            <p>POLI UMUM</p>
                        </a>
                        <div class="bullet">A</div>
                    </div>
                    <div class="card__satu">
                        <a href="<?= base_url('Home/service') ?>">
                            <img src="<?= base_url('assets/img/poli gigi.svg') ?>">
                            <p>POLI GIGI</p>
                        </a>
                        <div class="bullet">A</div>
                    </div>
                    <div class="card__satu">
                        <a href="<?= base_url('Home/service') ?>">
                            <img src="<?= base_url('assets/img/poli kia.svg') ?>">
                            <p>POLI KIA</p>
                        </a>
                        <div class="bullet">A</div>
                    </div>
                    <div class="card__satu">
                        <a href="<?= base_url('Home/service') ?>">
                            <img src="<?= base_url('assets/img/poli gizi.svg') ?>">
                            <p>POLI GIZI</p>
                        </a>
                        <div class="bullet">A</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>