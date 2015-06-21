<?php
class AddRemove{
    public function form(){
        ?>
<form method="post" action="">
<div>
    <div>
    <p>User Name :</p>
    <input type="text" name="user"><br/>
    </div>   
    <div>
    <p>Password :</p>
    <input type="password" name="pass">
    </div>
    <div>
    <input type="submit" value="login">
    <input type="hidden" name="sent" value="1">
    </div>
</div>
    </form>
        <?php
    }
    public function addremove(){
        
    }
}
