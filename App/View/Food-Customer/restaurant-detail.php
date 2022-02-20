<div class="nav-bar">
    <?php include "App/View/layout/cm-navbar.php"?>
</div>
<form action="#" method="post">
    <table>
        <thead>
        <tr>
            <th>STT</th>
            <th>Image</th>
            <th>Description</th>
            <th>Price</th>
            <th colspan="2">Make an order</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($thisRestaurant as $key=>$item): ?>
            <tr>
                <td><?php echo $key+1?></td>
                <td><img width="150px" style="padding: 20px" src="<?php echo $item->image?>" alt=""></td>
                <td><?php echo $item->description?></td>
                <td><?php echo $item->price?></td>
                <td><input type="number" name="quantity" placeholder="quantity"></td>
                <td><a href="#">Buy</a></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</form>


