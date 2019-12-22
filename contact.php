<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact me</title>
    <title>Johan Farfan Portfolio</title>
    <link href="src/css/bootstrap.css" type="text/css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
    <!--<link href="src/css/johan-blog-style.css" type="text/css" rel="stylesheet">-->
    <script src="src/js/jquery-3.3.1.js"></script>
    <script src="src/js/popper.js"></script>
    <script src="src/js/bootstrap.min.js"></script>
    
    <?php
        //to check if something was sent
        if (isset($_POST['formName']) && isset($_POST['formMessage'])){
            if ($_POST['formName'] == "" && $_POST['formMessage'] == ""){
                echo "<script> alert('Error: message not sent. Please fill up all the fields in the message form');</script>";
            } else {
                $to = "unit.johan@gmail.com";
                $subject = $_POST['formSubject'];
                $message = $_POST['formMessage'];

                mail($to, $subject, $message);
                echo "<script> alert('Message sent!');</script>";
            }
        }
    ?>
</head>

<body class="bg-dark text-light">
    <?php include 'src/menu.php'; ?>

    <div class="h-100 align-items-center"></div>
    
    <h1 class="display-4 text-center m-4">Contact Me</h1>

    <div class="row bg-white align-items-center mb-4">
        <div class="col text-right">
            <img src="src/img/johan.jpg" class="h-100" style="max-height: 500px; min-height: 300px" alt="">
        </div>
        <div class="col text-dark">
            <p><b>Johan Farfan</b></p>
            <p>webDeveloper</p>
            <p><a class="" href="mailto:unit.johan@gmail.com">unit.johan@gmail.com</a></p>
            <p><a class="" href="tel:+18017874501">(801) 787-4501</a></p>
        </div>
    </div>
    <br><br>

    <div class="row d-flex justify-content-center text-dark mb-4">
        <form class="col-md-6 p-3" action="contact.php" method="post" style="max-width: 1280px; background: url('src/img/message.jpg') center center">
            <h3 class="text-center display-4 mb-3">Send me a message!</h3>
            <div class="row">
                <div class="col text-right">
                    <label for="formName">From </label>
                </div>
                <div class="col">
                    <input type="text" name="formName" placeholder="Name - Company">
                    <br>
                </div>
            </div>
            <div class="row">
                <div class="col text-right">
                    <label for="formSubject">Subject </label>
                </div>
                <div class="col">
                    <input type="text" name="formSubject" placeholder="Subject">
                    <br>
                </div>
            </div>
            <div class="row">
                <div class="col text-right">
                    <label for="formMessage">Message </label>
                </div>
                <div class="col">
                    <textarea name="formMessage" id="" cols="22" rows="5"></textarea>
                </div>
            </div>
            <div class="container text-center">
                <input class="btn btn-outline-primary" type="submit" name="submit">
            </div>
        </form>
    </div>

    <?php include 'src/footer.php'; ?>
</body>
</html>