 <?php
 $currentdate=date('Y-m-d');
$sql="SELECT * from project where DATE(DOB)=CURDATE() ";

$sqll="SELECT * from project";
if($records=mysqli_query($dbcon,$sql))
{
	
  while($employee=mysqli_fetch_assoc($records))
  {
	  echo "hi";
	 
//use PHPMailer\PHPMailer\PHPMailer;
//use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mail = new PHPMailer(true);                              
try {
   
    $mail->SMTPDebug = 1;                                
    $mail->isSMTP();                                      
    $mail->Host = 'smtp.gmail.com'; 
    $mail->SMTPAuth = true;                              
    $mail->Username = 'example@abc.com';             
    $mail->Password = 'abcdef';                       
    $mail->SMTPSecure = 'tls';                           
    $mail->Port = 587;                                   
    
    $mail->setFrom('asaksham23@gamil');
	$fname=$employee['FIRST_NAME'];
	if($rd=mysqli_query($dbcon,$sqll))
	{
	while($emp=mysqli_fetch_assoc($rd))
	{
		
		echo "hello";
    $mail->addAddress("emp['EMAILID']");     
	}}
                  
 
   //$name=employee['FIRST_NAME'];
 
    $mail->isHTML(true);       
    $mail->Subject = 'Birthday';
	
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}
  }
	  
	  

  }

else
{
	echo "error";
}
?>
