

<?php 
$title = 'Edit User';
include "./../includes/header.php";
include "./../config/Authenticate.php";
include "./../includes/database.php";


if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $id = $_POST['id'];
        $username = $_POST['username'];
        $name = $_POST['name'];
        $role = $_POST['role'];

        $update = "UPDATE users SET
                                    
                                     name = '$name',
                                     role = '$role'
                                     WHERE id = $id
           ;";

        $boolean = mysqli_query($connection, $update);

        if($boolean)
            {
                $_SESSION['success'] = "The User Has Been Updated Successfully";

                header("location: index.php");
                exit;
            }


    }



    $id = isset($_GET['id']) ? $_GET['id'] : intval(0);

    $query = " SELECT * FROM users WHERE id = $id LIMIT 1";
    $result = mysqli_query($connection , $query);
    $user = mysqli_fetch_assoc($result);


?>


<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
            
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0">User Information Form</h5>
                </div>
                
                <div class="card-body">
                    <form action="" method="post">
                        
                        <!-- ID -->
                        <div class="mb-3">
                            <label for="id" class="form-label">ID</label>
                            <input type="number" name="id" class="form-control" id="id" placeholder="Enter ID" value="<?= $user['id'] ?>">
                        </div>

                        <!-- Username -->
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" value="<?= $user['username'] ?>" name="username" class="form-control" id="username" placeholder="Enter Username">
                        </div>

                        <!-- Name -->
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" value="<?= $user['name'] ?>" name="name" class="form-control" id="name" placeholder="Enter Full Name">
                        </div>

                        <!-- Role -->
                        <div class="mb-4">
                            <label for="role" class="form-label">Role</label>
                            <select class="form-select" id="role" name="role">
                                <option selected disabled>Select Role</option>
                                <option value="admin" <?php if($user['role'] == 'admin') echo ' selected'; ?>>Admin</option>
                                <option value="editor" <?php if($user['role'] == 'editor') echo ' selected'; ?>>Editor</option>
                                <option value="user" <?php if($user['role'] == 'user') echo ' selected'; ?>>User</option>
                            </select>
                        </div>

                        <!-- Buttons -->
                        <div class="d-flex justify-content-end gap-2">
                            <button type="reset" class="btn btn-outline-secondary">
                                Reset
                            </button>
                            <button type="submit" class="btn btn-primary">
                                Save
                            </button>
                        </div>

                    </form>
                </div>
            </div>
            
        </div>
    </div>
</div>

