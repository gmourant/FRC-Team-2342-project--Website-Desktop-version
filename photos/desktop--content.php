	<div id="content">
	  <div>
		<h1><?php echo $title ?></h1>
		<p>&nbsp;</p>
		<p><a href="/photos/<?php echo $addnoscript ?>">Return to Gallery Index</a></p>
		<p>&nbsp;</p>
		<?php if($noscript == false) : ?><iframe src="page.html" style="border:none;" width="100%" height="600px;"></iframe><?php endif; ?>
		<?php if($noscript == true) : ?><p>Photo viewer requires JavaScript, please <a href="http://www.enable-javascript.com" target="_blank">enable JavaScript</a>. Alternatively, this album can be downloaded <a href="images.zip" download>here</a>.</p><?php endif; ?>
	  </div>
	</div>