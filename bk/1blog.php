<?php

include 'includes/db.php';
include('inc/header.php');

?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   <main id="main-content" class="kg-content" aria-label="Main Content">

<div class="l-main__wrapper">
  <div class="l-main">
    <div id="block-bean-homepage-background-video" class="block block-bean kg-hero__about">
      <div class="kg-hero__about__content">
        <h1 class="kg-hero__about__title">Blogs</h1>
      </div>
    </div>

    
        

    <br>
    
    <a href="insert.php" role="button" class="btn btn-primary pull-right">Post Blog</a>
    <br>
    <br>
    <table class="table table-hover table-striped">
     <!--   <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Batch</th>
            <th>Email</th>
            <th>Image</th>
            <th>Action</th>
        </tr> -->
<?php  		            
		
$query = "SELECT * FROM student ORDER BY id DESC ";

$result = mysqli_query($conn,$query);

if(mysqli_num_rows($result) > 0){
    
    while($row = mysqli_fetch_array($result)){
        
        $id    = $row['id'];
        $name  = $row['name'];
        $email = $row['email'];
        $batch = $row['batch'];
        $image = $row['image'];

?>
        <style>.table-striped tbody tr {
    display: flex;
    flex-direction: column;
    width: 100%;
}</style>
        <tr>
          <!--  <td><?=$id; ?></td> -->
          <td>
               <img src= "<?= "https://www.webappsolution.org/images/".$image?>" alt="<?= $name ?>" class="thumbnail" width="100px" height="75px">
            </td>
            <td><?=$name; ?></td>
            <!--<td><?=$email; ?></td>-->
            <td><?=$batch; ?></td>
            
            <td class="update-blog"><a href="update.php?update=<?php echo $id ?>" class="btn btn-success btn-sm" role="button">Update</a>
            <a href="index.php?delete=<?php echo $id ?>" class="btn btn-danger btn-sm" id="delete" role="button">Delete</a></td>
            <td><div class='social-share-btns-container'>
  <div class='social-share-btns'>
    <a class='share-btn share-btn-twitter' href='https://twitter.com/intent/tweet?text=https://www.webappsolution.org' rel='nofollow' target='_blank'>
 <i class="fa fa-twitter-square"></i>
       Tweet
    </a>
    <a class='share-btn share-btn-facebook' href='https://www.facebook.com/sharer/sharer.php?u=https://www.webappsolution.org' rel='nofollow' target='_blank'>
 <i class="fa fa-facebook-square"></i>
       Share
    </a>
    <a class='share-btn share-btn-linkedin' href='https://www.linkedin.com/cws/share?url=https://www.webappsolution.org' rel='nofollow' target='_blank'>
      <i class="fa fa-linkedin-square"></i>
      Share
    </a>
    <a class='share-btn share-btn-reddit' href='http://www.reddit.com/submit?url=https://www.webappsolution.org&amp;title=Web+App+Services' rel='nofollow' target='_blank'>
      <i class="fa fa-reddit-square"></i>
      Share
    </a>
    <a class='share-btn share-btn-mail' href='mailto:?subject=Web App Services&amp;amp;body=https://www.webappsolution.org' rel='nofollow' target='_blank' title='via email'>
    <i class="fa fa-envelope"></i>
      Share
    </a>
  </div>

</div>
</td>
        </tr>
<?php
    }
}  
        
    if(isset($_GET['delete'])){
        
        $id = $_GET['delete'];

        $image = "SELECT * FROM student WHERE id = $id";
        
        $query1 = mysqli_query($conn,$image);

        while($row = mysqli_fetch_array($query1))
        {
             $img= $row['image'];
        }

            unlink("https://www.webappsolution.org/images/".$img);

        $query = "DELETE FROM student WHERE id = $id";
        
        $result = mysqli_query($conn,$query);
        
        if($result){

            header('location:blog.php');
            
        }
    }    
         
?>

    </table>
    </div>
           
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
    $(document).ready(function(){

        $('#delete').click(function(){
            if(!confirm("do you want to delete?"))
            {
                return false;
            }
            else
            {
                return true;
            }
        });


    });
</script>
<style>
td.update-blog {
    display: none;
}
.social-share-btns-container {
  overflow: hidden;
  font-size: 0;
  width: 100%;

}

.social-share-btns {
  display: inline-block;
  overflow: hidden;
}
.social-share-btns .share-btn {
  float: left;
  margin: 0 5px;
  padding: 8px 16px;
  border-radius: 3px;
  color: #fff;
  font-size: 14px;
  line-height: 18px;
  vertical-align: middle;
  -moz-transition: background 0.2s ease-in-out;
  -o-transition: background 0.2s ease-in-out;
  -webkit-transition: background 0.2s ease-in-out;
  transition: background 0.2s ease-in-out;
}
.social-share-btns .share-btn i {
  margin-right: 5px;
  display: inline-block;
  font-size: 18px;
  vertical-align: middle;
}

.share-btn {
  background-color: #95a5a6;
}
.share-btn:hover {
  background-color: #798d8f;
}

.share-btn-twitter {
  background-color: #00aced;
}
.share-btn-twitter:hover {
  background-color: #0087ba;
}

.share-btn-facebook {
  background-color: #3b5998;
}
.share-btn-facebook:hover {
  background-color: #2d4373;
}

.share-btn-linkedin {
  background-color: #007bb6;
}
.share-btn-linkedin:hover {
  background-color: #005983;
}

.share-btn-reddit {
  background-color: #ed001c;
}
.share-btn-reddit:hover {
  background-color: #ba0016;
}

.share-btn-mail {
  background-color: #f1c40f;
}
.share-btn-mail:hover {
  background-color: #dab10d;
}

.credits {
  font-family: -apple-system, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
  position: fixed;
  left: 0;
  bottom: 0;
  background-color: rgba(0, 0, 0, 0.7);
  width: 100%;
  z-index: 1111;
  letter-spacing: 0.04em;
  font-size: 10px;
  text-transform: uppercase;
}
.credits a {
  color: rgba(255, 255, 255, 0.5);
  display: inline-block;
  padding: 4px 4px;
  text-decoration: none;
}
.credits a:hover {
  color: #fff;
}

</style>

<?php include('inc/small_footer.php');?>