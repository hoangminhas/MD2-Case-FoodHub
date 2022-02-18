<table>
<thead>
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Price</th>
    <th>Description</th>
</tr>
</thead>
<tbody>
<?php if (!empty($foodDetails)): ?>
    <?php foreach ($foodDetails as $foodDetail):?>
        <tr>
            <th><?php echo $foodDetail->id?></th>
            <td><?php echo $foodDetail->name?></td>
            <td><?php echo $foodDetail->price?></td>
            <td><?php echo $foodDetail->description?></td>
                <a href="index.php?page=category-detail&id=<?php echo $foodDetail->id?>" >Show</a>
            </td>
        </tr>
    <?php endforeach;?>
<?php else:?>
    <tr>
        <td colspan="3">Chưa có chuyên mục trên hệ thống</td>
    </tr>
<?php endif; ?>

</tbody>
</table>