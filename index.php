<?php 
    include('header.php');
    include('post.php');
?>
<?php
    $post = new Post($db);
?>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <?php foreach($post->getPost() as $post){ ?>
                <div class="media">
                    <div class="media-left media-top">
                        <img src="images/blog1.jpg" class="media-object" id="index-img">
                        <p>
                            Author: Admin<br>
                            Created: 2019-01-22
                        </p>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading"><a href=""><?php echo $post['title'] ?></a></h4>
                        <?php echo htmlspecialchars_decode($post['description']); ?>
                    </div>
                </div>
            <?php }?>
        </div>
    </div>
</div>