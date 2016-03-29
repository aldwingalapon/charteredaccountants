<?php include("includes/header.php");?>

	<div class="content-container" id="page-content">
		<div class="row-fluid">
			<div id="left-sidebar" class="col-md-2 sidebar">
				<?php include("includes/sidebar.php");?>
			</div>
			<div class="col-md-10 main-content dashboard">
				<h2 class="enroll-recent-title">My Recent Module Enrollments</h2>
				<div class="table-footer"><button class="btn btn-default search" title="Search">Search</button></div>
<!--
				<table class="cpd-cpe">
					<thead>
						<tr>
							<th class="my-cpd-cpe">my cpd / cpe</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Total CPD/CPE hours logged: <span class="count">15</span><button type="button" class="btn btn-default add-record" title="Add Education Record"><i class="fa fa-plus-circle"></i> <span class="caption">add education record</span></button></td>
						</tr>
						<tr>
							<td>Total CPD/CPE hours logged: <span class="count">15</span><button type="button" class="btn btn-default add-record" title="Add Education Record"><i class="fa fa-plus-circle"></i> <span class="caption">add education record</span></button></td>
						</tr>
					</tbody>
				</table>
-->				
				<h2 class="education-title">Education Detail List</h2>
				<table class="education">
					<thead>
						<tr>
							<th>Event/course name</th>
							<th>Date commenced</th>
							<th>Manually added</th>
							<th>CPD/CPD hours</th>
							<th>Specialist Hours Type</th>
							<th>University / Institution</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Superannuatin Update</td>
							<td>9/03/2016</td>
							<td><input type="checkbox" checked></td>
							<td>1.00</td>
							<td>Informal</td>
							<td>University of Sydney</td>
						</tr>
						<tr>
							<td>Event 2</td>
							<td>9/03/2016</td>
							<td><input type="checkbox"></td>
							<td>2.33</td>
							<td>Informal</td>
							<td>University of Sydney</td>
						</tr>
						<tr>
							<td>Event 3</td>
							<td>9/03/2016</td>
							<td><input type="radio" checked></td>
							<td>4.55</td>
							<td>Informal</td>
							<td>University of Sydney</td>
						</tr>
						<tr>
							<td>Event 4</td>
							<td>9/03/2016</td>
							<td><input type="radio"></td>
							<td>6.03</td>
							<td>Informal</td>
							<td>University of Sydney</td>
						</tr>
					</tbody>
				</table>
				<div class="table-footer"><button class="btn btn-default view view-less" title="View Less">View Less</button><button class="btn btn-default new" title="Add New">New</button></div>
			</div>
			<div class="clearfix">
			</div>
		</div>
	</div>

<?php include("includes/footer.php");?>
