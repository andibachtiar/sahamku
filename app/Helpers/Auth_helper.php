<?php


function loggedIn()
{
  if (session()->get('loggedIn')) {
    return session()->get('loggedIn') ? session()->get('loggedIn') : false;
  }
}

function user()
{
  $db = \Config\Database::connect();
  return $db->table('users')->where('id_user', loggedIn())->get()->getFirstRow();
}

function inGroup($group)
{
  $role = user()->role;
  return $role === $group ? true : false;
}
