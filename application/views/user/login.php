<?php


	echo "<p>";
	echo form_label('User name', 'user_name');
	echo "<br />";
	echo form_input('');
	echo "</p>";

	echo "<p>";
	echo form_label('Password', 'user_password');
	echo "<br />";
	echo form_password('');
	echo "</p>";

	echo "<p>";
	echo "<span class=\"form-help-text\">Hint : You may login with user name as 'admin' and password as 'admin'</span>";
	echo "</p>";

	echo "<p>";
	echo form_submit('submit', 'Login');
	echo "</p>";


