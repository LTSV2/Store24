
<?php  
session_start();

    include('connection.php');

    if(isset($_POST['submit']))
    {
    $username=$_POST['user'];  
    $password =$_POST['pass'];  
      
        //to prevent from mysqli injection  
        $username= stripcslashes($username);  
        $password = stripcslashes($password);  
        $username= mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql ="SELECT * from login where username='$username' and password ='$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){ 
            header("Location: index.php");
           // echo "<h1><center> Login successful </center></h1>";  
        }  
        else{  
            echo "<h1> Login failed. Invalid username password.</h1>";  
        }   
    }  
?>  