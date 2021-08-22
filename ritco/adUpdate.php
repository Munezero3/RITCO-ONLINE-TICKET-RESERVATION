<?php 
include('conn.php');
?>
<style>
   body{
      background-image: url('images/rt1.jpg');
      background-repeat: no-repeat;
      background-size: cover;
height:50%;
padding-top:10px;
padding-bottom:10px;
margin:auto;
}     form{
   margin-left: 50px;
         max-width: 300px; 
      border: 4px solid black;
      background-color:gray;
      float:left;
      -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s;
      border-top-right-radius: 70px;
  border-bottom-right-radius:70px;
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
     <center>
<form action="adUpdate.php" method="POST">
   <?php
     $sql="SELECT* FROM account WHERE id=".$_GET['id'].";";
     $result=mysqli_query($conn,$sql);
     if(mysqli_num_rows($result))
     {
        if($row=mysqli_fetch_assoc($result))
        {
   ?>
        <label>First name</label>
                        <input type="text" name="firstname" value="<?php echo $row['firstname']; ?>">
                        <label>lastname</label>
                        <input type="text" name="lastname" value="<?php echo $row['lastname']; ?>">
                        <label>email</label>
                        <input type="text" name="email" value="<?php echo $row['email']; ?>">
                      
                        <input type="hidden" name="id" value="<?php if(isset($_GET['id'] )){echo $_GET['id'];}  ?>">
                        <button type="submit" name="edit">Edit</button>
    <?php
        }
      }
    ?>                  
</form>
   </center>
<?php
if(isset($_POST['edit']))
{
    $id=$_POST['id'];
   $firstname=$_POST['firstname'];
   $lastname=$_POST['lastname'];
   $email=$_POST['email'];
   $errors= array();
   if(empty($errors)==true){
       $sql="UPDATE accounts SET firstname='$firstname',lastname='$lastname', email=' $email' WHERE id='$id'";
     if(mysqli_query($conn,$sql)) 
      {
        header("Location:retrieve.php?id=$id");
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
