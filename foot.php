
<div class="site-section bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <h3>Nos promotions</h3>
                <p class="mb-4">Profitez des nos meilleures offres de location voiture Tunisie chez Car_ESSAT, un
                    des leaders de loueurs de voitures en Tunisie</p>
                <p>
                    <a href="#" class="btn btn-primary custom-prev">Previous</a>
                    <span class="mx-2">/</span>
                    <a href="#" class="btn btn-primary custom-next">Next</a>
                </p>
            </div>
            <div class="col-lg-9">


                <div class="nonloop-block-13 owl-carousel">
                    <?php
                    $prods=getAllPromo();
                    foreach($prods as $k=>$v){
                        ?>
                        <div class="item-1">
                            <a href="#"><img src="images/<?=$v->id_modele ?>.jpg" alt="Image" class="img-fluid"></a>
                            <div class="item-1-contents">
                                <div class="text-center">
                                    <h3><a href="#"><?=$v->titre?> </a></h3>
                                    <div class="rating">
                                        <span class="icon-star text-warning"></span>
                                        <span class="icon-star text-warning"></span>
                                        <span class="icon-star text-warning"></span>
                                        <span class="icon-star text-warning"></span>
                                        <span class="icon-star text-warning"></span>
                                    </div>
                                    <div class="rent-price"><span><font color="red"><?=getPrixByModelId($v->id_modele)?> </font> DT/</span>Jour</div>
                                </div>
                                <ul class="specs">
                                    <li>
                                        <span>Portes</span>
                                        <span class="spec"><?=$v->nbre_places?></span>
                                    </li>
                                    <li>
                                        <span>Coffre</span>
                                        <span class="spec"><?=$v->coffre?> dm3</span>
                                    </li>
                                    <li>
                                        <span>Transmission</span>
                                        <span class="spec"><?=$v->boite?></span>
                                    </li>

                                </ul>
                                <div class="d-flex action">
                                    <a href="accueil.php?id_modele=<?=$v->id_modele?>" class="btn btn-primary">Réserver</a>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                </div>

            </div>
        </div>
    </div>
</div>

<div class="site-section section-3" style="background-image: url('images/hero_2.jpg');">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2 class="text-white">Our services</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="service-1">
              <span class="service-1-icon">
                <span class="flaticon-car-1"></span>
              </span>
                    <div class="service-1-contents">
                        <h3>Réparation instantanée </h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="service-1">
              <span class="service-1-icon">
                <span class="flaticon-traffic"></span>
              </span>
                    <div class="service-1-contents">
                        <h3>variété des accessoires</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="service-1">
              <span class="service-1-icon">
                <span class="flaticon-valet"></span>
              </span>
                    <div class="service-1-contents">
                        <h3>Location avec Chauffeur</h3>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="site-section bg-light">
    <div class="container">
        <div class="row justify-content-center text-center mb-5">
            <div class="col-7 text-center mb-5">
                <h2>Ce qu'en disent nos clients</h2>
                <p></p>
            </div>
        </div>
        <div class="row">

            <?php
            $prods=getAllAvis();
            foreach($prods as $k=>$v){
                ?>

                <div class="col-lg-4 mb-4 mb-lg-0">
                    <div class="testimonial-2">
                        <blockquote class="mb-4">
                            <p><?=$v->message?></p>
                        </blockquote>
                        <div class="d-flex v-card align-items-center">
                            <img src="images/person_<?=$v->user_id?>.jpg" alt="Image" class="img-fluid mr-3">
                            <span><?=getUserNPById($v->user_id)?></span>
                        </div>
                    </div>
                </div>

            <?php } ?>


        </div>
    </div>
</div>


<footer class="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <h2 class="footer-heading mb-4">A propos</h2>
                <p></p>
            </div>
            <div class="col-lg-8 ml-auto">
                <div class="row">
                    <div class="col-lg-3">
                        <h2 class="footer-heading mb-4">Links</h2>
                        <ul class="list-unstyled">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Liste des voitures</a></li>

                        </ul>
                    </div>


                </div>
            </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
            <div class="col-md-12">
                <div class="border-top pt-5">
                    <p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script>
                        All rights reserved | Chaker
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>

        </div>
    </div>
</footer>
