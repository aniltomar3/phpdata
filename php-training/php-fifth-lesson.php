Output Buffering
It is method to tell the php engine to hold the output data before sending it to browser.

header("Location: yoururlhere")

1) ob_start() - creates an output buffer
2) ob_clean()/Deletes all content but output buffering on    ob_end_clean- Deletes all content & turn off output buffering
// It is used when you have a chunk of html but want to use it later.

3) echo "Hello"; 
 $x= ob_get_contents(); //return content of topmost output buffer.

4)ob_flush() first output content then clear buffer / ob_end_flush()- delete topmost output buffer 
ob_start()
echo "this output will be send to browser";
ob_flush();  // It's printed here, because ob_flush()/ ob_end_flush "prints" what's in the buffer.   

5) flush()- Request server to send it's currently buffered output to browser.