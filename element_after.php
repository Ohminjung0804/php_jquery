<!DOCTYPE html>
<html>
    <head>
        <style>
            p {
                background:yellow;
            }
        </style>
        <script src="http://code.jquery.com/jquery-latest.js"></script>
    </head>
    <body>
        <p>
            I would like to say:
        </p>
        <script>$("p").after("<b>Hello</b>");</script>
    </body>
</html>