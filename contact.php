<?php

$servername = "localhost"; // replace with your database host
$username = "u743445510_gmsite"; // replace with your database username
$password = "gmsite@2024"; // replace with your database password
$database = "u743445510_gmsite"; // replace with your database name


$conn = new mysqli($servername, $username, $password, $database);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $message = isset($_POST['message']) ? $_POST['message'] : '';

    $sql_query = "INSERT INTO users (name, email, message) VALUES ('$name','$email', '$message')";
    
    if ($conn->query($sql_query) === TRUE) {
        echo "<script>alert('Thank you For Contacting Us , We will Contact You Soon');</script>";

        echo "<script>window.location.href='contact.php';</script>";
        exit();


    } else {
        echo "Error: " . $sql_query . "<br>" . $conn->error;
    }
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>contact|Graymatter Works </title>
    <meta name="description" content="">
    <script src="themekit/scripts/jquery.min.js"></script>
    <script src="themekit/scripts/main.js"></script>
    <link rel="stylesheet" href="themekit/css/bootstrap-grid.css">
    <link rel="stylesheet" href="themekit/css/style.css">
    <link rel="stylesheet" href="themekit/css/glide.css">
    <link rel="stylesheet" href="themekit/css/magnific-popup.css">
    <link rel="stylesheet" href="themekit/css/content-box.css">
    <link rel="stylesheet" href="themekit/css/contact-form.css">
    <link rel="stylesheet" href="themekit/css/media-box.css">
    <link rel="stylesheet" href="skin.css">
    <link rel="icon" href="media/favicon.png">
</head>
<style>
    html,
    body {
        max-width: 100%;
        overflow-x: hidden;
    }
    #contact img{
    height: 100%;
 }
 .box{
    width: 100% !important;
    margin-top: 10px;

 }
 form{
    display: flex;
    flex-direction: column;
    
 }
 #contact input{
    margin: 10px 0px;
    height:40px;
    font-family: 'Montserrat', sans-serif;
 }
 #contact textarea {
    margin: 10px 0px;
 }
 .signin{
    background: aqua !important;
    color: black !important;
    box-shadow: 2px 4px 5px rgba(0, 0, 0, .3);
    height:40px;
}
</style>

<body>
    <?php include 'header.php'; ?>

    <main>
    <section id="contact">
<div class="container box">
<div class="row">
        <div class="col-lg-6 col-md-6 col-12">
          <img src="https://burst.shopifycdn.com/photos/contact-us-flatlay.jpg?width=1000&format=pjpg&exif=0&iptc=0" class="img-fluid">
        </div>
        <div class="col-lg-6 col-md-6 col-12">
            <h1>CONTACT US</h1>
            <form method="post" action="#" enctype="multipart/form-data">
            <input type="text" class="form-control"  id="name" name="name" placeholder="enter your name">
            <input type="mail" class="form-control" id="email" name="email" placeholder="enter your mail">
            <textarea  class="form-control" id="message" name="message" placeholder="enter your message"></textarea>
            <button class="btn signin" name="btnAdd">Send Message</button>
           </form>
            </div>
       </div>
</div>
</section>
        </main>
    <i class="scroll-top-btn scroll-top show"></i>
    <?php include 'footer.php'; ?>
</body>

</html>