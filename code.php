/* The code you provided is a PHP script that handles the creation of a student record in a database. */


<?php
// Enable error reporting

require_once('dbcon.php');

if(isset($_POST['save_student']))
{
  $name = mysqli_real_escape_string($con, $_POST['name']);
  $email = mysqli_real_escape_string($con, $_POST['email']);
  $phone = mysqli_real_escape_string($con, $_POST['phone']);
  $course = mysqli_real_escape_string($con, $_POST['course']);

  if($name == NULL || $email == NULL || $phone == NULL || $course == NULL)
  {
    $res = [  
      'status' => 422,
      'message' => 'All fields are mandatory'
    ];
    echo json_encode($res);
    return false;
  }

  $query = "INSERT INTO students (name, email, phone, course) VALUES ('$name','$email','$phone','$course')";
  $query_run = mysqli_query($con, $query);

  if($query_run)
  { 
    $res = [
      'status' => 200,
      'message' => 'Student Created Successfully'
    ];
    echo json_encode($res);
    return false;
  }
  else
  {
    $res = [
      'status' => 500,
      'message' => 'Student Not Created'
    ];
    echo json_encode($res);
    return false; 
  }
}

?>