<?php

    class User{


        public function writePost(){

            html_header();?>

            <form action="?controller=User&action=writePost" method="post">
                <div class="form-group">
                    <label for="title">Заглавие: </label>
                    <input type="text" name="title" class="form-control" id="title" placeholder="Заглавие..." required="">
                </div>
                <div class="form-group">
                    <label for="description">Кратко описание: </label>
                    <input type="text" name="description" class="form-control" id="description" placeholder="Парола..." required="">
                </div>
                <div class="form-group">
                    <label for="posttext">Текст: </label>
                    <input type="text" name="posttext" class="form-control" id="posttext" placeholder="Повторение..." required="">
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

            html_footer();

            if(isset($_POST['send']) && isset($_POST['check']) && $_POST['check']=="1"){

                $title=Validate::post('title','string');
                $description=Validate::post('description','string');
                $text=Validate::post('posttext','string');
                $date= date('Y-m-d H:i:s');
                $activ=Validate::post('activ','string');
                $catID=Validate::post('category','number');



                $insert=DataBase::getDB()->queryInsert("INSERT INTO blog.post (title,description,`text`,`date`,activ,catID)
                values('$title','$description','$text','$date',$activ,$catID);");


            }

        }

    }



?>