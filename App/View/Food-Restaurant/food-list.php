<div class="nav-bar">
    <?php include "App/View/layout/navbar.php"?>
</div>
<div class="container-fluid" >
    <h2 class="text-center text-primary">Menu</h2>
    <table border="3px" width="60%" style="margin: auto">
        <thead>
        <tr class="bg-warning text-dark">
            <th>Name</th>
            <th>Image</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($foods as $food):?>
            <tr>
                <td><?php echo $food->name?></td>
                <td><img class="img-responsive" width="150px" style="padding: 20px" src="<?php echo $food->image?>" alt="nice"></td>
                <td><a onclick="return confirm('Are you sure ?')" href="index.php?page=food-delete&id=<?php echo $food->id?>">
                        <button class="btn btn-danger">
                            <i class='fas fa-trash'></i> Delete
                        </button></a></td>
                <td><a href="index.php?page=food-update&id=<?php echo $food->id?>">
                        <button class="btn btn-light">
                            Update
                        </button></a></td>
                <td><a href="index.php?page=food-detail&id=<?php echo $food->id?>">
                        <button class="btn btn-light">
                            <i class='fas fa-info-circle'></i> Detail
                        </button></a></td>
            </tr>
        <?php endforeach;?>
        </tbody>
    </table>
</div>

