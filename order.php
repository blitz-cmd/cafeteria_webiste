<!DOCTYPE html>
<html>
<head>
  <title>Order Now</title>

  
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="hp.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">



</head>
<body style="background-color: black;">
  <div>
<div class="topnav">
      <a class="active" href="index.php">Home</a>
      <a href="#news">Offers</a>
      <a href="#contact">Contact</a>  
      <a href="#about">About</a>
      <?php 
            session_start();

            if(isset($_SESSION['username'])){
                    echo "<a href='logout.php' style='float: right;'>Logout</a>";
                    echo "<a href='#' style='float: right;'>{$_SESSION['username']}</a>";                    
            }else{
              header('location:index.php');
                    // echo "<a href='signup1.php' style='float: right;'>Signup</a>";
                    // echo "<a href='login.php' style='float: right;'>Login</a>";
            }
      ?></div>

<div style="color:red;">
  
  <marquee behavior="scroll" direction="left" >Check out latest covid-19 status in your area before ordering. Delivery time may vary according to restriction in your area. Maharshtra:<span id="data1"></span>,  Mumbai:<span id="data2"></span>,  Pune:<span id="data3"></span>,  Thane:<span id="data4"></span>,  Satara:<span id="data5"></span></marquee>
</div>

<h1 style="text-align: center;color: white;font-size: 70px;text-decoration: underline;">Order Now</h1></div>

<table class="center" style="width:80%;color: white;justify-content: center;">
  <tr>
    <th style="font-family: 'Pacifico', cursive;letter-spacing: 4px;
    font-size: xx-large;">Coffee</th>
    <th style="font-family: 'Pacifico', cursive;letter-spacing: 4px;
    font-size: xx-large;">Name</th> 
    <th style="font-family: 'Pacifico', cursive;letter-spacing: 4px;
    font-size: xx-large;">Price</th>
    <th style="font-family: 'Pacifico', cursive;letter-spacing: 4px;
    font-size: xx-large;">Quantity</th>    
    <th style="font-family: 'Pacifico', cursive;letter-spacing: 4px;
    font-size: xx-large;">Amount</th>
  </tr>
  <tr>
    <td class="ai"><img class="gg" src="https://i.ndtvimg.com/i/2016-01/coffee_625x350_51453530965.jpg"></td>
    <td class="bi">Cafe Mocha </td>
    <td class="ci"><p>Rs.<span id="g">270</span></p></td>
    <td class="di"><a href="javascript:void();" id="md" style="color:white;text-decoration: none;" class="fas fa-chevron-circle-down"></a><span id="z">0</span><a href="javascript:void();" id="m" style="color:white;text-decoration: none;" class="fas fa-chevron-circle-up"></a></td>
    <!-- <td><button ><i id="m" class="fas fa-chevron-circle-up"></i></button><span id="z">0</span></td> -->
    <td class="ui"><p>Rs.<span id="a">0</span></p></td>
  </tr>
  <tr>
    <td class="ai"><img class="gg" src="https://i.ndtvimg.com/i/2015-09/coffee-625_625x350_61443418478.jpg"></td>
    <td class="bi">Cappuccino</td>
    <td class="ci"><p>Rs.<span id="h">300</span></p></td>
    <td class="di"><a href="javascript:void();" id="nd" style="color:white;text-decoration: none;" class="fas fa-chevron-circle-down"></a><span id="x">0</span><a href="javascript:void();" id="n" style="color:white;text-decoration: none;" class="fas fa-chevron-circle-up"></a></td>
    <td class="ui"><p>Rs.<span id="s">0</span></p></td>
  </tr>
  <tr>
    <td class="ai"><img class="gg" src="https://i.ndtvimg.com/i/2016-01/coffee_625x350_51453530928.jpg"></td>
    <td class="bi">Latte</td>
    <td class="ci"><p>Rs.<span id="gg">190</span></p></td>
    <td class="di"><a href="javascript:void();" id="bd" style="color:white;text-decoration: none;" class="fas fa-chevron-circle-down"></a><span id="c">0</span><a href="javascript:void();" id="b" style="color:white;text-decoration: none;" class="fas fa-chevron-circle-up"></a></td>
    <td class="ui"><p>Rs.<span id="d">0</span></p></td>
  </tr>
  <tr>
    <td class="ai"><img class="gg" src="https://www.storypick.com/wp-content/uploads/2016/03/tumblr_o1osnbtOHH1v64edwo1_1280.jpg"></td>
    <td class="bi">Mocha</td>
    <td class="ci"><p>Rs.<span id="hh">230</span></p></td>
    <td class="di"><a href="javascript:void();" id="mmd" style="color:white;text-decoration: none;" class="fas fa-chevron-circle-down"></a><span id="v">0</span><a href="javascript:void();" id="mm" style="color:white;text-decoration: none;" class="fas fa-chevron-circle-up"></a></td>
    <td class="ui"><p>Rs.<span id="f">0</span></p></td>
  </tr>
</table>


<div style="text-align:center;"><h1 style="color: white;margin-bottom: 100px;display: inline-block;padding-right: 219px;
    margin-left: 716px;">Total=Rs.<span id="qqq">0</span></h1><button class="button">Buy Now</button></div>
<!-- <button style="color: blue;float: right;">Buy Now</button> -->


</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
<?php
include "script.php";
?>
<script type="text/javascript" src="hp.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<script>
  $(document).ready(function(){
    init()

    function init(){
      var url="https://api.covidindiatracker.com/state_data.json"
      var datama=''
      var datamu=''
      var datapu=''
      var datath=''
      var datasa=''
      $.get(url,function(data){
        console.log(data[0].districtData);

        datama=`
        ${data[0].active}`
        $('#data1').html(datama)
        
        datamu=`
        ${data[0].districtData[1].confirmed}`
        $('#data2').html(datamu)

        datapu=`
        ${data[0].districtData[0].confirmed}`
        $('#data3').html(datapu)

        datath=`
        ${data[0].districtData[2].confirmed}`
        $('#data4').html(datath)

        datasa=`
        ${data[0].districtData[11].confirmed}`
        $('#data5').html(datasa)

      })
    }
  })
</script>
</html>