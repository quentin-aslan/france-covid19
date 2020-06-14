// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#858796';

$(() => {
  // FRANCE
  searchCountry('France');


  generateTable();
  function generateTable() {

    // Nombre d'infecter par jour
    let casesDatas = ['191', '212', '285', '423', '613', '949', '1126', '1412', '1784', '2281', '2876', '3661', '4499', '5423', '6633', '7730', '9134', '10995', '12612', '14459', '16008', '19856', '22302', '25230', '29155', '32964', '37575', '40174', '44550', '52128', '56989', '59105', '64338', '68605', '70478', '74389'];
    let deadDatas = ['0', '4', '4', '7', '11', '16', '19', '30', '33', '48', '61', '79', '91', '127', '148', '175', '264', '372', '450', '562', '674', '860', '1100', '1331', '1696', '1995', '2314', '2606', '3024', '3523', '4032', '4503', '5091', '5532', '5889', '6494'];

    var ctx = document.getElementById("myAreaChart");
    ctx.height = 450;
    var myLineChart = new Chart(ctx, {
      type: 'line',
      data: {
        labels: ["02/03", "03/03", "04/03", "05/03", "06/03", "07/03", "08/03", "09/03", "10/03", "11/03", "12/03", "13/03", "14/03", "15/03", "16/03", "17/03", "18/03", "19/03", "20/03", "21/03", "22/03", "23/03", "24/03", "25/03", "26/03", "27/03", "28/03", "29/03", "30/03", "31/03", "01/04", "02/04", "03/04", "04/04", "05/04", "06/04"],
        datasets: [
          { // INFECTES
            label: "infectés",
            lineTension: 0.3,
            backgroundColor: "rgba(78, 115, 223, 0.05)",
            borderColor: "rgb(236, 191, 2)",
            pointRadius: 3,
            pointBackgroundColor: "rgb(255, 204, 0)",
            pointBorderColor: "rgb(255, 204, 0)",
            pointHoverRadius: 3,
            pointHoverBackgroundColor: "rgb(236, 191, 2)",
            pointHoverBorderColor: "rgb(236, 191, 2)",
            pointHitRadius: 10,
            pointBorderWidth: 2,
            data: casesDatas,
          },
          { // MORT
            label: "Morts",
            lineTension: 0.3,
            backgroundColor: "rgba(78, 115, 223, 0.05)",
            borderColor: "rgb(177, 0, 0)",
            pointRadius: 3,
            pointBackgroundColor: "rgb(220, 0, 0)",
            pointBorderColor: "rgb(220, 0, 0)",
            pointHoverRadius: 3,
            pointHoverBackgroundColor: "rgb(177, 0, 0)",
            pointHoverBorderColor: "rgb(177, 0, 0)",
            pointHitRadius: 10,
            pointBorderWidth: 2,
            data: deadDatas,
          }
        ],
      },
      options: {
        maintainAspectRatio: false,
        layout: {
          padding: {
            left: 10,
            right: 25,
            top: 25,
            bottom: 0
          }
        },
        scales: {
          xAxes: [{
            time: {
              unit: 'date'
            },
            gridLines: {
              display: false,
              drawBorder: false
            },
            ticks: {
              maxTicksLimit: 20
            }
          }],
          yAxes: [{
            ticks: {
              suggestedMin: 2000,
              suggestedMax: 40000,
              padding: 0,
              // Include a dollar sign in the ticks
              callback: function (value, index, values) {
                return value;
              }
            },
            gridLines: {
              color: "rgb(234, 236, 244)",
              zeroLineColor: "rgb(234, 236, 244)",
              drawBorder: false,
              borderDash: [2],
              zeroLineBorderDash: [2]
            }
          }],
        },
        legend: {
          display: false
        },
        tooltips: {
          backgroundColor: "rgb(255,255,255)",
          bodyFontColor: "#858796",
          titleMarginBottom: 10,
          titleFontColor: '#6e707e',
          titleFontSize: 14,
          borderColor: '#dddfeb',
          borderWidth: 1,
          xPadding: 15,
          yPadding: 15,
          displayColors: false,
          intersect: false,
          mode: 'index',
          caretPadding: 10,
          callbacks: {
            label: function (tooltipItem, chart) {
              var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
              return `${datasetLabel} : ${tooltipItem.value} `;
            }
          }
        }
      }
    });
  }

});