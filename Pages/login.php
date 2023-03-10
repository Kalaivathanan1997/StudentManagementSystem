<!DOCTYPE html>
<html>
<head>
  <style type="text/css">
* {
 margin: 0;
 padding: 0;
 box-sizing: border-box;
}

@import url('https://fonts.googleapis.com/css?family=Roboto:100');


.container {
 width: 390px;
 height: 500px;
 background: #000;
 margin-left: auto;
 margin-right: auto;
 margin-top: 46px;

 -webkit-box-shadow: 0px 0px 114px 2px rgba(0, 0, 0, 0.75);
 -moz-box-shadow: 0px 0px 114px 2px rgba(0, 0, 0, 0.75);
 box-shadow: 0px 0px 114px 2px rgba(0, 0, 0, 0.75);

 svg {
  position: absolute;
 }
}

.rect1 {
 z-index: 1;
 stroke-dasharray: 197 509;
 stroke-dashoffset: -729;
 transition: stroke-width 1s, stroke-dashoffset 1s, stroke-dasharray 1s;
 transition-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
}

.rect2 {
 z-index: 1;
 stroke-dasharray: 197 509;
 stroke-dashoffset: -1058;
 transition: stroke-width 1s, stroke-dashoffset 1s, stroke-dasharray 1s;
 transition-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
}



.text {
 position: absolute;
 margin-top: 254px;
 border: none;
 background: #000;
 margin-left: 101px;
 color: gray;
 width: 196px;
 height: 44px;
 padding-left: 3px;
 z-index: 100;
 font-family: 'Roboto', sans-serif;
 padding-top: 21px;
 transition: all 600ms cubic-bezier(0.895, 0.03, 0.685, 0.22);
 &:focus {
  outline-width: 0;
  font-size: 16px;
 }
}

.pass {
 position: absolute;
 margin-top: 305px;
 border: none;
 background: #000;
 margin-left: 101px;
 color: gray;
 width: 196px;
 height: 44px;
 padding-left: 3px;
 z-index: 100;
 font-family: 'Roboto', sans-serif;
 padding-top: 21px;
 transition: all 600ms cubic-bezier(0.895, 0.03, 0.685, 0.22);
 &:focus {
  outline-width: 0;
  font-size: 16px;
 }
}


button {
 position: absolute;
 z-index: 100;
 width: 149px;
 height: 43px;
 border: 1px solid #fff;
 background: #000;
 font-family: 'Roboto', sans-serif;
 color: #fff;
 font-size: 16px;
 border-radius: 22px;
 margin-top: 421px;
 margin-left: 120.5px;
 transition: 0.5s;
 cursor: pointer;

 &:hover {
  color: #000;
  background: #fff;
 }

 &:focus {
  outline-width: 0;
 }
}

.header {

 position: absolute;
 text-align: center;
 font-family: 'Roboto', sans-serif;
 color: #fff;
 font-size: 48px;
 margin-left: 128px;
 margin-top: 81px;
}

.info {

 position: absolute;
 text-align: center;
 font-family: 'Roboto', sans-serif;
 color: #BDFFBD
;
 font-size: 14px;
 margin-left: 125px;
 margin-top: 181px;
}
.danger {

 color: #FF0000;

}
a{

 color: #BDFFBD

}
  </style>
 

  <title></title>
</head>
<body>
<div class="al"></div>
<div class="container">
 <div class="header">Sign In</div>
 <div class='info'> <?php if(isset($_GET['empty'])){ echo '<a href="login.php">'.$_GET['empty'].'</a>'; } elseif(isset($_GET['invalit'])){ echo '<a class="danger" href="login.php">'.$_GET['invalit'].'</a>'; }else{ echo "*Click on the input boxes"; } ?></div>



 <form action="db_login.php" method="POST">
 <input id='username' class='text' onfocus="handle2()" class='inc2' type="text" name="name" placeholder='Username' value="">
<!-- Had to remove the type "password" due to the browser user credential's autofill-->
 <input id='password' class='pass' onfocus="handle1()" class='inc1' type="Password" name="password" placeholder='Password' value="">
 <button id="submit"type="submit" name="login">Sign In</button></form>
 <svg width="390" height="549" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
      <rect id='rect' class='rect1'   x="45px"  y="300px"   rx="27" ry="27" width="300px" height="50px" style="stroke: #fff; stroke-width: 1px; fill: #000" />
</svg>
</div>

<script type="text/javascript">
  
let rect = document.getElementById("rect");
let username = document.getElementById("username");
let password = document.getElementById("password");


function handle1() {
  rect.setAttribute("class", "rect2");
}

function handle2() {
  rect.setAttribute("class", "rect1");
}

//For codepen header!!!
setTimeout(() => {
  password.focus();
}, 500);

setTimeout(() => {
  username.focus();
}, 1500);





</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.2.0/anime.min.js"></script>

</body>
</html>