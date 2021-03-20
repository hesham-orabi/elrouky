<?php
    $title ='المدونات';
    $style_name ="layout/css/all-articles.css";
    include "init.php";

    $stmt=$con->prepare("SELECT * FROM blog ");
    $stmt->execute();
    $row=$stmt->fetchAll();
    ?>
    <div class='all'>
        <div class='container'>
            <h1> جميع المقالات </h1>
            <div class='row justify-content-md-center'>
            <?php
                foreach($row as $rows){ 
            ?>
                    <div class='col-sm-4'>
                        <div class="card">
                            <img src="<?php echo 'admin/layout/images/blog/' . $rows['Image1'] ?>" class="card-img-top" alt="blog">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $rows['Title'] ?></h5>

                                <a href=" <?php echo 'blogger.php?id=' . $rows['Id']  ?> " class="btn btn-primary">التفاصيل</a>
                               
                            </div>
                        </div>
                    </div>
            <?php } ?>
            </div>
        </div>
    </div>
       
 <?php include $templete . "footer.php"; ?>