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
                            <a href="index.php">Accueil</a> > <a href="Liste_Certificats_Negatif.php">liste des certificat négatif</a>
                        </li>
                       
                    </ol>

                    
                    <div class="page-header">
                        <h1 class="page-title">Liste des Certificats négatif</h1>
                        
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
                                        
                                        <th>Dénomination Accepter</th>
                                        <th>Forme juridique</th>
                                        <th>Numéro ICE</th>
                                        <th>Bénéficiare</th>
                                        <th>Activité</th>
                                        <th>Ville</th>
                                        
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <?php 
                                        $result = $db->prepare("SELECT * FROM certificatsnegatifs");
                                        $result->execute();
                                        $fetch = $result->fetchAll();
                                        foreach ($fetch as $key):
                                    ?>

                                    <tr>
                                        <td><?php echo $key['denomination'] ?></td>
                                        <td><?php echo $key['formJuridique'] ?></td>
                                        <td><?php echo $key['numICE'] ?></td>
                                        <td><?php echo $key['beneficiaire'] ?></td>
                                        <td><?php echo $key['activite'] ?></td>
                                        <td><?php echo $key['ville'] ?></td>
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
