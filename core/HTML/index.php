<?php
require './Form.php';
require './BootstrapForm.php';


use \Core\HTML\BootstrapForm;
use \Core\HTML\Form;


$form = new BootstrapForm(
	array(
		'username' => 'Roger',
		'password' => 'toto'
	)
);
echo $form->input('username');
echo $form->input('password');
echo $form->submit();