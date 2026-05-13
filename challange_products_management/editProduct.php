<?php
include 'config.php';
$id =$_GET['id'];

$result = $conn->query("SELECT * FROM products WHERE id=$id");
$row = $result->fetch_assoc();
?>

<form action="updateProducts.php" method="POST";
  Name:<input type="text" name="name" value="<?php echo $row['name']; ?><br>
  Price:<input type"text" name="price" value="<?php echo $row['price']; ?><br>
  Description:<textarea name="description"><?php echo $row['description']; ?></textarea><br>
  <button type="submit">Update"</button>
</form>