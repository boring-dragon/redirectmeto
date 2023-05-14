<?php
// What, you were expecting more to it?
if (($path = ltrim($_SERVER['REQUEST_URI'], '/')) && !in_array(substr($path, 0, 1), array('?', '#', '/'))) {
  header("Location: $path");
  exit;
}
?>
<!doctype html>
<html>
  <head>
    <title>OAuth spoof.</title>
  </head>
  <body>
    <h1>OAuth spoof</h1>
    <div>
      <h2>sample request</h2>
      <p><a href="https://7twgqmvjugqwb3jq4927.cleaver.rocks/https://www.google.com/search?q=boring-dragon" target="_new">https://7twgqmvjugqwb3jq4927.cleaver.rocks/https://www.google.com/search?q=boring-dragon</a></p>
    </div>
  </body>
</html>
