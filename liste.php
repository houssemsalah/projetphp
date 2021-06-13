<?php
session_start();
require_once("functions.php");
include ("head.php")
?>


    <div class="ftco-blocks-cover-1">
      <div class="ftco-cover-1 overlay innerpage" style="background-image: url('images/hero_2.jpg')">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-lg-8 text-center">
              <h1>Liste des voitures disponibles</h1>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section bg-light">
      <div class="container">
        <div class="row">

              <?php
            $prods=getAllModele();

            foreach($prods as $k=>$v){
              ?>


          <div class="col-lg-4 col-md-6 mb-4">
            <div class="item-1">

            <img src="images/<?=$v->id_modele ?>.jpg" alt="Image" class="img-fluid"/>
                <div class="item-1-contents">
                  <div class="text-center">
                  <h3 ><a href="#"><?=$v->titre?> </a></h3>
                  <div class="rating">
                    <span class="icon-star text-warning"></span>
                    <span class="icon-star text-warning"></span>
                    <span class="icon-star text-warning"></span>
                    <span class="icon-star text-warning"></span>
                    <span class="icon-star text-warning"></span>
                  </div>
                  <div class="rent-price"><span><?=getPrixByModelId($v->id_modele) ?></span>DT/Jour <?php
                      if ($v->prix != getPrixByModelId($v->id_modele)){ ?>
                          <del><?=$v->prix ?> DT/Jour</del>
                      <?php } ?>
                  </div>
                  </div>
                  <ul class="specs">
                    <li>
                      <span>Portes</span>
                      <span class="spec"><?=$v->nbre_places?></span>
                    </li>
                    <li>
                      <span>Coffre</span>
                      <span class="spec"><?=$v->coffre?></span>
                    </li>
                    <li>
                      <span>Transmission</span>
                      <span class="spec"><?=$v->boite?></span>

                  </ul>
                  <div class="d-flex action">
                    <a href="accueil.php?id_modele=<?=$v->id_modele?>" class="btn btn-primary">Réserver</a>
                  </div>
                </div>




              </div>
          </div>
          <?php
                }
                ?>

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

