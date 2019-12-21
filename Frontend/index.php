<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Lern Plattform</title>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="plugins/select2/css/select2.min.css">
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-navbar-fixed">
<div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="?p=home" class="nav-link">Home</a>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="#" class="brand-link">
            <!--<img src="dist/img/logo.png" alt="Lern Plattform" class="brand-image img-circle elevation-3" style="opacity: .8">-->
            <span class="brand-text font-weight-light">Lern Plattform</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <li class="nav-item">
                        <a href="?p=home" class="nav-link">
                            <i class="nav-icon fas fa-home"></i>
                            <p>Home</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="?p=showCategories" class="nav-link">
                            <i class="nav-icon fas fa-eye"></i>
                            <p>Kategorien ansehen</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="?p=createCardSet" class="nav-link">
                            <i class="nav-icon fas fa-folder-plus"></i>
                            <p>Kartenset erstellen</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="?p=createCard" class="nav-link">
                            <i class="nav-icon fas fa-folder-plus"></i>
                            <p>Karte erstellen</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="?p=createQuartett" class="nav-link">
                            <i class="nav-icon fas fa-folder-plus"></i>
                            <p>Quartett erstellen</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="?p=showQuartett" class="nav-link">
                            <i class="nav-icon fas fa-eye"></i>
                            <p>Quartett ansehen</p>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <?php
        $page = isset($_GET["p"]) ? $_GET["p"] : "home";
        switch ($page){
            // Create
            case "createCardSet":
                include("pages/createCardSet.php"); break;
            case "createCard":
                include("pages/createCard.php"); break;
            case "createQuartett":
                include("pages/createQuartett.php"); break;

            // Show
            case "showQuartett":
                include("pages/showQuartett.php"); break;
            case "showCardSets":
                include("pages/showCardSets.php"); break;
            case "showCategories":
                include("pages/showCategories.php"); break;

            default:
                include("pages/home.php"); break;
        }
        ?>
    </div>
    <!-- /.content-wrapper -->

    <!-- Main Footer -->
    <footer class="main-footer">
        <!-- To the right -->
        <div class="float-right d-none d-sm-inline">
            MA 1
        </div>
        <strong>Copyright &copy; 2019. All rights reserved.</strong>
    </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Select2 -->
<script src="plugins/select2/js/select2.full.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

<script>
    $(function () {
        //Initialize Select2 Elements
        $('.select2').select2();
    });
</script>
</body>
</html>
