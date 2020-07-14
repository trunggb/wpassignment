<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Forum</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="post-script.js"></script>
    <style>
        .body-container {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        
        .header {
            min-height: 20vh;
            flex-grow: 1;
            display: flex;
            flex-direction: row;
            background-color: #000000;
            align-items: center;
        }
        
        .footer {
            background-color: #000000;
            min-height: 30vh;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        
        .logo-img {
            height: 15vh;
        }
        
        .model-content a {
            font-weight: lighter;
            color: #E5E5E5;
        }
        
        .left a {
            color: #ffffff;
        }
        
        .left a:hover {
            text-decoration: unset;
            color: #E5E5E5;
        }
        
        .right {
            color: white;
            display: flex;
            align-items: center;
            justify-content: flex-end;
        }
        
        .right i {
            margin-left: 10%;
        }
        
        .navbar-toggler {
            color: #ffffff;
        }
        
        .navbar-toggler:focus {
            outline: unset;
        }
        
        .top {
            height: 40%;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 20px;
        }
        
        .top img {
            height: 60px;
        }
        
        .mid {
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            font-weight: lighter;
            font-size: 0.7rem;
            color: #ffffff;
            text-align: center;
            height: 30%;
        }
        
        .bot {
            width: 20%;
            display: flex;
            flex-direction: row;
            height: 30%;
            justify-content: space-around;
            align-items: center;
            margin: 0 auto;
        }
        
        .bot i {
            color: #ffffff;
        }
        
        .main {
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            justify-content: space-around;
        }
        
        .main-top {
            padding-top: 3%;
            padding-bottom: 3%;
            display: flex;
            flex-direction: column;
            justify-content: space-around;
            width: 50%;
            margin: 0 auto;
        }
        
        .main-mid {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding-bottom: 3%;
        }
        
        .details-btn {
            display: flex;
            flex-direction: column;
            justify-content: center;
            text-align: center;
            background-color: white;
            border: 1px solid black;
            height: 30px;
            width: 150px;
            border-radius: 20px;
        }
        
        .btn-slected {
            background-color: black;
            color: white;
        }
        
        .collapsible {
            cursor: pointer;
            padding: 18px;
            width: 60%;
            border: none;
            text-align: left;
            outline: none;
            font-size: 15px;
            border-bottom: 1px solid #f1f1f1;
        }
        
        .collapsible:after {
            content: '\25BC';
            color: black;
            font-weight: bold;
            float: right;
            margin-left: 5px;
        }
        
        .active:after {
            content: "\25B2";
        }
        
        .content {
            width: 60%;
            padding: 0 18px;
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.2s ease-out;
            background-color: #f1f1f1;
        }
        
        button:focus {
            outline: unset;
        }
        
        .qs-left {
            padding-top: 3%;
            padding-left: 10%;
            width: 60%;
        }
        
        .qs-right {
            padding-top: 3%;
            padding-right: 10%;
            width: 40%;
            text-align: right;
        }
        #post-btn {
            margin-top: 10px;
        }
        .ava-container{
            display: flex;
        }
        .ava-container i{
            margin-right: 3%;
        }
    </style>
</head>

<body>
    <div class="body-container">
        <div class="header">
            <img alt="logo" src="images/logo.png" class="logo-img">
            <div class="container">
                <div class="row">
                    <nav class="left col-sm-8 navbar navbar-expand-lg">
                        <a class="nav-link" href="model-details.html">MODELS</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <i class="fas fa-caret-down fa-lg"></i>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item">
                                    <a class="nav-link" href="price.html">PRICING</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="company.html">COMPANY</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="contact.html">CONTACT US</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="account.php">ACCOUNT</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="forum.php">FORUM</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                    <div class="right col-sm-4">
                        <i class="fas fa-search fa-lg"></i>
                        <i class="fas fa-bars fa-lg"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="main">
            <div class="main-top">
                <textarea class="form-control" placeholder="Hey, what are you thinking?" rows="3"></textarea>
                <div class="form-group">
                    <button id="post-btn" class="btn crud-submit btn-dark">Post</button>
                </div>
            </div>
            <div class="main-mid">
                <button class="collapsible">
                    <div class="container">
                        <div class="ava-container">
                            <i class="fa fa-user-circle fa-lg" aria-hidden="true"></i>
                            <p>Trung B</p>
                        </div>
                        <div>
                            <p>Are you looking for your nearest Ducati Authorized Dealer?</p>
                        </div>
                    </div>
                </button>
                <div class="content">
                    <div class="row">
                        <div class="col-2">
                            <p>Trung B</p>
                        </div>
                        <div class="col-10">
                            <p>You can find the Ducati Authorized Dealer nearest to you in the section "Find Dealers" </p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-2">
                            <p>B Sama</p>
                        </div>
                        <div class="col-10">
                            <p>If you are interested in doing your thesis or an internship at Ducati, please visit the "Work with us" section of our website.</p>
                        </div>
                    </div>

                    <div class="row input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">
                                <i class="fa fa-comments fa-lg" aria-hidden="true"></i>

                            </span>
                        </div>
                        <input type="text" placeholder="Write a comment" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                    </div>
                </div>
            </div>

        </div>
        <div class="footer">
            <div class="top">
                <img alt="ducati-text" src="images/ducati-text.png" class="ducati-text">
            </div>
            <div class="mid">
                <p>Copyright © 2020 Ducati Motor Holding S.p.A. – A Sole Shareholder Company - A Company subject to the Management and Coordination <br/> activities of AUDI AG. All rights reserved. VAT 05113870967</p>
            </div>
            <div class="bot">
                <i class="fab fa-facebook-f fa-lg"></i>
                <i class="fab fa-twitter fa-lg"></i>
                <i class="fab fa-instagram fa-lg"></i>
                <i class="fab fa-youtube fa-lg"></i>
                <i class="fab fa-linkedin-in fa-lg"></i>

            </div>
        </div>
    </div>
    <script>
        var coll = document.getElementsByClassName("collapsible");
        var i;

        for (i = 0; i < coll.length; i++) {
            coll[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var content = this.nextElementSibling;
                if (content.style.maxHeight) {
                    content.style.maxHeight = null;
                } else {
                    content.style.maxHeight = content.scrollHeight + "px";
                }
            });
        }
    </script>

</body>