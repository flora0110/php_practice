<!DOCTYPE html>
<html lang="en">
<head>
    <script src="../js/jquery-3.6.0.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>friend link</title>
</head>
<body>
    <form method="get">
    <input type="text" name="fname" value=""></input>is a friend of
    <input type="text" name="age"  value=""></input></br>
    <!--button id="send">送出查詢</button-->
    <input type="submit" value="提交">
    </form>
    <p id="ans">..</p>


    <?php
    echo $_GET["fname"];
    echo $_GET["age"];
    $max = -1;
    $friends = array();
    $is_zero_friend=0;
    //echo $a;
    for($i=0;$i<20;$i++){
        array_push($friends,0);
    }
    /*for($i=0;$i<20;$i++){
        //echo $friends[$i]'<br>';
        echo $friends[$i].'<br>';
    }*/
    ?>
    <script>
        $(function(){
            $("#send").click(function(){

                alert("click");

                $.showMax(<?php echo $is_zero_friend; ?>);
            });
            $.showMax = function(is_zero_friend){
                alert("in showMax()");
                if(is_zero_friend ==0){
                    $("#ans").text("No, there are no chain of friendship");
                }
                else {
                    $("#ans").text("Yes, there is a chain of friendship");
                }
            }
        });
    </script>
</body>
</html>
