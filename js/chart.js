google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {
  var data = new google.visualization.DataTable();
  data.addColumn('string', '중앙동아리');
  data.addColumn('number', '회원 수');

  data.addRows([
    ['아르페지오', 24],
    ['블랙홀', 33],
    ['한별(천문회)', 101],
    ['홀리보이스', 35],
    ['leo', 21],
    ['늘해랑', 36],
    ['페가수스', 22],
    ['롤다이스', 27],
    ['위더스', 48]
     ]);

  var options = {
   title: '중앙동아리 회원 수 정보',
   is3D: true
};

  // var chart = new google.charts.Line(document.getElementById('chart_div'));
  var chart = new google.visualization.PieChart(document.getElementById('chart_div'));

  chart.draw(data, options);
}
