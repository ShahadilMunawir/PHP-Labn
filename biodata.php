<!-- Program 12 -->

<html>
<body>
    <form action="" method="POST">
        <H1>Biodata</h1>
        <label for="name">Name: </label>
        <input type=text id="name" name="name"><br><br>
        <label for="address">Address: </label>
        <textarea name="address" id="address"></textarea><br><br>
        <label for="age">Age: </label>
        <input type=text name="age" id="age"><br><br>
        <label for="phone">Phone: </label>
        <input type=text name="phone" id="phone"><br><br>
        <label for="email">Email: </label>
        <input type="email" name="email" id="email"><br><br>
        <label for="qualification">Educational Qualification: </label>
        <select name="qualification" id="qualification">
            <option selected disabled>Select</option>
            <option value="High School">High School</option>
            <option value="Higher Secondary">Higher Secondary</option>
            <option value="Under Graduate">Under Graduate</option>
        </select>
        <input type=submit value=Display><br><br>
    </form>
</body>

</html>
<?php
    if ($_POST) {
        echo "<h1>Biodata</h1>";
        echo "Name: " . $_POST["name"] . "<br>";
        echo "Address: " . $_POST["address"] . "<br>";
        echo "Age: " . $_POST["age"] . "<br>";
        echo "Mobile: " . $_POST["phone"] . "<br>";
        echo "Email: " . $_POST["email"] . "<br>";
        echo "Qualification: " . $_POST["qualification"] . "<br>";
    }
?>