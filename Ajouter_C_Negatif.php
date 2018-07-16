<!DOCTYPE html>

<?php require 'connexion/connect.php' ?>
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
                            <a href="index.php">Accueil</a>
                            <a href="cnegatif.php">Certificat Négatif</a>
                        </li>
                       
                    </ol>

                    
                    <div class="page-header">
                        <h1 class="page-title">Ajouter Une Certificat Négatif</h1>
                        
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
                                <form action="insert_cn.php" method="POST">
                                    
                                <?php 
                                    $id = $_GET['id'];
                                
                                    $result = $db->prepare("SELECT * FROM societes as soc join clients as cl on id__cl = id_cl where id_soc = " . $id); 
                                    $result->execute();
                                    $fetch = $result->fetch();
                                ?>
                                    <div class="form-group">
                                        <label for="frm01--password">Dénomination accepté</label>
                                        <select id="frm01--password" class="form-control" name="denomination">
                                            <option><?php echo $fetch['nom_soc_1']; ?></option>
                                            <option><?php echo $fetch['nom_soc_2']; ?></option>
                                            <option><?php echo $fetch['nom_soc_3']; ?></option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="frm01--password">Forme juridique</label>
                                        <input type="text" id="frm01--password" name="formJuridique" class="form-control"  readonly value="<?php echo $fetch['formJuridique']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="frm01--password">Numéro ICE</label>
                                        <input type="text" id="frm01--password" name="ice" class="form-control" required placeholder="ICE">
                                    </div>
                                    <div class="form-group">
                                        <label for="frm01--password">Bénéiciare</label>
                                        <input type="text" id="frm01--password" name="beneficiaire" readonly class="form-control" value="<?php echo $fetch['name']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="frm01--password">Activité</label>
                                        <input type="text" id="frm01--password" name="activite" readonly class="form-control" value="<?php echo $fetch['activite']; ?>">
                                    </div>
                                     <div class="form-group">
                                        <label for="frm01--password">Ville</label>
                                        <input type="text" id="frm01--password" name="ville" readonly class="form-control" value="<?php echo $fetch['ville_soc']; ?>">
                                    </div>

                                    <input type="hidden" name="id__soc" value="<?php echo $fetch['id_soc']; ?>">

                                     
                                    <!-- <button class="btn btn-danger" href="refuse.php"></button> -->
                                    <!-- TODO: Change type="button" to type="submit" -->
                                   
                                    <!-- <a  class="btn btn-success" ></a> -->
                                    <input type="submit" class="btn btn-success" name="send" value="Envoyé">
                                    <a href="cnegatif.php" class="btn btn-danger">refusé</a>
                                    
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
