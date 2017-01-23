<?php

// Initialisation
require_once('../includes/init.php');

// Require the user to be logged in before they can see this page.
// Auth::getInstance()->requireLogin();

// Set the title, show the page header, then the rest of the HTML
$page_title = 'Moderator';
include('../includes/header.php');
?>


<div class="row">
	<div class="col-xs-12 col-md-12 col-lg-12">
	    <h4 class="modifiedH4">Thanks for authorizing...
		<br><span class="modifiedH4 moderatorName"><?php echo "Moderator"; ?></span></h4>
		<hr class="modPageHr" />
		<p><a href="pages/logout.php">Log out</a></p>
	</div>
</div>

<br><br><br>
<div class="row ">
	<div class="col-xs-12 col-md-6 col-lg-6">
	    <h2 class="modifiedH4">List of all Items (click to add)</h2>
		<div class="itemsList" id="itemsList">
		    <a class="itemContent" href="#">
			    <div class="item">
			        PC Chicken Breasts <br> CAD $15
			    </div>
			</a>
			<a class="itemContent" href="#">
				<div class="item">
					Compliments Eye of Round Beef <br> CAD $25
				</div>
			</a>
			<a class="itemContent" href="#">
				<div class="item">
					Livewell Noodles <br> CAD $5
				</div>
			</a>
			<a class="itemContent" href="#">
				<div class="item">
					PC Shrimp Chowmein <br> CAD $25
				</div>
			</a>
			<a class="itemContent" href="#">
				<div class="item">
					BG Souvlaki Chicken <br> CAD $25
				</div>
			</a>
			<a class="itemContent" href="#">
				<div class="item">
					Compliments Souvlaki Beef <br> CAD $18
				</div>
			</a>
			<a class="itemContent" href="#">
				<div class="item">
					BeFree Lime <br> CAD $2
				</div>
			</a>
		</div>
	</div>
	<div class="col-xs-12 col-md-6 col-lg-6">
	    <h2 class="modifiedH4">Selected Items</h2>
	    <div class="selectedItemsList">
		    <div class="selectedItems"></div>
		    <div class="col-xs-12 col-md-9 col-lg-9">
			    <h4 class="modifiedH4">Describe the recipe</h4>
				<textarea class="modifiedH4" name="recipeDescription" id="recipeDescription"></textarea>
		    </div>
			<div class="col-xs-12 col-md-3 col-lg-3">
			    <button class="postBtn">POST</button>
			</div>
		</div>
	</div>
</div>
<br><br><br><br>
<div class="row">
	<div class="col-xs-12 col-md-12 col-lg-12">
	    <hr class="modPageHr"/><h4 class="modifiedH4 moderatorName">Showing all Recipes</h4><hr class="modPageHr"/>
		<div class="recipes"></div>
	</div>
</div>


<?php
include('../includes/footer.php');
?>
