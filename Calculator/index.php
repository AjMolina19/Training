<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Calculator</title>
</head>
<body>
<table>
    <tr>
        <td colspan="5"><textarea id="display" class="display" readonly></textarea></td>
    </tr>
    <tr>
        <td><input value="7" type="button" class="but"></td>
        <td><input value="8" type="button" class="but"></td>
        <td><input value="9" type="button" class="but"></td>
        <td><input id="cls" value="C" type="button" class="but"></td>
        <td><input id="div" value="/" type="button" class="but"></td>
    </tr>
    <tr>
        <td><input value="4" type="button" class="but"></td>
        <td><input value="5" type="button" class="but"></td>
        <td><input value="6" type="button" class="but"></td>
        <td><input id="dot" value="." type="button" class="but"></td>
        <td><input id="mul" value="*" type="button" class="but"></td>
    </tr>
    <tr>
        <td><input value="1" type="button" class="but"></td>
        <td><input value="2" type="button" class="but"></td>
        <td><input value="3" type="button" class="but"></td>
        <td><input id="per" value="%" type="button" class="but"></td>
        <td><input id="sub" value="-" type="button" class="but"></td>
    </tr>
    <tr>
        <td><input value="0" type="button" class="but"></td>
        <td colspan="3"><input id="eql" value="=" type="button" class="eql"></td>
        <td><input id="plus" value="+" type="button" class="but"></td>
    </tr>
</table>
</html>
<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> -->
<script src="js/jquery-3.6.1.min.js"></script>
<script src="js/main.js"></script>