<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/accueil.css">
    <title>Dreamce Store</title>
</head>

<body>
    <nav id="nav">
        <div class="navTop">
            <div class="navItem">
                <h3>.Dreamce store</h3>
                <!-- <img src="./images/logo.png" alt="logo"> -->
            </div>
            <div class="navItem">
                <div class="search search-container">
                    <input type="text" id="search-bar" placeholder="Search..." class="searchInput">
                    <button id="search-button"><img src="./images/search.png" width="20" height="20" alt="" class="searchIcon"></button>
                </div>
            </div>
            <div class="navItem">
                <span class="limitedOffer">Les Soldes!</span>
                <a href="view_cart.php"><img src="./images/Vector.png" alt="panier"></a>
            </div>
        </div>
        <div class="navBottom">
            <h3 class="menuItem">AIR FORCE</h3>
            <h3 class="menuItem">JORDAN</h3>
            <h3 class="menuItem">BLAZER</h3>
            <h3 class="menuItem">CRATER</h3>
            <h3 class="menuItem">HIPPIE</h3>
            <a href="catalogue.php">
                <h3 class="more">PLUS <span>+</span></h3>
            </a>
        </div>
    </nav>
    <div class="slider">
        <div class="sliderWrapper">
            <div class="sliderItem">
                <img src="./images/air.png" alt="" class="sliderImg">
                <div class="sliderBg"></div>
                <h1 class="sliderTitle">AIR FORCE</br> NOUVELLE</br> SAISON</h1>
                <h2 class="sliderPrice">11900FCFA</h2>
                <a href="#product">
                    <button class="buyButton">PAYER!</button>
                </a>
            </div>
            <div class="sliderItem">
                <img src="./images/jordan.png" alt="" class="sliderImg">
                <div class="sliderBg"></div>
                <h1 class="sliderTitle">AIR JORDAN</br> NOUVELLE</br> SAISON</h1>
                <h2 class="sliderPrice">14900FCFA</h2>
                <a href="#product">
                    <button class="buyButton">PAYER!</button>
                </a>
            </div>
            <div class="sliderItem">
                <img src="./images/blazer.png" alt="" class="sliderImg">
                <div class="sliderBg"></div>
                <h1 class="sliderTitle">BLAZER</br> NOUVELLE</br> SAISON</h1>
                <h2 class="sliderPrice">10900FCFA</h2>
                <a href="#product">
                    <button class="buyButton">PAYER!</button>
                </a>
            </div>
            <div class="sliderItem">
                <img src="./images/crater.png" alt="" class="sliderImg">
                <div class="sliderBg"></div>
                <h1 class="sliderTitle">CRATER</br> NOUVELLE</br> SAISON</h1>
                <h2 class="sliderPrice">129FCFA</h2>
                <a href="#product">
                    <button class="buyButton">PAYER!</button>
                </a>
            </div>
            <div class="sliderItem">
                <img src="./images/hippie.png" alt="" class="sliderImg">
                <div class="sliderBg"></div>
                <h1 class="sliderTitle">HIPPIE</br> NOUVELLE</br> SAISON</h1>
                <h2 class="sliderPrice">9900FCFA</h2>
                <a href="#product">
                    <button class="buyButton">PAYER!</button>
                </a>
            </div>
        </div>
    </div>

    <div class="features">
        <div class="feature">
            <img src="./images/shipping.png" alt="" class="featureIcon">
            <span class="featureTitle">LIVRAISON GRATUITE</span>
            <span class="featureDesc">Livraison gratuite à Douala.</span>
        </div>
        <div class="feature">
            <img class="featureIcon" src="./images/return.png" alt="">
            <span class="featureTitle">RETOUR EN 30 JOURS</span>
            <span class="featureDesc">Retour et remboussable facilement en 14 jours.</span>
        </div>
        <div class="feature">
            <img class="featureIcon" src="./images/gift.png" alt="">
            <span class="featureTitle">CARTES-CADEAUX</span>
            <span class="featureDesc">Pour utolisez facilement des codes de réduction.</span>
        </div>
        <div class="feature">
            <img class="featureIcon" src="./images/contact.png" alt="">
            <span class="featureTitle">CONTACTEZ-NOUS!</span>
            <span class="featureDesc">Restez en contact par email et par système d'assistance.</span>
        </div>
    </div>

    <div class="product" id="product">
        <img src="./images/air.png" alt="" class="productImg">
        <div class="productDetails">
            <h1 class="productTitle">AIR FORCE</h1>
            <h2 class="productPrice">19900FCFA</h2>
            <p class="productDesc">Lorem ipsum dolor sit amet consectetur impal adipisicing elit. Alias assumenda
                dolorum
                doloremque sapiente aliquid aperiam.</p>
            <div class="colors">
                <div class="color"></div>
                <div class="color"></div>
            </div>
            <div class="sizes">
                <div class="size">42</div>
                <div class="size">43</div>
                <div class="size">44</div>
            </div>
            <button class="productButton">PAYER!</button>
        </div>
        <div class="payment">
            <h1 class="payTitle">Information personnel</h1>
            <label>nom et prénom</label>
            <input type="text" placeholder="John Doe" class="payInput">
            <label>numéro</label>
            <input type="text" placeholder="+237 679 00 00 00" class="payInput">
            <label>Addresse</label>
            <input type="text" placeholder="Elton St 21 22-145" class="payInput">
            <h1 class="payTitle">Information de la cart</h1>
            <div class="cardIcons">
                <img src="./images/visa.png" width="40" alt="" class="cardIcon">
                <img src="./images/master.png" alt="" width="40" class="cardIcon">
            </div>
            <input type="password" class="payInput" placeholder="Card Number">
            <div class="cardInfo">
                <input type="text" placeholder="mm" class="payInput sm">
                <input type="text" placeholder="yyyy" class="payInput sm">
                <input type="text" placeholder="cvv" class="payInput sm">
            </div>
            <button class="payButton">Valider!</button>
            <span class="close">X</span>
        </div>
    </div>
    <div class="gallery">
        <div class="galleryItem">
            <h1 class="galleryTitle">Soyez vous-même!</h1>
            <img src="https://images.pexels.com/photos/9295809/pexels-photo-9295809.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500"
                alt="" class="galleryImg">
        </div>
        <div class="galleryItem">
            <img src="https://images.pexels.com/photos/1040427/pexels-photo-1040427.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500"
                alt="" class="galleryImg">
            <h1 class="galleryTitle">Ta nouvelle vie commance maintenant</h1>
        </div>
        <div class="galleryItem">
            <h1 class="galleryTitle">il suffit de le faire!</h1>
            <img src="https://images.pexels.com/photos/7856965/pexels-photo-7856965.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500"
                alt="" class="galleryImg">
        </div>
    </div>
    <div class="newSeason">
        <div class="nsItem">
            <img src="https://images.pexels.com/photos/4753986/pexels-photo-4753986.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500"
                alt="" class="nsImg">
        </div>
        <div class="nsItem">
            <h3 class="nsTitleSm">NOUVEAUX ARRIVAGES</h3>
            <h1 class="nsTitle">Nouvelle saison</h1>
            <h1 class="nsTitle">Nouvelle Collection</h1>
            <a href="#nav">
                <button class="nsButton">CHOISIE TON STYLE</button>
            </a>
        </div>
        <div class="nsItem">
            <img src="https://images.pexels.com/photos/7856965/pexels-photo-7856965.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500"
                alt="" class="nsImg">
        </div>
    </div>
    
    <footer>
        <div class="footerLeft">
            <div class="footerMenu">
                <h1 class="fMenuTitle">à propos</h1>
                <ul class="fList">
                    <li class="fListItem">Company</li>
                    <li class="fListItem">Contact</li>
                    <li class="fListItem">Careers</li>
                    <li class="fListItem">Affiliates</li>
                    <li class="fListItem">Stores</li>
                </ul>
            </div>
            <div class="footerMenu">
                <h1 class="fMenuTitle">liens utile</h1>
                <ul class="fList">
                    <li class="fListItem">Support</li>
                    <li class="fListItem">Refund</li>
                    <li class="fListItem">FAQ</li>
                    <li class="fListItem">Feedback</li>
                    <li class="fListItem">Stories</li>
                </ul>
            </div>
            <div class="footerMenu">
                <h1 class="fMenuTitle">articles</h1>
                <ul class="fList">
                    <li class="fListItem">Air Force</li>
                    <li class="fListItem">Air Jordan</li>
                    <li class="fListItem">Blazer</li>
                    <li class="fListItem">Crater</li>
                    <li class="fListItem">Hippie</li>
                    <li class="mores"><a href="catalogue.php">PLUS <span>+</span></a></li>
                </ul>
            </div>
        </div>
        <div class="footerRight">
            <div class="footerRightMenu">
                <h1 class="fMenuTitle">s'insrire à la newsletter</h1>
                <div class="fMail">
                    <input type="text" placeholder="your@email.com" class="fInput">
                    <button class="fButton">envoyer!</button>
                </div>
            </div>
            <div class="footerRightMenu">
                <h1 class="fMenuTitle">suivez moi</h1>
                <div class="fIcons">
                    <img src="./images/facebook.png" alt="" class="fIcon">
                    <img src="./images/twitter.png" alt="" class="fIcon">
                    <img src="./images/instagram.png" alt="" class="fIcon">
                    <img src="./images/whatsapp.png" alt="" class="fIcon">
                </div>
            </div>
            <div class="footerRightMenu">
                <span class="copyright">&copy Copyright © 2024 Dreamce store | Tous droits réservés | Conçu et développé par Waleu Brice</span>
            </div>
        </div>
    </footer>
    <script src="js/accueil.js"></script>
</body>

</html>