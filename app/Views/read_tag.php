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
            <h1>Please Scan Tag To Display ID</h1>
            <div class="input__main">
                <div id="show__user__id">
                    <form>
                        <table width="452" align="center" cellpadding="0" cellspacing="1" style="padding: 2px">
                            <tbody>
                                <tr>
                                    <td height="40" align="center" bgcolor="#10a0c5">
                                        <font color="#FFFFFF">
                                            <b>User Data</b>
                                        </font>
                                    </td>
                                </tr>
                                <tr>
                                    <td bgcolor="#f9f9f9">
                                        <table width="452" align="center" cellpadding="5" cellspacing="0">
                                            <tr>
                                                <td width="150" align="left" class="lf">ID Pasien</td>
                                                <td style="font-weight:bold">:</td>
                                                <td align="left">--------</td>
                                            </tr>
                                            <tr bgcolor="#f2f2f2">
                                                <td align="left" class="lf">Nama Pasien</td>
                                                <td style="font-weight:bold">:</td>
                                                <td align="left">--------</td>
                                            </tr>
                                            <tr>
                                                <td align="left" class="lf">Jenis Kelamin</td>
                                                <td style="font-weight:bold">:</td>
                                                <td align="left">--------</td>
                                            </tr>
                                            <tr bgcolor="#f2f2f2">
                                                <td align="left" class="lf">Usia</td>
                                                <td style="font-weight:bold">:</td>
                                                <td align="left">--------</td>
                                            </tr>
                                            <tr>
                                                <td align="left" class="lf">Nama KK</td>
                                                <td style="font-weight:bold">:</td>
                                                <td align="left">--------</td>
                                            </tr>
                                            <tr>
                                                <td align="left" class="lf">Alamat</td>
                                                <td style="font-weight:bold">:</td>
                                                <td align="left">--------</td>
                                            </tr>
                                            <tr>
                                                <td align="left" class="lf">No Telepon</td>
                                                <td style="font-weight:bold">:</td>
                                                <td align="left">--------</td>
                                            </tr>

                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </form>
                    </form>
                </div>
            </div>
        </div>
</body>

</html>