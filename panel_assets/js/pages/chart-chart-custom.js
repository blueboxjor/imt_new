'use strict';
$(document).ready(function() {

    // [ Donut-chart ] start
    var bar = document.getElementById("chart-donut-1").getContext('2d');
    var datalist = [];
    var data4 = {
        labels: [
            "Sun Glasses",
            "Optical Frame",
            "Optical Lense",
            "Contact Lense"
        ],
        datasets: [{
            // data: [2, 4, 2, 3, 2],
            data: ["2", "4", "2", "3"],
            backgroundColor: [
                '#ffba57',
                '#4680ff',
                '#ff5252',
                '#ffff00'
            ],
            hoverBackgroundColor: [
                '#ffba57',
                '#4680ff',
                '#ff5252',
                '#ffff00'
            ]
        }]
    };
    var myPieChart = new Chart(bar, {
        type: 'doughnut',
        data: data4,
        responsive: true,
        options: {
            maintainAspectRatio: false,
        }
    });
    // [ Donut-chart ] end
});