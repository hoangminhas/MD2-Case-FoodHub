<div class="nav-bar">
    <?php include "App/View/layout/navbar.php"?>
</div>
<!--<a href="index.php?page=food-create">FoodCreate</a>-->
<table border="3px">
    <tr>
        <th>Name</th>
        <th>Image</th>
        <th colspan="2">Action</th>
    </tr>
    <?php foreach ($foods as $food):?>
    <tr>
        <td><?php echo $food->name?></td>
        <td><img width="150px" style="padding: 20px" src="<?php echo $food->image?>" alt=""></td>
        <td><a onclick="return confirm('Are you sure ?')" href="index.php?page=food-delete&id=<?php echo $food->id?>">Delete</a></td>
        <td><a href="index.php?page=food-update&id=<?php echo $food->id?>">Update</a></td>
    </tr>
    <?php endforeach;?>
</table>
