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
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['addImage'])) {
        
    // Handle file upload
    $id_picture = '';
    if (isset($_FILES['picture']) && $_FILES['picture']['error'] == 0) {
        $target_dir = "gallery/";
        $id_picture = $target_dir . basename($_FILES["picture"]["name"]);
        if (!move_uploaded_file($_FILES["picture"]["tmp_name"], $id_picture)) {
            $_SESSION['status'] = "Error uploading file.";
            header('Location: imageupload.php');
            exit();
        }
    }

    $sql = "INSERT INTO gallery (picture) VALUES ('$id_picture')";

    if ($conn->query($sql) === TRUE) {
        $_SESSION['success'] = "New image added successfully!";
    } else {
        $_SESSION['status'] = "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Handle the delete functionality
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['delete_image'])) {
    $id = $_POST['id'];

    // First, retrieve the image path from the database
    $sql = "SELECT picture FROM gallery WHERE id='$id'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $imagePath = $row['picture'];  // Assuming 'picture' is the column where the image path is stored

        // Check if the file exists before attempting to delete it
        if (file_exists($imagePath)) {
            if (unlink($imagePath)) {
                // File successfully deleted from the server

                // Now delete the record from the database
                $sql = "DELETE FROM gallery WHERE id='$id'";
                if ($conn->query($sql) === TRUE) {
                    $_SESSION['success'] = "Record and image deleted successfully!";
                } else {
                    $_SESSION['status'] = "Error deleting record: " . $conn->error;
                }
            } else {
                $_SESSION['status'] = "Error deleting image file from server.";
            }
        } else {
            $_SESSION['status'] = "Image file does not exist.";
        }
    } else {
        $_SESSION['status'] = "Record not found in the database.";
    }
}


?>


<div class="modal fade" id="AddImage" tabindex="-1" role="dialog" aria-labelledby="AddImageLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="AddImageLabel">Add Image</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form method="POST" enctype="multipart/form-data">
      
        <div class="mb-3">
            <label for="picture">Image</label>
            <input type="file" id="picture" name="picture" class="form-control">
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" name="addImage" class="btn btn-primary">Add New Image</button>
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
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#AddImage">
                    Add Image
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
                $query = "SELECT * FROM gallery";
                $query_run = mysqli_query($conn, $query);
            ?>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                        <th>Image</th>
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
                                            <?php if($row['picture'] != ''): ?>
                                                <img src="<?php echo $row['picture']; ?>" alt="picture" width="100">
                                            <?php else: ?>
                                                No picture
                                            <?php endif; ?>
                                        </td>
                                        <td>
                                            <!-- Delete functionality -->
                                            <form method="POST" style="display:inline;">
                                                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                                <button type="submit" name="delete_image" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this?');">Delete</button>
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
document.getElementById('addImage').addEventListener('hidden.bs.modal', function () {
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