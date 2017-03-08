<p class="nomargin" style="margin-bottom:20px; text-align:right;">
	<button type="button" class="btn btn-default btn-xs" onclick="location.href='<?php echo base_url()?>non_loan/add'">เพิ่มแบบคำขอกู้</button>
</p>
<div class="table-responsive">
	<table class="table table-striped mb30">
		<thead>
			<tr>
            	<th>#</th>
                <th>วันที่ขอสินเชื่อ</th>
                <th>ชื่อ - นามสกุล</th>
                <th>วัตถุประสงคค์การขอสินเชื่อ</th>
			</tr>
		</thead>
		<tbody>
		<?php 
			if(!empty($result))
			{
				$i = 1;
				foreach ($result as $row)
				{
		?>
			<tr>
				<td><?php echo $i++; ?></td>
				<td><?php echo $row['non_loan_date']; ?></td>
				<td><?php echo $row['person_id']; ?></td>
           		<td><?php echo $row['non_loan_objective_id']; ?></td>
           	</tr>
		<?php
				}	
			} 
		?>
		</tbody>
	</table>
</div><!-- table-responsive -->