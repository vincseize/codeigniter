<?php 

    $class_device = '<i class="fa fa-laptop"></i>';
    $detect = new Mobile_Detect;
    // Any mobile device (phones or tablets).
    if ( $detect->isMobile() ) {
        $class_device = '<i class="fa fa-tablet"></i>';
    }
?>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-3"> 
                <span class="sr-only">Toggle navigation</span>
                 <span class="icon-bar"></span>
                 <span class="icon-bar"></span>
                 <span class="icon-bar"></span>

            </button> 

            <a class="navbar-brand" href="<?php echo site_url();?>"><?php echo $class_device;?></i>
                <?php echo strtoupper(TITLE_APP); ?>
            </a>

        </div>
        <div class="collapse navbar-collapse" id="navbar-collapse-3">
            <ul class="nav navbar-nav">

                <li class="active"><a href="<?php echo site_url();?>">Blog</a></li>

                <li class="dropdown ">
                    <a href="#" id="drop1" data-toggle="dropdown" class="dropdown-toggle" role="button">Menu Bidon <b class="caret"></b></a>
                    <ul role="menu" class="dropdown-menu" aria-labelledby="drop1">
                        <li role="presentation"><a href="#" role="menuitem">Bidon1</a></li>
                        <li role="presentation"><a href="#" role="menuitem">Bidon2</a></li>
                        <li role="presentation"><a href="#" role="menuitem">Bidon3</a></li>
                        <li role="presentation"><a href="#" role="menuitem">Bidon4</a></li>
                    </ul>
                </li>

                <li> 
                    <a class="btn btn-default collapsed bt-loginSearch" data-toggle="collapse" href="#nav-collapse3" aria-expanded="false" aria-controls="nav-collapse3">Search</a>
                </li>

            </ul>

            <ul class="nav navbar-nav navbar-right">

                <?php
                if(isset($_SESSION['password'])){
                                echo "<li>";
                                echo "<a href=\"";
                                echo site_url('/main/articles');
                                echo "\">";
                                echo "Admin";
                                echo "</a>";
                                echo "</li>";
                } 
                ?>        

                <?php
                $display_login = "style='display:none;'";
                if(!isset($_SESSION['password'])){
                    // echo "OK";
                    $display_login = "style='display:block;'";
                }
                $display_logout = "style='display:block;'";
                if(!isset($_SESSION['password'])){
                    // echo "OK";
                    $display_logout = "style='display:none;'";
                }
                ?>
                <li <?php echo $display_login;?>> 
                    <a class="btn btn-default collapsed bt-loginSearch" data-toggle="collapse" href="#nav-collapse--login" aria-expanded="false" aria-controls="nav-collapse4">Login</a>
                </li>

                <li <?php echo $display_logout;?>>
                    <a href="<?php echo site_url()?>?logout">Logout</a>
                </li>

            </ul>

            <div class="collapse nav navbar-nav nav-collapse slide-down" id="nav-collapse3">
                <form class="navbar-form navbar-right" role="search">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                    <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-search" aria-hidden="true"></span>

                    </button>
                </form>
            </div>
            <div class="collapse nav navbar-nav nav-collapse slide-down" id="nav-collapse--login">
                <form action="" method="post" class="navbar-form navbar-right" role="search">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Admin Password"  type="password" id="password" name="password">
                    </div>
                    <button type="submit" class="btn btn-primary" onclick="login();"><span class="glyphicon glyphicon-ok-sign" aria-hidden="true"></span>

                    </button>
                </form>
            </div>
        </div>
    </div>
</nav>

<script>
// function login() {
//     // document.getElementById("demo").style.color = "red";
//     alert('login');
// }
</script>