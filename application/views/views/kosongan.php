<html>
	<head>
<script src="<?php echo base_url() ?>assets/js/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>assets/js/highcharts.js" type="text/javascript"></script>


		<script type="text/javascript">
		alert('hahhaa');
		//2)script untuk membuat grafik, perhatikan setiap komentar agar paham
$(function () {
    var chart;
    $(document).ready(function() {
        chart = new Highcharts.Chart({
            chart: {
                renderTo: 'container', //letakan grafik di div id container
				//Type grafik, anda bisa ganti menjadi area,bar,column dan bar
                type: 'column',  
                marginRight: 130,
                marginBottom: 25
            },
            title: {
                text: 'Pendapatan perkapita indonesia tahun 2006-2011',
                x: -20 //center
            },
            subtitle: {
                text: 'candra.web.id',
                x: -20
            },
            xAxis: { //X axis menampilkan data tahun 
                categories: ['2015-06-13']
            },
            yAxis: {
                title: {  //label yAxis
                    text: 'pendapatan dalam USD'
                },
                plotLines: [{
                    value: 0,
                    width: 1,
                    color: '#808080' //warna dari grafik line
                }]
            },
            tooltip: { 
			//fungsi tooltip, ini opsional, kegunaan dari fungsi ini 
			//akan menampikan data di titik tertentu di grafik saat mouseover
                formatter: function() {
                        return '<b>'+ this.series.name +'</b><br/>'+
                        this.x +': '+ this.y ;
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
			//series adalah data yang akan dibuatkan grafiknya,
			//saat ini mungkin anda heran, buat apa label indonesia dikanan 
			//grafik, namun fungsi label ini sangat bermanfaat jika
			//kita menggambarkan dua atau lebih grafik dalam satu chart,
			//hah, emang bisa? ya jelas bisa dong, lihat tutorial selanjutnya 
            series: [{  
                name: 'Indonesia',  
				//data yang akan ditampilkan 

                data: [
               
 						11,4,2,4,2]
            }]
        });
    });
    
});
		</script>
	</head>
	<body>


<!--grafik akan ditampilkan disini -->
<div id="container" style="min-width: 400px; height: 400px; margin: 0 auto"></div>

		
	</body>
</html>