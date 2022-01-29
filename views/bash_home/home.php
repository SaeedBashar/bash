<?php
    require_once '../../partials/connection.php';
   
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

    session_start();
    
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

        .nav-item {
            width: 5rem;
            text-align: center;
        }

    </style>
</head>
<body>
    <nav class="navbar navbar-expand-md fixed-top navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Bash</a>
        <div class=" mr-5">
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" name="search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" title="home" href="#"><i class="fa fa-home"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" title="watch" href="#"><div class="fa fa-tv"></div></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" title="marketplace" href="#"><div class="fa fa-home"></div></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" title="groups" href="#"><div class="fa fa-users"></div></a>
                </li>
            </ul>
            <div class="">
                right section
            </div>
        </div>
    </nav>
    <main class="main">
        <div class="home-left pt-3">
        <ul>
            <li><a href="../bash_profile/timeline/timeline.php">
                  <?php if(false) { ?>
                    <i class="fa fa-user pr-1"></i>
                  <?php } else { echo "<i class='fa fa-user pr-1'></i>"; } ?>
                  <?php echo $_SESSION['tmpuser'] ?>
                </a>
            </li>
            <li><a href="#news"><i class="fa fa-users pr-1"></i>Friends</a></li>
            <li><a href="#contact"><i class="fa fa-users pr-1"></i>Groups</a></li>
            <li><a href="../bash_profile/timeline/timeline.php"><i class="fa fa-shopping-basket pr-1"></i>Timeline</a></li>
            <li><a href="../bash_profile/about/about.php"><i class="fa fa-tv pr-1"></i>About</a></li>
            <li><a href="../bash_profile/photos/photos.php"><i class="fa fa-clock pr-1"></i>Photos</a></li>
            <li><a href="#about"><i class="fa fa-tag pr-1"></i>Settings</a></li>
            <!-- <li><a href="#about"><i class="fa fa-flag pr-1"></i>Pages</a></li>
            <li><a href="#about"><i class="fa fa-calendar pr-1"></i>Events</a></li>
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