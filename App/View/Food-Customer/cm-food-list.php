<div class="nav-bar">
    <?php include "App/View/layout/navbar.php"?>
</div>
<table border="3px">
    <thead>
    <tr>
        <th>Name</th>
        <th>Phone</th>
        <th>Email</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($restaurants as $restaurant):?>
    <tr>
        <td><?php echo $restaurant->name?></td>
        <td><?php echo $restaurant->phone?></td>
        <td><?php echo $restaurant->email?></td>
        <td><a href="index.php?page=food-list<?php echo $restaurant->id?>">Menu</a></td>

    </tr>
    <?php endforeach;?>
    </tbody>
</table>


