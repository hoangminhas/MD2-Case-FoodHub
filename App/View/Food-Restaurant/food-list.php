<?php include "App/View/layout/navbar.php" ?>
<div class="container">
    <h2 style="text-align: center">Menu</h2>
    <table class="table" border="3px" style="margin: auto; text-align: center">
        <thead STYLE="background-color: #7e9ed7">
        <tr>
            <th>Name</th>
            <th>Image</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($foods as $food): ?>
            <tr>
                <td><?php echo $food->name ?></td>
                <td><img width="100px" style="padding: 20px" src="<?php echo $food->image ?>" alt="nice"></td>
                <td><a onclick="return confirm('Are you sure ?')"
                       href="index.php?page=food-delete&id=<?php echo $food->id ?>">Delete</a></td>
                <td><a href="index.php?page=food-update&id=<?php echo $food->id ?>">Update</a></td>
                <td><a href="index.php?page=food-detail&id=<?php echo $food->id ?>">Detail</a></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>