<?php
    header("Content-Type: text/html; charset=utf-8");
    mb_internal_encoding('UTF-8');
?>
 <?php

if($_SERVER['REQUEST_METHOD'] ==  "POST") {
    $a =  $_POST['a'];
    $b =  $_POST['b'];
    $operation =  $_POST['operation'];
    $reset =  $_POST['reset'];
    if($reset) {
        $view = "";
        $a = "";
        $b = "";
        $operation = false;
        $view = "";
    }
    if ($operation) {
        if ($operation == "+") {
            $result = $a + $b;
        }
        if ($operation == "-") {
            $result = $a - $b;
        }
        if ($operation == "*") {
            $result = $a * $b;
        }
        if ($operation == "/") {
            $result = $a / $b;
        }
        $view = " = $result";
    }
}
?>

<html>
<p><b>Задание 1 , 2, 3</b></p><br>
<p>1. Обязательно сделайте скрипты, приведенные в качестве примеров в этом уроке. <br>2. Превратите получившийся сумматор в калькулятор с четырьмя операциями: сложение, вычитание, умножение, деление. Не забудьте обработать деление на ноль! Выбор операции можно осуществлять с помощью тега <!-- <select>. --> 
Продвинутый блок. <br>3. Создайте калькулятор, который будет определять тип выбранной пользователем операции, ориентируясь на нажатую кнопку. 
Данные, введённые пользователем в поля, должны сохраняться и выводиться вместе с результатом вычисления.</p><br>


<form method="post">
    <input name="a" type="text" value="<?= $a ?>">
    <select name="operation" onchange="submit()">
        <option value="">Выбрать операцию</option>
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>
    <input name="b" type="text" value="<?= $b ?>">
    <?= $view ?><br><br>

    <input name="operation" value="+" type="submit"/>
    <input name="operation" value="-" type="submit"/>
    <input name="operation" value="*" type="submit"/>
    <input name="operation" value="/" type="submit"/>
    <input name="reset" value="Reset" type="submit"/>
</form>

</body>
</html>