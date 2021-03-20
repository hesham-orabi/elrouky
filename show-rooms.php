<?php
    $title ='صالات العرض';
    $style_name ="layout/css/show-rooms.css";
    include "init.php";
    
?>

<section class="show_rooms">
    <div class="container">
        <div class="info">
            <h2 class="text-right wow fadeInDown" data-wow-offset="10">صالات العرض</h2>
            <p class="text-right">مساحات واسعة للترحيب بكم في عالم الروقي 
                من مجموعات السيراميك والأدوات الصحية المتميزة. 
                ان معارضنا ستقدم لك رؤية جديدة لمنزلك وذلك بفضل مساحة صالات العرض 
                الواسعة ومنتجاتنا المتعددة، بالإضافة إلى الموظفين الخبراء
                والمدربين تدريبا جيدا  لمساعدتك على الاختيار الصحيح.
            </p>
       </div>
        <!-------------------------------Start Abo Hammad show_rooms----------------->

        <div class="aboHammad">
            <h2 class="text-center">صالة عرض ابو حماد</h2>
            <p>
                تتميز صالة عرض ابو حماد بالمساحه الواسعة حيث يتكون البرج من اربع طوابق حيث
                 يحتوي الطابق الاول علي عروض السيراميك والطابق الثاني لعرض الادوات الصحية 
                 ويحتوي الطابق الثالث والرابع علي البروسلين
                  , ويعتبر هذا البرج هو منشأ وبداية مجموعة الروقي
            </p>
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                      <h3>بروسلين مستورد</h3>
                    <img src="layout/images/show_rooms/proslien.jpg" class="d-block w-100" alt="room1">
                  </div>
                  <div class="carousel-item">
                      <h3>اطقم حمامات راقية</h3>
                    <img src="layout/images/show_rooms/hamam.jpg" class="d-block w-100" alt="room2">
                  </div>
                  <div class="carousel-item">
                        <h3>مطابخ ايطالية</h3>
                    <img src="layout/images/show_rooms/kitchen.jpg" class="d-block w-100" alt="room3">
                  </div>
                  <div class="carousel-item">
                        <h3>غرف نوم من احدث طراز</h3>
                    <img src="layout/images/show_rooms/bed.jpg" class="d-block w-100" alt="room4">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
        </div>

        <!-------------------------------Start Abo Hammad show_rooms----------------->

        <!-------------------------------Start  zagazig show_rooms----------------->

        <div class="zagazig">
            <h2 class="text-center">صالة عرض الزقازيق</h2>
            <p>
                يقع هذا المعرض بميدان الزراعة بالزقازيق 
                ويتميز هذا المعرض بموقعه الممتاز الذي يسهل علي العملاء القدوم 
                اليه والتجوال فيه واختيار المنتجات الراقيه حيث يحتوي المعرض علي
                 ارقي انواع السيراميك واجود انواع البوروسلين المحلية والمستوردة
            </p>
            <div id="carousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel" data-slide-to="1"></li>
                    <li data-target="#carousel" data-slide-to="2"></li>
                    <li data-target="#carousel" data-slide-to="3"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <h3> بانيوهات بخامات والوان مختلفة</h3>
                    <img src="layout/images/show_rooms/banio.jpg" class="d-block w-100" alt="room1">
                    </div>
                    <div class="carousel-item">
                        <h3>ارضيات 3D</h3>
                    <img src="layout/images/show_rooms/3d.jpg" class="d-block w-100" alt="room2">
                    </div>
                    <div class="carousel-item">
                        <h3>الوان مبهرة</h3>
                    <img src="layout/images/show_rooms/design.jpg" class="d-block w-100" alt="room3">
                    </div>
                    <div class="carousel-item">
                        <h3>اطقم حمامات كليوباترا</h3>
                    <img src="layout/images/show_rooms/cleopatra.jpg" class="d-block w-100" alt="room4">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
                </div>
        </div>

        <!-------------------------------end zagazig show_rooms----------------->
        <div id="scrollTop" >
            <i class="far fa-arrow-alt-circle-up wow slideInUp" data-wow-offset="100" data-wow-iteration="10" data-wow-duration="3.5s"></i>
        </div>
    </div>
</section>
<?php include $templete . "footer.php"; ?>