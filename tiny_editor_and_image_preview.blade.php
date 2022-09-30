@extends('master')

@section('content')

<!-- custom css -->

<style>
	.myfont1
	{
		font-family: 'Kanit', sans-serif;
      	font-size: 13px;
      	color: black;
	}
</style>

<!-- #custom css -->


<script src="https://cdn.tiny.cloud/1/vxv33glskyry4ffcpp9c92z6gg5eni6qv81imcmz1n8fjse6/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>



<!--==================================================
Global Page Section Start
================================================== -->
<section class="global-page-header">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block">
          <h3>Create your project details here</h3>
          <div class="shortcut1 portfolio-meta">
            <span>Todays date: {{date('d-m-y')}}</span>|
            <span> Category: WEB TECHNOLOGY</span>|
            <span> Tags: Laravel, React</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--/#Page header-->


<!--
==================================================
Banner Section of Project
================================================== -->


<section class="single-post" style="margin-top:-5%;">
	<div class="container">
    	<div class="row">
      		<a align="right" href="/portfolio" class="shortcut1">Back to all projects</a>
    	</div>

    	<div class="myfont1 row">

    		<h4 style="font-family: 'Kanit', sans-serif;">Projects details</h4>

    		<form class="form" enctype="multipart/form-data">

		      	<div class="form-group">
		      		<label>Enter Your Project Title</label>
		      		<input class="form-control" type="text" name="" placeholder="Title">
		      	</div>

		      	<div class="form-group">
		      		<div class="row">
		      			<div id="left" class="col-sm-6" style="float:left;">
		      				<div class="form-group">	
						      	<label>Select the technology tags</label>
								    <div class="form-check ">
										<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
										<label class="form-check-label" for="flexCheckDefault">Laravel</label>
									</div>
									<div class="form-check ">
										<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
										<label class="form-check-label" for="flexCheckDefault">React</label>
									</div>
									<div class="form-check">
										<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
										<label class="form-check-label" for="flexCheckDefault">Django</label>
									</div>
							</div>
		      			</div>

		      			<div id="right" class="col-sm-5" style="float:right;">
		      					<p id="image_name" class="myfont1"></p>
								<img id="output_image" height="200" width="400"  title="">
		      			</div>
		      		</div>
		      	</div>

				<div class="form-group col-sm-5" >
				    <label>Add your banner photo</label>
				    <input class="form-control"  type="file" name="" placeholder="Title" onchange="loadFile(event)">
				</div>

				<div class="form-group">
					<p>&nbsp;</p>
				</div>

				<div class="form-group">
					<textarea> Welcome to TinyMCE!</textarea>
				</div>
    		</form>

    	<form class="row col-sm-7" method="post" action=" ">
    		<div class="form-group">
				<label>Features Number</label>
				<input class="form-control" type="Number" min="1" max="10" name="feature" placeholder="minmum 1 and maximum 10">
			</div>
			<div class="form-group">
				<button class="btn btn-sm btn-success" type="submit" name="save">submit</button>
			</div>
		</form>
    </div>
  </div>
</section>

<!-- Image preview using jquery -->
<script>

	var loadFile = function (event)
	{
		var image_output = document.getElementById("output_image");
		image_output.src = URL.createObjectURL(event.target.files[0]);
		//image_output.title='your image preview';

		 document.getElementById("image_name").innerHTML = "Your banner image is previewing...";
	} ;
</script>


<!-- #Image preview using jquery -->




<!-- TinyMCE -->
    <script src="https://cdn.tiny.cloud/1/vxv33glskyry4ffcpp9c92z6gg5eni6qv81imcmz1n8fjse6/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
    tinymce.init({
      selector: 'textarea',
      plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage tinycomments tableofcontents footnotes mergetags autocorrect',
      toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Author name',
      mergetags_list: [
        { value: 'First.Name', title: 'First Name' },
        { value: 'Email', title: 'Email' },
      ]
    });
  </script>


<!-- #TinyMCE -->

@endsection
