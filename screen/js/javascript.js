$(document).ready(function () {

    // Build the chart
    Highcharts.chart('container', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: 'Recettes de fonctionnement pour l\'année 2017'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}€ par personne</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: false
                },
                showInLegend: true
            }
        },
        series: [{
            name: 'Combien ça coute',
            colorByPoint: true,
            data: [{
                name: 'Impôts et taxes',
                y: 44.1
            }, {
                name: 'Apport de l\'état',
                y: 21.9,
                sliced: true,
                selected: true
            }, {
                name: 'Aide communauté urbaine',
                y: 4.8
            }, {
                name: 'Autres',
                y: 29.2
            }]
        }]
    });
});
