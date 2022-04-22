
<html>
    <head>
        <title>Post</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"></script>

     	<style type="text/css">
      body {
        font: 13px/20px "Lucida Grande", Tahoma, Verdana, sans-serif;
        color: #404040;
        background-image: url('<?php echo base_url();?>resource/image/bg3.jpg');
        background-size: cover;
      }

img {
  max-width: 100%;
  min-height: 100%;
  object-fit: cover;
  display: block;
  clip-path: polygon(-4px -4px, 100.4% -3px, 91.2% 102.57%, -0.8% 102.97%);
}

.card {
  grid-template-columns: repeat(2, 1fr);
  grid-template-rows: auto;
  width: min(90%, 500px);
  box-shadow: 0 20px 34px hsl(20deg 3% 1% / 29%);
  background-color: #e6e5e5;
  overflow: hidden;
  margin-bottom: 85px;
}

.card-details {
  position: relative;
  padding: 1.5rem;
}
.navbar {
    border: 0;
    z-index: 9999;
    letter-spacing: 4px;

}
.logo {
    display: block;
    height: auto;
    width: 52px;
    padding-top: 5px;
    margin-right: 15px;
}

.navbar-brand>img {
  height: 100%;
  padding: 15px; /* firefox bug fix */
  width: auto;
}
.navbar .nav > li > a {
  line-height: 50px;
}

.navbar-header h1 {
    letter-spacing: 1px;
    color: black !important;
    font-family: 'Lobster Two', cursive;
}

.navbar li a, .navbar {
    color: black !important;
    font-size: 12px;
    transition: all 0.6s 0s;
}

.navbar-toggle {
    background-color: transparent !important;
    border: 0;
}

.navbar-nav li a:hover, .navbar-nav li.active a {
    color: red !important;
}
a:hover{
  text-decoration: none;
  color:#000000;
}


     	</style>
    </head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="collapse navbar-collapse navbar-right" id="myNavbar">
            <ul class="nav navbar-nav" style="display: block;float:right;">
                <li><a href="#intro">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#contact">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>
    <div class="login">

  <div class="container" style="margin-top:150px">
    <div class="row">
      <?php foreach ($psdata as $psdatavalue) {
      ?>
     
      <div class="col-md-4 col-sm-12">
         <a href="<?php echo base_url().'posts/page/'.$psdatavalue->post_id;?>" target="_blank">
        <div class="card">
        <img src="<?php echo base_url().'resource/'.$psdatavalue->image;?>" alt='dog'>
        <div class="card-details" style="color:#000000">
          <h2><?php echo $psdatavalue->title;?></h2>
          <p>Author: <?php echo $psdatavalue->author;?></p>
          <p>Posted On: <?php echo date('F j, Y',strtotime($psdatavalue->created_date));?></p>
          <p style="color:blue;">View More</p>
        </div>
      </a>
      </div>
      </div>
        <?php 
      }
      ?>
      </div>
    </div>
  </div>
  
</div>
</body>
</html>