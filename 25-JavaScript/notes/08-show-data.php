<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show data</title>
</head>
<body>
    <h1>Ajax example</h1>

    <dl>
        <dt>Name</dt>
        <dd id="name"></dd>
        <dt>email</dt>
        <dd id="email"></dd>
        <dt>Date of birth</dt>
        <dd id="dob"></dd>
    </dl>

    <button id="btn">Get Data</button>

    <script src="jquery-3.4.1.min.js"></script>

    <script>
        $("#btn").on("click", function() {
            
            $.ajax("07-getdata.php")
                .done(function(data) {

                    var json = JSON.parse(data);

                    $("#name").html(json.name);
                    $("#email").html(json.email);
                    $("#dob").html(json.dob);
                });

        });
    </script>
</body>
</html>