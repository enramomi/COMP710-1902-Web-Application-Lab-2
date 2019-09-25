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
     <h4 style="text-align:center">Fill in the details to Login</h4> 
     <div style="text-align:center">
        <img src="{{ URL::to('/assets/images/mainImage.png') }}">
    </div>
     <table align="center"  style="padding: 25px" >
            <tr>
                <td>
                   First Name
                </td>
                <td>
                    :
                </td>
                <td>
                    <input type="text" name="first_Name" required>
                </td>
            
            </tr>
            <tr>
                <td>
                   Last Name
                </td>
                <td>
                    :
                </td>
                <td>
                <input type="text" name="last_Name" required>
                </td>
            </tr>
            <tr>
                <td>
                  Password
                </td>
                <td>
                    :
                </td>
                <td>
                <input type="password" name="password" required>
                </td>
            </tr> 
            <tr>
                <td>
                   e-Mail
                </td>
                <td>
                    :
                </td>
                <td>
                    <input type="text" name="eMail" required>
                </td>
            
            </tr>

            <tr>
                <td>
                  Phone Number
                </td>
                <td>
                    :
                </td>
                <td>
                    <input type="text" name="phone_Number" required>
                </td>
            </tr>

</table>
<p style="text-align:center">
	<button type="submit" class="btn" name="registration">Click To Register</button></p>
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