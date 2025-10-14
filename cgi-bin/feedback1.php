<html>
 <head>
  <title>Mid-Term Feedback (CMT502)</title>
 </head>
 <body>
 <?php
$to = "yukun.lai@cs.cf.ac.uk";
$subject = "CMT502 Feedback";
$body = "Good Features:\n" . ($_POST['item1']) . "\n\nNeed Improvements:\n" . ($_POST['item2'])
 . "\n\nFurther Points:\n" . ($_POST['item3']) . "\n\nDate/Time: " . date(DATE_RFC822);
if (mail($to, $subject, $body)) {
  echo("<p>The feedback has been received. Thank you very much.</p>");
 } else {
  echo("<p>The server has encountered some technical issues. Please try again later or report to <a href='yukun.lai@cs.cf.ac.uk'>yukun.lai@cs.cf.ac.uk</a></p>");
 }
?>
</body></html>