<!-- Modal window -->
<div class="modal-window close-modal" id="modal_window">
    <span class="modal-pop-up-exit close-modal"></span>
    <div class="modal-body close-modal" id="modal_body">
    
        <form enctype="multipart/form-data" id="forma_proizvodi">
            <div class="modal-container display-flex-column modal-element">
                 
                    <div class="display-flex-row-evenly">
                        <h3>Crnogorski</h3>
                        <h3 class="text-right">Engleski</h3>
                        <input type="text" name="proizvodi_id" id="proizvodi_id" style="display:none;">
                    </div>

                    <div class="form-group">
                        <label>Naziv proizvoda</label>
                        <div class="display-flex-row-evenly">
                            <input type="text" class="form-control" name="naziv" id="naziv">
                            <input type="text" class="form-control" name="naziven" id="naziven">
                        </div>
                    </div>


                    <div class="form-group">
                        <label>Kratki opis proizvoda</label>
                        <div class="display-flex-row-evenly">
                            <input type="text" class="form-control" name="opis" id="opis">
                            <input type="text" class="form-control" name="opisen" id="opisen">
                        </div>
                    </div>


                    <div class="form-group">
                        <label>Uvodni tekst</label>
                        <div class="display-flex-row-evenly">
                            <textarea class="form-control" rows="2" name="uvodni_tekst" id="uvodni_tekst"></textarea>
                            <textarea class="form-control" rows="2" name="uvodni_teksten" id="uvodni_teksten"></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="">Tekst proizvoda</label>
                        <div class="display-flex-row-evenly">
                            <div><textarea id="editor1"  rows="8" cols="50" name="glavni_tekst"></textarea></div>
                            <div><textarea id="editor2"  rows="8" cols="50" name="glavni_tekst_en"></textarea></div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="">Upload cover fotografije</label>
                        <input type="text" class="form-control img-input" id="statusinput" name="upload_cover">
                         <div class="upload-imgs-container  upload-imgs-container-width">
                            <div class="upload-image-container">
                                <input type="file" class="dropzone" name="coverslika" id="coverslika" onchange="statusInput('coverslika','statusinput')">
                            </div>
                            <div>
                               <input type="file" value="Upload" name="coverslikabtn" id="coverslikabtn" class="upload-btn" onchange="statusInput('coverslikabtn','statusinput')">
                            </div>
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="">Upload uvodne fotografije</label>
                        <input type="text" class="form-control img-input" id="statusinput2" name="upload_uvodna">
                        <!-- <div id="uploads"></div> -->
                         <div class="upload-imgs-container upload-imgs-container-width">
                            <div class="upload-image-container">
                                <input type="file" class="dropzone" id="uploadslika" name="uploadslika" onchange="statusInput('uploadslika','statusinput2')">
                            </div>
                            <div>
                               <input type="file" value="Upload" id="uploadslikabtn" name="uploadslikabtn" class="upload-btn" onchange="statusInput('uploadslikabtn','statusinput2')">
                            </div>
                        </div>
                    </div>
 
                    <div class="form-group">
                        <label>Alt tag</label>
                        <div class="display-flex-row-evenly">
                            <input type="text" class="form-control" name="alt" id="alt">
                            <input type="text" class="form-control" name="alten" id="alten">
                        </div>
                    </div>
            </div>

            <div class="form-group btn-group modal-btns">
                <input type="submit" name="submit" class="browse-btn lozinka-width" value="Sačuvaj">
                <input type="button" class="browse-btn lozinka-width odustani" value="Odustani">
            </div>
</form>
        </div>
    </div>
