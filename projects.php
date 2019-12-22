<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Projects</title>
    <link href="src/css/bootstrap.css" type="text/css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
    <!--<link href="src/css/johan-blog-style.css" type="text/css" rel="stylesheet">-->
    <script src="src/js/jquery-3.3.1.js"></script>
    <script src="src/js/popper.js"></script>
    <script src="src/js/bootstrap.min.js"></script>
</head>
<body class="bg-dark text-light">
    <?php include 'src/menu.php'; ?>

    <h1 class="display-4 text-center m-4">Projects</h1>
    <div class="container">
        <p class="lead  text-center mb-4" style="font-size: x-large;">Just a list of my works, I'll be adding links to the pages and Git for each one of them.</p>

        <div class="row mt-3 mb-3 bg-light text-dark">

                <div class="col border border-secondary p-0 m-3">
                    <a href="Temma/index.php"><img class="w-100" src="src/img/temmaprev.png" alt=""></a>
                    <ul class="list-group">
                        <li class="list-group-item">
                            <p class="lead">Web Site for Temma Freight Logistics.</p>
                            <hr>
                            <p>Status: Finishing / implementing soon.</p>
                            <p>Description: this website will replace Temma Freight's previous website changing the look it has will progressively add some functional features.</p>
                            <p>Features:</p>
                                <ul>
                                    <li>It's a PHP website that uses $_COOKIE; it reloads the page automatically after selecting between spanish and english and saving the preferred language in cookies.</li>
                                    <li>Customers can send messages through the website.</li>
                                    <li>Layout based in bootstrap 4, with custom backgrounds.</li>
                                    <li>Working soon: customer login for orders history and tracking.</li>
                                </ul>
                            <p>Pending to add:</p>
                                <ul>
                                    <li>Social Media icons and links.</li>
                                    <li>details on footer.</li>
                                </ul>
                        </li>
                        <li class="list-group-item">
                            <a href=""><img src="src/img/GitHub.png" class="d-inline"></a>
                        </li>
                    </ul>
                </div>

                <div class="col border border-secondary p-0 m-3">
                    <a href="humanities/happiness.html"><img class="w-100" src="src/img/humanitiesprev.png" alt=""></a>
                    <ul class="list-group">
                        <li class="list-group-item">
                            <p class="lead">Humanities Project About Happiness</p>
                            <hr>
                            <p>Status: Finished.</p>
                            <p>Description: it started as a final project for one of my classes which I ended up converting it into a jQuery and Bootstrap demo.</p>
                            <p>Features:</p>
                                <ul>
                                    <li>The content is read from a Json file.</li>
                                    <li>Responsiveness powered by jQuery:
                                        <ul>
                                            <li>buttons to expand and minimize content in screen.</li>
                                            <li>Side bar will fade in and fade out according to the scrolling-position on the screen, not showing when seeing the slideshow.</li>
                                            <li>Side bar will slide in and out when hovering over it.</li>
                                            <li>Side bar won't show in a window smaller than 1200px wide.</li>
                                            <li>Popping about me modal.</li>
                                        </ul>
                                </li>
                                </ul>
                        </li>
                        <li class="list-group-item">
                            <a href=""><img src="src/img/GitHub.png" class="d-inline"></a>
                        </li>
                    </ul>
                </div>

                <div class="col border border-secondary p-0 m-3">
                    <a href=""><img class="w-100" src="src/img/projects.jpg" alt=""></a>
                    <ul class="list-group">
                        <li class="list-group-item">
                            <p class="lead">Wordpress Style blog</p>
                            <hr>
                            <p>Status: </p>
                            <p>Description: </p>
                            <p>This is my next project</p>
                        </li>
                        <li class="list-group-item">
                            <a href=""><img src="src/img/GitHub.png" class="d-inline"></a>
                        </li>
                    </ul>
                </div>

            </div>
            
        </div>
    </div>

    <?php include 'src/footer.php'; ?>
</body>
</html>