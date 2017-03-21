function unhideDiv()
{
    document.getElementById('kaartzien').style = "display: block;";
    document.getElementById('keuze2').style = "visibility: visible;";
    document.getElementById('keuze22').style = "visibility: visible;";
    document.getElementById('keuze1').style = "display: none;";
    document.getElementById('keuze11').style = "display: none;";
}
function unhideDiv2()
{
    document.getElementById('kaartzien2').style = "display: block;";
    document.getElementById('keuze2').style = "visibility: visible;";
    document.getElementById('keuze22').style = "visibility: visible;";
    document.getElementById('keuze1').style = "display: none;";
    document.getElementById('keuze11').style = "display: none;";
}
function unhideDiv3()
{
    document.getElementById('kaartzien3').style = "display: block;";
    document.getElementById('keuze2').style = "display: none;";
    document.getElementById('keuze22').style = "display: none;";
    document.getElementById('keuze3').style = "visibility: visible;";
    document.getElementById('keuze31').style = "visibility: visible;";
    document.getElementById('keuze32').style = "visibility: visible;";
    document.getElementById('keuze33').style = "visibility: visible;";
}
function unhideDiv4()
{
    document.getElementById('kaartzien4').style = "display: block;";
    document.getElementById('keuze2').style = "display: none;";
    document.getElementById('keuze22').style = "display: none;";
    document.getElementById('keuze3').style = "visibility: visible;";
    document.getElementById('keuze31').style = "visibility: visible;";
    document.getElementById('keuze32').style = "visibility: visible;";
    document.getElementById('keuze33').style = "visibility: visible;";
}
function unhideDiv5()
{
    document.getElementById('kaartzien5').style = "display: block;";
    document.getElementById('nextstage').style = "visibility: visible;";
    document.getElementById('keuze3').style = "display: none;";
    document.getElementById('keuze31').style = "display: none;";
    document.getElementById('keuze32').style = "display: none;";
    document.getElementById('keuze33').style = "display: none;";
}
function unhideDiv6()
{
    document.getElementById('kaartzien6').style = "display: block;";
    document.getElementById('nextstage').style = "visibility: visible;";
    document.getElementById('keuze3').style = "display: none;";
    document.getElementById('keuze31').style = "display: none;";
    document.getElementById('keuze32').style = "display: none;";
    document.getElementById('keuze33').style = "display: none;";
}
function unhideDiv7()
{
    document.getElementById('kaartzien7').style = "display: block;";
    document.getElementById('nextstage').style = "visibility: visible;";
    document.getElementById('keuze3').style = "display: none;";
    document.getElementById('keuze31').style = "display: none;";
    document.getElementById('keuze32').style = "display: none;";
    document.getElementById('keuze33').style = "display: none;";
}
function unhideDiv8()
{
    document.getElementById('kaartzien8').style = "display: block;";
    document.getElementById('nextstage').style = "visibility: visible;";
    document.getElementById('keuze3').style = "display: none;";
    document.getElementById('keuze31').style = "display: none;";
    document.getElementById('keuze32').style = "display: none;";
    document.getElementById('keuze33').style = "display: none;";
}

google.charts.load('current', {'packages':['bar']});
google.charts.setOnLoadCallback(drawChart);

// Hieronder gebruik ik increase om bij te houden hoevaak er geklikt is of door de juiste elementen te gebruiken in HTML wanneer er geklikt is en degene die moet drinken
//vgm wel de juiste richting maar nog niet klaar
var Speler1Stage1 = 1;

function increase(){
    var textBox = document.getElementById("text");
    textBox.value = Speler1Stage1;
    Speler1Stage1++;
} 

function drawChart() {   

    var data = google.visualization.arrayToDataTable([
        ['Onderdelen', 'Speler 1', 'Speler 2', 'Speler 3'],
        ['Stage 1', Speler1Stage1, 4, 2],
        ['Stage 2', 11, 4, 2],
        ['Stage 3', 6, 1, 3]
    ]);

    var options = {
        chart: {
            title: 'Drankvisualisatie',
            subtitle: 'Per speler drinkhoeveelheid per onderdeel.',
        }
    };

    var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

    chart.draw(data, options);
}   