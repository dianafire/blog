<?php
class AddRemove{
    public function form(){
        html_header();
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
        $user='misho';
        $password=123456;
        if(isset($_POST['sent']) && $_POST['sent'] == '1'){
            
            if ($_POST['user']==$user && $_POST['pass']==$password){
                $user=Validate::post('user','string');
                $pass=Validate::post('pass','string');
                $select=DataBase::getDB()->select("SELECT k.catID, k.catTitle, c.activ, c.catID, "
                        . "c.date, c.description, c.text, c.title FROM blog.categories AS k "
                        . "LEFT JOIN blog.post AS c ON c.catID = k.catID;");
            if ($select){
                foreach($select as $post){
                    $title=$post['title'];
                    $description=$post['description'];
                    $text=$post['text'];
                    $date=$post['date'];
                    $catTitle=$post['catTitle'];
                    echo"<div'>";
                    echo"<blockquote>";
                    echo"<h3>$title</h3>";
                    echo"<h4>$description</h4>";
                    echo"<p>$text</p>";
                    echo"<small>$catTitle,$date</small>";
                    echo"<small><a href='?controller=AddRemove&action=uploaddelete'>"
                    . "<input type='submit' value='upload'>"
                    . "<input type='hidden' name='$title' value='1'/>"
                    . "<input type='submit'  value='delete'>"
                    . "<input type='hidden' name='$title' value='2'/></a></small>";
                    echo"</div>";
                }//foreach
                if(isset($_POST[$title]) && $_POST[$title] == '1'){
                    ?>
                    <form action="?controller=User&action=writePost" method="post">
                <div class="form-group">
                    <label for="title">Заглавие: </label>
                    <input type="text" name="title" class="form-control" id="title" placeholder="Заглавие..." required="">
                </div>
                <div class="form-group">
                    <label for="description">Кратко описание: </label>
                    <input type="text" name="description" class="form-control" id="description" placeholder="Описание..." required="">
                </div>
                <div class="form-group">
                    <label for="posttext">Текст: </label>
                    <input type="text" name="posttext" class="form-control" id="posttext" placeholder="Текст..." required="">
                </div>

                <div class="radio">
                    <label>
                        <input name="activ" id="activ" value="0" checked="" type="radio">
                        Неактивен
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input name="activ" id="activ" value="1" type="radio">
                        Активен
                    </label>
                </div>

                <div class="radio">
                    <label>
                        <input name="category" id="category" value="1" checked="" type="radio">
                        История
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input name="category" id="category" value="2" type="radio">
                        Математика
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input name="category" id="category" value="3" type="radio">
                        География
                    </label>
                </div>


                <button type="submit" name="send" class="btn btn-default">Изпрати</button>
                <input type="hidden" name="check" value="1">
            </form>
            <?php
                }
            }//if
            }//if
                else {
            echo 'Incorrect username or password !';
               }
        }
        //end function
}
    public function uploaddelete(){
        
}//end delete
} 
