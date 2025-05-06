<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style.css" />
  <title>Document</title>
</head>
<style>
  * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: cursive;
}

a {
  text-decoration: none;
}

li {
  list-style: none;
}
/* NAVBAR STYLING STARTS */
.navbar {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 20px;
  background-color: teal;
  color: #fff;
}

.nav-links a {
  color: #fff;
}

/* LOGO */
.logo {
  font-size: 32px;
}

/* NAVBAR MENU */
.menu {
  display: flex;
  gap: 1em;
  font-size: 18px;
}

.menu li:hover {
  background-color: #4c9e9e;
  border-radius: 5px;
  transition: 0.3s ease;
}

.menu li {
  padding: 5px 14px;
}

/* DROPDOWN MENU */
.services {
  position: relative; 
}

.dropdown {
  background-color: rgb(1, 139, 139);
  padding: 1em 0;
  position: absolute; /*WITH RESPECT TO PARENT*/
  display: none;
  border-radius: 8px;
  top: 35px;
}

.dropdown li + li {
  margin-top: 10px;
}

.dropdown li {
  padding: 0.5em 1em;
  width: 8em;
  text-align: center;
}

.dropdown li:hover {
  background-color: #4c9e9e;
}

.services:hover .dropdown {
  display: block;
}

body{
background-image: url('stadium.jpg'); 
background-repeat: no-repeat; background-size: cover; 
 text-align: center;
font-family: sans-serif;
margin: 0;
}

.container {
  position: relative;
  width: 320px;
  margin: 100px auto 0 auto;
  perspective: 1000px;
}

.carousel {
  position: absolute;
  width: 100%;
  height: 100%;
  transform-style: preserve-3d; 
  animation: rotate360 60s infinite forwards linear;
}
.carousel__face { 
  position: absolute;
  width: 300px;
  height: 187px;
  top: 20px;
  left: 10px;
  right: 10px;
  background-size: cover;

  display: flex;
}

span {
  margin: auto;
  font-size: 2rem;
}


.carousel__face:nth-child(1) {
  background-image: url("mbfc.jpeg");
  transform: rotateY(  0deg) translateZ(430px); }
.carousel__face:nth-child(2) { 
  background-image: url("game.jpeg");
    transform: rotateY( 40deg) translateZ(430px); }
.carousel__face:nth-child(3) {
  background-image: url("ormin.jpg");
  transform: rotateY( 80deg) translateZ(430px); }
.carousel__face:nth-child(4) {
  background-image: url("iwan.jpg");
  transform: rotateY(120deg) translateZ(430px); }
.carousel__face:nth-child(5) { 
  background-image: url("lari.jpeg");
 transform: rotateY(160deg) translateZ(430px); }
.carousel__face:nth-child(6) { 
  background-image: url("mbsg.jpg");
 transform: rotateY(200deg) translateZ(430px); }
.carousel__face:nth-child(7) { 
  background-image: url("santai.jpeg");
 transform: rotateY(240deg) translateZ(430px); }
.carousel__face:nth-child(8) {
  background-image: url("biru.jpg");
  transform: rotateY(280deg) translateZ(430px); }
.carousel__face:nth-child(9) {
  background-image: url("ingame.jpg");
  transform: rotateY(320deg) translateZ(430px); }



@keyframes rotate360 {
  from {
    transform: rotateY(0deg);
  }
  to {
    transform: rotateY(-360deg);
  }
}
</style>
<body>
  <nav class="navbar">
    <!-- LOGO -->
    <div class="logo">FFM</div>

    <!-- NAVIGATION MENU -->
    <ul class="nav-links">
      <!-- NAVIGATION MENUS -->
      <div class="menu">

        <li><a href="index.php">Home</a></li>
         <li><a href="login.php">Login</a></li>
        <li><a href="register.php">Register</a></li>
      
      </div>
    </ul>
  </nav><br><br><br><br>
  <center><h1 style="color: white;">FOOTBALL FRIENDLY MATCHMAKING </h1></center>
<div class="container">
  <div class="carousel">
    <div class="carousel__face"></div>
    <div class="carousel__face"></div>
    <div class="carousel__face"></div>
    <div class="carousel__face"></div>
    <div class="carousel__face"></div>
    <div class="carousel__face"></div>
    <div class="carousel__face"></div>
    <div class="carousel__face"></div>
    <div class="carousel__face"></div>
  </div>
</div>
</html>