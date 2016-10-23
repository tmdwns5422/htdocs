$(document).ready(function(){
   for(var i = 1; i < 34; i++){
       var name = ["","조봉희","이윤정","김영국","황보현","정동엽","허양섭","김희연","서민정","배인규","이면호","권순필","김순상","강만희","심종섭","문서현","김성진","최승호","황한모","이민주","이병찬","정봉용","Adrianne Mascho","박선갑","백신혜","박은경","최은영","고주형","김도형","이창훈","이영국","김선진","신소영","이항선"];
       var html = "";
        html +="<li><img src='./img/teachers/"+i+".jpg'></li>";
        sum(html,html2);
       var html2 = "";
       html2 +="<div class='hover'><p>"+name[i]+"선생님</p></div>";
       $(".teachers ul li").eq(i-1).append(html2);
    }
    function sum(html,html2){
        $(".teachers ul").append(html);
    }
});