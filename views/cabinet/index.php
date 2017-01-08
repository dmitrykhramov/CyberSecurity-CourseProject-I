<?php include ROOT . '/views/layouts/header.php'; ?>

<!-- this css 丑毙了！！-->
<section>
    <div class="header-top">
        <div class="container">
            <div class="row">               
                <div class="pull-left">
                    <h3><?php    
                        $b = time();

                        $hour = date("g", $b);
                        $m    = date("A", $b);

                        if ($m == "AM") {
                          if ($hour == 12) {
                            echo "Good Evening, ";
                          } elseif ($hour < 4) {
                            echo "Good Evening, ";
                          } elseif ($hour > 3) {
                            echo "Good Morning, ";
                          }
                        }

                            elseif ($m == "PM") {
                          if ($hour == 12) {
                            echo "Good Afternoon, ";
                          } elseif ($hour < 6) {
                            echo "Good Afternoon, ";
                          } elseif ($hour > 5) {
                            echo "Good Evening, ";
                          }
                        }
                    ?> 
                    <?php echo $user['firstName'];
                    ?>!
                    </h3>
                </div>
                <div class="col-md-7 pull-left">
                    <h3>Personal Area</h3> 
                </div>
            </div>
        </div>
        <div class="header-top">
            <div class="container">
                <div class="row pull-left">                  
                    <ul>
                        <li><h4><a href="/cabinet/edit">Edit user information</a></h4></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    </br>
    </br>
    </br>
    </br>
    </br>
    </br>
</section>    


<?php include ROOT . '/views/layouts/footer.php'; ?>

