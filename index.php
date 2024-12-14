<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   

    <!-- TYPO + bootstrap ci-dessous -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik+Wet+Paint&family=Space+Grotesk:wght@300..700&family=Trade+Winds&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="Styles/style.css">
    <link rel="stylesheet" href="PHP-elements/header.css">
    <link rel="stylesheet" href="PHP-elements/footer.css">

    <iframe width="0.1" height="0.1" src="STOPhttps://www.youtube.com/embed/yhlu-FS18Qo?autoplay=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe><iframe width="0.1" height="0.1" src="https://www.youtube.com/embed/yhlu-FS18Qo?autoplay=1&mute=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

    <title>My lil' solar system</title>

</head> 




<body class="body-class">
        <header>
            <div class="container1">

                <h1 class="h1-text">
                    Journey Through Our Cosmic Neighborhood
                </h1>


            <!-- Ma navbar include juste ici -->
             <?php include('PHP-elements/navbar.php'); ?>


        <main class="content">

            <div class="container-fluid">
                <div class="row differents-planets-and-stars">

                        <div class="col-md-3">
                        <img src="Divers/Pictures/Planets and stars/sun.png" alt="sun" id="sun" class="mt-n5 planets">
                        </div>

                        <div class="col-md-1 mt-5">
                        <img src="Divers/Pictures/Planets and stars/mercury.png" alt="mercury" id="mercury">
                        </div>

                        <div class="col-md-1 mt-5">
                        <img src="Divers/Pictures/Planets and stars/venus.png" alt="venus" id="venus" class="img-fluid planet">
                        </div>

                        <div class="col-md-1 mt-5">
                        <img src="Divers/Pictures/Planets and stars/earth.png" alt="earth" id="earth" class="img-fluid">
                        </div>

                        <div class="col-md-1 mt-5">
                        <img src="Divers/Pictures/Planets and stars/mars.png" alt="mars" id="mars" class="img-fluid">
                        </div>

                        <div class="col-md-1 mt-5">
                        <img src="Divers/Pictures/Planets and stars/jupiter.png" alt="jupiter" id="jupiter" class="img-fluid">
                        </div>

                        <div class="col-md-1 mt-5">
                        <img src="Divers/Pictures/Planets and stars/saturn.png" alt="saturn" id="saturn" class="img-fluid">
                        </div>

                        <div class="col-md-1 mt-5">
                        <img src="Divers/Pictures/Planets and stars/uranus.png" alt="uranus" id="uranus" class="img-fluid">
                        </div>

                        <div class="col-md-1 mt-5">
                        <img src="Divers/Pictures/Planets and stars/neptune.png" alt="neptune" id="neptune">
                        </div>

                </div> 
            </div>

        </main>





    </header>

    <footer>
        <?php include('PHP-elements/footer.php'); ?>
    </footer>

</div>
</body>


</html>
