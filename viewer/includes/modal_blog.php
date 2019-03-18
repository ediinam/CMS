<!-- Modal window -->
<div class="modal-window close-modal" id="modal_window">
    <span class="modal-pop-up-exit close-modal"></span>
    <div class="modal-body close-modal" id="modal_body">
  
        <form enctype="multipart/form-data" id="forma_blog">
                <div class="modal-container display-flex-column modal-element">

                    <div class="display-flex-row-evenly">
                        <h3>Crnogorski</h3>
                        <h3 class="text-right">Engleski</h3>
                    </div>


                    <div class="form-group">
                        <label>Naslov bloga</label>
                        <div class="display-flex-row-evenly">
                            <input type="text" class="form-control" name="naslov" id="naslov">
                            <input type="text" class="form-control" name="nasloven" id="nasloven">
                        </div>
                    </div>



                    <div class="form-group">
                        <label>Ime i prezime autora</label>
                        <div class="display-flex-row-evenly">
                            <input type="text" class="form-control" name="ime_prezime" id="ime_prezime">
                        </div>
                    </div>


                    <div class="form-group">
                        <label>Datum kreiranja bloga</label>
                        <div class="">
                            <div class="input-group date">
                                <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                <input type="text" class="form-control pull-right" id="datepicker" name="datum_kreiranja" placeholder="DD/MM/YY">
                            </div>
                        </div>
                    </div>


                    <div class="form-group">
                        <label>Uvodni tekst</label>
                        <div class="display-flex-row-evenly">
                            <textarea class="form-control" rows="2" name="uvodni_tekst" id="uvodni_tekst"></textarea>
                            <textarea class="form-control" rows="2" name="uvodni_teksten" id="uvodni_teksten"></textarea>
                        </div>
                    </div>

                    <!-- <div class="form-group">
                        <label for="">Tekst bloga</label>
                        <div class="display-flex-row-evenly">
                            <div><textarea id="editor1" name="editor1" rows="8" cols="50"></textarea></div>
                            <div><textarea id="editor2" name="editor2" rows="8" cols="50"></textarea></div>
                        </div>
                    </div> -->


                    <div class="form-group">
                        <label for="">Upload cover fotografije</label>
                        <input type="text" class="form-control img-input" id="statusinput" name="cover_fotografija">
                        <div class="upload-imgs-container upload-imgs-container-width">
                            <div class="upload-image-container">
                                <input type="file" class="dropzone" id="coverslika" name="coverslika" onchange="statusInput('coverslika','statusinput')">
                            </div>
                            <div>
                               <input type="file" value="Upload" id="coverslikabtn" name="coverslikabtn" class="upload-btn" onchange="statusInput('coverslikabtn','statusinput')">
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

                    <div class="form-group">
                        <label>Tagovi</label>
                        <div class="display-flex-row-evenly">
                            <input type="text" class="form-control"mname="tag" id="tag">
                            <input type="text" class="form-control" name="tagen" id="tagen">
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