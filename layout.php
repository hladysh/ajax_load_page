<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">

</head>
<body>
    <ul>
        <li><a href="/index.php">Home</a></li>
        <li><a href="/contacts.php">Contacts</a></li>
        <li><a href="/about.php">About</a></li>
        <li><a href="/sell.php">Sell</a></li>
    </ul>
    <div id="content"><?php echo $content; ?></div>
    <h1>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste, nulla.</h1>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $('a').click(function() {
                var url = $(this).attr('href');

                $.ajax({
                    url:     url + '?ajax=1',
                    success: function(data){
                        $('#content').html(data);
                    }
                });

                if(url != window.location){
                    window.history.pushState(null, null, url);
                }
                return false;
            });

            $(window).bind('popstate', function() {
                $.ajax({
                    url:     location.pathname + '?ajax=1',
                    success: function(data) {
                        $('#content').html(data);
                    }
                });
            });
        });
    </script>
        
</body>
</html>