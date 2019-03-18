<?php include "../../viewer/includes/header_mypages.php";?>
<?php include "../../viewer/includes/modal_karijera.php";?>

    <div class="wrapper">

<?php include "../../viewer/includes/navigation_mypages.php";?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header dugme-dodaj">
                <button class="btn margin logo-bgr-dark" id="open_modal">Dodaj konkurs</button>
            </section>

            <!-- Main content -->
            <section class="content">


                <div class="row">

                    <div class="col-xs-12">
                        <div class="box">
                            <div class="box-header">
                                <h3 class="box-title">Tabela konkursa</h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <table id="example1" class="table table-bordered table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>Redni broj konkursa</th>
                                            <th>Naslov konkursa</th>
                                            <th>Početak konkursa</th>
                                            <th>Kraj konkursa</th>
                                            <th>Status konkursa</th>
                                            <th>Opcija izmijeni</th>
                                            <th>Opcija deaktiviraj</th>
                                            <th>Opcija izbriši</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <?php prikaziTabeluKarijera(); ?>
                                    </tbody>

                                </table>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->


            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <?php include "../../viewer/includes/footer_mypages.php";?>