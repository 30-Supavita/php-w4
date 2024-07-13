<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>30-Supavita</title>
</head>
<body>
    <form method="GET">
        กรุณาใส่เดือน : <input type="text" name="month"></br>
        <input type="submit" value="ตกลง">
    </form>
    <?php
        $intmonth = $_GET['month'];
        switch ($intmonth) {
            case ("มกราคม"): case ("มีนาคม"): case ("พฤษภาคม"): case ("กรกฎาคม"): case ("สิงหาคม"): case ("ตุลาคม"): case ("ธันวาคม"):
                echo "เดือน $intmonth มี 31 วัน";
                break;
            case ("เมษายน"): case ("มิถุนายน"): case ("กันยายน"): case ("พฤศจิกายน"):
                echo "เดือน $intmonth มี 30 วัน";
                break;
            default:
                echo "ไม่พบเดือนที่หา!";
        }
    ?>
</body>
</html>
