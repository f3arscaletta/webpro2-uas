<!DOCTYPE html>
<html lang="en">
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
    height: 45vh;
    width: 145vh;
    border-radius: 20%;
    background-color: rgba(0, 0, 0, 0.5);
}
.banner h2 {
    text-align: center;
    padding: 10px 10px;
    margin-bottom: 1px;
}
.banner p {
    padding: 10px 10px;
    word-spacing: 5px;
    line-height: 25px;
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
                <li><a href="<?php echo base_url() . 'index.php/web/' ?>">HOME</a></li>
                <li class="active"><a href="<?php echo base_url() . 'index.php/web/about' ?>">ABOUT</a></li>
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
            <p>HOME / ABOUT</p>
            </div>
        </section>
        </center>
        <br>
        <br>
 
    <center>
        <section class="banner">
            <div class="container">
                <h2>ABOUT US</h2>
                <br><justify>Selamat datang di Beach Homestay! Kami adalah akomodasi yang terletak tepat di pinggir pantai dengan pemandangan yang sangat indah. Homestay kami memiliki berbagai fasilitas modern untuk memenuhi kebutuhan tamu kami, termasuk kamar-kamar yang nyaman dan bersih, teras untuk menikmati pemandangan pantai, dan aktivitas seperti snorkeling, berenang, atau sekadar bersantai di pantai.

                    <br>Kami sangat bangga dengan staf kami yang ramah dan profesional, siap membantu para tamu kami dengan segala kebutuhan mereka selama menginap di Beach Homestay. Dengan lokasi yang strategis di pinggir pantai dan fasilitas yang lengkap, kami yakin bahwa tamu kami akan menikmati liburan mereka di sini.</br>
                    
                    Jangan ragu untuk menghubungi kami jika Anda memiliki pertanyaan atau ingin memesan kamar di Beach Homestay. Terima kasih telah memilih kami sebagai pilihan akomodasi Anda diliburan pantai!</justify></p>
            </div>
        </section> 
    </center>

        </body>