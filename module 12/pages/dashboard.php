<?php
session_start();

if(isset($_SESSION['user'])){
    header("Location: login.php");
    exit();
}
?>

<?php include '../includes/header.php'; ?>

<div class="container nt-5"
<H2>Welcome, <?php echo $_SESSION['user']; ?> !!! </h2>
</div>

<?php include '../included/footer.php'; ?> 