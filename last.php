<?php 
  session_start();

  echo "Last session page - showing the info and session ID again.";
  echo "<br /> <br />";
  if (!empty($_SESSION['fname'])) {
    echo "First name: " . $_SESSION['fname'];
    echo "<br />";
  }
  if (!empty($_SESSION['lname'])) {
    echo "Last name: " . $_SESSION['lname'];
    echo "<br />";
  }
  if (!empty($_SESSION['age'])) {
    echo "Age: " . $_SESSION['age'];
    echo "<br />";
  }
  if (!empty($_SESSION['phone'])) {
    echo "Phone: " . $_SESSION['phone'];
    echo "<br />";
  }
  echo "<br /> <br />";
  echo "Session ID: " . session_id();

  session_destroy();
?>
