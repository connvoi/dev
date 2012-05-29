<?php if ($buzzwords): ?>
<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Word</th>
			<th>Category1</th>
			<th>Category2</th>
			<th>Category3</th>
			<th>Category4</th>
			<th>Judge</th>
			<th>Comment</th>
			<th>Judge</th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($buzzwords as $buzzword): ?>		<tr>

			<td><?php echo $buzzword->word; ?></td>
			<td><?php echo $buzzword->category1.$buzzword->cname1; ?></td>
			<td><?php echo $buzzword->category2.$buzzword->cname2; ?></td>
			<td><?php echo $buzzword->category3.$buzzword->cname3; ?></td>
			<td><?php echo $buzzword->category4.$buzzword->cname4; ?></td>
			<td><?php echo $buzzword->judge; ?></td>
			<td><?php echo $buzzword->comment; ?></td>
			<td>
				<?php echo Html::anchor('buzzword/view/'.$buzzword->id, 'View'); ?> |
				<?php echo Html::anchor('buzzword/edit/'.$buzzword->id, 'Edit'); ?> 
			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Buzzwords.</p>

<?php endif; ?>
