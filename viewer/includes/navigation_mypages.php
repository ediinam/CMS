<header class="main-header logo-bgr-light">
<?php 
prikaziProfil();
?>
<!-- Logo -->
<a href="starter.php" class="logo logo-bgr-light">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><b>A</b></span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><b>Amplitudo</b></span>
</a>

<!-- Header Navbar: style can be found in header.less -->
<nav class="navbar navbar-static-top logo-bgr-light">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle logo-bgr-light" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
    </a>
    <!-- Navbar Right Menu -->
    <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
            <li class="user user-menu">
                <a href="profil.php">
                    <span class="hidden-xs"><?php echo $korisnici_ime_prezime; ?></span>
                    <img src="../img/<?php echo $korisnici_slika; ?>" class="user-image" alt="User Image">
                </a>
            </li>
            <li>
                <a href="../../controller/logout_user.php" class="logo-bgr-light" id="profile-page">Logout</a>
            </li>
        </ul>
    </div>

</nav>
</header>
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
<!-- sidebar: style can be found in sidebar.less -->
<section class="sidebar">
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active">
            <a href="starter.php">
                <i class="fa ion-clock"></i> <span>Posljednje aktivnosti</span>
            </a>
        </li>
        <li>
            <a href="proizvodi.php">
                <i class="fa ion-briefcase"></i><span>Proizvodi</span>
            </a>
        </li>
        <li>
            <a href="blog.php">
                <i class="fa ion-chatbubbles"></i> <span>Blog</span>
            </a>
        </li>
        <li>
            <a href="karijera.php">
                <i class="fa ion-arrow-graph-up-right"></i> <span>Karijera</span>
            </a>
        </li>
    </ul>
</section>
<!-- /.sidebar -->
</aside>
