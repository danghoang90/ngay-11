<?php
$num = 77;

function random($min, $max)
{
    return rand($min, $max);
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $maytinhdoan = (int) $_POST['result'];
    $anwser = $_POST['so'];
    if ($anwser == 'lonhon') {
        $max = $maytinhdoan;
        $min = (int) $_POST['min'];
        $maytinhdoan = random($min, $max);
        echo "min: " . $min . "<br />";
        echo "max: " . $max . "<br />";
        echo "số máy tính đoán: " . $maytinhdoan;
    } elseif ($anwser == 'nhohon'){
        $min = $maytinhdoan;
        $max = (int) $_POST['max'];
        $maytinhdoan = random($min, $max);
        echo "min: " . $min . "<br />";
        echo "max: " . $max . "<br />";
        echo "số máy tính đoán: " . $maytinhdoan;
    } else{
        echo "Trò chơi kết thúc";
    }
} else {
    $min = 1;
    $max = 100;
    $maytinhdoan = random(1, 100);
    echo "số máy tính đoán: " . $maytinhdoan;
}
echo "<br>";
echo "So ban nghi" . $num;
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Game doan so</title>
</head>
<body>
<form  method="post">
    <input type="radio" name="so" value="lonhon"> Lớn hơn số bạn nghĩ
    <input type="radio" name="so" value="nhohon"> Nhỏ hơn số bạn nghĩ
    <input type="hidden" name="result" value="<?php echo $maytinhdoan ?>">
<!--    <input type="hidden" name="min" value="--><?php //echo $min ?><!--">-->
<!--    <input type="hidden" name="max" value="--><?php //echo $max ?><!--">-->

    <input type="radio" name="true" value="true"> Máy tính đã đoán đúng
    <input type="submit" name="so1" value="subit">
</form>
</body>
</html>


