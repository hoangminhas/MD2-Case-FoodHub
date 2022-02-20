<div class="nav-bar">
    <?php include "App/View/layout/navbar.php"?>
</div>

<table>
    <thead>
    <tr>
        <th>Image</th>
        <th>Name</th>
        <th>Description</th>
        <th>Price</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td><img width="110px" style="padding: 20px" src="<?php echo $thisFood->image?>" alt="nice"></td>
        <td><?php echo $thisFood->name?></td>
        <td><?php echo $thisFood->description?></td>
        <td><?php echo $thisFood->price?></td>
    </tr>
    </tbody>
</table>
