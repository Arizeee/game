<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "loginregisterr");

// IF
if(isset($_POST["action"])){
  if($_POST["action"] == "register"){
    register();
  }
  else if($_POST["action"] == "login"){
    login();
  }
}

// REGISTER
function register(){
  global $conn;

//   $username = "";
// // pemeriksaan menggunakan fungsi isset()
// $username = isset($_POST['username']) ? $_POST['username'] : '';
// // pemeriksaan menggunakan fungsi empty()
// $username = !empty($_POST['username']) ? $_POST['username'] : '';
//         $password = "";
// // pemeriksaan menggunakan fungsi isset()
// $password = isset($_POST['password']) ? $_POST['password'] : '';
// // pemeriksaan menggunakan fungsi empty()
// $password = !empty($_POST['password']) ? $_POST['password'] : '';
  
  $id = rand(10000, 100000);
  $name = $_POST["name"];
  $username = $_POST["username"];
  $password = $_POST["password"];
  $tgl = date("y-m-d");

  if(empty($name) || empty($username) || empty($password)){
    echo "Please Fill Out The Form!";
    exit;
  }

  $user = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$username'");
  if(mysqli_num_rows($user) > 0){
    echo "Username Has Already Taken";
    exit;
  }

  $query = "INSERT INTO tb_user VALUES('$id', '$name', '$username', '$password', '$tgl')";
  mysqli_query($conn, $query);
  echo "Successfull";
}

// LOGIN
function login(){
  global $conn;

  $username = $_POST["username"];
  $password = $_POST["password"];

  $user = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$username'");

  if(mysqli_num_rows($user) > 0){

    $row = mysqli_fetch_assoc($user);

    if($password == $row['password']){
      
      echo "Login Successful";
      $_SESSION["login"] = true;
      $_SESSION["id"] = $row["id"];
    }
    else{
      echo "Wrong Password";
      exit;
    }
  }
  else{
    echo "User Not Registered";
    exit;
  }
}
?>