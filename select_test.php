<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>select_test</title>
</head>
<body>
    <form action="select">
        <select name="location" id="">
            <option value="" selected>생년월일을 선택해주십시오.</option>
            <?php
            for($sum=1917;$sum<2017;$sum++){
            $year = "<option value=".$sum.">".$sum."</option>";
            echo $year;
            }
            ?>
        </select>
        <input type="submit" value="송신">
    </form>
</body>
</html>