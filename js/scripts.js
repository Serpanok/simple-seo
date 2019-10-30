"use strict";

let form = {
	form: document.getElementById('analyzerForm'),
	
	url: document.getElementById('analyzerForm_url'),
	title: document.getElementById('analyzerForm_title'),
	description: document.getElementById('analyzerForm_description'),
	links: document.getElementById('analyzerForm_links'),
	h1: document.getElementById('analyzerForm_h1'),
}

let results = {
	block: document.getElementById('results'),
	
	url: {
		value: document.getElementById('results_url_value'),
	},
	title: {
		title: document.getElementById('results_title'),
		value: document.getElementById('results_title_value'),
	},
	description: {
		title: document.getElementById('results_description'),
		value: document.getElementById('results_description_value'),
	},
	links: {
		title: document.getElementById('results_links'),
		value: document.getElementById('results_links_value'),
	},
	h1: {
		title: document.getElementById('results_h1'),
		value: document.getElementById('results_h1_value'),
	}
}
let loadingText = 'analyzing...'

form.form.addEventListener('submit', function(event){
	event.preventDefault()
	
	let url = '/app/analyzerAPI.php?url=' + form.url.value
	if(form.title.checked) url += '&title=1'
	if(form.description.checked) url += '&description=1'
	if(form.links.checked) url += '&links=1'
	if(form.h1.checked) url += '&h1=1'
	
	results.block.classList.remove('d-none')
	results.url.value.textContent = form.url.value
	
	results.title.title.classList[form.title.checked ? 'remove' : 'add']('d-none')
	results.title.value.classList[form.title.checked ? 'remove' : 'add']('d-none')
	results.title.value.innerHTML = loadingText
	
	results.description.title.classList[form.description.checked ? 'remove' : 'add']('d-none')
	results.description.value.classList[form.description.checked ? 'remove' : 'add']('d-none')
	results.description.value.innerHTML = loadingText
	
	results.links.title.classList[form.links.checked ? 'remove' : 'add']('d-none')
	results.links.value.classList[form.links.checked ? 'remove' : 'add']('d-none')
	results.links.value.innerHTML = loadingText
	
	results.h1.title.classList[form.h1.checked ? 'remove' : 'add']('d-none')
	results.h1.value.classList[form.h1.checked ? 'remove' : 'add']('d-none')
	results.h1.value.innerHTML = loadingText
	
  	// XHR Request
	
	// ...
	
})
