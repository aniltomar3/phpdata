Output Buffering
It is method to tell the php engine to hold the output data before sending it to browser.

header("Location: yoururlhere")

1) ob_start() - creates an output buffer

2) ob_clean()/Deletes all content but output buffering on    ob_end_clean- Deletes the buffer contents & turn off output buffering
  ob_get_clean- Retrieve the buffer contents & turn off output buffering  // ob_get_clean = ob_get_contents() + ob_end_clean()
// It is used when you have a chunk of html but want to use it later.
   ob_start();
      echo "This is sensitive content or contains error";
      ob_clean();// some mistake remove this content
      echo "This is clean intended output user will see";
   $final_output =  ob_get_clean();  echo $final_output;]

3) echo "Hello"; 
 $x= ob_get_contents(); //return content of topmost output buffer.

4)ob_flush() -  prints current data in browser but keep buffer active for future echo
  ob_end_flush- prints current data in browser and deletes buffer session.

5) flush()- In many modern server ob_flush() alone will not instantly show the text on the user's screen. use flush() after ob_flush()