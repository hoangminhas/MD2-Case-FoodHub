<div class="nav-bar">
    <?php include "App/View/layout/navbar.php"?>
</div>
<form action=""method="post" enctype="multipart/form-data">
    FoodName <input type="text" name="name"><br>
    <input type="file" name="image"><br>
    <input type="text" name="description" placeholder="description"><br>
    <button>CreateFood</button>
</form>
