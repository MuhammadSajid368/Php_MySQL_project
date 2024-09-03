<?php
require "inc/conn.php";
require "inc/check_login.php";
require "inc/functions.php";
$result = fetch_all_users($_SESSION['id']);

if($_SESSION['role'] =='User'){
  header("Location:profile.php");
};

?>


<!-- /.navbar -->
<?php require 'inc/header.php' ?>
<?php require 'inc/sidebar.php' ?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->


  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">

      <!-- /.row -->
      <!-- /.fixed header table -->
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Fixed Header Table</h3>

              <div class="card-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                  <div class="input-group-append">
                    <button type="submit" class="btn btn-default">
                      <i class="fas fa-search"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0" style="height: 300px;">
              <table class="table table-head-fixed text-nowrap">
                <thead>
                  <tr>
                    <th>Avatar</th>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Status</th>
                    <th>Role</th>
                    <th>Created At</th>
                  </tr>
                </thead>
                <tbody>
                  <?php while ($row = mysqli_fetch_assoc($result)) {
                  ?>
                    <tr>
                      <td><img src="uploads/<?= $row['avatar_profile'] ?>" alt="" style="width: 65px; height:65px"></td>
                      <td><?= $row['Id'] ?></td>
                      <td><?= $row['first_name'] ?></td>
                      <td><?= $row['last_name'] ?></td>
                      <td><?= $row['email'] ?></td>
                      <?php if ($_SESSION['role'] == 'moderator') { ?>

                        <?php if ($row['status'] == 1) { ?>
                          <td><p class="text-success" disabled>Activate</p></td>
                        <?php } elseif ($row['status'] == -1) { ?>
                          <td><p class="text-danger" disabled>Block</p></td>
                        <?php } ?>
                      <?php } ?>
                      <?php if ($_SESSION['role'] == 'admin') { ?>

                        <?php if ($row['status'] == -1) { ?>
                          <td class="text-danger"><a title="click to active or block account" href="status.php?status=<?= $row['status'] ?>&id=<?= $row['Id'] ?>" style="text-decoration: none; color:red"><?= "Block"; ?></a></td>
                        <?php } else { ?>
                          <td class="text-success"><a title="click to active or block account" href="status.php?status=<?= $row['status'] ?>&id=<?= $row['Id'] ?>" style="text-decoration: none; color:green"><?= "Active"; ?></a></td>
                        <?php } ?>
                      <?php } ?>
                      <td><?= $row['role'] ?></td> 
                      <td><?= $row['createdAt'] ?></td>
                    </tr>
                  <?php } ?>

                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
      <!-- /.row -->

      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php require 'inc/footer.php' ?>