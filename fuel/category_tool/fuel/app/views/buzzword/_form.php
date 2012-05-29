<?php echo Form::open(array('class' => 'form-stacked')); ?>

	<fieldset>
		<div class="clearfix">
			<?php echo Form::label('Word', 'word'); ?>

			<div class="input">
	      <?php echo $buzzword->word; ?>
				<?php echo Form::hidden('word', Input::post('word', isset($buzzword) ? $buzzword->word : ''), array('class' => 'span10', 'rows' => 8)); ?>

			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('Child', 'child'); ?>

			<div class="input">
	      <?php echo $buzzword->child; ?>
				<?php echo Form::hidden('child', Input::post('child', isset($buzzword) ? $buzzword->child : ''), array('class' => 'span10', 'rows' => 8)); ?>

			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('Related word', 'related_word'); ?>

			<div class="input">
	      <?php echo $buzzword->related_word; ?>
				<?php echo Form::hidden('related_word', Input::post('related_word', isset($buzzword) ? $buzzword->related_word : ''), array('class' => 'span10', 'rows' => 8)); ?>

			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('Related url', 'related_url'); ?>

			<div class="input">
	      <?php echo $buzzword->related_url; ?>
				<?php echo Form::hidden('related_url', Input::post('related_url', isset($buzzword) ? $buzzword->related_url : ''), array('class' => 'span10', 'rows' => 8)); ?>

			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('Related hash', 'related_hash'); ?>

			<div class="input">
	      <?php echo $buzzword->related_hash; ?>
				<?php echo Form::hidden('related_hash', Input::post('related_hash', isset($buzzword) ? $buzzword->related_hash : ''), array('class' => 'span10', 'rows' => 8)); ?>

			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('Category1', 'category1'); ?>

			<div class="input">
	      <?php echo $buzzword->category1.':'.$buzzword->cname1; ?>
				<?php echo Form::hidden('category1', Input::post('category1', isset($buzzword) ? $buzzword->category1 : ''), array('class' => 'span10', 'rows' => 8)); ?>
				<?php echo Form::hidden('cname1', Input::post('cname1', isset($buzzword) ? $buzzword->cname1 : ''), array('class' => 'span10', 'rows' => 8)); ?>

			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('Category2', 'category2'); ?>

			<div class="input">
	      <?php echo $buzzword->category2.':'.$buzzword->cname2; ?>
				<?php echo Form::hidden('category2', Input::post('category2', isset($buzzword) ? $buzzword->category2 : ''), array('class' => 'span10', 'rows' => 8)); ?>
				<?php echo Form::hidden('cname2', Input::post('cname2', isset($buzzword) ? $buzzword->cname2 : ''), array('class' => 'span10', 'rows' => 8)); ?>

			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('Category3', 'category3'); ?>

			<div class="input">
	      <?php echo $buzzword->category3.':'.$buzzword->cname3; ?>
				<?php echo Form::hidden('category3', Input::post('category3', isset($buzzword) ? $buzzword->category3 : ''), array('class' => 'span10', 'rows' => 8)); ?>
				<?php echo Form::hidden('cname3', Input::post('cname3', isset($buzzword) ? $buzzword->cname3 : ''), array('class' => 'span10', 'rows' => 8)); ?>

			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('Category4', 'category4'); ?>

			<div class="input">
	      <?php echo $buzzword->category4.':'.$buzzword->cname4; ?>
				<?php echo Form::hidden('category4', Input::post('category4', isset($buzzword) ? $buzzword->category4 : ''), array('class' => 'span10', 'rows' => 8)); ?>
				<?php echo Form::hidden('cname4', Input::post('cname4', isset($buzzword) ? $buzzword->cname4 : ''), array('class' => 'span10', 'rows' => 8)); ?>

			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('Judge', 'judge'); ?>

			<div class="input">
				<?php echo Form::input('judge', Input::post('judge', isset($buzzword) ? $buzzword->judge : ''), array('class' => 'span10', 'rows' => 8)); ?>

			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('Comment', 'comment'); ?>

			<div class="input">
				<?php echo Form::textarea('comment', Input::post('comment', isset($buzzword) ? $buzzword->comment : ''), array('class' => 'span10', 'rows' => 8)); ?>

			</div>
		</div>
		<div class="actions">
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn primary')); ?>

		</div>
	</fieldset>
<?php echo Form::close(); ?>
