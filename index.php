<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
  <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">Page 1</a></li>
      <li><a href="#">Page 2</a></li>
      <li><a href="#">Page 3</a></li>
    </ul>
  </div>
</nav>
  <script>
  // this should be the Ajax Method.
// and load the url content
var setCurrentPage = function(url) {
    $('h2 span').html(url || "/");
    $("#menu-nav a[href='" + url + "']").fadeTo(500, 0.3);
};

$('#menu-nav a').click(function(e){
    e.preventDefault();
    var targetUrl = $(this).attr('href'),
        targetTitle = $(this).attr('title');
    
    $("#menu-nav a[href='" + window.location.pathname + "']").fadeTo(500, 1.0);
    
    window.history.pushState({url: "" + targetUrl + ""}, targetTitle, targetUrl);
    setCurrentPage(targetUrl);
});

window.onpopstate = function(e) {
    $("#menu-nav a").fadeTo('fast', 1.0);
    setCurrentPage(e.state ? e.state.url : null);
};

  </script>
<div class="container">
  <h1>My First Bootstrap Page</h1>
  <p>This part is inside a .container class.</p> 
  <p>The .container class provides a responsive fixed width container.</p>           
</div>

</body>
</html>
