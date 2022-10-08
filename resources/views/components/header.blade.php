<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script> -->

  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

<style type="text/css"> 
body{
  /*padding-top:1px;*/
  /*background: linear-gradient(124deg,#b2e082,#97c962);*/
  background-color:white;
  
}
#road{
  width: 100%;
  height: 80px;
  background-color:gray;
  /*margin:55px 0 0 0px;*/
  clear:both;
  border-radius:2px;
}

/*#tree{
  
  z-index:1;
  position:absolute;
  width:150px;
  height:150px;
  background: url(http://th07.deviantart.net/fs71/150/f/2012/176/f/4/tree_yay_by_rhubarb_leaf-d54swby.png);
  background-repeat: no-repeat;
  margin:-50px 0 0 500px ;
 }*/

.bus {
    display: inline-block;
    width: 90px;
    height: 45px;
    clear:both;
    margin:20px 0px 0px 10px;
  background-color:red;
    border-radius:17px 10px 2px 2px;  
    background: red;
    position :relative;
  animation: mymove 7s infinite normal ease-in-out;
  -webkit-animation: mymove 7s infinite normal ease-in-out;
}

@keyframes mymove {
    0% { left: -300px;}
    50% {left: 600px;}
    100% {left: 1400px;}
 }

@-webkit-keyframes mymove {
    0% { left: -300px;}
    50% {left: 550px;}
    100% {left: 1400px;}
 }

#whell1{
  position:absolute;
  display: inline-block;
  width:14px;
  height:14px;
  background-color:black;
  border-radius:80px;
  margin:37px 65px;
  background-position: center center;
  }


#whell2{
  position:absolute;
  display: inline-block;
  width:14px;
  height:14px;
  background-color:black;
  border-radius:80px;
  margin:37px 10px;
  background-position: center center;
  }

#whell3{
  position:absolute;
  display: inline-block;
  width:8px;
  height:8px;
  background-color:transparent;
  border:1.5px dotted white;
  border-radius:80px;
  margin:39px 67.1px;
  background-position: center center;
  }


#whell4{
  position:absolute;
  display: inline-block;
  width:8px;
  height:8px;
  background-color:transparent;
  border:1.5px dotted white;
  border-radius:80px;
  margin:39px 11.9px;
  background-position: center center;
  }


#win1{
  position:absolute;
  display: inline-block;
  width:12px;
  height:12px;
  background-color:white;
  border-radius:4px 0 0 0;
  margin:5px 20px 0px 8px;
  background-position: center center;
  }
#win2{
  position:absolute;
  display: inline-block;
  width:18px;
  height:12px;
  background-color:white;
  border-radius:3px 3px 0px 0px; 
  margin:5px 33px 0px 24px;
  background-position: center center;
  }

#win3{
  position:absolute;
  display: inline-block;
  width:18px;
  height:12px;
  background-color:white;
  border-radius:3px 3px 0px 0px; 
  margin:5px 54px 0 48px;
  background-position: center center;
  }

#win4{
  position:absolute;
  display: inline-block;
  width:12px;
  height:12px;
  background-color:white;
  border-radius:0 4px 0 0;
  margin:5px 54px 0 72px;
  background-position: center center;
  }

#line{
    position:relative;
    width: 1200px;
     top:40px;
    height: 1px;
    clear:both;
    margin-left: auto;
    margin-right:auto;
  border:1px dashed white;
}

#fuel{
  position:absolute;
  display: inline-block;
  width:5px;
  height:1.5px;
  background-color:#1D1F20;
  border-radius:0px;
  margin:42px -5px;
  background-position: center center;
  transform:rotate(-18deg);  
}

#light{
  z-index:1;
  position:absolute;
  display: inline-block;
  width:4px;
  height:7.8px;
  background-color:black;
  border-radius:80px;
  margin:27px 90px;
  border-radius: 0 90px 90px 0;
  background:#f93100;
 
}

#up1{
  position:absolute;
  display: inline-block;
  width:50px;
  height:2px;
  background-color:white;
  border-radius:4px 4px 0 0;
  margin:-5px 0px 0px 19px;
  background-position: center center;
  }

#up2{
  position:absolute;
  display: inline-block;
  width:2px;
  height:5px;
  background-color:white;
  margin:-5px 0px 0px 26px;
  background-position: center center;
  }

