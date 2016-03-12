<?php 

				switch ($page) {
					
					case 'dashboard':
						
						break;
						
					case 'pages':
						
						if(isset($_POST['submitted']) == 1)
							{
							
								$title = mysqli_real_escape_string($dbc, $_POST['title']);
								$label = mysqli_real_escape_string($dbc, $_POST['label']);
								$header = mysqli_real_escape_string($dbc, $_POST['header']);
								$body = mysqli_real_escape_string($dbc, $_POST['body']);
								
								if(isset($_GET['id']) != '')
								{
									$action = 'updated';
									$query = "UPDATE pages SET user = $_POST[user], slug = '$_POST[slug]', title = '$title', label = '$label', header = '$header', body = '$body' WHERE id = $_GET[id]";
								}else{
									$action = 'added';
									$query = "INSERT INTO pages (user, slug, title, label, header, body) VALUES ($_POST[user], '$_POST[slug]', '$title', '$label', '$header', '$body')";
								}
							
								
								$result = mysqli_query($dbc, $query);
								
								if($result)
								{
									$message = '<p>Page was '.$action.'!</p>';
								}else{
									$message = '<p>Page could not be '.$action.' due to: '.mysqli_error($dbc);
									$message .= '<p>'.$query.'</p>';
								}
							} 

							if(isset($_GET['id']))
								{		
									$opened = data_page($dbc, $_GET['id']);
								}

						break;
						
					case 'users':
						
						if(isset($_POST['submitted']) == 1)
							{
							
								$first = mysqli_real_escape_string($dbc, $_POST['first']);
								$last = mysqli_real_escape_string($dbc, $_POST['last']);
															
								if(isset($_GET['id']) != '')
								{
									$action = 'updated';
									$query = "UPDATE users SET first = '$first', last = '$last', password = sha1('$_POST[password]'), status = $_POST[status] WHERE id = $_GET[id]";
								}else{
									$action = 'added';
									$query = "INSERT INTO users (first, last, password, status) VALUES 
									('$first', '$last', sha1('$_POST[password]'), $_POST[status]')";
								}
							
								
								$result = mysqli_query($dbc, $query);
								
								if($result)
								{
									$message = '<p>User was '.$action.'!</p>';
								}else{
									$message = '<p>User could not be '.$action.' due to: '.mysqli_error($dbc);
									$message .= '<p>'.$query.'</p>';
								}
							} 
							
							if(isset($_GET['id']))
							{		
								$opened = data_user($dbc, $_GET['id']);
							}
						
						break;
					
					case 'settings':
						
						break;
					
					default:
						
						break;
				}
				
?>