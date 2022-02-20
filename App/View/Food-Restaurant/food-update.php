<div class="nav-bar">
    <?php include "App/View/layout/navbar.php"?>
</div>

<form action="" method="post" enctype="multipart/form-data">
    <input type="text" name="name" value="<?php echo $foods->name?>" placeholder="food name"><br>
    <input type="text" name="price" value="<?php echo $foods->price?>" placeholder="price"><br>
    <input type="text" name="description" value="<?php echo $foods->description?>" placeholder="description"><br>
    <input type="file" name="image" src="<?php echo $foods->image?>"><br>
    <button>UpdateFood</button>
</form>
