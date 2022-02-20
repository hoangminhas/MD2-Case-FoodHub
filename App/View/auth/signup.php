<?php

?>
<div class="container-fluid">
    <h2 class="text-center">Sign Up</h2>
    <form action="#" method="post">
            <input type="text" name="name" placeholder="name">
        <br><br>
            <input type="email" name="email" placeholder="email" required>
        <br><br>
            <input type="password" name="password" placeholder="password">
        <br><br>
            <input type="text" name="phone" placeholder="phone">
        <br><br>
        <select name="role" id="select-role" required>
            <option value="#" disabled selected>Chon loai tai khoan</option>
            <option value="1">Customer</option>
            <option value="2">Restaurant</option>
        </select><br>
        <div class="row mt-3">
            <div class="col-md-1">
                <button class="btn btn-primary btn-block">
                    Sign Up
                </button>
            </div>
            <div class="col-md-1">
                <a href="index.php?page=login">
                    <button type="button" class="btn btn-block btn-info">
                        <i class="fas fa-arrow-circle-left"></i> Login
                    </button>
                </a>
            </div>
        </div>
    </form>
</div>


