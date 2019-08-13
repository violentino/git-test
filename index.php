<?php
    header("Content-Type: text/html; charset=utf-8");
    mb_internal_encoding('UTF-8');
?>
 <p><b>Задание 1</b> </p><br>
 <p>Объявите две целочисленные переменные $a и $b и задайте им произвольные
начальные значения. Затем напишите скрипт, который работает по следующему
принципу:<br>
a. если $a и $b положительные, выведите их разность;<br>
b. если $а и $b отрицательные, выведите их произведение;<br>
c. если $а и $b разных знаков, выведите их сумму.<br>
Ноль можно считать положительным числом.</p>

<?php
    $xa = rand( 0, 99);
    echo "- a )<br> $xa <br>";
    $ya = rand( 0, 99);
    echo " $ya <br><br>";
    $xb = rand( 0, -99);
    echo "- b )<br> $xb <br>";
    $yb = rand( 0, -99);
    echo " $yb <br><br>";
    $xc = rand( -99, 99);
    echo "- c ) <br> $xc <br>";
    $yc = rand(-99, 99);
    echo " $yc <br><br>";

    echo "разность $xa и $ya = ", $xa-$ya;
    echo "<br> произведение $xb и $yb = ", $xb*$yb;
    echo "<br>сумма $xc и $yc = ", $xc+$yc;

    ?>
<br>
<p><b>Задание 2</b> </p><br>
<p>Присвойте переменной $а значение в промежутке [0..15]. С помощью оператора
switch организуйте вывод чисел от $a до 15;</p><br>

<?php
    $a = rand(0, 15);

    switch ($a)
        {
         case 0:
          echo '0<br>';
         case 1:
          echo '1<br>';
         case 2:
          echo '2<br>';
         case 3:
          echo '3<br>';
         case 4:
          echo '4<br>';
         case 5:
          echo '5<br>';
         case 6:
          echo '6<br>';
         case 7:
          echo '7<br>';
          case 8:
          echo '8<br>';
          case 9:
          echo '9<br>';
          case 10:
          echo '10<br>';
          case 11:
          echo '11<br>';
          case 12:
          echo '12<br>';
          case 13:
          echo '13<br>';
          case 14:
          echo '14<br>';
          case 15:
          echo '15<br>';

        }

    ?>
   <br>

   <p><b>Задание 3</b> </p><br>
   <p>Реализуйте основные 4 арифметические операции (+, -, *, %) в виде функций с
двумя параметрами. Обязательно используйте оператор return.</p><br>
   <?php
        $a1 = 10;
        echo "первый параметр", " " , $a1, "<br>";
        $a2 = 20;
        echo "второй параметр", " " , $a2, "<br>";
        function summa($a1, $a2)
        {
             return $a1+$a2;
        }
        echo summa($a1, $a2), "  сумма <br>" ;  

        function razn($a1, $a2)
        {
             return $a1-$a2;
        }
        echo razn($a1, $a2), "  разность <br>"  ;  

        function proizv($a1, $a2)
        {
             return $a1*$a2;
        }
        echo proizv($a1, $a2), "  произведение <br>"  ;  

        function delenie($a1, $a2)
        {
             return $a2/$a1;
        }
        echo delenie($a1, $a2), "  частное <br>"  ;   

    ?>
   <br>

   <p><b>Задание 4</b> </p><br>
   <p>Реализуйте функцию с тремя параметрами: function mathOperation($arg1, $arg2,<br>
        $operation), где $arg1, $arg2 – значения аргументов, $operation – строка с названием<br>
        операции. В зависимости от переданного значения операции выполните одну из<br>
        арифметических операций (используйте функции из пункта 4) и верните<br>
        полученное значение (используйте switch). 
        </p><br>

    <?php
        echo "Первый аргумент: ", $arg1 = 50, "<br>";
        echo "Второй аргумент: ", $arg2 = 14, "<br>";
        echo "Операция ", $operation = "/", "<br>";
        function mathOperation($arg1, $arg2, $operation) {
            switch ($operation){

                case "+":
                return $arg1+$arg2;
                break;

                case "-":
                return $arg1-$arg2;
                break;

                case "*":
                return $arg1*$arg2;
                break;

                case "/":
                return $arg1/$arg2;
                break;
            }

        }
        echo $arg1, $operation, $arg2, " = ", mathOperation($arg1, $arg2, $operation) ;

    ?>
    <br>
    <p><b>Задание 5</b> </p><br>
    <?php 
      function power($val,$pow,&$result){
            if ($pow > 1)
            {
                $result *= $val;
                power($val, --$pow, $result);
            }
        }
        $result = $val = 2;
        $pow = 3;
        power($val, $pow, $result);
        echo $result;
    ?>
