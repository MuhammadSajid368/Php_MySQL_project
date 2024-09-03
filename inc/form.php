<form action="" method="post">

<div class="mb-3">
<label for="exampleInputEmail1" class="form-label">First Name</label>
<input type="text" value="<?= $row['first_name'] ?>" name="fn" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

</div>

<div class="mb-3">
<label for="exampleInputEmail1" class="form-label">Last Name</label>
<input type="text" value="<?= $row['last_name'] ?>"  name="ln" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

</div>

<div class="mb-3">
<label for="exampleInputEmail1" class="form-label">Email</label>
<input type="text" value="<?= $row['email'] ?>"  name="em" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

</div>

<div class="mb-3">
<label for="exampleInputEmail1" class="form-label">Password</label>
<input type="text" name="pw" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

</div>

<div class="mb-3">

<select  name="role" class="form-select" aria-label="Default select example">
<option disabled selected>Role</option>
<option  <?php if ($row['role'] == "admin") { echo "selected";} ?>   value="admin">Admin</option>
<option <?php if ($row['role'] == "user") { echo "selected";} ?>  value="user">User</option>
<option <?php if ($row['role'] == "moderator") { echo "selected";} ?> value="moderator">Moderator</option>

</select>


</div>

<div class="mb-3">

<select  name="status" class="form-select" aria-label="Default select example">
<option disabled selected>Status</option>
<option <?php  if ($row['status'] == 1 ) { echo "selected";} ?>   value="1">Active</option>
<option <?php if ($row['status'] == -1 ) { echo "selected";} ?> value="-1">Block</option>


</select>


</div>

<div class="mb-3">
      <input value='<?= $page ?>' type="submit" name="btnAccount" class="btn btn-success">
</div>


</form>