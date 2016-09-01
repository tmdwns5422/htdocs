<?php
    //보통 php는 제일 윗쪽에 쓰는게 표준이라고 합니다.

    //body 요소안에 php문을 삽입해서 사용할 수 있습니다.

    /*
    
    이 test.php 파일처럼 index.php를 제외한 다른 이름을 가진 php 파일은 인터넷 서버에서
    
    확인할때 127.0.0.1/파일명.php 라고 검색해야합니다. 기존 index.php 파일은 127.0.0.1만
    
    검색해도 됩니다.

    */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>test.php/index.php가 아닐경우 경로 설정이 달라짐</title>
    <style>
        .odd{ color:aquamarine; }
        .even{ color:hotpink; }
        .gugudan{background: black; width:150px;}
    </style>
</head>
<body>
<ul>
    <li>1번</li>
    <li>2번</li>
    <?php
        echo "<p>asd</p>";
        print "<p>내 옆에는 장애인이 있을지도 모릅니다!</p>";
    ?>
    <li>3번째 예제<br>
        <?php
            print PHP_VERSION;
            // 현재 PHP 버전을 나타냅니다.
            print PHP_OS;
            // 현재 OS 상태를 나타냅니다.
            print __FILE__;
            // PHP 현재 경로를 나타냅니다.
        
        
            define("Hello","안녕하세요");
            print Hello;
            // define 에서 정의해준 Hello 를 출력하면 두번째 "안녕하세요"가 출력됨.
            define("10","하이");
            print 10;
            // 하지만 상수는 안됨. 그대로 10 출력
            
        ?>
    </li>
    <li>4번
        <?php
        //[변수선언]
        
            $data="안녕하세요!";
            $data2=123;
            // PHP 변수 선언은 $ 표시를 앞에 해야합니다.
            print $data;
            print $data2;
            // PHP 변수를 이용한 출력은 이런식으로 하면 됩니다.
            // 변수에 타입은 자동으로 변환됩니다 $ 하나로.. c처럼 int,float 등 필요없습니다.
        
        
        
        
        
        
        //[배열] - 초기화방법 ( Login / Logout )
            
            $arr=array();
            $arr2=[];
            // 배열안을 공백설정해서 초기화를 시켜줍니다.
            // 주 사용 용도는 로그인 상태를 로그아웃 시켜줄때 사용합니다.
        
            
        //[배열]
        
            $week[]="월";
            $week[]="화";
            // 위와 아래의 코드는 같은 뜻입니다.
            $week[0]="월";
            $week[1]="화";
            
            print $week[0];
            print $week[1];
            // 배열의  출력은 위와 같이 하면 됩니다.
        
        
        //[배열] - 효율개선 ( array 함수 사용 )
        
            $arr=array(1,2,3,4,5,"안녕","하세요");
            // array 함수를 사용하면 효율적인 배열코드 작성이 가능합니다.
            // 상수,문자열 두개를 한꺼번에 사용가능합니다.
            $arr2=[10,20,30,"배가","고파요"];
            // PHP_VERSION 이 5.4 이상부터 위와 같이 array 함수 없이도 사용가능합니다.
            // 출력방법은 동일합니다.
        
        //[배열] - 연관배열 ( 게시판 제작때 유용 )
            
            $member[0]="안녕";
            // 연관배열은 위처럼 몇번째를 선택하는게 아닌 하나의 연관요소를 만들어 배열요소를 만듭니다
            // 나중에 이름들,나이만을 출력하거나 불러올때 유용합니다.
            $member["name"]="곽이천";
            $member["age"]="20";
            $member["height"]="170";
        
            print $member["age"];
            // 연관배열 출력방법입니다.
            print "<pre>";
            // 이 문장 아래의 요소를 재정렬 해줍니다 ( 보기편하도록 )
            print_r ($member);
            // 연관배열의 모든 요소를 순차적으로 출력합니다.
        
        
        
        //[반복문] - for문 ( 가장 자주 쓰임 )
            /*
            for($i=1;$i<10;$i++)
            {
                for($j=1;$j<10;$j++)
                {
                    print $i."*".$j."=".$i*$j;
                    print("<br>");
                    
                }
                print("<br>");
            }
            */
            // 위 코드는 반복문을 활용한 구구단 코드입니다. 
        ?>
    </li>
    <p class="gugudan">삼황연산자 구구단 코드입니다<br>
        <?php
            for($i=1;$i<10;$i++)
                {
                    for($j=1;$j<10;$j++)
                    {  
                        print gugudan($i,$j);
                    }
                    print("<br>");
                }
            function gugudan($i,$j){
                $type;
                //삼항연산자
                ($i%2==0) ? $type = 'even' : $type = 'odd';
                // if부분 ?다음에 나오는건 참 : 뒤에 나오는건 else.    
                $gugudan = "<span class=".$type.">".$i."*".$j."=".$i*$j."</span> <br>";
                return $gugudan;
            }
        ?>
    </p>
    <p class="gugudan">php 구구단 코드입니다
        <?php
            print ("<br>");
            for($a=1;$a<10;$a++)
                {
                    for($b=1;$b<10;$b++)
                    { 
                        if($a%2==0){
                            print "<span class='even'>".$a."*".$b."=".$a*$b."</span> <br>";
                        }else{
                            print "<span class='odd'>".$a."*".$b."=".$a*$b."</span> <br>";
                        }
                        
                    }
                    print("<br>");
                }
        ?>
    </p>
</ul>

    <header>a</header>
    <section>b</section>
    <footer>c</footer>
</body>
</html>