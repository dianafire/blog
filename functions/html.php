<?php
function html_header(){
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Blog</title>


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>



        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">


        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">

<style>
            .alone{
                width: 400px;
                height: 500px;
                border: 1px solid blue;
                margin-left: 150px;
                background-color: lightgray;
            }        
</style>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>


        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

    </head>

    <body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="?controller=Home&action=index">Начало</a>
                <a class="navbar-brand" href="?controller=User&action=writePost">Напиши пост</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">

                    <li class="dropdown">
                        <a href="?controller=Categories&action=index" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Категории <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu" name="name">
                            <li><a href="?controller=Categories&action=index">History</a></li>
                            <li><a href="?controller=Categories&action=index">Math</a></li>
                            <li><a href="?controller=Categories&action=index">Geography</a></li>
                    </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
            <div class="changeinfo">
                <a href="?controller=AddRemove&action=form">Промени коментар</a>
            </div>
        </div><!-- /.container-fluid -->
    </nav>
        <?php
            function posts (){                
            ?>
        <div>
  <ul class="pagination">
  <li class="disabled"><a href="?controller=Home&action=index">«</a></li>
  <li class="active"><a href="?controller=Home&action=index">1</a></li>
  <li><a href="?controller=Home&action=index">2</a></li>
  <li><a href="?controller=Home&action=index">3</a></li>
  <li><a href="?controller=Home&action=index">4</a></li>
  <li><a href="?controller=Home&action=index">5</a></li>
  <li><a href="?controller=Home&action=index">»</a></li>
</ul>
        </div>
        <?php
            }
        ?>       
<?php
}
function html_footer(){
    ?>
         
    </body>
    </html>
    <?php
}