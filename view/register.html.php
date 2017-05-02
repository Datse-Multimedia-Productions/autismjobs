<?php 

$title="Autism Jobs - Home";
$pageHead="Autism Jobs Home Page";

require_once("includes/header.html.php");
?>
<p>We were reading (more scanning) on Hacker News about someone who created a website for older people in the tech industry, so decided to give it a try to do similar for Autistic people, and companies supporting Autistics</p>

<?php
require("includes/actions.html.include.php");
?>

<h2>Add A Job Listing</h2>

<?php include("includes/register.form.html.include.php"); ?>

<h2>Job Listings</h2>
<p>Here are your job listings</p>
<ul>
	<li><a href="job00001.html">Autism Jobs Quality Assurance</a></li>
</ul>

<?php require_once("includes/footer.html.php"); ?>
