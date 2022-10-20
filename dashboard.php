<?php
include_once 'source/session.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>web4Notes Dashboard</title>
     <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/style1.css">

    <!--<nav class="navbar navbar-inverse (used for making the nav tag dark) bg-light & bg-dark (used for the respective colors">-->
    <nav class="navbar bg-light">
      <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="dashboard.php"><img src="img/first2.png" width="100" height="40"></a>
        </div>
          <ul class="nav navbar-nav">
            <li><a href="dashboard.php">Home</a></li>
            <li>
                <form class="form-inline" action="/action_page.php">
                <input class="form-control mr-sm-2" type="text" placeholder="Search">
                <button class="btn btn-success" type="submit">Search</button>
                </form>
            </li>
            <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown">High school
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="arithematic10th.php">Grade 8</a></li>
            <li><a href="algebra10th.php">Grade 9</a></li>
            <li><a href="geometry10th.php">Grade 10</a></li>
          </ul>
            </li>
            <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown">Senior secondary
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="arithematic10th.php">A Level</a></li>
            <li><a href="algebra10th.php">A+ Level</a></li>
            <li><a href="geometry10th.php">Cambridge</a></li>
            <li><a href="geometry10th.php">IPC-1</a></li>
            <li><a href="geometry10th.php">IPC-2</a></li>
          </ul>
            </li>
            <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown">Under-Grad
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="arithematic10th.php">CSE</a></li>
            <li><a href="algebra10th.php">IT</a></li>
            <li><a href="geometry10th.php">ECE</a></li>
          </ul>
            </li>
            <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown">Post-Grad
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="arithematic10th.php">M tech</a></li>
            <li><a href="algebra10th.php">MBA</a></li>
            <li><a href="geometry10th.php">Specialization</a></li>
          </ul>
            </li>
            <li><a href="https://www.facebook.com/priyam.upadhyay.58/" target="blank">Contact</a></li>
          </ul>
          <h2 align="right"><a href="logout.php">Logout</a></h2>
         </ul>
      </div>
  </form>
</div>
          </ul>
      </div>
    </nav>
</head>
<body class="mark">
    <?php if(!isset($_SESSION['username'])): header("location: logout.php");?>
    <?php else: ?>
    <?php endif ?>
    <center>
    <?php echo "<h1> Bonjour, ".$_SESSION['username'].".</h1>"; ?>
</center><br/>
 <marquee> The more that you read, the more things you will know...! Leadership and learning are indispensable to each other. </marquee>
 <br><br>
    <div class="container"> 
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
                <img src="https://images.hdqwalls.com/download/dark-apple-mac-pro-4k-04-2880x1800.jpg" alt="Chicago" style="width:900px; padding-left:200px; height: 300px";>
                 <div class="carousel-caption">
        <h1><b>"An investment in knowledge pays the best interest"</b></h1>
        <p> <b> – Benjamin Franklin </b><br/><br/> </p>
      </div>
      </div>

      <div class="item">
        <img src="https://images.hdqwalls.com/download/dark-apple-mac-pro-4k-04-2880x1800.jpg" alt="Chicago" style="width:900px; padding-left:200px; height: 300px";>
                 <div class="carousel-caption">
        <h1><b>"The highest result of education is tolerance”</b></h1>
        <p> <b>– Hellen Keller </b><br/><br/></p>
      </div>
      </div>
    
      <div class="item">
        <img src="https://images.hdqwalls.com/download/dark-apple-mac-pro-4k-04-2880x1800.jpg" alt="ARITHEMATIC" style="width:900px; padding-left:200px; height: 300px;">
         <div class="carousel-caption">
        <h1><b>"Education is the passport to the future, for tomorrow belongs to those who prepare for it today".</b></h1>
        <p><b> -PKU </b><br/><br/></p>
      </div>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<br><br>

<!-----column part starting------>
<div class="container">
  <h1>High School</h1>
  <div class="row">
    <div class="col-sm-3" >
      <br>
      <figure>
        <a href="arithematic10th.php"><img src="http://images.unsplash.com/photo-1585314062604-1a357de8b000?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=1080&fit=max" style="width:100%;"></a>
        <div class="centered">
          <h1>Grade 8</h1>
        </div><br><br>
      </figure>
    </div>
    <div class="col-sm-3">
      <br>
       <a href="algebra10th.php"><img src="http://images.unsplash.com/photo-1585314062604-1a357de8b000?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=1080&fit=max" style="width:100%;"></a>
        <div class="centered"><h1>Grade 9</h1></div>
        <br><br>
    </div>
    <div class="col-sm-3">
      <br>
       <a href="geometry10th.php"><img src="http://images.unsplash.com/photo-1585314062604-1a357de8b000?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=1080&fit=max" style="width:100%;"></a>
        <div class="centered"><h1>Grade 10</h1></div><br><br>
   </div>
  </div>
