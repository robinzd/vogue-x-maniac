// API url
const api_url =
"https://vogue-x-maniac.herokuapp.com/index.php";

// Defining async function
async function getapi(url) {

	// Storing response
	const response = await fetch(url);

	// Storing data in form of JSON
	var apidata = await response.json();
	console.log(apidata);
	if (response) {
		hideSpinner();
	}
	document.getElementsByClassName("jumping-dots-loader").innerHTML
		= `<h1>${apidata.data}</h1>`;
}

// Calling that async function
getapi(api_url);

// Function to hide the Spinner
function hideSpinner() {
	document.getElementById('page-content')
			.style.display = 'none';
}
