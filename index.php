<?php
    $page='home';
    $title = "UNIX for Web Devs - Homepage";
    $path = './';
    require $path.'_assets/inc/header.php';

    require '../../../dbConnect.inc';

    $sql = 'SELECT content from groupSite where name=?';
    $stmt = $mysqli->prepare($sql);
    
    if ($stmt) {
        $stmt->bind_param('s', $page);
        $stmt->execute();
        $result = $stmt->get_result();
        
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                echo $row['content'];
            }
        }
        else {
            echo '<!-- Something went wrong -->';
        }
        $stmt->close();
    } else {
        echo '<!-- Database query preparation failed -->';
    }
    $mysqli->close();
?>

<?php include($path.'_assets/inc/footer.php'); ?>
