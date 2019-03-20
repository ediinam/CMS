<!-- Modal window -->
<div class="modal-window close-modal" id="modal_window">
    <span class="modal-pop-up-exit close-modal"></span>
    <div class="modal-body close-modal" id="modal_body">

        <form enctype="multipart/form-data" id="forma_karijera">
            <div class="modal-container display-flex-column modal-element">

                <div class="display-flex-row-evenly">
                    <h3>Crnogorski</h3>
                    <h3 class="text-right">Engleski</h3>
                    <input type="text" name="karijera_id" id="karijera_id" style="display:none;">
                </div>

                <div class="form-group">
                    <label>Naslov novosti</label>

                    <div class="display-flex-row-evenly">
                        <input type="text" class="form-control" name="naslov" id="naslov">
                        <input type="text" class="form-control" name="nasloven" id="nasloven">
                    </div>
                </div>

                <div class="form-group">
                    <label>Datum početka konkursa</label>
                    <div class="">
                        <div class="input-group date">
                            <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                            <input type="text" class="form-control pull-right" name="datum_pocetka" id="datepicker" placeholder="DD/MM/YY">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label>Datum završetka konkursa</label>
                    <div class="">
                        <div class="input-group date">
                            <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                            <input type="text" class="form-control pull-right" name="datum_zavrsetka" id="datepicker2" placeholder="DD/MM/YY">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label>Opis radnog mjesta</label>
                    <div class="display-flex-row-evenly">
                        <textarea class="form-control" rows="2" name="opis" id="opis"></textarea>
                        <textarea class="form-control" rows="2" name="opisen" id="opisen"></textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label for="">Upload cover fotografije</label>
                    <input type="text" class="form-control img-input" id="statusinput" name="cover_fotografija" readonly>
                    <div class="upload-imgs-container upload-imgs-container-width">
                        <div class="upload-image-container">
                        <img src="" class="preview-img fotografija" id="cover_preview" alt="Prevucite sliku!">
                            <input type="file" class="dropzone" id="coverslika" name="coverslika" onchange="statusInput('coverslika','statusinput')">
                        </div>
                        <div>
                            <input type="file" value="Upload" id="coverslikabtn" name="coverslikabtn" class="upload-btn" onchange="statusInput('coverslikabtn','statusinput')">
                        </div>
                    </div>
                </div>

            </div>
            
            <div class="form-group btn-group modal-btns">
                <input type="submit" class="browse-btn lozinka-width" value="Sačuvaj">
                <input type="button" class="browse-btn lozinka-width odustani" value="Odustani">
            </div>
           
        </form>

    </div>
</div>
