<?php include "viewer/includes/header_index.php"; ?>

<body>
    <div class="index-module">
        <img class="index-logo" src="viewer/img/Amplitudo-logo.svg" alt="Amplitudo-logo.svg">
        <div class="index-box">

        <form action="" method="post" class="index-form" enctype="multipart/form-data" id="login_forma">
            <input id="korisnicko_ime" type="text" name="korisnicko_ime" placeholder="Korisničko ime">
            <input id="lozinka" type="text" name="lozinka" placeholder="Lozinka">
            <button type="submit" name="login" class="index-btn" id="login_btn">Login</button>
        </form>
        </div>
    </div>  

    <?php include "viewer/includes/footer_index.php"; ?>