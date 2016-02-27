
<head>
<title>Brandt Workman | Web Dev</title>
<link rel="stylesheet" href="css/main.css">
<link href='https://fonts.googleapis.com/css?family=Crete+Round' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Fjalla+One' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-beta1/jquery.min.js"></script>
<meta name="viewport" content="width=device-width">


<!--<script type=text/javascript src="js/main.js"></script>-->
<script type="text/javascript">
  $(function() {
    $('.menu').hover( function() {
      $(this).find('.menu-items').toggle()
    })
  })
  
</script>
</head>
<header class='main-header'>
  <h1>Brandt Workman</h1>
  <h2>Design and Development</h2>
  <?php echo "<p class='page'>$page</p>"?>
  <div class='menu'><h3>Menu</h3>
    <div class='menu-items'>
    <ul>
      <li><a href='../index.php'>Portfolio</a></li>
      <li><a href='../about.php'>About</a></li>
      <li><a href='../contact.php'>Contact</a></li>
    </ul>
    </div>
  </div>
</header>
