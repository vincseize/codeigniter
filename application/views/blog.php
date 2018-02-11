<?php 

	// require_once(base_url().'application/librairies/Blog_dbController.php'); 
	$this->load->library('Blog_dbController');
	$c = new Blog_dbController();
	$conn = $c->connectDB();

	$all_rows_forJSON = array();
	$all_rows = array();
	$sql = "SELECT * FROM `".TABLE_FRONTEND."`";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
	    while($row = $result->fetch_assoc()) {
	    	$all_rows_forJSON['id'] = $row['id'];
		    $all_rows_forJSON['content'] = $row['content'];
	    	$id = $row["id"];;
	         $all_rows[$id] = $row;
	    }
	}
	$all_rows_JSON = json_encode($all_rows_forJSON);
	var_dump(json_encode($all_rows_JSON));

?>

<!-- Post Info Container -->
	<div id="container" class="container-fluid mtb-margin-top">
		<div class="row">
			<div class="col-md-12">
				<h1 class="top-margin">Vincseize -- <a href="#"><?php echo TITLE_APP; ?> Exercice</a> with an <a href="#">Avicene's REST Test Blog</a></h1>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<?php
				/*How many records you want to show in a single page.*/
				$limit = default_max_articles;
				/*How may adjacent page links should be shown on each side of the current page link.*/
				$adjacents = 2;
				/*Get total number of records */
				$sql = "SELECT COUNT(*) 'total_rows' FROM `".TABLE_FRONTEND."`";
				$res = mysqli_fetch_object(mysqli_query($conn, $sql));
				$total_rows = $res->total_rows;
				/*Get the total number of pages.*/
				$total_pages = ceil($total_rows / $limit);
				
				
				if(isset($_GET['page']) && $_GET['page'] != "") {
					$page = $_GET['page'];
					$offset = $limit * ($page-1);
				} else {
					$page = 1;
					$offset = 0;
				}


				$query  = "select * from `".TABLE_FRONTEND."` limit $offset, $limit";
				$result = mysqli_query($conn, $query);
				if(mysqli_num_rows($result) > 0) {
					while($row = mysqli_fetch_object($result)) {
						$id 		= $row->id;
						$title 		= $row->title;
						$content 	= html_entity_decode($row->content);
						$author 	= $row->author;
						$date 		= $row->date;
						echo '<h1 id_article="'.$id.'" class="post-title ajax-modal">'.$title.'</h1>';
						echo '<p>';
						echo '<div class="post-subtitle">';
						echo '<span class="post-date">'.$date.' | </span>';
						echo '<span class="post-author">Author : '.$author.'</span>';
						echo '</div>';
						echo '</p>';

						echo '<section class="post-content">'.$content.'</section>';				
					}
				}

				//Checking if the adjacent plus current page number is less than the total page number.
				//If small then page link start showing from page 1 to upto last page.
				if($total_pages <= (1+($adjacents * 2))) {
					$start = 1;
					$end   = $total_pages;
				} else {
					if(($page - $adjacents) > 1) {				   //Checking if the current page minus adjacent is greateer than one.
						if(($page + $adjacents) < $total_pages) {  //Checking if current page plus adjacents is less than total pages.
							$start = ($page - $adjacents);         //If true, then we will substract and add adjacent from and to the current page number  
							$end   = ($page + $adjacents);         //to get the range of the page numbers which will be display in the pagination.
						} else {								   //If current page plus adjacents is greater than total pages.
							$start = ($total_pages - (1+($adjacents*2)));  //then the page range will start from total pages minus 1+($adjacents*2)
							$end   = $total_pages;						   //and the end will be the last page number that is total pages number.
						}
					} else {									   //If the current page minus adjacent is less than one.
						$start = 1;                                //then start will be start from page number 1
						$end   = (1+($adjacents * 2));             //and end will be the (1+($adjacents * 2)).
					}
				}
				//If you want to display all page links in the pagination then
				//uncomment the following two lines
				//and comment out the whole if condition just above it.
				/*$start = 1;
				$end = $total_pages;*/
				?>
				
				<?php if($total_pages > 1) { ?>
					<ul class="pagination pagination-sm justify-content-center">
						<!-- Link of the first page -->
						<li class='page-item <?php ($page <= 1 ? print 'disabled' : '')?>'>
							<a class='page-link' href='?page=1'>&lt;&lt;</a>
						</li>
						<!-- Link of the previous page -->
						<li class='page-item <?php ($page <= 1 ? print 'disabled' : '')?>'>
							<a class='page-link' href='?page=<?php ($page>1 ? print($page-1) : print 1)?>'>&lt;</a>
						</li>
						<!-- Links of the pages with page number -->
						<?php for($i=$start; $i<=$end; $i++) { ?>
						<li class='page-item <?php ($i == $page ? print 'active' : '')?>'>
							<a class='page-link' href='?page=<?php echo $i;?>'><?php echo $i;?></a>
						</li>
						<?php } ?>
						<!-- Link of the next page -->
						<li class='page-item <?php ($page >= $total_pages ? print 'disabled' : '')?>'>
							<a class='page-link' href='?page=<?php ($page < $total_pages ? print($page+1) : print $total_pages)?>'>&gt;</a>
						</li>
						<!-- Link of the last page -->
						<li class='page-item <?php ($page >= $total_pages ? print 'disabled' : '')?>'>
							<a class='page-link' href='?page=<?php echo $total_pages;?>'>&gt;&gt;</a>
						</li>
					</ul>
				<?php } ?>
				<?php mysqli_close($conn); ?>
 			</div>
 		</div>
     </div> 

