<!DOCTYPE php>
<!--
Template Name: Academic Education V2
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
<php>
<head>
<title>SMKN 64 JAKARTA</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<style>
    .form-container {
        display: flex;
        flex-direction: column;
        margin-top: 50px;
    }
    .form-row {
        display: flex;
        justify-content: space-between;
        padding-right: 10px;
        margin-bottom: 10px;
    }
    .form-input {
        width: 60%;
    }
    .full-width {
        width: 100%;
    }

</style>
</head>
<body id="top">
<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ -->
<div class="wrapper row0">
  <div id="topbar" class="clear"> 
    <!-- ################################################################################################ -->
    <nav>
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Contact Us</a></li>
        <li><a href="#">A - Z Index</a></li>
        <li><a href="#">Student Login</a></li>
        <li><a href="#">Staff Login</a></li>
      </ul>
    </nav>
    <!-- ################################################################################################ --> 
  </div>
</div>
<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ -->
<div class="wrapper row1">
  <header id="header" class="clear"> 
    <!-- ################################################################################################ -->
    <div id="logo" class="fl_left">
      <h1><a href="index.php">SMKN 64 JAKARTA</a></h1>
      <p>SUKSES ( Smart, Unggul, Kreatif, Semangat, Empati, dan Sopan)</p>
    </div>
    <div class="fl_right">
      <form class="clear" method="post" action="#">
        <fieldset>
          <legend>Search:</legend>
          <input type="text" value="" placeholder="Search Here">
          <button class="fa fa-search" type="submit" title="Search"><em>Search</em></button>
        </fieldset>
      </form>
    </div>
    <!-- ################################################################################################ --> 
  </header>
</div>
<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ -->
<div class="wrapper row2">
  <div class="rounded">
    <nav id="mainav" class="clear"> 
      <!-- ################################################################################################ -->
      <ul class="clear">
        <li class="active"><a href="../index.php">BERANDA</a></li>
        <li class=""><a href="../pages/profil.php">PROFIL</a></li>
        <li><a href="../pages/sidebarvisimisi.php">VISI DAN MISI</a></li>
        <li><a href="../pages/informasi-sekolah.php">INFORMASI SEKOLAH</a></li>
        <li><a href="../pages/galleryguru.php">GURU DAN TU</a></li>
        <li><a class="drop" href="#">E-PERPUSTAKAAN</a>
          <ul>
            <li><a href="../pages/buku-pelajaran.php">BUKU PELAJARAN</a></li>
            <li><a href="../pages/buku-fiksi.php">BUKU FIKSI</a></li>
            <li><a href="../pages/buku-cerpen.php">CERPEN</a></li>
            <li><a href="../pages/buku-rakyet.php">CERITA RAKYAT</a></li>
            <li><a href="../pages/buku-pojok-kisah.php">POJOK KISAH</a></li>
            <li><a href="../pages/buku-tepian-sajak.php">TEPIAN SAJAK</a></li>
          </ul>
        </li>
        <li><a class="drop" href="#">KATEGORI</a>
          <ul>
            <li><a href="../pages/pkl.php">PKL</a></li>
            <li><a href="../pages/kopi.php">KOPI 64</a></li>
          </ul>
        </li>
        <li><a class="drop" href="#">DIREKTORI</a>
          <ul>
            <li><a href="../pages/direktori-alumni.php">DIREKTORI ALUMNI</a></li>
            <li><a href="../pages/pendaftaran-alumni.php">PENDAFTARAN ALUMNI</a></li>
            <li><a href="../pages/direktori-pelajaran.php">DIREKTORI PESERTA DIDIK</a></li>
          </ul>
        </li>
        <li><a class="drop" href="#">GALERI</a>
          <ul>
            <li><a href="../pages/galerry.php">GALERI FOTO</a></li>
            <li><a href="../pages/galeryvideor.php">GALERI VIDEO</a></li>
          </ul>
        </li>
        <li><a href="../pages/hubungi-kami.php">HUBUNGI KAMI</a></li>
        
      <!-- ################################################################################################ --> 
    </nav>
  </div>
