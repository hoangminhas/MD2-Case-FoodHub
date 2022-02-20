<!--<div class="nav-bar">-->
<!--    --><?php //include "App/View/layout/navbar.php"?>
<!--</div>-->
<!--<div class="container">-->
<!--    <h2>Add Food</h2>-->
<!--    <form action="" method="post" enctype="multipart/form-data">-->
<!--        <input type="text" name="name" placeholder="food name"><br>-->
<!--        <input type="text" name="price" placeholder="price"><br>-->
<!--        <input type="text" name="description" placeholder="description"><br>-->
<!--        <input type="file" name="image"><br>-->
<!--        <button>CreateFood</button>-->
<!--    </form>-->
<!--</div>-->




<?php include "App/View/layout/navbar.php"?>
<div class="container" style="background-color: rgba(150,179,232,0.72)">
<h2>Add Food</h2>
<form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="exampleInputEmail1">Food Name</label>
        <input type="text" name="name" class="form-control"  placeholder="food name">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Price</label>
        <input type="text" class="form-control" placeholder="price">
    </div>


    <div class="form-group">
        <label for="exampleFormControlTextarea1">Description</label>
        <textarea class="form-control" name="description" rows="3" placeholder="Không ăn Sẽ gầy(^_^)"></textarea>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Image</label>
        <input type="file" name="image">
    </div>
    <button type="submit" class="btn btn-success"">Send</button>
</form>
</div>