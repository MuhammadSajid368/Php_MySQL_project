<?php

if (isset($_GET['uid'])) {
  $id = $_GET['uid'];
  $row = singleUser($id);
} else  if (isset($_SESSION['id'])) {
  $id = $_SESSION['id'];
  $query = "SELECT * FROM users WHERE Id = $id";
  $result = mysqli_query($conn, $query);

  if ($result) {
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
  } else {
  }
}
if (isset($_POST['btnClick'])) {
  $id = $_SESSION['id'];
  $fn = $_POST['fname'];
  $ln = $_POST['lname'];
  $em = $_POST['em'];
  $pw = $_POST['pw'];
  updateUser($fn, $ln, $em, $pw, $id);
}
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Update Record</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<?php

?>

<body>


  <form action="" method="post">
    <div class="mb-2">
      <label for="exampleInputEmail1" class="form-label">First Name</label>
      <input name="fname" value="<?= $row['first_name'] ?>" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-2">
      <label for="exampleInputEmail1" class="form-label">Last Name</label>
      <input name="lname" value="<?= $row['last_name'] ?>" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-2">
      <label for="exampleInputEmail1" class="form-label">Email</label>
      <input name="em" value="<?= $row['email'] ?>" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-2">
      <label for="exampleInputPassword1" class="form-label">Password</label>
      <input name="pw" value="<?= $row['password'] ?>" type="password" class="form-control" id="exampleInputPassword1">
    </div>
    <button type="submit" class="btn btn-primary" name="btnClick">Update</button>
  </form>
  </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</html>