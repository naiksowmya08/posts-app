
<html>
    <head>
        <title>Admin Login</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"></script>

     	<style type="text/css">
body {
  font: 13px/20px "Lucida Grande", Tahoma, Verdana, sans-serif;
  color: #404040;
  background: #0ca3d2;
  background-image: url('<?php echo base_url();?>resource/image/bg.jpg');
  background-size: cover;
}
h1 {
  font-size: 20px;
  margin-top: 24px;
  margin-bottom: 24px;
}

img {
height: 60px;
}

h2{
    text-align: center;
    font-size: 18px;
    text-transform: uppercase;
    letter-spacing: 1px;
    color: #000000;
    padding: 30px 0;
    background-color: white;
}
.error{
  color: red;
    padding-left: 10px;
}

   label{
     font-size: 17px;
    }
 .form-group{
  margin-top:25px;
 }
 .info{
  color:green;
 }
     	</style>
    </head>
<body>
<h2><?php echo $pageTitle; ?> POST</h2>
<?php //var_dump($editData); ?>
   <div class="col-md-6 offset-md-3 mt-5" style="background-color: #ffffff;padding: 30px;">
        <form id="formPost" action="<?php echo base_url().'admin/update/'.$editData[0]->post_id;?>" method="POST" enctype="multipart/form-data">
          <div class="form-group">
            <label for="exampleInputName">Post Title</label>
            <input type="text" name="title" class="form-control" id="title" value="<?php echo $editData[0]->title;?>">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Post Text</label>
            <textarea name="description" id="description" class="form-control ckeditor" ><?php echo $editData[0]->description;?></textarea>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1" required="required">Author</label>
            <input type="text" name="author" class="form-control" id="author" value="<?php echo $editData[0]->author;?>">
          </div>
          <hr>
          <div class="form-group mt-3">
            <label class="mr-2">Upload Post Image:</label>
            <input type="file" name="image">
            <input type="hidden" name="hiddenValue" value="<?php echo $editData[0]->image;?>"><br>
            <?php if(!empty($editData[0]->image)){
              echo '<p class="info">Current File:'.$editData[0]->image.'</p>';
            }
            ?>
          </div>
          <hr>
          <input type="submit" name="submit" class="btn btn-primary">
          <a href="<?php echo base_url().'admin/dashboard/';?>"><input name="Back" value="Back" class="btn btn-info" style="width: 10%;"></a>
        </form>
    </div> 
    
<script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
<script type="text/javascript">
  (function ($) {
  $(document).ready(function () {
    CKEDITOR.replace($('.ckeditor').get(0), {
    });
  });
})(jQuery);
</script>
<script type="text/javascript">
  $(document).ready(function () {

    $('#formPost').validate({ // initialize the plugin
        rules: {
            title: {
                required: true,
            },
            description: {
                required: true,
            },
             author: {
                required: true,
            }
        }
    });

});
</script>
</body>
</html>