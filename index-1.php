<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>30-Supavita</title>
</head>
<body>
    <form method="GET">
        ทีม 1 : <input type="text" name="team1"></br>
        ทีม 2 : <input type="text" name="team2"></br>
        <input type="submit" value="ตกลง">
    </form>
    <?php
    $t1 = $_GET['team1'];
    $t2 = $_GET['team2'];
    if ($t1 > $t2) {
        echo "ทีม 1 ชนะ";
    } else if ($t1 < $t2) {
        echo "ทีม 2 ชนะ";
    }
    else {
        echo "ทั้งสองทีมเสมอกัน";
    }
    ?>
</body>
</html> 
