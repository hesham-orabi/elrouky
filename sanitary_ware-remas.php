<?php
    $title ='ادوات صحية ريماس';
    $style_name ="layout/css/sanitary-ware/saintary-ware-remas.css";
    include "init.php";

?>
<section class="sw_remas">
    <div class="header">
        <img src="layout/images/sanitary_ware/remas/header.jpg" alt="Sw Remas">
        <h2>ادوات صحية / ريماس</h2>
    </div>
    <div class="container">
        <h4 class="text-right">التصنيف</h4>
        <p class="text-right">ادوات صحية / ريماس</p>
        <div class="row">
        <?php

            $stmt=$con->prepare("SELECT * FROM sanitaryware WHERE CompanyName=?");
            $stmt->execute(array('remas'));
            $row=$stmt->fetchAll();
            foreach ($row as $rows) {
            ?>
                <div class="card" >
                <img src=" <?php echo 'layout/images/sanitary_ware/remas/' . $rows['Image']; ?> " class="card-img-top" alt="<?php echo "sw-remas" . $rows['Image']; ?>">
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