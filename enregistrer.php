<?php
session_start();
require_once("functions.php");
include ("head.php")
?>

    <div class="ftco-blocks-cover-1">
        <div class="ftco-cover-1 overlay innerpage" style="background-image: url('images/hero_2.jpg')">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h1>Espace client</h1>
                        <p>Vous avez commandé un véhicule et souhaitez en savoir plus sur l'état de votre dossier
                            de réservation? Identifiez-vous maintenant!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="site-section bg-light" id="contact-section">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-7 text-center mb-5">
                    <h2>Espace client</h2>
                    <p></p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-5">
                    <div class="bg-white p-3 p-md-5">
                        <h3 class="text-black mb-4">Déjà client ? </h3>
                        <form action="verif.php" method="post">
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="email"
                                           placeholder="Adresse Email">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <input type="password" class="form-control" name="passwd" placeholder="Password">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12 mr-auto">
                                    <input type="submit" class="btn btn-block btn-primary text-white py-3 px-5"
                                           value="Se connecter">
                                </div>
                            </div>
                        </form>
                        <?php
                        if (isset($_SESSION["erreur"])) {
                            ?>
                            <div class="alert alert-<?= $_SESSION["type"] ?>">
                                <?= $_SESSION["erreur"] ?>
                            </div>
                            <?php
                            unset($_SESSION["erreur"]);
                        }
                        ?>
                    </div>
                </div>
                <div class="col-md-6 mb-5">
                    <div class="bg-white p-3 p-md-5">
                        <h3 class="text-black mb-4">Nouveau client ? </h3>
                        <form action="save.php" method="post">
                            <div class="form-group row">
                                <div class="col-md-6 mb-4 mb-lg-0">
                                    <input type="text" class="form-control" name="prenom" placeholder="Prenom">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="nom" placeholder="Nom">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-6 mb-4 mb-lg-0">
                                    <input type="text" class="form-control" name="email"
                                           placeholder="Adresse Email">
                                </div>
                                <div class="col-md-6">
                                    <input type="password" class="form-control" name="passwd"
                                           placeholder="Mot de Passe">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12 mr-auto">
                                    <input type="submit" class="btn btn-block btn-primary text-white py-3 px-5"
                                           value="Enregistrer">
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include ('foot.php'); ?>
</div>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.sticky.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.animateNumber.min.js"></script>
<script src="js/jquery.fancybox.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/bootstrap-datepicker.min.js"></script>
<script src="js/aos.js"></script>
<script src="js/main.js"></script>
</body>
</html>

