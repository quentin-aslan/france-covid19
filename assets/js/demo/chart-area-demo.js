// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#858796';

function number_format(number, decimals, dec_point, thousands_sep) {
  // *     example: number_format(1234.56, 2, ',', ' ');
  // *     return: '1 234,56'
  number = (number + '').replace(',', '').replace(' ', '');
  var n = !isFinite(+number) ? 0 : +number,
    prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
    sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
    dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
    s = '',
    toFixedFix = function(n, prec) {
      var k = Math.pow(10, prec);
      return '' + Math.round(n * k) / k;
    };
  // Fix for IE parseFloat(0.55).toFixed(0) = 0;
  s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');
  if (s[0].length > 3) {
    s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
  }
  if ((s[1] || '').length < prec) {
    s[1] = s[1] || '';
    s[1] += new Array(prec - s[1].length + 1).join('0');
  }
  return s.join(dec);
}

//  RECUPERATION DES DATAS VIA LAPI ICI
$(() => {

  generateTable();

  async function getDatas() {
    await $.get(`https://corona.lmao.ninja/historical`, function (datas) {
    }).done(function (datas) {
      franceDatas = {};
      for(country of datas) {
        if(country.country == "France") {
          franceDatas = country;
          break;
        }
      }
  
      // Récupération du nombre d'inféctés
      var casesDatas = [];
      for(let i = 1; i<21; i++) {
        let data = franceDatas.timeline.dea[`3/${i}/20`];
        casesDatas.push(data);
      }
      generateTable(casesDatas);
      return casesDatas;
    })
    .fail(function () {
      console.log('Erreur de la récupération des données via l\'api pour HISTORY');
    });
  }

  function generateTable() {

  // Nombre d'infecter par jour
  let casesDatas = ['38', '73', '100', '130', '191', '212', '285', '423','613', '949', '1126', '1412', '1784', '2281', '2876', '3661', '4499', '5423', '6633', '7730', '9134', '10995', '12612', '14459', '16008']; 
  let deadDatas = ['0', '0', '0', '0', '0', '4', '4', '7', '11', '16', '19', '30', '33', '48', '61', '79', '91', '127', '148', '175', '264', '372', '450', '562', '674'];

    var ctx = document.getElementById("myAreaChart");
    var myLineChart = new Chart(ctx, {
      type: 'line',
      data: {
        labels: ["27/02", "28/02", "29/02", "01/03", "02/03", "03/03", "04/03", "05/03", "06/03", "07/03", "08/03", "09/03", "10/03", "11/03", "12/03", "13/03", "14/03", "15/03", "16/03", "17/03", "18/03", "19/03","20/03", "21/03", "22/03"],
        datasets: [
          { // INFECTES
          label: "Inféctés",
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
              maxTicksLimit: 7
            }
          }],
          yAxes: [{
            ticks: {
              suggestedMin: 50,
              suggestedMax: 100,
              padding: 0,
              // Include a dollar sign in the ticks
              callback: function(value, index, values) {
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
            label: function(tooltipItem, chart) {
              var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
              return `${datasetLabel} : ${tooltipItem.value} `;
            }
          }
        }
      }
    });
  }
});