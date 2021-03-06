<?php

?>
			<h1>Interested in Radford Child Development?</h1>
			<div class="center">
				<p>If you are interested in enrolling your child here in the future please fill out the form below<br>
				<span class="error">Note: This does not guarantee a spot, it is only showing your interest.</span>
				</p>
			</div>
			<form id="interested" class="centerform" method="POST" action="/interested">
				<fieldset id="parentForm">
					<legend>Parent Information</legend>
					<input type="text" name="parent_name" placeholder="Parent's full name" required>
					<input type="text" name="email" placeholder="Email Address" required>
					<input type="text" name="employer" placeholder="Current Employer">
					<span class="small">How many children are you interested in enrolling?<br></span>
					<select id="num_children" name="num_children" required>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
					</select>
				</fieldset>
				<fieldset id="childForm_1">
					<legend>Child # 1</legend>
					<input type="text" name="child_name_1" placeholder="Child's full name">
					<input type="text" class="dob" name="dob_1" placeholder="Date of Birth">
					<select name="gender_1">
						<option value="Male">Male</option>
						<option value="Female">Female</option>
					</select>
				</fieldset>
			</form>
