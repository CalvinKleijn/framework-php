<?php

require(ROOT . "model/BirthdayModel.php");

function index()
{
	render("birthdays/index", array(
		'birthdays' => getAllBirthdays()
	));
}

function create() 
{
	render("birthdays/create");
}

function createSave() 
{
	createBirthday();
	header("Location: /framework");	
}

function delete($id) 
{
	deleteBirthday($id);
	header("Location: /framework");
}

function edit($id) 
{
	render("birthdays/edit", array(
		'getUsers' => getBirthday($id)
	));
}

function editSave($id) 
{
	editBirthday($id);
	header("Location: /framework");
}
