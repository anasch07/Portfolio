let cases=[];
let dates=[];
 let labels=[];
 let data=[];
 function fetchUser() {

    fetch('https://corona-api.com/countries/TN')
    .then(response => response.json())
    .then(data => data.data)
	.then(generateHTML)
	.then(chartt)
	.catch(err => {
		console.log(new Error(err));
		
	});
}
fetchUser();

function generateHTML(data) {

	data.timeline.forEach( (user,index) =>{
	

		cases.unshift(user.new_confirmed);
        dates.push('Day '+parseInt(index+1));
  
		
		});	}	 

function chartt(){
let myChart = document.getElementById('chart').getContext('2d');
console.log(cases)
console.log(dates)


var datas = {
   
  labels:[...dates],
  datasets: [{
    label: "Dataset #1",
    backgroundColor: "rgb(129, 240, 135)",
    borderColor: "rgba(255,99,132,1)",
    borderWidth: 1,
    hoverBackgroundColor: "rgba(255,99,132,0.4)",
    hoverBorderColor: "rgba(255,99,132,1)",
    data:[...cases],
  }]
};

var options = {
  maintainAspectRatio: true,
  scales: {
    yAxes: [{
      stacked: true,
      gridLines: {
        display: true,
        color: "rgba(255,99,132,0.2)"
      }
    }],
    xAxes: [{
      gridLines: {
        display: false
      }
    }]
  }
};

Chart.Line('chart', {
  options: options,
  data: datas
});
    
}
