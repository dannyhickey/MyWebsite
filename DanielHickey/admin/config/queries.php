<?php

switch ($page) {

	case 'dashboard' :
		break;

	case 'pages' :
		if (isset($_POST['submitted']) == 1) {

			$title = mysqli_real_escape_string($dbc, $_POST['title']);
			$label = mysqli_real_escape_string($dbc, $_POST['label']);
			$header = mysqli_real_escape_string($dbc, $_POST['header']);
			$body = mysqli_real_escape_string($dbc, $_POST['body']);

			if (isset($_GET['id']) != '') {
				$action = 'updated';
				$query = "UPDATE pages SET user = $_POST[user], slug = '$_POST[slug]', title = '$title', label = '$label', header = '$header', body = '$body' WHERE id = $_GET[id]";
			} else {
				$action = 'added';
				$query = "INSERT INTO pages (user, slug, title, label, header, body) VALUES ($_POST[user], '$_POST[slug]', '$title', '$label', '$header', '$body')";
			}

			$result = mysqli_query($dbc, $query);

			if ($result) {
				$message = '<p class="bg-success">Page was ' . $action . '!</p>';
			} else {
				$message = '<p class="bg-danger">Page could not be ' . $action . ' due to: ' . mysqli_error($dbc);
				$message .= '<p class="bg-warning">Query: ' . $query . '</p>';
			}
		}

		if (isset($_GET['id'])) {
			$opened = data_page($dbc, $_GET['id']);
		}

		break;

	case 'users' :
		if (isset($_POST['submitted']) == 1) {

			$first = mysqli_real_escape_string($dbc, $_POST['first']);
			$last = mysqli_real_escape_string($dbc, $_POST['last']);

			if ($_POST['password'] != '') {
				if ($_POST['password'] == $_POST['paswordv']) {
					$password = " password = sha1('$_POST[password]'),";
					$verify = true;
				} else {

					$verify = false;
				}
			} else {

				$verify = false;

			}

			if (isset($_GET['id']) != '') {
				$action = 'updated';
				$query = "UPDATE users SET first = '$first', last = '$last', email = '$_POST[email]', $password status = $_POST[status] WHERE id = $_GET[id]";
			} else {

				$action = 'added';
				if($verify == true)
				{
					$query = "INSERT INTO users (first, last, email, password, status) VALUES 
					('$first', '$last', '$_POST[email]', sha1('$_POST[password]'), $_POST[status]')";
				}
				
			}

			$result = mysqli_query($dbc, $query);

			if ($result) {
				
				$message = '<p class="bg-success">User was ' . $action . '!</p>';
				
			} else {
				
				$message = '<p class="bg-danger">User could not be ' . $action . ' due to: ' . mysqli_error($dbc);
				if($verify == false)
				{
					$message .= '<p class="bg-danger"> Password fields are either empty or do not match.</p>';
				}
				$message .= '<p class="bg-warning">Query: ' . $query . '</p>';
			}
		}

		if (isset($_GET['id'])) {
			$opened = data_user($dbc, $_GET['id']);
		}

		break;

	case 'settings' :
		break;

	default :
		break;
}
?>