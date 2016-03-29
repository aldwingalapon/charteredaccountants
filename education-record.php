<?php include("includes/header.php");?>

	<div class="content-container" id="page-content">
		<div class="row-fluid">
			<div id="left-sidebar" class="col-md-2 sidebar">
				<?php include("includes/sidebar.php");?>
			</div>
			<div class="col-md-10 main-content dashboard">
				<div class="table-header">
					<form class="search-form row" role="form">
						<div class="col-md-2">
							<div class="form-group">
								<label for="from-date">FROM DATE COMMENCED</label>
								<input type="date" class="form-control" id="from-date">
							</div>
						</div>
						<div class="col-md-2">
							<div class="form-group">
								<label for="to-date">TO DATE COMMENCED</label>
								<input type="date" class="form-control" id="to-date">
							</div>					
						</div>					
						<div class="col-md-3">
							<div class="form-group">
								<label for="course">EVENT/COURSE NAME</label>
								<input type="text" class="form-control" id="course">
							</div>					
						</div>					
						<div class="col-md-5">
							<div class="form-group">
								<label for="university">UNIVERSITY PROFESSIONAL ORGRANIZATION</label>
								<input type="text" class="form-control" id="university">
							</div>					
						</div>					
					</form>
				</div>
				<div class="table-footer"><button class="btn btn-default search" title="Search">Search</button></div>
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
