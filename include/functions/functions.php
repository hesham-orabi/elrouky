<?php



/*
** Get All Function v2.0
** Function To Get All From Database
*/

function getAllFrom($field , $tableName , $where = NULL , $and = NULL , $orderField , $ordering = "DESC" ){

    global $con;
   
    $getAll = $con->prepare("SELECT $field  FROM $tableName $where $and    ORDER BY $orderField $ordering");
    $getAll->execute();
    $all = $getAll->fetchAll();
    return $all;
}

/*
** Tittle Function V1.0
** Echo the page tittle
*/

function getTitle(){
    global $pageTitle;
    if (isset($pageTitle)){
        echo $pageTitle;
    } else {
        echo 'default';
    }
}

/*
** Home Redirect Function v2.0
** (This Function Accepted Parameter)
** $theMsg = Echo The Message
** $url Thel Link want To Redirect
** $second = Seconds Before Redirect
*/

function redirectHome($theMsg , $url = null , $seconds = 3){

    if($url === null){

            $url = 'index.php';
            $link = 'Home Page';
    } else {

        if(isset($_SERVER['HTTP_REFERER']) && $_SERVER['HTTP_REFERER'] !== ''){

            $url = $_SERVER['HTTP_REFERER'];
            $link = 'Previous Page';

        } else{

            $url = 'index.php';
            $link = 'Home Page';

        }
        
    }

    echo $theMsg;
    
    echo "<div class='alert alert-info text-center'>You Will Redirected To $link After $seconds Seconds.</div>";

    header("refresh:$seconds;url=$url");

    exit();
}

/*
** Check Items Function v1.0
** Function To Check Items  In Database [ Function Accepted Parameters]
** $select = The Item To select
** $from = The Table To select
** $value = The Value Of select
*/

function checkItem($select ,  $from , $value){

    global $con;

    $statment = $con->prepare("SELECT $select FROM $from WHERE $select = ?");

    $statment->execute(array($value));

    $count = $statment->rowCount();
    
    return $count;
}


/*
** Count Number Of Items in Function v1.0
** Function To Count Number Of Items
** $item = The Item To Count
** $table = The Table To Choose
*/

function countItems($item , $table){

    global $con;

    $stmt2 = $con->prepare("SELECT COUNT($item) FROM $table");

    $stmt2->execute();

    return $stmt2->fetchColumn();
}


/*
** Get Latest Record Function v2.0
** Function To Get Latest Record From Database
** $select = The Field To Select
** $table = The Table To Select
** $order = The DESC Ordering
** $limit = The Number Of Record To Get
*/

function getLatest($select,$table,$orderedby, $order,$limit){

    global $con;

    $getStmt = $con->prepare("SELECT $select FROM $table ORDER BY $orderedby $order LIMIT $limit");
    $getStmt->execute();
    $row = $getStmt->fetchAll();

    return $row;
}