<?php

    class Home{

        public function index(){
            html_header();

            $on_page = 6;
            $page = 1; //// GET

            $offset = $page * $on_page;

            $select=DataBase::getDB()->select("SELECT * FROM blog.post
                                              where activ=1
                                              ORDER BY `date` DESC
                                              limit $offset,6;");

            if ($select){

                foreach($select as $post){
                    $title=$post['title'];
                    $description=$post['description'];
                    $text=$post['text'];
                    $date=$post['date'];


                    echo "$title <br />";
                    echo "$description <br />";
                    echo "$text <br />";
                    echo "$date <br />";

                    echo "<br />  <br />";

                }
            }



            html_footer();
        }



    }


?>