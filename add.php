<?php include('header.php');?>
<?php include('post.php');?>
<?php
    $post = new Post($db);
    // echo $post->addPost();
    if(isset($_POST['btnSubmit'])){
        if(!empty($_POST['title']) && !empty($_POST['description'])){
            $title = $_POST['title'];
            $description = $_POST['description'];
            $record = $post->addPost($title,$description);
            if($record==True){
                echo"<div class='text-center alert alert-success>Post added!</div>'";
            }
        }
        else{
            echo"<div class='text-center alert alert-danger'>Please, dont leave input sections empty!</div>";
        }   
    }
?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add post</div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea id="editor" cols="10" name="description" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="btnSubmit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
<style>
    .card{
        margin-top:5%;
    }
</style>
