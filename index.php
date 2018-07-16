<?php 
    session_start();
    require 'connexion/connect.php';
 ?>

<html>
<head>
    <title>Authentification</title>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">



</head>
    <body>
    <div class="login-box">
    <img src="images/avatar.png" class="avatar">
        <h1>Login</h1>
            <form action="" method="POST">
            <p>E-mail</p>
            <input type="text" name="username" placeholder="Enter Username">
            <p>Mot de passe</p>
            <input type="password" name="password" placeholder="Enter Password">
            <input type="submit" name="login" value="Login">
            <!-- <a href="#">Mot de passe oublié ?</a> -->
            </form>
        
        
        </div>
    
    </body>
</html>


<?php 
    
    if (isset($_POST['login'])) {
        
        $user = $_POST['username'];
        $pass = md5($_POST['password']);


        /*-----------------------------------Selection----------------------------------------------*/
        $result = $db->prepare("SELECT count(*) FROM admins where email = '" . $user . "' and password = '" . $pass . "'");
        $result->execute();

        $query = $result->fetchColumn();


        if ($query == "1") {
            $_SESSION['user'] = $user;
            $_SESSION['pass'] = $pass;
        header("location: dashboard.php");
        }else{
            echo '<div id="myModal" class="modal">

                      <!-- Modal content -->
                    <div class="modal-content">
                           
                        <div class="row popoup">
                        <div class="col-md-4"><i class="far fa-frown"></i></div>
                        <div class="col-md-8">
                        <h2>Oh Snap!</h2>
                        <p>Votre Email ou votre mot de passe est incorrect</p>
                        <a href="index.php">Connectez vous</a>
                        </div>
                        </div>
                        </div>

                    </div>

                        <script>
                        var modal = document.getElementById("myModal");

                        var span = document.getElementsByClassName("close")[0];

                            modal.style.display = "block";

                        span.onclick = function() {
                            modal.style.display = "none";
                        }

                        window.onclick = function(event) {
                            if (event.target == modal) {
                                modal.style.display = "none";
                            }
                        }

                    </script>';
        }
    }


    ?>