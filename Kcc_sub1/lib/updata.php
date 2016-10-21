
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        .table{margin-top:10px;}
    td{width: 150px;display: inline; margin-left:10px; font-size: 15px; color: #6d6d6d; font-family:'나눔고딕',NanumGothic,Tahoma,sans-serif;}
    td:nth-child(1){padding-right:35px;}
    input{background-color: #f3f3f3; border:1px solid #E1E2E3; } select{background-color: #f3f3f3;}
    #call{padding-right:49px;} #cellphone{padding-right: 20px;} 
    #sms{padding-right: 1px;} #post{padding-right:39px;}
    .ex{color:#6d6d6d; font-size:0.5px;}
    #line2{margin-top: 20px; border-top: 3px solid #e5e5e5;}
    .table2{margin-top: 20px;}
    #workpost{padding-right:4px;}
    #number{padding-right:8px;} #fax{padding-right:46px;}
    #number{padding-right:8px;} #fax{padding-right:46px;}
    #merry{padding-right: 45px;} #mdate{padding-right: 30px;}
    </style>
</head>
<body>
    <table class="table">
                    <tbody>
                    <form id="form" action="./lib/insert.php" method="post">
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
                                <input id="uid" type="text" name="id" style="margin-left:16px;" placeholder="아이디를 입력해주십시오">
                            </td>
                            <td><input type="hidden" name="isexist" value="y"><input type="button" value="중복확인" id="checking" onclick="Checked_id()"></td>
                            <td><span class="ex">아이디는 4자 이상 16자 미만입니다.</span></td>
                        </tr>
                        <tr>
                            <td>비밀번호&nbsp;<span class="star">*</span></td>
                            <td><input id="upw" type="text" name="pw" placeholder="비밀번호를 입력해주십시오"></td>
                            <td><span class="ex">&nbsp; 영문 소문자,숫자 포함 4자리 이상 16자 미만입니다.</span></td>
                        </tr>
                        <tr>
                            <td>비밀번호 확인&nbsp;<span class="star">*</span></td>
                            <td>
                            <input id="testpw" type="text" style="margin-left:-37px;" name="cpw" placeholder="다시한번 입력해주십시오">
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
                            <input id="mail" type="text" name="email" style="margin-left:26px;" placeholder="이메일을 입력해주십시오">
                            <span class="ex">영문,숫자 포함하여 9자 이상 30자 미만입니다.</span>
                        </td>
                        </tr>            
                        <tr>
                            <td id="post">자택 우편번호&nbsp;<span class="star">*</span></td>
                            <td><input type="text" id="postfive" name="fPostN" style="width:80px;margin-left:-40px;" placeholder="우편번호" readonly></td>
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
                                <td><input type="text" id="workpostfive" name="efPostN" style="width:80px;" placeholder="우편번호" readonly></td>
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
                                <option value="010">010</option>
                                <option value="011">011</option>
                                <option value="016">016</option>
                                <option value="017">017</option>
                                <option value="018">018</option>
                                <option value="019">019</option>
                            </select>&nbsp;-</td>
                            <td><input type="text" name="esN" style="width:60px;" maxlength="4">&nbsp;-</td>
                            <td><input type="text" name="etN" style="width:60px;" maxlength="4"></td>
                            </tr>
                            <tr>
                            <td id="fax">팩스번호</td>
                                <td><select name="ffN">
                                <option value="010">010</option>
                                <option value="011">011</option>
                                <option value="016">016</option>
                                <option value="017">017</option>
                                <option value="018">018</option>
                                <option value="019">019</option>
                            </select>&nbsp;-</td>
                            <td><input type="text" name="fsN" style="width:60px;" maxlength="4">&nbsp;-</td>
                            <td><input type="text" name="ftN" style="width:60px;" maxlength="4"></td>
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
</body>
</html>