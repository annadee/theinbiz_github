<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN""http://www.w3.org/TR/html4/transitional.dtd" >
<!--
Desired Functionality: This is a stripped down version of a 'New Product'
form I 'm developing for an online marketplace. I'
ve stripped off most of the functional code.However,
I need help with the image management feature.This feature is almost entirely contained within the < div class = 'pimage_container' > element,
except
for the file upload input which is just before it.I have provided the rest of the page
for context.
I would like the image management section to have the following features: 1.Ajax image upload(I don 't need the destination php).
				a) max number of images should be a definable variable, use 4 for now, but it should be able to allow up to 8 if I change my mind.
			2. Ajax image deletion: preferably via clicking on an '
x ' icon that appears in the upper right corner of the image when mouse hovers over image.
			3. Draggable/sortable with ajax updating (all these ajax functions can point to the same php)
			4. Degrades nicely when scripts not enabled:
				a) radio button for selecting default image
				b) checkbox for image deletion on submit
		I would like all transitions to be smooth (e.g. fading in/out and/or sliding to fit available space.
-->
<html>
<head>
	<title>Need to get this Page Looking sharp with Ajax and JQuery</title>
	<meta http-equiv="content-type" content="text/html;charset=UTF-8">
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.23/jquery-ui.min.js"></script>
	<link rel="stylesheet" type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.23/themes/smoothness/jquery-ui.css">
	<link type="text/css" rel="stylesheet" href="css/new_product.css">
</head>
<body>
	<button>Change Content</button>
	<div id="main"></div>
	<form id="myform" method="post" enctype="multipart/form-data" action="#">
		<div id="pcontainer">
		    <div class="pheader">
		      	<p>Enter new product info for <input id="copy" type="button" value="copy" class="button" /> from <select><option value="1">Product1</option><option value="2">Product2</option><option value="3">Product3</option><option value="4">Product4</option></select>
		      	</p>
		    </div>
			<div class="pwrapper">
				<div class="pleftcol">
					<p><label for="pname">Product Name</label></p>
					<p><label for="pcat">Product Category</label></p>
					<p><label for="pinv">Inventory</label></p>
				</div>
				<div class="prightcol">
					<p><input id="pname" type="text" name="product_name" maxlength="63" size="36" value="" /></p>
					<p><select id="pcat"><option value="1">Category1</option><option value="2">Category2</option><option value="3">Category3</option><option value="4">Category4</option></select></p>
					<p><select id="pinv"><option value="1">Inventory1</option><option value="2">Inventory2</option><option value="3">Inventory3</option><option value="4">Inventory4</option></select></p>
				</div>
			</div>
			<div style="clear:both;"></div>
			<div class="pckedit">
				<fieldset>
					<legend align="left">Product Description</legend>
					<script type="text/javascript" src="js/ckeditor/ckeditor.js"></script>
					<noscript><p>You may use bbcode here</p></noscript>
					<textarea id="editor1" cols="80" name="product_description" rows="10">I will be using ckeditor here.</textarea>
				</fieldset>
			</div>
			<div style="clear:both;"></div>
			<div class="pwrapper">
				<div class="pleftcol">
					<p><label for="pprice">Product Price</label></p>
					<p><label for="pimage">Add Image</label></p>
				</div>
				<div class="prightcol">
					<p><input id="pprice" type="number" name="product_price" size="8" value="10"/></p>
					<p><input id="pimage" type="file" name="image1" /></p>
				</div>
			</div>
			<div style="clear:both;"></div>
			<div class="pimage_container">
				<div class="default_image">
					<p><input type="radio" name="default_image" value="1" checked="checked"/></p>
					<p><input type="radio" name="default_image" value="2"/></p>
					<p><input type="radio" name="default_image" value="3"/></p>
					<p><input type="radio" name="default_image" value="4"/></p>
				</div>
				<div class="pthumbnails">
					<div class="thumbnail_container">
						<img src="http://s3.amazonaws.com/inbiz_images/thumbs/inbiz_image_5049193a8ac38.png" alt="Image Name"/>
					</div>
					<div class="thumbnail_container">
						<img src="http://s3.amazonaws.com/inbiz_images/thumbs/inbiz_image_5049193a8ac38.png" alt="Image Name"/>
					</div>
					<div class="thumbnail_container">
						<img src="http://s3.amazonaws.com/inbiz_images/thumbs/inbiz_image_5049193a8ac38.png" alt="Image Name"/>
					</div>
					<div class="thumbnail_container">	
						<img src="http://s3.amazonaws.com/inbiz_images/thumbs/inbiz_image_5049193a8ac38.png" alt="Image Name"/>
					</div>
				</div>
			</div>
			<div class="pfooter">
				<div id="form_buttons">
					<button name="btnSubmit" value="true" type="submit" class="button">Save Changes</button>
					<button name="btnReset" type="reset" class="button">Reset Form</button>
				</div>
			</div>
		</div>
	</form>
</body>
</html>