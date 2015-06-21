<?php
class Home{
    public function index(){
            html_header();
            /*$on_page = 6;
            $page = 1; //// GET
            $offset = $page * $on_page;*/
            $select=DataBase::getDB()->select("SELECT "
                    . "k.catID, k.catTitle, c.activ, c.catID, c.date, c.description, c.text, c.title "
                    ."FROM blog.categories AS k LEFT JOIN blog.post AS c ON c.catID = k.catID WHERE activ=1;");
            if ($select){
                foreach($select as $post){
                    $title=$post['title'];
                    $description=$post['description'];
                    $text=$post['text'];
                    $date=$post['date'];
                    $catTitle=$post['catTitle'];
                    //$catID=$post['catID'];
                    echo"<div'>";
                    echo"<blockquote>";
                    echo"<h3>$title</h3>";
                    echo"<h4>$description</h4>";
                    echo"<p>$text</p>";
                    echo"<small>$catTitle,$date</small>";
                    echo"<small><a href='?controller=viewposts&action=view&params=$title'>"
                    . "<input type='hidden' name='prati' value='$title'>"
                    . "<input type='submit' value='Виж целия текст'></a></small>";
                    echo "</blockquote>";
                    echo"</div>";
            }
            }
            posts();
            html_footer();
        }
    }
    