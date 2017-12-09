<?php
    session_start();
    include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Soundelicous</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans|PT+Serif" rel="stylesheet">
  </head>
  <body>
       <div class="loggedcontent">
        <nav id="nav" class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="row">
            <div class="navbar-header page-scroll">
                <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="loggedin.php"><img src="images/Logo_Transparent.png" alt="" class="bilde"></a>
                <p class="hellothere">Čau, <?php
                        if (isset($_SESSION['username'])){
                            echo $_SESSION['username'];
                        } else {
                            echo "You are not logged in!";
                        }
                       ?></p>
            </div>
               <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <form id="searchy" action="search.php" method="post">
                            <a href="#" onclick="document.getElementById('searchy').submit()"><i class="fa fa-search" aria-hidden="true" type></i></a>
                            <input id="searchbar" type="text" name="keywords" autocomplete="off">
                        </form>
                    </li>
                    <li><a href="upload-song.php"><i class="fa fa-play" aria-hidden="true"></i></a></li>
                    <li><a href="user-favorite.php" id="m-button"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                    <li><a href="index.php" onClick="doSomething();"><i class="fa fa-sign-out" aria-hidden="true"></i></a></li>
                </ul>
               </div>
            </div>
        </div>
        </nav>
        
       <!--- Categories --->
        <div class="categories" id="categories">
          <div class="container">
             <div class="row">

              <div class="col-lg-12 col-md-12"> 
              <?php
                    if(isset($_POST['keywords'])) {
                    $search = $_POST['keywords'];
                    $search = preg_replace("#[^0-9a-z]i#","", $search);

                    $query = mysqli_query($conn,"SELECT * FROM music WHERE name LIKE '%$search%'") or die ("Could not search");
                    $count = mysqli_num_rows($query);
    
                    if($count == 0){
                        echo "<strong>Nekas netika atrasts!</strong>";
                    }else{
                        while ($row = mysqli_fetch_array($query)) {
                            $id = $row['id'];
                            $name = $row['name'];
                            $url = $row['url'];
                            
                            echo "<div class='player'>
                                <h2>$name</h2><br/>
                              </div>
                              <div class='playz'>
                                    <audio id='playeris' src='$url' controls></audio><br/>
                              </div>
                              <div class='buty'>
                                    <form action='favorite.php?id=$id&name=$name&url=$url' method='post'>
                                        <input type='submit' id='player-button' name='submit1' value='patīk'/>
                                    </form>
                              </div>";
                        }
                    }
                }
                ?>   
              </div>
             </div>
          </div>
          <br><br><br><br><br>
          <img src="images/gu.png" alt="" id="show"> 
      </div>
       
       <!---Footer--->
       <div class="footer2" id="footer2">
          <div class="brumbrum">
           <div class="container">
               <div class="row">
                 <br>
                  <img src="images/gu3.png" alt="" id="hide">
                   <h2>Kontaktējies ar mums</h2>
                   <div class="col-lg-6 col-md-6">
                     <form role="form" action="contact.php" method="post">
                      <div class="col-lg-12 col-md-12">                  
                       <div class="input-group">
                           <span class="input-group-addon" id="sizing-addon1"><i class="fa fa-question" aria-hidden="true"></i></span>
                           <input type="text" name="subject" id="subject" class="form-control" aria-describedby="sizaing-addon1" placeholder="Tēma">
                       </div>
                       </div>
                       <div class="col-lg-12 col-md-12">
                       <div class="message input-group">
                         <textarea name="message" id="message" cols="100" rows="7" class="form-control" placeholder="Tava ziņa"></textarea>
                       </div>
                       </div>
                        <div class="col-lg-12 col-md-6">
                            <div class="submit">
                                <button class="btn btn-lg" id="send3" type="submit">Nosūtīt</button>
                            </div>
                        </div>
                     </form>
                   </div>
                   <div class="media col-lg-6 col-md-6">
                      <a href="#"><i class="social fa fa-facebook-official" aria-hidden="true"></i></a>
                      <a href="#"><i class="social fa fa-instagram" aria-hidden="true"></i></a>
                      <a href="#"><i class="social fa fa-twitter-square" aria-hidden="true"></i></a>
                   </div>
                </div>
               </div>
               </div>
           </div>
       </div>
    
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript">
            function doSomething() {
            $.get("logout.php");
            return false;
            }
        </script>
   
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/nav-shrink.js"></script>
    <script src="js/hidden-f.js"></script>
  </body>
</html>