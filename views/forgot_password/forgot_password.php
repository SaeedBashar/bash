<?php
   session_start();
   require_once '../../partials/connection.php';
//    unset($_SESSION['forgot_page']);
//    exit;
   $que = "What is your email address?";
//    if(!isset($num)) $num=0;

   if(isset($_SESSION['forgot_page']) && $_SERVER['REQUEST_METHOD'] == 'POST'){
      $num = intval($_SESSION['forgot_page']) + 1;
      $_SESSION['forgot_page'] = $num;
      if($num == 1) {
          $que = "What is your favorite color?";
      }else{
          $que = "What is your favorite pet?";
      }

      
        if($num == 1){
            $_SESSION['ans1'] = $_POST['ans'];
        }elseif($num == 2){
            $_SESSION['ans2'] = $_POST['ans'];
        }else{
            $_SESSION['ans3'] = $_POST['ans'];
            unset($_SESSION['forgot_page']);
            
            $st = $pdo->prepare('select password from users u, password_reset p where u.user_id = p.user_id and ans_1 = :ans1 and ans_2 = :ans2');
            $st->bindValue(':ans1', $_SESSION['ans2']);
            $st->bindValue(':ans2', $_SESSION['ans3']);
            $st->execute();
            $user = $st->fetch(PDO::FETCH_ASSOC);

            unset($_SESSION['ans1']);
            unset($_SESSION['ans2']);
            unset($_SESSION['ans3']);
            if($user){
                $pass = $user['password'];
                echo '<script>alert("Congratulation \nYour password is '. $pass.'"); location.assign("../bash_home/home.php")</script>';
            }else{
                $pass = $user['password'];
                echo '<script>alert("Sorry \nThe information you entered is incorrect"); location.assign("../../index.php")</script>';
            }
        }
     
   }else {
      $_SESSION['forgot_page'] = 0;
      $num = intval($_SESSION['forgot_page']);
   }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='../../lib/bootstrap/css/bootstrap.min.css' />
    <link rel='stylesheet' href='../../lib/bootstrap-sweetalert/sweetalert.min.css' />

    <title>Bash | Forgot Password</title>
    <style>
        body {
            background-color: #F0F2F5;
        }
        .que-cont {
            position: relative;
            width: 50%;
            margin: auto;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);

        }
        .que-cont label {
            font-size: 20px;
            font-weight: bold;
        }
        span {
            position: absolute;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row" style="height: 60px;">
            <div class="col">
                <h3>Bash</h3>
            </div>
        </div>
        <div class="row">
            <div class="col">
               <div class="que-cont border">
                    <span style="font-size: 20px">Question <?php echo ($num + 1) ?></span>
                    <form class="m-5" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
                            <label for="ans"><?php echo $que ?></label>
                            <input type="text" name="ans" class="form-control mb-3 mt-3" autocomplete="off" />
                            <button class="btn btn-info">Next</button>
                    </form>
               </div>
            </div>
        </div>
    </div>
    <link rel='stylesheet' href='../../lib/bootstrap-sweetalert/sweetalert.min.js' />
</body>
</html>