<?php
class viewPosts{
    public function view(){
    html_header();
    $parameter=$_GET['params'];
    $select=DataBase::getDB()->select("SELECT k.catID, k.catTitle, c.activ, c.catID, "
            . "c.date, c.description, c.text, c.title FROM blog.categories AS k LEFT JOIN "
            . "blog.post AS c ON c.catID = k.catID WHERE `title`='$parameter'");
    if($select){ 
        foreach ($select as $post){
            $title=$post['title'];
            $description=$post['description'];
            $text=$post['text'];
            $date=$post['date'];
            $catTitle=$post['catTitle'];
            echo"<div class='alone'>";
            echo "<blockquote>";
            echo"<h3>$title</h3>";
            echo"<h4>$description</h4>";
            echo "<p>$text</p>";
            echo "<small>$catTitle,$date</small>";
            echo "</blockquote>";
            echo"</div>";
            } 
    }
 else {
                echo 'not valid data';
 }
 
    html_footer();
    
    }
}