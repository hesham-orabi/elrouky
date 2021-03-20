<?php
    $title ='سيراميك جلوريا';
    $style_name ="layout/css/ceramic/ceramic-gloria.css";
    include "init.php";
?>
<section class="ceramic-gloriaa">
        <div class="header">
            <img src="layout/images/ceramic/gloria/header.jpg" alt="Cl floor">
            <h2>جلوريا</h2>
            <h3>سيراميك لمساحة معيشة ملهمة</h3>
            <p>العديد من الالهامات لتلبية ذوقك وتصميم غرفة معيشة أنيقة تبقى معك لمدة طويلة</p>
        </div>
        <div class="container">
        <h4 class="text-right">التصنيف</h4>
            <p class="text-right">ارضيات / جلوريا</p>
            <div class="row">
            <?php
                $stmt=$con->prepare("SELECT * FROM ceramic WHERE CompanyName=? AND type=?");
                $stmt->execute(array('gloria',"floor"));
                $row=$stmt->fetchAll();
                foreach ($row as $rows) {
            ?>
                    <div class="card" >
                        <img src="<?php echo 'layout/images/ceramic/gloria/' . $rows['Image']; ?>" class="card-img-top" alt="<?php echo $rows['Image']; ?>">
                        <div class="card-body">
                            <h5 class="card-title text-center"><?php echo $rows['Name']?></h5>
                            <a href="<?php echo 'ceramic-show.php?id=' . $rows['Id'] ?>" class="btn btn-info text-center">مزيد من التفاصيل</a>
                        </div>
                    </div>

                <?php } ?>
            </div>

            <h4 class="text-right">التصنيف</h4>
            <p class="text-right">مطابخ /جلوريا</p>
            <div class="row">
            <?php
                $stmt=$con->prepare("SELECT * FROM ceramic WHERE CompanyName=? AND type=?");
                $stmt->execute(array('gloria',"kitchen"));
                $row=$stmt->fetchAll();
                foreach ($row as $rows) {
            ?>
                    <div class="card" >
                        <img src="<?php echo 'layout/images/ceramic/gloria/' . $rows['Image']; ?>" class="card-img-top" alt="<?php echo $rows['Image']; ?>">
                        <div class="card-body">
                            <h5 class="card-title text-center"><?php echo $rows['Name']?></h5>
                            <a href="<?php echo 'ceramic-show.php?id=' . $rows['Id'] ?>" class="btn btn-info text-center">مزيد من التفاصيل</a>
                        </div>
                    </div>

                <?php } ?>
            </div>

            <h4 class="text-right">التصنيف</h4>
            <p class="text-right">حمامات /جلوريا</p>
            <div class="row">
            <?php
                $stmt=$con->prepare("SELECT * FROM ceramic WHERE CompanyName=? AND type=?");
                $stmt->execute(array('gloria',"bathroom"));
                $row=$stmt->fetchAll();
                foreach ($row as $rows) {
            ?>
                    <div class="card" >
                        <img src="<?php echo 'layout/images/ceramic/gloria/' . $rows['Image']; ?>" class="card-img-top" alt="<?php echo $rows['Image']; ?>">
                        <div class="card-body">
                            <h5 class="card-title text-center"><?php echo $rows['Name']?></h5>
                            <a href="<?php echo 'ceramic-show.php?id=' . $rows['Id'] ?>" class="btn btn-info text-center">مزيد من التفاصيل</a>
                        </div>
                    </div>

                <?php } ?>
            </div>

            <div id="scrollTop" >
                <i class="far fa-arrow-alt-circle-up wow slideInUp"  data-wow-iteration="9000000" data-wow-duration="3.5s"></i>
            </div>
        </div>
    </section>
    <?php
        
        include $templete . "footer.php"; 
        ?>
    