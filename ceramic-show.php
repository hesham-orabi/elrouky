<?php

    $style_name ="layout/css/ceramic/ceramic-show.css";
    include "init.php";
    $id=isset($_GET['id']) ? intval($_GET['id']) : 0;

    $stmt=$con->prepare("SELECT * FROM ceramic WHERE Id=?");
    $stmt->execute(array($id));
    $row=$stmt->fetch();
    $count=$stmt->rowCount();
    if($count > 0){
?>
        <section class="ceramic-show">
            <div class="header">
                <h3>
                   <?php
                   
                    switch($row['CompanyName']){
                        case 'cleopatra':
                            echo 'سيراميك كليوباترا';
                            break;
                        case 'gemma':
                            echo 'سيراميك الجوهرة';
                            break;
                        case 'gloria':
                            echo 'سيراميك جلوريا';
                            break;
                        case 'remas':
                            echo 'سيراميك ريماس';
                            break;
                        case 'elameer':
                            echo 'سيراميك الامير';
                            break;
                        case 'royal':
                            echo 'سيراميك رويال';
                            break;          
                    }
            
                   ?>
                </h3>
            </div>
            <div class="container">
                <div class="row">

                    <div class="col-md-6">
                        <img src="<?php
                                        switch($row['CompanyName']){
                                        case 'cleopatra':
                                            echo 'layout/images/ceramic/cleopatra/' . $row['Image'];
                                            break;
                                        case 'gemma':
                                            echo 'layout/images/ceramic/gemma/' . $row['Image'];  
                                            break;
                                        case 'gloria':
                                            echo 'layout/images/ceramic/gloria/' . $row['Image'];      
                                            break;
                                        case 'remas':
                                            echo 'layout/images/ceramic/remas/' . $row['Image'];  
                                            break;
                                        case 'elameer':
                                            echo 'layout/images/ceramic/elameer/' . $row['Image'];     
                                            break;
                                        case 'royal':
                                            echo 'layout/images/ceramic/royal/' . $row['Image'];  
                                            break;          
                                    }
                    
                                    ?>"
                                alt="<?php echo $row['Image']; ?>"
                                
                            />

                    
                    </div>

                    <div class="col-md-6">
                        <div class="info text-center">
                        <img src="<?php 
                                        switch($row['CompanyName']){
                                            case 'cleopatra':
                                                echo 'layout/images/ceramic/cleopatra/cleopatra.jpg'; 
                                                break;
                                            case 'gemma':
                                                echo 'layout/images/ceramic/gemma/gemma.jpg'; 
                                                break;
                                            case 'gloria':
                                                echo 'layout/images/ceramic/gloria/GLORIA.jpg'; 
                                                break;
                                            case 'remas':
                                                echo 'layout/images/ceramic/remas/remas.jpg'; 
                                                break;
                                            case 'elameer':
                                                echo 'layout/images/ceramic/elameer/Elameer.jpg'; 
                                                break;
                                            case 'royal':
                                                echo 'layout/images/ceramic/royal/ROYAL.jpg'; 
                                                break;          
                                        }

                         
                                    ?>"
                        />

                    
                            <h1><?php echo $row['Name']; ?></h1>
                            <p>
                                <?php

                                    if($row['Type'] == 'floor'){
                                        echo "Floor";
                                    }else if($row['Type'] == 'kitchen'){
                                        echo "Kitchen";
                                    }else{
                                        echo "Bathroom";
                                    }
                                ?>
                            </p>
                            <p><?php echo strtoupper($row['CompanyName']) ?></p>
                            <span class="sp1">العلامة التجارية</span>
                            <span class="sp2">صنع في مصر</span>
                            <br>
                            <hr>
                            <span class="sp3">محلي / مستورد</span>
                            <span class="sp4">محلي</span>
                            <br>
                            <ul class="text-center">
                                <li><a href="https://www.facebook.com/elrouky/" target="_blank"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="https://www.youtube.com/watch?v=BcPHTI69tK4&t=1s " target="_blank"><i class="fab fa-youtube"></i></a> </li>
                                <li><a href="https://twitter.com/ElroukyG" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="mailto:info@elrouky.com?subject=contact"><i class="fas fa-envelope"></i></a></li>
                                <li><a href="https://www.instagram.com/elrouky.group/?hl=en" target="_blank"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="row model">
                    <div class="col-md-1.5">
                        <img src="layout/images/sanitary_ware/made-in-germany-1.png">
                    </div>
                    <div class="col-md-1.5">
                        <img src="layout/images/sanitary_ware/made-in-egypt-1.png">
                    </div>
                    <div class="col-md-1.5">
                        <img src="layout/images/sanitary_ware/made-in-Italy-1.png">
                    </div>
                    <div class="col-md-1.5">
                        <img src="layout/images/sanitary_ware/made-in-korea.png">
                    </div>
                    <div class="col-md-1.5">
                        <img src="layout/images/sanitary_ware/made-in-spain-1.png">
                    </div>
                    <div class="col-md-1.5">
                        <img src="layout/images/sanitary_ware/made-in-uae-1.png">
                    </div>
                    <div class="col-md-1.5">
                        <img src="layout/images/sanitary_ware/made-in-china-1.png">
                    </div>
                </div>
            </div>
        </section>
<?php 
    }else{ ?>
        
        <div id="notfound">
            <div class="notfound">
                <div class="notfound-404">
                    <h1>Oops!</h1>
                    <h2>404 - The Page can't be found</h2>
                </div>
                <a href="index.php">Go TO Homepage</a>
            </div>
        </div>

         <?php

    }

include $templete . "footer.php"; 
?>
    