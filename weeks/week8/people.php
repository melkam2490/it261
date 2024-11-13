<?php

include('config.php');
include('./includes/header.php');
?>

<main>
  <h1> Welcome to my people page</h1>
<?php
$sql= 'SELECT *  FROM  people';
// we need to connect with data base

$iConn= mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD,DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));
$result=mysqli_query($iConn, $sql)  or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

// we have a row, which  transSlate in to an array
//if our result is greater than 0, we are happy
if(mysqli_num_rows($result)> 0){
// we are going  to  add a while loop
while($row= mysqli_fetch_assoc($result)){
  echo '
  <h3>Information About: '.$row['first_name'].' '.$row['last_name'].'</h3>
  <ul>
      <li>Email: '.$row['email'].'</li>
      <li>Birthdate: '.$row['birthdate'].'</li>
  </ul>
  <p>For more information about '.$row['first_name'].', click <a href="people-view.php?id='.$row['people_id'].'">here</a></p>
  ';
} // end while loop

} else{
  echo 'Nobody home!!!';
}
// we are going to releas the server
@mysqli_free_result($result);
@mysqli_close($iConn);
?>
</main>


<aside>


</aside>
</div>
<!-- end a wrapper -->



 <?php

 include('./includes/footer.php');



