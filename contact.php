<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Retrieve the form data
  $name = $_POST["name"];
  $email = $_POST["email"];
  $phone = $_POST["phone"];
  $message = $_POST["message"];

  // Perform any necessary validation on the form data

  // Connect to your MySQL database
  $servername = "localhost";
  $username = "id20899474_mauren26";
  $password = "Mauren_032603";
  $dbname = "id20899474_basta_poloin_iyu_tea";

  $conn = new mysqli($servername, $username, $password, $dbname);

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  // Insert the form data into the database
  $sql = "INSERT INTO contacts (name, email, phone, message) VALUES ('$name', '$email', '$phone', '$message')";

  if ($conn->query($sql) === TRUE) {
    echo "Data submitted successfully!";
    header("refresh:1;url=contact.html"); // Redirect back to the contact.html page after 1 second
}

  } else {
    // Display an error message
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $conn->close();

?>
