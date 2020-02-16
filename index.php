<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Lern Plattform</title>

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Global Scripts -->
    <script src="dist/js/global.js"></script>
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="plugins/select2/css/select2.min.css">
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <!-- Custom style -->
    <link rel="stylesheet" href="dist/css/custom.css">
    <link rel="stylesheet" media="print" href="dist/css/print.css" />
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
                        <a href="?p=showSetCards" class="nav-link">
                            <i class="nav-icon fas fa-eye"></i>
                            <p>Karten pro Set ansehen</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="?p=createQuartett" class="nav-link inactive">
                            <i class="nav-icon fas fa-folder-plus"></i>
                            <p>Quartett erstellen (inaktiv)</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="?p=showQuartett" class="nav-link inactive">
                            <i class="nav-icon fas fa-eye"></i>
                            <p>Quartett ansehen (inaktiv)</p>
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
        include_once("helper.php");
        
        // Set custom err handler -> throw an error also for warnings!
        set_error_handler(function($errno, $errstr, $errfile, $errline, $errcontext) {
            // error was suppressed with the @-operator
            if (0 === error_reporting()) 
                return false;
                    
            throw new ErrorException($errstr, 0, $errno, $errfile, $errline);
        });

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
            case "showCards":
                include("pages/showCards.php"); break;
            case "showCategories":
                include("pages/showCategories.php"); break;
            case "showSetCards":
                include("pages/showSetCards.php"); break;
    
            default:
                include("pages/home.php"); break;
        }
        ?>
    </div>
    <!-- /.content-wrapper -->

    <!-- Main Footer -->
    <footer class="main-footer d-print-none">
        <!-- To the right -->
        <div class="float-right d-none d-sm-inline">
            MA 1 & 2
        </div>
        <strong>Copyright &copy; 2019. All rights reserved.</strong>
    </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Select2 -->
<script src="plugins/select2/js/select2.full.min.js"></script>
<!-- SweetAlert2 -->
<script src="plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

<script>
    $(function () {
        // Initialize Select2 Elements
        $('.select2').select2();
    });
</script>
</body>
</html>
