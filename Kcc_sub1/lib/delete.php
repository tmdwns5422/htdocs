<?php
    include "kccdb.php";
    
    for($i=0;$i<count($_POST['idx']);$i++){ /*count 함수를 사용하여 idx 값이 array 형식으로 들어간걸 
        포문으로 돌려서 $value 변수 안에 idx값을 넣고 삭제시키는 $del 부분에 idx 에다가 배열값이 저장된 $value
        를 넣고 [] 안에 $i 를 넣음으로써 내가 체크한 체크박스에 idx 수만큼 포문이 돌려져서 그 만큼의 idx를 삭제*/
        $value = $_POST['idx'];
        $del = "delete from member where idx='$value[$i]'";
        $pdo->query($del);
    }
?>
<script>
    location.href="login_view.php";
</script>