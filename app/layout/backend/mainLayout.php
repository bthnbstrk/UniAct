<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>UniAct Admin Paneli</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="/bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect. -->
    <link rel="stylesheet" href="/dist/css/skins/skin-blue.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- jQuery 3 -->
    <script src="/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="/bower_components/jquery-ui/jquery-ui.js"></script>

    <!-- Bootstrap 3.3.7 -->
    <script src="/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- AdminLTE App -->
    <script src="/dist/js/adminlte.min.js"></script>

    <!-- Ck Editor -->
    <script src="https://cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script>

    <!-- Google Font -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

    <!-- JavaScript -->
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.11.4/build/alertify.min.js"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.4/build/css/alertify.min.css"/>
    <!-- Default theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.4/build/css/themes/default.min.css"/>
    <!-- Semantic UI theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.4/build/css/themes/semantic.min.css"/>
    <!-- Bootstrap theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.4/build/css/themes/bootstrap.min.css"/>

    <!-- Özel CSS -->
    <link rel="stylesheet" href="/css/custom.css">
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <!-- Main Header -->
    <header class="main-header">

        <!-- Logo -->
        <a href="index2.html" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>U</b>A</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>UniAct </b>Admin Paneli</span>
        </a>

        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>
            <!-- Navbar Right Menu -->
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- Messages: style can be found in dropdown.less-->

                    <!-- /.messages-menu -->

                    <!-- Notifications Menu -->


                    <!-- User Account Menu -->
                    <li class="dropdown user user-menu">
                        <!-- Menu Toggle Button -->
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <!-- The user image in the navbar-->
                            <img src="/images/admins/<?php echo $_SESSION['admins']['admins_file']; ?>" class="user-image" alt="User Image">
                            <!-- hidden-xs hides the username on small devices so only the image appears. -->
                            <span class="hidden-xs"><?php echo $_SESSION['admins']['admins_namesurname'];   ?></span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- The user image in the menu -->
                            <li class="user-header">
                                <img src="/images/admins/<?php echo $_SESSION['admins']['admins_file']; ?>" class="img-circle" alt="User Image">

                                <p>
                                   Yönetici
                                </p>
                            </li>
                            <!-- Menu Body -->

                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="/nedmin/admins/update/<?php echo $_SESSION['admins']['admins_id']; ?>" class="btn btn-default btn-flat">Profil Güncelle</a>
                                </div>
                                <div class="pull-right">
                                    <a href="/nedmin/logout" class="btn btn-default btn-flat">Güvenli Çıkış</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <!-- Control Sidebar Toggle Button -->

                </ul>
            </div>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">

            <!-- Sidebar user panel (optional) -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="/images/admins/<?php echo $_SESSION['admins']['admins_file']; ?>" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p><?php echo $_SESSION['admins']['admins_namesurname']; ?></p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> Yönetici</a>
                </div>
            </div>

            <!-- search form (Optional) -->

            <!-- /.search form -->

            <!-- Sidebar Menu -->
            <ul class="sidebar-menu" data-widget="tree">
                <li class="header">MENÜLER</li>
                <!-- Optionally, you can add icons to the links -->
                <li><a href="/nedmin"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>




                <li><a href="/nedmin/faculties"><i class="fa fa-home"></i> <span>Fakülteler</span></a></li>
                <li><a href="/nedmin/departments"><i class="fa fa-home"></i> <span>Bölümler</span></a></li>
                <li><a href="/nedmin/univercities"><i class="fa fa-home"></i> <span>Üniversiteler</span></a></li>

                <li><a href="/nedmin/clubs"><i class="fa fa-file"></i> <span>Klüpler</span></a></li>
                <li><a href="/nedmin/activities"><i class="fa fa-file"></i> <span>Etkinlikler</span></a></li>


            </ul>

        </section>

    </aside>


    <div class="content-wrapper">

        <section class="content">
            <?php echo $data['VIEW']; ?>
        </section>


        <section class="content container-fluid">



        </section>

    </div>


    <footer class="main-footer">
        <div class="pull-right hidden-xs">

        </div>

        <strong>Copyright &copy; 2020 <a href="https://www.batuhanbasturk.com" target="_blank">Batuhan Baştürk</a>.</strong> Tüm hakları saklıdır.
    </footer>

    <div class="control-sidebar-bg"></div>
</div>

</body>
</html>
<script>
    $(document).ready(function() {
        <?php
            if (isset($_SESSION['messageManagement'])):?>
                messageManagement(<?php echo $_SESSION['messageManagement']['status'];?>,<?php echo $_SESSION['messageManagement']['error'];?>);
        <?php unset($_SESSION['messageManagement']); endif; ?>
    });
</script>

<script src="/js/custom.js"></script>
