<?php
echo "<div class='blogger'>";
        ob_start();
        session_start();
        
        if (isset($_SESSION['Username'])){
        
            include 'init.php';
        
            $do= isset($_GET['do']) ? $_GET['do'] : 'Manage' ;
        
            // If the page is main page
        
            if ($do == 'Manage'){
        
            
            $stmt= $con->prepare("SELECT *  FROM blog ");
            $stmt->execute();
            $bloggers=$stmt->fetchAll();

            if(!empty($bloggers)){  ?>
                <div class="manage">

                <h1 class="text-center">احصائيات المدونة</h1>
                    <div class="responsive-table">
                        <table class="main-table table table-border">

                            <tr>
                                <td>رقم</td>
                                <td>العنوان</td>
                                <td>المحتوي الرئيسي</td>
                                <td> الصورة الرئيسية</td>
                                <td>التاريخ</td>
                                <td>التحكم</td>
                            
                            </tr>
                            <?php
                            
                                foreach($bloggers as $blog){

                                    echo "<tr>";
                                        echo "<td>" . $blog['Id'] . "</td>";
                                        echo "<td> <h5>" . $blog['Title'] . "</h5></td>";
                                        echo "<td><p>" . $blog['Content1'] . "</p></td>";
                                        echo "<td>" . $blog['MainImage'] . "</td>";
                                        echo "<td>" . $blog['Date'] . "</td>";
                                        echo "<td> 
                                                <a href='blogger.php?do=Edit&Id=" . $blog['Id'] . "'  class='btn btn-success'> Edit </a>
                                                <a href='blogger.php?do=Delete&Id=" . $blog['Id']  . "' class='btn btn-danger confirm'>Delete </a> ";
                                        echo "</td>" ;
                                    echo "</tr>";
                                }

                            ?>
                        </table>
                    </div>
                    <a href='blogger.php?do=Add' class=" btn-manage btn btn-primary"><i class="fa fa-plus"></i> Add New Subject</a>

                </div>

            <?php
            }else {
                echo "<div class='container'>";
                    echo"<div class='nice-message'>There\'s No Record To show</div>";
                echo "</div>";
            }
        }elseif($do == 'Add'){ ?>
            <div class='add'>
                <div class="container">

                    <h1 class="text-center">اضافة موضوع جديد</h1>
            
                    <form class="form-horizontal" action= 'blogger.php?do=Insert' method='POST' enctype='multipart/form-data'>
                        <div class="form-group row">
                            <label class="col-sm-2 control-label">اسم الكاتب</label>
                            <div class="col-sm-10">
                                <input type="text" name="writer_name" class="form-control" required="required" >
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 control-label label-title">عنوان الموضوع</label>
                            <div class="col-sm-10">
                                <input type="text" name="main_title" class="form-control" >
                            </div>
                        </div>    

                        <div class="form-group row">
                            <label class="col-sm-2 control-label">الصورة الرئيسية</label>
                            <div class="col-sm-10" id='mainImg'>
                                <input type="file" name="main_image" >
                                <i class="far fa-check-circle fa-2x"></i>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 control-label label-title">عنوان 1</label>
                            <div class="col-sm-10">
                                <input type="text" name="title1" class="form-control" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 control-label">محتوي 1</label>
                            <div class="col-sm-10">
                                <textarea type="text" name="content1" class="form-control" required="required"> </textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 control-label">الصورة 1</label>
                            <div class="col-sm-10"  id='img1'>
                                <input type="file" name="image1" class="form-control" >
                                <i class="far fa-check-circle fa-2x"></i>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 control-label label-title">عنوان 2</label>
                            <div class="col-sm-10">
                            <input type="text" name="title2" class="form-control" required="required">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 control-label">محتوي 2</label>
                            <div class="col-sm-10">
                                <textarea type="text" name="content2" class="form-control" > </textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 control-label">الصورة 2</label>
                            <div class="col-sm-10" id='img2'>
                                <input type="file" name="image2" class="form-control" >
                                <i class="far fa-check-circle fa-2x"></i>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 control-label label-title">عنوان 3</label>
                            <div class="col-sm-10">
                            <input type="text" name="title3" class="form-control" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 control-label">محتوي 3</label>
                            <div class="col-sm-10">
                                <textarea type="text" name="content3" class="form-control" > </textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 control-label">الصورة 3</label>
                            <div class="col-sm-10" id='img3'>
                                <input type="file" name="image3" class="form-control"  >
                                <i class="far fa-check-circle fa-2x"></i>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 control-label label-title">عنوان 4</label>
                            <div class="col-sm-10">
                            <input type="text" name="title4" class="form-control" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 control-label">محتوي 4</label>
                            <div class="col-sm-10">
                                <textarea type="text" name="content4" class="form-control" > </textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 control-label">الصورة 4</label>
                            <div class="col-sm-10" id='img4'>
                                <input type="file" name="image4" class="form-control" >
                                <i class="far fa-check-circle fa-2x"></i>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 control-label label-title">عنوان 5</label>
                            <div class="col-sm-10">
                            <input type="text" name="title5" class="form-control" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 control-label">محتوي 5</label>
                            <div class="col-sm-10">
                                <input type="text" name="content5" class="form-control" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 control-label">الصورة 5</label>
                            <div class="col-sm-10" id='img5'>
                                <input type="file" name="image5" class="form-control" >
                                <i class="far fa-check-circle fa-2x"></i>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 control-label label-title">عنوان 6</label>
                            <div class="col-sm-10">
                            <input type="text" name="title6" class="form-control" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 control-label">محتوي 6</label>
                            <div class="col-sm-10">
                                <textarea type="text" name="content6" class="form-control" > </textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 control-label">الصورة 6</label>
                            <div class="col-sm-10" id='img6'>
                                <input type="file" name="image6" class="form-control" >
                                <i class="far fa-check-circle fa-2x"></i>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 control-label label-title">عنوان 7</label>
                            <div class="col-sm-10">
                            <input type="text" name="title7" class="form-control" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 control-label">محتوي 7</label>
                            <div class="col-sm-10">
                                <textarea type="text" name="content7" class="form-control" > </textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 control-label">الصورة 7</label>
                            <div class="col-sm-10" id='img7'>
                                <input type="file" name="image7" class="form-control" >
                                <i class="far fa-check-circle fa-2x"></i>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 control-label label-title">عنوان 8</label>
                            <div class="col-sm-10">
                            <input type="text" name="title8" class="form-control" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 control-label">محتوي 8</label>
                            <div class="col-sm-10">
                                <textarea type="text" name="content8" class="form-control" > </textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 control-label">الصورة 8</label>
                            <div class="col-sm-10" id='img8'>
                                <input type="file" name="image8" class="form-control" >
                                <i class="far fa-check-circle fa-2x"></i>
                            </div>
                        </div>

                        
                        <div class="form-group row">
                            <div class=" col-sm-10 offset-sm-2 ">
                                <input type="submit" value="Add Item" class="btn-add btn btn-danger">
                            </div>
                        </div>

                    </form>
                </div> 
            </div>
        <?php
        }elseif($do == 'Insert'){
            if($_SERVER['REQUEST_METHOD'] == 'POST'){

                echo '<h1 class="text-center">Insert Category</h1>';
                echo "<div class='container'>";

                    $writerName= $_POST['writer_name'];
                    $mainTitle= $_POST['main_title'];

                    $mainImageName = $_FILES['main_image']['name'];
                    $mainImageSize = $_FILES['main_image']['size'];
                    $mainImageTmp  = $_FILES['main_image']['tmp_name'];
                    $mainImageType = $_FILES['main_image']['type'];

                    $title1= $_POST['title1'];
                    $content1= $_POST['content1'];

                    $imageName1 = $_FILES['image1']['name'];
                    $imageSize1 = $_FILES['image1']['size'];
                    $imageTmp1  = $_FILES['image1']['tmp_name'];
                    $imageType1 = $_FILES['image1']['type'];

                    $title2=   $_POST['title2'];
                    $content2= $_POST['content2'];

                    $imageName2 = $_FILES['image2']['name'];
                    $imageSize2 = $_FILES['image2']['size'];
                    $imageTmp2  = $_FILES['image2']['tmp_name'];
                    $imageType2 = $_FILES['image2']['type'];

                    $title3=   $_POST['title3'];
                    $content3= $_POST['content3'];

                    $imageName3 = $_FILES['image3']['name'];
                    $imageSize3 = $_FILES['image3']['size'];
                    $imageTmp3  = $_FILES['image3']['tmp_name'];
                    $imageType3 = $_FILES['image3']['type'];

                    $title4=   $_POST['title4'];
                    $content4= $_POST['content4'];

                    $imageName4 = $_FILES['image4']['name'];
                    $imageSize4 = $_FILES['image4']['size'];
                    $imageTmp4  = $_FILES['image4']['tmp_name'];
                    $imageType4 = $_FILES['image4']['type'];

                    $title5=   $_POST['title5'];
                    $content5= $_POST['content5'];

                    $imageName5 = $_FILES['image5']['name'];
                    $imageSize5 = $_FILES['image5']['size'];
                    $imageTmp5  = $_FILES['image5']['tmp_name'];
                    $imageType5 = $_FILES['image5']['type'];


                    $title6=   $_POST['title6'];
                    $content6= $_POST['content6'];

                    
                    $imageName6 = $_FILES['image6']['name'];
                    $imageSize6 = $_FILES['image6']['size'];
                    $imageTmp6  = $_FILES['image6']['tmp_name'];
                    $imageType6 = $_FILES['image6']['type'];

                    $title7=   $_POST['title7'];
                    $content7= $_POST['content7'];

                    $imageName7 = $_FILES['image7']['name'];
                    $imageSize7 = $_FILES['image7']['size'];
                    $imageTmp7  = $_FILES['image7']['tmp_name'];
                    $imageType7 = $_FILES['image7']['type'];

                    $title8=   $_POST['title8'];
                    $content8= $_POST['content8'];

                    $imageName8 = $_FILES['image8']['name'];
                    $imageSize8 = $_FILES['image8']['size'];
                    $imageTmp8  = $_FILES['image8']['tmp_name'];
                    $imageType8 = $_FILES['image8']['type'];
        

        
                    // Get Image Extention 
        
                    $mainImageExtention = strtolower(end( explode("." , $mainImageName) ));
                    $imageName1Extention = strtolower(end( explode("." , $imageName1) ));
                    $imageName2Extention = strtolower(end( explode("." , $imageName2) ));
                    $imageName3Extention = strtolower(end( explode("." , $imageName3) ));
                    $imageName4Extention = strtolower(end( explode("." , $imageName4) ));
                    $imageName5Extention = strtolower(end( explode("." , $imageName5) ));
                    $imageName6Extention = strtolower(end( explode("." , $imageName6) ));
                    $imageName7Extention = strtolower(end( explode("." , $imageName7) ));
                    $imageName8Extention = strtolower(end( explode("." , $imageName8) ));

                
                    // List Of Allowed File Type To Upload
        
                    $imageAllowedExtention = array("jpeg" , "jpg" , "png");


                    $FormErrors = array();

                    if(empty($writerName)){

                        $FormErrors []= 'Writer Name Can\'t Be  <strong> Empty !</strong>';
                    }
                    if(empty($mainTitle)){

                        $FormErrors []= 'Main Title Can\'t Be  <strong> Empty !</strong>';
                    }
                    if(empty($content1)){

                        $FormErrors []= 'Content 1 Can\'t Be  <strong> Empty !</strong>';
                    }


                    if(! empty($mainImageName) && ! in_array($mainImageExtention , $imageAllowedExtention )){
                    
                        $FormErrors []= 'In Main Image This Extention Is Not Allowed';
                    }
                    if(empty($mainImageName)){
                        
                        $FormErrors []= 'Main Image Is Required';
                    }
                    if($mainImageSize > 4194304){
                        
                        $FormErrors []= ' Main Image Cant Be Larger Than <strong>  4 MB </strong>';
                    }


                    if(! empty($imageName1) && ! in_array($imageName1Extention , $imageAllowedExtention )){
                    
                        $FormErrors []= 'In Image 1 This Extention Is Not Allowed';
                    }
                    if($imageSize1 > 4194304){
                        
                        $FormErrors []= ' Image 1 Cant Be Larger Than <strong>  4 MB </strong>';
                    }

                    if(! empty($imageName2) && ! in_array($imageName2Extention , $imageAllowedExtention )){
                    
                        $FormErrors []= 'In Image 2 This Extention Is Not Allowed';
                    }
                    if($imageSize2 > 4194304){
                        
                        $FormErrors []= ' Image Cant Be Larger Than <strong>  4 MB </strong>';
                    }
                    
                    if(! empty($imageName3) && ! in_array($imageName3Extention , $imageAllowedExtention )){
                    
                        $FormErrors []= 'In Image 3 This Extention Is Not Allowed';
                    }
                    if($imageSize3 > 4194304){
                        
                        $FormErrors []= ' Image Cant Be Larger Than <strong>  4 MB </strong>';
                    }
                    
                    if(! empty($imageName4) && ! in_array($imageName4Extention , $imageAllowedExtention )){
                    
                        $FormErrors []= 'In Image 4 This Extention Is Not Allowed';
                    }
                    if($imageSize4 > 4194304){
                        
                        $FormErrors []= ' Image Cant Be Larger Than <strong>  4 MB </strong>';
                    }
                    
                    if(! empty($imageName5) && ! in_array($imageName5Extention , $imageAllowedExtention )){
                    
                        $FormErrors []= 'In Image 5 This Extention Is Not Allowed';
                    }
                    if($imageSize5 > 4194304){
                        
                        $FormErrors []= ' Image Cant Be Larger Than <strong>  4 MB </strong>';
                    }
                    
                    if(! empty($imageName6) && ! in_array($imageName6Extention , $imageAllowedExtention )){
                    
                        $FormErrors []= 'In Image 6 This Extention Is Not Allowed';
                    }
                    if($imageSize6 > 4194304){
                        
                        $FormErrors []= ' Image Cant Be Larger Than <strong>  4 MB </strong>';
                    }
                    
                    if(! empty($imageName7) && ! in_array($imageName7Extention , $imageAllowedExtention )){
                    
                        $FormErrors []= 'In Image 7 This Extention Is Not Allowed';
                    }
                    if($imageSize7 > 4194304){
                        
                        $FormErrors []= ' Image Cant Be Larger Than <strong>  4 MB </strong>';
                    }
                    
                    if(! empty($imageName8) && ! in_array($imageName8Extention , $imageAllowedExtention )){
                    
                        $FormErrors []= 'In Image 8 This Extention Is Not Allowed';
                    }
                    if($imageSize8 > 4194304){
                        
                        $FormErrors []= ' Image 8 Cant Be Larger Than <strong>  4 MB </strong>';
                    }
                    
                    if(! empty($imageName1) && ! in_array($imageName1Extention , $imageAllowedExtention )){
                    
                        $FormErrors []= ' This Extention Is Not Allowed';
                    }
                    if($imageSize1 > 4194304){
                        
                        $FormErrors []= ' Image Cant Be Larger Than <strong>  4 MB </strong>';
                    }


                    foreach($FormErrors as $errors){
                    
                        echo "<div class='text-center alert alert-danger'>" . $errors . '</div>' ;
                    }

                    if(empty($FormErrors)){

                        $mainImage = $mainImageName ;
                        move_uploaded_file($mainImageTmp , "layout\images\blog\\" . $mainImage );

                        if($imageName1 != ''){
                            $image1 =$imageName1 ;
                            move_uploaded_file($imageTmp1 , "layout\images\blog\\" . $image1 );
                        }else{
                            $image1 = '';
                        }
                        if($imageName2 != ''){
                            $image2 = $imageName2 ;
                            move_uploaded_file($imageTmp2 , "layout\images\blog\\" . $image2 );
                        }else{
                            $image2 = '';
                        }
                        if($imageName3 != ''){
                            $image3 = $imageName3 ;
                            move_uploaded_file($imageTmp3 , "layout\images\blog\\" . $image3 );
                        }else{
                            $image3 = '';
                        }
                        if($imageName4 != ''){
                            $image4 = $imageName4 ;
                            move_uploaded_file($imageTmp4 , "layout\images\blog\\" . $image4 );
                        }else{
                            $image4 = '';
                        }
                        if($imageName5 != ''){
                            $image5 = $imageName5 ;
                            move_uploaded_file($imageTmp5 , "layout\images\blog\\" . $image5 );
                        }else{
                            $image5 = '';
                        }
                        if($imageName6 != ''){
                            $image6 = $imageName6 ;
                            move_uploaded_file($imageTmp6 , "layout\images\blog\\" . $image6 );
                        }else{
                            $image6 = '';
                        }
                        if($imageName7 != ''){
                            $image7 =  $imageName7 ;
                            move_uploaded_file($imageTmp7 , "layout\images\blog\\" . $image7 );
                        }else{
                            $image7 = '';
                        }
                        if($imageName8 != ''){
                            $image8 = $imageName8 ;
                            move_uploaded_file($imageTmp8 , "layout\images\blog\\" . $image8 );
                        }else{
                            $image8 = '';
                        }


                            $stmt=$con->prepare("INSERT INTO blog(Title,Writer,MainImage,Title1,Content1,Image1,Title2,Content2,Image2,Title3,Content3,Image3,Title4,Content4,Image4,Title5,Content5,Image5,Title6,Content6,Image6,Title7,Content7,Image7,Title8,Content8,Image8, Date)
                                                VALUES(:ztitle,:zwriter, :zmainimage, :ztitle1, :zcontent1,:zimage1, :ztitle2, :zcontent2,:zimage2, :ztitle3, :zcontent3,:zimage3, :ztitle4, :zcontent4,:zimage4, :ztitle5, :zcontent5,:zimage5, :ztitle6, :zcontent6,:zimage6, :ztitle7, :zcontent7,:zimage7, :ztitle8, :zcontent8,:zimage8, now() )");
                            $stmt->execute(array(

                                'ztitle' => $mainTitle,
                                'zwriter' => $writerName,
                                'zmainimage' => $mainImage,
                                'ztitle1' => $title1,
                                'zcontent1' => $content1,
                                'zimage1' => $image1,
                                'ztitle2' => $title2,
                                'zcontent2' => $content2,
                                'zimage2' => $image2,
                                'ztitle3' => $title3,
                                'zcontent3' => $content3,
                                'zimage3' => $image3,
                                'ztitle4' => $title4,
                                'zcontent4' => $content4,
                                'zimage4' => $image4,
                                'ztitle5' => $title5,
                                'zcontent5' => $content5,
                                'zimage5' => $image5,
                                'ztitle6' => $title6,
                                'zcontent6' => $content6,
                                'zimage6' => $image6,
                                'ztitle7' => $title7,
                                'zcontent7' => $content7,
                                'zimage7' => $image7,     
                                'ztitle8' => $title8,
                                'zcontent8' => $content8,
                                'zimage8' => $image8,
                                
                            ));
                            echo '<div class="container">';
                                echo "<div class=' text-center alert alert-success'>" . $stmt->rowCount() . " Record Updated </div>";
                                header("refresh:3;url=blogger.php?do=Add");
                            echo '</div">';
                        }
            
                echo "</div>";
            }
        }elseif($do == 'Edit'){
            echo "<div class='edit'>";

                $blogId=isset($_GET['Id']) && is_numeric($_GET['Id']) ? intval($_GET['Id']) : 0;

                $stmt= $con->prepare("SELECT * From blog WHERE Id=?");
                $stmt-> execute(array($blogId));
                $row= $stmt->fetch();
                $count= $stmt->rowCount();

                if($count > 0){ ?>
                    <h1 class="text-center">تعديل الموضوع</h1>
                    <div class="container">

                        <form class="form-horizontal" action = 'blogger.php?do=Update' method='POST'>

                            <input type="hidden" name="blog_id" value="<?php echo $blogId;?>">

                            <div class="form-group row">
                                <label class="col-sm-2 control-label label-title">العنوان الرئيسي</label>
                                <div class="col-sm-10">
                                    <input type="text" name="main_title" class="form-control" value="<?php echo $row['Title'] ?>">
                                </div>
                            </div>  
                            <div class="form-group row">
                                <label class="col-sm-2 control-label">اسم الكاتب</label>
                                <div class="col-sm-10">
                                    <input type="text" name="writer_name" class="form-control" value="<?php echo $row['Writer'] ?>" >
                                </div>
                            </div>  
                            <div class="form-group row">
                                <label class="col-sm-2 control-label">الصورة الرئيسية</label>
                                <div class="col-sm-10">
                                    <input type="file" name="main_image" class="form-control" value="<?php echo $row['MainImage'] ?>">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 control-label label-title">العنوان الاول</label>
                                <div class="col-sm-10">
                                    <input type="text" name="title1" class="form-control" value="<?php echo $row['Title1'] ?>">
                                </div>
                            </div>  
                            <div class="form-group row">
                                <label class="col-sm-2 control-label">المحتوي الاول</label>
                                <div class="col-sm-10">
                                    <textarea name="content1" class="form-control" ><?php echo $row['Content1'] ?></textarea>
                                </div>
                            </div>  
                            <div class="form-group row">
                                <label class="col-sm-2 control-label">الصورة الاولي</label>
                                <div class="col-sm-10">
                                    <input type="file" name="image1" class="form-control" value="<?php echo $row['Image1'] ?>">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 control-label label-title">العنوان الثاني</label>
                                <div class="col-sm-10">
                                    <input type="text" name="title2" class="form-control" value="<?php echo $row['Title2'] ?>">
                                </div>
                            </div>  
                            <div class="form-group row">
                                <label class="col-sm-2 control-label">المحتوي الثاني</label>
                                <div class="col-sm-10">
                                    <textarea name="content2" class="form-control" ><?php echo $row['Content2'] ?></textarea>
                                </div>
                            </div>  
                            <div class="form-group row">
                                <label class="col-sm-2 control-label">الصورة الثانية</label>
                                <div class="col-sm-10">
                                    <input type="file" name="image2" class="form-control" value="<?php echo $row['Image2'] ?>">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 control-label label-title">العنوان الثالث</label>
                                <div class="col-sm-10">
                                    <input type="text" name="title3" class="form-control" value="<?php echo $row['Title3'] ?>">
                                </div>
                            </div>  
                            <div class="form-group row">
                                <label class="col-sm-2 control-label">المحتوي الثالث</label>
                                <div class="col-sm-10">
                                    <textarea name="content3" class="form-control" ><?php echo $row['Content3'] ?></textarea>
                                </div>
                            </div>  
                            <div class="form-group row">
                                <label class="col-sm-2 control-label">الصورة الثالثة</label>
                                <div class="col-sm-10">
                                    <input type="file" name="image3" class="form-control" value="<?php echo $row['Image3'] ?>">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 control-label label-title">العنوان الرابع</label>
                                <div class="col-sm-10">
                                    <input type="text" name="title4" class="form-control" value="<?php echo $row['Title4'] ?>">
                                </div>
                            </div>  
                            <div class="form-group row">
                                <label class="col-sm-2 control-label">المحتوي الرابع</label>
                                <div class="col-sm-10">
                                    <textarea name="content4" class="form-control" ><?php echo $row['Content4'] ?></textarea>
                                </div>
                            </div>  
                            <div class="form-group row">
                                <label class="col-sm-2 control-label">الصورة الرابعة</label>
                                <div class="col-sm-10">
                                    <input type="file" name="image4" class="form-control" value="<?php echo $row['Image4'] ?>">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 control-label label-title">العنوان الخامس</label>
                                <div class="col-sm-10">
                                    <input type="text" name="title5" class="form-control" value="<?php echo $row['Title5'] ?>">
                                </div>
                            </div>  
                            <div class="form-group row">
                                <label class="col-sm-2 control-label">المحتوي الخامس</label>
                                <div class="col-sm-10">
                                    <textarea name="content5" class="form-control" ><?php echo $row['Content5'] ?></textarea>
                                </div>
                            </div>  
                            <div class="form-group row">
                                <label class="col-sm-2 control-label">الصورة الخامسة</label>
                                <div class="col-sm-10">
                                    <input type="file" name="image5" class="form-control" value="<?php echo $row['Image5'] ?>">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 control-label  label-title">العنوان السادس</label>
                                <div class="col-sm-10">
                                    <input type="text" name="title6" class="form-control" value="<?php echo $row['Title6'] ?>">
                                </div>
                            </div>  
                            <div class="form-group row">
                                <label class="col-sm-2 control-label">المحتوي السادس</label>
                                <div class="col-sm-10">
                                    <textarea name="content6" class="form-control" ><?php echo $row['Content6'] ?></textarea>
                                </div>
                            </div>  
                            <div class="form-group row">
                                <label class="col-sm-2 control-label">الصورة السادسة</label>
                                <div class="col-sm-10">
                                    <input type="file" name="image6" class="form-control" value="<?php echo $row['Image6'] ?>">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 control-label  label-title">العنوان السابع</label>
                                <div class="col-sm-10">
                                    <input type="text" name="title7" class="form-control" value="<?php echo $row['Title7'] ?>">
                                </div>
                            </div>  
                            <div class="form-group row">
                                <label class="col-sm-2 control-label">المحتوي السابع</label>
                                <div class="col-sm-10">
                                    <textarea name="content7" class="form-control" ><?php echo $row['Content7'] ?></textarea>
                                </div>
                            </div>  
                            <div class="form-group row">
                                <label class="col-sm-2 control-label">الصورة السابعة</label>
                                <div class="col-sm-10">
                                    <input type="file" name="image7" class="form-control" value="<?php echo $row['Image7'] ?>">
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label class="col-sm-2 control-label  label-title">العنوان الثامن</label>
                                <div class="col-sm-10">
                                    <input type="text" name="title8" class="form-control" value="<?php echo $row['Title8'] ?>">
                                </div>
                            </div>  
                            <div class="form-group row">
                                <label class="col-sm-2 control-label">المحتوي الثامن</label>
                                <div class="col-sm-10">
                                    <textarea name="content8" class="form-control" ><?php echo $row['Content8'] ?></textarea>
                                </div>
                            </div>  
                            <div class="form-group row">
                                <label class="col-sm-2 control-label">الصورة الثامنة</label>
                                <div class="col-sm-10">
                                    <input type="file" name="image8" class="form-control" value="<?php echo $row['Image8'] ?>">
                                </div>
                            </div>


                            <div class="form-group row">
                                <div class=" col-sm-10 offset-sm-2 ">
                                    <input type="submit" value="Edit Subject" class="btn-edit btn btn-primary">
                                </div>
                            </div>

                        </form>
                    </div> 
                    <?php
                }else{

                    echo "<div class='container'>";
        
                    echo "<div class='alert alert-danger text-center'>Theres No Such Id</div>";
                    header("refresh:3;url=blogger.php");
        
                    echo "</div>";
                }
            echo "</div>";
            }elseif($do == 'Update'){
                if($_SERVER['REQUEST_METHOD'] == 'POST'){

                    echo '<h1 class="text-center">تحديث الموضوع</h1>';
                    echo "<div class='container'>";
                        $blogId = $_POST['blog_id'];
                        $mainTitle= $_POST['main_title'];
                        $writerName= $_POST['writer_name'];
                        $mainImage=$_POST['main_image'];

                        $title1= $_POST['title1'];
                        $content1= $_POST['content1'];
                        $image1= $_POST['image1'];
                    
                        $title2= $_POST['title2'];
                        $content2= $_POST['content2'];
                        $image2= $_POST['image2'];
                    
                        $title3= $_POST['title3'];
                        $content3= $_POST['content3'];
                        $image3= $_POST['image3'];
                    
                        $title4= $_POST['title4'];
                        $content4= $_POST['content4'];
                        $image4= $_POST['image4'];
                    
                        $title5= $_POST['title5'];
                        $content5= $_POST['content5'];
                        $image5= $_POST['image5'];
                    
                        $title6= $_POST['title6'];
                        $content6= $_POST['content6'];
                        $image6= $_POST['image6'];
                    
                        $title7= $_POST['title7'];
                        $content7= $_POST['content7'];
                        $image7= $_POST['image7'];
                    
                        $title8= $_POST['title8'];
                        $content8= $_POST['content8'];
                        $image8= $_POST['image8'];


                        $FormErrors = array();
        
                        if(empty($writerName)){

                            $FormErrors []= 'Writer Name Can\'t Be  <strong> Empty !</strong>';
                        }
                        if(empty($mainTitle)){
    
                            $FormErrors []= 'Main Title Can\'t Be  <strong> Empty !</strong>';
                        }
                        if(empty($content1)){
    
                            $FormErrors []= 'Content 1 Can\'t Be  <strong> Empty !</strong>';
                        }
                        foreach($FormErrors as $errors){
                        
                            echo "<div class='text-center alert alert-danger'>" . $errors . '</div>' ;
                        }
        
                        if(empty($FormErrors)){
                                $stmt=$con->prepare("UPDATE blog SET Title =? ,Writer =? ,MainImage =? ,Title1 =? ,Content1 =? ,Image1 =? ,Title2 =? ,Content2 =? ,Image2 =? ,Title3 =? ,Content3 =? ,Image3 =? ,Title4 =? ,Content4 =? ,Image4 =? ,Title5 =? ,Content5 =? ,Image5 =? ,Title6 =? ,Content6 =? ,Image6 =? ,Title7 =? ,Content7 =? ,Image7 =? ,Title8 =? ,Content8 =? ,Image8 =?  , Date= now() WHERE Id=?");
                                $stmt->execute(array($mainTitle,$writerName,$mainImage,$title1,$content1,$image1,$title2,$content2,$image2,$title3,$content3,$image3,$title4,$content4,$image4,$title5,$content5,$image5,$title6,$content6,$image6,$title7,$content7,$image7,$title8,$content8,$image8,$blogId));
                                echo '<div class="container">';
                                    echo "<div class=' text-center alert alert-success'>" . $stmt->rowCount() . " Record Updated </div>";
                                    header("refresh:3;url=blogger.php");
                                echo '</div">';
                        }
                
                    echo "</div>";
                }

            }elseif($do == 'Delete'){

                $blogId=isset($_GET['Id']) && is_numeric($_GET['Id']) ? intval($_GET['Id']) : 0;

                $stmt= $con->prepare("SELECT * From blog WHERE Id=?");
                $stmt-> execute(array($blogId));
                $count= $stmt->rowCount();

                if($count > 0){ 

                    echo ' <h1 class="text-center">حذف الموضوع</h1>';
                    echo ' <div class="container">';

                        $stmt=$con -> prepare(" DELETE  FROM blog WHERE Id = :blogid ");
                        $stmt->bindParam(":blogid" , $blogId);
                        $stmt->execute();
                        echo "<div class=' text-center alert alert-success'>" . $stmt->rowCount() . " Record Deleted </div>";
                        header("refresh:3;url=blogger.php");

            }
        }
    }

    ?>




    <?php include $templete . "footer.php"; 
echo "</div>";

?>