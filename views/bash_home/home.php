<?php

    session_start();
    require_once '../../partials/connection.php';

    $st = $pdo->prepare("select * from users where user_id=:id");
    $st->bindValue(':id', $_SESSION['tmpuser']);
    $st->execute();
    $user = $st->fetch(PDO::FETCH_ASSOC);
    
   
    if(isset($_GET['search'])){
        $query = $_GET['search'];
        $statement = $pdo->prepare('select * from users where user_name like :search limit 5');
        $statement->bindValue(':search', "%$query%");
        $statement->execute();
        $users = $statement->fetchAll(PDO::FETCH_ASSOC);
        echo "<pre>";
        var_dump($users);
        echo "</pre>";
        exit;
    }

    
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='../../lib/bootstrap/css/bootstrap.min.css' />
    <link rel='stylesheet' href='../../lib/font-awesome/css/all.min.css' />

    <title>Bash | Home</title>
    <style>
        body {
            background-color: #F0F2F5;
        }
        .main {
            position: fixed;
            height: 100%;
            width: 100%;
            padding-left: 2%;
            margin-top: 70px;
        }
        .home-left, .home-center, .home-right {
            display: inline-block;
            height: inherit;
            overflow-y: auto;
        }

        .home-left {
            width: 24%;
        }
        .home-center {
            width: 49%;
        }
        .home-right {
            width: 24%;
        }
        @media screen and (max-width: 900px){
            .home-left {
                display: none;
            }
            .home-center {
                width: 62%;
            }
            .home-right {
                width: 35%;
            }
        }

        @media screen and (max-width: 500px){
            .home-center {
                width: 100%;
            }

            .home-right {
                display: none;
            }
        }

        main ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            /* width: 200px; */
            background-color: #f1f1f1;
        }

        main li a {
            display: block;
            color: #000;
            padding: 8px 16px;
            text-decoration: none;
        }

        /* Change the link color on hover */
        main li a:hover {
            background-color: #d0d0d3;
            text-decoration: none;
            color: black;
        }

       

    </style>