</div>
<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <div class="rounded">
    <main class="container clear"> 
      <!-- main body --> 
      <!-- ################################################################################################ -->
      <div id="content" class="three_quarter first"> 
        <!-- ################################################################################################ -->
        <div class="left-box">
        <ul class="nospace listing">
            <h2>Formulir Pendaftaran</h2>

            <!-- Tambahkan iframe Google Maps di bawah ini -->
            <figure class="center full-width">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.780738252593!2d106.76265531525593!3d-6.315109695425299!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f41c78c360cd%3A0x24833d4e2f3e6ca6!2sSMK%20Negeri%2064%20Jakarta!5e0!3m2!1sen!2sid!4v1633275078360!5m2!1sen!2sid" width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </figure>
        
            <form action="proses_pendaftaran.php" method="post" enctype="multipart/form-data" class="form-container">
                <div class="form-row">
                    <label for="nama_lengkap" class="form-label">Nama Lengkap *</label>
                    <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-input" required>
                </div>
                <div class="form-row">
                    <label for="nama_lengkap" class="form-label">Email *</label>
                    <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-input" required>
                </div>
                <div class="form-row">
                    <label for="nama_lengkap" class="form-label">URL *</label>
                    <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-input" required>
                </div>
                <div class="form-row">
                    <label for="nama_lengkap" class="form-label">Pesan *</label>
                    <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-input" required>
                </div>
                <!-- Sisipkan elemen formulir lainnya di sini -->
                <input type="submit" value="Submit">
            </form>

          
            
            
          </ul>
    </div>
        <!-- ################################################################################################ --> 
      </div>
      <!-- ################################################################################################ --> 
      <!-- ################################################################################################ -->
      <div class="sidebar one_quarter"> 
        <!-- ################################################################################################ -->
        <h6> KEPALA SEKOLAH</h6>
        <nav class="sdb_holder">
          <div class="bio-data">
            <img src="../images/demo/video.png" alt="Gambar Profil" class="large-image">
            <p>Nama: DEWI PUSPITASARI, S.ST.PAR, M.PAR </p>
            <p>Tanggal Lahir: 1 Januari 1978</p>
            <p>Alamat: Jl. Jatibening</p>
          </div>
        </nav>
        <!-- ################################################################################################ --> 
      </div>
      <!-- ################################################################################################ --> 
      <!-- / main body -->
      <div class="clear"></div>
    </main>
  </div>
