/*
//繪製jquery 圖
var data = [
	[[1,1],[2,2],[3,5],[4,2],[5,4]], //資料1
	[[1,6],[2,4],[3,3],[4,4],[5,5]]  //資料2
];

//啟動外掛程式
$.jqplot.config.enablePlugins = true;
var opts = {
	title: '圖表標題',
	
	series[
		{
			label:'資料1',
			showMarker:false
		},
		{
			label:'資料2',
			showMarker:true
		},
	],
	
	legend:{
		show:true,
		location:'ne',
	},
	
	axes:{
		xaxis:{
			label:'x軸標籤',
			labelRenderer: $.jqplot.CanvasAxisLabelRenderer,
			tickRenderer: $.jqplot.CanvasAxisTickRenderer,
			tickOptions: {angle:-30}
		},
		yaxys:{
			label:'y軸標籤',
			labelRenderer: $.jqplot.CanvasAxisLabelRenderer,
			tickRenderer: $.jqplot.CanvasAxisTickRenderer,
		}
	},
	
	cursor:{zoom:true}
};
*/
$(document).on('pageshow', '#Maps-App-Data', function(e) {
	var s1 = [['Sony',7], ['Samsumg',13.3], ['LG',14.7], ['Vizio',5.2], ['Insignia', 1.2]];
         
    var plot8 = $.jqplot('pie8', [s1], {
        grid: {
            drawBorder: false, 
            drawGridlines: false,
            background: '#ffffff',
            shadow:false
        },
        axesDefaults: {
             
        },
        seriesDefaults:{
            renderer:$.jqplot.PieRenderer,
            rendererOptions: {
                showDataLabels: true
            }
        },
        legend: {
            show: true,
            rendererOptions: {
                numberRows: 1
            },
            location: 's'
        }
    });
});
$(document).on('pagehide', '#Maps-App-Data', function() {
	//plot8.destroy();
});
