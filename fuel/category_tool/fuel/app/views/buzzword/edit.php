<h2>Editing Buzzword</h2>
<br>

<?php echo render('buzzword/_form'); ?>
<p>
	<?php echo Html::anchor('buzzword/view/'.$buzzword->id, 'View'); ?> |
	<?php echo Html::anchor('buzzword', 'Back'); ?></p>
