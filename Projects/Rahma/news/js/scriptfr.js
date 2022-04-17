const gallery = document.getElementById('gallery');
let newCases=[];
let dates=[];
/**
  using fetch to grab 12 users for the page
  then calls the appendUsers function
 */
 

 

async function fetchUser() {

  await fetch('https://newsapi.org/v2/everything?' +
          'q=le virus de corona&'+
          'from=2020-04-10&' +'from=2020-04-11&' +
          'sortBy=popularity&' +
          'apiKey=1191efd329ab4ece8d040ea7189d1dcf')
    .then(response => response.json())
    .then(data => data.articles)
	.then(generateHTML)
	.catch(err => {
		console.log(new Error(err));
		gallery.innerHTML = '<h3>Please wait for our server to update the daily data !</h3>';
	});
}
fetchUser();


function generateHTML(data) {
	
	
	data.map( (user) =>{
	
		
		const section = document.createElement('section');
		gallery.appendChild(section);
		console.log(user.content);
		
	{	section.innerHTML = `
        <div class="card" id="" >
          <div class="card-img-container">
           <img class="card-img" src="${user.urlToImage}" />
         </div>
          
          <div class="card-info-container">
		  <h3>  :${user.title}</h3>
		<p>${user.description}</p>
		<span>auteur: ${user.author} </span>
		<a href="${user.url}">en savoir plus </a>
           
         
          </div>
          </div> `;}}
          );
          }	 
