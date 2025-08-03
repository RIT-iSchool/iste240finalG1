<?php
    $page='why-unix';
    $title = "UNIX for Web Devs - Why UNIX?";
    $path = '../';
    require $path.'.assets/inc/header.php';
    require_once $path.'.assets/inc/nav.php';

    require $path.'../../../../dbConnect';

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

<?php include('../.assets/inc/footer.php'); ?>