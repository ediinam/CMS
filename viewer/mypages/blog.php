
<?php include "../../viewer/includes/header_mypages.php";?>
<?php include "../../viewer/includes/modal_blog.php"?>

    <div class="wrapper">

    <?php include "../../viewer/includes/navigation_mypages.php";?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header naslov-stranice">
                <h2>Administracija blogova</h2>
                <button class="btn margin logo-bgr-dark" id="open_modal">Dodaj blog</button>
            </section>

            <!-- Main content -->
            <section class="content">

                <div class="row">

                    <div class="col-xs-12">
                        <div class="box">
                            <div class="box-header">
                                <h3 class="box-title">Tabela blogova</h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <table id="example1" class="table table-bordered table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>Redni broj bloga</th>
                                            <th>Naslov bloga</th>
                                            <th>Datum unosa bloga</th>
                                            <th>Kreator bloga</th>
                                            <th>Opcija izmijeni</th>
                                            <th>Opcija deaktiviraj</th>
                                            <th>Opcija izbriši</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <?php prikaziTabeluBlog();?>
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