<?php
//establish connection
$connection=mysqli_connect("localhost","root","","alumny");
//check connection
if($connection==false){
    die("Error. We could not connect to the server".mysqli_connect_error());
}
//attempt to insert data into dbase
$Aname=$_POST['aluname'];
$yoe=$_POST['year1'];
$yog=$_POST['year2'];
$hae=$_POST['hm'];
$eteacher=$_POST['eteacher'];
$DIVI=$_POST['divi'];
$occupation=$_POST['occup'];
$add=$_POST['ddress'];
$Email=$_POST['maile'];
$mobile=$_POST['mobb'];
$pass=$_POST['pass'];

//querying the db to accept data
$sql=" INSERT INTO loyalumni(aluname,year1,year2,hm,eteacher,divi,occup,ddress,email,mobb,pass)
 VALUES ('$Aname','$yoe','$yog','$hae','$eteacher','$DIVI','$occupation','$add','$Email','$mobile','$pass')";
if(mysqli_query($connection,$sql)){
    echo "records added";
}else{
    echo "error".$sql.mysqli_error($connection);
}
?>

