<?php 
include 'classes/Dbo.class.php';

//insert DATA
$data = new Model();
if (isset($_POST['update'])) {
  $data->updateData($_POST);
}
// if(isset($_POST['submit']))
// {
//     $fname = $_POST['fname'];
//     $lname = $_POST['email'];
//     $num = $_POST['num'];
    
//     $sql = $data->insertData($fname, $lname, $num);
//       if($sql){
//         echo "<script>alert('Data inserted');</script>";
//         }else{
//         echo "<script>alert('Data not inserted');</script>";
//     }
// }
?>
<html>
<head>
  <title>Add contacts</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="./style.css">

</head>
<body>
<?php
			if (isset($_GET['id'])) {
				$editid = $_GET['id'];
				$myrecord = $data->editData($editid);
		?>
  <!-- partial:index.partial.html -->
    <div id="login-form-wrap">
      <h2>Add new contacts</h2>
        <form id="login-form" method="post" action="index.php">
          <p>
          <input type="text" id="fname" value="<?php echo $myrecord['fname'];?>"  name="fname" placeholder="First Name" required><i class="validation"><span></span><span></span></i>
          </p>
          <p>
          <input type="text" id="lname" value="<?php echo $myrecord['lname'];?>" name="lname" placeholder="Last Name" required><i class="validation"><span></span><span></span></i>
          </p>
          <p>
          <input type="text" id="num" value="<?php echo $myrecord['num'];?>" name="num" placeholder="Phone Number" required><i class="validation"><span></span><span></span></i>
          </p>
          <p>
          <input type="hidden" name="hid" value="<?php echo $myrecord['id'];?>">
          <input type="submit" name="update" id="login" value="UPDATE">
          </p>
        </form>
      <div id="create-account-wrap">
      <p>Insert new contacts in your Phonebook<p>
    </div><!--create-account-wrap-->
  </div><!--login-form-wrap-->
<!-- partial -->
<?php 
      }
?>
</body>
</html>
