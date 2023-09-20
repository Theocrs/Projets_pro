<?php
    require('extern/_header.php');
?>
<!DOCTYPE html>
<html>
    <head>
		<?php include "extern/head.php" ?>	

    <style>

        h1 {
            font-size: 2.5em; 
            font-weight: 350; 
            color: #ED2939;
            margin-top: 1em;
        }

        @media screen and (min-width: 1800px) {
            h1 {
            font-size: 2.8em;
            }
        }

        .container h2 {
            font-size: 1.8em; 
            font-weight: 350; 
            color: #ED2939;
        }

        @media screen and (min-width: 1800px) {
            .container h2 {
            font-size: 2em;
            }
        }

        p {
            color: #002395;
        }

        .cont-entreprise p {
            color: black;
            font-size: 1.2em;
        }

    </style>

	</head>

    <body id="entreprise">

        <?php include "extern/header.php" ?>

        <div class="titre">
            <div class="txt-titre">L'ENTREPRISE</div>
        </div>

        <div id="banniere">
            <img src="https://media.istockphoto.com/photos/construction-workers-standing-together-on-construction-site-picture-id112156570?s=2048x2048" alt="entreprise">
        </div>

        <div class="container">

            <h1 class="text-center"> Un partenaire de confiance pour manager vos projets</h1>
            <p>ICECS voit au-delà de ses seules responsabilités. Manager un projet, ce n'est pas seulement 
                se donner une obligation de moyens mais de résultat. Présents personnellement sur chacune des
                opérations, nous avons su démontrer au fil des projets notre disponibilité, notre sens de l'écoute 
                et notre réactivité.</p>

            <div class="cont-entreprise back-entreprise">

                <div style="flex-direction: column; width: 70%;">
                    <h2>S'engager sur les résultats plutôt que sur les moyens</h2>
                    <p>ICECS a été créée en mai 2010 avec un objectif clair : proposer des prestations d'OPC
                         et de MOE d'Exécution en se concentrant sur la qualité de service.</p>
                    <p>Si les maîtrises d'ouvrage préfèrent généralement une passation de marché en entreprise
                        générale plutôt qu'en corps d'états séparés, c'est parce que les EG ont une obligation 
                        de résultat tandis que les MOE n'ont qu'une obligation de moyens.</p>
                    <P>ICECS a été créée avec la volonté de modifier cette approche et de garantir aux MO des
                        prestations d'OPC et de MOE fondées sur un engagement de résultat.</P>
                    <P>Avec des expériences de « Patron » d'opération de construction au sein des « majors »,
                        de maîtrise d'ouvrage ou de direction d'entreprise, les fondateurs d'ICECS mettent en œuvre
                        des savoirs-faire éprouvés.</P>
                </div>

                <div style="flex-direction: column; width: 30%;">
                    <img src="https://media.istockphoto.com/photos/trader-at-work-picture-id1143910377?k=20&m=1143910377&s=612x612&w=0&h=uYssssJcl4C4L96RgJwnleCoL9WVghNVgUql1pUVh-Y=">
                    <img style="margin-top: 5%" src="https://media.istockphoto.com/photos/business-women-studying-charts-and-diagrams-on-digital-tablet-closeup-picture-id1299055072?s=2048x2048">
                </div>

            </div>

            <div class="cont-entreprise" style="flex-direction: column;">

                <h2>Une entreprise en constant développement</h2>
                <p>Depuis sa fondation, ICECS s'est constamment développée. En 2015, elle rachète une entreprise
                    pour atteindre des effectifs de 8 à 10 personnes et un chiffre d'affaires dépassant le million
                    d'euros. Une masse critique qui lui permet d'améliorer encore sa qualité de services</p>

            </div>

            <div class="cont-entreprise back-entreprise">

                <div style="flex-direction: column; width: 70%;">
                    <h2>Contribuer à la modernisation du secteur du BTP</h2>
                    <p>Ce changement de dimensions permet à ICECS de se pencher aujourd'hui sur une nouvelle
                        problématique : la difficulté que rencontre le secteur du BTP pour se moderniser.</p>
                    <p>Des logiciels permettant l'amélioration des réceptions, la gestion des levés de réserves
                        ou le partage de documents en ligne ont certes vu le jour. Mais de nombreux autres
                        aspects peuvent être améliorés grâce à l'outil informatique.</p>
                    <p>C'est pourquoi ICECS travaille à la conception d'un logiciel métier et commence à monter
                        en compétences sur le BIM et le LEAN.</p>
                </div>

                <div style="flex-direction: column; width: 30%;">
                    <img style="height: 100%;" src="https://media.istockphoto.com/photos/lifestyle-apartments-picture-id152123643?k=20&m=152123643&s=612x612&w=0&h=yv7TZfRvLtvnKZcR7fUXoDRhPLvcEPoiUsVTkNRf3Wk=">
                </div>

            </div>

            <div class="cont-entreprise" style="flex-direction: column;">

                <h2>Projection sur le long terme</h2>
                <p>Grâce à la confiance que nous témoignent nos partenaires, nous intervenons régulièrement
                    sur des opérations d'envergure (de 10 à 30M€) et pouvons déployer nos idées et nos moyens.</p>
                <p>Les perspectives de stabilité et de croissance maîtrisée de l'entreprise nous permettent de
                    nous projeter à long terme tout en garantissant à nos clients satisfaction et sécurité.</p>

            </div>

        </div>

        <?php include "extern/footer.php" ?>

    </body> 
</html>