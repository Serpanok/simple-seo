<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<title>Simpe SEO analyzer</title>
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="/css/styles.css" />
</head>

<body>
	<section class="container mt-3">
		<div class="row">
			<div class="col-md-12 col-lg-4 col-xl-3">
				<h1>Simpe SEO analyzer</h1>
			
				<form id="analyzerForm">
					<div class="form-group">
						<label for="exampleInputEmail1">URL</label>
						<input name="url" type="url" class="form-control" placeholder="for analyze..." id="analyzerForm_url" required value="http://simpleseo.space-ship.xyz/debugPage.html">
						<div class="invalid-feedback">Incorrect URL.</div>
						<small id="emailHelp" class="form-text text-muted">Ex.: http://google.com</small>
					</div>
					<div class="form-group form-check">
						<input name="title" type="checkbox" class="form-check-input" id="analyzerForm_title" checked>
						<label class="form-check-label" for="analyzerForm_title">Get <em>&lt;title&gt;...&lt;/title&gt;</em> value</label>
					</div>
					<div class="form-group form-check">
						<input name="description" type="checkbox" class="form-check-input" id="analyzerForm_description" checked>
						<label class="form-check-label" for="analyzerForm_description">Get <em>&lt;meta name="Description" content="..."/&gt;</em> value</label>
					</div>
					<div class="form-group form-check">
						<input name="links" type="checkbox" class="form-check-input" id="analyzerForm_links" checked>
						<label class="form-check-label" for="analyzerForm_links">Get <em>number of internal links</em></label>
					</div>
					<div class="form-group form-check">
						<input name="h1" type="checkbox" class="form-check-input" id="analyzerForm_h1" checked>
						<label class="form-check-label" for="analyzerForm_h1">Get <em>&lt;h1&gt;...&lt;/h1&gt;</em> value</label>
					</div>
					<div class="text-danger mb-3 d-none" id="analyzerForm_selectError">Select analyzing parameters.</div>
					
					<div class="row">
						<div class="col-sm-8">
							<button type="submit" class="btn btn-success btn-block">Send</button>
						</div>
						<div class="col-sm-4">
							<button type="reset" class="btn btn-secondary btn-block">Clear</button>
						</div>
					</div>
				</form>
			</div>
			<div class="col-md-12 col-lg-8 col-xl-9 d-none" id="results">
				<h2 class="mb-3">Results</h2>
				<dl class="row">
					<dt class="col-sm-3">URL</dt>
					<dd class="col-sm-9">
						<a href="" id="results_url_value" target="_blank"></a>
					</dd>
					
					<dt class="col-sm-3 d-none" id="results_title">Title</dt>
					<dd class="col-sm-9 d-none" id="results_title_value"></dd>
					
					<dt class="col-sm-3 d-none" id="results_description">Description meta</dt>
					<dd class="col-sm-9 d-none" id="results_description_value"></dd>
					
					<dt class="col-sm-3 d-none" id="results_links">Number of internal links</dt>
					<dd class="col-sm-9 d-none" id="results_links_value"></dd>
					
					<dt class="col-sm-3 d-none" id="results_h1">H1 value</dt>
					<dd class="col-sm-9 d-none" id="results_h1_value"></dd>
				</dl>
			</div>
		</div>
	</section>
	
	<script type="text/javascript" src="/js/scripts.js"></script>
</body>
</html>
