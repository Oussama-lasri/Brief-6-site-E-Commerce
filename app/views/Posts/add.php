<?php include APPROOT.'/views/inc/header.php'; ?>
    <a href="<?php echo URLROOT;?>/posts" class="btn btn-dark">Go back</a>
    <div class="col-md-6 mx-auto">
        <div class="card card-body bg-light mt-5 m-5">
            <h2>add a post</h2>
            <p>create a post</p>
            <form action="<?php echo URLROOT; ?>/posts/add" method="post">
                <div class="form-group">
                    <label for="title">title : <sup>*</sup></label>
                    <input type="text" name="title" class="form-control form-control-lg <?php echo (!empty($data['title_err'])) ? 'is-invalid' : '' ?>" value="<?php echo $data['title']; ?>">
                    <span class="invalid-feedback"><?php echo $data['title_err']; ?></span>

                    <label for="body">body : <sup>*</sup></label>
                    <textarea  name="body" class="form-control form-control-lg <?php echo (!empty($data['body_err'])) ? 'is-invalid' : '' ?>"><?php echo $data['body']; ?></textarea>
                    <span class="invalid-feedback"><?php echo $data['body_err']; ?></span>

                </div>
                <div class="row mt-3">
                    <div class="col">
                        <input type="submit" value="add" class="btn btn-success btn-block">
                    </div>
                </div>
            </form>
        </div>
    </div>

<?php include APPROOT.'/views/inc/footer.php'; ?>