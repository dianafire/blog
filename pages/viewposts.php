<?php
class viewPosts{
    public function view(){
    html_header();
    echo"<div class='viewposts'>";
    echo "<blockquote>";
    echo"<h3>$title</h3>";
    echo"<h4>$description</h4>";
    echo "<p>$text</p>";
    echo "<small>$catTitle,$date</small>";
    //echo"<small><a class='btn btn-primary btn-xs' href='?controller=viewposts&action=view'>Виж целия текст:</a></small>";
    echo "</blockquote>";
    echo"</div>";
    html_footer();
    
    }
}