        // Get values from the form
$name=$_POST['name'];
$city=$_POST['city'];
$phone=$_POST['phone'];
$email=$_POST['email'];
 
$to = "nander_najera@hotmail.com";
$subject = "Cotizacion de pagina web";
$message = " Name: " . $name . "\r\n City: " . $city . "\r\n Phone: " . $phone . "\r\n Email: " . $email;
 
 
$from = "Mad Hyrax";
$headers = "From:" . $from . "\r\n";
$headers .= "Content-type: text/plain; charset=UTF-8" . "\r\n"; 
 
if(@mail($to,$subject,$message,$headers))
{
  print "<script>document.location.href='http://demo.ftutorials.com/html5-contact-form/success.html';</script>";
  // Created by Future Tutorials
}else{
  echo "Error! Please try again.";
}
