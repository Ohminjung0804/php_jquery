 <!DOCTYPE html>
<html>
    <head>
        <style>        
            div {
                background-color:#bca;
                width:100px;
                border:1px solid green;
            }
</style>
        <script src="http://code.jquery.com/jquery-latest.js"></script>
    </head>
    <body>
        <button id="go">
            &raquo; Run
        </button>
 
        <div id="block">
            Hello!
        </div>
        <script>/* Using multiple unit types within one animation. */
 
            $("#go").click( function() {
                $("#block").animate({
                    width: "300px",
                    opacity: 0.4,
                    marginLeft: "50px",
                    fontSize: "30px",
                    borderWidth: "10px"
                }, 3000);
            });</script>
    </body>
</html>