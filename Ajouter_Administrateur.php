<!DOCTYPE html>
<html lang="en">
<?php require 'connexion/connect.php' ?>

<header class="header">
<?php include('header/header.php'); ?>
<?php include('header/side-bar.php'); ?>
</header>

<main class="main-container">



    <header class="page-heading">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12">

                    <ol class="breadcrumb">
                        <li>
                            <i class="icon fa fa-home"></i>
                            <a href="index.php">Accueil</a> > <a href="administrateur.php">Administrateur</a>
                        </li>
                       
                    </ol>

                    <div class="page-header">
                        <h1 class="page-title">Ajouter Un Adminidtrateur</h1>
                        
                    </div>
                </div>
            </div>
        </div>
    </header>
 <div class="container-fluid">
  <!-- Page section: Preview -->
       
        <div class="section">
            <div class="row">
                <div class="col-xs-12">

                    <!-- Demo elements -->
                    <div class="demo-elements">
                        <div class="panel panel-white demo-panel" style="width:100%;">
                            <div class="panel-heading">
                                <div class="panel-title"></div>
                            </div>
                            <div class="panel-body pb">

                                <!-- Form -->
                                <form method="POST" action="add_admin">
                                    <div class="form-group">
                                        <label for="frm01--email">Nom</label>
                                        <input type="text" id="frm01--email" class="form-control" required name="name" placeholder="Nom">
                                    </div>

                                    <div class="form-group">
                                        <label for="frm01--password">Adresse</label>
                                        <input type="text" id="frm01--email" class="form-control" required name="adress" placeholder="Adresse">
                                    </div>

                                    <div class="form-group">
                                        <label for="frm01--password">Telephone</label>
                                        <input type="tel" maxlength="10" minlength="10" id="frm01--password" required class="form-control" name="phone" placeholder="0611223344">
                                    </div>

                                    <div class="form-group">
                                        <label for="frm01--password">Email</label>
                                        <input type="email" id="frm01--password" class="form-control" required name="email" placeholder="Email">
                                    </div>

                                    <div class="form-group">
                                        <label for="frm01--password">Mot de passe</label>
                                        <input type="password" id="frm01--password" class="form-control" required name="password" placeholder="Mot de passe">
                                    </div>
                                    
                                    <input type="submit" class="btn btn-success" name="send" value="Ajouter">
                                </form>
                                <!-- /Form -->

                            </div>
                        </div>
                    </div>
                    <!-- /Demo elements -->

                </div>
            </div>
        </div>

</div>
</main>


<!-- FORMA PHONE REGEX -->
<!-- pattern="^\+\d{3}\s\d{9}?" -->

<!-- Scripts -->
<script src="assets/js/jquery-2.2.0.min.js"></script>
<script src="assets/components/jquery-ui-1.12.1/jquery-ui.min.js"></script>
<script src="assets/components/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
<script src="assets/components/owl-carousel/owl.carousel.min.js"></script>
<script src="assets/components/magnific-popup-master/dist/jquery.magnific-popup.min.js"></script>
<script src="assets/components/malihu-custom-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="assets/components/jqvmap/dist/jquery.vmap.min.js"></script>
<script src="assets/components/jqvmap/dist/maps/jquery.vmap.world.js"></script>
<script src="assets/js/jquery.validate.min.js"></script>
<script src="assets/js/Chart.min.js"></script>
<script src="assets/js/circle-progress.min.js"></script>
<script src="assets/js/calendar.js"></script>
<script src="assets/js/general.js"></script>
<!-- /Scripts -->

<!-- Yandex.Metrika counter --> <script> (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter35435255 = new Ya.Metrika({ id:35435255, clickmap:true, trackLinks:true, accurateTrackBounce:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "../../../mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks"); </script> <noscript></noscript> 

</body>

</html>
