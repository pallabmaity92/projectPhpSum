<html>
    <head><h1> Get Your Output</h1></head>
    <body>         

        <!-- // Entired Frist Number is: echo $_POST["Fnumber"];
        // <br>
        // <br>
        // Entired Secound Number is: echo $_POST["Snumber"];
        // <br> -->
        The Entired Number is: <?php echo $_POST['Enumbers']; ?>
        <br>
    
        <?php
        // $x= $_POST["Fnumber"];
        // $y= $_POST["Snumber"];
        // $z= $x+$y;
        // echo "<br><br>";
        // echo "The Sum of this two numbers is $z";

        $inputArray=$_POST["Enumbers"];
        //echo "Check the Numbers: $inputArray";

        print (array_sum(explode(",", $inputArray)));

        ?>


</body>
</html>

<!--
    ===========================================
    $array_value = [1,2,3,4,5];
        print array_sum($array_value);
    ===========================================
        $input  = $_POST['YourFieldName'];
        $input_arr = explode(" ", $input);
        echo $input_arr[0]; // input 1
        echo $input_arr[1]; // input 2 etc...
    ===========================================
    SSG-

    $str="1,2,3,4";
    print r(array sum(explode(",",$str)));

-->