<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vestuvės | Kronos Portraits</title>
    <link rel="stylesheet" href="/css/styles.css">
    <link rel="stylesheet" href="/css/galleries_modal_style.css">
</head>
<body>
    <main>
        <?php include 'header.html'; ?>
        <h1>Vestuvės</h1>
        <article>
            <div class="main-gallery-container">
                <div class="wedding-gallery-image-container">
                    <img src="/images/vestuves/Zivile_Mindaugas_154.JPG" alt="Jaunieji" class="gallery-img" onclick="myFunction(this);" data-number=0>
                    <img src="/images/vestuves/Inga_Dainius_279.JPG" alt="Jaunikis su nuotaka" class="gallery-img" onclick="myFunction(this);" data-number=1>
                    <img src="/images/vestuves/Barbara_Tomas_250.jpg" alt="Jaunoji su jaunuoju" class="gallery-img" onclick="myFunction(this);" data-number=2>
                    <img src="/images/vestuves/DG_133.JPG" alt="Jaunavedžiai" class="gallery-img" onclick="myFunction(this);" data-number=3>
                    <img src="/images/vestuves/Greta&Daivaras_160.JPG" alt="Jaunikis su jaunaja" class="gallery-img" onclick="myFunction(this);" data-number=4>
                    <img src="/images/vestuves/DG_135.JPG" alt="Jaunieji su balionais" class="gallery-img" onclick="myFunction(this);" data-number=5>
                    <img src="/images/vestuves/Vilma_Giedrius_303.JPG" alt="Jaunieji" class="gallery-img" onclick="myFunction(this);" data-number=6>
                    <img src="/images/vestuves/Agne_Karolis_041.JPG" alt="Jaunoji su jaunuoju" class="gallery-img" onclick="myFunction(this);" data-number=7>
                </div>
                <div class="wedding-gallery-image-container">
                    <img src="/images/vestuves/Gintare_Paulius_294.JPG" alt="Jaunojo draugai mėto jaunąjį į orą" class="gallery-img" onclick="myFunction(this);" data-number=8>
                    <img src="/images/vestuves/Greta&Daivaras_158.JPG" alt="Jaunieji" class="gallery-img" onclick="myFunction(this);" data-number=9>
                    <img src="/images/vestuves/Agne_Karolis_110.jpg" alt="Jaunoji su lenktynine vėliava šalia sportinio automobilio" class="gallery-img" onclick="myFunction(this);" data-number=10>
                    <img src="/images/vestuves/IMG_8129_Aura_Eimantas_85.JPG" class="gallery-img" alt="Jaunieji žiemą" onclick="myFunction(this);" data-number=11>
                    <img src="/images/vestuves/IMG_8229_Aura_Eimantas_124.JPG" class="gallery-img" alt="Jaunasis neša nuotaką per tiltą" onclick="myFunction(this);" data-number=12>
                    <img src="/images/vestuves/VA_255IMG_6476.JPG" alt="Jaunieji" class="gallery-img" onclick="myFunction(this);" data-number=13>
                </div>
                <div class="wedding-gallery-image-container">
                    <img src="/images/vestuves/Agne_Karolis_128.jpg" alt="Jaunieji tarp spalvotų dūmų" class="gallery-img" onclick="myFunction(this);" data-number=14>
                    <img src="/images/vestuves/Vilma_Giedrius_195.JPG" alt="Jaunieji miške" class="gallery-img" onclick="myFunction(this);" data-number=15>
                    <img src="/images/vestuves/Akvile_Tomas_102.jpg" alt="Jaunieji" class="gallery-img" onclick="myFunction(this);" data-number=16>
                    <img src="/images/vestuves/Agne_Karolis_043.jpg" alt="Jaunieji" class="gallery-img" onclick="myFunction(this);" data-number=17>
                    <img src="/images/vestuves/VA_248dM71A0636.JPG" alt="Jaunieji dvare" class="gallery-img" onclick="myFunction(this);" data-number=18>
                    <img src="/images/vestuves/MD_186.JPG" alt="Jaunieji saulei leidžiantis ant Klaipėdos molo" class="gallery-img" onclick="myFunction(this);" data-number=19>
                    <img src="/images/vestuves/Inga_Dainius_286.JPG" alt="Jaunieji" class="gallery-img" onclick="myFunction(this);" data-number=20>
                </div>
                <div class="wedding-gallery-image-container">
                    <img src="/images/vestuves/Gintare_Paulius_370.JPG" alt="Jaunieji" class="gallery-img" onclick="myFunction(this);" data-number=21>
                    <img src="/images/vestuves/DG_182.JPG" alt="Jaunavedžiai" class="gallery-img" onclick="myFunction(this);" data-number=22>
                    <img src="/images/vestuves/Dovile_Vaidas_064.jpg" alt="Jaunavedžiai" class="gallery-img" onclick="myFunction(this);" data-number=23>
                    <img src="/images/vestuves/Inga_Donatas_012.jpg" alt="Jaunavedžiai" class="gallery-img" onclick="myFunction(this);" data-number=24>
                    <img src="/images/vestuves/DG_176.JPG" alt="Jaunieji Ventės rage" class="gallery-img" onclick="myFunction(this);" data-number=25>
                    <img src="/images/vestuves/Agne_Karolis_160.JPG" alt="Jaunieji" class="gallery-img" onclick="myFunction(this);" data-number=26>
                    <img src="/images/vestuves/M71A9974.JPG" alt="Jaunieji" class="gallery-img" onclick="myFunction(this);" data-number=27>
                    <img src="/images/vestuves/Agne&Vygantas_144.JPG" alt="Jaunieji prie lėktuvo" class="gallery-img" onclick="myFunction(this);" data-number=28>
                </div>
            </div>
            <div id="big-image-container">
                <div class="close-positioning">
                    <span class="close">&times;</span>
                    <img class="big-image" id="zoomed-image">
                    <a class="prev" onclick="previousSlide()">&#10094;</a>
                    <a class="next" onclick="nextSlide()">&#10095;</a>
                </div>
            </div>
        </article>
    </main>
    <?php include 'footer.html'; ?>

    <script>




        var expandImg = document.getElementById("zoomed-image");
        var bigImageContainer = document.getElementById("big-image-container");

        let slides = document.getElementsByClassName('gallery-img');
        let currentSlideNr = 0;


        function myFunction(imgs) {
            if(!/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
                expandImg.src = imgs.src;
                bigImageContainer.style.display = "flex";
                currentSlideNr = parseInt(imgs.dataset.number);
            }
        }


        var span = document.getElementsByClassName("close")[0];
            span.onclick = function() {
            bigImageContainer.style.display = "none";
            }

        function nextSlide() {
            if (currentSlideNr > 27) {
                currentSlideNr = -1;
            }
            nr = currentSlideNr + 1;
            img = slides[nr];
            expandImg.src = img.src;
            currentSlideNr += 1;
        }

        function previousSlide() {
            if (currentSlideNr < 1) {
                currentSlideNr = 29;
            }
            nr = currentSlideNr - 1;
            img = slides[nr];
            expandImg.src = img.src;
            currentSlideNr -= 1;
        }

    </script>
</body>
</html>
