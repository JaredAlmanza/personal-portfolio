<?php
if ($page=="home.php")
echo'
	  <li class="active"><a href="index.php"><i class="fa fa-home"></i> <em>Home</em></a></li>
      <li><a href="index.php?page=work"><i class="fa fa-user"></i> <em>Work & Goals</em></a></li>
      <li><a href="index.php?page=hobbies"><i class="fa fa-pencil"></i> <em>Hobbies</em></a></li>
      <li><a href="index.php?page=school"><i class="fa fa-image"></i> <em>School</em></a></li>
      <li><a href="index.php?page=contact"><i class="fa fa-envelope"></i> <em>Contact</em></a></li>';

elseif($page=="work.php")
echo'
	  <li><a href="index.php"><i class="fa fa-home"></i> <em>Home</em></a></li>
      <li class="active"><a href="index.php?page=work"><i class="fa fa-user"></i> <em>Work & Goals</em></a></li>
      <li><a href="index.php?page=hobbies"><i class="fa fa-pencil"></i> <em>Hobbies</em></a></li>
      <li><a href="index.php?page=school"><i class="fa fa-image"></i> <em>School</em></a></li>
      <li><a href="index.php?page=contact"><i class="fa fa-envelope"></i> <em>Contact</em></a></li>';

elseif($page=="hobbies.php")
echo'
	  <li><a href="index.php"><i class="fa fa-home"></i> <em>Home</em></a></li>
      <li><a href="index.php?page=work"><i class="fa fa-user"></i> <em>Work & Goals</em></a></li>
      <li class="active"><a href="index.php?page=hobbies"><i class="fa fa-pencil"></i> <em>Hobbies</em></a></li>
      <li><a href="index.php?page=school"><i class="fa fa-image"></i> <em>School</em></a></li>
      <li><a href="index.php?page=contact"><i class="fa fa-envelope"></i> <em>Contact</em></a></li>';

elseif($page=="school.php")
echo'
	  <li><a href="index.php"><i class="fa fa-home"></i> <em>Home</em></a></li>
      <li><a href="index.php?page=work"><i class="fa fa-user"></i> <em>Work & Goals</em></a></li>
      <li><a href="index.php?page=hobbies"><i class="fa fa-pencil"></i> <em>Hobbies</em></a></li>
      <li class="active"><a href="index.php?page=school"><i class="fa fa-image"></i> <em>School</em></a></li>
      <li><a href="index.php?page=contact"><i class="fa fa-envelope"></i> <em>Contact</em></a></li>';

elseif($page=="contact.php")
echo'
	  <li><a href="index.php"><i class="fa fa-home"></i> <em>Home</em></a></li>
      <li><a href="index.php?page=work"><i class="fa fa-user"></i> <em>Work & Goals</em></a></li>
      <li><a href="index.php?page=hobbies"><i class="fa fa-pencil"></i> <em>Hobbies</em></a></li>
      <li><a href="index.php?page=school"><i class="fa fa-image"></i> <em>School</em></a></li>
      <li class="active"><a href="index.php?page=contact"><i class="fa fa-envelope"></i> <em>Contact</em></a></li>';
elseif($page=="results.php")
echo'
	  <li><a href="index.php"><i class="fa fa-home"></i> <em>Home</em></a></li>
      <li><a href="index.php?page=work"><i class="fa fa-user"></i> <em>Work & Goals</em></a></li>
      <li><a href="index.php?page=hobbies"><i class="fa fa-pencil"></i> <em>Hobbies</em></a></li>
      <li><a href="index.php?page=school"><i class="fa fa-image"></i> <em>School</em></a></li>
      <li><a href="index.php?page=contact"><i class="fa fa-envelope"></i> <em>Contact</em></a></li>';
?>