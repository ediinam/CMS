<form action="" class="display-flex-column form-container" id="user_forma">

<div>
    <label for="">Ime i prezime korisnika</label>
    <input type="text" class="form-control disable" name="ime_prezime" id="ime_prezime" value="<?php echo $korisnici_ime_prezime;?>">
</div>

<div>
    <label for="">Pozicija u firmi</label>
    <input type="text" class="form-control disable" name="pozicija" id="pozicija" value="<?php echo $korisnici_pozicija;?>">
</div>

<div>
    <label for="">Korisničko ime</label>
    <input type="text" class="form-control disable" name="korisnicko_ime" id="korisnicko_ime" value="<?php echo $korisnici_korisnicko_ime;?>">
</div>

<div>
    <label for="">Lozinka</label>
    <div class="display-flex-row-evenly">
        <input type="password" id="lozinka" class="form-control" name="lozinka" value="<?php echo $korisnici_lozinka;?>">
        <input type="button" class="browse-btn lozinka-width" id="lozinka_pop_up" value="Promijeni lozinku">
    </div>
</div>

<div class="form-group">
<label for="">Profilna fotografija</label>
<input type="text" class="form-control img-input" id="profilna_fotografija" name="profilna_fotografija" value="<?php echo $korisnici_slika;?>">
<!-- <div id="uploads"></div> -->
<div class="upload-imgs-container upload-profileimg-container-width">
<div class="upload-image-container">
<input type="file" class="dropzone" id="profilnaslika" name="profilnaslika" onchange="statusInput('profilnaslika','profilna_fotografija')">
</div>
<div>
<input type="file" value="Upload" id="profilnaslikabtn" name="profilnaslikabtn" class="upload-btn" onchange="statusInput('profilnaslikabtn','profilna_fotografija')">
</div>
</div>
</div>

<div class="form-group btn-group modal-btns">
<input type="submit" class="browse-btn lozinka-width" id="submit" value="Sačuvaj">
<input type="button" class="browse-btn lozinka-width odustani" id="odustani" value="Odustani">
</div>

</form>