<head>

    <?php
    
    if(!isset($_SESSION)) 
    { 
        session_start();

    $result = $db->prepare("SELECT name FROM admins where email = '" . $_SESSION['user'] . "' and password = '" . $_SESSION['pass'] . "'");
    $result->execute();
    $query = $result->fetch();
    } 

    if (isset($_POST['logout'])) {
        
        session_destroy();
        header("location: index.php");
    }

    ?>

    <title>CHARIKTY</title>
   
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="favicon.png">
  
    <link rel="stylesheet" href="assets/components/bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/components/jquery-ui-1.12.1/jquery-ui.min.css">
    <link rel="stylesheet" href="assets/components/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/components/elegant-font/style.css">
    <link rel="stylesheet" href="assets/components/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="assets/components/owl-carousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/components/owl-carousel/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/components/magnific-popup-master/dist/magnific-popup.css">
    <link rel="stylesheet" href="assets/components/malihu-custom-scrollbar/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="assets/components/jqvmap/dist/jqvmap.min.css">
    <link rel="stylesheet" href="assets/css/theme.css">
   

</head>
<body class="sidebar-expanded">


<div class="preloader loader"></div>

<div class="top-line">    
        <a href="dashboard.php" class="brand">    
            <div class="brand-big">
                <span class="strong">CHARIKTY</span>Board
            </div>
        </a>
      
        <div class="menu-button">
            <a href="#" class="sidebar-toggle menu-toggle open">
                <div class="menu-icon">
                    <span></span><span></span><span></span>
                    <span></span><span></span><span></span>
                </div>
            </a>
        </div>  <div class="navigation-top">

            <ul class="navbar-top navbar-top-right">

                <!-- Notifications -->
                <li class="dropdown">

                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="icon icon-left fa fa-bell-o"></i>
                        <!--<span class="navbar-top-title">Notifications</span>-->
                        <span class="badge badge-danger">3</span>
                    </a>
                    
                    <ul class="dropdown-menu dropdown-menu-custom dropdown-menu-right dropdown-menu-notifications">
                        <li class="title">Notifications</li>
                        <li>
                            <a href="#" class="notification-item">
                                <div class="image avatar">
                                    <img src="images/avatar-m-01.jpg" alt="">
                                </div>
                                
                                <div class="notification-body">
                                    <span class="name">Phillip Sandoval</span> liked your post
                                    <span class="datetime">2 minutes ago</span>
                                    <span class="state-dot state-dot-online"></span>
                                </div>
                            </a>
                        </li>
                    </ul>
                </li>

        
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle nav-profile" data-toggle="dropdown">
                        <span class="profile-name"><b><?php echo $query['name']; ?></b></span>
                        <span class="caret"></span>
                        <div class="profile-avatar">
                            <span class="glyphicon glyphicon-user"></span>
                            <!-- <div class="profile-avatar-image">
                                <img src="images/avatar-m-01.jpg" alt="">
                            </div> -->
                        </div>
                    </a>
                 
                    <ul class="dropdown-menu dropdown-menu-right">
                        <!-- <li><a href="#"><i class="icon icon-inline fa fa-address-card-o"></i>Mon compte</a></li>
                        <li><a href="#"><i class="icon icon-inline fa fa-sign-out"></i>Déconnexion</a></li> -->
                        <li>
                            <form action="" method="POST">
                                <input type="submit" class="btn btn-default" name="logout" value="logout"></a>
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>