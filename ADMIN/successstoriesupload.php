<?php 
session_start();
include('includes/header.php');
include('includes/navbar.php');
?>


<?php
$uname = "root";
$pass = "";
$host = "localhost";
$db = "eg_xrst";

$conn = mysqli_connect($host, $uname, $pass, $db) or die("DB connection error");


?>


<div class="modal fade" id="AddStory" tabindex="-1" role="dialog" aria-labelledby="AddStoryLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="AddStoryLabel">Add Team Member</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="position">Position:</label>
            <input type="text" id="position" name="position" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="description">Description:</label>
            <textarea id="description" name="description" class="form-control"></textarea>
        </div>
        <div class="mb-3">
            <label for="picture">Picture:</label>
            <input type="file" id="picture" name="picture" class="form-control">
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" name="addMember" class="btn btn-primary">Add New Team Member</button>
        </div>
      </form>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#AddStory">
                    Add Team Member
                </button>
            </h6>
        </div>
        <div class="card-body">
            <?php
                if(isset($_SESSION['success']) && $_SESSION['success'] !='') {
                    echo '<div class="alert alert-success">'.$_SESSION['success'].'</div>';
                    unset($_SESSION['success']);
                }
                if (isset($_SESSION['status']) && $_SESSION['status'] !='') {
                    echo '<div class="alert alert-danger">'.$_SESSION['status'].'</div>';
                    unset($_SESSION['status']);
                }
            ?>
            <div class="table-responsive">
            <?php
                $query = "SELECT * FROM stories";
                $query_run = mysqli_query($conn, $query);
            ?>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Description</th>
                        <th>Picture</th>
                        <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            if(mysqli_num_rows($query_run) > 0) {
                                while($row = mysqli_fetch_assoc($query_run)){
                                    ?>
                                    <tr>
                                        <td><?php echo $row['name']?></td>
                                        <td><?php echo $row['position']?></td>
                                        <td><?php echo $row['description']?></td>
                                        <td>
                                            <?php if($row['picture'] != ''): ?>
                                                <img src="<?php echo $row['picture']; ?>" alt="ID Picture" width="50">
                                            <?php else: ?>
                                                No picture
                                            <?php endif; ?>
                                        </td>
                                        <td>
                                            <!-- Delete functionality -->
                                            <form method="POST" style="display:inline;">
                                                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                                <button type="submit" name="delete_member" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this member?');">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                    <?php
                                }
                            } else {
                                echo "<tr><td colspan='5'>No records found</td></tr>";
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script>
// Reset form on modal close
document.getElementById('AddStory').addEventListener('hidden.bs.modal', function () {
    this.querySelector('form').reset();
});
</script>

<?php
$conn->close();
?>

<?php 
include('includes/scripts.php');
include('includes/footer.php');
?>
