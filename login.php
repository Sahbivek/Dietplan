<?php

    // Start the session
    session_start();

    include 'config.php';

    // if (!empty($_SESSION)){
    //     $sql = mysqli_query($con,"SELECT * FROM users ");
    //         while($result = mysqli_fetch_array($sql)){
    //                 if($_SESSION['password'] != $result['password'] && $_SESSION['Email'] != $result['Email']){
    //                     header("location: ../index.php");
    //                     exit();
                            
    //                 }
    //         }
    // }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
  body{margin: 0;padding: 0;background: url(https://i.ibb.co/VQmtgjh/6845078.png) no-repeat;height: 100vh;font-family: sans-serif;background-size: cover;background-repeat: no-repeat;background-position: center;overflow: hidden}@media screen and (max-width: 600px;){body{background-size: cover;: fixed}}#particles-js{height: 100%}.loginBox{position: absolute;top: 50%;left: 50%;transform: translate(-50%,-50%);width: 350px;min-height: 200px;background: #000000;border-radius: 10px;padding: 40px;box-sizing: border-box}.user{margin: 0 auto;display: block;margin-bottom: 20px}h3{margin: 0;padding: 0 0 20px;color: #59238F;text-align: center}.loginBox input{width: 100%;margin-bottom: 20px}.loginBox input[type="text"], .loginBox input[type="password"]{border: none;border-bottom: 2px solid #262626;outline: none;height: 40px;color: #fff;background: transparent;font-size: 16px;padding-left: 20px;box-sizing: border-box}.loginBox input[type="text"]:hover, .loginBox input[type="password"]:hover{color: #42F3FA;border: 1px solid #42F3FA;box-shadow: 0 0 5px rgba(0,255,0,.3), 0 0 10px rgba(0,255,0,.2), 0 0 15px rgba(0,255,0,.1), 0 2px 0 black}.loginBox input[type="text"]:focus, .loginBox input[type="password"]:focus{border-bottom: 2px solid #42F3FA}.inputBox{position: relative}.inputBox span{position: absolute;top: 10px;color: #262626}.loginBox input[type="submit"]{border: none;outline: none;height: 40px;font-size: 16px;background: #59238F;color: #fff;border-radius: 20px;cursor: pointer}.loginBox a{color: #262626;font-size: 14px;font-weight: bold;text-decoration: none;text-align: center;display: block}a:hover{color: #00ffff}p{color: #0000ff}
</style>
  </head>
<body >
  
<div class="loginBox"> <img class="user" src="https://i.ibb.co/yVGxFPR/2.png" height="100px" width="100px">
        <h3>Sign in here</h3>
        <form action="login.php" method="post">
            <div class="inputBox"> <input id="uname" type="text" name="Username" placeholder="Username"> <input id="pass" type="password" name="Password" placeholder="Password"> </div> <input type="submit" name="submit" value="Login">
        </form> 
        <a href="">Forget-Password<br> </a>
        
        <div class="text-center">
            <p style="color: #59238F;"> <a href="signup.php">Sign-Up</a></p>
            
        </div>
        
    </div>
</body>
</html>

    
<?php

if($_SERVER['REQUEST_METHOD'] === 'POST'){
  if(isset($_POST['submit'])){
    $Username = $_POST['Username'];
    $password = ($_POST['Password']);
    
        $sql = "SELECT Username, Password FROM users WHERE Username = '$Username' AND Password = '$password'";

        $result = mysqli_query($con, $sql);

        if(mysqli_num_rows($result) === 0){
            echo "Incorrect username or password. Please try again later!";
        }
        else{
           
            $_SESSION['Password'] = $password;
            $_SESSION['Username'] = "Username";
            setcookie('Username', 'Password', time() + (60 * 1), '/'); // Cookie valid for 30 days
            header("location:index.php");
            exit();
        }
    }

  }

?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>