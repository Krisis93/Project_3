<?php 
    session_start();
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
    
    <div class="content">
        <div id="logo" class="logo">
            <div class="container">
                <div class="row">
                   <div class="col-lg-4 col-md-4"></div>
                   <div class="col-lg-4 col-md-4"><div class="image">
                        <a href="index.php"><img src="images/Logo_Transparent.png"></a>
                    </div></div>
                   <div class="col-lg-4 col-md-4"></div>
                    
                </div>
            </div>
        </div>
        <div id="login" class="login">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4"></div>
                    <div class="col-lg-4 col-md-4" id="back-login">
                         <form action="login.php" method="POST">
                           <div class="form-group" autocomplete="on">
                                <div class="inner-addon left-addon">
                                   <i class="glyphicon glyphicon-user"></i>
                                   <input id="logd" type="email" name="email3" class="form-control" placeholder="e-pasts" autocomplete="off">
                                </div>
                            </div>
                            <div class="form-group" autocomplete="on">
                               <div class="inner-addon left-addon">
                                <i class="glyphicon glyphicon-lock"></i>
                                <input id="logd" type="password" name="password" class="form-control" placeholder="parole" autocomplete="new-password" autocomplete="off">
                                </div>
                            </div>
                            <br>
                            <button type="submit" class="button-login">Ienākt!</button>
                        </form>
                    </div>
                    <div class="col-lg-4 col-md-4"></div>
                </div>
            </div>
        </div>
        <br>
        <div id="footer" class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                    <button class="button-izvelne" type="button" data-toggle="modal" data-target="#modal-2">Jauns konts</button>
                        <div class="modal fade" id="modal-2">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h2>Jauns konts</h2>
                                    </div>
                                    <div class="modal-body">
                                        <form action="register.php" method="POST" onsubmit="return check()" id="form1">
                                           <div class="form-group" autocomplete="on">
                                                <input type="text" id="email" name="email" class="form-control" placeholder="E-pasts" autocomplete="off">
                                           </div>
                                           <div class="form-group" autocomplete="on">
                                                <input type="text" id="username" name="username" class="form-control" placeholder="Lietotājvārds" autocomplete="off">
                                           </div>
                                           <div class="form-group" autocomplete="on">
                                                  <input type="password" id="password" name="password" class="form-control" placeholder="Parole" autocomplete="off">
                                           </div>
                                           <div class="form-group" autocomplete="on">
                                                <input type="password" id="password2" name="password2" class="form-control" placeholder="Atkārto paroli" autocomplete="off">
                                           </div>
                                           <br>
                                           <button class="m-button" id="send" type="submit">Izveidot</button>
                                           <button class="m-button" id="dismiss" data-dismiss="modal">Aizvērt</button>
                                        </form>
                                    </div>
                                </div>
                                </div>
                            </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                    <button class="button-izvelne" type="button" data-toggle="modal" data-target="#modal-1">Aizmirsu paroli</button>
                        <div class="modal fade" id="modal-1">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h2>Aizmirsu paroli</h2>
                                    </div>
                                    <div class="modal-body">
                                        <form form action="forgot-password.php" method="post" onsubmit="" id="form2">
                                            <div class="form-group" autocomplete="on">
                                                <input type="email" name="email2" id="email2" class="form-control" placeholder="E-pasts" autocomplete="off">
                                            </div>
                                            <br>
                                            <button class="m-button" id="send2" type="submit">Nosūtīt</button>
                                        <button class="m-button"  id="dismiss2" data-dismiss="modal">Aizvērt</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                    <button class="button-izvelne" type="button" data-toggle="modal" data-target="#modal-3">Par mums</button>
                        <div class="modal fade" id="modal-3">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h2>Par mums</h2>
                                    </div>
                                    <div class="modal-body">
                                        <p>Šī vietne darbojas kā iedvesmas lādiņš studentiem ,kuriem ikdienas gaitās trūkst motivācija. Lai arī kādā spektrā students censtos attīstīt savu "es", viņam ir nepieciešams papildus lādiņš, kas spētu mudināt, motivēt un noturēt uzmanību konkrētajai nodarbei.</p>
                                        <br>
                                        <button class="m-button" data-dismiss="modal">Aizvērt</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>

    
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/correct.js"></script>
  </body>
</html>