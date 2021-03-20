<?php
    $title ='ادوات صحية ديورافيت';
    $style_name ="layout/css/sanitary-ware/saintary-ware-duravit.css";
    include "init.php";

?>

<section class="sw_duravit">
    <div class="header">
        <h2 class="text-center">DURAVIT</h2>
        <video width="100%" height="500px" autoplay>
            <source src="layout/images/sanitary_ware/duravit/Duravit.mp4" type="video/mp4">
            <source src="layout/images/sanitary_ware/duravit/Duravit.ogg" type="video/ogg">
        </video>
        <ul class="text-center">
            <li><a href="https://www.facebook.com/elrouky/" target="_blank"><i class="fab fa-facebook fa-2x"></i></a></li>
            <li><a href="https://www.youtube.com/watch?v=BcPHTI69tK4&t=1s " target="_blank"><i class="fab fa-youtube fa-2x"></i></a> </li>
            <li><a href="https://twitter.com/ElroukyG" target="_blank"><i class="fab fa-twitter fa-2x"></i></a></li>
            <li><a href="mailto:info@elrouky.com?subject=contact"><i class="fas fa-envelope fa-2x"></i></a></li>
            <li><a href="https://www.instagram.com/elrouky.group/?hl=en" target="_blank"><i class="fab fa-instagram fa-2x"></i></a></li>
        </ul>
    </div>
    <div class="container">
        <h4 class="text-right">التصنيف</h4>
        <p class="text-right">ادوات صحية / ديورافيت</p>

        <div class="row">
        <?php

            $stmt=$con->prepare("SELECT * FROM sanitaryware WHERE CompanyName=?");
            $stmt->execute(array('duravit'));
            $row=$stmt->fetchAll();
            foreach ($row as $rows) {
        ?>
                <div class="card" >
                <img src=" <?php echo 'layout/images/sanitary_ware/duravit/' . $rows['Image']; ?> " class="card-img-top" alt="<?php echo "sw-duravit" . $rows['Image']; ?>">
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
