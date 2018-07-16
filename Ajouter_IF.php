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
                            <a href="index.php">Accueil</a> > <a href="IF.php">Identifiant Fiscal</a>
                        </li>
                       
                    </ol>

                    
                    <div class="page-header">
                        <h1 class="page-title">Ajouter Un Identifiant Fiscal</h1>
                        
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

                                <?php 
                                    $id = $_GET['id'];
                                
                                    $result = $db->prepare("SELECT * FROM societes join certificatsnegatifs on id_soc = id__soc where id_soc = " . $id); 
                                    $result->execute();
                                    $fetch = $result->fetch();
                                ?>

                                <!-- Form -->
                                <form action="insert_if.php" method="POST">
                                    <div class="form-group">
                                        <label for="frm01--email">Bénéficiaire</label>
                                        <input type="email" id="frm01--email" class="form-control" name="beneficiaire"
                                        readonly value="<?php echo $fetch['beneficiaire']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="frm01--email">Dénomination</label>
                                        <input type="email" id="frm01--email" class="form-control" name="denomination"
                                        readonly value="<?php echo $fetch['denomination']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="frm01--password">Siège social</label>
                                        <input type="text" id="frm01--password" class="form-control" name="siege"
                                        readonly value="<?php echo $fetch['siege']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="frm01--password">Activité</label>
                                        <input type="text" id="frm01--password" class="form-control" name="activite"
                                        readonly value="<?php echo $fetch['activite']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="frm01--password">Numéro d'Identifiant Fiscal</label>
                                        <input type="text" id="frm01--password" class="form-control" name="if" placeholder="Identifiant Fiscale">
                                    </div>
                                  <div class="form-group">
                                        <label for="frm01--password">Forme juridique</label>
                                        <input type="text" id="frm01--password" class="form-control" name="formJuridique"
                                        readonly value="<?php echo $fetch['formJuridique']; ?>">
                                    </div>

                                    <input type="hidden" name="id__soc" value="<?php echo $fetch['id_soc']; ?>">
                                     
                                    <a href="if.php" class="btn btn-danger">Réinitialiser</a>
                                    <input type="submit" name="send" class="btn btn-success" value="Enregistrer">
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
