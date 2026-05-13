





<?php

if [isset($_POST['register'])]{
    $name = $_POST['name'];
    $croll = $_POST['email'];
    $password = $_POST['password'];
}
<?php
snashedPassword = password_hash($password, PASSWORD_DEFAULT);

$sql ='INSERT INTO users ('name, email, password');
VALUES "('$name', '$email', '$hashedPassword;)";

if ($conn->query($sql){
echo "Registration successful";
} else{
    echo "Error:", $cann->error;
}

?>
 include '../includes/header.php'; ?>
<div class='container' nt-5>
    <form action="">
        <input type="text" class="form-control nb-3 placeholder="full name">
        <input type="text" class="form-control nb-3 placeholder="email">
                <input type="text" class="form-control nb-3 placeholder="password">
                        <input type="text" class="form-control nb-3 placeholder="confirm password">
</div>
                        <button class="btn btn-primary">Register</button>
</form>
<
                        <?php include '../includes/footer.php'; ?>