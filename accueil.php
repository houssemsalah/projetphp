<?php
session_start();
require_once("functions.php");

if (!isset($_SESSION["nameuser"]))
    header("location:enregistrer.php");

if (!isset($_GET["id_modele"]))
    header("location:liste.php");

include("head.php")
?>


    <div class="ftco-blocks-cover-1">
        <div class="ftco-cover-1 overlay" style="background-image: url('images/hero_1.jpg')">
        </div>
    </div>

    <div class="site-section pt-0 pb-0 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <form class="trip-form" method="GET" action="save2.php">
                        <div class="row align-items-center mb-4">
                            <div class="col-md-6">
                                <h3 class="m-0">Réservez votre voiture de location</h3>
                            </div>
                            <div class="col-md-6 text-md-right">
                                <?php $prods = getAllVoitureByModelID($_GET["id_modele"]); ?>
                                <span class="text-primary"><?= count($prods) ?></span>
                                <span><?= getModeleById($_GET["id_modele"])[0]->titre ?> disponibles</span></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-3">
                                <label for="cf-1">Voiture</label>
                                <select class="form-control" name="voiture">
                                    <?php foreach ($prods as $k => $w) { ?>
                                        <option value="<?= $w->id_voiture ?>"><?= $w->matricule ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="cf-1">Ville Départ</label>
                                <input type="text" id="cf-1" placeholder="Ville Départ" name="villeDep"
                                       class="form-control" required>
                            </div>

                            <div class="form-group col-md-3">
                                <label for="cf-3">Date de prise</label>
                                <input type="date" id="dateP" placeholder="Date de prise" name="dateP"
                                       class="form-control  px-3" onchange="setMinDate()" required>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="cf-4">Date de retour</label>
                                <input type="date" id="dateR" placeholder="Date de retour" name="dateR"
                                       class="form-control  px-3" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="submit" value="Submit" class="btn btn-primary">
                            </div>
                        </div>
                    </form>

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
<script type="text/javascript">
    function setMinDate(){
        var dateP=document.getElementById("dateP").value;
        const tomorrow = new Date(dateP)
        tomorrow.setDate(tomorrow.getDate() + 1)
        var dd = tomorrow.getDate();
        var mm = tomorrow.getMonth()+1; //January is 0!
        var yyyy = tomorrow.getFullYear();
        if(dd<10){
            dd='0'+dd
        }
        if(mm<10){
            mm='0'+mm
        }
        todayPO = yyyy+'-'+mm+'-'+dd;
        document.getElementById("dateR").setAttribute("min", todayPO);
        var dateR=document.getElementById("dateR").value;
        if (dateR == "")
            document.getElementById("dateR").value=todayPO
        else{
            var d=new Date(dateR).getTime();
            var p=new Date(dateP).getTime();
            if(d-p <= 0)
                document.getElementById("dateR").value=todayPO
        }
    }
</script>
<script type="text/javascript">
    var today = new Date();
    var dd = today.getDate();
    var mm = today.getMonth()+1; //January is 0!
    var yyyy = today.getFullYear();
    if(dd<10){
        dd='0'+dd
    }
    if(mm<10){
        mm='0'+mm
    }
    today = yyyy+'-'+mm+'-'+dd;
    const tomorrow = new Date()
    tomorrow.setDate(tomorrow.getDate() + 1)
    var dd = tomorrow.getDate();
    var mm = tomorrow.getMonth()+1; //January is 0!
    var yyyy = tomorrow.getFullYear();
    if(dd<10){
        dd='0'+dd
    }
    if(mm<10){
        mm='0'+mm
    }
    todayPO = yyyy+'-'+mm+'-'+dd;

    document.getElementById("dateP").setAttribute("min", today);
    document.getElementById("dateR").setAttribute("min", todayPO);

</script>
</body>

</html>
