<?php
    include_once "db/db_board.php";
    session_start();
    if(isset($_SESSION["login_user"])) {
        $login_user = $_SESSION["login_user"];
    }
    $i_board = $_GET['i_board'];
    $param = [
        "i_board" => $i_board
    ];
    $item = sel_board($param);
    $pre = pre_page($param);
    $next = next_page($param);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$item["title"]?></title>
</head>
<body>
    <div><a href="list.php">리스트</a></div>
    <?php if(isset($_SESSION["login_user"]) && $login_user["i_user"] === $item["i_user"]) { ?>
        <div>
            <a href="mod.php?i_board=<?=$i_board?>"><button>수정</button></a>
            <button onclick="isDel();">삭제</button>
        </div>
    <?php } ?>
    <div>글번호: <?=$i_board?></div>
    <div>제목 : <?=$item["title"]?></div>
    <div>글쓴이 : <?=$item["nm"]?></div>
    <div>등록일시 : <?=$item["created_at"]?></div>
    <div>내용: <?=$item["ctnt"]?> </div>
    <div>수정일시: <?=$item["updated_at"]?></div>
    <div>
        <?php
        print "이전글 : ". $pre ;
        print " 다음글 : ". $next;
        print "<br>";
        if($pre!=0){
            echo "<a href='detail.php?i_board=$pre'><button>이전글</button></a>";
        }
        if($next!=0){
            echo "<a href='detail.php?i_board=$next'><button>다음글</button></a>";
        }
        ?>
    </div>

    <script>
        function isDel(){
            console.log('isDel 실행 됨!!');
            if(confirm('삭제하시겠습니까?')){
                location.href = "del.php?i_board=<?=$i_board?>";
            }
        }
    </script>
</body>
</html>
