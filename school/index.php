<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>subpage - 학과소개</title>
    <link rel="stylesheet" href="./css/main_css.css">
</head>
<script  src="http://code.jquery.com/jquery-latest.min.js"></script>
<body>
    <div id="wrap"><!-- 제이쿼리로 높이값 잡게 -->
        <header> <!-- 헤더는 배경색 없음으로 하다가 페이지를 넘어가면 배경색이 생기도록해서 상단에 Fixed로 고정 -->
            <h1><a href="#"><img src="./img/main/main_logo.png" alt="로고"></a></h1>
            <div>
                <ul class="login">
                    <li><a href="#">로그인</a></li>
                    <li><a href="#">회원가입</a></li>
                </ul>
            </div>
            <nav>
                <ul class="main_menu">
                    <li><a href="#">School</a></li>
                    <li><a href="#">Department</a></li>
                    <li><a href="#">Teachers</a></li>
                    <li><a href="#">Circles</a></li>
                    <li><a href="#">Notice</a></li>
                </ul>
            </nav>
        </header>
        <section><!-- 배경색에 오파시티값 줘서 분위기 있게 -->
            <div class="bg_op">
                <div class="main_text">
                    <h1>Seoul Digitech</h1>
                    <p>High School</p>
                </div>
                <div class="sub_text">
                    <p>우수 IT 고등학교</p>
                    <P>IT의 세계로 당신을 초대합니다.</P>
                </div>
                <button class="main_btn"></button>
            </div>
        </section>
        <footer><!-- 푸터는 감춰두고 스크롤이 맨 아래 도달하면 등장하게 스타일처리 -->
            <p>서울특별시 용산구 회나무로 12길 27 서울디지텍고등학교 (우) 140-857</p><br>
            <p>TEL : 010 - 2402 - ****</p><br>
            <p>copyright &copy; 2016 서울디지텍고등학교, All right reserved.</p>
            <p><a href="#"><img src="" alt="로고"></a></p>
        </footer>
    </div>
</body>
</html>