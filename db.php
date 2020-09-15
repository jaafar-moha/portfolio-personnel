
<?php
$db=mysqli_connect("localhost","root","","portfolioDB");
if($db){
   echo "databse is connected !";
}else{
   echo "something is wrong with database !";
}