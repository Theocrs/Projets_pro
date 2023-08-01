<?php
    if(isset($_SESSION['prenom'])) {
        $verifLog = "archives.php";
        $prenom = htmlentities($_SESSION['prenom'][0]);
    } else {
        $verifLog = "connexion.php";
    }
    if(isset($_SESSION['panier'])) {
        $panierCount = $panier->count();
    }
?>
<div id="header">

    <div class="logo">
        <a href="accueil.php"><img src="data:image/png;base64,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"></a>
    </div>

    <?php if (isset($_SESSION['prenom'])) { ?>
    <div class="login-section">
        <div class="login-icon"><i class="fa-solid fa-user"></i></div>
        <div class="login-user"><?php echo "Bonjour ".$prenom ?></div>
        <div class="login-icon-menu"><i class="fa-solid fa-caret-down"></i></div>
        <ul class="login-menu">
            <li>Mon compte</li>
            <li>Mes archives</li>
            <li id="deco"><i class="fa-solid fa-power-off"></i>Déconnexion</li>
        </ul>
    </div>
    <div class="basket-section">
        <a href="panier.php" id="basket">
            <span class="panier-count"><?php echo $panierCount?></span>
            <i class="fa-solid fa-cart-shopping"></i>
            <span class="panier-nom">Mon Panier</span>
        </a>
    </div>
    <?php } ?>

    <a href="#" class="hamburger">
        <span class="hamburger-bar"></span>
    </a>

    <div class="header-section">

        <div class="header-element">
           <div class="texte-nav">
                <a id="nav-1" href="accueil.php"><i class="fa-solid fa-house-chimney"></i></a>
            </div>   
        </div>

        <div class="header-element">
           <div class="texte-nav">
                <a id="nav-2" href="entreprise.php">ENTREPRISE</a>
            </div>   
        </div>

        <div class="header-element">
            <div class="texte-nav">
                <a id="nav-3" href="metiers.php">MÉTIERS</a>
            </div> 
        </div>

        <div class="header-element">
            <div class="texte-nav">
                <a id="nav-4" href="<?php echo $verifLog ?>">ARCHIVES/DRIVE</a>
            </div>
        </div>

        <div class="header-element">
            <div class="texte-nav">
                <a id="nav-5" href="contacts.php">CONTACTS</a>
            </div>
        </div>

        <div class="header-element">
            <form class="search-bar">
                <input type="search" class="search-bar-input" placeholder="Recherche" aria-label="search">
                <button class="search-bar-icon" aria-label="submit search"><i class="fas fa-search"></i></button>
            </form>  
        </div>
            
    </div>
</div>

<script>

    if(document.body.id == "accueil") {
        document.getElementById("nav-1").style.color = "#ED2939";
    }

    if(document.body.id == "entreprise") {
        document.getElementById("nav-2").style.color = "#ED2939";
    }

    if(document.body.id == "metiers") {
        document.getElementById("nav-3").style.color = "#ED2939";
    }

    if(document.body.id == "archives") {
        document.getElementById("nav-4").style.color = "#ED2939";
    }

    if(document.body.id == "contacts") {
        document.getElementById("nav-5").style.color = "#ED2939";
    }

    if(document.body.id == "panier") {
        document.getElementById("basket").style.color = "#ED2939";
    }

    const hamburger = document.getElementsByClassName('hamburger')[0];
    const headerSection = document.getElementsByClassName('header-section')[0];
    let open = false;

    hamburger.addEventListener('click', () => {
        headerSection.classList.toggle('active');
    });

    hamburger.addEventListener('click', () => {
        if(!open) {
            hamburger.classList.add('open');
            open = true;
        } else {
            hamburger.classList.remove('open');
            open = false;
        }
    });

    const loginSection = document.getElementsByClassName('login-section')[0];
    const loginMenu = document.getElementsByClassName('login-menu')[0];

    loginSection.addEventListener('mouseenter', () => {
        loginMenu.classList.toggle('active');
    });
    loginSection.addEventListener('mouseleave', () => {
        loginMenu.classList.toggle('active');
    });

    const deco = document.getElementById('deco');

    deco.addEventListener('click', () => {
        document.location = "registration/deconnexion.php";
    });
</script>