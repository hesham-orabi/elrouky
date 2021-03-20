<?php
    $title ='ادوات صحية بلييزا';
    $style_name ="layout/css/sanitary-ware/saintary-ware-belleza.css";
    include "init.php";

?>

<section class="sw_bellezza">
    <div class="header">
        <img src="layout/images/sanitary_ware/bellezza/header.jpg" alt="sw bellezza">
        <h2>ادوات صحية / بلييزا</h2>
    </div>
    <div class="container">
        <h4 class="text-right">التصنيف</h4>
        <p class="text-right">ادوات صحية / بلييزا</p>
        <div class="row">
            <?php

                $stmt=$con->prepare("SELECT * FROM sanitaryware WHERE CompanyName=?");
                $stmt->execute(array('bellezza'));
                $row=$stmt->fetchAll();
                foreach ($row as $rows) {
            ?>
                    <div class="card" >
                    <img src=" <?php echo 'layout/images/sanitary_ware/bellezza/' . $rows['Image']; ?> " class="card-img-top" alt="<?php echo "sw-bellezza" . $rows['Image']; ?>">
                        <div class="card-body">
                            <h5 class="card-title text-center"><?php echo $rows['Name']?></h5>
                            <a href="<?php echo 'sanitary-ware-show.php?id=' . $rows['Id'] ?>" class="btn btn-info text-center" >مزيد من التفاصيل</a>
                        </div>
                    </div>
                 <?php } ?>

        </div>
        <div id="scrollTop" >
            <i class="far fa-arrow-alt-circle-up wow slideInUp"  data-wow-iteration="9000000" data-wow-duration="3.5s"></i>
        </div>
    </div>
</section>

<?php include $templete . "footer.php"; ?>