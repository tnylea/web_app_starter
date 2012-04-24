<?php
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
		<td><?php echo form_label('Email Address', $email['id']); ?>
		<?php echo form_input($email); ?>
		<span><?php echo form_error($email['name']); ?><?php echo isset($errors[$email['name']])?$errors[$email['name']]:''; ?></span>
	</tr>
</table>
<?php echo form_submit('send', 'Send'); ?>
<?php echo form_close(); ?>