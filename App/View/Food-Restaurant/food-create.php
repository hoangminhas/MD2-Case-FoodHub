<div class="nav-bar">
    <?php include "App/View/layout/navbar.php"?>
</div>
<form action=""method="post" enctype="multipart/form-data">
    FoodName <input type="text" name="name"><br>
    <input type="file" name="image"><br>
    <input type="text" name="price" placeholder="price"><br>
    <input type="text" name="Description" placeholder="Description"><br>
    <button>CreateFood</button>
</form>
