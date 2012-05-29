<h2>Viewing #<?php echo $buzzword->id; ?></h2>

<p>
	<strong>Word:</strong>
	<?php echo $buzzword->word; ?></p>
<p>
	<strong>Child:</strong>
	<?php echo $buzzword->child; ?></p>
<p>
	<strong>Related word:</strong>
	<?php echo $buzzword->related_word; ?></p>
<p>
	<strong>Related url:</strong>
	<?php echo $buzzword->related_url; ?></p>
<p>
	<strong>Related hash:</strong>
	<?php echo $buzzword->related_hash; ?></p>
<p>
	<strong>Category1:</strong>
	<?php echo $buzzword->category1; ?></p>
<p>
	<strong>Cname1:</strong>
	<?php echo $buzzword->cname1; ?></p>
<p>
	<strong>Category2:</strong>
	<?php echo $buzzword->category2; ?></p>
<p>
	<strong>Cname2:</strong>
	<?php echo $buzzword->cname2; ?></p>
<p>
	<strong>Category3:</strong>
	<?php echo $buzzword->category3; ?></p>
<p>
	<strong>Cname3:</strong>
	<?php echo $buzzword->cname3; ?></p>
<p>
	<strong>Category4:</strong>
	<?php echo $buzzword->category4; ?></p>
<p>
	<strong>Cname4:</strong>
	<?php echo $buzzword->cname4; ?></p>
<p>
	<strong>Judge:</strong>
	<?php echo $buzzword->judge; ?></p>
<p>
	<strong>Comment:</strong>
	<?php echo $buzzword->comment; ?></p>

<?php echo Html::anchor('buzzword/edit/'.$buzzword->id, 'Edit'); ?> |
<?php echo Html::anchor('buzzword', 'Back'); ?>