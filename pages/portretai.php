<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portretai | Kronos Portraits</title>
    <link rel="stylesheet" href="/css/styles.css">
    <link rel="stylesheet" href="/css/galleries_modal_style.css">
</head>
<body>
    <?php include 'header.html'; ?>
    <main>
        <h1>Portretai</h1>
        <article>
            <div class="main-gallery-container">
                <div class="portrait-gallery-image-container">
                    <img src="/images/portretai/JB.JPG" alt="Mergina sėdinti ant alyvų krūmo šakos" class="gallery-img" onclick="myFunction(this);" data-number=0>
                    <img src="/images/portretai/EM.JPG" alt="Vyras žiūri į laikrodį" class="gallery-img" onclick="myFunction(this);" data-number=1>
                    <img src="/images/portretai/IB.jpg" alt="Sėdinčios moters portretas" class="gallery-img" onclick="myFunction(this);" data-number=2>
                </div>
                <div class="portrait-gallery-image-container">
                    <img src="/images/portretai/EA.jpg" alt="Mama su dukra" class="gallery-img" onclick="myFunction(this);" data-number=3>
                    <img src="/images/portretai/TG.JPG" alt="Vyras ant sofos" class="gallery-img" onclick="myFunction(this);" data-number=4>
                    <img src="/images/portretai/IG.JPG" alt="Besikalbantys sužadėtiniai tamsoje" class="gallery-img" onclick="myFunction(this);" data-number=5>
                </div>
                <div class="portrait-gallery-image-container">
                    <img src="/images/portretai/EB.jpg" alt="Merginos portretas" class="gallery-img" onclick="myFunction(this);" data-number=6>
                    <img src="/images/portretai/JD.jpg" alt="Stovinčios moters portretas" class="gallery-img" onclick="myFunction(this);" data-number=7>
                    <img src="/images/portretai/KT.jpg" alt="Sėdinti mergina" class="gallery-img" onclick="myFunction(this);" data-number=8>
                </div>
                <div class="portrait-gallery-image-container">
                    <img src="/images/portretai/AB.jpg" alt="Sėdinčios moters portretas" class="gallery-img" onclick="myFunction(this);" data-number=9>
                    <img src="/images/portretai/NN.jpg" alt="Moteris rudeniniam miške" class="gallery-img" onclick="myFunction(this);" data-number=10>
                    <img src="/images/portretai/RG.jpg" alt="Moteris su skrybėle" class="gallery-img" onclick="myFunction(this);" data-number=11>
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
            if (currentSlideNr > 10) {
                currentSlideNr = -1;
            }
            nr = currentSlideNr + 1;
            img = slides[nr];
            expandImg.src = img.src;
            currentSlideNr += 1;
        }

        function previousSlide() {
            if (currentSlideNr < 1) {
                currentSlideNr = 12;
            }
            nr = currentSlideNr - 1;
            img = slides[nr];
            expandImg.src = img.src;
            currentSlideNr -= 1;
        }
    </script>
</body>
</html>
