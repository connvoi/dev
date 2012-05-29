<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $title; ?></title>
	<?php echo Asset::css('bootstrap.css'); ?>
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
    </style>
	<?php echo Asset::css('bootstrap-responsive.css'); ?>
</head>
<body>

 <div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container">
      <a class="brand" href="#">category</a>
      <div class="nav-collapse">
        <ul class="nav">
          <li class="active"><a href="#">buzzword</a></li>
        </ul>
      </div> 
    </div>
  </div>
 </div>

	<div class="container">
		<div class="row">
      <div class="span12">
				<h1><?php echo $title; ?></h1>
				<hr>
<?php if (Session::get_flash('success')): ?>
				<div class="alert-message success">
					<p>
					<?php echo implode('</p><p>', (array) Session::get_flash('success')); ?>
					</p>
				</div>
<?php endif; ?>

<?php if (Session::get_flash('error')): ?>
				<div class="alert-message error">
					<p>
					<?php echo implode('</p><p>', (array) Session::get_flash('error')); ?>
					</p>
				</div>
<?php endif; ?>
      </div>
      <div class="span12">
      <?php echo $content; ?>
      </div>

    </div>
    <hr>
		<footer>
        <p><a href="#">hogehoge</a></p>
		</footer>
	</div>

	  <?php echo Asset::js('jquery.js'); ?>
	  <?php echo Asset::js('bootstrap-transition.js'); ?>
	  <?php echo Asset::js('bootstrap-alert.js'); ?>
	  <?php echo Asset::js('bootstrap-modal.js'); ?>
	  <?php echo Asset::js('bootstrap-dropdown.js'); ?>
	  <?php echo Asset::js('bootstrap-scrollspy.js'); ?>
	  <?php echo Asset::js('bootstrap-tab.js'); ?>
	  <?php echo Asset::js('bootstrap-tooltip.js'); ?>
	  <?php echo Asset::js('bootstrap-popover.js'); ?>
	  <?php echo Asset::js('bootstrap-button.js'); ?>
	  <?php echo Asset::js('bootstrap-collapse.js'); ?>
	  <?php echo Asset::js('bootstrap-carousel.js'); ?>
	  <?php echo Asset::js('bootstrap-typeahead.js'); ?>
</body>
</html>
