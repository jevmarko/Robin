<?php
session_start();

$username = "";
$email = "";
$errors = array();

// Create database connection using MySQLi extension
$db = mysqli_connect("localhost", "root", "", "signup");

// Check if the submit button has been clicked
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  if (isset($_POST['username'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
  }

  if (isset($_POST['email'])) {
    $email = mysqli_real_escape_string($db, $_POST['email']);
  }

  if (isset($_POST['password'])) {
    $password = mysqli_real_escape_string($db, $_POST['password']);
  }

  if (empty($username) || empty($email) || empty($password)) {
    array_push($errors, "All fields are mandatory");
  } else {
    $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);

    if ($user) {
      if ($user['username'] === $username) {
        array_push($errors, "Username already in use");
      }
      if ($user['email'] === $email) {
        array_push($errors, "Email is already in use");
      }
    } else {
      $query = "INSERT INTO users (username, email, password, created_at) VALUES ('$username', '$email', '$password', NOW())";
      mysqli_query($db, $query);
      $id = mysqli_insert_id($db); // this returns the id of the last inserted record
      $_SESSION['username'] = $username;
      $_SESSION['id'] = $id;
      

    }
  }
}

?>



