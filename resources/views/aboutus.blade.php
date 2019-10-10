<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <title>Welcome to Boss Cuts</title>
    <link rel="stylesheet" type="text/css" href="Style.css">

 <!-- Styles -->
 <style>
.{
    margin: 0px;
    height: 0px;
  }
  
  body {
    font-family: Verdana,sans-serif;
    font-size: 0.8em;
  }
  
  div#Login{
    text-align: center;
  
  }
  
  div#tableUser{
    align: center;
     padding: 75px;
  }
  
  div#tableRegister{
    text-align: center;
  }
  
  div#header{
    padding: 0px;
    color: white;
    text-align: left;
    background-color: black;
  }
  div#footer { 
    padding: 5px;
    width: 100%;
    bottom: 0px;
    color: white;
    text-align: center;
    background-color: black;
  } 
  
</style> 
  </head>
  <body>    
  <div id="header">
      <a href="/">
            <img src="{{ URL::to('/assets/images/webLogo.png') }}" width="100" height="60">
        </a>
        <div style="text-align:right">
        <a href="/" style="colour:white">Home</a>
        <a href="aboutus">About Us</a>
        <a href="gallery">Gallery</a>
        <a href="services">Services</a>
        <a href="contactus">Contact Us</a>      
        <a href="login">Login</a>  
        </div>   
    </div>
    <br>
    <div style="text-align:center">
        <img src="{{ URL::to('/assets/images/mainImage.png') }}">
    </div>
<div style=" overflow : scroll; text-align:center">
    <h3>YOUR LOCAL BARBER</h3>
    <p>BarberShopCo. is the largest and fastest growing mens grooming company.  
    In 2014 founders Adam Johanson and John Erkkila could see a significant gap in the growing mens grooming market.</p>
    <p>The first store opened in Millwater, north of Auckland in January 2015.  
      By 2016 more than half a dozen BarberShopCo outlets opened across Auckland, 
      creating a real buzz in the market and challenging the standard of mens grooming.  
      By focusing on ‘the thousand details’ that make up the client experience, 
      BarberShopCo was able to grow at a blistering pace with 10 stores open by the end of 2016. </p>
      <p>
      In 2017 the first store opened outside of Auckland in Hamilton, 
      and the pace of growth has steadily climbed to 24 stores in 2019, with outlets popping up in Cambridge, 
      Napier and New Plymouth. 
</p>
<p>
The company owns and operates numerous stores while maintaining a franchise structure to provide equity 
opportunities for employees, partners and investors.  
To ensure world class standards of consistency across a growing network, 
the company has established broad infrastructure including the establishment of Promap NZ Ltd., 
The Advanced Academy of Barbering, and wholesale distribution arm Custom Distributors. 
</p>
<p>
In 2019 we were honoured to be selected as a Finalist in the Westpac Business Awards for Employer of the Year.

      </p>
     
     
    </div>
    <div id="footer">
      <p>© COPYRIGHT BOSSCUTS NEW ZEALAND 2019. ALL RIGHTS RESERVED. &nbsp&nbsp&nbsp 
      <a href="https://www.facebook.com/bosscutsnz/"> 
          <img src="{{ URL::to('/assets/images/Facebook-icon.png') }}" width="30" height="30"> 
        </a>&nbsp&nbsp
          <a href="https://twitter.com/hashtag/bosscuts">
          <img src="{{ URL::to('/assets/images/Twitter-icon.png') }}" width="30" height="30"> 
          </a> &nbsp
          <a href="https://www.instagram.com/explore/tags/bosscuts/">
          <img src="{{ URL::to('/assets/images/Instagram-icon.png') }}" width="30" height="30"> 
        </a> &nbsp
          <a href="https://za.pinterest.com/ebonyelement29/boss-cuts/">
          <img src="{{ URL::to('/assets/images/Pinintrest-icon.png') }}" width="30" height="30">   
        </a> 
        </p>
    </div>
  </body>
  </html>