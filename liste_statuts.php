<!DOCTYPE html>
<html lang="en">
<?php require 'connexion/connect.php'; ?>

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
                            <a href="index.php">Accueil</a> > <a href="liste_statuts.php">Liste des statuts</a>
                        </li>
                       
                    </ol>

                    
                    <div class="page-header">
                        <h1 class="page-title">Liste des statuts</h1>
                        
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
                            <div class="panel-body">

                            <div class="table-responsive">
                                <table class="table table-bordered table-hover" >

                                    <thead>
                                    <tr>
                                        <th>Nom</th>
                                        <th>Nationalité</th>
                                        <th>Date de naissance</th>
                                        <th>CIN</th>
                                        <th>Adresse</th>
                                        <th>Dénomination </th>
                                        <th>Siege</th>
                                        <th>capital en chiffre</th>
                                        <th>capital en lettre</th>
                                        
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <?php 
                                    $result = $db->prepare("SELECT * FROM statuts");
                                    $result->execute();
                                    $fetch = $result->fetchAll();
                                    foreach ($fetch as $key): ?>

                                    <tr>
                                        <td><?php echo $key['name'] ?></td>
                                        <td><?php echo $key['nationalite'] ?></td>
                                        <td><?php echo $key['dateNaissance'] ?></td>
                                        <td><?php echo $key['cin'] ?></td>
                                        <td><?php echo $key['adresse'] ?></td>
                                        <td><?php echo $key['denomination'] ?></td>
                                        <td><?php echo $key['siege'] ?></td>
                                        <td><?php echo $key['capitalChiffre'] ?></td>
                                        <td><?php echo $key['capitalLettre'] ?></td>
                                    </tr>
                                  

                                     <?php endforeach; ?>

                                    </tbody>

                                </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Demo elements -->

                </div>
            </div>
        </div>

</div>
</main>









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
