
<html>
    <body>
            <?php
                echo"<h1>Find Out SUM  of two Numbers</h1>";
                echo"<br>";
                echo"Enter any two Numbers";
                echo"<br>";
            ?>
            <!-- <form method="post">
                Frist Number:   <input type="text" name="Frist Number"><br>
                <br>Secound Number:    <input type="text" name="secound Number"><br>
                <br><input type="submit" value="click" name="submit">
            </form> -->

            <form action=result.php method="POST">
                Frist Number:   <input type="text" name="Fnumber"><br>
                <br>Secound Number:    <input type="text" name="Snumber"><br>
                <br><input type="submit">
            </form>

</body>
</html>



<!-- 
/*
1. To create form use the <form> tag.
2. form elements are different type - input elements, checkboxes, radio buttons, submit buttons, and many.
3. form tag properites - 
                        i. Action= "..." -> Redirect to another page.
                        ii. Method = "..." -> Two method are Get and Post.
                                                is the method by which the form data is submitted. the option are either get or post.
                                                if the method is get the data is passed in the url string, if the method is post it is passed as a separate file.
4. The input element is the most important form element.
    input element can be created using the <input> tag.
    The input element has many variations, depending on the type attribute.
*/ -->

<!-- 
            echo "<h2>Findout SUM  of two Numbers</h2>";
            $x = 5;
            echo"Enter any two Numbers";
            echo "<br>";
            echo "your frist number is $x"; -->