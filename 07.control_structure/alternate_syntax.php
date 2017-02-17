<?php
  $a = 40;
  $b = 30;

  if($a > $b): ?>
    <h1>A is grather then B</h1>
  <?php elseif($a == $b): ?>
    <h2>A is equal to B</h2>
  <?php else: ?>
    <h3>A is less then B</h3>
  <?php endif; ?>
