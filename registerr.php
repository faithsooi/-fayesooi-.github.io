<?php
//establish connection
$connection=mysqli_connect("localhost","root","","alumny");
//check connection
if($connection==false){
    die("Error. We couldnot connect to the server".mysqli_connect_error());
}
//attempt to insert data into dbase
$fname=$_POST['fname'];
$mname=$_POST['mname'];
$surname=$_POST['lname'];
$username=$_POST['uname'];
$DOB=$_POST['dob'];
$pasw=$_POST['passw'];
$CV=$_POST['cv'];
$Email=$_POST['mail'];
$mobile=$_POST['mob'];
$twitter=$_POST['twit'];
$fb=$_POST['fb'];
$igy=$_POST['ig'];

//querying the db to accept data
$sql=" INSERT INTO regtable(fname,mname,lname,uname,dob,passw,cv,mail,mob,twit,fb,
ig) VALUES ('$fname','$mname','$surname','$username','$DOB','$pasw','$CV','$Email','$mobile','$twitter',
'$fb','$igy')";
if(mysqli_query($connection,$sql)){
    echo "Thanks, records added";
}else{
    echo "error".$sql.mysql_error($connection);
}
?>
