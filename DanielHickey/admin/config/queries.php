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
									$message = '<p class="alert alert-success">Page was '.$action.'!</p>';
								}else{
									$message = '<p class="alert alert-danger">Page could not be '.$action.' because: '.mysqli_error($dbc);
									$message .= '<p class="alert alert-warning">Query: '.$query.'</p>';
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
								$last = mysqli_real_escape_string($dbc, $_POST['last' ]);

									if($_POST['password'] != '') {

									if($_POST['password'] == $_POST['passwordv']) {

									$password = " password = SHA1('$_POST[password]'),";
									$verify = true;

									} else {

									$verify = false;

									}

									} else {

									$verify = false;

									}

									if(isset($_GET['id']) != '')
										{
											$action = 'updated';
											$query = "UPDATE users SET first = '$first', last = '$last', email = '$_POST[email]', $password status = $_POST[status] WHERE id = $_GET[id]";
											//$query = "UPDATE users SET first = '$first', last = '$last', password = sha1('$_POST[password]'), status = $_POST[status] WHERE id = $_GET[id]";
										}else{
											$action = 'added';
											$query = "INSERT INTO users (first, last, email, password, status) VALUES ('$first', '$last', '$_POST[email]', SHA1('$_POST[password]'), '$_POST[status]')";
											//$query = "INSERT INTO users (first, last, password, status) VALUES ('$first', '$last', sha1('$_POST[password]'), $_POST[status]')";
										}
									
								
								$result = mysqli_query($dbc, $query);
								
								if($result)
								{
									$message = '<p class="alert alert-success">User was '.$action.'!</p>';
  
								}else{
									 $message = '<p class="alert alert-danger">User could not be '.$action.' because: '.mysqli_error($dbc);
					                    if($verify == false) {
					                        $message .= '<p class="alert alert-danger">Password fields empty and/or do not match.</p>';
					                    }
					                    $message .= '<p class="alert alert-warning">Query: '.$query.'</p>';
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