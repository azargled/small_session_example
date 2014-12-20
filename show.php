<?php 
  session_start();
  
    $_SESSION['fname'] = $_POST['fname'];
    $_SESSION['lname'] = $_POST['lname'];
    $_SESSION['age'] = $_POST['age'];
    $_SESSION['phone'] = $_POST['phone'];

  echo "Info received:";
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
  echo "<br /> <br />";
  echo "<a href='last.php'>Last session page</a>";

?>
