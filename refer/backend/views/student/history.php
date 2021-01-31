<?php if($progress_list) :?>
	<table class="table table-striped">
	<?php foreach($progress_list as $progress) :?>
		<tr>
		<td><?= $progress->progress->progress_title ?></td>
		<td><?= date('Y-m-d H:i:s', $progress->do_time) ?></td>
		</tr>
	<?php endForeach;?>
	</table>
<?php endIf;?>