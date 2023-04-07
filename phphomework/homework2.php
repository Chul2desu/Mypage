<html>



<body>
<pre>
<?php
$n= $_GET['number2'];
$a=0;
echo "입력한 수는 ".$n."<br>";
echo "<br>";
echo "<br>";

echo "$n"."<br>";
echo "<br>";
echo "<br>";
echo "<br>";

$dada = array('');

    while ($a<$n) {
        $a=$a+1;

        array_push($dada,rand(10,100));

    }
    sort($dada);
    print_r($dada);


?>
</pre>
</body>
</html>