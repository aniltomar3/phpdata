HTML
(Hyper text markup language)

Input attributes
1) readonly -specify input field is read only
2) disbaled- specify input field unclickable
3) size - specify visible width // default size="20"
4) placeholder
5) required



<form action="" method="post" autocomplete="on">
  <label for="username">Username:</label>
  <input type="text" id="username" value="" /><br/>
  <label for="pwd">Password:</label>
  <input type="password" name="mypass" value=""/><br/>

  <label for="pwd">Email:</label>
  <input type="email" name="myemail" value="anil@gmail.com" disabled="true"/><br/>

  <label for="search">Google Search:</label>
  <input type="search" name="mysear" value=""/><br/>

  <input type="hidden" name="secretval" value="fdsff22" />

  <label for="quantity">Quantity</label>
  <input type="number" name="qty" value="" min="1" max="5" /> <br/>
   <p>Choose your favourite web language</p>
   <input type="radio" name="fav_lang" value="HTML" /> <label for="html">HTML</label>
   <input type="radio" name="fav_lang" value="PHP" />   <label for="html">PHP</label>
   <input type="radio" name="fav_lang" value="JS" /><label for="js">JS</label> <br/>

   <p>Choose your favourite Subject</p>
   <input type="checkbox" name="sub_one" value="Math" /> Maths
   <input type="checkbox" name="sub_two" value="Science" checked="checked"/>Science
   <input type="checkbox" name="sub_three" value="Computer" /> Computer <br/>

   <label for="favcolor">Choose Favourite Color</label>
   <input type="color" name="favcolor" value="#ccc" /> <br/>

   <label for="date">Birthday Date </label>
   <input type="date" name="bday" value="" /> <br/>

  <input type="reset" name="res" value="RESET"/>
  <input type="submit" name="sub" value="SEND" />
 </form> 