</div>
<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ -->
<footer>
  <div class="footer-gray">
    <div class="footer-custom">
      <div class="footer-lists">
        <div class="footer-list-wrap">
          <h6 class="ftr-hdr">Lokasi</h6>
          <ul class="ftr-links-sub">
            <li>Gifted School :, Jl. Jaani Nasir, RT.5/RW.11, Cawang, Kec. Kramat jati, Daerah Khusus Ibukota Jakarta 13630</li>
          </ul>
          <h6 class="ftr-hdr">Telepon</h6>
          <ul class="ftr-links-sub">
            <li><a href="http://www.art.fr" rel="nofollow">08978891895 (Hilal)</a></li>
            <li><a href="https://www.art.co.uk" rel="nofollow">081212001521 (Agus)</a></li>
          </ul>
        </div>
        <!--/.footer-list-wrap-->
        
        <div class="footer-list-wrap">
          <h6 class="ftr-hdr">Tags</h6>
          <ul class="ftr-links-sub">
            <li><a href="/asp/aboutus/default-asp/_/posters.htm" rel="nofollow">#smknhebat</a></li>
            <li><a href="http://corporate.art.com/careers" rel="nofollow">#smknselaluhebat</a></li>
            <li><a href="/asp/landing/artistrising" rel="nofollow">#smkn64bisa</a></li>
            <li><a href="/~/art-for-business" rel="nofollow">#smknmaju</a></li>
            <li><a href="http://affiliates.art.com/index.aspx" rel="nofollow">#ppdb64</a></li>
            <li><a href="/catalog" rel="nofollow"><strong>#jujursmkn64</strong></a></li>
            <li><a href="http://blog.art.com" rel="nofollow">#bersamasmkn64</a></li>
          </ul>
        </div>
        <!--/.footer-list-wrap-->
      </div>
      <!--/.footer-lists-->
      <div class="footer-email">
        <h6 class="ftr-hdr">masukan gmail anda</h6>
        <div id="ftr-email" class="ftr-email-form">
          <form id="ftrEmailForm" method="post" action="http://em.art.com/pub/rf">
            <div class="error">Please enter a valid email address</div>
            <input type="text" name="email_address_" id="ftrEmailInput" class="input" placeholder="Enter email address" />
            <!--
                -->
            <input type="submit" class="button" value="kirim" />
            <input type="hidden" name="country_iso2" value="">
            <input type="hidden" name="language_iso2" value="en">
            <input type="hidden" name="site_domain" value="art.com">
            <input type="hidden" name="email_acq_source" value="01-000001">
            <input type="hidden" name="email_acq_date" value="" id="ftr-email-date">
            <input type="hidden" name="brand_id" value="ART">
            <input type="hidden" name="_ri_" value="X0Gzc2X%3DWQpglLjHJlYQGnp51yrMf2qXdC9tjU8pzgMtwfYzaVwjpnpgHlpgneHmgJoXX0Gzc2X%3DWQpglLjHJlYQGnyLSq2fzdkuzdzglHMsUhgeNzaSgkk">
          </form>
        </div>
        <!--/.ftr-email-form-->
        <div class="ftr-email-privacy-policy"></div>
      </div>
      <!--/.footer-email-->
      <div class="footer-social">
        <h6 class="ftr-hdr">Follow Us</h6>
        <ul>
          <li>
            <a href="https://www.facebook.com/art.com" title="Facebook" onclick="_gaq.push(['_trackSocial', 'Facebook', 'Follow', 'Footer', 'undefined', 'True']);">
              <img width="24" height="24" alt="Like us on Facebook" src="http://cache1.artprintimages.com/images/jump_pages/rebrand/footer/fb.png">
            </a>
          </li>
          <li>
            <a href="https://plus.google.com/108089796661280870153" title="Google+" onclick="_gaq.push(['_trackSocial', 'GooglePlus', 'Follow', 'Footer', 'undefined', 'True']);">
              <img width="24" height="24" alt="Follow us on Google+" src="http://cache1.artprintimages.com/images/jump_pages/rebrand/footer/gplus.png">
            </a>
          </li>
          <li>
            <a href="https://pinterest.com/artdotcom/" target="_blank">
              <img width="24" height="24" alt="Follow us on Pinterest" src="http://cache1.artprintimages.com/images/jump_pages/rebrand/footer/pin-badge.png">
            </a>
          </li>
          <li>
            <a target="_blank" href="http://instagram.com/artdotcom/">
              <img width="24" height="24" alt="Follow us on Instagram" src="http://cache1.artprintimages.com/images/jump_pages/rebrand/footer/instagram-badge.png">
            </a>
          </li>
          <li>
            <a href="https://www.twitter.com/artdotcom" title="Twitter" onclick="_gaq.push(['_trackSocial', 'Twitter', 'Follow', 'Footer', 'undefined', 'True']);">
              <img width="67" alt="Follow us on Twitter" src="http://cache1.artprintimages.com/images/jump_pages/rebrand/footer/twitter.png">
            </a>
          </li>
        </ul>
      </div>
      <!--/.footer-social-->
      <div class="footer-legal">
        <p>&copy; SMK NEGERI 64 JAKARTA<a href="/help/privacy-policy.php" rel="nofollow"></a> | <a href="/help/terms-of-use.php" rel="nofollow"></a> | <a href="/help/terms-of-sale.php" rel="nofollow"></a></p>
      </div>
      <!--/.footer-legal-->
      <div class="footer-payment">
        <ul>
          <li class="ftr-stella">
            <span title="Stella Service" onclick="openLink('http://www.stellaservice.com/profile/Art.com/')"></span>
          </li>
          <li>
            <span onclick="clickTrack(); return false;" onmouseover="this.style.cursor='pointer'"><img border="0" alt="HACKER SAFE certified sites prevent over 99.9% of hacker crime." src="https://images.scanalert.com/meter/www.art.com/31.gif"></span>
          </li>
          <li class="ftr-bbb">
            <span title="BBB" onclick="openLink('http://www.bbb.org/raleigh-durham/business-reviews/art-suppliers/artcom-inc-in-raleigh-nc-5001914')"></span>
          </li>
        </ul>
      </div>
      <!--/.footer-payment-->
    </div>
    <!--/.footer-custom-->
  </div>
  <!--/.footer-gray-->
<!-- JAVASCRIPTS --> 

<script src="../layout/scripts/jquery.min.js"></script> 
<script src="../layout/scripts/jquery.fitvids.min.js"></script> 
<script src="../layout/scripts/jquery.mobilemenu.js"></script>
</body>
</php>