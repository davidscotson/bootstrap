<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../favicon.ico">

    <title>Tooltip Viewport Example for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="tooltip-viewport.css" rel="stylesheet">
  </head>

  <body>

    <button class="btn btn-secondary pull-xs-right tooltip-bottom" title="This should be shifted to the left">Shift Left</button>
    <button class="btn btn-secondary tooltip-bottom" title="This should be shifted to the right">Shift Right</button>
    <button class="btn btn-secondary tooltip-right" title="This should be shifted down">Shift Down</button>

    <button class="btn btn-secondary tooltip-right btn-bottom" title="This should be shifted up">Shift Up</button>

    <div class="container-viewport">
      <button class="btn btn-secondary tooltip-viewport-bottom" title="This should be shifted to the left">Shift Left</button>
      <button class="btn btn-secondary tooltip-viewport-right" title="This should be shifted down">Shift Down</button>

      <button class="btn btn-secondary pull-xs-right tooltip-viewport-bottom" title="This should be shifted to the right">Shift Right</button>

      <button class="btn btn-secondary tooltip-viewport-right btn-bottom" title="This should be shifted up">Shift Up</button>
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js" integrity="sha384-Plbmg8JY28KFelvJVai01l8WyZzrYWG825m+cZ0eDDS1f7d/js6ikvy1+X+guPIB" crossorigin="anonymous"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/vendor/tether.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
    <script src="tooltip-viewport.js"></script>
  </body>
</html>
