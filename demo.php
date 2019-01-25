<!doctype html>
 <html lang="en">
  <head>
   <meta charset="utf-8">
   <title>jQuery UI Slider - Range slider</title>
   <link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
   <script src="//code.jquery.com/jquery-1.9.1.js"></script>
   <script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
   <link rel="stylesheet" href="/resources/demos/style.css">
   <script>
    $(function() {
$( "#slider-range" ).slider({
  range: true,
  min: 0,
  max: 500,
  values: [ 100, 300 ],
    slide: function( event, ui ) {
    $( "#amount" ).html( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
    $( "#amount1" ).val(ui.values[ 0 ]);
    $( "#amount2" ).val(ui.values[ 1 ]);
   }
  });
  $( "#amount" ).html( "$" + $( "#slider-range" ).slider( "values", 0 ) +
 " - $" + $( "#slider-range" ).slider( "values", 1 ) );
});
  </script>
 </head>
 <body>
  <p>
   <label for="amount">Price range:</label>
   <input type="text" id="amount" style="border:0; color:#f6931f; font-weight:bold;">
  </p>
  <div id="slider-range"></div>
 </body>
</html>