<?php
    require('extern/_header.php');
?>
<!DOCTYPE html>
<html>
    <head>
		<?php include "extern/head.php" ?>	

        <style>
            
            .carousel-control-prev, .carousel-control-next {
                width: 5%;
            }

            .carousel-control-prev {
                border-top-left-radius: 1rem;
                border-bottom-left-radius: 1rem;
            }

            .carousel-control-next {
                border-top-right-radius: 1rem;
                border-bottom-right-radius: 1rem;
            }
            
            
            .carousel-control-prev-icon, .carousel-control-next-icon {
                width: 100%;
                height: 8%;
                filter: invert(100%);
                
            }

            .carousel-control-prev:hover, .carousel-control-next:hover {
                background: grey;
                filter: invert(100%);
            }

        </style>

	</head>

    <body id="accueil">

        <?php include "extern/header.php" ?>

        <div id="carousel-header" class="carousel slide carousel-fade" data-ride="carousel" data-interval="8000">
            <div class="carousel-inner">

                <div class="carousel-item active carousel-head">
                    <img src="https://media.istockphoto.com/photos/new-luxury-residential-towers-construction-on-the-waterfront-of-east-picture-id1304037325" class="d-block">
                </div>

                <div class="carousel-item carousel-head">
                    <img src="https://media.istockphoto.com/photos/two-asian-engineering-using-the-tablet-for-discussion-and-working-at-picture-id1299533553" class="d-block">
                </div>

                <div class="carousel-item carousel-head">
                    <img src="https://media.istockphoto.com/photos/construction-of-modern-buildings-picture-id148125427" class="d-block">
                </div>

            </div>
        </div>

            <div class="cont-accueil">

                <div class="metiers">
                    <a href="metiers.php?metier=maitrise">
                        <img src="https://media.istockphoto.com/photos/quality-inspectors-working-in-a-steel-factory-picture-id1180177282?s=612x612" alt="maîtrise">
                        <div class="superpose" style="background-color: rgba(237, 41, 57, 0.5)">
                            <div class="txt-superpose">MAÎTRISE<br> D'ŒUVRE<br> D'EXECUTION</div>
                        </div>
                    </a>
                </div>
                
                <div class="metiers">
                    <a href="metiers.php?metier=ordonnancement">
                        <img src="https://media.istockphoto.com/photos/surveying-engineers-are-working-together-using-theodolite-on-the-picture-id1257559262?k=20&m=1257559262&s=612x612&w=0&h=Sih8uuYOkKYdK-lgBgdTUvCXH7pk3AXe2-afYUBUGQw=" alt="OPC">
                        <div class="superpose" style="background-color: rgba(0, 35, 149, 0.5)">
                            <div class="txt-superpose"><span style="font-size: 0.7em;">ORDONNANCEMENT,<br></span> PILOTAGE & <br> COORDINATION<br> (OPC)</div>
                        </div>
                    </a>
                </div>

                <div class="metiers">
                    <a href="metiers.php?metier=direction">
                        <img src="https://media.istockphoto.com/photos/glad-to-work-with-you-picture-id951514270?k=20&m=951514270&s=612x612&w=0&h=YuXPRgNuF-CIPpQEcJHVn8TFlzU-1z8g7YY7F6i0qOk=" alt="direction">
                        <div class="superpose" style="background-color: rgba(237, 41, 57, 0.5)">
                            <div class="txt-superpose ">DIRECTION<br> TRAVAUX &<br> CONSEIL AUX<br> ENTREPRISES</div>
                        </div>
                    </a>
                </div>

                <div class="metiers">
                    <a href="metiers.php?metier=analyse">
                        <img src="https://media.istockphoto.com/photos/business-people-are-analyzing-and-planning-business-business-strategy-picture-id1186614184?k=20&m=1186614184&s=612x612&w=0&h=Nxn6DS_h10fXGMjOWtBA_RoLP7KbQ06D_KFatzF3_Ok=" alt="analyse"> 
                        <div class="superpose" style="background-color: rgba(0, 35, 149, 0.5)">
                            <div class="txt-superpose">ANALYSE<br> TECHNIQUES<br> DE DOSSIERS</div>
                        </div>
                    </a>
                </div>

            </div>

            <div class="cont-accueil">
            <div>
                <h1 class="text-center"> Un partenaire de confiance pour manager vos projets</h1>
                <p>ICECS voit au-delà de ses seules responsabilités. Manager un projet, ce n'est pas seulement 
                    se donner une obligation de moyens mais de résultat. Présents personnellement sur chacune des
                    opérations, nous avons su démontrer au fil des projets notre disponibilité, notre sens de l'écoute 
                    et notre réactivité.</p>
            </div>

        </div>    
          
        <div class="titre">
            <div class="txt-titre">ACTUALITÉS</div>
        </div>

            <div id="carousel-news" class="carousel slide">
                        
                <div class="carousel-inner">
               
                    <div class="carousel-item active">
                        <div class="carousel-actu d-inline-flex">
                            <div class="carousel-news-left-handle"></div>
                            <img src="https://media.istockphoto.com/photos/exterior-view-of-the-college-of-svres-picture-id1304269044?s=612x612">
                            <div class="txt-carousel-news">
                                <div class="content-news">
                                    <span class="date-news">8 juillet 2015</span><br>
                                    <a href="#" class="titre-news">LE CONNECT RENOVATION DE 60000M² DE BUREAUX</a>
                                    <p class="txt-news">ICECS décroche une mission OPC sur la rénovation de l'ancien site abritant le siège social...</p>
                                    <a href="#" class="article-news">Lire la suite</a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-actu d-inline-flex">
                            <img src="https://media.istockphoto.com/photos/typical-view-of-montmartre-district-in-paris-picture-id1344543356?k=20&m=1344543356&s=612x612&w=0&h=NoA52z-SiLOSHejizv84id6kH4jVqwn-kIyv1AyMgRk=">
                            <div class="txt-carousel-news">
                                <div class="content-news">
                                    <span class="date-news">2 février 2015</span><br>
                                    <a href="#" class="titre-news">RÉNOVATION D'UN IMMEUBLE CLASSÉ MONUMENT HISTORIQUE</a>
                                    <p class="txt-news">ICECS décroche une mission OPC sur la rénovation de l'immeuble situé au 7, rue de...</p>
                                    <a href="#" class="article-news">Lire la suite</a>
                                </div>
                            </div>
                            <div class="carousel-news-right-handle"></div>
                        </div>
                    </div>
                    
                    <div class="carousel-item">
                        <div class="carousel-actu d-inline-flex">
                            <div class="carousel-news-left-handle"></div>
                            <img src="https://media.istockphoto.com/photos/exterior-view-of-the-college-of-svres-picture-id1304269044?s=612x612">
                            <div class="txt-carousel-news">
                                <div class="content-news">
                                    <span class="date-news">8 juillet 2015</span><br>
                                    <a href="#" class="titre-news">LE CONNECT RENOVATION DE 60000M² DE BUREAUX</a>
                                    <p class="txt-news">ICECS décroche une mission OPC sur la rénovation de l'ancien site abritant le siège social...</p>
                                    <a href="#" class="article-news">Lire la suite</a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-actu d-inline-flex">
                            <img src="https://media.istockphoto.com/photos/typical-view-of-montmartre-district-in-paris-picture-id1344543356?k=20&m=1344543356&s=612x612&w=0&h=NoA52z-SiLOSHejizv84id6kH4jVqwn-kIyv1AyMgRk=">
                            <div class="txt-carousel-news">
                                <div class="content-news">
                                    <span class="date-news">2 février 2015</span><br>
                                    <a href="#" class="titre-news">RÉNOVATION D'UN IMMEUBLE CLASSÉ MONUMENT HISTORIQUE</a>
                                    <p class="txt-news">ICECS décroche une mission OPC sur la rénovation de l'immeuble situé au 7, rue de...</p>
                                    <a href="#" class="article-news">Lire la suite</a>
                                </div>
                            </div>
                            <div class="carousel-news-right-handle"></div>
                        </div>
                    </div>
                    
                    <div class="carousel-item">
                        <div class="carousel-actu d-inline-flex">
                            <div class="carousel-news-left-handle"></div>
                            <img src="https://media.istockphoto.com/photos/exterior-view-of-the-college-of-svres-picture-id1304269044?s=612x612">
                            <div class="txt-carousel-news">
                                <div class="content-news">
                                    <span class="date-news">8 juillet 2015</span><br>
                                    <a href="#" class="titre-news">LE CONNECT RENOVATION DE 60000M² DE BUREAUX</a>
                                    <p class="txt-news">ICECS décroche une mission OPC sur la rénovation de l'ancien site abritant le siège social...</p>
                                    <a href="#" class="article-news">Lire la suite</a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-actu d-inline-flex">
                            <img src="https://media.istockphoto.com/photos/typical-view-of-montmartre-district-in-paris-picture-id1344543356?k=20&m=1344543356&s=612x612&w=0&h=NoA52z-SiLOSHejizv84id6kH4jVqwn-kIyv1AyMgRk=">
                            <div class="txt-carousel-news">
                                <div class="content-news">
                                    <span class="date-news">2 février 2015</span><br>
                                    <a href="#" class="titre-news">RÉNOVATION D'UN IMMEUBLE CLASSÉ MONUMENT HISTORIQUE</a>
                                    <p class="txt-news">ICECS décroche une mission OPC sur la rénovation de l'immeuble situé au 7, rue de...</p>
                                    <a href="#" class="article-news">Lire la suite</a>
                                </div>
                            </div>
                            <div class="carousel-news-right-handle"></div>
                        </div>
                    </div>
                    
                </div>
                
                <a href="#carousel-news" class="carousel-control-prev" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                
                <a href="#carousel-news" class="carousel-control-next" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
                        
            </div>

        <?php include "extern/footer.php" ?>

    <script>
        $ ('.carousel').carousel({
            pause: "null"
        })
    </script>

	</body>
</html>