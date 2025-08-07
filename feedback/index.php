<?php
    $page='feedback';
    $title = "UNIX for Web Devs - Feedback";
    $path = '../';
    require $path.'_assets/inc/header.php';
    require_once $path.'_assets/inc/nav.php';

    require '../../../../dbConnect.inc';

    $sql = 'SELECT content from modularSite where name=$page';
    $result = $mysqli->query($sql);
    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            echo $row['content'];
        }
    }
    else {
        echo '<!-- Something went wrong -->';
    }
    $mysqli->close();
?>

<?php include('../_assets/inc/footer.php'); ?>
