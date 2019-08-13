<?php
function getScripts($level)
{
  $lvl = '';
  for ($i = 0; $i < $level; $i++) {
    $lvl .= '../';
  }
  echo '<script src="' . $lvl . 'assets/js/jquery3.3.5.min.js"></script><script src="' . $lvl . 'assets/js/popper.min.js"></script><script src="' . $lvl . 'assets/js/bootstrap.min.js"></script>';
}
