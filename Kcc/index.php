
<!DOCTYPE html>
<!-- saved from url=(0027)https://shinyuna.github.io/ -->
<html lang="ko">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" href="./css/kcc.css">
    <title>20626</title>
</head>
<body>
    <div id="wrap">
        <div id="header">
            <div class="log">
                <ul id="wel">
                    <li>justhwoo님 환영합니다</li>
                    <li>|</li>
                    <li>회원정보수정</li>
                    <li>|</li>
                    <li>채팅룸</li>
                    <li>|</li>
                    <li>로그아웃</li>
                    <li>|</li>
                    <li>사이트맵</li>
                </ul>
                <div class="logo">
                    <a href="#"><div id="line"></div>
                        <div>
                        <img id="img" src="./img/kcclogo.png" alt="logo">
                        <img id="logo" src="./img/Untitled-1.png" alt="logo">
                        </div>
                    </a>
                </div>
                <div class="intro">
                <ul>
                    <li><a href="http://cheza.mireene.com/work/kccgolf/sub01.html#">INTRODUCTION<br>클럽소개</a></li>
                    <li><a href="http://cheza.mireene.com/work/kccgolf/sub01.html#">RESERVATION<br>예약하기</a></li>
                    <li><a href="http://cheza.mireene.com/work/kccgolf/sub01.html#">COURSE<br>코스안내</a></li>
                    <li><a href="http://cheza.mireene.com/work/kccgolf/sub01.html#">FACILITIES<br>시설안내</a></li>
                    <li><a href="http://cheza.mireene.com/work/kccgolf/sub01.html#">COMMUNITY<br>커뮤니티</a></li>
                </ul>
                </div>
            </div>
        </div>
        <div id="article">
            <div id="survise">
                <h2>회원서비스</h2>
                <nav>
                    <ul>
                        <li><a href="#">로그인</a></li>
                        <li><a href="#">회원가입 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &gt;</a></li>
                        <li><a href="#">아이디/비밀번호찾기</a></li>
                        <li><a href="#">회원정보 수정</a></li>
                        <li><a href="#">개인정보 취급방침</a></li>
                    </ul>
                </nav>
            </div>
            <div id="joinbox">
            <div id="join">
            <h4>홈 &nbsp; &gt;&nbsp; 회원서비스&nbsp; &gt; &nbsp;회원가입 <br> &nbsp;</h4>
            <h1>회원가입</h1>
            <h5>다양한 서비스와 풍부한 컨텐츠를 만나실 수 있는 회원가입입니다.</h5>
            <ul>
                <li>약관동의</li>
                <li>&gt;</li>
                <li>본인인증</li>
                <li>&gt;</li>
                <li>회원정보입력</li>
                <li>&gt;</li>
                <li>가입완료</li>
            </ul>
            </div>
            <div id="in">
                <h5><span id="s">상세정보 입력</span> &nbsp;<span class="star">*</span>표시는 필수입력 항목입니다.</h5>
            </div>
            <div id="put">
             <table class="table">
                    <tbody>
                    <form action="./lib/insert.php" method="post">
                        <tr>
                            <td>한글이름&nbsp;<span class="star">*</span></td>
                            <td><input type="text" name="kName"></td>
                        </tr>
                        <tr>
                            <td>영문이름</td>
                            <td><input type="text" name="eName" style="margin-left:12px;"></td>
                        </tr>
                        <tr>
                            <td>생년월일&nbsp;<span class="star">*</span></td>
                            <td>
                            <select name="bYear" class="year">
                               <?php
                                    for($i = 1964 ;$i<2017; $i++)
                                    {
                                        echo "<option value=".$i.">".$i."</option>";
                                    }
                                ?>
                            </select>&nbsp;년
                            </td>
                            <td>
                            <select name="bMonth" class="mot">
                                 <?php
                                    for($i = 1 ;$i<13; $i++)
                                    {
                                        echo "<option value=".$i.">".$i."</option>";
                                    }
                                ?>
                            </select>&nbsp;월
                            </td>
                            <td>
                            <select name="bDay" class="day">
                                <?php
                                    for($i = 1 ;$i<31; $i++)
                                    {
                                        echo "<option value=".$i.">".$i."</option>";
                                    }
                                ?>
                            </select>&nbsp;일
                            </td>
                        </tr>
                        <tr>
                            <td>아이디&nbsp;
                                <span class="star">*</span>
                            </td>
                            <td>
                                <input type="text" name="id" style="margin-left:16px;">
                            </td>
                            <td><input type="button" value="중복확인"></td>
                            <td><span class="ex">사이트내에서 표시되는 본인정보이며 저장 후 수정하실 수 없습니다.</span></td>
                        </tr>
                        <tr>
                            <td>비밀번호&nbsp;<span class="star">*</span></td>
                            <td><input type="text" name="pw"></td>
                            <td><span class="ex">&nbsp; 영문 소문자,숫자 포함 4자리 이상 10자리 이하입니다.</span></td>
                        </tr>
                        <tr>
                            <td>비밀번호 확인&nbsp;<span class="star">*</span></td>
                            <td>
                            <input type="text" style="margin-left:-37px;" name="cpw">
                            </td>
                            <td><span class="ex">&nbsp; 비밀번호를 한번 더 입력하세요</span></td>
                        </tr>
                        <tr>
                            <td id="call">전화번호</td>
                            <td>
                            <select name="fN">
                                <option value="02">02</option>
                                <option value="031">031</option>
                                <option value="032">032</option>
                                <option value="033">033</option>
                            </select>&nbsp;-</td>
                            <td><input type="text" name="sN" style="width:60px;" maxlength="3">&nbsp;-</td>
                            <td><input type="text" name="tN" style="width:60px;" maxlength="4"></td>
                            <td><span class="ex">&nbsp; 예약시 휴대폰으로 문자가 발송됩니다.</span></td>
                        </tr>
                        <tr>
                            <td id="cellphone">휴대폰번호&nbsp;<span class="star">*</span></td>
                             <td><select name="fPn">
                                <option value="010">010</option>
                                <option value="011">011</option>
                                <option value="016">016</option>
                                <option value="017">017</option>
                                <option value="018">018</option>
                                <option value="019">019</option>
                            </select>&nbsp;-</td>
                            <td>
                                <input type="text" name="sPn" style="width:60px;" maxlength="4">&nbsp;-
                            </td>
                            <td>
                                <input type="text" name="tPn" style="width:60px;" maxlength="4">
                            </td>
                        </tr>
                        <tr>
                            <td id="sms">SNS 수신여부&nbsp;<span class="star">*</span></td>
                            <td><input type="radio" name="sns" value="예" checked><span class="ex">&nbsp;예</span></td>
                            <td><input type="radio" name="sns" value="아니오"><span class="ex">&nbsp;아니오</span></td>
                            <td><span class="ex">회원공지 알림에 대한 수신여부입니다.</span></td>
                        </tr>
                        <tr>
                        <td>E-MAIL</td>
                        <td>
                            <input type="text" name="email" style="margin-left:26px;">
                        </td>
                        </tr>            
                        <tr>
                            <td id="post">자택 우편번호&nbsp;<span class="star">*</span></td>
                            <td><input type="text" id="postfive" name="fPostN" style="width:80px;margin-left:-40px;" placeholder="우편번호"></td>
                            <td><input type="button" onclick="postCode()" value="우편번호 찾기"></td>
                        </tr>
                        <tr>
                            <td>자택주소&nbsp;<span class="star">*</span></td>
                            <td><input type="text" id="roadAddress" name="address" style="width:300px;" placeholder="도로명 주소" ></td>
                            <td><br><input type="text" id="jibunAddress" name="Iaddress" style="width:300px; margin-left:131px;" placeholder="지번 주소"></td>
                        </tr>
                        <tr>
                            <td>DM발송처<span class="star">*</span></td>
                            <td><input type="radio" name="dm" value="자택" checked></td>
                            <td><span class="ex">자택</span></td>
                            <td><input type="radio" name="dm" value="직장"></td>
                            <td><span class="ex">직장</span></td>
                        </tr>
                </tbody>
                </table>
                </div>
                <div id="line2"></div>
                <div id="put2">
                    <table class="table2">
                        <tbody>
                            <tr>
                                <td>직장명&nbsp;<span class="star">*</span></td>
                                <td><input type="text" name="emp" style="margin-left:14px;"></td>
                            </tr>
                            <tr>
                                <td>직종</td>
                                <td><input type="text" name="op" style="margin-left:42px;"></td>
                            </tr>
                            <tr>
                                <td>직위&nbsp;<span class="star">*</span></td>
                                <td><input type="text" name="sp" style="margin-left:30px;"></td>
                            </tr>
                            <tr>
                                <td id="workpost">직장 우편번호<span class="star">*</span></td>
                                <td><input type="text" id="workpostfive" name="efPostN" style="width:80px;" placeholder="우편번호"></td>
                                <td><input type="button" onclick="workpostCode()" value="우편번호 찾기"></td>
                            </tr>
                            <tr>
                                <td>직장주소<span class="star">*</span></td>
                                <td><input type="text" id="eroadAddress" name="eAddress" style="width:300px; margin-left:4px;" placeholder="도로명 주소"></td>
                                <td><br><input type="text" id="ejibunAddress" name="eIaddress" style="width:300px; margin-left:129px;" placeholder="지번 주소"></td>
                            </tr>
                            <tr>
                                <td id="number">직장전화번호<span class="star">*</span></td>
                                <td><select name="efN">
                                <option value="1">010</option>
                                <option value="2">011</option>
                                <option value="3">016</option>
                                <option value="4">017</option>
                                <option value="5">018</option>
                                <option value="6">019</option>
                            </select>&nbsp;-</td>
                            <td><input type="text" name="esN" style="width:60px;">&nbsp;-</td>
                            <td><input type="text" name="etN" style="width:60px;"></td>
                            </tr>
                            <tr>
                            <td id="fax">팩스번호</td>
                                <td><select name="ffN">
                                <option value="1">010</option>
                                <option value="2">011</option>
                                <option value="3">016</option>
                                <option value="4">017</option>
                                <option value="5">018</option>
                                <option value="6">019</option>
                            </select>&nbsp;-</td>
                            <td><input type="text" name="fsN" style="width:60px;">&nbsp;-</td>
                            <td><input type="text" name="ftN" style="width:60px;"></td>
                            </tr>
                            <tr>
                                <td id="merry">결혼여부</td>
                                <td><input type="radio" name="wedding" value="미혼" checked></td>
                                <td><span class="ex">미혼</span></td>
                                <td><input type="radio" name="wedding" value="기혼"></td>
                                <td><span class="ex">기혼</span></td>
                            </tr>
                            <tr>
                                <td id="mdate">결혼기념일</td>
                            <td><select name="wYear" class="year">
                               <?php
                                for($i = 1964 ;$i<2017; $i++)
                                {
                                        echo "<option value=".$i.">".$i."</option>";
                                }
                                ?>
                            </select>&nbsp;년</td>
                            <td><select name="wMonth" class="mot">
                                <?php
                                for($i = 1 ;$i<13; $i++)
                                {
                                        echo "<option value=".$i.">".$i."</option>";
                                }?>
                            </select>&nbsp;월</td>
                            <td><select name="wDay" class="day">
                                <?php
                                 for($i = 1 ;$i<31; $i++)
                                 {
                                        echo "<option value=".$i.">".$i."</option>";
                                 }
                                ?>
                                </select>&nbsp;일
                            </td>
                            </tr>
                        
                    </tbody>
                    </table>
                </div>
                <div id="line3"></div>
                <div id="btn">
                   <button id="next">입력</button>
                </div>
                </div>
                </form>
        </div>
        <div id="footer">
            <div class="footer_line"></div>
            <div class="footer_p">
            <h4>회칙 및 이용약관 &nbsp; &nbsp; &nbsp; &nbsp; 개인정보 취급방침 &nbsp; &nbsp; &nbsp; &nbsp; 인트라넷</h4>    
            <h5>(주)금강레져 대표자:조종호&nbsp; <span class="W">|</span>&nbsp; 경기도 여주군 가남면 본두리 1-2&nbsp; <span class="W">|</span>&nbsp; 대표전화: 031-880-6000&nbsp; <span class="W">|</span>&nbsp; 대표전화: 031-884-5155</h5>
            <h5>사업자등록번호: 126-81-0997&nbsp; <span class="W">|</span>&nbsp; 통신판매법 신고 : 2009-경기여주-0058&nbsp; <span class="W">|</span>&nbsp; 개인정보관리책임자 : 윤두환 031-880-6000 <input type="button" value="사업자 정보확인 ▶"></h5>
            <h5>Copyright (c) Kumkang leisure Ltd. All rights reserved</h5>
            </div>
        </div>
    </div>

