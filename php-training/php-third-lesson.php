
date_default_timezone_set("America/New_York");
Date
date("Y/m/d");

Time
date("h:i:sa");
h- 12 hour format
a- am/pm Lowercase Ante meridiem and Post meridiem

echo date("l");  //Monday,tuesday


Types of errors
1) Parse error or Syntax Error
 x="abc"; echo $x;    // Parse error: syntax error, unexpected '=' 

2) Warning   (Missing File)
    // Warning: include(gfc.php): failed to open stream: No such file or directory 
include("gfc.php");
$x= "abc";
echo $x;

3) Notice Error:    // Notice: Undefined variable: xx
$x= "abc";
echo $xx;

4) Fatal Error  //PHP Fatal error:  Uncaught Error: Call to undefined function diff()

 function add($x,$y){
    $sum= $x+$y;
    return $sum;
 }
 $x=10; $y=20;
 add($x, $y);
 //diff($x, $y);


Cookies
* cookies are data stored in small text files on your computer
* Cookies were invented to solve the problem "How to remember information about the user".

setcookie(name,value,expire,path,domain,secure,httponly)

path  "/" or specific page "/"
secure- https(true) or http(false)
httponly-  php(true),php/js (false)

Uses
* Product add to cart remain in cart even browser closed
* Track user ip location and show product accordingly.


Session
A session is a way to store information (in variables) to be used across multiple pages.
session_start();
$_SESSION["favcolor"] = "green";
echo $_SESSION["favcolor"];

// remove all session variables
session_unset(); is equal to $_SESSION= array();
unset($_SESSION['']);
// destroy the session
session_destroy();



login
session start[email], pass[];



dashboard
check user email,pass exist
redirect yo login

true
information




Managing director and ceo
ritesh.kumar@hdfcergo.com



Chairman
keki.mistry@gmail.com
keki.mistry@icloud.com
keki.mistry@hdfc.com


customer grievance(gzb)- bhim.giri1@hdfcergo.com


Anuj Tyagi (JOint managing director)
anuj.tyagi@hdfcergo.com


Renu S karnad (non-executive director)
rskarnad@hdfc.com
