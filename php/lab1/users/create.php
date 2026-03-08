

<?php 
$title = 'Users';
include "./../includes/header.php";
include "./../config/Authenticate.php";
include "./../includes/database.php";
include "./../includes/functions.php";



if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $id = $_POST['id'];
        $username = $_POST['username'];
        $name = $_POST['name'];
        $role = $_POST['role'];
        $hashedPassword = password_hash("1234567", PASSWORD_DEFAULT);

        $temproray_path = $_FILES['image']['tmp_name'];
        $path = __DIR__ . '/../assets/uploads/';

        $image_name = [];

        $image_name = uploadImage($_FILES['image']);

        $realImage = $path.$image_name;

        if(!empty($image_name) && is_string($image_name)){

        $insert = " INSERT INTO users VALUES($id , '$username', '$hashedPassword', '$name','$role', '$image_name');";

        move_uploaded_file($temproray_path , $realImage);
 
        $boolean = mysqli_query($connection, $insert);

        if($boolean)
            {
                $_SESSION['success'] = "The User $name Has Been Added Successfully";

                header("location: index.php");
                exit;
            }

            }else {

              echo "<div class='alert alert-danger'> لا يمكن رفع الصورة حدث خطأ</div>";
            }

    }

    

    




?>


<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
            
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0">User Information Form</h5>
                </div>
                
                <div class="card-body">
                    <form action="" method="post" enctype="multipart/form-data">
                        
                        <!-- ID -->
                        <div class="mb-3">
                            <label for="id" class="form-label">ID</label>
                            <input type="number" name="id" class="form-control" id="id" placeholder="Enter ID">
                        </div>

                        <!-- Username -->
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" name="username" class="form-control" id="username" placeholder="Enter Username">
                        </div>

                        <!-- Name -->
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" id="name" placeholder="Enter Full Name">
                        </div>

                        <!-- Role -->
                        <div class="mb-4">
                            <label for="role" class="form-label">Role</label>
                            <select class="form-select" id="role" name="role">
                                <option selected disabled>Select Role</option>
                                <option value="admin">Admin</option>
                                <option value="editor">Editor</option>
                                <option value="user">User</option>
                            </select>
                        </div>

                         <!-- Image -->
                        <div class="mb-3">
                            <label for="image" class="form-label">Image</label>
                            <input type="file" name="image" class="form-control" id="image" accept=".jpg, .png, .pdf">
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

