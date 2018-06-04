<!Doctype html>
<html>
<head><title>Check prime no. in PHP</title>
</head>
<body>
<form action="" method="post">
Enter a number:
<input type="text" name="num" />
<input type="submit" value="Check Prime No." />
</form>
<?php

 if($_POST){
$num=$_POST['num'];
function isPrime($num)
 { 
 $orgNum=$num;       
 $flag=0;       
 for($i=2;$i<=$num/2;$i++)
 { 
 if(($num%$i)==0)
 { 
 $flag=1;
 break;
 }
 }
 if($orgNum<=1)
 echo "Given no: $orgNum is not a prime number";
 else if($flag==0) 
 echo "Give Number: $orgNum is a Prime no."; 
 else 
 echo "Given Number: $orgNum is not a prime no.";
 }
 isPrime($num);
 }

?>

</body>
</html>