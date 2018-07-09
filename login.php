<?php include('header.php') ?>


<div class="content-wrapper">
    <div class="row">
        <form class="form-vertical" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" name="username" placeholder="Enter your username" id="username">
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <label for="email"> Email </label>
                    <input type="email" class="form-control" name="email" placeholder="Enter your Email address" id="email">
                </div>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-success">
                    Login
                </button>
            </div>
        </form>
    </div>
</div>



<?php include('footer.php') ?>
