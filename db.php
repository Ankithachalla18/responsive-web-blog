<?php
$topic=$_POST['topic'];
$title=$_POST['title'];
$matter=$_POST['matter'];
$uploadimage=$_POST['uploadimage'];
if(!empty($topic)||!empty($title)||!empty($matter)||!empty($uploadimage))
{
  $host="localhost";
  $dbUsername="root";
  $dbPassword="";
  $dbname="blog";
  $conn=new mysqli($host,$dbUsername,$dbPassword,$dbname);
  if(mysqli_connect_error())
  {
    die('connection error('.mysqli_connect_errno().')'.mysqli_connect_error());
  }
  else{
    $INSERT="INSERT INTO `blogtable`(`id`, `topic`, `title`, `content`, `image`, `date`) VALUES (NULL,'$topic','$title','$matter','$uploadimage', current_timestamp())";
    if($conn->query($INSERT)==TRUE)
    {
    echo "post added sucessfully";
  }
  else {
    echo "Error: ".$INSERT."<br>".$conn->error;
  }
    $conn->close();
  }
}
else{
  echo "all field are required";
  die();
}
?>
