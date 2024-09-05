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


// Handle adding a new story
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['addStory'])) {
    $name = $_POST['name'];
    $visa = $_POST['visa'];
    $comment = $_POST['comment'];

    // Handle file upload
    $avatar = '';
    if (isset($_FILES['avatar']) && $_FILES['avatar']['error'] == 0) {
        $target_dir = "SuccessStories/";
        $avatar = $target_dir . basename($_FILES["avatar"]["name"]);
        if (!move_uploaded_file($_FILES["avatar"]["tmp_name"], $avatar)) {
            $_SESSION['status'] = "Error uploading file.";
            header('Location: successstoriesupload.php');
            exit();
        }
    }

    
    // Handle file upload
    $id_picture = '';
    if (isset($_FILES['picture']) && $_FILES['picture']['error'] == 0) {
        $target_dir = "SuccessStories/";
        $id_picture = $target_dir . basename($_FILES["picture"]["name"]);
        if (!move_uploaded_file($_FILES["picture"]["tmp_name"], $id_picture)) {
            $_SESSION['status'] = "Error uploading file.";
            header('Location: successstoriesupload.php');
            exit();
        }
    }

    $sql = "INSERT INTO stories (name, visa, comment, avatar, picture) VALUES ('$name', '$visa', '$comment','$avatar', '$id_picture')";

    if ($conn->query($sql) === TRUE) {
        $_SESSION['success'] = "New story added successfully!";
        // header('Location: ourteamedit.php');
        // exit();
    } else {
        $_SESSION['status'] = "Error: " . $sql . "<br>" . $conn->error;
    }
}


?>


<div class="modal fade" id="AddStory" tabindex="-1" role="dialog" aria-labelledby="AddStoryLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="AddStoryLabel">Add Story</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form method="POST" enctype="multipart/form-data">
      <div class="mb-3">
            <label for="avatar">Avatar:</label>
            <input type="file" id="avatar" name="avatar" class="form-control">
        </div>

        <div class="mb-3">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="visa">Visa:</label>
            <input type="text" id="visa" name="visa" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="comment">Comment:</label>
            <textarea id="comment" name="comment" class="form-control"></textarea>
        </div>
        <div class="mb-3">
            <label for="picture">Grant Notice:</label>
            <input type="file" id="picture" name="picture" class="form-control">
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" name="addStory" class="btn btn-primary">Add New Story</button>
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
                    Add Story
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
                        <th>Avatar</th>
                        <th>Name</th>
                        <th>Visa</th>
                        <th>Comment</th>
                        <th>Grant Notice</th>
                        <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            if(mysqli_num_rows($query_run) > 0) {
                                while($row = mysqli_fetch_assoc($query_run)){
                                    ?>
                                    <tr>
                                        <td>
                                            <?php if($row['avatar'] != ''): ?>
                                                <img src="<?php echo $row['avatar']; ?>" alt="Avatar" width="50">
                                            <?php else: ?>
                                                No Avatar
                                            <?php endif; ?>
                                        </td>
                                        <td><?php echo $row['name']?></td>
                                        <td><?php echo $row['visa']?></td>
                                        <td><?php echo $row['comment']?></td>
                                        <td>
                                            <?php if($row['picture'] != ''): ?>
                                                <img src="<?php echo $row['picture']; ?>" alt="Grant Notice" width="50">
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
