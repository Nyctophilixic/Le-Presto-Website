<?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projet-daw";
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get form data and validate required fields
if (!empty($_POST["Name"]) && !empty($_POST["Email"]) && !empty($_POST["Phone"]) && !empty($_POST["Date"]) && !empty($_POST["Time"]) && !empty($_POST["nPeople"])) {
    $name = $_POST["Name"];
    $email = $_POST["Email"];
    $phone = $_POST["Phone"];
    $date = $_POST["Date"];
    $time = $_POST["Time"];
    $nPeople = $_POST["nPeople"];

    // Prepare and bind SQL statement
    $stmt = $conn->prepare("INSERT INTO reservations (Name, Email, Phone, Date, Time, nPeople) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssi", $name, $email, $phone, $date, $time, $nPeople);
    // Execute statement
    if ($stmt->execute() === TRUE) {
    } else {
    }
    $stmt->close();
}
// Close connection
mysqli_close($conn);
?>


<!DOCTYPE html>
<html lang =en>
<head>
  <title>Reservation Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" type="text/css" href="Reservation.css">
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
                <a class="nav-square" href="#top">Reservation</a>
            </li>
                        <li class="nav-item">
                <a class="nav-square" href="http://localhost/DAW-Project/About.php">About Us</a>
                </li>
        </ul>
    </nav>
    <section class="intro-section">
            <header>
            <div class="container">
                <div class="blur-square" ;>
                    <h1 class="title">
                        <span class="title-word title-word-1">Reservations</span>
                    </h1>
                </div>
            </div>
        </header>
    </section>
<section class="reservation-section">
  <div class="container-2">
    <h1 class="square">Reservation Form</h1>
    <form method="POST" action="reservation.php">
      <label for="name">Name:</label>
      <input type="text" id="name" name="Name" required>

      <label for="Email">Email:</label>
      <input type="email" id="email" name="Email" required>

      <label for="Phone">Phone:</label>
      <input type="tel" id="phone" name="Phone" required>

      <label for="Date">Date:</label>
      <input type="date" id="date" name="Date" required>

      <label for="Time">Time:</label>
      <input type="time" id="time" name="Time" required>

      <label for="nPeople">Number of People:</label>
      <input type="number" id="party" name="nPeople" min="1" max="20" required>

      <button type="submit">Make Reservation</button>
    </form>
  </div>
</section>
  <section class="section-space"> 
    <p></p>
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
