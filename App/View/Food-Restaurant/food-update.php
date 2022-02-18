<div class="nav-bar">
    <?php include "App/View/layout/navbar.php"?>
</div>
<form action=""method="post" enctype="multipart/form-data">
    FoodName <input type="text" name="name" value="<?php echo $foods->name?>"><br>
    <input type="file" name="image"><br>
    <button>UpdateFood</button>
</form>
