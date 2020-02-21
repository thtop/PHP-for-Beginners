<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajax</title>
</head>
<body>
    <h1>Ajax example</h1>

    <p>This time is <time id="currentTime"><?= date('g:i:s') ?></time></p>

    <button id="btn">Refresh</button>

    <script src="jquery-3.4.1.min.js"></script>

    <script>
        $("#btn").on("click", function() {
            
            $.ajax("06-gettime.php")
                .done(function(data) {
                    $("#currentTime").html(data);
                });

        });
    </script>
</body>
</html>