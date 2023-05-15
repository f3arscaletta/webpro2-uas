<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
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
.wrapper{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
    grid-gap: 5px ;
}
.wrapper img{
    height: 250px;
    width: 400px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.30);
    overflow: hidden;
    cursor: pointer;
    border-radius: 20px;
}
.wrapper .image:hover img{
    transform: scale(1.1);
}
.image{
    padding: 10px 10px;
}
.popup-image{
    position: fixed;
    top:0; left: 0;
    background: rgba(0, 0, 0, 0.9);
    height: 100%;
    width: 100%;
    z-index: 100;
    display: none;
}
.popup-image span{
    position:  absolute;
    top: 0; right: 10px;
    font-size: 60px;
    font-weight: bolder;
    color: #ffffff;
    cursor: pointer;
    z-index: 100;
}
.popup-image img{
    position: absolute;
    top: 50%; left: 50%;
    transform: translate(-50%, -50%);
    border: 5px solid #ffffff;
    border-radius: 5px;
    width: 750px;
    object-fit: cover;
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
                <li><a href="<?php echo base_url() . 'index.php/web/about' ?>">ABOUT</a></li>
                <li><a href="<?php echo base_url() . 'index.php/web/paket' ?>">PACKAGE LIST</a></li>
                <li  class="active"><a href="<?php echo base_url() . 'index.php/web/gallery' ?>">GALLERY</a></li>
                <li><a href="<?php echo base_url() . 'index.php/web/contact' ?>">CONTACT</a></li>
            </ul>
            <br>
        </div>
    </header>
    <center>
        <section class="label">
            <div class="container">
            <p>HOME / GALLERY</p>
            </div>
        </section>
        </center>
        <br>

        <center><h2><font color="white">GALLERY</font></h2>
            <div class="wrapper">
                <div class="image"><img src="https://pbs.twimg.com/media/Fv_hZiRaYAAKOpu?format=jpg&name=4096x4096" height="300px" width="500px"></div>
                <div class="image"><img src="https://pbs.twimg.com/media/Fv_hemKacAASH_e?format=jpg&name=4096x4096" height="300px" width="500px"></div>
                <div class="image"><img src="https://pbs.twimg.com/media/Fv_hoKZagAAK1q1?format=jpg&name=4096x4096" height="300px" width="500px"></div>
                <div class="image"><img src="https://pbs.twimg.com/media/Fv_hhhtacAMJSc8?format=jpg&name=4096x4096" height="300px" width="500px"></div>
                <div class="image"><img src="https://pbs.twimg.com/media/Fv_hjgiaEAE3XzO?format=jpg&name=4096x4096" height="300px" width="500px"></div>
                <div class="image"><img src="https://pbs.twimg.com/media/Fv_hmJDaIAEuAMf?format=jpg&name=4096x4096" height="300px" width="500px"></div>
            </div>

            <div class="popup-image">
                <span>&times;</span>
                <img src="https://pbs.twimg.com/media/Fv_hmJDaIAEuAMf?format=jpg&name=4096x4096">
            </div>

            <script>

                document.querySelectorAll('.wrapper img').forEach(image =>{
                    image.onclick = () =>{
                        document.querySelector('.popup-image').style.display = 'block';
                        document.querySelector('.popup-image img').src = image.getAttribute('src');
                    }
                    
                });

                document.querySelector('.popup-image span').onclick = () =>{
                    document.querySelector('.popup-image').style.display = 'none';
                }
            </script>



</center>