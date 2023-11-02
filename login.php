<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <link rel="stylesheet" type="text/css" href="./css/signup.css"/>
    <script src='main.js'></script>
</head>
<body>

<?php 

session_start();

    include("connection.php");
    include("function.php");


    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        //something was posted
        $user_name = $_POST['user_name'];
        $password = $_POST['password'];

        if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
        {

            //read from database
            $query = "select * from users where username = '$user_name' limit 1";
            $result = mysqli_query($conn, $query);

            if($result)
            {
                if($result && mysqli_num_rows($result) > 0)
                {

                    $user_data = mysqli_fetch_assoc($result);
                    
                    if($user_data['password'] === $password)
                    {

                        $_SESSION['user_id'] = $user_data['user_id'];
                        
                        header("Location:booking.php");
                        die;
                    }
                }
            }
            
            echo "wrong username or password!";
        }else
        {
            echo "wrong username or password!";
        }
    }

?>



<div class="registration_form">
    <div class="title">
      Welcome to Sri Lankan travel web application
    </div>

    <form action="#" method="POST">
      <div class="form_wrap">
        
        <div class="input_wrap">
          <label for="password">username</label>
          <input type="text" id="uname" name="user_name" placeholder="username" required>
        </div>
        <div class="input_wrap">
          <label for="Confirm_password">Password</label>
          <input type="password" id="password" name="password" placeholder="password" required>
        </div>
       
        <div class="input_wrap">
          <input type="submit" value="Login" class="submit_btn" name="login" >
        </div>
        
        <a href="signup.php" class="sign_up">sign up</a>&nbsp&nbsp&nbsp
        <a href="#">Forget Password</a> 

      </div>
    </form>
  </div>
</div>
 



    
</body>
</html>