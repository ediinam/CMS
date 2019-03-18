<?php include "../../viewer/includes/header_mypages.php";?>
<?php include "../../viewer/includes/modal_proizvodi.php";?>

    <div class="wrapper">

    <?php include "../../viewer/includes/navigation_mypages.php";?>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header dugme-dodaj">
                <button class="btn margin logo-bgr-dark" id="open_modal_proizvodi">Dodaj proizvod</button>
            </section>

            <!-- Main content -->
            <section class="content">

                <div class="row">

                    <div class="col-xs-12">
                        <div class="box">
                            <div class="box-header">
                                <h3 class="box-title">Tabela proizvoda</h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <table id="example1" class="table table-bordered table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>Redni broj proizvoda</th>
                                            <th>Naslov proizvoda</th>
                                            <th>Datum unosa proizvoda</th>
                                            <th>Opcija izmijeni</th>
                                            <th>Opcija deaktiviraj</th>
                                            <th>Opcija izbriši</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <?php prikaziTabeluProizvodi();?>
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
