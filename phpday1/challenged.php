<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rental car</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="challenge.css">
</head>


<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Rental car</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="challenged.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="form.php">Form</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="hero">
        <img src="img/carhero.jpg" alt="">
    </div>

    <div class="container">
        <div class="card mb-3 mt-5 mb-5 border-0 rounded-0" style="max-width: 80vw;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="img/rentar.jpg" class="img-fluid rounded-start rounded-0" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">About us</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php

    $car = array(
        "Car1" => array(
            "availability" => "available",
            "maker" => "TOYOTA",
            "model" => "YARIS CROSS City",
            "price" => "18.490€",
            "location" => "Spengeregasse, Vienna"
        ),
        "Car2" => array(
            "availability" => "available",
            "maker" => "VW",
            "model" => "TOURAN II, 1.6 TDI",
            "price" => "20.490€",
            "location" => "Gudrunstrasse, Vienna"
        ),
        "Car3" => array(
            "availability" => "available",
            "maker" => "SEAT",
            "model" => "LEON FR eHYBRID 150/204 DSG",
            "price" => "34.470€",
            "location" => "Hirschstettner Straße, Vienna"
        ),
        "Car4" => array(
            "availability" => "available",
            "maker" => "Audi ",
            "model" => "A3 Sportback",
            "price" => "43.190€",
            "location" => "Pragerstraße , Vienna"
        ),
        "Car5" => array(
            "availability" => "available",
            "maker" => "Porsche",
            "model" => "Taycan Turbo S",
            "price" => "175.000€",
            "location" => "Ketzergasse, Vienna"
        ),
        "Car6" => array(
            "availability" => "available",
            "maker" => "ŠKODA",
            "model" => "Scala Style TSI",
            "price" => "22.450€",
            "location" => "Leopoldauer Straße, Vienna"
        )
    );
    ?>




    <div class="container mt-5">

        <h1 class="mt-5">Our cars</h1>
        <div class="row g-4">
            <div class="col col-lg-4 col-md-6 col-sm-12">
                <div class="card border-0 shadow">
                    <img src="img/cars1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $car["Car1"]["model"] ?></h5>
                        <p class="card-text"><?php echo "Maker : " . $car["Car1"]["maker"] ?></p>
                        <p class="card-text"><?php echo "Price : " . $car["Car1"]["price"] ?></p>
                        <p class="card-text"><?php echo "Availability : " . $car["Car1"]["availability"] ?></p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted"><?php echo "Place : " . $car["Car1"]["location"] ?></small>
                    </div>
                </div>
            </div>
            <div class="col  col-lg-4 col-md-6 col-sm-12">
                <div class="card border-0 shadow">
                    <img src="img/cars2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $car["Car2"]["model"] ?></h5>
                        <p class="card-text"><?php echo "Maker : " . $car["Car2"]["maker"] ?></p>
                        <p class="card-text"><?php echo "Price : " . $car["Car2"]["price"] ?></p>
                        <p class="card-text"><?php echo "Availability : " . $car["Car2"]["availability"] ?></p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted"><?php echo "Place : " . $car["Car2"]["location"] ?></small>
                    </div>
                </div>
            </div>
            <div class="col  col-lg-4 col-md-6 col-sm-12">
                <div class="card border-0 shadow">
                    <img src="img/cars3.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $car["Car3"]["model"] ?></h5>
                        <p class="card-text"><?php echo "Maker : " . $car["Car3"]["maker"] ?></p>
                        <p class="card-text"><?php echo "Price : " . $car["Car3"]["price"] ?></p>
                        <p class="card-text"><?php echo "Availability : " . $car["Car3"]["availability"] ?></p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted"><?php echo "Place : " . $car["Car3"]["location"] ?></small>
                    </div>
                </div>
            </div>
            <div class="col col-lg-4 col-md-6 col-sm-12 col-xs-12">
                <div class="card border-0 shadow">
                    <img src="img/cards4.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $car["Car4"]["model"] ?></h5>
                        <p class="card-text"><?php echo "Maker : " . $car["Car4"]["maker"] ?></p>
                        <p class="card-text"><?php echo "Price : " . $car["Car4"]["price"] ?></p>
                        <p class="card-text"><?php echo "Availability : " . $car["Car4"]["availability"] ?></p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted"><?php echo "Place : " . $car["Car4"]["location"] ?></small>
                    </div>
                </div>
            </div>
            <div class="col  col-lg-4 col-md-6 col-sm-12">
                <div class="card border-0 shadow">
                    <img src="img/cards5.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $car["Car5"]["model"] ?></h5>
                        <p class="card-text"><?php echo "Maker : " . $car["Car5"]["maker"] ?></p>
                        <p class="card-text"><?php echo "Price : " . $car["Car5"]["price"] ?></p>
                        <p class="card-text"><?php echo "Availability : " . $car["Car5"]["availability"] ?></p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted"><?php echo "Place : " . $car["Car5"]["location"] ?></small>
                    </div>
                </div>
            </div>
            <div class="col  col-lg-4 col-md-6 col-sm-12">
                <div class="card border-0 shadow">
                    <img src="img/cards6.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $car["Car6"]["model"] ?></h5>
                        <p class="card-text"><?php echo "Maker : " . $car["Car6"]["maker"] ?></p>
                        <p class="card-text"><?php echo "Price : " . $car["Car6"]["price"] ?></p>
                        <p class="card-text"><?php echo "Availability : " . $car["Car6"]["availability"] ?></p>
                    </div<div class="card-footer">
                        <small class="text-muted"><?php echo "Place : " . $car["Car6"]["location"] ?></small>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>