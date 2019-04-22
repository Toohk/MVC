<?php 

$title = 'Mon blog';

ob_start();

echo
'
    <h1>Bienvenue</h1>
    <p>Liste des utilisateurs:</p>
';
foreach($users as $user):
    echo $user->username().'<br/>';
endforeach;

$content = ob_get_clean(); 

