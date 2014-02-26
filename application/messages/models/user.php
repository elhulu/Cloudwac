<?php

return array(
    'username' => array(
        'not_empty' => 'Merci de fournir un nom d\'utilisateur.',
        'min_length' => 'Le nom d\'utilisateur doit avoir au moins :param2 caractères.',
        'max_length' => 'Le nom d\'utilisateur doit avoir au maximum :param2 caractères.',
        'username_available' => 'Ce nom d\'utilisateur est déjà pris.',
        'unique' =>  'Ce nom d\'utilisateur est déjà pris',
    ),
    'email' => array(
        'not_empty' => 'Vous devez entrer une adresse email.',
        'min_length' => 'Email trop court, :param2 caractères minimum.',
        'max_length' => 'Email trop long, :param2 caractères maximum.',
        'email' =>	'Email invalide.',
        'email_available' => 'Cet email est déjà pris.',
    )
);
?>