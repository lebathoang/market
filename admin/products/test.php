<?php
echo "Welcome " . $_POST['name'] . "!";

?>

<html>
<form name="test" action="#" method="post">
    <table>
        <tr>
            <td>Enter product name</td>
            <td><input type="text" name="name"></td>
        </tr>
        <tr>
            <td>
                <input type="submit" name="OK" value="OK">
            </td>
        </tr>
    </table>
</form>

</html>