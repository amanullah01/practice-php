<?php
  echo "<h2>Example #1 Anonymous function example</h2>";
  echo preg_replace_callback('~-([a-z])~', function ($match) {
      return strtoupper($match[1]);
  }, 'hello-world-people');
?>
