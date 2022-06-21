<?php
//establish connection
$connection=mysqli_connect("localhost","root","","alumny");
//check connection
if($connection==false){
    die("Error. We couldnot connect to the server".mysqli_connect_error());
}
?>
<table border ="1" cellspacing="0" cellpadding="8">
  <tr>
    <th>S.N</th>
    <th>Alumnus Name</th>
    <th>Year of enrolment</th>
    <th>Year of graduation</th>
    <th>Headmaster/ Mistress at time of graduation or enrolment</th>
    <th>Famous teacher at graduation</th>
    <th>CSSEE Results</th>
    <th>Current occupation</th>
    <th>Address</th>
    <th>Email</th>
    <th>Mobile Number</th>
  </tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "alumny");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    }
$query = "SELECT * FROM loyalumni";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
  $sn=1;
  while($data = mysqli_fetch_assoc($result)) {
 ?>
 <tr>
   <td><?php echo $sn; ?> </td>
   <td><?php echo $data['aluname'] ?> </td>
   <td><?php echo $data['year1']; ?> </td>
   <td><?php echo $data['year2']; ?> </td>
   <td><?php echo $data['hm']; ?> </td>
   <td><?php echo $data['eteacher']; ?> </td>
   <td><?php echo $data['divi']; ?> </td>
   <td><?php echo $data['occup']; ?> </td>
   <td><?php echo $data['ddress']; ?> </td>
   <td><?php echo $data['email']; ?> </td>
   <td><?php echo $data['mobb']; ?> </td>
   <td><?php echo $data['pass']; ?> </td>
   
  </tr>
 <?php
  $sn++;}} else { ?>
    <tr>
     <td colspan="8">No data found</td>
    </tr>

 <?php } ?>
  </table>
  <div>
   <button><a href="logout.php">Log out</a></button>
  </div>