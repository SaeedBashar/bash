<?php
   require_once 'partials/connection.php';

   if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $email = $_POST['email'];
        $pword = $_POST['pword'];

        $statement = $pdo->prepare("select * from users where email= :email and password= :pword");
        $statement->bindValue(':email', $email);
        $statement->bindValue(':pword', $pword);

        $statement->execute();
        $user = $statement->fetch(PDO::FETCH_ASSOC);
        
        if($user){
            session_start();
            $_SESSION['tmpuser'] = $user['user_id'];

            // echo '<script>
            //          alert("good"); 
            //          location.assign("home.php")
            //       </script>';
            header('location: ./views/bash_home/home.php');
        }
   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel='stylesheet' href='lib/bootstrap/css/bootstrap.min.css' />
    <title>Bash | Login</title>
    <style>
        body {
            background-color: #F0F2F5;
        }
        .signin-top {
            height: 60px;
        }
        .signin{
            height: auto;
            width: 100%;
            margin: auto;
        }
        
        @media screen and (min-width: 450px){
            .signin{
                width: 275px;
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            }
        }
        @media screen and (max-width: 449px){
            .signin{
                border: none !important;
            }
        }

        .signin .btn {
            border-radius: 15px;
        }

        .new-here small:last-of-type {
            margin: auto;
            display: block;
            width: 125px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row signin-top mt-3 mb-3">
            <div class="col p-2">
                <h3>Bash</h3>
            </div>
        </div>
        <div class="row">
            <div class="signin p-4 pb-5 border">
                <div class='border-bottom mb-4'>
                    <h2>Sign in</h2>
                    <small>Stay connected with your social world</small>
                </div>
                <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method='POST' >
                    <div class="form-group">
                        <input type="email" class="form-control" name='email' placeholder='Email address' />
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name='pword' placeholder='password' />
                    </div>
                    <div class="form-group">
                        <a href="views/forgot_password/forgot_password.php"><small>Forgot password?</small></a>
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm btn-block">Sign in</button>
                </form>
                <div class='new-here mt-3'>
                    <small>
                        <span>New to Bash?</span>
                        <a href="#">Sign up</a>
                    </small>
                </div>
            </div>
        </div>
    </div>
    <script src='lib/bootstrap/js/jquery/jquery.min.js'></script>
    <script src='lib/bootstrap/js/bootstrap.bundle.min.js'></script>
</body>
</html>