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
    <div>
     <h4 style="text-align:center">Below are the Sample Images We do at our store:</h4> 
         <table style="width:100%; text-align:center"  >
             <tr>
                <td  >
                <img src="{{ URL::to('/assets/gallery_images/Gallery_1.jpg') }}" width="220" height="220"> 
                <h5>Cut & Style</h5>
                </td>
                <td>
                <img src="{{ URL::to('/assets/gallery_images/Gallery_2.jpg') }}" width="220" height="220"> 
                <h5>Scissor Cut & Beard Style</h5>
                </td>
                <td>
                <img src="{{ URL::to('/assets/gallery_images/Gallery_3.jpg') }}" width="220" height="220"> 
                <h5>Kids Cut & Style</h5>
                </td>
            </tr>
            <tr>
                <td  >
                <img src="{{ URL::to('/assets/gallery_images/Gallery_4.jpg') }}" width="220" height="220"> 
                <h5>Razor Fade & Style</h5>
                </td>
                <td>
                <img src="{{ URL::to('/assets/gallery_images/Gallery_5.jpg') }}" width="220" height="220"> 
                <h5>Beard Trim and Scissors Cut </h5>
                </td>
                <td>
                <img src="{{ URL::to('/assets/gallery_images/Gallery_6.jpg') }}" width="220" height="220"> 
                <h5>Kids Side Cut</h5>
                </td>
            </tr>
            <tr>
                <td  >
                <img src="{{ URL::to('/assets/gallery_images/Gallery_7.jpg') }}" width="220" height="220"> 
                <h5>Buzz Cut & Neat</h5>
                </td>
                <td>
                <img src="{{ URL::to('/assets/gallery_images/Gallery_8.jpg') }}" width="220" height="220"> 
                <h5>Kids Style</h5>
                </td>
                <td>
                <img src="{{ URL::to('/assets/gallery_images/Gallery_9.jpg') }}" width="220" height="220"> 
                <h5>Kids Scissor Cut 360 degrees</h5>
                </td>
            </tr>
            <tr>
                <td  >
                <img src="{{ URL::to('/assets/gallery_images/Gallery_10.jpg') }}" width="220" height="220"> 
                </td>
                <td>
                <img src="{{ URL::to('/assets/gallery_images/Gallery_11.jpg') }}" width="220" height="220"> 
                </td>
                <td>
                <img src="{{ URL::to('/assets/gallery_images/Gallery_12.jpg') }}" width="220" height="220"> 
                </td>
            </tr>
         </table>
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