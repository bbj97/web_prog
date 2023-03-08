<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="najbolja vjenčanja">
    <meta name="og:title" property="og:title" content="vjenčanja">
    <link rel="canonical" href="https://cvarakmoj.com/">
    <link rel="stylesheet" type="text/css" media="screen" href="styles.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Wedding Planner</title>
</head>

<body>
    <header>
        <div class="headerNav">
            <div class="column headerLogo" style="width: 300px; height: 100px;">
                <!-- <p style="font-family: Papyrus;font-size: 25px;
                letter-spacing: 2px;
                word-spacing: -5px;
                color: #000000;
                font-weight: 700;
                text-decoration: none;
                font-variant: small-caps;
                text-transform: capitalize;">Save the Date</p> -->
                <img src="images/finito.png" alt="vjenčanja logo" style="width:100%; height: auto;">

            </div>
            <div class="column prijavaKosara">
                <a href="admin.php" id="login" aria-label="prijava">
                    <button id="login">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"
                            aria-labelledby="vaša košarica">
                            <path
                                d="M8 2C9.1 2 10 2.9 10 4C10 5.1 9.1 6 8 6C6.9 6 6 5.1 6 4C6 2.9 6.9 2 8 2ZM8 12C10.7 12 13.8 13.29 14 14H8H2C2.23 13.28 5.31 12 8 12ZM8 0C5.79 0 4 1.79 4 4C4 6.21 5.79 8 8 8C10.21 8 12 6.21 12 4C12 1.79 10.21 0 8 0ZM8 10C5.33 10 0 11.34 0 14V16H16V14C16 11.34 10.67 10 8 10Z"
                                fill="#9093A6" />
                        </svg>
                        PRIJAVI SE
                    </button>
                </a>
               

                     
                    </div>
                </div>
            </div>
        </div>
        </div>
    </header>

    <div class="wrapper">
        <div class="column prvi" style="text-align: center;">
            <div class="prviNajbolji" style="margin-top: 30%; margin-left: 10%;">
                <div style="background-color: rgba(187, 111, 136, 0.479);border-radius: 25px;
                background-repeat: repeat;">
                    <h1 id="naslov" style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">Plan your
                        perfect wedding</h1>
                </div>
                <div style="margin-top: 10%;">
                    <button id="preuzmi" type="button" style="border-radius: 25px;
                    background-repeat: repeat;">
                        Wedding
                        <br>
                        <span id="narCvarTekst">Plan it</span>
                    </button>
                    <button id="dostava" type="button" style="border-radius: 25px;
                    background-repeat: repeat;">
                        Planner
                        <br>
                        <span id="narCvarTekst">Make it</span>
                    </button>
                </div>
            </div>
        </div>

        <div class="column drugi" style="text-align: center;">
            <div class="drugiNajbolji" style="margin-left: 10%; text-align: left;">
                <img src="images/mlada.png">
            </div>
        </div>
    </div>
    </div>
    <br>
    <br>

    <div class="column treci">
        <div class="column prevBtn">
            <button id="prev" onclick="plusSlides(-1)">&#10094;</button>
        </div>
        <div class="mySlides fade">
            <ul class="slikice">
                <li><img src="images/webb.jpg"></li>
                <li><img src="images/web3.jpg"></li>
                <li><img src="images/web2.jpg"></li>
                <li><img src="images/kiss.jpg"></li>
            </ul>
        </div>
        <div class="mySlides fade">
            <ul class="slikice">
                <li><img src="images/bl1.jpg"></li>
                <li><img src="images/bl2.jpg"></li>
                <li><img src="images/bl3.jpg"></li>
                <li><img src="images/bl4.jpg"></li>
            </ul>
        </div>

        <div class="mySlides fade">
            <ul class="slikice">
                <li><img src="images/intro1.jpg" width="328px" height="328px"></li>
                <li><img src="images/intro2.jpg" width="328px" height="328px"></li>
                <li><img src="images/intro3.jpg" width="328px" height="328px"></li>
                <li><img src="images/intro4.jpg" width="328px" height="328px"></li>
            </ul>
        </div>

        <div class="column nextBtn">
            <button id="next" onclick="plusSlides(1)">&#10095;</button>
        </div>

    </div>

    <div class="column cetvrti">
        <div class="partner">
            <div>
                <img src="images/birds.png" height="150px" width="150px">
            </div>
            <div class="partnerText">
                <h2 id="wanna-be">Najnoviji detalji i popusti</h2>
            
            </div>
           

        </div>

    </div>

    <div class="column sedmi">
        <div class="cvarci-na-ig">
            <h2 id="cvarcinet">#weddingLove <span id="naig">na instagramu</span></h2>
        </div>
        <br>
        <div class="ig-photos-list">
            <ul>
                <li><img class="lazy" data-src="imgs/ig1.jpg" alt="vjenčanje na insta" width=250 height=250></li>
                <li><img class="lazy" data-src="imgs/ig2.jpg" alt="vjenčanje na insta" width=250 height=250></li>
                <li><img class="lazy" data-src="imgs/ig3.jpg" alt="vjenčanje na insta" width=250 height=250></li>
                <li><img class="lazy" data-src="imgs/ig4.jpg" alt="vjenčanje na insta" width=250 height=250></li>
            </ul>
        </div>
    </div>

    <div class="footer">
        <div class="flex-container1">
            <div class="flex-item-right">
                <ul class="linkovi">
                    <li><a href="index.php" target="_blank" rel=”nofollow”>O nama</a></li>
                    <li><a href="https://www.instagram.com/" target="_blank" rel=”nofollow”>Kontakt</a></li>
                </ul>
            </div>
        </div>
        <div class="flex-container2">
            <div class="social-medial">
                <button id="instagram">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="https://www.instagram.com/"
                        aria-labelledby="instagram logo">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M12.0001 3.12693C14.8919 3.12693 15.2313 3.13982 16.3743 3.19138C17.4313 3.23865 18.0028 3.41482 18.3853 3.56521C18.8923 3.76287 19.2532 3.9949 19.6313 4.37302C20.0095 4.75115 20.2458 5.11209 20.4392 5.61912C20.5853 6.00154 20.7657 6.57302 20.813 7.63005C20.8646 8.77302 20.8774 9.11248 20.8774 12.0043C20.8774 14.8961 20.8646 15.2355 20.813 16.3785C20.7657 17.4355 20.5896 18.007 20.4392 18.3894C20.2415 18.8965 20.0095 19.2574 19.6313 19.6355C19.2532 20.0136 18.8923 20.25 18.3853 20.4433C18.0028 20.5894 17.4313 20.7699 16.3743 20.8172C15.2313 20.8687 14.8919 20.8816 12.0001 20.8816C9.1083 20.8816 8.76885 20.8687 7.62588 20.8172C6.56885 20.7699 5.99736 20.5937 5.61494 20.4433C5.10791 20.2457 4.74697 20.0136 4.36885 19.6355C3.99072 19.2574 3.75439 18.8965 3.56104 18.3894C3.41494 18.007 3.23447 17.4355 3.18721 16.3785C3.13564 15.2355 3.12275 14.8961 3.12275 12.0043C3.12275 9.11248 3.13564 8.77302 3.18721 7.63005C3.23447 6.57302 3.41064 6.00154 3.56104 5.61912C3.75869 5.11209 3.99072 4.75115 4.36885 4.37302C4.74697 3.9949 5.10791 3.75857 5.61494 3.56521C5.99736 3.41912 6.56885 3.23865 7.62588 3.19138C8.76885 3.13552 9.1083 3.12693 12.0001 3.12693ZM12.0001 1.17615C9.06103 1.17615 8.6915 1.18904 7.53564 1.2406C6.38408 1.29216 5.59775 1.47693 4.91025 1.74333C4.19697 2.01833 3.59541 2.39216 2.99385 2.99373C2.39229 3.59529 2.02275 4.20115 1.74346 4.91013C1.47705 5.59763 1.29229 6.38396 1.24072 7.53982C1.18916 8.69138 1.17627 9.06091 1.17627 12C1.17627 14.939 1.18916 15.3086 1.24072 16.4644C1.29229 17.616 1.47705 18.4023 1.74346 19.0941C2.01846 19.8074 2.39229 20.409 2.99385 21.0105C3.59541 21.6121 4.20127 21.9816 4.91025 22.2609C5.59775 22.5273 6.38408 22.7121 7.53994 22.7636C8.6958 22.8152 9.06104 22.8281 12.0044 22.8281C14.9478 22.8281 15.313 22.8152 16.4688 22.7636C17.6204 22.7121 18.4067 22.5273 19.0985 22.2609C19.8118 21.9859 20.4134 21.6121 21.0149 21.0105C21.6165 20.409 21.986 19.8031 22.2653 19.0941C22.5317 18.4066 22.7165 17.6203 22.7681 16.4644C22.8196 15.3086 22.8325 14.9433 22.8325 12C22.8325 9.05662 22.8196 8.69138 22.7681 7.53552C22.7165 6.38396 22.5317 5.59763 22.2653 4.90584C21.9903 4.19255 21.6165 3.59099 21.0149 2.98943C20.4134 2.38787 19.8075 2.01833 19.0985 1.73904C18.411 1.47263 17.6247 1.28787 16.4688 1.2363C15.3087 1.18904 14.9392 1.17615 12.0001 1.17615ZM12.0001 6.43982C8.93213 6.43982 6.43994 8.92771 6.43994 12C6.43994 15.0722 8.93213 17.5601 12.0001 17.5601C15.0681 17.5601 17.5603 15.0679 17.5603 12C17.5603 8.93201 15.0681 6.43982 12.0001 6.43982ZM12.0001 15.6094C10.0063 15.6094 8.39072 13.9937 8.39072 12C8.39072 10.0062 10.0063 8.3906 12.0001 8.3906C13.9938 8.3906 15.6095 10.0062 15.6095 12C15.6095 13.9937 13.9938 15.6094 12.0001 15.6094ZM19.0768 6.22069C19.0768 6.93737 18.4958 7.51835 17.7791 7.51835C17.0624 7.51835 16.4814 6.93737 16.4814 6.22069C16.4814 5.50401 17.0624 4.92303 17.7791 4.92303C18.4958 4.92303 19.0768 5.50401 19.0768 6.22069Z"
                            fill="#9093A6" />
                    </svg>
                </button>

                <button id="twitter">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="https://twitter.com/"
                        aria-labelledby="twitter logo">
                        <path
                            d="M22 5.12968C21.2639 5.49108 20.4741 5.73618 19.6442 5.8456C20.4915 5.28339 21.1402 4.39164 21.4476 3.33232C20.6527 3.85297 19.7754 4.23102 18.8406 4.43596C18.092 3.55113 17.0271 3 15.8461 3C13.5803 3 11.7431 5.03554 11.7431 7.54465C11.7431 7.90051 11.7794 8.24808 11.8494 8.58044C8.44001 8.3907 5.41684 6.58089 3.39347 3.83081C3.03977 4.50103 2.83856 5.28198 2.83856 6.11561C2.83856 7.69282 3.56343 9.08446 4.66324 9.89865C3.99085 9.87374 3.35847 9.6688 2.80484 9.32815V9.38492C2.80484 11.5866 4.21958 13.4241 6.09546 13.8423C5.75177 13.9448 5.38935 14.0016 5.01442 14.0016C4.74948 14.0016 4.49327 13.9725 4.24206 13.9171C4.76445 15.7242 6.27919 17.0383 8.07387 17.0743C6.67037 18.2929 4.90069 19.0171 2.97856 19.0171C2.64739 19.0171 2.32118 18.9949 2 18.9548C3.81592 20.2467 5.97177 21 8.28883 21C15.8362 21 19.9617 14.0736 19.9617 8.06671L19.9479 7.47821C20.754 6.84119 21.4513 6.04084 22 5.12968Z"
                            fill="#9093A6" />
                    </svg>
                </button>

                <button id="facebook">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="https://www.facebook.com/"
                        aria-labelledby="facebook logo">
                        <path
                            d="M23 12C23 5.93026 18.0697 1 12 1C5.93026 1 1 5.93026 1 12C1 17.4944 5.0277 22.041 10.2851 22.8646V15.1703H7.4759V11.9887H10.2851V9.56308C10.2851 6.81026 11.921 5.2759 14.4256 5.2759C15.6328 5.2759 16.8738 5.51282 16.8738 5.51282V8.19795H15.4974C14.1323 8.19795 13.6923 9.05538 13.6923 9.9241V11.9887H16.7497L16.2646 15.1703H13.7036V22.8646C18.9723 22.041 23 17.4944 23 12Z"
                            fill="#9093A6" />
                    </svg>
                </button>
            </div>
            <div class="krajnji-tekst">
                <ul>
                    <li>Polica privatnosti</li>
                    <li>Uvjeti korištenja</li>
                    <li>© 2021 weddingDay.net</li>
            </div>
        </div>

        </footer>


        <!-- LAZY LOAD -->
        <script>
            document.addEventListener("DOMContentLoaded", function () {
                var lazyloadImages = document.querySelectorAll("img.lazy");
                var lazyloadThrottleTimeout;

                function lazyload() {
                    if (lazyloadThrottleTimeout) {
                        clearTimeout(lazyloadThrottleTimeout);
                    }

                    lazyloadThrottleTimeout = setTimeout(function () {
                        var scrollTop = window.pageYOffset;
                        lazyloadImages.forEach(function (img) {
                            if (img.offsetTop < (window.innerHeight + scrollTop)) {
                                img.src = img.dataset.src;
                                img.classList.remove('lazy');
                            }
                        });
                        if (lazyloadImages.length == 0) {
                            document.removeEventListener("scroll", lazyload);
                            window.removeEventListener("resize", lazyload);
                            window.removeEventListener("orientationChange", lazyload);
                        }
                    }, 20);
                }

                document.addEventListener("scroll", lazyload);
                window.addEventListener("resize", lazyload);
                window.addEventListener("orientationChange", lazyload);
            });



            /*********Slajder**************/

            var slideIndex = 1;
            showSlides(slideIndex);

            // Next/previous controls
            function plusSlides(n) {
                showSlides(slideIndex += n);
            }

            // Thumbnail image controls
            function currentSlide(n) {
                showSlides(slideIndex = n);
            }

            function showSlides(n) {
                var i;
                var slides = document.getElementsByClassName("mySlides");
                var dots = document.getElementsByClassName("dot");
                if (n > slides.length) {
                    slideIndex = 1
                }
                if (n < 1) {
                    slideIndex = slides.length
                }
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                }
                for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" active", "");
                }
                slides[slideIndex - 1].style.display = "block";
                dots[slideIndex - 1].className += " active";
            }
        </script>

        <script type="text/javascript" src="script.js" charset="utf-8"></script>
</body>

</html>