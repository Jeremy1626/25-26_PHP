<html>
<head>
    <title>Welcome to the App!</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
    <div class="mt-4 p-5 bg-primary text-white rounded">
        <h1>PHP Example Application</h1>
        <p>All the Examples</p>
    </div>
    <nav class="navbar navbar-default navbar-expand-sm">
        <div class="container-fluid">
            <ul class="nav navbar-nav">
                <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#">About Us</a></li>
                <li class="nav-item"><a class="nav-link" href="contact.php">Contact Us</a></li>

                <?php
                session_start();
                if(isset($_SESSION['user'])){
                    echo '<li class="nav-item">Hello ' + $_SESSION["user"] + "!";
                }else{
                    echo '<li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>';

                }
                ?>






            </ul>


        </div>
    </nav>