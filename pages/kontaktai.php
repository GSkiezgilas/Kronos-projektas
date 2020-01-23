<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontaktai | Kronos Portraits</title>
    <link rel="stylesheet" href="/css/styles.css">
</head>
<body>
<?php include 'header.html'; ?>
    <main>
        <h1>Kontaktai</h1>
        <div class="kontaktai-main-style">
            <article class="kontaktai-article-container">
                <p>Jeigu turite klausimų į kuriuos neradote atsakymo <abbr title="Dažniausiai užduodami klausimai"><a href="duk.php">D.U.K.</a></abbr> skyrelyje arba jei norite užsisakyti mūsų paslaugas, tai padaryti galite vienu iš Jums patogių būdų esančių žemiau.</p>
            </article>
            <div>
                <form action="mail_handler.php" method="post">
                    <div class="row">
                        <div class="col25">Vardas:*<br></div>
                        <div class="col75"><input type="text" name="fname" placeholder="Vardas" required><br><br></div>
                    </div>
                    <div class="row">
                        <div class="col25">El. paštas:*<br></div>
                        <div class="col75"><input type="text" name="email" placeholder="El. paštas" required><br><br></div>
                    </div>
                    <div class="row">
                        <div class="col25">Telefono nr.:<br></div>
                        <div class="col75"><input type="tel" name="phone" placeholder="Telefono nr."><br><br></div>
                    </div>
                    <div class="row">
                        <div class="col25">Žinutė:*<br></div>
                        <div class="col75"><textarea rows="10" cols="70" name="message" placeholder="Žinutės tekstas" required></textarea></div>
                    </div>
                    <p>* pažymėtus laukelius užpildyti būtina.</p>
                    <div class="row">
                        <input type="submit" value="Siųsti">
                    </div>
                </form>
            </div>
        </div>
    </main>
    <?php include 'footer.html'; ?>
</body>
</html>
