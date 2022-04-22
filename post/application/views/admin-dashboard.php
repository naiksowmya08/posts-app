
<html>
    <head>
        <title>Admin Login</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
h2{
    text-align: center;
    font-size: 18px;
    text-transform: uppercase;
    letter-spacing: 1px;
    color: #000000;
    padding: 30px 0;
    background-color: white;
}

/* Table Styles */

.table-wrapper{
    margin: 10px 70px 70px;
    box-shadow: 0px 35px 50px rgba( 0, 0, 0, 0.2 );
}

.fl-table {
    border-radius: 5px;
    font-size: 12px;
    font-weight: normal;
    border: none;
    border-collapse: collapse;
    width: 100%;
    max-width: 100%;
    white-space: nowrap;
    background-color: white;
}

.fl-table td, .fl-table th {
    text-align: center;
    padding: 8px;
}

.fl-table td {
    border-right: 1px solid #f8f8f8;
    font-size: 15px;
}

.fl-table thead th {
    color: #ffffff;
    background: #4FC3A1;
    font-size: 15px;
}


.fl-table thead th:nth-child(odd) {
    color: #ffffff;
    background: #324960;
}

.fl-table tr:nth-child(even) {
    background: #F8F8F8;
}

/* Responsive */

@media (max-width: 767px) {
    .fl-table {
        display: block;
        width: 100%;
    }
    .table-wrapper:before{
        content: "Scroll horizontally >";
        display: block;
        text-align: right;
        font-size: 11px;
        color: white;
        padding: 0 0 10px;
    }
    .fl-table thead, .fl-table tbody, .fl-table thead th {
        display: block;
    }
    .fl-table thead th:last-child{
        border-bottom: none;
    }
    .fl-table thead {
        float: left;
    }
    .fl-table tbody {
        width: auto;
        position: relative;
        overflow-x: auto;
    }
    .fl-table td, .fl-table th {
        padding: 20px .625em .625em .625em;
        height: 60px;
        vertical-align: middle;
        box-sizing: border-box;
        overflow-x: hidden;
        overflow-y: auto;
        width: 120px;
        font-size: 13px;
        text-overflow: ellipsis;
    }
    .fl-table thead th {
        text-align: left;
        border-bottom: 1px solid #f7f7f9;
    }
    .fl-table tbody tr {
        display: table-cell;
    }
    .fl-table tbody tr:nth-child(odd) {
        background: none;
    }
    .fl-table tr:nth-child(even) {
        background: transparent;
    }
    .fl-table tr td:nth-child(odd) {
        background: #F8F8F8;
        border-right: 1px solid #E6E4E4;
    }
    .fl-table tr td:nth-child(even) {
        border-right: 1px solid #E6E4E4;
    }
    .fl-table tbody td {
        display: block;
        text-align: center;
    }
  }
  .alert {
  padding: 20px;
  background-color: #04AA6D;;
  color: white;
  text-align: center;
    font-size: 18px;
}
}
     	</style>
    </head>
<body>
<h2>Posts</h2>
 <?php
    $message = $this->session->flashdata('msg');
    if (isset($message)) {
        echo '<div class="alert">' . $message . '</div>';
         $this->session->unset_userdata('msg');
    }

    ?>
<div class="table-wrapper">
  <div>
    <a href="<?php echo base_url().'admin/logout/';?>"><input class="btn btn-primary" type="submit" value="Logout" style="float:right;margin-bottom: 15px;color:#ffffff;background-color: #324960;"></a>
    <a href="<?php echo base_url().'admin/editPost/';?>"><input class="btn btn-info" type="submit" value="Add Post" style="float:right;margin-bottom: 15px;color:#ffffff;background-color: #324960;"></a>

  </div>
  </div>
<div class="table-wrapper">
  
    <table class="fl-table">
        <thead>
        <tr>
            <th>Title</th>
            <th>Description</th>
            <th>Author</th>
            <th>Date</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($viewData as $viewDatavalue) { ?>
          <tr>
            <td><?php echo $viewDatavalue->title;?></td>
            <td><?php echo substr($viewDatavalue->description,0,100).'...'?></td>
            <td><?php echo $viewDatavalue->author;?></td>
            <td><?php echo date('F j, Y',strtotime($viewDatavalue->created_date));?></td>
            <td><a href="<?php echo base_url().'admin/editPost/'.$viewDatavalue->post_id;?>"><i class="fa fa-edit" style="font-size: 25px;color: #282b64;"></i></a>
              <a href="<?php echo base_url().'admin/deletePost/'.$viewDatavalue->post_id;?>"><i class="fa fa-trash" style="font-size: 25px;margin-left:10px;color: #282b64;"></i></a>
            </td>
        </tr>
        <?php } ?>
        <tbody>
    </table>
</div>

</body>
</html>