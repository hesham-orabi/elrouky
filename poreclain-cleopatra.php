<?php
    $title ='بورسلين كليوباترا';
    $style_name ="layout/css/poreclain/poreclain-cleopatra.css";
    include "init.php";

?>

<section class="poreclain_cleopatra">
    <div class="header">
        <img src="layout/images/poreclain/cleopatra/cleopatra-header.jpg" alt="Por cleopatra">
        <h3>بورسلين كليوباترا</h3>
    </div>
    <div class="container">
        <div class="type container">
            <h3 class="text-right">بورسلين / محلي / كليوباترا</h3>
            <p class="text-right"> <img src="layout/images/poreclain/cleopatra/made-in-egypt-1.png"> &nbsp;&nbsp;&nbsp; صنع في مصر</p>
        </div>
        <div class="row">
            <div class="col-md-2">
                <div class="insta">
                    <h5 >الروقي انستجرام</h5>
                    <div class="row">
                        <div class="col-md-6 text-right">
                            <a href="https://www.instagram.com/p/B5iD9sRhFs4/?utm_source=ig_web_copy_link"  target="_blank" ><img src="layout/images/poreclain/insta1.jpg" alt="insta1"></a>
                        </div>
                        <div class="col-md-6 text-right">
                           <a href="https://www.instagram.com/p/B5iEFkzhdgC/?utm_source=ig_web_copy_link"  target="_blank" ><img src="layout/images/poreclain/insta2.jpg" alt="insta2"></a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 text-right">
                            <a href="https://www.instagram.com/p/B5iD0t-BBfM/?utm_source=ig_web_copy_link"  target="_blank" ><img src="layout/images/poreclain/insta3.jpg" alt="insta3"></a>
                            </div>
                        <div class="col-md-6 text-right">
                            <a href="https://www.instagram.com/p/B5iDmjdBNry/?utm_source=ig_web_copy_link"  target="_blank" ><img src="layout/images/poreclain/insta4.jpg" alt="insta4"></a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 text-right">
                            <a href="https://www.instagram.com/elrouky.group/?hl=en"  target="_blank" ><img src="layout/images/poreclain/insta5.jpg" alt="insta2"></a>
                        </div>
                        <div class="col-md-6 text-right">
                            <a href="https://www.instagram.com/p/B5iDUYYhQLI/?utm_source=ig_web_copy_link"  target="_blank" ><img src="layout/images/poreclain/insta6.jpg" alt="insta2"></a>
                        </div>
                    </div>
                    <p><a href="https://www.instagram.com/p/B5iDfT-hTtX/?utm_source=ig_web_copy_link" target="_blank">elrouky Group</a></p>
                </div>
            </div>
            <div class="col-md-10 show">
                <div class="row">
                    <?php

                        $stmt=$con->prepare("SELECT * FROM poreclain WHERE CompanyName=?");
                        $stmt->execute(array('cleopatra'));
                        $row=$stmt->fetchAll();
                        foreach ($row as $rows) {
                    ?>
                    <div class="col-md-3">
                        <div class="all-products">
                            <div class="details">
                                <div class="over"></div>
                                <div class="info">
                                    <h4><?php echo $rows['Name']?></h4>
                                    <p><?php echo $rows['MadeIn']?></p>
                                    <p><span><a href="<?php echo 'poreclain-show.php?id=' . $rows['Id'] ?>">التفاصيل</a></span></p>
                                </div>
                            </div>
                            <img src="<?php echo 'layout/images/poreclain/cleopatra/' . $rows['Image']; ?> "  alt="<?php echo "poreclain cleopatra" . $rows['Image']; ?>">
                        </div>
                    </div>

                    <?php } ?>
                </div>
            </div>
        </div>
        <div id="scrollTop" >
            <i class="far fa-arrow-alt-circle-up wow slideInUp"  data-wow-iteration="9000000" data-wow-duration="3.5s"></i>
        </div>
    </div>
</section>

<?php include $templete . "footer.php"; ?>
