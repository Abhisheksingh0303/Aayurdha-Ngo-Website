
/*
 Template Name: Admiry - Bootstrap 4 Admin Dashboard
 Author: Themesdesign
 Website: www.themesdesign.in
 File: Morris init js
 */

!function($) {
    "use strict";

    var MorrisCharts = function() {};




    //creates area chart
    MorrisCharts.prototype.createAreaChart = function(element, pointSize, lineWidth, data, xkey, ykeys, labels, lineColors) {
        Morris.Area({
            element: element,
            pointSize: 3,
            lineWidth: 2,
            data: data,
            xkey: xkey,
            ykeys: ykeys,
            labels: labels,
            resize: true,
            hideHover: 'auto',
            gridLineColor: '#eef0f2',
            lineColors: lineColors
        });
    },
    //creates Bar chart
    MorrisCharts.prototype.createBarChart  = function(element, data, xkey, ykeys, labels, lineColors) {
        Morris.Bar({
            element: element,
            data: data,
            xkey: xkey,
            ykeys: ykeys,
            labels: labels,
            gridLineColor: '#eef0f2',
            barSizeRatio: 0.4,
            resize: true,
            hideHover: 'auto',
            barColors: lineColors
        });
    },


   
    MorrisCharts.prototype.init = function() {

        //create line chart
        var $data  = [
            {y: 'Jan', a: 100, b: 90},
            {y: 'Feb', a: 75, b: 65},
            {y: 'Mar', a: 50, b: 40},
            {y: 'April', a: 75, b: 65},
            {y: 'May', a: 50, b: 40},
            {y: 'June', a: 75, b: 65},
            {y: 'Jul', a: 100, b: 90},
            {y: 'Aug', a: 90, b: 75}
          ];
        this.createLineChart('morris-line-example', $data, 'y', ['a', 'b'], ['Series A', 'Series B'], ['#ca6364', '#eb7475']);

       

        //creating bar chart
        var $barData = [
            {y: 'Jan', a: 100, b: 90},
            {y: 'Feb', a: 75, b: 65},
            {y: 'Mar', a: 50, b: 40},
            {y: 'April', a: 75, b: 65},
            {y: 'May', a: 50, b: 40},
            {y: 'June', a: 75, b: 65},
            {y: 'Jul', a: 100, b: 90},
            {y: 'Aug', a: 90, b: 75}
        ];
        this.createBarChart('morris-bar-example', $barData, 'y', ['a', 'b'], ['Series A', 'Series B'], ['#ca6364', '#eb7475']);
    },
    //init
    $.MorrisCharts = new MorrisCharts, $.MorrisCharts.Constructor = MorrisCharts
}(window.jQuery),

//initializing 
function($) {
    "use strict";
    $.MorrisCharts.init();
}(window.jQuery);