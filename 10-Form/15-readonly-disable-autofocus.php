<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    var_dump($_POST);

}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Forms</title>
    <meta charset="utf-8">
</head>
<body>

<form method="post">

    <fieldset>
        <legend>Article</legend>
        <div>
            <label for="title">Title</label>:
            <input type="text" name="title" id="title" value="Example" readonly>
        </div>

        <div>
            <label for="content">Content</label>:
            <textarea autofocus name="content" rows="4" cols="40" id="content" placeholder="Content"></textarea>
        </div>

        <div>
            <label for="lang">Language</label>:
            <select name="lang" id="lang" disabled>
                <option value="en">English</option>
                <option value="fr">French</option>
                <option value="es">Spanish</option>
            </select>
        </div>
    </fieldset>

    <fieldset>
        <legend>Colour</legend>
        <label><input type="radio" name="colour" value="blue" checked>Blue</label><br>
        <label><input type="radio" name="colour" value="red">Red</label><br>
        <label><input type="radio" name="colour" value="green">Green</label>
    </fieldset>

    <button>Send</button>

</form>

</body>
</html>
