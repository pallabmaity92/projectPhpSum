<html>
    <head><h1> Get Your Output</h1></head>
    <body>
        Entired Frist Number is: <?php echo $_POST["Fnumber"]; ?><br>
        <br>Entired Secound Number is: <?php echo $_POST["Snumber"]; ?><br>

        <?php
        $x= $_POST["Fnumber"];
        $y= $_POST["Snumber"];
        $z= $x+$y;
        echo "<br><br>";
        echo "The Sum of this two numbers is $z";
        ?>


</body>
</html>