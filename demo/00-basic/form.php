<html>
    <body>
        <form method="POST" action="form.php">
            Score :: <input type="text" name="score"/>
            <input type="submit" name="convert" value="Convert !!"/>

        </form>

        <?php
            if(isset($_POST["score"])) {
                echo "<h1>". $_POST["score"] . "</h1>";
            }
        ?>

    </body>
</html>

