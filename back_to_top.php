<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstsrap cdn -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- link externalstylesheet -->
    <link rel="stylesheet" type="text/css" href="back_to_top.css">
    <title>back_to_top</title>
</head>
<body>
<a href="#" id="toTopBtn" class="cd-top text-replace js-cd-top cd-top--is-visible cd-top--fade-out" data-abc="true"></a>








<!-- jquery and javascript -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
    $(window).scroll(function() {
    if ($(this).scrollTop() > 20) {
    $('#toTopBtn').fadeIn();
    } else {
    $('#toTopBtn').fadeOut();
    }
    });
    
    $('#toTopBtn').click(function() {
    $("html, body").animate({
    scrollTop: 0
    }, 1000);
    return false;
    });
    });
</script>
</body>
</html>