 php (hypertext preprocessor)<br/>
created by canadian programmer Rasmus lerdorf in 1994 <br/>
* It allows web developers to create dynamic content that interact with databases.<br/>
* It is used for developing web based software applications<br/><br/>


1) Easy and simple to learn<br/> 
2) Extremely flexible- if change occur don't write fresh code.<br/>
3) Cost Efficient- open source language<br/>
<br/><br/> 
Disadvantages
1) Security issues<br/>
* xss- cross site scripting<br/>
* sql injection<br/>

<br/>
Loops
<br/>
for loop- loop through a block of code specified number of times.<br/>
while loop- loop through a block of code as long as specified condition is true.<br/>
do while loop- loop through a block of code once and then repeat the loop as long as specified condition is true.<br/>
<br/>

<?php 
 // for loop
// show name of all friends in fb list

$arr= array('anil','amit','deepa','mishka','preeti','aman','naman','ashneer');
for($i=0;$i<8; $i++)
{
	echo $arr[$i];
	echo "<br/>";
}


/* music stop
while(user does not press the stop)
{
	get the next song
	play the song
}
*/

/*

do{
	alam start ringing
}while{
	user stop the alarm
}


*/
<?php 
// $x = 1;

// do {
//   echo "The number is: $x <br>";
//   $x++;
// } while ($x <= 5);
?>

for($i=1;$i<=5;$i++)
{
   for($j=0; $j<$i; $j++)
   {
   	 echo '*';
   }
   echo "<br/>";
}


for($i=0; $i<5; $i++)
{
  for($j=5; $j>$i; $j--)
  {
  	echo "*";
  }
 echo "<br/>"; 
}