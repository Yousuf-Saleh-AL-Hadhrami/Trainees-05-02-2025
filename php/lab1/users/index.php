<?php 
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
header("Expires: 0");

// $lang = $_SERVER['HTTP_ACCEPT_LANGUAGE'];

// $explodedString = explode(',', $lang);
// echo $explodedString[0];

$langFromUrl = isset($_GET['lang']) ? $_GET['lang'] : 'en';


$title = 'Users';

include "./../includes/header.php";
include "./../config/Authenticate.php";
include "./../includes/database.php";
include "./../includes/functions.php";


?>

<div class="container">
    <h1 class="text-center text-primary my-2"><?= translate('Users') ?></h1>

<?php 

$query  = " SELECT * FROM users  ";
$result = mysqli_query($connection , $query) or die("Error is Query " . mysqli_error($connection));
$count = mysqli_num_rows($result);
if($count == 0){

echo "<div class='alert alert-danger'>No Users Found!</div>";
}
 else {?>

<a href="create.php" class="btn btn-info btn-sm m-2">Create New User</a>
<?php 

$valueAfterDecryption = decryptCookie($_COOKIE['test'], 25369);

echo $valueAfterDecryption;

if(isset($_SESSION['success'])): ?>
<div class="alert alert-success"><?= $_SESSION['success'] ?></div>
<?php 
unset($_SESSION['success']);
endif
?>
 <table class="table table-bordered table-stripped text-center">
    <thead>
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>name</th>
            <th>role</th>
            <th>Image</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        

$path = "http://localhost/Training-25-02-2025/php/lab1/assets/uploads/";

         while($users = mysqli_fetch_assoc($result)): ?>

            <tr>
             <td><?= $users["id"]; ?></td>
            <td><?= $users['username']; ?></td>
            <td><?= $users['name']; ?></td>
            <td><?= $users['role']; ?></td>
            <td><img height="60" src="<?=$path . $users['image']?>" alt=""></td>


            

            <td>
                <a href="edit.php?id=<?= $users['id']; ?>" class="btn btn-primary">Edit</a>

                <form action="delete.php" method="post" class="d-inline-block">
                    <input type="hidden" name="id" value="<?= $users['id'] ?>">
                    <button class=" btn btn-outline-danger" type="submit">Delete</button>
                </form>
            </td>
            </tr>
            
        <?php
         endwhile;
         
        ?>
    </tbody>
 </table>

<?php 

 }
include "./../includes/footer.php";
?>









