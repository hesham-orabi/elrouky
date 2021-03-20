<?php

        $style_name ="layout/css/sanitary-ware/sanitary-ware-show.css";
        include "init.php";
        
        $id=isset($_GET['id']) ? intval($_GET['id']) : 0;

        $stmt=$con->prepare("SELECT * FROM sanitaryware WHERE  Id=?");
        $stmt->execute(array($id));
        $row=$stmt->fetch();
        $count=$stmt->rowCount();
        if($count > 0){

?>

                <section class="sw-show">
                    <div class="header">
                        <h3>
                            <?php
                            
                                switch($row['CompanyName']){
                                    case 'cleopatra':
                                        echo 'ادوات صحية كليوباترا';
                                        break;
                                    case 'bellezza':
                                        echo 'ادوات صحية بلييزا';
                                        break;
                                    case 'vetro':
                                        echo 'ادوات صحية فيترو';
                                        break;
                                    case 'duravit':
                                        echo 'ادوات صحية ديورافيت';
                                        break;
                                    case 'remas':
                                        echo 'ادوات صحية ريماس';
                                        break;          
                                }
            
                            ?>
                        </h3>
                    </div>
                    <div class="container">
                        <div class="row">

                            <div class="col-md-6">
                                <?php
                                
                                    switch($row['CompanyName']){
                                        case 'cleopatra':
                                            echo "<img src='layout/images/sanitary_ware/cleopatra/" . $row['Image'] . " '/> ";
                                            break;
                                        case 'bellezza':
                                            echo "<img src='layout/images/sanitary_ware/bellezza/" . $row['Image'] . " '/> ";
                                            break;
                                        case 'vetro':
                                            echo "<img src='layout/images/sanitary_ware/vetro/" . $row['Image'] . " '/> ";
                                            break;
                                        case 'duravit':
                                            echo "<img src='layout/images/sanitary_ware/duravit/" . $row['Image'] . " '/> ";
                                            break;
                                        case 'remas':
                                            echo "<img src='layout/images/sanitary_ware/remas/" . $row['Image'] . " '/> ";
                                            break;          
                                    }
                
                                ?>
                            </div>

                            <div class="col-md-6">
                                <div class="info text-center">
                                    <?php
                                    
                                        switch($row['CompanyName']){
                                            case 'cleopatra':
                                                echo "<img src='layout/images/sanitary_ware/cleopatra/cleopatra.jpg'/> ";
                                                break;
                                            case 'bellezza':
                                                echo "<img src='layout/images/sanitary_ware/bellezza/bellezza.png'/> ";
                                                break;
                                            case 'vetro':
                                                echo "<img src='layout/images/sanitary_ware/vetro/vetro.jpg'/> ";
                                                break;
                                            case 'duravit':
                                                echo "<img src='layout/images/sanitary_ware/duravit/Duravit.jpg'/> ";
                                                break;
                                            case 'remas':
                                                echo "<img src='layout/images/sanitary_ware/remas/remas.jpg'/> ";
                                                break;          
                                        }
                    
                                    ?>
                                    <h1><?php echo $row['Name']; ?></h1>
                                    <p>Sanitary Ware</p>
                                    <p>
                                        <?php
                                        
                                            switch($row['CompanyName']){
                                                case 'cleopatra':
                                                    echo "Cleopatra";
                                                    break;
                                                case 'bellezza':
                                                    echo "Bellezza";
                                                    break;
                                                case 'vetro':
                                                    echo "Vetro";
                                                    break;
                                                case 'duravit':
                                                    echo "Duravit";
                                                    break;
                                                case 'remas':
                                                    echo "Remas";
                                                    break;          
                                            }
                    
                                        ?>
                                    </p>
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

     
        <?php }else{ ?>
        
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
    
    