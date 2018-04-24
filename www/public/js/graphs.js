
//Bounce rate
var options = {
	type: 'line',
	data: {
		labels: ["Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre"],
		datasets: [
		{
			label: 'Nombre de visites',
			data: [15,8,12,14,8,6,10,13,8,11,7,2],
			backgroundColor: "rgba(71,178,255,0.5)",
			strokeColor: "rgb(20,130,209)",
			borderWidth: 1
		}
		]
	},
	options: {
		responsive: true,
		maintainAspectRatio: true,
		scales: {
			yAxes: [{
				ticks: {
					reverse: false,
					beginAtZero: true
				}
			}]
		}
	}
}
var ctx = document.getElementById('bounceRate').getContext('2d');
var chart1 = new Chart(ctx, options);

//Bar chart
var ctx = document.getElementById('devicesBarChart').getContext('2d');
var chart2 = new Chart(ctx, {
	type: 'bar',
	data: {
		labels : ["Mobile","Ordinateur"],
		datasets : [
		{	
			label: 'Utilisateurs sur mobile',
			backgroundColor : ["rgba(255,147,176,0.7)"],
			strokeColor : ["rgb(255,147,176)"],
			data : [20]
		},
		{	
			label: 'Utilisateurs sur ordinateur',
			backgroundColor : ["rgba(71,178,255,0.7)"],
			strokeColor : ["rgb(71,178,255)"],
			data : [10]
		}
		]

	},

	options: {
		responsive: true,
		maintainAspectRatio: true,
		scales: {
			yAxes: [{
				ticks: {
					beginAtZero:true
				}
			}]
		}
	}
});

//Double line chart

var optionsDouble = {
	type: 'line',
	data: {
		labels: ["Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre"],
		datasets: [

		{
			label: 'Période de comparaison',
			data: [12, 19, 3, 5, 2, 3, 8, 15, 6, 10, 4, 3],
			borderColor : ["rgb(66,197,244)"],
			fill: false,
			borderWidth: 1
		},
		{
			label: 'Période en cours',
			data: [7, 5, 12, 15, 1, 6, 3, 5, 2, 13, 8, 5],
			borderColor : ["rgb(25,75,158)"],
			fill: false,
			borderWidth: 2
		}
		]
	},
	options: {
		responsive: true,
		maintainAspectRatio: true,
		scales: {
			yAxes: [{
				ticks: {
					reverse: false
				}
			}]
		}
	}
}
var ctx2 = document.getElementById('doubleLineChart').getContext('2d');
var chart3 = new Chart(ctx2, optionsDouble);
