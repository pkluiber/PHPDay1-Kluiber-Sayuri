<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Form</title>
</head>

<style>
    body {
        font-family: "Franklin Gothic Medium";
    }
</style>
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


<h1 style="text-align: center;" class="mt-3">Apply form</h1>
    

<div class="container mt-5">

<label for="inputEmail4" class="form-label">Select car</label>
<select class="form-select" aria-label="Default select example">
  <option selected>Open this select menu</option>
  <option value="1"><?php echo $car["Car1"]["model"] ?></option>
  <option value="2"><?php echo $car["Car2"]["model"] ?></option>
  <option value="3"><?php echo $car["Car3"]["model"] ?></option>
  <option value="1"><?php echo $car["Car4"]["model"] ?></option>
  <option value="2"><?php echo $car["Car5"]["model"] ?></option>
  <option value="3"><?php echo $car["Car6"]["model"] ?></option>
</select>
<form class="row g-3 mt-2">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">First name</label>
    <input type="email" class="form-control" id="inputEmail4">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Last name</label>
    <input type="password" class="form-control" id="inputPassword4">
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Address</label>
    <input type="text" class="form-control" id="inputAddress" >
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">City</label>
    <input type="text" class="form-control" id="inputCity">
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label">State</label>
    <select id="inputState" class="form-select">
      <option selected>Choose...</option>
      <option>...</option>
    </select>
  </div>
  <div class="col-md-2">
    <label for="inputZip" class="form-label">Zip</label>
    <input type="text" class="form-control" id="inputZip">
  </div>
  <div class="col-12">
    <label for="inputAddress2" class="form-label">Phone number</label>
    <input type="text" class="form-control" id="inputAddress2" >
  </div>

  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Rental</button>
  </div>
</form>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>