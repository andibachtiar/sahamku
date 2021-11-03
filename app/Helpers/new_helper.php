<?php

// show form feedback message
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

// Show notification message
function flashMessage()
{
  $string = "
  <div class='alert alert-%s text-center' role='alert'>
    %s
  </div>
  ";

  if (!session()->getFlashData()) {
    return false;
  }
  if (session()->getFlashData('success')) {
    echo sprintf($string, 'success', session()->getFlashData('success'));
  } elseif (session()->getFlashData('danger')) {
    echo sprintf($string, 'danger', session()->getFlashData('danger'));
  }
}

function validInput($field)
{
  $validation = \Config\Services::validation();

  if ($validation->hasError($field)) {
    echo 'is-invalid';
  }
}
