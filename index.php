<!DOCTYPE html>
<html lang="en">

        <?php
          error_reporting(-1);
          ini_set('display_errors', 'On');

           include 'funs.php';
           head("jumbotron-narrow"); ?>
 <body>
    <div class="container">

<?php navbar("Home"); ?>


      <div style="background-color:#B3B3B3" class="jumbotron">
        <img src="imgs/logo.png">
        <p align="center" class="lead">Hello everyone! Welcome to the LOTUS STEM repository for course work.</p>
        <p align="center" class="lead">You can find all the materials for our class here.</p>
      </div>

      <div class="row marketing">
        <div class="col-lg-6">
          <h2>Lessons</h2>
          <h4><a href="pdfs/0_ssh.pdf">Lesson 0</a></h4>
          <p>In this lesson we learn how to log in to the server and get started.</p>

          <h4><a href="pdfs/1_term.pdf">Lesson 1</a></h4>
          <p>Here we learn about the terminal, probably the single most important tool we will use this summer. The terminal is how you work on the server.</p>

          <h4><a href="pdfs/2_vi.pdf">Lesson 2</a></h4>
          <p>Vi is the #2 pencil of the digital world. Everything you write will be in vi. It might be dificult at first, but soon you will never want to use Word again!</p>

          <h4><a href="pdfs/3_intro.pdf">Lesson 3</a></h4>
          <p>Let's practive using Vi. Write up your answers these questions, then post them on your own website!</p>

          <h4><a href="pdfs/4_scarf.pdf">Lesson 4</a></h4>
          <p>Time to start programming. We touch on some basic parts of python and dive right in to our first programing.</p>

          <h4><a href="pdfs/5_hangman.pdf">Lesson 5</a></h4>
          <p>If statements.</p>

          <h4><a href="pdfs/6_nim.pdf">Lesson 6</a></h4>
          <p>writing the game Nim and eating jellybeans!</p>

          <h4><a href="pdfs/7_hilo.pdf">Lesson 7</a></h4>
          <p>writing the game hilo and learning about types</p>

          <h4><a href="pdfs/8_words.pdf">Lesson 8</a></h4>
          <p>make a word coud visualization and learn about functions</p>

          <h4><a href="pdfs/9_crypto.pdf">Lesson 9</a></h4>
          <p>learn about security and cryptography. This is the first step to hacking a system</p>

          <h4><a href="pdfs/10_html.pdf">Lesson 10</a></h4>
          <p>the very basics for how to make a website on the server</p>

        </div>

        <div class="col-lg-6">
          <h2>Code files</h2>
          <h4><a href="code/scarf.py">scarf.py</a></h4>
          <p>This file is introduced in Lesson 4, it introduces variables and loops.</p>

          <h4><a href="code/hangman.py">hangman.py</a> and 
              <a href="code/hangman_helper.py">hangman_helper.py</a></h4>
          <p>The classic game of hangman, this gives us more practice with loops, variables, and introduces conditional statments.</a>
        </div>
        

       <div class="col-lg-6">
          <h2>Project Options</h2>
          <h4>1) A Python program</h4>
          <p>Back to the terminal to write some python code. You will need some more advaned concepts than just the ones we covered as a class. Check out <a href="http://www.codecademy.com/">Code Academy</a> for some extra help and lessons. Also dont be afraid to search online for help, there are lots more great resources!</p>

          <h4>2) Make a Game and a website</h4>
          <p> Make a game and a website to showcase the game. Use the resources listed for project #3 to help you with the website. Use <a href="http://www.flowlab.io">flowlab.io</a> to build you game in a programming language similar to Max.</p>
          <p>If you are making a game, here are the requirements...</p>
          <div class="well">
        	<ul class="list-group checked-list-box">
                  <li class="list-group-item"><strong>Game must have...</strong></li>
                  <li class="list-group-item">Originality and creativity. May be inspired by another game, but not a copy</li>
                  <li class="list-group-item">A backstory (plot) for the game</li>
                  <li class="list-group-item">Three original sprites (the artwork for the blocks)</li>
                  <li class="list-group-item">At least three levels</li>
                  <li class="list-group-item"><strong>Website must have...</strong></li>
                  <li class="list-group-item">The actual game</li>
                  <li class="list-group-item">Description of what each student contributed</li>
                  <li class="list-group-item">Controls for the game</li>
                  <li class="list-group-item">Backstory (plot) of the game</li>
                  <li class="list-group-item">At least one image</li>
                  <li class="list-group-item">A link to another student's game that you like</li>
                  <li class="list-group-item">Whichever student does not put the game on their site should setup their index.html to have a link to their partner's site.</li>
                </ul>
            </div>

          <h4>3) Make a website</h4>
          <p>Make a personal website to show off how awesome you are. This is great for having an online resume or for having a blog about your interests. <a href="http://www.codecademy.com/">Code Academy</a> also has some great lessons on websites under HTML and CSS. You will also want to use <a href="http://getbootstrap.com/">Bootstrap</a> to make your website look fancy. This website uses bootstrap!</p>
          <p>To make editing easier for the website try using a site like <a href="http://www.htmlinstant.com/">HTML INSTANT</a>. Be sure to copy and paste your code somewhere because this site will not save it for you. Once you are done with your site, you can copy and paste the code into the terminal to put it online.</p>

          <h4>4) Compose electronic music</h4>
          <p>Use <a href="http://cycling74.com/">Max</a> to compose a piece of music to be played by the computer. You can also integrate live audio input so you can sing along. Be sure to check out all the tutorials in the Help section of Max.<p>
      </div>

      <div class="footer">
      </div>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
</html>
