<!DOCTYPE html>
<html lang="en">
<?php
   error_reporting(-1);
   ini_set('display_errors', 'On');
   include 'funs.php';

   head("round_about"); ?>

 <body>
    <div class="container">

<?php navbar("Students") ?>

        <div class="row">

            <div class="col-lg-12">
                <h1 class="page-header">The best part!
                    <small>Student work</small>
                </h1>
                <p>You can check out all the students work online.</p>
            </div>

        </div>


      <div class="row marketing">
        <div class="col-lg-6">
          <h2>Summer 2014</h2>
          <?php
          function student($num,$name){
             echo "<h4><a href=\"/~lotus$num\">$name</a></h4>";
          }
          
          echo "<h4>8:30am classes</h4>";
          student(3,"Trista");
          student(5,"Betty");
          student(10,"Ellie");
          student(6,"Chen");
          student(7,"Kat");
          student(8,"Shirly");
          student(14,"Tommy");
          student(12,"Linda");
          student(16,"Chuck");
          student(18,"Annie");
          student(13,"Tira");
          student(21,"Ryan");
          student(22,"Christina");
          student(23,"Xiamara");
          student(26,"Olaf");
          student(24,"Angie");
          student(27,"Seneca");
          student(30,"Adonna");
          student(28,"Lisa");
          student(31,"Brenda");
          student(32,"Justin");
          student(33,"Amy");
          student(46,"Gale");
          student(43,"Kelyce");
          student(47,"James");
          student(48,"Siddiq");
          student(49,"Leon");
          student(50,"Gordon");

          echo "<h4>10am class</h4>";
          student(34,"Jane");
          student(35,"Amy");
          student(36,"Ben");
          student(38,"Ricky");
          student(37,"Doris");
          student(39,"Mary");
          student(40,"Michael");
          student(41,"Mark");
          
          ?>
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
