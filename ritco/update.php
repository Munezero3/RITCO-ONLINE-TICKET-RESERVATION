<?php 
include('connect.php');
include('account_logout.php');
?>
<html>
  <head>
    <title>          </title>
<style>
  body{
    background-image: url('images/mize.png');
    background-repeat: no-repeat;
    background-size: cover;
height:50%;
padding-top:10px;
padding-bottom:10px;
margin:auto;
}
form {
  margin-left: 50px;
      float:left;
         max-width: 300px; 
      border: 4px solid black;
      background-color:gray;
      -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s;
      border-top-right-radius: 70px;
  border-top-left-radius:70px;
}
      input{
      width: 90%;
      padding: 10px 5px;
      border-bottom: 1px solid black;
      border-radius: 10px 10px 10px 10px;
      outline:none;
      margin: 10px 10px 10px 10px;
      }
      input[type=file]{
      width: 90%;
      padding: 10px 5px;
      margin: 10px 10px 10px 10px;
      }
   button {
      background-color: yellowgreen;
      color: white;
      padding: 10px 0;
      margin: 10px 0;
      border: none;
      cursor:pointer;
      width: 40%;
      padding:auto;
      float: right;
      }
      button:hover {
      opacity: 0.9;
      }
label
{
margin-left:40px;
font-size:16px;
font-weight:bold;
}
   </style>
   </head>
   <body> 
     <?php include('connect.php'); ?>
   <form action="update.php" method="POST">
   <?php
     $sql="SELECT* FROM applied WHERE Id='".$_GET['id']."';";
     $result=mysqli_query($conn,$sql);
     if(mysqli_num_rows($result)>0)
     {
        if($row=mysqli_fetch_assoc($result))
        {
   ?>
                      <label>Registration number</label>
                      <input type="text" name="regnumber" maxlength="10" value="<?php echo $row['Reg_number']; ?>">
                        <label>First name</label>
                        <input type="text" name="firstname" value="<?php echo $row['firstname']; ?>">
                        <label>lastname</label>
                        <input type="text" name="lastname" value="<?php echo $row['lastname']; ?>">
                        <label>Nationality</label>
                        <input type="text" name="nationality" value="<?php echo $row['nationality']; ?>">
                        <label for="Email" >Email</label>
                        <input type="email" name="email" value="<?php echo $row['email']; ?>">
                        <label>Student phonenumber</label>
                      <input type="numbers" name="sphone" maxlength="10" value="<?php echo $row['phonenumber']; ?>">
                      <label>Birthdate</label>
                        <input type="date" name="birthdate" value="<?php echo $row['birthdate']; ?>">
                      <label>Guardian_phonenumber </label>
                      <input type="numbers" name="gphone" maxlength="10" value="<?php echo $row['guardian_phone']; ?>">
                                  <input type="hidden" name="id" value="<?php if(isset($_GET['id'] )){echo $_GET['id'];}  ?>"/>
                        <button type="submit" name="edit">Edit</button>
                        <?php
        }
      }
    ?>             
</form>
</div>
</center>

<?php
if(isset($_POST['edit']))
{
    $id=$_POST['id'];
       $registration=$_POST['regnumber'];
   $firstname=$_POST['firstname'];
   $lastname=$_POST['lastname'];
   $nationality=$_POST['nationality'];
   $email=$_POST['email'];
   $sphone=$_POST['sphone'];
   $birthdate=$_POST['birthdate'];
   $gphone=$_POST['gphone'];
 $errors= array();
 if(empty($errors)==true){
  $sql="UPDATE applied SET Reg_number='$registration',firstname='$firstname',lastname='$lastname', nationality=' $nationality',email='$email',phonenumber='$sphone',birthdate='$birthdate',guardian_phone='$gphone' WHERE Id='$id'";
     if(mysqli_query($conn,$sql))
      {
        header("Location:retrieveapp.php?id=$id");
       exit();
      }
      else
      {
          echo $id;
      }
       
       
   }else{
      print_r($errors);
   }
 }
 include('footer.php');
?>
   </body>
</html>