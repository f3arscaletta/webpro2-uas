<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@600&display=swap" rel="stylesheet">
        <title>BEACH HOMESTAY BATUBIRU</title>
        <style type="text/css">
            * {
    padding:0%;
    margin:0%;
    font-family: 'Titillium Web', sans-serif;
}
body {
    background: url('https://pbs.twimg.com/media/FvlmcRbaYAAJ7Z7?format=jpg&name=large') no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
body::-webkit-scrollbar {
    display: none;
}
a {
    color: inherit;
    text-decoration: none;
}
.label {
    margin: 0 450px;
    border: 2px;
    border-radius: 20px;
    background-color: rgba(80, 80, 82, 0.5);
    color: #ffffff ;
}
.container {
    width: 80%;
    margin: 0 auto;
}
.container:after {
    content: '';
    display: block;
    clear: both;
}
header h1 {
    color: #ffffff ;
    padding:5px 20px ;
}
header ul li {
    color: white;
    display: inline-block;
}
header ul li a {
    border-radius: 20%;
    padding: 25px 20px;
    display: inline-block;
}
header ul li a:hover {
    background-color: rgb(255, 255, 255);
    color: rgb(120, 221, 255);
}
.active {
    border-radius: 20%;
    background-color: rgb(120, 221, 255);
    color: #ffffff;
}
.banner {
    color: white;
    height: 47vh;
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
}
.banner h2 {
    padding: 25px 20px;
    border: 3px solid white;
    border-radius: 20px;
}
.box{
    margin: 0 auto;
    height: 30px;
    width: 110px;
    border-radius: 20px;
    background: #ffffff;
    position: absolute;
    text-align: center;
    top: 3%;
    right: 5%;
}
        </style>
        <div class="box">
            <a href="<?php echo base_url() . 'index.php/web/login' ?>">Login/Sign Up</a>

        </div>
        </head>
    
        <body>
            <br>
            <br>
    <header>
        <div class="container">
            <center><a href="<?php echo base_url() . 'index.php/web' ?>"><img src="https://pbs.twimg.com/media/FvlpxBUaAAEBuPj?format=png&name=small" height=150 width="150" >
            <center><h1><a href="<?php echo base_url() . 'index.php/web' ?>">BEACH HOMESTAY BATUBIRU</a></h1></center>
            <ul>
                <li class="active"><a href="<?php echo base_url() . 'index.php/web' ?>">HOME</a></li>
                <li><a href="<?php echo base_url() . 'index.php/web/about' ?>">ABOUT</a></li>
                <li><a href="<?php echo base_url() . 'index.php/web/paket' ?>">PACKAGE LIST</a></li>
                <li><a href="<?php echo base_url() . 'index.php/web/gallery' ?>">GALLERY</a></li>
                <li><a href="<?php echo base_url() . 'index.php/web/contact' ?>">CONTACT</a></li>
            </ul>
        </div>
    </header>
    <br>
    <center>
    <section class="label">
        <div class="container">
            <p>HOME / HOME</p>
        </div>
    </section>
    </center>
 
    <center>
        <section class="banner">
            <h2><a href="<?php echo base_url() . 'index.php/web/about' ?>">WELCOME TO BEACH HOMESTAY BATUBIRU</a></h2>
        </section> 
    </center>

    </body> 
    </html>