<!-- Modal -->
<div class="modal fade" id="myModalDES" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                 <h4 class="modal-title">Modal title</h4>

            </div>
            <div class="modal-body"><div class="te"></div></div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>


<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Article</h4>
      </div>
      <div class="modal-body" id="modal-body"></div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>



<!-- /.modal -->



<script>

(function() {
    var infoModal = $('#myModal');
    var id = $(this).attr('id_article')
	$('.ajax-modal').click(function(e){
		var title = "<?php echo $all_rows[27]['title'];?>";
		var date = "<?php echo $all_rows[27]['date'];?>";
		var author = "<?php echo $all_rows[27]['author'];?>";
		var content = "<?php echo  $all_rows[27]['content'];?>";
		var lastUpdate = "<?php echo $all_rows[27]['date'];?>";

	    var htmlData = '<h1 class="post-title">';
	    htmlData += title;
	    htmlData += '</h1>';
	    // htmlData += date;
	    // htmlData += '</p>';
	    // htmlData += author;
	    // htmlData += '</p>';
	    // htmlData += content;
	    // htmlData += '</p> Last Update | ';
	    // htmlData += lastUpdate;
	    // htmlData += '</p>';
	    infoModal.find('#modal-body')[0].innerHTML = htmlData;
	    infoModal.modal();

		return false;
	});





	$('.ajax-modalDES').click(function(e){

		var data = $(this).attr('id_article')
		// alert(data)
		var baseurl = "<?php echo base_url();?>"
		// alert(baseurl)
		e.preventDefault(); //cancel native click event
		$.ajax({
			
			url: baseurl+"assets/blog/modal.php", 
			data: data,
			type: "POST",
			success: function (html) {
				alert(html);
				// $("#myModal").html(html).modal('show'); //insert retrieved data into modal, and then show it
				$("#myModal").modal('show'); //insert retrieved data into modal, and then show it

    fakeResponse = {"id":4,"menu_category_id":446,"title":"kunzereichert","content":"Dolores impedit ut doloribus et a et aut.","date":"2015-04-10 05:55:23","author":"Avicene","lastUpdate":"2017-04-10 05:55:23"};

    var htmlData = '<h1 class="post-title">';
    htmlData += fakeResponse.title;
    htmlData += '</h1>';
    htmlData += fakeResponse.date;
    htmlData += '</p>';
    htmlData += fakeResponse.author;
    htmlData += '</p>';
    htmlData += fakeResponse.content;
    htmlData += '</p> Last Update | ';
    htmlData += fakeResponse.lastUpdate;
    htmlData += '</p>';
    infoModal.find('#modal-body')[0].innerHTML = htmlData;
    infoModal.modal();


			},
			error: function() {
				alert('Ajax did not succeed');
			}
		});
		return false;
	});

	$readMoreJS.init({
	   target: '.post-content',    // Selector of the element the plugin applies to (any CSS selector, eg: '#', '.'). Default: ''
	   numOfWords: <?php echo default_max_lenght_articles;?>, // Number of words to initially display (any number). Default: 50
	   toggle: true,               // If true, user can toggle between 'read more' and 'read less'. Default: true
	   moreLink: '<p class="post-read-more"> read more [...]</p>',    // The text of 'Read more' link. Default: 'read more ...'
	   lessLink: 'read less'       // The text of 'Read less' link. Default: 'read less'
	});


})(jQuery);




</script>