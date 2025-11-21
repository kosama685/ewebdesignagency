<?php
include 'includes/db.php';
include 'inc/header.php';

if(isset($_POST['insert']))
{
    $name         = clean($_POST['name']);
    $batch        = clean($_POST['batch']);
    $email        = clean($_POST['email']);
    $image_name   = $_FILES['image']['name'];
    $image        = $_FILES['image']['tmp_name'];

    $location     = "https://www.webappsolution.org/images/".$image_name;


    move_uploaded_file($image, $location);


    $query = "INSERT INTO student (name,batch,email,image) VALUES ('".escape($name)."', '".escape($batch)."','".escape($email)."' , '$image_name')";

    $result = mysqli_query($conn,$query);

    if($result == true)
    {
        header("Location:blog.php");
    }
    else
    {
        die('error' . mysqli_error($conn));
    }

}


?>
<div class="container">

  <script src="https://cdn.tiny.cloud/1/e7v1puz3ec3ioepwtfrunbyv1ydkzorocmmzyg0oz9vfe2kx/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

 
  
    <div class="jumbotron text-center">
        <h2>Blogs</h2>
    </div>
    <br>
<div class="row">
<div class="col-md-12">
    
<form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="name">Title:</label>
        <input type="text" name="name" class="form-control" placeholder="Enter Name">
    </div>
    <div class="form-group">
        <label for="name">Discription:</label>
        <textarea type="text" name="batch" class="form-control" placeholder="Enter batch"></textarea>
    </div>
    <div class="form-group">
        <label for="name">Email:</label>
        <input type="text" name="email" class="form-control" placeholder="Enter email">
    </div>
    <div class="form-group">
        <label for="name">Image:</label>
        <input type="file" class="btn btn-primary" name="image" class="form-control" placeholder="Enter email">
    </div>
    <div class="form-group">
        <input type="submit" class="btn btn-success" value="Insert data" name="insert">
    </div>
</form>
</div>
</div>

</div>
<script>
    tinymce.init({
      selector: 'textarea',
      plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage tinycomments tableofcontents footnotes mergetags autocorrect typography inlinecss',
      toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Author name',
      mergetags_list: [
        { value: 'First.Name', title: 'First Name' },
        { value: 'Email', title: 'Email' },
      ],
    });
  </script>
  <?php
  include 'inc/small_footer.php';
  ?>
