<?php
    session_start();
    if(!isset($_SESSION['password'])){header("Location: " . base_url() ); exit;}
    
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link type="text/css" rel="stylesheet" href="<?php echo base_url()?>my_css/bootstrap3.3.5.min.css" />
    <link type="text/css" rel="stylesheet" href="<?php echo base_url()?>my_css/font-awesome.min.css" />  
    <link type="text/css" rel="stylesheet" href="<?php echo base_url()?>my_css/my_css.css" /> <!-- after bootstrap !important -->

    <script src="<?php echo base_url()?>my_js/jquery-1.11.1.min.js"></script>
    <script src="<?php echo base_url()?>my_js/bootstrap3.3.5.min.js"></script>
    <script src="<?php echo base_url()?>my_js/readMoreJS.min.js"></script>

    <?php 
    foreach($css_files as $file): ?>
        <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
    <?php endforeach; ?>
    <?php foreach($js_files as $file): ?>
        <script src="<?php echo $file; ?>"></script>
    <?php endforeach; ?>

</head>

<body>
    <header>
        <div id="header">
            <?php
                $this->load->view('header_admin');
            ?>
        </div>
    </header>

    <!-- Beginning content -->



    <section id="section-container-grocery">
    <!-- Beginning of grocery-->
    <div id="content_grocery"> 
        <?php 
        echo "<p class='title-table'>".$table_crud."</p>";
        ?> 
        <button  id="articles" class="btn_header_grocery" url="<?php echo site_url('main/articles')?>">Articles</button>    
        <button  id="employees" class="btn_header_grocery" url="<?php echo site_url('main/employees')?>">Employees</button>
        <?php 
            echo $output; 
        ?>
    </div>  
    <!-- End of grocery -->  
    </section>



    <footer>
        <div id="footer">
            <?php
              $this->load->view('footer');
            ?>
        </div>
    </footer>

</body>


<script>
(function() {
    $(".btn_header_grocery").on("click",function(){
        var url = $(this).attr('url');
        window.location.href = url;
    });
})();
</script>


</html>