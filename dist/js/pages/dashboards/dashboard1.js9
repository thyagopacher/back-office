/*
Template Name: Admin Pro Admin
Author: Wrappixel
Email: niravjoshi87@gmail.com
File: js
*/
$(function() {
    "use strict";
    // ============================================================== 
    // Newsletter
    // ============================================================== 

    var chart = new Chartist.Line('.campaign', {
        labels: [1, 3, 5, 10, 15, 20, 25, 30 ],
        series: [
            [400, 490, 680, 267, 499, 154, 580, 652],
            [120, 278, 412, 98, 321, 187, 262, 189]
        ]
    }, {
        low: 15,
        high: 700,

        showArea: true,
        fullWidth: true,
        plugins: [
            Chartist.plugins.tooltip()
        ],
        axisY: {
            onlyInteger: true,
            scaleMinSpace: 20,
            offset: 100,
            labelInterpolationFnc: function(value) {
                return (value * 2300) + ' UN';
            }
        },

    });

    // Offset x1 a tiny amount so that the straight stroke gets a bounding box
    // Straight lines don't get a bounding box 
    // Last remark on -> http://www.w3.org/TR/SVG11/coords.html#ObjectBoundingBox
    chart.on('draw', function(ctx) {
        if (ctx.type === 'area') {
            ctx.element.attr({
                x1: ctx.x1 + 0.001
            });
        }
    });

    // Create the gradient definition on created event (always after chart re-render)
    chart.on('created', function(ctx) {
        var defs = ctx.svg.elem('defs');
        defs.elem('linearGradient', {
            id: 'gradient',
            x1: 0,
            y1: 1,
            x2: 0,
            y2: 0
        }).elem('stop', {
            offset: 0,
            'stop-color': 'rgba(255, 255, 255, 1)'
        }).parent().elem('stop', {
            offset: 1,
            'stop-color': 'rgba(64, 196, 255, 1)'
        });
    });


    var chart = [chart];
    
    // ============================================================== 
    // Our Visitor
    // ============================================================== 

    var chart = c3.generate({
        bindto: '#visitor',
        data: {
            columns: [
                ['Open', 45],
                ['Clicked', 15],
                ['Un-opened', 27],
                ['Bounced', 18],
            ],

            type: 'donut',
            tooltip: {
            show: true
        }
        },
        donut: {
            label: {
                show: false
            },
            title: "Ratio",
            width: 35,
            
        },
        
        legend: {
            hide: true
            //or hide: 'data1'
            //or hide: ['data1', 'data2']
            
        },
        color: {
            pattern: ['#40c4ff', '#2961ff', '#ff821c', '#7e74fb']
        }
    });
    // ============================================================== 
    // Our Visitor
    // ============================================================== 
    var sparklineLogin = function() {
        $('#ravenue').sparkline([6, 10, 9, 11, 9, 10, 12], {
            type: 'bar',
            height: '100',
            barWidth: '4',
            width: '100%',
            resize: true,
            barSpacing: '11',
            barColor: '#fff'
        });
        $('#views').sparkline([20, 80, 67, 95, 76, 80, 99], {
            type: 'line',
            height: '72',
            lineColor: 'transparent',
            fillColor: 'rgba(255, 255, 255, 0.3)',
            width: '100%',

            resize: true,

        });
    };
    var sparkResize;

    $(window).resize(function(e) {
        clearTimeout(sparkResize);
        sparkResize = setTimeout(sparklineLogin, 500);
    });
    sparklineLogin();

    // ============================================================== 
    // Bounce rate
    // ============================================================== 
    var ctx = document.getElementById("bouncerate");
    var salesChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ["2012", "2013", "2014", "2015", "2016", "2017"],
            datasets: [{
                label: 'Bounce %',
                data: [12, 19, 3, 5, 2, 3],
                backgroundColor: [
                    'transparent'
                ],
                borderColor: [
                    '#2961ff'

                ],
                borderWidth: 3
            }]
        },
        options: {
            elements: { point: { radius: 2 } },
            scales: {
                xAxes: [{
                    gridLines: {
                        display: false,
                        drawBorder: false,
                    },
                    ticks: {
                        display: false
                    }
                }],
                yAxes: [{
                    gridLines: {
                        display: false,
                        drawBorder: false,
                    },
                    ticks: {
                        display: false
                    }
                }]
            },
            legend: {
                display: false,
                labels: {
                    fontColor: 'rgb(255, 99, 132)'
                }
            }
        }
    });
     // ============================================================== 
    // world map
    // ==============================================================
    jQuery('#visitfromworld').vectorMap({
        map: 'world_mill_en',
        backgroundColor: 'transparent',
        borderColor: '#000',
        borderOpacity: 0,
        borderWidth: 0,
        zoomOnScroll: false,
        color: '#93d5ed',
        regionStyle: {
            initial: {
                fill: '#93d5ed',
                'stroke-width': 1,
                'stroke': '#fff'
            }
        },
        markerStyle: {
            initial: {
                r: 5,
                'fill': '#93d5ed',
                'fill-opacity': 1,
                'stroke': '#93d5ed',
                'stroke-width': 1,
                'stroke-opacity': 1
            },
        },
        enableZoom: true,
        hoverColor: '#79e580',
        hoverOpacity: null,
        normalizeFunction: 'linear',
        scaleColors: ['#93d5ed', '#93d5ee'],
        selectedColor: '#c9dfaf',
        selectedRegions: [],
        showTooltip: true,
        onRegionClick: function(element, code, region) {
            var message = 'Ola, você ainda não é graduado para Desbloquear essa opção ' + code.toUpperCase();
            alert(message);
        }
    });


    // This is for the chat messege on enter
    $(function() {
            $(document).on('keypress', "#textarea1", function (e) {
                if (e.keyCode == 13) {
                    var id = $(this).attr("data-user-id");
                    var msg = $(this).val();
                    msg = msg_sent(msg);
                    $("#someDiv").append(msg);
                    $(this).val("");
                    $(this).focus();
                }
            });
            
        });
});
