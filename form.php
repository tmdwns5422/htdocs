<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>텍스트 송신 테스트</title>
    </head>
    <body>
        <form name="form1" method="post" action="view.php">
            이름:<br>
            <input type="text" name="onname"><br>
            나이:<br>
            <input type="text" name="onage"><br>
            성별:<br>
            <input type="text" name="onmw"><br>
            직업:<br>
            <input type="text" name="onjob"><br>
            본문:<br>
            <textarea name="honbun" cols="30" rows="5">
            </textarea>
            <br>
            취미:<br>
            <input type="checkbox" name="hobby[]" value="스포츠">
            스포츠:<br>
            <input type="checkbox" name="hobby[]" value="영화감상">
            영화감상:<br>
            <input type="checkbox" name="hobby[]" value="독서">
            독서:<br>
            <input type="submit" value="송신">
            
        </form>
    </body>
</html>
