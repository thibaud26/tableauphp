 <!DOCTYPE html>
<html>
  <head>
    <title>Tabl'o !</title>
    <meta charset="utf-8">
    <style type='text/css'>
      table { border-collapse:collapse; margin:1em; }
      td { border:1px solid black; padding:.7em .5em; }
      table caption { caption-side:bottom; font-style:italic; }
    </style>
  </head>
  <body>
    <table>
      <tbody>
<?php
for($row=1; $row<=5; $row++) {
  echo "        <tr>\n";
  for($col=1; $col<=5; $col++) {
    echo "          <td>$row</td>\n";
  }
  echo "        </tr>\n";
}
?>
      </tbody>
      <caption align="bottom">
        Oh le joli tableau
      </caption>
    </table>
  </body>
</html>