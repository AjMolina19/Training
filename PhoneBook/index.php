<?php 
include 'classes/Dbo.class.php';

$data = new Model();

//ADD
if (isset($_POST['submit'])) {
    $data->insertData($_POST);
}
//UPDATE
if (isset($_POST['update'])) {
  $data->updateData($_POST);
}
if(isset($_GET['del_id'])){
    $del_id = $_GET['del_id'];
    $data->deleteData($del_id);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Phonebook</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="./style.css">
</head>
<body>
<?php
    if (isset($_GET['edit_id'])) {
        $edit_id = $_GET['edit_id'];
        $rows = $data->editData($edit_id);
    ?>
  <!-- partial:index.partial.html -->
    <div id="login-form-wrap">
      <h2>Update contacts</h2>
        <form id="login-form" method="post" action="index.php">
          <p>
          <input type="text" id="fname" value="<?php echo $rows['fname'];?>"  name="fname" placeholder="First Name" required><i class="validation"><span></span><span></span></i>
          </p>
          <p>
          <input type="text" id="lname" value="<?php echo $rows['lname'];?>" name="lname" placeholder="Last Name" required><i class="validation"><span></span><span></span></i>
          </p>
          <p>
          <input type="number" id="num" value="<?php echo $rows['num'];?>" name="num" placeholder="Phone Number" required><i class="validation"><span></span><span></span></i>
          </p>
          <p>
          <input type="hidden" name="update_id" value="<?php echo $rows['id'];?>">
          <input type="submit" name="update" id="login" value="UPDATE">
          </p>
        </form>
      <div id="create-account-wrap"> 
      <p>Updating contacts<p>
    </div><!--create-account-wrap-->
  </div><!--login-form-wrap-->
<!-- partial -->
<?php 
      }else{
        ?>
        <!-- partial:index.partial.html -->
    <div id="login-form-wrap">
      <h2>Add new contacts</h2>
        <form id="login-form" method="post" action="index.php">
          <p>
          <input type="text" id="fname" name="fname" placeholder="First Name" required><i class="validation"><span></span><span></span></i>
          </p>
          <p>
          <input type="text" id="lname" name="lname" placeholder="Last Name" required><i class="validation"><span></span><span></span></i>
          </p>
          <p>
          <input type="number" id="num" name="num" placeholder="Phone Number" required><i class="validation"><span></span><span></span></i>
          </p>
          <p>
          <input type="submit" name="submit" id="login" value="ADD">
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
    <div class="container my-5">
    <a href="index.php" class="btn btn-primary text-light">Add new contacts</a>
        <form method="get" action="connection.php">
        <br>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
            <?php
            $row = $data->SelectData();
            foreach ($row as $rows): ?>
                <tr>
                    <td><?php echo $rows['id']; ?></td>
                    <td><?php echo $rows['fname']; ?></td>
                    <td><?php echo $rows['lname']; ?></td>
                    <td><?php echo $rows['num']; ?></td>
                    <td>
                        <a href="index.php?edit_id=<?php echo $rows['id']; ?>" class="btn btn-success text-light">Update</a>
                        <a href="index.php?del_id=<?php echo $rows['id']; ?>" class="btn btn-danger text-light">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
        </form>
    </div>
</body>
</html>>