<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $firstname = $_POST['fn'];
  $lastname = $_POST['ln'];
  $username = $_POST['un'];
  $password = $_POST['pw'];

  
  echo '<table border="1">';
  echo '<tr>';
  echo '<th>Field</th>';
  echo '<th>Value</th>';
  echo '</tr>';
  echo '<tr>';
  echo '<td>First Name</td>';
  echo '<td>' . $firstname . '</td>';
  echo '</tr>';
  echo '<tr>';
  echo '<td>Last Name</td>';
  echo '<td>' . $lastname . '</td>';
  echo '</tr>';
  echo '<tr>';
  echo '<td>Username</td>';
  echo '<td>' . $username . '</td>';
  echo '</tr>';
  echo '<tr>';
  echo '<td>Password</td>';
  echo '<td>' . $password . '</td>';
  echo '</tr>';
  echo '</table>';
}
?>

