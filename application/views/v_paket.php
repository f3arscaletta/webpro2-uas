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
.left {
    padding: 50px ;
    margin: 0 53px 0 53px;
    float: left;
} 
     
.flip {
    position: relative;
    text-align: center;
}
.front,.back {
    background-color: LightYellow ;
    display: block;
    width: 300px;
    height: 300px;
    border-radius: 15px;
    transition: all .5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
}
.front2,.back {
    background-color: LightYellow ;
    display: block;
    width: 300px;
    height: 300px;
    border-radius: 15px;
    transition: all .5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
}
.front3,.back {
    background-color: LightYellow ;
    display: block;
    width: 300px;
    height: 300px;
    border-radius: 15px;
    transition: all .5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
}
.front {

    background-image: url(https://pbs.twimg.com/media/FvmOL6-acAAl0LQ?format=jpg&name=medium);
    background-position: center ;
    background-size: cover;
    transform: rotateY(0);
}
.front2 {

    background-image: url(https://pbs.twimg.com/media/FvmM4nRaEAAztKZ?format=jpg&name=360x360);
    background-position: center ;
    background-size: cover;
    transform: rotateY(0);
}
.front3 {

    background-image: url(https://pbs.twimg.com/media/FvmO8W-acAEEmkb?format=jpg&name=small);
    background-position: center ;
    background-size: cover;
    transform: rotateY(0);
}
.back {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    padding: auto;
    position: absolute;
    top: 0;
    left: 0;
    opacity: 0;
    transform: rotateY(-180deg);
}
.flip:hover .front {
    transform: rotateY(180deg);
}
.flip:hover .front2 {
    transform: rotateY(180deg);
}
.flip:hover .front3 {
    transform: rotateY(180deg);
}
.flip:hover .back {
    opacity: 1;
    transform: rotateY(0);
}
.tombol-booking{
    margin: 10px 65px;
    padding: 5px 5px 0 0;
    border-radius: 10px;
    background-color: #ffffff;
    text-align: justify;
    justify-content: center;
    align-items: center;
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
button{
    margin: 10px 0;
    width: 50%;
    height: 30px;
    border-radius: 40px;
    background: #fff;
    border: none;
    outline: none;
    cursor: pointer;
    font-size: 1em;
    font-weight: 600;
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
                <li><a href="<?php echo base_url() . 'index.php/web' ?>">HOME</a></li>
                <li><a href="<?php echo base_url() . 'index.php/web/about' ?>">ABOUT</a></li>
                <li  class="active"><a href="<?php echo base_url() . 'index.php/web/paket' ?>">PACKAGE LIST</a></li>
                <li><a href="<?php echo base_url() . 'index.php/web/gallery' ?>">GALLERY</a></li>
                <li><a href="<?php echo base_url() . 'index.php/web/contact' ?>">CONTACT</a></li>
            </ul>
            <br>
        </div>
    </header>
    <center>
        <section class="label">
            <div class="container">
            <p>HOME / PACKAGE LIST</p>
            </div>
        </section>
        </center>
        <br>

        <h2 align="center"><font color="white">PACKAGE LIST</font></h2>
        <br>
        <br>

        <div class="left">
            <div class="flip">
                <div class="front"></div>
                    <div class="back">
                        <h2>Solo Package</h2>
                        <p>IDR 800.000,00 </p>
                        <br>
                        <ul>
                            <li>Small Homestay</li>
                            <li>1 Single bed</li>
                            <li>Breakfast and Dinner</li>
                            <li>Snorkeling Set</li>
                        </ul>
                    </div>
                </div>
                <center><button><a href="<?= base_url('index.php/web/contact'); ?>">Book Now</a></button></center>
            </div>

            <div class="left">
                <div class="flip">
                    <div class="front2"></div>
                        <div class="back">
                            <h2>Honeymoon Package</h2>
                            <p>IDR 1.400.000,00 </p>
                            <br>
                            <ul>
                                <li>Medium Homestay</li>
                                <li>1 Queen size bed</li>
                                <li>Breakfast and Dinner</li>
                                <li>Snorkeling Set</li>
                                <li>Special Room for Couple Dinner</li>
                                <li>Photo Session</li>
                            </ul>
                        </div>
                    </div>
                    <center> <button><a href="<?= base_url('index.php/web/contact'); ?>">Book Now</a></button></center>
                </div>
                <div class="left">
                    <div class="flip">
                        <div class="front3"></div>
                            <div class="back">
                                <h2>Family Package</h2>
                                <p>IDR 2.500.000,00 </p>
                                <br>
                                <ul>
                                    <li>Large Homestay</li>
                                    <li>3 Room</li>
                                    <li>1 King size bed, 2 Queen size bed</li>
                                    <li>Snorkeling Set</li>
                                    <li>Special Room for Family Dinner</li>
                                    <li>Photo Session</li>
                                </ul>
                            </div>
                        </div>
                        <center> <button><a href="<?= base_url('index.php/web/contact'); ?>">Book Now</a></button></center>
                    </div>

    </body>
</html>
                    