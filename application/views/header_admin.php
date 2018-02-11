<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-3"> 
                <span class="sr-only">Toggle navigation</span>
                 <span class="icon-bar"></span>
                 <span class="icon-bar"></span>
                 <span class="icon-bar"></span>
            </button> 

            <a class="navbar-brand" href="<?php echo site_url()?>"><b class="glyphicon glyphicon-log-out"></b> 
                <?php echo strtoupper(TITLE_APP); ?> Blog
            </a>

        </div>
        <div class="collapse navbar-collapse" id="navbar-collapse-3">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="<?php echo site_url()?>?logout">Logout</a>
                </li>
            </ul>


        </div>
    </div>
</nav>

