<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vaikai | Kronos Portraits</title>
    <link rel="stylesheet" href="/css/styles.css">
    <link rel="stylesheet" href="/css/galleries_modal_style.css">
</head>
<body>
    <?php include 'header.html'; ?>
    <main>
        <h1>Vaikai</h1>
        <article>
            <div class="main-gallery-container">
                <div class="children-gallery-image-container">
                    <img src="/images/vaikai/IMG_5747_1.jpg" alt="Mergaitė rapsų lauke" class="gallery-img" onclick="myFunction(this);" data-number=0>
                    <img src="/images/vaikai/M71A0697.jpg" alt="Sesutės prie alyvų krūmo" class="gallery-img" onclick="myFunction(this);" data-number=1>
                </div>
                <div class="children-gallery-image-container">
                    <img src="/images/vaikai/M71A9058After.jpg" alt="Šeima" class="gallery-img" onclick="myFunction(this);" data-number=2>
                    <img src="/images/vaikai/IMG_1100.jpg" alt="Šeima žiemą" class="gallery-img" onclick="myFunction(this);" data-number=3>
                </div>
                <div class="children-gallery-image-container">
                    <img src="/images/vaikai/M71A9885.jpg" alt="Sesės pievoje" class="gallery-img" onclick="myFunction(this);" data-number=4>
                    <img src="/images/vaikai/M71A9890.jpg" alt="Mergaitė pievoje" class="gallery-img" onclick="myFunction(this);" data-number=5>
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
            if (currentSlideNr > 4) {
                currentSlideNr = -1;
            }
            nr = currentSlideNr + 1;
            img = slides[nr];
            expandImg.src = img.src;
            currentSlideNr += 1;
        }

        function previousSlide() {
            if (currentSlideNr < 1) {
                currentSlideNr = 6;
            }
            nr = currentSlideNr - 1;
            img = slides[nr];
            expandImg.src = img.src;
            currentSlideNr -= 1;
        }
    </script>
</body>
</html>
