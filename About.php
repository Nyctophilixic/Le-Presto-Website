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
if (!empty($_POST["Name"]) && !empty($_POST["Email"]) && !empty($_POST["Comment"]) && !empty($_POST["Date"])) {
    $name = $_POST["Name"];
    $email = $_POST["Email"];
    $comment = $_POST["Comment"];
    $date = $_POST["Date"];
    // Prepare and bind SQL statement
    $stmt = $conn->prepare("INSERT INTO reviews (Name, Email, Comment, Date) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("sssi", $name, $email, $comment, $date);
    // Execute statement
    if ($stmt->execute() === TRUE) {
    } else {
    }
    $stmt->close();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="About.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Restaurant Le Presto</title>
    <link rel="icon" href="img/icon.jpg" type="image/x-icon">
</head>
<body>
    <nav>
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-square" href="http://localhost/DAW-Project/index.html">Index</a>
            </li>
            <li class="nav-item">
                <a class="nav-square"href="http://localhost/DAW-Project/Menu.html">Menu</a>
            </li>
            <li class="nav-item">
                <a class="nav-square" href="http://localhost/Reservation.php">Reservation</a>
            </li>
            <li class="nav-item">
                <a class="nav-square" href="http://localhost/DAW-Project/About.html">About Us</a>
            </li>
        </ul>
    </nav>
    <section class="intro-section">
        <header>
            <div class="container">
                <div class="blur-square" ;>
                    <h1 class="title">
                        <span class="title-word title-word-1">About</span>
                        <span class="title-word title-word-2">Us</span>

                    </h1>
                </div>
            </div>
        </header>
    </section>
    <section class="about-us-section">
        <div>
            <h2 class="square">Who We Are</h2>
            <p>We are a restaurant that specializes in Italian delights, with great customer servive and quality.</p>
        </div>
        <div>
            <h2 class="square">Our Team</h2>
            <ul>
                <li>Kaouani Younes - Manager</li>
                <li>Belahecen Wail - Chef Cook</li>
                <li>Hebboul Abedarrouf - Parking Guard</li>
                <li>Aouati Nacef - Waiter</li>
            </ul>
        </div>

        <div class="about-us-section">
            <h2 class="square">Our Mission</h2>
            <p>Our mission is to provide the best italian food available and have every customer who leaves the restaurant excited for the day they come back.</p>
        </div>

        <div>
            <h2 class="square">Why Choose Us</h2>
            <ul>
                <li>Experience</li>
                <li>Delicious food</li>
                <li>Quality</li>
                <li>Customer Service</li>
            </ul>
        </div>
    </section>
    </section>
    <section class="section-space">
    </section>
    <section class="send-review-section">
  <div class="container-2">
    <h1 class="square" >Give Us a Review</h1>
    <form method="POST" action="About.php">
      <label for="Name">Name:</label>
      <input type="text" id="Name" name="Name" required>

      <label for="Email">Email:</label>
      <input type="email" id="Email" name="Email" required>

<label for="Comment">Comment:</label>
<textarea class="comment" id="Comment" name="Comment" required></textarea>

      <label for="Date">Date:</label>
      <input type="date" id="Date" name="Date" required>

      <button class ="button" type="submit">Send a Review</button>
    </form>
  </div>
</section>
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
