<html>
    <body>
        <a id="tutorial" href="http://jquery.com" target="_self">jQuery</a>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
        <script type="text/javascript">
            jQuery('#tutorial').attr('href', 'http://jquery.org').attr('target', '_blank').css('color', 'red');
        </script>
    </body>
</html>