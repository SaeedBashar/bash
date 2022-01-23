<!DOCTYPE html>
<html lang="en-us">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="./static/style.css"/>
    <title>Document</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row index-top">
            <div class="col-sm-3 offset-sm-2 index-title">Bash</div>
            <div class="col-sm-6 offset-sm-1">
                <form class="login-form">
                   <div class="email-log">
                      <label for="email">Email</label><br/>
                      <input type="email" class="form-control" />
                   </div>
                   <div class="pword-log">
                      <label for="password">Password</label><br/>
                      <input type="password" class="form-control" />
                   </div>
                   <div class="">
                       <div class="keep-login"><input type="checkbox" /><span class="pl-2">Keep me signed in</span></div>
                       <div class="pl-4"><a href="#">Forgot your password?</a></div>
                   </div>
                   <!-- <input class="btn btn-info" type="submit" value="submit" /> -->
                </form>
            </div>
        </div>
        <div class="row pt-5 main-cont">
            <div class="col-sm-6 main-left">
                <div>Bash helps you connect and share with the people in your life.</div>
                <img class="connect-img" src="./assets/img/connect.png" alt="connnects people">
            </div>
            <div class="col-sm-6 main-right">
                <div class="signup">
                    <h3>Sign Up</h3>
                    <p>It's free forever</p>
                </div>
                <form>
                    <div class="form-group">
                        <label>First Name</label>
                        <input type="text" class="form-control" placeholder="firstname">
                    </div>
                    <div class="form-group">
                        <label>Last/other Names</label>
                        <input type="email" class="form-control" placeholder="othernames">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Email address</label>
                        <input type="email" class="form-control" placeholder="email">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" placeholder="password">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Confirm Password</label>
                        <input type="password" class="form-control" placeholder="password">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Gender</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                        <option>Male</option>
                        <option>Female</option>
                        </select>
                    </div>
                    <div>
                        <input class="btn btn-info" type="submit" value="Submit" />
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="./lib/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>