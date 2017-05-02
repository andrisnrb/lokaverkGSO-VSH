<?php $currentPage = basename($_SERVER['SCRIPT_FILENAME']); ?>
 <ul id="nav">
  <li><a href="Heim.php" <?php if ($currentPage == 'Heim.php') {
 echo 'id="here"';} ?>>Heim</a></li>
 <li><a href="innskraning.php" <?php if ($currentPage == 'innskraning.php') {
 echo 'id="here"';} ?>>Innskráning</a></li>
 <li><a href="Lid.php" <?php if ($currentPage == 'Lid.php') {
 echo 'id="here"';} ?>>Lið</a></li>
 <li><a href="Info.php" <?php if ($currentPage == 'Info.php') {
 echo 'id="here"';} ?>>Upplýsingar</a></li>
 </ul>