<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Starter</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
    <!-- jsGrid -->
    <link rel="stylesheet" href="../plugins/jsgrid/jsgrid.min.css">
    <link rel="stylesheet" href="../plugins/jsgrid/jsgrid-theme.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../dist/css/adminlte.min.css">
    <style>
        .hide {
            display: none;
        }
    </style>

</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <?php require 'navbar.php'; ?>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Aidatlar</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Starter Page</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->


            <!-- Main content -->
            <section class="content">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Aidatlar</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div id="jsGrid1"></div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
    </div>

    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    <script src="../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- jsGrid -->
    <script src="../plugins/jsgrid/demos/db.js"></script>
    <script src="../plugins/jsgrid/jsgrid.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../dist/js/demo.js"></script>

    <script>
        $('#jsGrid1').jsGrid({

            width: "100%",
            height: "600px",

            filtering: true,
            inserting: true,
            editing: true,
            sorting: true,
            paging: true,
            autoload: true,
            pageSize: 10,
            pageButtonCount: 5,
            deleteConfirm: "Do you really want to delete data?",

            controller: {
                loadData: function (filter) {
                    return $.ajax({
                        type: "GET",
                        url: "../config/fetch_data.php",
                        data: filter
                    });
                },
                insertItem: function (item) {
                    return $.ajax({
                        type: "POST",
                        url: "../config/fetch_data.php",
                        data: item
                    });
                },
                updateItem: function (item) {
                    return $.ajax({
                        type: "PUT",
                        url: "../config/fetch_data.php",
                        data: item
                    });
                },
                deleteItem: function (item) {
                    return $.ajax({
                        type: "DELETE",
                        url: "../config/fetch_data.php",
                        data: item
                    });
                },
            },


            fields: [
                
                {
                    name: "gider_id",
                    type: "text",
                    width: 150,
                    validate: "required"
                },

                {
                    name: "tarih",
                    title: "Tarih",
                    type: "text",
                    width: 150,
                    validate: "required"
                },
                {
                    name: "tutar",
                    title: "Aidat Tutarı",
                    type: "text",
                    width: 150,
                    validate: "required"
                },
               
                {
                    name: "gider_tipi_id",
                    type: "hidden",
                
                },


              
            /*    {
                    name: "odendi_mi",
                    title: "Aidat Ödenme Durumu",
                    type: "select",
                    items: [
                        { Name: "", Id: '' },
                        { Name: "Odendi", Id: 'Odendi' },
                        { Name: "Odenmedi", Id: 'Odenmedi' }
                    ],
                    valueField: "Id",
                    textField: "Name",
                    validate: "required"
                },
                   */

                {
                    type: "control"
                }
            ]

       

        });

     
    </script>

</body>

</html>