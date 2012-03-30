<?php if($user_admin){
			
			echo '<p>The user is logged in and this is their account. Allow user admin privelges</p>';
			echo anchor('/auth/logout/', 'Logout');
	
		}
?>


<h2>User Information:</h2></div>
<table style="margin:0px auto; width:500px;" border="1"><tbody>
	<tr>
		<td>User ID: </td>
		<td><?php echo $user_id; ?></td>
	</tr>
	<tr>
		<td>Username: </td>
		<td><?php echo $username; ?></td>
	</tr>
	<tr>
		<td>Email: </td>
		<td><?php echo $email; ?></td>
	</tr>
	<tr>
		<td>Activated: </td>
		<td><?php echo $activated; ?></td>
	</tr>
	<tr>
		<td>Banned: </td>
		<td><?php echo $banned; ?></td>
	</tr>
	<tr>
		<td>Created: </td>
		<td><?php echo $created; ?></td>
	</tr>

</tbody></table>