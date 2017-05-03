<?php $currentPage = basename($_SERVER['SCRIPT_FILENAME']); ?>
 <ul id="nav" class="menu">
  <li><a href="heim.php" <?php if ($currentPage == 'heim.php') {
 echo 'id="here"';} ?>>Heim</a></li>
 <li><a href="innskraning.php" <?php if ($currentPage == 'innskraning.php') {
 echo 'id="here"';} ?>>Innskráning</a></li>
 <li><a href="lid.php" <?php if ($currentPage == 'lid.php') {
 echo 'id="here"';} ?>>Lið</a></li>
 <li><a href="info.php" <?php if ($currentPage == 'info.php') {
 echo 'id="here"';} ?>>Upplýsingar</a></li>
 </ul>
