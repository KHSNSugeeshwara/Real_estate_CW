<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="real_estate_styles.css">
    <title>Real Estate</title>
</head>

<body>

    <div class="header">
        <div class="navbar">
            <a href="index.php"><span class="logo">Real Estate</span></a>
            <a href="#c1">Contact Us</a>
            <a href="#c2">Blog</a>
            <a href="#register">Register</a>
            <a href="#login">Login</a>
        </div>
        <div class="title">
            <span>Find the one that's right for you.</span>
        </div>
    </div>
    <div class="estates">
        <div class="text">
            <h1 class="head-text">Estates</h1>
        </div>
        
        <div class="card-div">
<?php
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

$sql = "SELECT * FROM details";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    $id = $row["id"];
    $title = $row["title"];
    $details = $row["details"];
    $price = $row["price"];
    $image = $row["image"];
    $bedrooms = $row["bedrooms"];
    $interior = $row["interior"];
    
    echo '<a href='.'details.php?id='.$id.'>
                        <div class='.'card'.'>
                            <img src='.'assets/'.$image.' alt='.'image'.' style='.'width:100%'.'>
                            <div class='.'container'.'>
                                <h4><b>'.$title.'</b></h4>
                                <p>'.$price.'</p>
                            </div>
                        </div>
                    </a>';
                    }
                    } else {
                    echo "0 results";
                }

    mysqli_close($conn);
?>
        </div>
    </div>
</body>

</html>