<?php
/**
 * @file
 * Porto's theme implementation to display a single Drupal page.
 */
if (isset($_SERVER['HTTP_REFERER']) && (strtolower(substr($_SERVER['HTTP_REFERER'],0,29))=="http://acbucovice.webnode.cz/")) {
   drupal_add_http_header('X-Frame-Options',"http://acbucovice.webnode.cz/");
};
?>

<div class="body">
	<div role="main" class="main">
	  <div id="content" class="content full">
	    <div class="container">
	      <div class="row">
					<div class="col-md-12">
					  
					  <?php print $messages; ?>
					  
			     	<?php if ($tabs = render($tabs)): ?>
						  <div id="drupal_tabs" class="tabs ">
						    <?php print render($tabs); ?>
						  </div>
					  <?php endif; ?>
			      <?php print render($page['help']); ?>
			      <?php if ($action_links): ?>
			        <ul class="action-links">
			          <?php print render($action_links); ?>
			        </ul>
			      <?php endif; ?>
			
					  <?php if (isset($page['content'])) { print render($page['content']); } ?>
					</div>
			  
				  <?php if ( ($page['sidebar_right']) ) : ?>
				  <div class="<?php if ($page['sidebar_left']) { echo "col-md-3";} else { echo "col-md-3"; } ?>">
				    <?php print render($page['sidebar_right']); ?>
				  </div>
				  <?php endif; ?>
			    
			  </div>
	    </div>  
	  </div>  
	</div>
</div>	
