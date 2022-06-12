
const hamburger = document.querySelector(".hamburger") ; 
const sidebar = document.querySelector(".sidebar") ; 

hamburger.addEventListener("click",()=>{
    hamburger.classList.toggle("active"); 
    sidebar.classList.toggle("active") ; 
})

var labels = [
    'Sunday',
    'Monday',
    'Tuesday',
    'Wednesday',
    'Thursday',
    'Friday',
    'Saturday',
  ];

  var data = {
    labels: labels,
    datasets: [{
      label: 'My First dataset',
      backgroundColor: 'rgb(92 176 255)',
      data: [7.8, 8, 7.5, 6, 7.8, 8.5, 8.2],
    }]
  };

  const config = {
    type: 'bar',
    data: data,
    options: {}
  };
  const myChart = new Chart(
    document.getElementById('barGraph'),
    config
  );
  var labels1 = [
    "GoodSleep",
    "badSleep"
  ];

  var data1 = {
    labels: labels1,
    datasets: [{
      label: 'My First dataset',
      backgroundColor: ['rgb(92 176 255)','rgb(189,233,255)'],
      data: [70,30],
    }]
  };

  const config1 = {
    type: 'doughnut',
    data: data1,
    options: {}
  };
  const myChart1 = new Chart(
    document.getElementById('pieChart'),
    config1
  );
