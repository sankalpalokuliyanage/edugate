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

if(isset($_POST['register'])) {
    $user_email = $_POST['email'];
    $user_name = $_POST['username'];
    $user_pass = $_POST['password'];
    $user_conPass = $_POST['conpass'];

    if ($user_pass !== $user_conPass) {
        $_SESSION['status'] = "Passwords Not Matched";
        header("Location: register.php");
    } else {
        $hashed_pass = password_hash($user_pass, PASSWORD_DEFAULT);

        $check_sql = "SELECT * FROM admin WHERE username = ?";
        $stmt = $conn->prepare($check_sql);
        $stmt->bind_param('s', $user_name);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $_SESSION['status'] = "Username Already Exists";
            header("Location: register.php");
        } else {
            $sql = "INSERT INTO admin(username, password, email) VALUES (?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param('sss', $user_name, $hashed_pass, $user_email);

            if ($stmt->execute()) {
                $_SESSION['success'] = "Added Successfully";
                
            } else {
                $_SESSION['status'] = "Not Added";
                header("Location: register.php");
            }
        }

        $stmt->close();
        $conn->close();
    }
}
?>

<div class="modal fade" id="AddAdminPofile" tabindex="-1" role="dialog" aria-labelledby="AddAdminPofileLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="AddAdminPofileLabel">Add Admin</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

      <form method="POST">
        <div class="mb-3">
            <label class="form-label">Email address</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Username</label>
            <input type="text" class="form-control" id="username" name="username" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
            <button type="button" class="toggle-password">
                <span class="far fa-eye-slash"></span>
            </button>
        </div>

        <div class="mb-3">
            <label class="form-label">Confirm Password</label>
            <input type="password" class="form-control" id="conpass" name="conpass" required>
            <button type="button" class="toggle-password">
                <span class="far fa-eye-slash"></span>
            </button>
        </div>

        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" name="register" class="btn btn-primary">Add Admin</button>
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
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#AddAdminPofile">
                    Add Admin Profile
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
                $query = "SELECT * FROM admin";
                $query_run = mysqli_query($conn, $query);
            ?>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>EDIT</th>
                            <th>DELETE</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            if(mysqli_num_rows($query_run) > 0) {
                                while($row = mysqli_fetch_assoc($query_run)){
                                    ?>
                                    <tr>
                                        <td><?php echo $row['username']?></td>
                                        <td><?php echo $row['email']?></td>
                                        <td><center><button type = "submit" class="btn btn-success">EDIT</button></center></td>
                                        <td><center><button type = "submit" class="btn btn-danger">DELETE</button></center></td>
                                    </tr>
                                    <?php
                                }
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<style>
    .toggle-password {
        background: none;
        border: none;
        cursor: pointer;
    }
</style>

<script>
    document.querySelectorAll('.toggle-password').forEach(button => {
        button.addEventListener('click', function () {
            const passwordField = this.previousElementSibling;
            const icon = this.querySelector('span');

            if (passwordField.type === "password") {
                passwordField.type = "text";
                icon.classList.remove('fa-eye-slash');
                icon.classList.add('fa-eye');
            } else {
                passwordField.type = "password";
                icon.classList.remove('fa-eye');
                icon.classList.add('fa-eye-slash');
            }
        });
    });

    // Reset form on modal close
    document.getElementById('AddAdminPofile').addEventListener('hidden.bs.modal', function () {
        this.querySelector('form').reset();
    });
</script>

<?php 
    include('includes/scripts.php');
    include('includes/footer.php');
?>
