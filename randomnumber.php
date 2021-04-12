
<html>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}



// Function to Generate a Random String
$permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

function generate_string($input, $strength = 6) {
  $input_length = strlen($input);
  $random_string = '';
  for($i = 0; $i < $strength; $i++) {
      $random_character = $input[mt_rand(0, $input_length - 1)];
      $random_string .= $random_character;
  }

  return $random_string;
}


//Saving the Random Variable
$number = "JMED/SD - " .generate_string($permitted_chars, 6);
echo $number;

//Checking the database for a duplicate record
$sql = "SELECT * FROM hospital_records WHERE Random_Number='$number'";
$result = $conn->query($sql);
//If this condition is true, it will add the new random string to the database
if ($result->num_rows==0){

  $sql = "INSERT INTO hospital_records (Random_Number, Name)
  VALUES ('$number', 'Answer')";
  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;

  }
}

//When the If statement is false
else{
  echo "duplicate exists";
// Function to generate a new random number and adding it to the database
  do{
    $number = "JMED/SD - " .generate_string($permitted_chars, 6);
    $sql = "INSERT INTO hospital_records (Random_Number, Name)
    VALUES ('$number', 'Answer')";
    if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;

    }


  }
  //With the condition that this will only run when there is a duplicate 
  while($result->num_rows>0);
}



$conn->close();

?>
</html>
