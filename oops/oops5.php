<?php 
// Abstract class- When it has name method but need it's child classes to fill out the tasks.
// use Abstract here because you want hybrid approach force rule (send($to,$message)) and if want optional use(format)
abstract class Notification{
    public $name;
  public function format($message){
    return "⚠️ ALERT: " . $message;
  }

  abstract protected function send($to,$message);
}

class Email extends Notification{
    public function send($to,$message){
        echo "Sending email to: {$to}:".'<br/>'.$this->format($message);
    }
}

class Sms extends Notification{
    public function send($to,$message){
        echo "Sending SMS to: {$to}:".'<br/>'.$this->format($message);
    }
}

$email = new Email();
$email->send('demo@gmail.com','password Changed');
echo "<br/>"; echo "<br/>";echo "<br/>";
$sms= new Sms();
$sms->send('9898989898','Your code: 12345');

// school management
// fees, library, cyclestand


// call by value
echo "<br/>";echo "<br/>";
function increment($n){
	$n= $n+1;
	echo "$n"."<br/>";
}

$n=1;
increment($n);
echo $n;