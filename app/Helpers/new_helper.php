<?php


function feedback($field)
{
  $validation = \Config\Services::validation();

  $string = "
    <div class='text-danger'>
      %s
    </div>
  ";

  if ($validation->hasError($field)) {
    echo sprintf($string, $validation->getError($field));
  } else {
    return false;
  }
}

function flashMessage($flash, $type)
{
  $string = "
  <div class='alert alert-%s' role='alert'>
    %s
  </div>
  ";

  if ($flash) {
    echo sprintf($string, $type, $flash);
  } else {
    return false;
  }
}
