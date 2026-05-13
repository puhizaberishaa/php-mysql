<?php iclude 'config.php'; ?>

<h2>Products</h2>
<a href="addProduct.php">Add Product</a>

    <?php while($row = $result->fetch_assoc()): ?>  
          <tr>        
            <td><?= $row['id'] ?></td>       
             <td><?= $row['name'] ?></td>      
               <td><?= $row['price'] ?></td>       
                <td> 
                           <a href="index.php?delete=<?= $row['id'] ?>" onclick="return confirm('Delete?')">Delete</a>        
                        </td>    
    </tr>
                        <?php endwhile; ?></table></body></ht