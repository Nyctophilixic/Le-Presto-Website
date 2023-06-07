<?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projet-daw";
$conn = mysqli_connect($servername, $username, $password, $dbname);

// check for errors
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// retrieve the menu items from the database
$category = $_GET['category'];
$sql = "SELECT * FROM foodMenu WHERE Category='$category'";
$result = $conn->query($sql);

// display the menu items on the page
?>
<!DOCTYPE html>
<html lang=en
<head>
	<title>My Menu</title>
	<link rel="stylesheet" type="text/css" href="MenuC.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<nav>
      <ul class="nav">
          <li class="nav-item">
              <a class="nav-square" href="http://localhost/DAW-Project/index.html">Index</a>
          </li>
          <li class="nav-item">
              <a class="nav-square" href="http://localhost/DAW-Project/Menu.html">Menu</a>
          </li>
          <li class="nav-item">
              <a class="nav-square" href="http://localhost/reservation.php">Reservation</a>
          </li>
          <li class="nav-item">
              <a class="nav-square" href="http://localhost/DAW-Project/About.php">About Us</a>
          </li>
      </ul>
  </nav>
<section class="section-intro">
      <header>
          <div class="container">
                <div class="blur-square" ;>
                    <h1 class="title">
                        <span class="title-word title-word-1">Our</span>
                        <span class="title-word title-word-2">Menu</span>

                    </h1>
                </div>
              </div>
      </header>
  </section>
  <section class=menu_section>
	<div id="menu">
		<?php
		echo '<h2 class="itemb">Our ',$category,' </h2>';
		while ($row = $result->fetch_assoc()) {
			echo '<div class="section">';
			echo '<div class="item">';
			echo '<img src="' . $row['Image_path'] . '" alt="' . $row['Name'] . '">';
			echo '<div class="item-info">';
			echo '<h3>' . $row['Name'] . '</h3>';
			echo '<p>' . $row['Description'] . '</p>';
			echo '<p class="Price">$' . number_format($row['Price'], 2) . '</p>';
			echo '</div>';
			echo '</div>';
			echo '</div>';
		}
		?>
	</div>
    <section class="section-space"> 
    </section>
        <section class="end-section">
        <div class="contact-info">
            <h4>Contact us at:</h4>
            <p>Marriott Constantine</p>
            <p>Phone: +213 556 04 65 14</p>
            <p>Email: Lepresto@mail.com</p>
        </div>
        <div class="social-media-icons">
            <a href="https://www.facebook.com"><i class="fa fa-facebook"></i></a>
            <a href="https://www.twitter.com"><i class="fa fa-twitter"></i></a>
            <a href="https://www.instagram.com"><i class="fa fa-instagram"></i></a>
        </div>
    </section>
</body>
</html>
