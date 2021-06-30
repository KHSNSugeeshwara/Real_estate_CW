<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="real_estate_styles.css">
    <title>Details</title>
</head>


<body>
<?php
$id = $_GET['id'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "real_estate_db";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM details where id = $id";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    $title = $row["title"];
    $details = $row["details"];
    $price = $row["price"];
    $image = $row["image"];
    $bedrooms = $row["bedrooms"];
    $interior = $row["interior"];
  }
} else {
  echo "0 results";
}

mysqli_close($conn);
?>
    <div class="header">
        <div class="navbar">
            <a href="index.php"><span class="logo">Real Estate</span></a>
            <a href="#c1">Contact Us</a>
            <a href="#c2">Blog</a>
            <a href="#register">Register</a>
            <a href="#login">Login</a>
        </div>
        <div class="title">
            <span>Details.</span>
        </div>
    </div>
    <div class="mid-box">
        <div class="mid-box-left">
            <div class="image">
                <img src="assets/<?php echo $image ?>" style="width:500px" alt="">
            </div>

        </div>
        <div class="mid-box-right">
            <div class="estate-details">
                <div class="main-text">
                    <?php
                        echo $title;
                    ?>
                </div>
            </div>
            <div class="details-grid">
                <div class="details-grid-child">
                    <div class="text-1">
                        Price
                    </div>
                    <div class="text-2">
                    <?php
                        echo $price;
                    ?>
                    </div>
                </div>
                <div class="details-grid-child">
                    <div class="text-1">
                        bedrooms
                    </div>
                    <div class="text-2">
                    <?php
                        echo $bedrooms;
                    ?>
                    </div>
                </div>
                <div class="details-grid-child">
                    <div class="text-1">
                        interior 
                    </div>
                    <div class="text-2">
                    <?php
                        echo $interior;
                    ?>
                    </div>
                </div>
                <div class="details-grid-child">
                    <div class="text-1">
                        details
                    </div>
                    <div class="text-2">
                    <?php
                        echo $details;
                    ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="map">
        <div class="mapouter">
            <div class="gmap_canvas"><iframe width="1280" height="300" id="gmap_canvas"
                    src="https://maps.google.com/maps?q=No%204,%20Private%20Drive,%20Litte%20Whinging,%20Surrey.&t=&z=13&ie=UTF8&iwloc=&output=embed"
                    frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a
                    href="https://soap2day-to.com">soap2day</a><br>
                <style>
                    .mapouter {
                        position: relative;
                        text-align: right;
                        height: 300px;
                        width: 1280px;
                    }
                </style><a href="https://www.embedgooglemap.net">embedgooglemap.net</a>
                <style>
                    .gmap_canvas {
                        overflow: hidden;
                        background: none !important;
                        height: 300px;
                        width: 1280px;
                    }
                </style>
            </div>
        </div>
    </div>
</body>

</html>
