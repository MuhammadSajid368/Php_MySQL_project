<?php
require 'inc/conn.php';
require 'inc/functions.php';

require "inc/check_login.php";

$data = login($_SESSION['email'], $_SESSION['password']);
$first_name=$data[1]['first_name'];
$last_name=$data[1]['last_name'];
$email=$data[1]['email'];
$role=$data[1]['role'];
$createdAT=$data[1]['createdAt'];
?>

<?php require  'inc/header.php' ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php require 'inc/sidebar.php' ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Profile</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">User Profile</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="dist/img/no-photo.png"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center"><?= $first_name . " " .$last_name  ?></h3>


                <ul class="list-group list-group-unbordered mb-3">
                <li class="list-group-item">
                    <b>Full Name</b> <a class="float-right"><?= $first_name . " " .$last_name  ?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Email</b> <a class="float-right"><?=  $email ?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Role :</b> <a class="float-right"><?=   $role ?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Created At :</b> <a class="float-right"><?= $createdAT  ?></a>
                  </li>
                </ul>

               
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">About Me</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <strong><i class="fas fa-book mr-1"></i> Education</strong>

                <p class="text-muted">
                  B.S. in Computer Science from the University of Tennessee at Knoxville
                </p>

                <hr>

                <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>

                <p class="text-muted">Malibu, California</p>

                <hr>

                <strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>

                <p class="text-muted">
                  <span class="tag tag-danger">UI Design</span>
                  <span class="tag tag-success">Coding</span>
                  <span class="tag tag-info">Javascript</span>
                  <span class="tag tag-warning">PHP</span>
                  <span class="tag tag-primary">Node.js</span>
                </p>

                <hr>

                <strong><i class="far fa-file-alt mr-1"></i> Notes</strong>

                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <div class="col-lg-6">
            Update Profile
            <?php
             require 'update.php' ?>

          </div>

          <!-- /.col -->
       
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 <?php  require 'inc/footer.php' ?>