<!DOCTYPE HTML>

<!-- 
Author: Samuele Bagalà, Septiember 2021
Email: samuele@box2box.es
Github @bagalasamuele  -->


<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width,height=device-height,initial-scale=1">

<title>box2boxapp</title>

<link rel="stylesheet" href="css/screen.css" media="screen">

</head>
<body>

    <script>
        function beedroom() {
          alert("4 m");
        }

        function ensuite() {
          alert("3 m");
        }

        function study() {
          alert("2 m");
        }

        function livingroom() {
          alert("1 m");
        }

        function kitchen() {
          alert("5 m");
        }

        function patio() {
          alert("5 m");
        }

        function diningarea(){
            alert("4 m");
        }


        function    wc(){
            alert("1 m");
        }

        function washroom() {
            alert("2 m");
        }

        function utility(){
            alert("2 m");
        }

        function staircase(){
            alert("1 m");
        }
        function habitacion2(){
            alert("1 m");
        }




        </script>

<h1>Box2box game</h1>
<img style="width:300px;margin:0px;" src="../imgs/logo1.jpg">
<div id="floor-plan">
 <svg 
    
     xmlns="http://www.w3.org/2000/svg" 
     xmlns:xlink="http://www.w3.org/1999/xlink" 
     version="1.1" 
     viewBox="0 0 1500 1500">

 <defs>
  <style>
   a path {
            transition: 0.5s ease-in-out;
           }
   a:hover path {
            fill: rgba( 0, 0, 0, 0.6 );
           }
  </style>

  <pattern id="image-bg" x="0" y="0" width="1500" height="1500" patternUnits="userSpaceOnUse">
   <image width="1500" height="1500" xlink:href="images/floor-plan-bg.jpg"/>
  </pattern>
 </defs>

  <path d="M0,0 1500,0 1500,1500 0,1500 0,0" stroke="none" fill="url(#image-bg)"/>

  <a>
  <path d="M125,220 372,220 372,521 125,521 125,220" stroke="#999" stroke-width="1" fill="transparent" onclick="beedroom()" /> 
 </a> 


 <a>
  <path d="M125,531 372,531 372,642 125,642 124,531" stroke="#999" stroke-width="1" fill="transparent" onclick="ensuite()"/>
 </a>
 <a>
  <path d="M125,652 372,652 372,1073 125,1073 125,652" stroke="#999" stroke-width="1" fill="transparent" onclick="habitacion2()"/>
 </a>
 <a>
  <path d="M382,851 1054,851 1054,1344 382,1344 382,1179 125,1179 125,1083, 382,1083 382,851" stroke="#999" stroke-width="1" onclick="livingroom()" fill="transparent"/>
 </a>
 <a>
  <path d="M382,652 674,652 674,841 382,841 382,652" stroke="#999" stroke-width="1" fill="transparent" onclick="staircase()"/>
 </a>
 <a>
  <path d="M382,444 870,444  870,324  955,324 955,150 1064,150 1064,543 1054,543 1054,841 684,841 684,642 382,642 382,444" stroke="#999" onclick="diningarea()" stroke-width="1" fill="transparent"/>
 </a>
 <a>
  <path d="M382,142 945,142 945,314 860,314 860,434 382,434 382,142" stroke="#999" stroke-width="1" fill="transparent" onclick="patio()"/>
 </a>
 <a>
  <path d="M1074,150 1350,150 1350,314 1074,314 1074,150" stroke="#999" stroke-width="1" fill="transparent" onclick="kitchen()"/>
 </a>
 <a>
  <path d="M1074,324 1350,324 1350,543 1074,543 1074,324" stroke="#999" stroke-width="1" fill="transparent" onclick="utility()"/>
 </a>
 <a>
  <path d="M1064,553 1392,553 1392,689 1064,689 1064,553" stroke="#999" stroke-width="1" fill="transparent" onclick="wc()"/>
 </a>
 <a>
  <path d="M1064,699 1392,699 1392,841 1064,841 1064,699" stroke="#999" stroke-width="1" fill="transparent" onclick="washroom()" />
 </a>

 </svg>

</div>

</body>
</html>