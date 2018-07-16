<!DOCTYPE html>
<?php 
    require 'connexion/connect.php';
?>
<html lang="en">
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
                            <a href="index.php">Accueil</a> > <a href="cnegatif.php">Certificat Négatif</a>
                        </li>
                       
                    </ol>

                    
                    <div class="page-header">
                        <h1 class="page-title">Certificat Négatif</h1>
                        
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
                                <!-- <?php //echo $_SESSION['success']; ?> -->
                                <form action="Ajouter_C_Negatif.php" method="POST">
                                    <table class="table table-bordered table-hover" >
                                    <thead>
                                    <tr>
                                        
                                        <th>Bénéficiaire</th>
                                        <th>1ere Dénomination</th>
                                        <th>2ème Dénomination</th>
                                        <th>3ème Dénomination</th>
                                        <th>Activité</th>
                                        <th>Ville</th>
                                        <th>Forme juridique</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                    $result = $db->prepare("SELECT * FROM societes 
                                                            join clients on id__cl = id_cl 
                                                            where etat = 0");
                                    $result->execute();
                                    $fetch = $result->fetchAll();
                                    foreach ($fetch as $key):

                                        //$check = $db->prepare("SELECT id__soc FROM certificatsnegatifs");
                                        //$check->execute();

                                        //foreach ($check as $c) {

                                        //if($check == $key['id_soc']) {
                                          //      echo "ID found!";
                                            //}
                                            //else {
                                              //  echo "ID not found!";
                                            //} 
                                        //}
                                        ?>


                                    <tr>
                                        <td><?php echo $key['name']; ?></td>
                                        <td><?php echo $key['nom_soc_1']; ?></td>
                                        <td><?php echo $key['nom_soc_2']; ?></td>
                                        <td><?php echo $key['nom_soc_3']; ?></td>
                                        <td><?php echo $key['activite']; ?></td>
                                        <td><?php echo $key['ville_soc']; ?></td>
                                        <td><?php echo $key['formJuridique']; ?></td>
                                        <td>
                                        <!-- <input type="text" name="<?php //echo $key['id_soc']; ?>"> -->
                                        <div class="buttons">
                                        <!-- <input class="btn btn-success" type="submit" style="width: 120px; height: 40px;" value="Vérifier"> -->
                                        <a class="btn btn-success" href="Ajouter_C_Negatif.php?id=<?php echo $key['id_soc']; ?>">Vérifier</a>
                                        </div>
                                        </td>
                                    <?php endforeach; ?>        
                                    </tr>

                                    </tbody>

                                    </table>
                                </form>
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
