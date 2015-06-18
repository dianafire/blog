<?php

    class Categories{

        public function index(){

            $select=DataBase::getDB()->select("SELECT * FROM blog.category;");
            html_header();
            if ($select){

                foreach($select as $category){
                    $catID=$category['catID'];
                    $catTitle=$category['catTitle'];

                    echo "$catTitle <br />";

                }
            }
            html_footer();

        }

    }



