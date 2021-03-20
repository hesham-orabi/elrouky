<?php
    $title ='المدونة';
    $style_name ="layout/css/blogger.css";
    include "init.php";

    $id=isset($_GET['id']) ? $_GET['id'] : 0;

    if($id== 0){

        $getStmt = $con->prepare("SELECT * FROM blog ORDER BY Id  DESC LIMIT 1");
        $getStmt->execute();
        $getLastItem = $getStmt->fetchAll();

        foreach($getLastItem as $row){
        
    ?>

            <section class= 'blog'>
                <div class='container'>
                    <div class='row text-right justify-content-md-center'>

                        <div class='col-sm-8'>
                            <div class='new-article'>

                                <div class='head-post'>
                                    <h3><?php echo $row['Title']?></h3>
                                    <span>
                                        <i class="fas fa-user"></i> 
                                        <?php echo $row['Writer']?>
                                    </span>
                                    <span>
                                        <i class="far fa-clock"></i>  
                                        <?php echo $row['Date']?>           
                                    </span>
                                    
                                </div>
                                <div class='body-post' >

                                        <?php if($row['Title1'] != ''){ ?>
                                                    <h4><?php echo $row['Title1']?></h4>
                                        <?php } ?>

                                        <?php if($row['Content1'] != ''){ ?>
                                                    <p><?php echo $row['Content1']?></p>
                                        <?php } ?>

                                        <?php if($row['Image1'] != ''){ ?>
                                                <img src='<?php echo "admin/layout/images/blog/" . $row['Image1'] ?>' id='Image1'> 
                                        <?php } ?>

                                        <?php if($row['Title2'] != ''){ ?>
                                                    <h4><?php echo $row['Title2']?></h4>
                                        <?php } ?>

                                        <?php if($row['Content2'] != ''){ ?>
                                                    <p><?php echo $row['Content2']?></p>
                                        <?php } ?>

                                        <?php if($row['Image2'] != ''){ ?>
                                                <img src='<?php echo "admin/layout/images/blog/" . $row['Image2'] ?>' id='Image2'> 
                                        <?php } ?>

                                        <?php if($row['Title3'] != ''){ ?>
                                                    <h4><?php echo $row['Title3']?></h4>
                                        <?php } ?>

                                        <?php if($row['Content3'] != ''){ ?>
                                                    <p><?php echo $row['Content3']?></p>
                                        <?php } ?>

                                        <?php if($row['Image3'] != ''){ ?>
                                                <img src='<?php echo "admin/layout/images/blog/" . $row['Image3'] ?>' id='Image3'> 
                                        <?php } ?>

                                        <?php if($row['Title4'] != ''){ ?>
                                                    <h4><?php echo $row['Title4']?></h4>
                                        <?php } ?>

                                        <?php if($row['Content4'] != ''){ ?>
                                                    <p><?php echo $row['Content4']?></p>
                                        <?php } ?>

                                        <?php if($row['Image4'] != ''){ ?>
                                                <img src='<?php echo "admin/layout/images/blog/" . $row['Image4'] ?>' id='Image4'> 
                                        <?php } ?>
                                        
                                        <?php if($row['Title5'] != ''){ ?>
                                                    <h4><?php echo $row['Title5']?></h4>
                                        <?php } ?>

                                        <?php if($row['Content5'] != ''){ ?>
                                                    <p><?php echo $row['Content5']?></p>
                                        <?php } ?>

                                        <?php if($row['Image5'] != ''){ ?>
                                                <img src='<?php echo "admin/layout/images/blog/" . $row['Image5'] ?>' id='Image5'> 
                                        <?php } ?>

                                        <?php if($row['Title6'] != ''){ ?>
                                                    <h4><?php echo $row['Title6']?></h4>
                                        <?php } ?>

                                        <?php if($row['Content6'] != ''){ ?>
                                                    <p><?php echo $row['Content6']?></p>
                                        <?php } ?>

                                        <?php if($row['Image6'] != ''){ ?>
                                                <img src='<?php echo "admin/layout/images/blog/" . $row['Image6'] ?>' id='Image6'> 
                                        <?php } ?>

                                        <?php if($row['Title7'] != ''){ ?>
                                                    <h4><?php echo $row['Title7']?></h4>
                                        <?php } ?>

                                        <?php if($row['Content7'] != ''){ ?>
                                                    <p><?php echo $row['Content7']?></p>
                                        <?php } ?>

                                        <?php if($row['Image7'] != ''){ ?>
                                                <img src='<?php echo "admin/layout/images/blog/" . $row['Image7'] ?>' id='Image7'> 
                                        <?php } ?>

                                        <?php if($row['Title8'] != ''){ ?>
                                                    <h4><?php echo $row['Title8']?></h4>
                                        <?php } ?>

                                        <?php if($row['Content8'] != ''){ ?>
                                                    <p><?php echo $row['Content8']?></p>
                                        <?php } ?>

                                        <?php if($row['Image8'] != ''){ ?>
                                                <img src='<?php echo "admin/layout/images/blog/" . $row['Image8'] ?>' id='Image8'> 
                                        <?php } ?>
                                </div>
                                
                            </div>
                        </div>

                        <div class='col-sm-4'>
                            <div class='other-articles'>
                                <h4 class='title'><i class="far fa-edit"></i>مقالات اخري</h4>

                                <?php

                                    $getStmt = $con->prepare("SELECT * FROM blog ORDER BY Id  ASC LIMIT 3");
                                    $getStmt->execute();
                                    $oldItem = $getStmt->fetchAll();


                                    foreach($oldItem as $row){

                                 ?>
                                    <div class='row'>
                                        <div class='col-sm-4'>
                                            <img src=" <?php echo 'admin/layout/images/blog/' . $row['MainImage']; ?> ">
                                        </div>
                                        <div class='col-sm-8 text-right link'>
                                            <a href="<?php echo 'blogger.php?id=' . $row['Id']  ?>"><?php echo $row['Title'] ?></a>
                                        </div>
                                    </div>
                                <?php } ?>

                                <?php
                                /*
                                <a class='btn btn-secondary more-articles' href="<?php echo 'all-articles.php' ?>"> مزيد من المقالات</a>
                                */
                                ?>
                            </div>
                    </div>
                        
        <?php } ?>
        


                    </div>
                </div>
            </section>
    <?php
     }else {
    
        $stmt=$con->prepare("SELECT * FROM blog WHERE Id=?");
        $stmt->execute(array($id));
        $row=$stmt->fetch();
        $count=$stmt->rowCount();
        if($count > 0){ ?>

            <section class= 'blog'>
                <div class='container'>
                    <div class='row text-right justify-content-md-center'>

                        <div class='col-sm-8'>
                            <div class='new-article'>

                                <div class='head-post'>
                                    <h3><?php echo $row['Title']?></h3>
                                    <span>
                                        <i class="fas fa-user"></i> 
                                        <?php echo $row['Writer']?>
                                    </span>
                                    <span>
                                        <i class="far fa-clock"></i>  
                                        <?php echo $row['Date']?>           
                                    </span>
                                    
                                </div>
                                <div class='body-post'>

                                        <?php if($row['Title1'] != ''){ ?>
                                                    <h4><?php echo $row['Title1']?></h4>
                                        <?php } ?>

                                        <?php if($row['Content1'] != ''){ ?>
                                                    <p><?php echo $row['Content1']?></p>
                                        <?php } ?>

                                        <?php if($row['Image1'] != ''){ ?>
                                                <img src='<?php echo "admin/layout/images/blog/" . $row['Image1'] ?>'> 
                                        <?php } ?>

                                        <?php if($row['Title2'] != ''){ ?>
                                                    <h4><?php echo $row['Title2']?></h4>
                                        <?php } ?>

                                        <?php if($row['Content2'] != ''){ ?>
                                                    <p><?php echo $row['Content2']?></p>
                                        <?php } ?>

                                        <?php if($row['Image2'] != ''){ ?>
                                                <img src='<?php echo "admin/layout/images/blog/" . $row['Image2'] ?>'> 
                                        <?php } ?>

                                        <?php if($row['Title3'] != ''){ ?>
                                                    <h4><?php echo $row['Title3']?></h4>
                                        <?php } ?>

                                        <?php if($row['Content3'] != ''){ ?>
                                                    <p><?php echo $row['Content3']?></p>
                                        <?php } ?>

                                        <?php if($row['Image3'] != ''){ ?>
                                                <img src='<?php echo "admin/layout/images/blog/" . $row['Image3'] ?>'> 
                                        <?php } ?>

                                        <?php if($row['Title4'] != ''){ ?>
                                                    <h4><?php echo $row['Title4']?></h4>
                                        <?php } ?>

                                        <?php if($row['Content4'] != ''){ ?>
                                                    <p><?php echo $row['Content4']?></p>
                                        <?php } ?>

                                        <?php if($row['Image4'] != ''){ ?>
                                                <img src='<?php echo "admin/layout/images/blog/" . $row['Image4'] ?>'> 
                                        <?php } ?>
                                        
                                        <?php if($row['Title5'] != ''){ ?>
                                                    <h4><?php echo $row['Title5']?></h4>
                                        <?php } ?>

                                        <?php if($row['Content5'] != ''){ ?>
                                                    <p><?php echo $row['Content5']?></p>
                                        <?php } ?>

                                        <?php if($row['Image5'] != ''){ ?>
                                                <img src='<?php echo "admin/layout/images/blog/" . $row['Image5'] ?>'> 
                                        <?php } ?>

                                        <?php if($row['Title6'] != ''){ ?>
                                                    <h4><?php echo $row['Title6']?></h4>
                                        <?php } ?>

                                        <?php if($row['Content6'] != ''){ ?>
                                                    <p><?php echo $row['Content6']?></p>
                                        <?php } ?>

                                        <?php if($row['Image6'] != ''){ ?>
                                                <img src='<?php echo "admin/layout/images/blog/" . $row['Image6'] ?>'> 
                                        <?php } ?>

                                        <?php if($row['Title7'] != ''){ ?>
                                                    <h4><?php echo $row['Title7']?></h4>
                                        <?php } ?>

                                        <?php if($row['Content7'] != ''){ ?>
                                                    <p><?php echo $row['Content7']?></p>
                                        <?php } ?>

                                        <?php if($row['Image7'] != ''){ ?>
                                                <img src='<?php echo "admin/layout/images/blog/" . $row['Image7'] ?>'> 
                                        <?php } ?>

                                        <?php if($row['Title8'] != ''){ ?>
                                                    <h4><?php echo $row['Title8']?></h4>
                                        <?php } ?>

                                        <?php if($row['Content8'] != ''){ ?>
                                                    <p><?php echo $row['Content8']?></p>
                                        <?php } ?>

                                        <?php if($row['Image8'] != ''){ ?>
                                                <img src='<?php echo "admin/layout/images/blog/" . $row['Image8'] ?>'> 
                                        <?php } ?>
                                </div>
                                
                            </div>
                        </div>

                        <div class='col-sm-4'>
                            <div class='other-articles'>
                                <h4><i class="far fa-edit"></i>مقالات اخري</h4>

                                <?php
                                  
                                    $getStmt = $con->prepare("SELECT * FROM blog WHERE Id !=? ORDER BY Id ASC LIMIT 6");
                                    $getStmt->execute(array($_GET['id']));
                                    $row = $getStmt->fetchAll();
                                    foreach($row as $getLastItem){

                                    ?>
                                        <div class='row'>
                                            <div class='col-sm-4'>
                                                <img src=" <?php echo 'admin/layout/images/blog/' . $getLastItem['MainImage']; ?> ">
                                            </div>
                                            <div class='col-sm-8 text-right link'>
                                                <a href="<?php echo 'blogger.php?id=' . $getLastItem['Id']  ?>"><?php echo $getLastItem['Title']?></a>
                                            </div>
                                        </div>
                                        <?php } ?>

                                <?php
                                /*
                                <a class='btn btn-secondary more-articles' href="<?php echo 'all-articles.php' ?>"> مزيد من المقالات</a>
                                */
                                ?>
                            </div>
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

    } 
    
 include $templete . "footer.php"; ?>