</div>
<!------------end of container 1------------>
<div class="container">
  <h1>Senior secondary</h1>
  <div class="row">
    <div class="col-sm-3" >
      <br>
      <figure>
        <a href="a.php"><img src="http://images.unsplash.com/photo-1585314062604-1a357de8b000?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=1080&fit=max" style="width:100%;"></a>
        <div class="centered">
          <h1>A Level</h1>
        </div>
        <br><br>
      </figure>
    </div>
    <div class="col-sm-3">
      <br>
      <figure>
        <a href="a1.php"><img src="http://images.unsplash.com/photo-1585314062604-1a357de8b000?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=1080&fit=max" style="width:100%;"></a>
        <div class="centered">
           <h1>A+ Level</h1></div>
        <br><br>
      </figure>
    </div>
    <div class="col-sm-3">
      <br>
      <figure>
        <a href="cambridge.php"><img src="http://images.unsplash.com/photo-1585314062604-1a357de8b000?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=1080&fit=max" style="width:100%;"></a>
        <div class="centered">
           <h1>Cambridge</h1></div>
         <br><br>
      </figure>
    </div>
    <div class="col-sm-3">
      <br>
      <figure>
        <a href="ipc2.php"><img src="http://images.unsplash.com/photo-1585314062604-1a357de8b000?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=1080&fit=max" style="width:100%;"></a>
        <div class="centered">
           <h1>IPC-1</h1></div>
         <br><br>
      </figure>
    </div>
    <div class="col-sm-3">
      <br>
      <figure>
        <a href="ipc2.php"><img src="http://images.unsplash.com/photo-1585314062604-1a357de8b000?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=1080&fit=max" style="width:100%;"></a>
        <div class="centered">
           <h1>IPC-2</h1></div>
         <br><br>
      </figure>
    </div>
  </div>
</div>
<!------------end of container 2------------>
<div class="container">
  <h1>Under-Grad</h1>
  <div class="row">
    <div class="col-sm-3" >
      <br>
      <figure>
        <a href="cse.php"><img src="http://images.unsplash.com/photo-1585314062604-1a357de8b000?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=1080&fit=max" style="width:100%;"></a>
        <div class="centered">
          <h1>CSE</h1>
        </div>
        <br><br>
      </figure>
    </div>
    <div class="col-sm-3">
      <br>
      <figure>
        <a href="it.php"><img src="http://images.unsplash.com/photo-1585314062604-1a357de8b000?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=1080&fit=max" style="width:100%;"></a>
        <div class="centered">
           <h1>IT</h1></div>
        <br><br>
      </figure>
    </div>
    <div class="col-sm-3">
      <br>
      <figure>
        <a href="ece.php"><img src="http://images.unsplash.com/photo-1585314062604-1a357de8b000?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=1080&fit=max" style="width:100%;"></a>
        <div class="centered">
           <h1>ECE</h1></div>
         <br><br>
      </figure>
    </div>
  </div>
</div>
<!------------end of container 3------------>
<div class="container">
  <h1>Post-Grad</h1>
  <div class="row">
    <div class="col-sm-3" >
      <br>
      <figure>
        <a href="mtech.php"><img src="http://images.unsplash.com/photo-1585314062604-1a357de8b000?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=1080&fit=max" style="width:100%;"></a>
        <div class="centered">
          <h1>Masters (M tech)</h1>
        </div>
        <br><br>
      </figure>
    </div>
    <div class="col-sm-3">
      <br>
      <figure>
        <a href="mba.php"><img src="http://images.unsplash.com/photo-1585314062604-1a357de8b000?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=1080&fit=max" style="width:100%;"></a>
        <div class="centered">
           <h1>MBA</h1></div>
        <br><br>
      </figure>
    </div>
    <div class="col-sm-3">
      <br>
      <figure>
        <a href="spec.php"><img src="http://images.unsplash.com/photo-1585314062604-1a357de8b000?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=1080&fit=max" style="width:100%;"></a>
        <div class="centered">
           <h1>Specialization</h1></div>
         <br><br>
      </figure>
    </div>
  </div>
</div>
<!------------end of container 4------------>
<br/><br/>
</body>
     <footer class="container-fluid text-center">
        <p> Follow on..</p>
        <a class="active" href="https://www.instagram.com/im_priyam.upadhyay/" target="blank"><i class="fa fa-fw fa-instagram"></i></a>
        <a class="active" href="https://www.facebook.com/priyam.upadhyay.58/" target="blank"><i class="fa fa-fw fa-facebook"></i></a>
        <a class="active" href="https://twitter.com/Priyamupadhya17" target="blank"><i class="fa fa-fw fa-twitter"></i></a>
        <a class="active" href="https://www.linkedin.com/in/priyam-upadhyay/" target="blank"><i class="fa fa-fw fa-linkedin"></i></a><br>
        <a class="active" href="https://www.facebook.com/im_priyamupadhyay-112367577147965" target="blank">Facebook Page<i class="fa fa-fw fa-facebook"></i></a>
        <p> For Furthur assistance contact <span>9618834612</span> <br> e-mail: priyamupadhyay17@gmail.com</p>
    </footer>
<!-- end of footer -->

<script type = "text/javascript" >
function preventBack() { window.history.forward(); }
setTimeout("preventBack()", 0);
window.onunload = function () { null };
</script>

</html>