<!DOCTYPE html>
<!-- saved from url=(0037)http://192.168.42.1/feedback/response -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        
          
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="description" content="">
            <meta name="author" content="Souvik Das">
            <title>Love And Latte - Feedback</title>
            
            <link href="http://192.168.42.1/assets/css/images/logo.png" rel="shortcut icon">
            <link type="text/css" href="http://192.168.42.1/assets/css/jquery-ui-1.10.4.css" rel="stylesheet">
            
            <link type="text/css" href="http://192.168.42.1/assets/css/font-awesome.min.css" rel="stylesheet">
            <link type="text/css" href="http://192.168.42.1/assets/css/star-rating.min.css" rel="stylesheet">
            <link type="text/css" href="http://192.168.42.1/assets/css/theme.min.css" rel="stylesheet">
            <link type="text/css" href="http://192.168.42.1/assets/css/feedback.css" rel="stylesheet">   
            <link href="http://192.168.42.1/assets/css/css" rel="stylesheet">
                                    
            
    </head>
       
    <body>
          <div class="site-wrapper">
            <div class="site-wrapper-inner">
                       <div class="container">
                           <div class="header clearfix">
                               <center>
                                   <img id="logo" src="http://192.168.42.1/assets/css/images/logo.png" width="100" height="90" class="img-responsive" alt="Generic placeholder thumbnail">
                                  <h3>Love &amp; Latte</h3><hr>
       
                               </center>
                           </div>
                       </div> 
                         <div class="container">
                                <div class="row">
                                 <div class="col-xs-12">
                                     <a style="color:white" href="http://192.168.42.1/index.php"> <h3 style="text-align: left"><span >&#xab;</span>&nbsp;Back</h3></a>
                                 </div>
                              </div>
                                </div>
                                 <div class="container">
                             <div class="row">
                                 <center>
                                 <h2><b>Thank You for you feedback</b></h2>
                                 </center>
                             
                                 
    
           </div>

                             </div>
                                   <br>
                               <center>
                                   Powered by <img src="http://192.168.42.1/assets/css/images/yourtake.png" width="50" height="25">
                               </center>
                         </div>
                </div>
        
    <center>
 <?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$dbc = mysql_connect('localhost', 'root', 'root');

if(!$dbc){
    die("Not connected".mysql_error());
}
$db_selected = mysql_select_db("yourtake",$dbc);

if(!$db_selected){
    die("DB Not selected".mysql_error());
}

$name=  mysql_real_escape_string($_POST['name']);
$email=  mysql_real_escape_string($_POST['email']);
$number=  mysql_real_escape_string($_POST['number']);
$visit=  mysql_real_escape_string($_POST['visit']);
$service = mysql_real_escape_string($_POST['service']);
$menu = mysql_real_escape_string($_POST['menu']);
$ambiance = mysql_real_escape_string($_POST['ambiance']);
$food = mysql_real_escape_string($_POST['food']);
$beverage = mysql_real_escape_string($_POST['beverage']);
$overall = mysql_real_escape_string($_POST['overall']);
$refer= mysql_real_escape_string($_POST['refer']);
$better= mysql_real_escape_string($_POST['better']);
$subscribe= mysql_real_escape_string($_POST['subscribe']);
$ipaddress= mysql_real_escape_string($_SERVER['REMOTE_ADDR']);
$date= date("Y-m-d");

   $retval1 = mysql_query( 'INSERT INTO client_reply '.'(name,number, email, date, answer,question,ipaddress,type) '.'VALUES ("'.$name.'", "'.$number.'","'.$email.'", "'.$date.'","'.$visit.'","visit","'.$ipaddress.'","" )', $dbc );
    $retval2 = mysql_query( 'INSERT INTO client_reply '.'(name,number, email, date, answer,question,ipaddress,type) '.'VALUES ("'.$name.'", "'.$number.'","'.$email.'", "'.$date.'","'.$service.'","service","'.$ipaddress.'","" )', $dbc );
    $retval3 = mysql_query( 'INSERT INTO client_reply '.'(name,number, email, date, answer,question,ipaddress,type) '.'VALUES ("'.$name.'", "'.$number.'","'.$email.'", "'.$date.'","'.$menu.'","menu","'.$ipaddress.'","" )', $dbc );
$retval4 = mysql_query( 'INSERT INTO client_reply '.'(name,number, email, date, answer,question,ipaddress,type) '.'VALUES ("'.$name.'", "'.$number.'","'.$email.'", "'.$date.'","'.$ambiance.'","ambiance","'.$ipaddress.'","" )', $dbc );
$retval5 = mysql_query( 'INSERT INTO client_reply '.'(name,number, email, date, answer,question,ipaddress,type) '.'VALUES ("'.$name.'", "'.$number.'","'.$email.'", "'.$date.'","'.$food.'","food","'.$ipaddress.'","" )', $dbc );
$retval6 = mysql_query( 'INSERT INTO client_reply '.'(name,number, email, date, answer,question,ipaddress,type) '.'VALUES ("'.$name.'", "'.$number.'","'.$email.'", "'.$date.'","'.$beverage.'","beverage","'.$ipaddress.'","" )', $dbc );
$retval7 = mysql_query( 'INSERT INTO client_reply '.'(name,number, email, date, answer,question,ipaddress,type) '.'VALUES ("'.$name.'", "'.$number.'","'.$email.'", "'.$date.'","'.$overall.'","overall","'.$ipaddress.'","" )', $dbc );
$retval8 = mysql_query( 'INSERT INTO client_reply '.'(name,number, email, date, answer,question,ipaddress,type) '.'VALUES ("'.$name.'", "'.$number.'","'.$email.'", "'.$date.'","'.$refer.'","refer","'.$ipaddress.'","" )', $dbc );
$retval9 = mysql_query( 'INSERT INTO client_reply '.'(name,number, email, date, answer,question,ipaddress,type) '.'VALUES ("'.$name.'", "'.$number.'","'.$email.'", "'.$date.'","'.$better.'","better","'.$ipaddress.'","" )', $dbc );
$retval10 = mysql_query( 'INSERT INTO client_reply '.'(name,number, email, date, answer,question,ipaddress,type) '.'VALUES ("'.$name.'", "'.$number.'","'.$email.'", "'.$date.'","'.$subscribe.'","subscribe","'.$ipaddress.'","" )', $dbc );

if(!($retval1&&$retval2&&$retval3&&retval4&&retval5&&$retval6&&$retval7&&$retval8&&$retval9&&$retval10)){
    
    die("Not updated".mysql_error());
}
$dbc->close();
echo '~'
   ?>
    </center>
</body></html>