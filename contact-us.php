<?php
    $title ='تواصل معنا';
    $style_name ="layout/css/contact-us.css";
    include "init.php";

    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['send'])){

        $name =  filter_var($_POST['name'],FILTER_SANITIZE_STRING);
        $email= filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
        $phone= filter_var($_POST['phone'],FILTER_SANITIZE_NUMBER_INT);
        $msg=  filter_var($_POST['message'],FILTER_SANITIZE_STRING);
        
        $to='info@elrouky.net'; // Receiver Email ID, Replace with your email ID
        $subject='Form Submission';
        $message="Name :" . $name . "\n"."Phone :" . $phone ."\n"."Wrote the following :" ." \n\n" . $msg;
        $headers="From: " . $email;

        if(mail($to, $subject, $message, $headers)){

            echo "<div class='alert alert-success text-center send-message'>" . "تم ارسال الرسالة بنجاح" . "</div>";
        }
        else{

            echo "<div class='alert alert-danger text-center'>" . "حدث خطأ ما برجاء المحاولة مره اخري" . "</div>";
        }
    }



?>
<section class="contact-us">
    <div class=" map">
        <div class="mapouter">
            <div class="gmap_canvas">
                <iframe width="100%" height="450" id="gmap_canvas" src="https://maps.google.com/maps?q=%D8%A8%D8%B1%D8%AC%20%D8%A7%D9%84%D8%B1%D9%88%D9%82%D9%8A&t=&z=19&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
            </div>
        </div>
    </div>
    <div class="container">
    <div class="row branches">
        <div class="col-md-4">
            <h4>فرع ابو حماد </h4>
            <p><i class="fas fa-map-marker-alt fa-2x"></i>&nbsp;&nbsp;   العنوان : ابوحماد-نزلة العزازي-تقاطع طريق<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ابو حماد-ابوكبير</p>
            <p> <i class="fas fa-mobile-alt fa-2x"></i>  &nbsp;&nbsp; موبايل : 010641741333</p>
            <p><i class="fas fa-mobile-alt fa-2x"></i>&nbsp;&nbsp;&nbsp;&nbsp;موبايل :  01002122681</p>
            <p><i class="fas fa-envelope fa-2x"></i>&nbsp;&nbsp;&nbsp;البريد الالكتروني: <a href="mailto:info@elrouky.net?subject=contact">info@elrouky.net</a></p>

            <h4>فرع الزقازيق</h4>
            <p><i class="fas fa-map-marker-alt fa-2x"></i> &nbsp;&nbsp;   العنوان : الزقازيق-ميدان الزراعه -بجوار<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; سامي جبر للسيارات</p>
            <p> <i class="fas fa-mobile-alt fa-2x"></i> &nbsp;&nbsp; موبايل : 01028233722</p>
            <p><i class="fas fa-mobile-alt fa-2x"></i> &nbsp;&nbsp;موبايل : 010641741333</p>
            <p><i class="fas fa-envelope fa-2x"></i> &nbsp;&nbsp;البريد الالكتروني: <a href="mailto:info@elrouky.net?subject=contact">info@elrouky.net</a></p>
        </div>
        <div class="col-md-2"></div>
        <div class="col-md-6">
            <h4>تواصل معنا</h4>
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
                <label>الاسم</label>
                <input type="text" name="name" required>
                <label>البريد الالكتروني</label>
                <input type="email" name="email" required>
                <label> رقم الهاتف</label>
                <input type="tel" name="phone" required>
                <label>رسالتك</label>
                <textarea name="message"></textarea>
                <button type="submit" name="send">ارسال</button>
            </form>
        </div>
    </div>
    <div id="scrollTop" >
        <i class="far fa-arrow-alt-circle-up wow slideInUp" data-wow-offset="100" data-wow-iteration="10" data-wow-duration="3.5s"></i>
    </div>
</div>
</section>

<?php include $templete . "footer.php"; ?>