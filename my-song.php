<?php 
    include 'connect.php';

    $result = mysqli_query($conn, "SELECT * FROM music WHERE cat='".$_SESSION['id']."' "); 
            
    $output = '';
        
    while($row = mysqli_fetch_assoc($result)){
                $id = $row['id'];
                $name = $row['name'];
                $url = $row['url'];
        
                $output .= "<div class='player'>
                                <h2>$name</h2><br/>
                              </div>
                              <div class='playz'>
                                    <audio id='playeris' src='$url' controls></audio><br/>
                              </div>
                              <div class='buty'>
                                    <form action='delete2.php?id=$id' method='post'>
                                        <input type='submit' id='player-button' name='submit1' value='dzēst'/>
                                    </form>
                              </div>";
              
                
                
            }
        
            
         if (mysqli_num_rows($result)==0) {
                    $output = "<br/><strong>Jūs neesat pievienojis nevienu dziesmu savai mūzikas listei!</strong>";
                }
        ?>