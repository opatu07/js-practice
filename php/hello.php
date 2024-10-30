<?php
header('Content-type: text/plain; charset= UTF-8');
if(!empty($_POST['answer'])){
    $answer = $_POST['answer'];
    if($answer == 'グラシアス'){
        $result = $answer."はスペイン語のありがとうです";
    }else{
        $result = $answer."はスペイン語のありがとうではありません";
    }
    echo $result;
}else{
    echo '文字を入力してください';
}
?>
