<div class="nav-bar">
    <?php include "App/View/layout/cm-navbar.php"?>
</div>
<table border="3px">
    <thead>
    <tr>
        <th>STT</th>
        <th>Name</th>
        <th>Phone</th>
        <th>Show</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($restaurants as $key=>$restaurant):?>
    <tr>
        <td><?php echo $key + 1?></td>
        <td><?php echo $restaurant->name?></td>
        <td><?php echo $restaurant->phone?></td>
        <td><a href="index.php?page=restaurant-detail&id=<?php echo $restaurant->id?>">Detail</a></td>
    </tr>
    <?php endforeach;?>
    </tbody>
</table>


