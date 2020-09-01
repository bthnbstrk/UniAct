<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?php echo $data['title']; ?></title>

    <!-- Bootstrap core CSS -->
    <link href="/css/fbootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="/css/modern-business.css" rel="stylesheet">


</head>

<body>
<!-- Navigation -->
<nav class="navbar fixed-top navbar-expand-lg navbar-dark  fixed-top" style="background-color: white; width: 60%; margin-left: 20%;margin-right: 20%">
    <div class="container" >
        <a class="navbar-brand" href="/" style="color: #152F78">the UniAct</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/"  style="color: #152F78" >Anasayfa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"  style="color: #152F78" href="/sayfa/<?php echo $db->slugRead("abouts");?>">Hakkımızda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"  style="color: #152F78" href="/blog">Tüm Etkinlikler</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"  style="color: #152F78" href="/blog">İletişim</a>
                </li>
            </ul>
        </div>



    </div>
</nav>
<?php echo $data['VIEW']; ?>
<!-- Footer -->
<footer class="py-5 " style="background-color: rgb(42,57,76)">
    <div class="container">
        <p class="m-0 text-center text-white">created by <a href="#" style="text-decoration: none;color:#6DDECA">Batuhan Baştürk</a></p>
    </div>
    <!-- /.container -->
</footer>

<!-- Bootstrap core JavaScript -->
<script src="/bower_components/jquery/dist/jquery.min.js"></script>
<script src="/js/bootstrap.bundle.min.js"></script>

</body>

</html>

