



<nav class="navbar navbar-default" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">OnlineRental</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
            <li class="active"><a href="welcome/index.php" title="HomePage" target="_self"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>&nbspHome</a></li>

        </ul>

        <div class="col-sm-3 col-md-4" style="margin-top: 10px;">
            <?php echo form_open("search_post/search_result"); ?>
            <form class="navbar-form" role="search">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search location,price" name="search_post" id="search_post">
                    <div class="input-group-btn">
                        <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                    </div>
                </div>
            </form>
            <?php form_close(); ?>
        </div>
        <ul class="nav navbar-nav navbar-right">


            <li><?php echo anchor('User_controller/logout', 'Logout'); ?></li>
        </ul>
    </div><!-- /.navbar-collapse -->
</nav>
