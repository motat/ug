<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<HTML>
   	<HEAD>
      <TITLE>Drug Rec</TITLE>
      <link href="css/style.css" rel="stylesheet" type="text/css" media="screen" />
	    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	    <script src="scripts/js.js"></script>
       <script type="text/javascript" src="js/jquery-1.7.1.min.js" ></script>
      <script type="text/javascript" src="js/highcharts.js" ></script>
      <script type="text/javascript" src="js/themes/gray.js"></script>
      <script type="text/javascript">
          var chart;
                  $(document).ready(function() {
                      var options = {
                          chart: {
                              renderTo: 'container',
                              defaultSeriesType: 'line',
                              marginRight: 130,
                              marginBottom: 25
                          },
                          title: {
                              text: 'Hourly Visits',
                              x: -20 //center
                          },
                          subtitle: {
                              text: '',
                              x: -20
                          },
                          xAxis: {
                              type: 'date',
                              tickInterval: 3600 * 1000, // one hour
                              tickWidth: 0,
                              gridLineWidth: 1,
                              labels: {
                                  align: 'center',
                                  x: -3,
                                  y: 20,
                                  formatter: function() {
                                      return Highcharts.dateFormat('%l%p', this.value);
                                  }
                              }
                          },
                          yAxis: {
                              title: {
                                  text: 'Visits'
                              },
                              plotLines: [{
                                  value: 0,
                                  width: 1,
                                  color: '#808080'
                              }]
                          },
                          tooltip: {
                              formatter: function() {
                                      return Highcharts.dateFormat('%l%p', this.x-(1000*3600)) +'-'+ Highcharts.dateFormat('%l%p', this.x) +': <b>'+ this.y + '</b>';
                              }
                          },
                          legend: {
                              layout: 'vertical',
                              align: 'right',
                              verticalAlign: 'top',
                              x: -10,
                              y: 100,
                              borderWidth: 0
                          },
                          series: [{
                              name: 'Count'
                          }]
                      }
                      // Load data asynchronously using jQuery. On success, add the data
                      // to the options and initiate the chart.
                      // This data is obtained by exporting a GA custom report to TSV.
                      // http://api.jquery.com/jQuery.get/
                      jQuery.get('data.php', null, function(tsv) {
                          var lines = [];
                          traffic = [];
                          try {
                              // split the data return into lines and parse them
                              tsv = tsv.split(/\n/g);
                              jQuery.each(tsv, function(i, line) {
                                  line = line.split(/\t/);
                                  date = Date.parse(line[0] +' UTC');
                                  traffic.push([
                                      date,
                                      parseInt(line[1].replace(',', ''), 10)
                                  ]);
                              });
                          } catch (e) {  }
                          options.series[0].data = traffic;
                          chart = new Highcharts.Chart(options);
                      });
                  });
      </script>
	   	<style>
       		body { background-color:black; }
       		h1, h2, h3, h4, h5, h6 { color:white; font-family:helvetica; }
       		input { background-color:black; border-color:white; color: white;}
       	</style>
   	</HEAD>
   	<BODY>
<div id="container" style="width: 100%; height: 400px; margin: 0 auto"></div>

   </BODY>
</HTML>
