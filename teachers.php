<!DOCTYPE html>
<html lang="en">
<?php
   error_reporting(-1);
   ini_set('display_errors', 'On');
   include 'funs.php';

   head("round_about"); ?>

 <body>
    <div class="container">

<?php navbar("Materials") ?>

        <div class="row">

            <div class="col-lg-12">
                <h2 class="page-header"><a name="stem">Monster Appetite Team</a></h2>
            </div>

        </div>

        <div class="row">
            <div class="col-lg-4 col-sm-6">
                <img height=200 class="img-circle" src="imgs/SantolucitoHeadshot.png">
                <h3>Mark Santolucito
                    <small>Game Dev</small>
                </h3>
                <p>Mark is a PhD student at Yale in the Computer Science. <a href="http://www.marksantolucito.com">More info...</a></p>
            </div> 

            <div class="col-lg-4 col-sm-6">
                <img height=200 class="img-circle" src="imgs/MariaPic.png">
                <h3>Maria Hwang
                    <small>Game Designer / Dev</small>
                </h3>
                <p> Maria is a doctoral student at Teachers College, Columbia Univeristy</p>
            </div>
            
        </div>

       <footer>
        <br><br><br><br><br><hr>
       </footer>

    </div>
    <!-- /container -->

    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>

</body>

</html>
