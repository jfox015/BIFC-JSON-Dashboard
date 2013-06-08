<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<title>JSON HR Dashboard Demo</title>
	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="css/layout.css" type="text/css" media="screen" />
	<!--[if lt IE 9]>
	<link rel="stylesheet" href="css/ie.css" type="text/css" media="screen" />
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body>
	<header id="header">
		<hgroup>
			<h1 class="site_title"><a href="index.html">BIFC HR Portal</a></h1>
			<h2 class="section_title">Dashboard</h2><div class="btn_view_site"><a href="http://www.aeoliandigital.com">View Site</a></div>
		</hgroup>
	</header> <!-- end of header bar -->
	
	<section id="secondary_bar">
		<div class="user">
			<p>John Doe (<a href="#" id="show_messages">3 Messages</a>)</p>
		</div>
		<div class="breadcrumbs_container">
			<article class="breadcrumbs"><a href="index.html">Website Admin</a> <div class="breadcrumb_divider"></div> <a class="current">View Users</a></article>
		</div>
	</section><!-- end of secondary bar -->
	
	<aside id="sidebar" class="column">
		<form class="quick_search">
			<input type="text" placeholder="Quick Search" />
		</form>
		<hr/>
		<h3>Users</h3>
		<ul class="toggle">
			<li class="icn_add_user"><a href="#" rel="user" id="add">Add New User</a></li>
			<li class="icn_view_users"><a href="#" rel="user" id="view" style="font-weight:bold; color:#600;">View Users</a></li>
			<li class="icn_profile"><a href="#" rel="user" id="profile" >Your Profile</a></li>
		</ul>
		<h3>Admin</h3>
		<ul class="toggle">
			<li class="icn_settings"><a href="#">Options</a></li>
			<li class="icn_security"><a href="#">Security</a></li>
			<li class="icn_jump_back"><a href="#">Logout</a></li>
		</ul>
		
		<footer>
		</footer>
	</aside><!-- end of sidebar -->
	
	<section id="main" class="column">
		
		<h2 style="margin-left:25px;">View Users</h2>
		
		<h4 id="page-message" style="display:none;">An Error Message</h4>
		
		<article class="module width_full">
		
		<header><h3 class="tabs_involved">Users</h3>
		<ul class="tabs">
   			<li><a href="#tab1">Refresh</a></li>
		</ul>
		</header>

		<table class="tablesorter" cellspacing="0"> 
		<thead> 
			<tr> 
				<th></th> 
				<th>Employee ID</th> 
				<th>Name</th> 
				<th>Hired On</th> 
				<th>Location</th> 
				<th>Consultant</th>
				<th>Actions</th>
			</tr> 
		</thead> 
		<tbody id="employee_table"> 
			<tr> 
				<td colspan="7" class="empty_table">No employee data found.</td>
			</tr>   
		</tbody> 
		</table>
		</article><!-- end of content manager article -->
		
		<article class="module width_3_quarter">
		<header><h3 class="tabs_involved">Reviews</h3></header>
		<table class="tablesorter" cellspacing="0"> 
		<thead> 
			<tr> 
				<th>Review Date</th> 
				<th>Reviewed By</th> 
				<th>Status</th>
			</tr> 
		</thead> 
		<tbody id="review_table"> 
			<tr> 
				<td colspan="6" class="empty_table">Click an employees name above to view review data.</td> 
			</tr>   
		</tbody> 
		</table>
		
		</article><!-- end of content manager article -->
		
		<article class="module width_quarter">
			<header><h3>Notes</h3></header>
			<div class="message_list">
				<div class="module_content" id="notes_box">
					<div class="message"><p>No notes yet.</p></div>
				</div>
			</div>
			<footer id="note_form" style="display:none;">
				<form class="post_message">
					<input type="text" id="new_note" placeholder="Add Note" />
					<input id="btn-submit-note" type="submit" class="btn_post_message" value="" />
				</form>
			</footer>
		</article><!-- end of messages article -->
		
		<div class="spacer"></div>
	</section>
	
	<div id="new_user_modal" class="modal hide">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			<h3 id="user_modal_head">Add New User</h3>
		</div>
		<div class="modal-body">
			<form id="user_form">
				<article class="width_full">
					<header><h5>User Details</h5></header>
					<fieldset>
						<div id="employee_id_node" style="display: inline-block">
							<label>Employee ID:</label>
							<input type="text" name="employee_id" id="employee_id" />
							<br clear="all" /><br />
						</div>
						<label>Name:</label>
						<input type="text" name="name" id="name" />
						<br clear="all" /><br />
						<label>Location:</label>
						<select name="location" id="location">
							<option value="">Select Location</option>
						</select>
						<br clear="all" /><br />
						<label>Date of Hire:</label>
						<input type="text" name="hire_date" id="hire_date" />
						<br clear="all" /><br />
						<label>Consultant:</label><br clear="all" />
						<ul class="radioList">
							<li><input type="radio" name="consultant" id="consultanty" value="Y" /> <label>Yes</label></li>
							<li><input type="radio" name="consultant" id="consultantn" value="N" /> <label>No</label></li>
						</ul>
					</fieldset>
				</article>
			</form>
		</div>
		<div class="modal-footer">
			<button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
			<button id="btn-usr-save" class="btn btn-primary">Save</button>
		</div>
	</div>
	
	<div id="message_modal" class="modal hide">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			<h3 id="message_modal_head">Messages</h3>
		</div>
		<div class="modal-body">
			<article class="module width_full">
				<header><h4 class="tabs_involved">Messages</h4></header>
				<table class="tablesorter" cellspacing="0"> 
				<thead> 
					<tr> 
						<th></th> 
						<th>Date</th> 
						<th>From</th> 
						<th>Subject</th>
						<th>Actions</th>
					</tr> 
				</thead> 
				<tbody id="message_table"> 
					<tr> 
						<td colspan="6" class="empty_table">No messages were found.</td> 
					</tr>   
				</tbody> 
				</table>
			</article>
			<article class="module width_full" id="message_block" style="display:none;">
				<header id="message_header"><h4 class="tabs_involved"></h4></header>
				<p id="message_body">
				
				</p>
			</article>
		</div>
	</div>

	<script type="text/javascript" src="js/jquery-1.9.0.js"></script>
	<script type="text/javascript" src="js/hideshow.js"></script>
	<script type="text/javascript" src="js/jquery.tablesorter.min.js"></script>
	<script type="text/javascript" src="js/jquery.equalHeight.js"></script>
	<script type="text/javascript" src="js/underscore-min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery.validate.min.js"></script>
    <script type="text/javascript" src="js/additional-methods.min.js"></script>
	
	<script type="text/template" id="employee_row">
		<tr> 
			<td><input type="checkbox" value="<%= data.employee_id %>"></td> 
			<td><%= data.employee_id %></td> 
			<td><a href="#" rel="empname" id="<%= data.employee_id %>"><%= data.name %></a></td> 
			<td><%= data.hire_date %></td> 
			<td><% $.each(loc_list, function(i, loc) {
				if (loc.location_id == data.location) print (loc.city_name);
			}); %></td> 
			<td><% print((data.consultant) ? "Yes" : "No") %></td> 
			<td><input type="image" src="images/icn_edit.png" title="Edit" rel="edit_user" id="<%= data.employee_id %>"><input type="image" src="images/icn_trash.png" title="Trash" rel="delete_user" id="<%= data.employee_id %>"></td> 
		</tr>
	</script>
	<script type="text/template" id="message_row">
		<tr> 
			<td><input type="checkbox" value="<%= data.message_id %>"></td> 
			<td><%= data.date %></td> 
			<td><%= data.from %></td> 
			<td><%= data.subject %></td> 
			<td><input type="image" src="images/icn_search.png" title="View" rel="message_link" id="<%= data.message_id %>"><input type="image" src="images/icn_trash.png" title="Delete"></td> 
		</tr>
	</script>
	<script type="text/template" id="review_row">
		<tr>
			<td><%= data.date %></td>
			<td><%= data.reviewed_by %></td> 
			<td><%= data.status %></td>
		</tr>
	</script>
	<script type="text/template" id="notes_row">
		<div class="message">
		<p><%= data.content %></p>
		<p><strong><%= data.date %></strong></p></div>
	</script>

	<script type="text/javascript">
		// validate signup form on keyup and submit
	var form_val = $("#user_form").validate({
		rules: {
			name: {
				required: true,
				minlength: 2
			},
			location: {
				required: true
			},
			hire_date: {
				date: true
			},
			consultant: {
				required: true
			}
		},
		messages: {
			name: {
				required: "Please enter an employee name",
				minlength: "Users name must be at least 2 characters"
			},
			location: {
				required: "Please enter location"
			},
			hire_date: {
				date: "Date of hire must be a valid date"
			},
			consultant: {
				required: "Please select if user is a consultant"
			}
		}
	});
	var user_id = 1, curr_emp_id = -1, btn_mode = "add",
	waitLoad = '<div id="waitload" class="well center"><img src="images/ajax-loader.gif" width="28" height="28" border="0" align="absmiddle" /><br />Operation in progress. Please wait...</div>',
	loc_list = [],
	message_list = [],
	employeeData = [],
	messages_url = 'messages',
	note_url = 'notes',
	users_url = 'employees',
	locations_url = 'locations';
						
	$(document).ready(function() { 
		$(".tablesorter").tablesorter();
		$("ul.tabs li:first").addClass("active");
		$("ul.tabs li").click(function() {
            loadEmployees();
		});
		$("#new_user_modal").modal({
			keyboard: false,
			static:true,
			background: true
		});
		$("#new_user_modal").modal('hide');
		$("#message_modal").modal({
			keyboard: false,
			static:true,
			background: true
		});
		$("#message_modal").modal('hide');
		
		$("#show_messages").click(function() {
			loadMessages();
		});
		$("a[rel=user]").click(function() {
			if (this.id == "add" ) {
				clearModalForm();
				btn_mode = "add";
				form_val.resetForm( );
				$("#employee_id_node").css("display", 'none');
				$('#user_modal_head').html("Add New User");
				$("#new_user_modal").modal('show');
			}
		});
		
		$("#btn-submit-note").click(function(e) {
			e.preventDefault();
			if (curr_emp_id != -1 && $('#new_note').val() != "") {
				var e = getEmployeeData(curr_emp_id),
				new_note = { "employee_id": curr_emp_id, "content": $('#new_note').val() };
				// AJAX
				var error = true;
				$.post(users_url+"/add_note", {"items": JSON.stringify(new_note)})
					.done(function(data) {
						if (data.code == 200) {
                            showEmployeeData(data.result.items, "notes_box", 'notes_row');
                            $('#new_note').val("");
                            showMessage("success","Note added successfully.");
                        } else {
                            showMessage("error","An error occurred adding the note. "+data.status);
                            $('#new_note').val("");
                        }
					})
					.fail(function() { 
						showMessage("error","An error occurred adding the note");
						$('#new_note').val("");						
					});				
			} else {
				showMessage("error","Note content is required.");
			}
		});
		$("#btn-usr-save").click(function() {
			var error = false;
			//CHECK FOR VALID FORM
			if ($("#user_form").valid()) {
				var new_e = {};
				new_e.employee_id = ($("#employee_id").val()) ? parseInt($("#employee_id").val()) : -1;
				new_e.name = $("#name").val();
				new_e.hire_date = ($("#hire_date").val()) ? $("#hire_date").val() : getCurrentDateStr();
				new_e.location =  parseInt($("#location").val());
				new_e.consultant = ($("input[name=consultant]:checked","#user_form").val() == "Y");
                new_e.type = btn_mode;
				var error = false;
				$.ajax({
					type: "POST",
					url: users_url+"/save",
					dataType: "json",
					data: { items: JSON.stringify(new_e) }
				}).done(function(data) { loadEmployees(); })
				.fail(function() { showMessage("error","An error occured saving the employee data."); });
                $("#new_user_modal").modal('hide');
			} else {
				form_val.showErrors();
			}
		});
		loadLocations();
		loadEmployees();
   	});
	function getCurrentDateStr() {
		var d = new Date();
		return (d.getMonth()+1) + '/' + d.getDate() + '/' + d.getFullYear();
	}
	function clearModalForm() {
		$('#new_user_modal input[type=text]').val("");
		$('#new_user_modal select').val("");
		$('#new_user_modal input:checked').attr('checked', false);
	}
	function loadLocations() {
		$.getJSON(locations_url)
		.done(function(data) { loc_list = data.result.items; showLocations(); })
		.fail(function() { showMessage("error","Could not load location list."); });
	}
	function showLocations() {
		$.each(loc_list, function(key, value) {   
			$('#location')
				.append($("<option></option>")
				.attr("value",value.location_id)
				.text(value.city_name)); 
		});
	}
	function loadMessages() {
		
		$.getJSON(messages_url+"/loadmessages/"+user_id)
		.done(function(data) { message_list = data.result.items; showMessages(message_list); })
		.fail(function() { showMessage("error","Could not load messages."); });
		//showMessages(message_list);
	}
	function showMessages(mess_list) {
		$('#message_table').empty();
		var template = _.template($('#message_row').html()), htmlOut = '';
		$.each(mess_list, function (i, eData) {
			htmlOut += template({data:eData});
		});
		$('#message_table').html(htmlOut);
		$("#message_modal").modal('show');
		
		$('input[rel=message_link]').on("click",function(e) {
			e.preventDefault();
			var mess_id = this.id;
			$.each(message_list, function (i, eData) {
				if (parseInt(eData.message_id) == parseInt(mess_id)) {
					$("#message_header").html('<h4 class="tabs_involved">'+eData.subject+'</h4>');
					$("#message_body").html(eData.message);
					$("#message_block").css("display","block");
				}
			});
		});
	}
	function loadEmployees()
    {
		$("#employee_table").empty();
		$("#employee_table").html('<tr><td colspan="7" class="empty_table">'+waitLoad+'</td></tr>');
		
		$.getJSON(users_url)
         .done(function(data) { employeeData = data.result.items; displayEmployeeData(); })
         .fail(function() { showMessage("error","Could not load messages."); });
	}
	function displayEmployeeData() {
		
		// RESET DISPLAY CONTAINERS
		curr_emp_id = -1;
		$("#employee_table").empty();
		showEmployeeData([], "review_table", 'review_row');
		showEmployeeData([], "notes_box", 'notes_row');
		
		// PREPARE FOR LOAD
		$("#employee_table").html('<tr><td colspan="7" class="empty_table">'+waitLoad+'</td></tr>');
		
		// LOAD DATA
		var template = _.template($('#employee_row').html()), htmlOut = '';
		$.each(employeeData, function (i, eData) {
			htmlOut += template({data:eData});
		});
		$('#employee_table').html(htmlOut);
		$('input[rel="edit_user"]').on("click",function(e) {
			var e = getEmployeeData(this.id);
			if (e != null) {
				$("#employee_id").val(e.employee_id);
				$("#employee_id_node").css("display", "block");
				$("#employee_id").attr("disabled", true);
				$("#name").val(e.name);
				$("#location").val(e.location);
				$("#hire_date").val(e.hire_date);
				(e.consultant) ? $('#consultanty').attr("checked",true) : $('#consultantn').attr("checked",true);
				form_val.resetForm( );
				btn_mode = "edit";
				$('#user_modal_head').html("Edit User");
			} else {
				showMessage("error","An error occured selecting thsi user for editing.");
			}
			$("#new_user_modal").modal('show');
		});
		$('input[rel="delete_user"]').on("click",function(e) {
			e.preventDefault();
			if (confirm("Are you sure you want to delete this user?"))
				deleteUser(this.id);
		});
		$('a[rel="empname"]').on("click",function(e) {
			e.preventDefault();
			var e = getEmployeeData(this.id);
			if (e != null) {
				curr_emp_id = this.id;
				showEmployeeData(e.reviews, "review_table", 'review_row');
				showEmployeeData(e.notes, "notes_box", 'notes_row');
			}
		});
	}
	function deleteUser(user_id) {
		var e = getEmployeeData(user_id);
		if (e != null) {
			// AJAX
			var error = true;
			$.getJSON(users_url+"/delete/"+e.employee_id)
				.done(function(data) { 
					if (data.code == 200) {
						showMessage("success","Employee " + e.name + " was successfully deleted."); 
						loadEmployees();
					} else {
						showMessage("error","An error occurred deleting employee " + e.name + ". " + data.status);
					}
				})
				.fail(function() { showMessage("error","An error occurred deleting employee " + e.name); });
		} else {
			showMessage("error","Selected employee was not found.");
		}
	}
	function showMessage(type, message, duration) {
		if (typeof duration == "undefined") duration = 6000;
		$("#page-message").empty();
		$("#page-message").html(message);
		$("#page-message").removeClass("alert_error");
		$("#page-message").removeClass("alert_success");
		$("#page-message").removeClass("alert_warning");
		$("#page-message").addClass("alert_"+type);
		$("#page-message").css("display", "block");
		setInterval(function () { $("#page-message").fadeOut('slow') },duration);
	}
	function getEmployeeData(emp_id) {
		var emp = null;
		$.each(employeeData, function (i, eData) {
			if (eData.employee_id == emp_id)
				emp = eData;
		});
		return emp;
	}
	function showEmployeeData(e, elem, tpl) {
		$("#"+elem).empty();
		var htmlOut = "";
		if (e && e.length > 0) {
			var template = _.template($('#'+tpl).html());
			$.each(e, function (j, rData) {
				htmlOut += template({data:rData});
			});
		}
		$("#"+elem).html(htmlOut);
		$('#note_form').css("display",(elem == "notes_box" && curr_emp_id != -1) ? "block" : "none");
	}
    $(function(){
        $('.column').equalHeight();
    });
	</script>
</body>

</html>