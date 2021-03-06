<?php
if (!defined('InternalAccess')) exit('error: 403 Access Denied');
if (empty($Lang) || !is_array($Lang))
	$Lang = array();

$Lang = array_merge($Lang, array(
	'Deleted' => 'Usunięty',
	'Recovered' => 'Odzyskany',
	'Failure_Recovery' => 'Nieudane odzyskanie',

	'Permanently_Deleted' => 'Permamentnie usunięty',
	'Failure_Permanent_Deletion' => 'Nieudane permamentne usunięcie',

	'Sunk' => 'Sunk',
	'Risen' => 'Risen',

	'Lock' => 'Zablokuj',
	'Unlock' => 'Odblokuj',

	'Follow' => 'Śledź',
	'Unfollow' => 'Przestań śledzić',

	'Unsubscribe' => 'Odsubskrybuj',
	'Collect' => 'Subskrybuj',

	'Do_Not_Modify' => 'Nie modyfikuj',
	'Edited' => 'Edytowany',
	'Failure_Edit' => 'Wystąpił błąd podczas edycji'
	));