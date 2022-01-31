<?php
    session_start();
    require_once '../../partials/connection.php';

    $st = $pdo->prepare("select * from users where user_id=:id");
    $st->bindValue(':id', $_SESSION['tmpuser']);
    $st->execute();
    $user = $st->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='../../lib/bootstrap/css/bootstrap.min.css' />
    <link rel='stylesheet' href='../../lib/font-awesome/css/all.min.css' />

    <title>Bash | Profile</title>
    <style>
        .profile-top, .profile-main {
            position: relative;
            width: 70%;
            margin: auto;
            margin-top: 20px;
            border-radius: 20px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }
        
        .profile-top .profile-nav {
            height: 50px;
        }

        .cover-pic {
            width:100%;
            height:250px;
            border-radius: 20px;
            object-fit: cover;
        }

        .profile-pic {
            position: absolute;
            bottom: 25px;
            left: 10px;
            width: 100px;
            height: 130px;
            border: 1px solid;
        }
    </style>
</head>
<body>
    <?php
        include_once "../partials/navigation.php";
    ?>
    <div class="profile-top border mt-5">
        <div class="row">
            <div class="col">
                <img class="cover-pic" src="../../lib/Assets/img/<?php echo $user['image'] ?? 'default.jpg' ?>" alt="">
            </div>
        </div>
        <div class="row profile-nav">
            <div class="col-2 offset-3"><a href="./profile.php">Timeline</a></div>
            <div class="col-2"><a href="./profile.php?profile-content=about">About</a></div>
            <div class="col-2"><a href="./profile.php?profile-content=photos">Photos</a></div>
        </div>
        <div class="profile-pic">
            <img src="../../lib/Assets/img/<?php echo $user['image'] ?? 'default.jpg' ?>" style="displaly: block;width:100%;height:100%" alt="">
        </div>
    </div>
    <div class="profile-main">
        <?php 
           if(!isset($_GET['profile-content'])){
               include "./timeline/timeline.php";
            }elseif($_GET['profile-content'] == 'about'){
               include "./about/about.php";
           }else{
               include "./photos/photos.php";
           }
        ?>
    </div>
    
    <script src='../../lib/bootstrap/js/jquery/jquery.min.js'></script>
    <script src='../../lib/bootstrap/js/bootstrap.bundle.min.js'></script>
</body>
</html>