<header>
    <div style="border: 1px solid #152F78;width: 60%;margin-left: 20%;margin-right: 20%"></div><br>

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <!--        <ol class="carousel-indicators">-->
        <!--            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>-->
        <!--            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>-->
        <!--            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>-->
        <!--        </ol>-->
        <div class="carousel-inner" role="listbox" >

            <img src="images/sliders/last.jpg" height="600" width="60%" style="margin-left: 20%;margin-right: 20%">

        </div>

    </div>
</header>


<div class="container">
    <h1 class="my-4" style="color: #152F78">Klüpler</h1>

    <div class="row">
        <?php
        foreach ($data['clubs'] as $clubs) :?>

            <div class="col-lg-4 col-sm-6 portfolio-item">
                <div class="card h-100">
                    <a href="#">
                        <img class="card-img-top" src="/images/clubs/<?php echo $clubs['clubs_file']; ?>" alt="<?php echo $clubs['clubs_name']; ?> ">
                    </a>
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="/activities/<?php echo $clubs['id'];  ?>"  style="color: #152F78;text-decoration: none"><?php echo $clubs['clubs_name']; ?></a>
                        </h4>
                        <p class="card-text"><?php echo mb_substr($clubs['clubs_name'],0,100); ?> etkinlikleriyle buradan sosyalleşebilirsiniz.</p>
                    </div>
                </div>
            </div>

        <?php endforeach; ?>


    </div>
    <!-- /.row -->

    <!-- Features Section -->
    <div class="row">
        <div class="col-lg-6">
            <?php echo $data['home_01_content'];?>
        </div>
        <div class="col-lg-6">
            <img class="img-fluid rounded" src="/images/settings/<?php echo $data['home_01_file'];?>" alt="">
        </div>
    </div>
    <!-- /.row -->

    <hr>

    <!-- Call to Action Section -->
    <div class="row mb-4">
        <div class="col-md-8">
            <p><?php echo $data['slogan']; ?></p>
        </div>
        <div class="col-md-4">
            <a class="btn btn-lg btn-secondary btn-block" href="#">İletişime Geç</a>
        </div>
    </div>
</div>

<!-- /.container -->
