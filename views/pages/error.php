<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html lang="en">
<head>
    <title>Error - 502</title>
    <link rel="stylesheet" href="//assets.pinterest.com/css/error.css" type="text/css" media="all"></link>
    <style type="text/css">
        body {
          font-size: 24px;
          color: #B7AEB4;
          }

        body a.link,
        body h1,
        body p {
          -webkit-transition: opacity 0.5s ease-in-out;
          -moz-transition: opacity 0.5s ease-in-out;
          transition: opacity 0.5s ease-in-out;
          }

        a.link {
          text-shadow: 0px 1px 2px white;
          font-weight: 600;
          color: #cb2027;
          opacity: 0;
          }

        h1 {
          text-shadow: 0px 1px 2px white;
          font-size: 24px;
          opacity: 0;
          }

        img {
          -webkit-transition: opacity 1s ease-in-out;
          -moz-transition: opacity 1s ease-in-out;
          transition: opacity 1s ease-in-out;
          height: 202px;
          width: 199px;
          opacity: 0;
          }

        p {
          text-shadow: 0px 1px 2px white;
          font-weight: normal;
          font-weight: 200;
          opacity: 0;
          }

        .fade {
          opacity: 1;
          }
    </style>

    <script src="//assets.pinterest.com/js/jquery-1.6.2.min.js" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript">
      $('document').ready(function() {
        if (!$.browser.msie) {
          $('img').addClass('fade').delay(800).queue(function(next) {
            $('h1, p').addClass('fade');
            $('a.link').css('opacity', 1);
            next();
          });
        } else {
          $('img, h1, p').addClass('fade');
          $('a.link').css('opacity', 1);
        }
      });
    </script>
</head>

<body>
    <div style="width: 594px; margin: 100px auto; text-align: center;">
        <a href="/"><img src="//assets.pinterest.com/images/error/502_icon.png"></a>
        <div>
          <h1>Oops!</h1>
          <p>Our server is experiencing a mild case of the hiccups.<br>
             We've reported it to the worker bees.</p>
          <a class="link" href="javascript:location.reload(true)">Try again?</a>
        </div>
    </div>
</body>
</html>
