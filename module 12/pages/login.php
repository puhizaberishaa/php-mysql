<?php
if (isset($_POST['register'])){
    $name = $_POST['name'];
    $email= $_POST['email'];
    $password = $_POST['password'];
}

$sql ="SELECT FROM users WHERE emails='$email' ";
$result = $conn->query($sql);

if($result-> num_rows > 0){
        $user = $result->fetch_assoc();

        if(password_verify($password, $user['password'])){
                header("Location: dashboard.php");
        }else{
                echo "Wrong password!";
        }
}else{
        echo "User not found";
}
?>

<?php include '../includes/header.php'; ?>

<div class="container nt-5">
    <h2>Log In</h2>
    <form action="POST">
        <label for="Email:"></label>
        <input type="email" class="form-control" placeholder="enter email">
</div>

<div>
<label for="Password:"></label>
        <input type="password" class="form-control" placeholder="enter password">
</div>

<button class="btn btn-primary nb-3">Log In</button>
</form>
</div>

<?php include '../includes/footer.php'; ?>