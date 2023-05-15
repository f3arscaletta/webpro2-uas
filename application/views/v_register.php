<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <title>NEVERMORE ESPORT</title>
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
.label1 {
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
section{
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 80vh;
    width: 100%;
    
    background: url('background6.jpg')no-repeat;
    background-position: center;
    background-size: cover;
}
.form-box{
    position: relative;
    width:400px;
    height: 550px;
    background: transparent;
    border: 2px solid rgba(255,255,255,0.5);
    border-radius: 20px;
    backdrop-filter: blur(15px);
    display: flex;
    justify-content: center;
    align-items: center;

}
h2{
    font-size: 2em;
    color: #fff;
    text-align: center;
}
.inputbox{
    position: relative;
    margin: 30px 0;
    width: 310px;
    border-bottom: 2px solid #fff;
}
.inputbox label{
    position: absolute;
    top: 50%;
    left: 5px;
    transform: translateY(-50%);
    color: #fff;
    font-size: 1em;
    pointer-events: none;
    transition: .5s;
}
input:focus ~ label,
input:valid ~ label{
top: -5px;
}
.inputbox input {
    width: 100%;
    height: 50px;
    background: transparent;
    border: none;
    outline: none;
    font-size: 1em;
    padding:0 35px 0 5px;
    color: #fff;
}
.inputbox ion-icon{
    position: absolute;
    right: 8px;
    color: #fff;
    font-size: 1.2em;
    top: 20px;
}
.forget{
    margin: -15px 0 15px ;
    font-size: .9em;
    color: #fff;
    display: flex;
    justify-content: space-between;  
}

.forget label input{
    margin-right: 3px;
    
}
.forget label a{
    color: #fff;
    text-decoration: none;
}
.forget label a:hover{
    text-decoration: underline;
    color: red;
}
button{
    width: 100%;
    height: 40px;
    border-radius: 40px;
    background: #fff;
    border: none;
    outline: none;
    cursor: pointer;
    font-size: 1em;
    font-weight: 600;
}
.register{
    font-size: .9em;
    color: #fff;
    text-align: center;
    margin: 25px 0 10px;
}
.register p a{
    text-decoration: none;
    color: #fff;
    font-weight: 600;
}
.register p a:hover{
    text-decoration: underline;
    color: red;
}
        </style>
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
                <li><a href="<?php echo base_url() . 'index.php/web/gallery' ?>">GALLERY</a></li>
                <li><a href="<?php echo base_url() . 'index.php/web/contact' ?>">CONTACT</a></li>
            </ul>
            <br>
        </div>
    </header>
    <center>
        <div class="label1">
            <div class="container">
            <p>Login/Sign Up</p>
            </div>
        </div>
        </center>
        <br>

        <center><h2><font color="white">SIGN UP</font></h2>
        <section>
        <div class="form-box">
            <div class="form-value">
                <form action="">
                    <div class="inputbox">
                        <ion-icon name="person-outline"></ion-icon>
                        <input type="username" required>
                        <label for="">Username</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="text" required>
                        <label for="">Email</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" required>
                        <label for="">Password</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" required>
                        <label for="">Confirm Password</label>
                    </div>
                    <div class="forget">
                        <label for=""><input type="checkbox">I have read and agree to the <a>Terms and Conditions</a></label>
                      
                    </div>
                    <button>Register</button>
                    <div class="register">
                        <p>Already have an account? <a href="<?php echo base_url() . 'index.php/web/login' ?>">Login</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>