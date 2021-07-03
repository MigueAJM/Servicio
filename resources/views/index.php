<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- ===== style ===== -->
    <link rel="stylesheet" href="app.css">
    <title>Home</title>
</head>

<body>
    <?php require_once 'layout/header.php' ?>
    <main class="main">
        <section id="Home" class="home__section">
            <div class="section__title">
                <h1>Home section</h1>
            </div>
            <div class="section__content container grid">
                <div class="card">
                    <div class="img">Imagen1</div>
                    <div class="card__content">
                        <h3>title</h3>
                        <p>lorem insup is a paragraph generator lorem insup is a paragraph generator lorem insup is a paragraph generator</p>
                    </div>
                </div>
                <div class="card">
                    <div class="img">Imagen1</div>
                    <div class="card__content">
                        <h3>title</h3>
                        <p>lorem insup is a paragraph generator lorem insup is a paragraph generator lorem insup is a paragraph generator</p>
                    </div>
                </div>
                <div class="card">
                    <div class="img">Imagen1</div>
                    <div class="card__content">
                        <h3>title</h3>
                        <p>lorem insup is a paragraph generator lorem insup is a paragraph generator lorem insup is a paragraph generator</p>
                    </div>
                </div>
                <div class="card">
                    <div class="img">Imagen1</div>
                    <div class="card__content">
                        <h3>title</h3>
                        <p>lorem insup is a paragraph generator lorem insup is a paragraph generator lorem insup is a paragraph generator</p>
                    </div>
                </div>
                <div class="card">
                    <div class="img">Imagen1</div>
                    <div class="card__content">
                        <h3>title</h3>
                        <p>lorem insup is a paragraph generator lorem insup is a paragraph generator lorem insup is a paragraph generator</p>
                    </div>
                </div>
                <div class="card">
                    <div class="img">Imagen1</div>
                    <div class="card__content">
                        <h3>title</h3>
                        <p>lorem insup is a paragraph generator lorem insup is a paragraph generator lorem insup is a paragraph generator</p>
                    </div>
                </div>
            </div>
        </section>
    <?php
        if($email !== ''){
            echo "
            <section id='Residencias' class='residencias__section'>
            <div class='section__title'>
                <h1>Residencias </h1>
            </div>
            <div class='section__content container grid'>
                <div class='card'>
                    <div class='img'>Imagen1</div>
                    <div class='card__content'>
                        <h3>title</h3>
                        <p>lorem insup is a paragraph generator lorem insup is a paragraph generator lorem insup is a paragraph generator</p>
                    </div>
                </div>
                <div class='card'>
                    <div class='img'>Imagen1</div>
                    <div class='card__content'>
                        <h3>title</h3>
                        <p>lorem insup is a paragraph generator lorem insup is a paragraph generator lorem insup is a paragraph generator</p>
                    </div>
                </div>
                <div class='card'>
                    <div class='img'>Imagen1</div>
                    <div class='card__content'>
                        <h3>title</h3>
                        <p>lorem insup is a paragraph generator lorem insup is a paragraph generator lorem insup is a paragraph generator</p>
                    </div>
                </div>
                <div class='card'>
                    <div class='img'>Imagen1</div>
                    <div class='card__content'>
                        <h3>title</h3>
                        <p>lorem insup is a paragraph generator lorem insup is a paragraph generator lorem insup is a paragraph generator</p>
                    </div>
                </div>
                <div class='card'>
                    <div class='img'>Imagen1</div>
                    <div class='card__content'>
                        <h3>title</h3>
                        <p>lorem insup is a paragraph generator lorem insup is a paragraph generator lorem insup is a paragraph generator</p>
                    </div>
                </div>
                <div class='card'>
                    <div class='img'>Imagen1</div>
                    <div class='card__content'>
                        <h3>title</h3>
                        <p>lorem insup is a paragraph generator lorem insup is a paragraph generator lorem insup is a paragraph generator</p>
                    </div>
                </div>
            </div>
        </section>

        <section id='ServicioSocial' class='servicio__section'>
            <div class='section__title'>
                <h1>servicio social</h1>
            </div>
            <div class='section__content container grid'>
                <div class='card'>
                    <div class='img'>Imagen1</div>
                    <div class='card__content'>
                        <h3>title</h3>
                        <p>lorem insup is a paragraph generator lorem insup is a paragraph generator lorem insup is a paragraph generator</p>
                    </div>
                </div>
                <div class='card'>
                    <div class='img'>Imagen1</div>
                    <div class='card__content'>
                        <h3>title</h3>
                        <p>lorem insup is a paragraph generator lorem insup is a paragraph generator lorem insup is a paragraph generator</p>
                    </div>
                </div>
                <div class='card'>
                    <div class='img'>Imagen1</div>
                    <div class='card__content'>
                        <h3>title</h3>
                        <p>lorem insup is a paragraph generator lorem insup is a paragraph generator lorem insup is a paragraph generator</p>
                    </div>
                </div>
                <div class='card'>
                    <div class='img'>Imagen1</div>
                    <div class='card__content'>
                        <h3>title</h3>
                        <p> lorem insup is a paragraph generator lorem insup is a paragraph generator lorem insup is a paragraph generator</p>
                    </div>
                </div>
                <div class='card'>
                    <div class='img'>Imagen1</div>
                    <div class='card__content'>
                        <h3>title</h3>
                        <p>lorem insup is a paragraph generator lorem insup is a paragraph generator lorem insup is a paragraph generator</p>
                    </div>
                </div>
                <div class='card'>
                    <div class='img'>Imagen1</div>
                    <div class='card__content'>
                        <h3>title</h3>
                        <p>lorem insup is a paragraph generator lorem insup is a paragraph generator lorem insup is a paragraph generator</p>
                    </div>
                </div>
            </div>
        </section>
            ";
        }
    ?>   
    </main>
    <?php require_once 'layout/footer.php' ?>
</body>

</html>