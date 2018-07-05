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
    <app-nav>
    <ul class="nav navbar-nav menu-nav">
      <li class="active"><a href="home">Home</a></li>
      <li><a href="page1">Page 1</a></li>
      <li><a href="page2">Page 2</a></li>
      <li><a href="page3">Page 3</a></li>
    </ul>
      </app-nav>
  </div>
</nav>
<app-root></app-root>
  <script>
  // this should be the Ajax Method.
// and load the url content
    window.onload = function() {setCurrentPage(window.location.pathname.trimLeft('/y'))};
var setCurrentPage = function(url) {
    $('app-root').html(url);
  $('title').html(url);
    
};

$('.menu-nav a').click(function(e){
    e.preventDefault();
  $('.menu-nav li').removeClass('active');
  $(this).parent().addClass('active');
    var targetUrl = $(this).attr('href'),
        targetTitle = $(this).attr('title');
    
    $("#menu-nav a[href='" + window.location.pathname + "']").fadeTo(500, 1.0);
    
    window.history.pushState({url: "" + targetUrl + ""}, targetTitle, targetUrl);
    setCurrentPage(targetUrl);
});

window.onpopstate = function(e) {
    
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
