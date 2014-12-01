<?php

//test code 
error_reporting(-1);
ini_set('display_errors', 'On');
/*echo "test";
head("jumbotron-narrow");
echo "<body>";
navbar("Home");
*/


function head($css_sheet){
  echo "
 <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>Monster Appetite</title>

    <!-- Bootstrap core CSS -->
    <link href=\"bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">

    <link href=\"bootstrap/css/$css_sheet.css\" rel=\"stylesheet\">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src=\"bootstrap/js/ie10-viewport-bug-workaround.js\"></script>

 </head>";
}

function navbar($page){
  echo"
      <div class=\"header\">
        <ul class=\"nav nav-pills pull-right\">";

   echo " <li ";
   if ($page == 'Home') echo "class=\"active\"";
   echo"><a href=\"/\">Home</a></li>";

   echo " <li ";
   if ($page == 'Team Members') echo "class=\"active\"";
   echo"><a href=\"teachers.php\">Team Members</a></li>";

   echo " <li ";
   if ($page == 'Fixing') echo "class=\"active\"";
   echo"><a href=\"students.php\">Fixing</a></li>";

   echo " <li ";
   if ($page == 'Fixing') echo "class=\"active\"";
   echo"><a href=\"photos.php\">Fixing</a></li>";

   echo " <li ";
   if ($page == 'Fixing') echo "class=\"active\"";
   echo"><a href=\"location.php\">Fixing</a></li>";

   echo" </ul>
        <h3 class=\"text-muted\">Monster Appetite</h3>
      </div>";
}


?>


