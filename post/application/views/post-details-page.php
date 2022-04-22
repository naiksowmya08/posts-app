
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

#blog {
  padding: 5rem 2rem;
}

#blog .blog-box {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  width: 100%;
  position: relative;
  padding-bottom: 6rem;
}

#blog .blog-box .blog-image {
  width: 50%;
}

#blog .blog-box .blog-image img {
  width: 100%;
  -o-object-fit: cover;
  object-fit: cover;
}

#blog .blog-box h1 {
 position: absolute;
    top: -5.5rem;
    font-size: 5rem;
    font-weight: 500;
    color: #4cb0b0;
    background-color: white;
    border-radius: 10px;
    left: 36px;
    padding: 10px;
}

#blog .blog-details {
  width: 50%;
  padding: 0 1rem;
}

#blog .blog-details a {
  text-decoration: none;
  color: #046969;
  position: relative;
}

#blog .blog-details a::after {
  content: "";
  width: 3rem;
  height: 2px;
  position: absolute;
  top: 10px;
  right: -4rem;
}

#blog .blog-details a:hover {
  background-size: 100% 3px;
}


@media screen and (max-width: 992px) {
  #blog .blog-box {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
  }
  #blog .blog-box .blog-image {
    width: 100%;
    padding: 0;
  }
  #blog .blog-details {
    width: 100%;
    padding: 0;
  }
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
   <section id="blog" style="margin-top:150px;">
  <div class="blog-box">
    <div class="blog-image">
      <img src="<?php echo base_url().'resource/'.$psdata[0]->image;?>" alt="Blog">
    </div>
    <div class="blog-details">
      <h4><?php echo $psdata[0]->title;?></h4>
      <p><?php echo $psdata[0]->description;?></p>
      <a href="#">Author:<?php echo $psdata[0]->author;?> </a>
      <br>
      <a href="<?php echo base_url().'posts';?>"><input name="Back" value="Back" class="btn btn-info" style="width: 10%;margin-top:10px"></a>
    </div>
    <h1><?php echo date('F j, Y', strtotime($psdata[0]->created_date));?></h1>
  </div>
</section>
  </div>
  
</div>
</body>
</html>