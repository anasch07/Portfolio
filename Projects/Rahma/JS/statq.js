const gallery = document.getElementById('gallery');
let newCases=[];
let dates=[];
/**
  using fetch to grab 12 users for the page
  then calls the appendUsers function
 */
 
 function fetchTotal() {

    fetch('https://api.covid19api.com/summary')
    .then(response => response.json())
    .then(data => data.Countries)
	.then(totalHtml)
	.catch(err => {
		console.log(new Error(err));
		gallery.innerHTML = '<h3>Uh oh! dsqdsq Data!</h3>';
	});
}
 fetchTotal();
 

async function fetchUser() {

   await fetch('https://corona-api.com/countries/TN')
    .then(response => response.json())
    .then(data => data.data)
	.then(generateHTML)
	.catch(err => {
		console.log(new Error(err));
		gallery.innerHTML = '<h3>Please wait for our server to update the daily data !</h3>';
	});
}
fetchUser();
setInterval(fetchTotal,200000)


 function totalHtml(data){
	 const total=document.getElementById('total_cases');
	 data.map(tot=>{
		 if(tot.Country=="Tunisia")
		 {
		
		
		total.innerHTML=`
		<ul><li class="top-li">total cases : ${tot.TotalConfirmed} </li>
		<li class="top-li rec">total Recovered : ${tot.TotalRecovered} </li>
		<li class="top-li">total deaths : ${tot.TotalDeaths} </li>
		<li class="top-li">total new deaths today : ${tot.NewDeaths} </li>
		<li class="top-li">total new  cases : ${tot.NewConfirmed} </li>
		<li class="top-li rec">total new recovered : ${tot.NewRecovered} </li></ul>
	
		`;
		 }
	 });
	 
	 
 }

function generateHTML(data) {
	
	
	data.timeline.map( (user,index) =>{
	
	if(index % 2===0){
		newCases.unshift(user.new_confirmed);
		dates.push('Day '+parseInt(index+1));
	}
		
	
	
		
		const section = document.createElement('section');
		gallery.appendChild(section);
		
		section.innerHTML = `
        <div class="card" id="" >
          <div class="card-img-container">
           <img class="card-img" src="tun.png">
         </div>
          
           <div class="card-info-container">
		    <h3 id="name" class="card-name cap">${" "+user.date}</h2>
			 <p class="card-text" style="font-size:20px;color:black;"> New Cases : <span style="color:red;">${user.new_confirmed}</span ></p>
			 <p class="card-text cap"style="font-size:20px;color:black;">New Deaths : ${user.new_deaths}</p>
			 <p class="card-text cap"style="font-size:20px;color:black;">Total Cases : ${user.confirmed}</p>
			 <p class="card-text cap"style="font-size:20px;color:black;">New Recoveries :<span style="color:green"> ${user.new_recovered}</span></p>
			 <p class="card-text cap"style="font-size:20px;color:black;">Total Deaths : ${user.deaths}</p>
           
         
           </div>
          </div> `;});	}	 

         document.getElementById('upBtn').addEventListener('click',()=>{

            window.scroll(100,0);
         }) ;