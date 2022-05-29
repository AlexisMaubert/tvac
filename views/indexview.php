<?php require_once('_head.php') ?>

<body>
    <?php require_once('_header.php') ?>
    <main>
        <section class="banner container-fluid">
            <div>
                <h1>Join Us</h1>
            </div>
        </section>
        <div class="upbutton">
            <a href="#"><img src="resources/back.png" alt="back to the top button" class="img-fluid"></a>
        </div>
        <section class="presentation container">
            <div class="row jc-center aligit-center">
                <div class="col-11 col-md-4 tvac-box">
                    <h2>Who are we?</h2>
                </div>
                <div class="col-9 col-md-6 ta-wkcenter">
                    <video controls class="embed-responsive">
                        <source src="resources/tvac_video.mp4" type="video/mp4" class="tvac-video">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>
        </section>
        <section class="values row container jc-center">
            <div class="col-lg-9 col-xl-12 tvac-box">
                <h2>Our <span class="fontcolors">core</span> values</h2>
                <div class="container">
                    <div class="row">
                        <?php
                        require_once '_values.php'
                        ?>
                    </div>
                </div>
        </section>
        <section class="list container-fluid">
            <div class="row aligit-center">
                <div class="col-md-7">
                    <h2>What we offer:</h2>
                    <ul>
                        <li>Work from anywhere</li>
                        <li>Free training</li>
                        <li>Base salary U$D 560</li>
                        <li>Non-voice position</li>
                        <li>Excellent enviroment</li>
                        <li>Growth opportunities</li>
                        <li>Commissions + Bonuses</li>
                    </ul>
                    <h3>Top performers are making U$D 1500+ per month</h3>
                </div>
                <div class="d-none d-md-block col-md-5">
                    <img src="resources/h_r_photo.jpg" alt="photo 1" class="img-fluid tvac-box">
                </div>
            </div>
            </div>
        </section>
        <section class="list container-fluid">
            <div class="row aligit-center">
                <div class="d-none d-md-block col-md-6">
                    <img src="resources/l_h_photo.jpg" alt="photo 2" class="img-fluid tvac-box">
                </div>
                <div class="col-md-6">
                    <h2>Requirements</h2>
                    <ul>
                        <li>Full time availability (43hs/week)</li>
                        <li>Proficient english (EFSET C2)</li>
                        <li>Cell phone</li>
                        <li>Laptop with basic specs</li>
                        <li>Good internet</li>
                        <li>Back-up power source</li>
                        <li>Desire to work</li>
                        <li>Hungry for success</li>
                    </ul>
                    <h3>No experience needed!</h3>
                </div>
            </div>
        </section>
    </main>

    <?php
    require_once('_scripts.php');
    ?>

</body>