<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Johan Farfan Portfolio</title>
    <link href="src/css/bootstrap.css" type="text/css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
    <!--<link href="src/css/johan-blog-style.css" type="text/css" rel="stylesheet">-->
    <script src="src/js/jquery-3.3.1.js"></script>
    <script src="src/js/popper.js"></script>
    <script src="src/js/bootstrap.min.js"></script>
</head>

<body class="bg-dark text-light">
    <?php include 'src/menu.php'; ?><br>
    
    <div class="text-right m-4 lead">
        <h4 class="display-4">Johan S. Farfan</h4>
        <p>Web Developer/Designer.</p>
        <p>Amateur Photographer.</p>
        <p>Dreamer.</p>
    </div>
    <br>

    <div class="row text-center no-gutters">
        <a class="col-md" href="projects.php">
            <img class="w-100" src="src/img/projects.jpg" alt="">
            <p class="display-4" style="position: relative; top: -1.5em;">Projects</p>
        </a>

        <a class="col-md" href="contact.php">
            <img class="w-100" src="src/img/contact.jpg" alt="">
            <p class="display-4" style="position: relative; top: -1.5em;">Contact</p>
        </a>

        <a class="col-md" href="more.php">
            <img class="w-100" src="src/img/more.jpg" alt="">
            <p class="display-4" style="position: relative; top: -1.5em;">More...</p>
        </a>
    </div>
    <br>

    <div class="container text-center mt-4 mb-4 lead" style="font-size: x-large;">
        <p>Hello! I&apos;ve created this space on the web to share information about myself, things that I do and my projects.</p>
        <p>I hope you like what you find here.</p>
    </div>
    <br><br>

    <?php include 'src/footer.php'; ?>
</body>
</html>