</body>
<script src="http://dmaps.daum.net/map_js_init/postcode.v2.js"></script>
<script>
    //본 예제에서는 도로명 주소 표기 방식에 대한 법령에 따라, 내려오는 데이터를 조합하여 올바른 주소를 구성하는 방법을 설명합니다.
    function postCode() {
        new daum.Postcode({
            oncomplete: function(data) {
                // 팝업에서 검색결과 항목을 클릭했을때 실행할 코드를 작성하는 부분.

                // 도로명 주소의 노출 규칙에 따라 주소를 조합한다.
                // 내려오는 변수가 값이 없는 경우엔 공백('')값을 가지므로, 이를 참고하여 분기 한다.
                var fullRoadAddr = data.roadAddress; // 도로명 주소 변수
                var extraRoadAddr = ''; // 도로명 조합형 주소 변수

                // 법정동명이 있을 경우 추가한다. (법정리는 제외)
                // 법정동의 경우 마지막 문자가 "동/로/가"로 끝난다.
                if(data.bname !== '' && /[동|로|가]$/g.test(data.bname)){
                    extraRoadAddr += data.bname;
                }
                // 건물명이 있고, 공동주택일 경우 추가한다.
                if(data.buildingName !== '' && data.apartment === 'Y'){
                   extraRoadAddr += (extraRoadAddr !== '' ? ', ' + data.buildingName : data.buildingName);
                }
                // 도로명, 지번 조합형 주소가 있을 경우, 괄호까지 추가한 최종 문자열을 만든다.
                if(extraRoadAddr !== ''){
                    extraRoadAddr = ' (' + extraRoadAddr + ')';
                }
                // 도로명, 지번 주소의 유무에 따라 해당 조합형 주소를 추가한다.
                if(fullRoadAddr !== ''){
                    fullRoadAddr += extraRoadAddr;
                }

                // 우편번호와 주소 정보를 해당 필드에 넣는다.
                document.getElementById('postfive').value = data.zonecode; //5자리 새우편번호 사용
                document.getElementById('roadAddress').value = fullRoadAddr;
                document.getElementById('jibunAddress').value = data.jibunAddress;

                // 사용자가 '선택 안함'을 클릭한 경우, 예상 주소라는 표시를 해준다.
                if(data.autoRoadAddress) {
                    //예상되는 도로명 주소에 조합형 주소를 추가한다.
                    var expRoadAddr = data.autoRoadAddress + extraRoadAddr;
                    document.getElementById('guide').innerHTML = '(예상 도로명 주소 : ' + expRoadAddr + ')';

                } else if(data.autoJibunAddress) {
                    var expJibunAddr = data.autoJibunAddress;
                    document.getElementById('guide').innerHTML = '(예상 지번 주소 : ' + expJibunAddr + ')';

                } else {
                    document.getElementById('guide').innerHTML = '';
                }
            }
        }).open();
    }
    // 직장주소
        function workpostCode() {
        new daum.Postcode({
            oncomplete: function(data) {
                // 팝업에서 검색결과 항목을 클릭했을때 실행할 코드를 작성하는 부분.

                // 도로명 주소의 노출 규칙에 따라 주소를 조합한다.
                // 내려오는 변수가 값이 없는 경우엔 공백('')값을 가지므로, 이를 참고하여 분기 한다.
                var fullRoadAddr = data.roadAddress; // 도로명 주소 변수
                var extraRoadAddr = ''; // 도로명 조합형 주소 변수

                // 법정동명이 있을 경우 추가한다. (법정리는 제외)
                // 법정동의 경우 마지막 문자가 "동/로/가"로 끝난다.
                if(data.bname !== '' && /[동|로|가]$/g.test(data.bname)){
                    extraRoadAddr += data.bname;
                }
                // 건물명이 있고, 공동주택일 경우 추가한다.
                if(data.buildingName !== '' && data.apartment === 'Y'){
                   extraRoadAddr += (extraRoadAddr !== '' ? ', ' + data.buildingName : data.buildingName);
                }
                // 도로명, 지번 조합형 주소가 있을 경우, 괄호까지 추가한 최종 문자열을 만든다.
                if(extraRoadAddr !== ''){
                    extraRoadAddr = ' (' + extraRoadAddr + ')';
                }
                // 도로명, 지번 주소의 유무에 따라 해당 조합형 주소를 추가한다.
                if(fullRoadAddr !== ''){
                    fullRoadAddr += extraRoadAddr;
                }

                // 우편번호와 주소 정보를 해당 필드에 넣는다.
                document.getElementById('workpostfive').value = data.zonecode; //5자리 새우편번호 사용
                document.getElementById('eroadAddress').value = fullRoadAddr;
                document.getElementById('ejibunAddress').value = data.jibunAddress;

                // 사용자가 '선택 안함'을 클릭한 경우, 예상 주소라는 표시를 해준다.
                if(data.autoRoadAddress) {
                    //예상되는 도로명 주소에 조합형 주소를 추가한다.
                    var expRoadAddr = data.autoRoadAddress + extraRoadAddr;
                    document.getElementById('guide').innerHTML = '(예상 도로명 주소 : ' + expRoadAddr + ')';

                } else if(data.autoJibunAddress) {
                    var expJibunAddr = data.autoJibunAddress;
                    document.getElementById('guide').innerHTML = '(예상 지번 주소 : ' + expJibunAddr + ')';

                } else {
                    document.getElementById('guide').innerHTML = '';
                }
            }
        }).open();
    }
</script>
</html>