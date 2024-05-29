<?php 

include('database.php');
include_once('./codes/blogs.php');
if (isset($_GET['url'])) {
  $url = mysqli_real_escape_string($conn, $_GET['url']);
}
$meta_title = '';
$meta_desc = '';
$getsinglepost = getSinglepost($url);
if ($getsinglepost) {
  foreach ($getsinglepost as $post) {
    $meta_desc = $post['meta_desc'];
    $meta_title = $post['meta_title'];
    $posttitle = $post['title'];
    $feature_img = $post['featuredimage'];
    $created_at = $post['created_at'];
  }
  $posturl = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
}
if ($meta_title) {
  $title = $meta_title;
} else {
  $title = "Post";
}


include('header.php') 

?> 

<div class="page-content">
<?php
  if (isset($_GET['url'])) {
    $url = mysqli_real_escape_string($conn, $_GET['url']);
  }
  $getsinglepost = getSinglepost($url);
  if ($getsinglepost) {
  ?>

    <?php

    foreach ($getsinglepost as $post) {
      $postid = $post['id'];
      $created_at = strtotime($post["created_at"]);
      $monthAbbreviation = date("M", $created_at);
      $day = date("j", $created_at);
      $year = date("Y", $created_at); // Get year
    ?>
    <section class="content-inner-1 bg-img-fix">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-12 col-lg-12">
                    <!-- blog start -->
                    <div class="dz-blog blog-single ">
                        <h1 class="dz-title"><?php echo $post['title']; ?></h1>
                        <div class="dz-meta">
                            <ul>
                                <li class="post-date"><?php echo date('d M Y', strtotime($post['created_at'])); ?></li>
                               
                                <!-- Other meta information -->
                            </ul>
                        </div>
                        <div class="dz-media">
                            <img src="./assets/images/blog/<?php echo $post['featuredimage'] ?>" alt="/">
                        </div>
                        <div class="dz-info">
                            <div class="dz-post-text">
                                <p><?php echo $post['article']; ?></p>
                                <!-- Other post content -->
                            </div>
                            <!-- Share buttons, tags, author box, etc. -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
    }

    ?>

  <?php
  } else {

  ?>
    <div class="container max-width-2 padding-blog" style="background-color:#f4f5ef;">
      <div class="row-single max-width-1 m-auto">
        <div class="col-lg-12">
          <h2>Not Found</h2>
        </div>
      </div>
    </div>


  <?php
  }
  ?>

		
		<!-- Icon Box Start -->

	<!-- Icon Box End -->
	</div>

<?php include('footer.php')   ?> 