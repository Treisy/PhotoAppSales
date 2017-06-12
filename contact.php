<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Gamma: Contact</title>
    <link rel="stylesheet" href="css/bootstrap.css"/>
    <link rel="stylesheet" href="css/styles.css"/>
  </head>
  <body>
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a href="index.php" class="navbar-brand em-text">Gamma</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="index.php" class="active">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <section id="title-bar">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>Contact Us</h1>
          </div>
        </div>
      </div>
    </section>
    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <form>
              <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="Enter name">
              </div>
              <div class="form-group">
                <label>Company Name</label>
                <input type="text" class="form-control" placeholder="Enter company name">
              </div>
              <div class="form-group">
                <label>Email address</label>
                <input type="email" class="form-control" placeholder="Enter email">
              </div>
              <div class="form-group">
                <label>Message</label>
                <textarea class="form-control" placeholder="Enter message" rows="8" cols="40"></textarea>
              </div>
              <button type="submit" class="btn btn-default">Submit</button>
            </form>
          </div>
          <div class="col-md-4">
            <img src="img/demo1.jpg" class="demo" />
            <h2>Lorem Ipsum</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris lobortis tempus varius. Sed porttitor ex id lectus interdum tristique.</p>
            <a href="#" class="btn btn-default">Read More</a>
          </div>
        </div>
      </div>
    </section>
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-xs-12">
            <ul>
              <li><a href="#">Home</a></li>
              <li><a href="#">About</a></li>
              <li><a href="#">Contact</a></li>
              <li><a href="#">Privacy Policy</a></li>
            </ul>
          </div>
          <div class="col-md-6 col-xs-12">
            <p>Copyright &copy; 2015, All Rights Reserved</p>
          </div>
        </div>
      </div>
    </footer>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