#up3{
  position:absolute;
  display: inline-block;
  width:2px;
  height:5px;
  background-color:white;
  margin:-5px 0px 0px 60px;
  background-position: center center;
  }

#foggy{
  width:4px;
  height:7.8px;
  border-right:200px solid #f7f771;
  border-top:20px solid transparent;
  border-left:20px solid transparent;
  border-bottom:20px solid transparent;
  border-radius:100px;
  margin:90px 60px;
  position:absolute;
  margin:7px 68px;


}

#cloud1{
  width:100px;
  height:100px;
  margin:-90px;
  position:absolute;
  background: url(http://images.clipartpanda.com/clouds-background-png-cloud-edition.png);
  background-size: 65% 45%;
   background-repeat: no-repeat;
  animation: cloudy 20s infinite normal;
  -webkit-animation: cloudy 20s infinite normal linear;
}

@keyframes cloudy{
    0% { left: -100px;}
    100% {left: 1320px;}
 }

@-webkit-keyframes cloudy {
    0% { left: -100px;}
    100% {left: 1320px;}
 }

#cloud2{
  opacity:0.7;
   width:100px;
  height:100px;
  margin:-120px;
  position:absolute;
  background: url(http://images.clipartpanda.com/clouds-background-png-cloud-edition.png);
  background-size: 65% 45%;
   background-repeat: no-repeat;
  animation: cloudy2 23s infinite reverse;
  -webkit-animation: cloudy2 23s infinite reverse  ease-in;
}

@keyframes cloudy2{
    0% { left: -100px;}
    100% {left: 1300px;}
 }

@-webkit-keyframes cloudy2 {
    0% { left: -100px;}
    100% {left: 1300px;}
 }
  

#cloud3{
opacity:0.8;
  width:100px;
  height:100px;
  margin:-80px;
  position:absolute;
  background: url(http://images.clipartpanda.com/clouds-background-png-cloud-edition.png);
  background-size: 70% 48%;
   background-repeat: no-repeat;
  animation: cloudy3 40s infinite normal;
  -webkit-animation: cloudy3 40s infinite normal linear;
}

@keyframes cloudy3{
    0% { left: -100px;}
    100% {left: 1320px;}
 }

@-webkit-keyframes cloudy3 {
    0% { left: -100px;}
    100% {left: 1320px;}
 }

#cloud4{
      -webkit-transform: rotateY(180deg); 
    transform: rotateY(180deg);
  opacity:1;
   width:100px;
  height:100px;
  margin:-80px;
  position:absolute;
  background: url(http://images.clipartpanda.com/clouds-background-png-cloud-edition.png);
  background-size: 85% 70%;
   background-repeat: no-repeat;
  animation: cloudy4 38s infinite reverse;
  -webkit-animation: cloudy4 38s infinite reverse linear;
}

@keyframes cloudy4{
    0% { left: -100px;}
    100% {left: 1300px;}
 }

@-webkit-keyframes cloudy4 {
    0% { left: -100px;}
    100% {left: 1300px;}
 }
 



</style>




</head>
<body>
<div style="background-color: #b3e6ff;">
<center>
           
  <h1 style="font-family:Brush Script MT;font-size:60px;color:red;margin: 0; display: inline-block">BOOK MY BUS</h1></center></div>
  <div class="">
  <div id = 'road' style="margin: 0; display: inline-block;">
    <div id = 'cloud1'></div>
      <div id = 'cloud2'></div>
      <div id = 'cloud3'></div>
      <div id = 'cloud4'></div>
      <div id = 'line'></div>
        <div id = 'tree'></div>   
        <div class = 'bus'>
          <div id = 'up1'></div>
          <div id = 'up2'></div>
          <div id = 'up3'></div>
          <div id = 'win1'></div>
          <div id = 'win2'></div>
          <div id = 'win3'></div>
          <div id = 'win4'></div>
          <div id = 'whell1'></div>
          <div id = 'whell2'></div>
          <div id = 'whell3'></div>
          <div id = 'whell4'></div>
          <div id = 'fuel'></div>
          <div id ='light'></div>
          <div id ='foggy'></div>
 
</div>
  </div> 
</div>
</body>
</html>