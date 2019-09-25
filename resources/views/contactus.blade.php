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
    font-size: 0.9em;
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
    background-color: darkcyan;
  }
  div#footer {
    padding: 5px;
    width: 100%;
    bottom: 0px;
    color: white;
    text-align: center;
    background-color: darkcyan;
  } 
</style> 
  </head>
  <body>    
  <div id="header">
      <a href="index">
            <img src="{{ URL::to('/assets/images/webLogo.png') }}" width="100" height="60"> 
        </a> 
        <div style="text-align:right">
        <a href="index" style="colour:white">Home</a>
        <a href="aboutus">About Us</a>
        <a href="gallery">Gallery</a>
        <a href="services">Services</a>
        <a href="contactus">Contact Us</a>      
        <a href="login">Login</a>  
        </div>   
    </div>
    <div>
     <h3 style="text-align:center">Get in Touch With Us</h3>
     </div>
     <br>
     <table style="width:95% ">
         <tr>
             <td  style="text-align:center">
             <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3154.0615891592997!2d175.27698631508443!3d-37.765154039036055!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6d6d1884f6c5c635%3A0xa39934df5e809998!2sBoss%20Cuts%20Barber%20Shop!5e0!3m2!1sen!2snz!4v1569407817154!5m2!1sen!2snz" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
             </td>
             <td  style="text-align:center" valign="top">
             <br>
             <br>
               <h4>Contact Us:</h4>
               <h4>Boss Cuts Barber Shop</h4>
               <h5>174 Clarkin Road, 
                   Fairfield,
                   Hamilton
                   3214 <br>
                   <h5>Phone: 07-855 6874</h5>
                   <h5>e-Mail: bosscuts@barber-shop.com</h5>
                   <h5>Business hours: Open all days 9am - 5pm</h5>
               </h5>
             </td>
        </tr>
    </table>
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