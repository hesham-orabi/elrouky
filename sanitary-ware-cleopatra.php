<?php
    $title ='ادوات صحية كليوباترا';
    $style_name ="layout/css/sanitary-ware/saintary-ware-cleopatra.css";
    include "init.php";

?>

<section class="sw_cleopatra">
    <div class="header">
        <img src="layout/images/sanitary_ware/cleopatra/header.jpg" alt="Sw Cleopatra">
        <h2>ادوات صحية / كليوباترا</h2>
    </div>
    <div class="container">
        <h4 class="text-right">التصنيف</h4>
        <p class="text-right">ادوات صحية / كليوباترا</p>
        <div class="row">
            <?php

                $stmt=$con->prepare("SELECT * FROM sanitaryware WHERE CompanyName=?");
                $stmt->execute(array('cleopatra'));
                $row=$stmt->fetchAll();
                foreach ($row as $rows) {
            ?>
                    <div class="card" >
                    <img src=" <?php echo 'layout/images/sanitary_ware/cleopatra/' . $rows['Image']; ?> " class="card-img-top" alt="<?php echo "sw-cleopatra" . $rows['Image']; ?>">
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