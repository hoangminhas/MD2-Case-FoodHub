<div class="nav-bar">
    <?php include "App/View/layout/navbar.php"?>
</div>
<div class="container">
    <h2>Add Food</h2>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="text" name="name" placeholder="food name"><br>
        <input type="text" name="price" placeholder="price"><br>
        <input type="text" name="description" placeholder="description"><br>
        <input type="file" name="image"><br>
        <button>CreateFood</button>
    </form>
</div>

