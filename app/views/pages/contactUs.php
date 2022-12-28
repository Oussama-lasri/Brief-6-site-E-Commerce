<?php include APPROOT.'/views/inc/header.php'; ?>

<section id="ContactUs" style="padding-top:120px ;">
<div class="form-area">
    <div class="container">
        <div class="row single-form g-0">
            <div class="col-sm-12 col-lg-6">
                <div class="left">
                    <h2><span>Contact Us for</span></h2>
                </div>
            </div>
            <div class="col-sm-12 col-lg-6">
                <div class="right">
                    <i class="fa fa-caret-left"></i>
                </div>
                <form>
                          <div class="mb-3">
                            <label for="name" class="form-label">Your Name</label>
                            <input type="text" class="form-control" aria-describedby="emailHelp">
                          </div>
                          <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control"  aria-describedby="emailHelp">
                          </div>
                          <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Message</label>
                              <textarea type="password" class="form-control" id="exampleInputPassword1"></textarea>
                          </div>
                          <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
            </div>
        </div>
    </div>
</div>


</section>



<?php include APPROOT . '/views/inc/footer.php'; ?>