<div class="nav-bar">
    <?php include "App/View/layout/navbar.php"?>
</div>
<div class="container" >
    <h2 style="text-align: center">Menu</h2>
    <table border="3px" width="70%" style="margin: auto">
        <thead>
        <tr>
            <th>Name</th>
            <th>Image</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($foods as $food):?>
            <tr>
                <td><?php echo $food->name?></td>
                <td><img width="150px" style="padding: 20px" src="<?php echo $food->image?>" alt="nice"></td>
                <td><a onclick="return confirm('Are you sure ?')" href="index.php?page=food-delete&id=<?php echo $food->id?>">Delete</a></td>
                <td><a href="index.php?page=food-update&id=<?php echo $food->id?>">Update</a></td>
                <td><a href="index.php?page=food-detail&id=<?php echo $food->id?>">Detail</a></td>
            </tr>
        <?php endforeach;?>
        </tbody>

    </table>
</div>

