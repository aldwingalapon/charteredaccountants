<?php include("includes/header.php");?>

	<div class="content-container" id="page-content">
		<div class="row-fluid">
			<div id="left-sidebar" class="col-md-2 sidebar">
				<?php include("includes/sidebar.php");?>
			</div>
			<div class="col-md-10 main-content">
				<table class="program">
					<thead>
						<tr>
							<th class="enroll">my enrolled programs</th>
							<th class="status">status</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Learn HTML5 Programming From Scratch<span class="diploma" title="Graduate Diploma of HTML5">Graduate Diploma of HTML5</span></td>
							<td><button type="button" class="btn btn-default in-progress">in progress</button></td>
						</tr>
						<tr>
							<td>Java tutorial for complete beginners<span class="diploma" title="Graduate Diploma of HTML5">Graduate Diploma of HTML5</span></td>
							<td><button type="button" class="btn btn-default stop">stop</button></td>
						</tr>
						<tr>
							<td>The ultimate phython programming tutorial<span class="diploma" title="Graduate Diploma of HTML5">Graduate Diploma of HTML5</span></td>
							<td><button type="button" class="btn btn-default in-progress">in progress</button></td>
						</tr>
						<tr>
							<td>Learn HTML5 Programming From Scratch<span class="diploma" title="Graduate Diploma of HTML5">Graduate Diploma of HTML5</span></td>
							<td><button type="button" class="btn btn-default stop">stop</button></td>
						</tr>
						<tr>
							<td>Java tutorial for complete beginners<span class="diploma" title="Graduate Diploma of HTML5">Graduate Diploma of HTML5</span></td>
							<td><button type="button" class="btn btn-default in-progress">in progress</button></td>
						</tr>
						<tr>
							<td>Learn HTML5 Programming From Scratch<span class="diploma" title="Graduate Diploma of HTML5">Graduate Diploma of HTML5</span></td>
							<td><button type="button" class="btn btn-default in-progress">in progress</button></td>
						</tr>
					</tbody>
				</table>

				<table class="cpd-cpe">
					<thead>
						<tr>
							<th class="my-cpd-cpe">my cpd / cpe</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Total CPD/CPE hours logged: <span class="count">15</span><button type="button" class="btn btn-default add-record"><i class="fa fa-plus-circle"></i> <span class="caption">add education record</span></button></td>
						</tr>
						<tr>
							<td>Total CPD/CPE hours logged: <span class="count">15</span><button type="button" class="btn btn-default add-record"><i class="fa fa-plus-circle"></i> <span class="caption">add education record</span></button></td>
						</tr>
					</tbody>
				</table>
				
				<h2>my education records</h2>
				<table class="education">
					<thead>
						<tr>
							<th>Event/course name</th>
							<th>date commenced</th>
							<th>manually<br>added</th>
							<th>cpd/cpe<br>hours</th>
							<th>specialist<br>hours type</th>
							<th>specialist hours code</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Event 1</td>
							<td>9/03/2016</td>
							<td><input type="checkbox" checked></td>
							<td>1.00</td>
							<td>Informal</td>
							<td>Type B- Registered Trustee in Bankrptcy</td>
						</tr>
						<tr>
							<td>Event 2</td>
							<td>9/03/2016</td>
							<td><input type="checkbox"></td>
							<td>2.33</td>
							<td>Informal</td>
							<td>Type B- Registered Trustee in Bankrptcy</td>
						</tr>
						<tr>
							<td>Event 3</td>
							<td>9/03/2016</td>
							<td><input type="radio" checked></td>
							<td>4.55</td>
							<td>Informal</td>
							<td>Type B- Registered Trustee in Bankrptcy</td>
						</tr>
						<tr>
							<td>Event 4</td>
							<td>9/03/2016</td>
							<td><input type="radio"></td>
							<td>6.03</td>
							<td>Informal</td>
							<td>Type B- Registered Trustee in Bankrptcy</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="clearfix">
			</div>
		</div>
	</div>

<?php include("includes/footer.php");?>
