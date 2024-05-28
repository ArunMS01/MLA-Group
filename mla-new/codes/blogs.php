<?php
function getPosts(){
    global $conn;
    $query = "SELECT * FROM article WHERE status = '0' ORDER BY created_at DESC";
    $result = mysqli_query($conn,$query);
    if(mysqli_num_rows($result) > 0){
    return $result;
}
else{
    return false;
}
}

function getPost() {
    global $conn;
    $query = "SELECT * FROM article";
    $result = mysqli_query($conn, $query);

    $posts = array(); // Initialize an empty array to store posts

    while ($row = mysqli_fetch_assoc($result)) {
        $posts[] = $row; // Add each row to the posts array
    }

    return $posts; // Return the array of posts
}




function getpostnumber($tagid){
    global $conn;
   $sql = "SELECT * FROM product_tags WHERE tag_id = '$tagid'";
    $result = mysqli_query($conn,$sql);
    // print_r($result);
    if(mysqli_num_rows($result) > 0){
      $row_count =  mysqli_num_rows($result);
    return $row_count;
}
else{
    return false;
}
}

function getCategories(){
    global $conn;
    $query = "SELECT * FROM category ORDER BY ID DESC";
    $result = mysqli_query($conn,$query);
    if(mysqli_num_rows($result) > 0){
    return $result;
}
else{
    return false;
}
}

function getSinglepost($url){
    global $conn;
    $query = "SELECT * FROM article WHERE slug ='$url' AND status = '0'";  
    $result = mysqli_query($conn,$query);
    if(mysqli_num_rows($result) > 0){
        return $result;
    }
    else{
        return false;
    }
}

function getCategorypost($url){
    global $conn;
    $query = "SELECT * FROM category WHERE slug = '$url'";
    $result = mysqli_query($conn,$query);
    foreach($result as $row){
        $cat_id = $row['id'];  
    }

    $query_post = "SELECT * FROM article WHERE category ='$cat_id'";  
    $getposts = mysqli_query($conn,$query_post);
    if(mysqli_num_rows($getposts) > 0){
        return $getposts;
    }
    else{
        return false;
    }
}


function getAllPosts(){
    global $conn;
    $sql = "SELECT * FROM article ORDER BY ID DESC";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result) > 0){
        return $result;
    }
    else{
        return false;
    }
}

function getTags($postid){
    global $conn;
    $gettags ="SELECT * FROM `product_tags` WHERE post_id = '$postid'";
    $result = mysqli_query($conn,$gettags);
    $gettagid = array();
    if($result){
        foreach($result as $tags){
            $gettagid[] = $tags['tag_id'];
        }
    }
    $gettagarray = array();
    $taglength = count($gettagid);
    for($x=0 ; $x < $taglength; $x++){
     $gettagnames = "SELECT * FROM `tags` WHERE id ='$gettagid[$x]'";
        $getall_tags = mysqli_query($conn,$gettagnames);
        if(mysqli_num_rows($getall_tags) > 0){
            foreach($getall_tags as $tagsall){
                $gettagarray[] = $tagsall;
            }
          
        }
    }
    return $gettagarray;
}

function getTagposts($url){
    global $conn;
    
    $gettagid = "SELECT id FROM `tags` WHERE url = '$url'";
    $result_tag = mysqli_query($conn, $gettagid);
    if($result_tag){
        $all_tag_posts = array();
        foreach($result_tag as $tag){
            $tagid = $tag['id'];
            $getposts = "SELECT * FROM `product_tags` WHERE tag_id = '$tagid'";
            $result_tagsposts = mysqli_query($conn,  $getposts);
            if($result_tagsposts){
                foreach($result_tagsposts as $posts_id){
                        $postid = $posts_id['post_id'];
                        $sql_post = "SELECT * FROM article WHERE id = '$postid'";
                        $result_tagsposts = mysqli_query($conn,  $sql_post);
                        if($result_tagsposts){
                            foreach($result_tagsposts as $tagspost){
                                $all_tag_posts[] = $tagspost;
                            }
                        }
                }
            }
        }
        return $all_tag_posts;
    }
}

function getPostbysearch($search_term){
    global $conn;
   $sql = "SELECT * FROM article WHERE title LIKE '%$search_term%'";
    $result = mysqli_query($conn, $sql);
    if($result){
   
        return $result;
    }
    else{
       
        return false;
    }
}

function getcomments($postid){
    global $conn;
    $sql = "SELECT * FROM `comments` WHERE post_id = '$postid' WHERE status = 0";
    $result = mysqli_query($conn, $sql);
    if($result){
   
        return $result;
    }
    else{
       
        return false;
    }
}

function tagnamebyurl($url){
    global $conn;
    $sql = "SELECT name FROM tags WHERE url = '$url' LIMIT 1";
    $result = mysqli_query($conn, $sql);
    if($result){
      $tagname =  mysqli_fetch_assoc($result);
      return $tagname['name'];
    }
    else{
        return false;
    }
    
}

function getcatnamebyurl($url){
    global $conn;
    $sql = "SELECT cat_name FROM category WHERE slug = '$url' LIMIT 1";
    $result = mysqli_query($conn, $sql);
    if($result){
      $catname =  mysqli_fetch_assoc($result);
      return $catname['cat_name'];
    }
    else{
        return false;
    }
    
}
?>
