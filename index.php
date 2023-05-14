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
    <title>RedirectMeTo - A simple tool for redirecting you.</title>
    <style type="text/css">
      body {
        font-family: monospace;
        font-size: 22px;
        text-align: center;
        word-break: break-all;
      }
      h1 {
        font-size: 100px;
      }
      div {
        margin-top: 100px;
      }
      @media only screen and (max-width: 800px) {
        body {
          font-size: 18px;
        }
        h1 {
          font-size: 60px;
        }
      }
    </style>
  </head>
  <body>
    <h1>RedirectMeTo</h1>
    <div>
      <h2>EXAMPLES</h2>
      <p><a href="https://redirectmeto.com/https://www.google.com/search?q=puppies" target="_new">https://redirectmeto.com/https://www.google.com/search?q=puppies</a></p>
      <p><a href="http://redirectmeto.com/http://localhost:4000/oauth/authorize" target="_new">http://redirectmeto.com/http://localhost:4000/oauth/authorize</a></p>
      <p><a href="http://redirectmeto.com/http://client.dev/page" target="_new">http://redirectmeto.com/http://client.dev/page</a></p>
    </div>
  </body>
</html>
