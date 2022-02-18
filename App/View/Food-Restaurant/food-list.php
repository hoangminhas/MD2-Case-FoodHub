<table border="3px">
    <a href="index.php?page=logout">Log Out</a>
    <tr>
        <th>Name</th>
        <th>Image</th>
    </tr>
    <?php foreach ($foods as $food):?>
    <tr>
        <td><?php echo $food->name?></td>
        <td><?php echo $food->image?></td>
    </tr>
    <?php endforeach;?>
</table>