</head>
<body>
    <?php
        include_once "../partials/navigation.php";
    ?>
    
    <main class="main">
        <div class="home-left pt-3">
        <ul>
            <li><a href="../bash_profile/profile.php">
                  <?php if($user['image'] != "") { ?>
                    <img src="<?php echo '../../lib/Assets/img/'.$user['image'] ?>" style="width:25px;height:25px" alt="">
                  <?php } else { 
                      echo "<i class='fa fa-user pr-1'></i>"; 
                      } 
                      echo "<b>".$user['user_name']."</b>";
                    ?>
                </a>
            </li>
            <li><a href="#news"><i class="fa fa-users pr-1"></i>Friends</a></li>
            <li><a href="#contact"><i class="fa fa-users pr-1"></i>Groups</a></li>
            <li><a href="../bash_profile/profile.php"><i class="fa fa-shopping-basket pr-1"></i>Timeline</a></li>
            <li><a href="../bash_profile/profile.php?profile-content=about"><i class="fa fa-tv pr-1"></i>About</a></li>
            <li><a href="../bash_profile/profile.php?profile-content=photos"><i class="fa fa-clock pr-1"></i>Photos</a></li>
            <li><a href="#about"><i class="fa fa-tv pr-1"></i>Watch</a></li>
            <li><a href="#about"><i class="fa fa-tag pr-1"></i>Settings</a></li>
            <!-- <li><a href="#about"><i class="fa fa-calendar pr-1"></i>Events</a></li>
            <li><a href="#about"><i class="fa fa-star pr-1"></i>Favoutites</a></li>
            <li><a href="#about">See more</a></li> -->
        </ul>
        </div>
        <div class="home-center pt-3">center
        <p>dd</p>
            <p>dd</p>
            <p>dd</p>
            <p>dd</p>
            <p>dd</p>
            <p>dd</p>
            <p>dd</p>
            <p>dd</p>
            <p>dd</p>
            <p>dd</p>
            <p>dd</p>
            <p>dd</p>
            <p>dd</p>
            <p>dd</p>
            <p>dd</p>
            <p>dd</p>
            <p>dd</p>
            <p>dd</p>
            <p>dd</p>
            <p>dd</p>
            <p>dd</p>
            <p>dd</p>
            <p>dd</p>
            <p>dd</p>
            <p>dd</p>
            <p>dd</p>
            <p>dd</p>
            <p>dd</p>
            <p>dd</p>
            <p>dd</p>
            <p>dd</p>
            <p>dd</p>
            <p>dd</p>
            <p>dd</p>
            <p>dd</p>
            <p>dd</p>
            <p>dd</p>
            <p>dd</p>
            <p>dd</p>
            <p>dd</p>
            <p>dd</p>
            <p>dd</p>
            <p>dd</p>
            <p>dd</p>
            <p>dd</p>
            <p>dd</p>
            <p>dd</p>
            <p>dd</p>
            <p>dd</p>
            <p>dd</p>
            <p>dd</p>
            <p>dd</p>
            <p>dd</p>
            <p>dd</p>
            <p>dd</p>
            <p>dd</p>
            <p>dd</p>
            <p>dd</p>
            <p>dd</p>
            <p>dd</p>
            <p>dd</p>
            <p>dd</p>
            <p>dd</p>
            <p>dd</p>
            <p>dd</p>
            <p>dd</p>
            <p>dd</p>
            <p>dd</p>
            <p>dd</p>
            <p>dd</p>
            <p>dd</p>
            <p>dd</p>
            <p>dd</p>
            <p>dd</p>
            <p>dd</p>
            <p>dd</p>
            <p>dd</p>
            <p>dd</p>
            <p>dd</p>
            <p>dd</p>
            <p>dd</p>
            <p>dd</p>
            <p>dd</p>
            <p>dds</p>
        </div>
        <div class="home-right pt-3">right
        <p>dd</p>
            <p>dd</p>
            <p>dd</p>
            <p>dd</p>
            <p>dd</p>
            <p>dd</p>
            <p>dd</p>
            <p>dd</p>
            <p>dd</p>
            <p>dd</p>
            <p>dd</p>
            <p>dd</p>
            <p>dd</p>
            <p>dd</p>
            <p>dd</p>
            <p>dd</p>
            <p>dd</p>
            <p>dd</p>
            <p>dd</p>
            <p>dd</p>
            <p>dd</p>
            <p>dd</p>
            <p>dd</p>
            <p>dd</p>
            <p>dd</p>
            <p>dd</p>
            <p>dd</p>
            <p>dd</p>
            <p>dd</p>
            <p>dd</p>
            <p>dd</p>
            <p>dd</p>
            <p>dd</p>
            <p>dd</p>
            <p>dd</p>
            <p>dd</p>
            <p>dd</p>
            <p>dd</p>
            <p>dd</p>
            <p>dd</p>
            <p>dd</p>
            <p>dd</p>
            <p>dd</p>
            <p>dd</p>
            <p>dd</p>
            <p>dd</p>
            <p>dd</p>
            <p>dd</p>
            <p>dd</p>
            <p>dd</p>
            <p>dd</p>
            <p>dd</p>
            <p>dd</p>
            <p>dd</p>
            <p>dd</p>
            <p>dd</p>
            <p>dd</p>
            <p>dd</p>
            <p>dd</p>
            <p>dd</p>
            <p>dd</p>
            <p>dd</p>
            <p>dd</p>
            <p>dd</p>
            <p>dd</p>
            <p>dd</p>
            <p>dd</p>
            <p>dd</p>
            <p>dd</p>
            <p>dd</p>
            <p>dd</p>
            <p>dd</p>
            <p>dd</p>
            <p>dd</p>
            <p>dd</p>
            <p>dd</p>
            <p>dd</p>
            <p>dd</p>
            <p>dd</p>
            <p>dd</p>
            <p>dd</p>
            <p>dd</p>
            <p>dd</p>
            <p>dds</p>
        </div>
    </main>
    <script src='../../lib/bootstrap/js/jquery/jquery.min.js'></script>
    <script src='../../lib/bootstrap/js/bootstrap.bundle.min.js'></script>
</body>
</html>