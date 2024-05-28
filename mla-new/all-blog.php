<?php include('header.php'); ?>



<?php
include('database.php');
include_once('./codes/blogs.php');
?>
<style>
    .hidden{
    display: none;
}
.dz-media, .dz-post-media {
   
    height: 30rem;
    
}

</style>
<div class="page-content">
		<!--banner-->
		<div class="dz-bnr-inr style-1" style="background-image:url(images/background/bg-shape.jpg);">
			<div class="container">
				<div class="dz-bnr-inr-entry">
					<h1>Blog Light 3 Column</h1>
					<nav aria-label="breadcrumb" class="breadcrumb-row">
						<ul class="breadcrumb">
							<li class="breadcrumb-item"><a href="index.html"> Home</a></li>
							<li class="breadcrumb-item">Blog Light 3 Column</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
		<?php
$getallcats = getCategories();

if ($getallcats) {
    foreach ($getallcats as $categories) {
        // Check if the current category URL matches the requested URL
        if (isset($_GET['url']) && $_GET['url'] === $categories['slug']) {
            $category = $categories['cat_name']; // Set the current category name
            break; // Exit the loop since we found the matching category
        }
    }
}
?>
        <section class="content-inner-1 z-index-unset">
    <div class="container">
        <div class="row">
        <?php
$getAllPosts = getAllPosts(); // Fetch all posts

if (!$getAllPosts) {
    echo("<p>No posts found.</p>");
} else {
    $postCounter = 0;
    foreach ($getAllPosts as $post) { // Iterate through all posts
        $created_at = strtotime($post["created_at"]);
        $monthAbbreviation = date("M", $created_at);
        $day = date("j", $created_at);
        $year = date("Y", $created_at); // Get the year        
        $article = substr(strip_tags($post['article']), 0, 130) . '...';
        $truncated_title = (strlen($post['title']) > 45) ? substr($post['title'], 0, 60) . '...' : $post['title'];
?>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp <?php echo ($postCounter >= 5) ? 'hidden' : ''; ?>" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                        <div class="dz-card style-2">
                            <div class="dz-media">
                                <img src="assets/images/blog/<?php echo $post['featuredimage'] ?>" alt="/">
                            </div>
                            <div class="dz-info">
                                <div class="dz-meta">
                                    <ul>
                                        <li class="post-date"><?php echo "$day $monthAbbreviation, $year"; ?></li>
                                        <li><a href="javascript:void(0);">lifestyle</a></li>
                                        <li><a href="javascript:void(0);">Wooden</a></li>
                                    </ul>
                                </div>
                                <h4 class="dz-title mb-0">
                                    <a href="blog-post/<?php echo $post['slug'] ?>"><?php echo $truncated_title ?></a>
                                </h4>
                                <div class="dlab-readmore">
                                
                                    <div class="read-more-container">
                                        <!-- Read More Content -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
        $postCounter++;
        $last_postid = $post['id'];
    }
}
?>
        </div>

        <div class="text-center mt-sm-4 mt-2">
            <button id="load-more-category-button" class="btn btn-secondary">
                <svg class="me-2" width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12.248 3.23438V6.23438" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path opacity="0.9" d="M18.6116 4.87061L16.4902 6.99193" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path opacity="0.8" d="M21.248 12.2344H18.248" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path opacity="0.7" d="M18.6116 18.5984L16.4902 16.4771" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path opacity="0.6" d="M12.248 21.2344V18.2344" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path opacity="0.5" d="M5.88379 18.5984L8.00511 16.4771" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path opacity="0.4" d="M3.24805 12.2344H6.24805" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path opacity="0.3" d="M5.88379 5.87061L8.00511 7.99193" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>Load More
            </button>
        </div>
    </div>
</section>

<script>
    var offset = 5; // Start loading additional category posts from the 6th post
    var postsPerPage = 5; // Number of category posts to load per click

    function loadMoreCategoryPosts() {
        var loadCategoryButton = document.getElementById("load-more-category-button");
        loadCategoryButton.disabled = true; // Disable the button while loading

        var hiddenCategoryPosts = document.querySelectorAll('.wow.fadeInUp.hidden');
        var categoryPostsToDisplay = Array.prototype.slice.call(hiddenCategoryPosts, 0, postsPerPage);

        // Display the next batch of category posts
        categoryPostsToDisplay.forEach(function(categoryPost) {
            categoryPost.classList.remove('hidden');
        });

        // Re-enable the button if there are more category posts to load
        if (hiddenCategoryPosts.length - categoryPostsToDisplay.length === 0) {
            loadCategoryButton.innerHTML = "No More Posts";
            loadCategoryButton.disabled = true;
        } else {
            loadCategoryButton.innerHTML = "Load More";
            loadCategoryButton.disabled = false;
        }
    }

    // Attach the loadMoreCategoryPosts function to the button click event
    document.getElementById("load-more-category-button").addEventListener("click", loadMoreCategoryPosts);
</script>
		
		
	</div>
<? include('footer.php'); ?>