<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $password = $_POST["password"];

  // Database connection
  $conn = new mysqli("localhost", "id20899474_register", "Register_03", "id20899474_registration");

  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  // Insert data into the database
  $sql = "INSERT INTO register (name, email, password) VALUES ('$name', '$email', '$password')";

  if ($conn->query($sql) === TRUE) {
    echo '<div class="notification">Registration successful!</div>';
    echo '<script>
            setTimeout(function() {
              window.location.href = "onlinetech.html";
            }, 3000); // Redirect to "onlinetech.html" after 1 second
          </script>';
  } else {
    // Display an error message
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $conn->close();
}
?>


<style>
    .notification {
    max-width: 500px;
    max-height: 500px;
    margin: 250px auto;
    padding: 20px;
    background-color: #4CAF50;
    color: white;
    text-align: center;
}
</style>
