<?php
$password = array(
	'name'	=> 'password',
	'id'	=> 'password',
	'size'	=> 30,
);
$email = array(
	'name'	=> 'email',
	'id'	=> 'email',
	'value'	=> set_value('email'),
	'maxlength'	=> 80,
	'size'	=> 30,
);
?>
<?php echo form_open($this->uri->uri_string()); ?>
<table>
	<tr>
		<td><?php echo form_label('Password', $password['id']); ?>
		<?php echo form_password($password); ?>
		<span><?php echo form_error($password['name']); ?><?php echo isset($errors[$password['name']])?$errors[$password['name']]:''; ?></span></td>
	</tr>
	<tr>
		<td><?php echo form_label('New email address', $email['id']); ?>
		<?php echo form_input($email); ?>
		<span><?php echo form_error($email['name']); ?><?php echo isset($errors[$email['name']])?$errors[$email['name']]:''; ?></span></td>
	</tr>
</table>
<?php echo form_submit('change', 'Send confirmation email'); ?>
<?php echo form_close(); ?>