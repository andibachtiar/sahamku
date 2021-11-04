<?php

function userId()
{
  if (session()->get('loggedIn')) {
    return session()->get('loggedIn');
  }
}

function userRole()
{
  if (session()->get('loggedIn')) {
    $db = \Config\Database::connect();
    $builder = $db->table('users')->where('id_user', session()->get('loggedin'));
  }
}

function userEmail()
{
  if (session()->get('loggedIn')) {
    $db = \Config\Database::connect();
    $builder = $db->table('users')->where('id_user', session()->get('loggedin'));
    $builder->get()->getResult();
  }
}
