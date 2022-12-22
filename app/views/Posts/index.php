<?php include APPROOT . '/views/inc/header.php'; ?>
<div class="row">
    <div class="col-md-6 mb-5">
        <h1>Posts</h1>
    </div>
    <div class="col-md-6">
        <a href="<?php echo URLROOT; ?>/posts/add" class="btn btn-primary pull-right">add</a>
    </div>
</div>
<?php foreach($data['posts'] as $post) : ?>
    <div class="card card-body mb-3">
        <h4 class="card-title"><?php echo $post->title; ?></h4>
        <div class="bg-light p-2 mb-3">
            written by <?php echo $post->name ?> ON <?php echo $post->created_at ?>
        </div>
        <p class="card-text" ><?php echo $post->body; ?></p>
        <a class="btn btn-dark" href="<?php echo URLROOT; ?>/posts/show/<?php echo $post->IdPost;?>">Show More</a>
    </div>
    
<?php endforeach; ?>
<?php include APPROOT . '/views/inc/footer.php'; ?>