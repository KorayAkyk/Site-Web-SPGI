
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    //cette fonction utilise une variable globale data qui est un tableau d'objet contenant (au moins) les titres.
    function confirmation(id)
      {
      if (confirm("Voulez-vous vraiment supprimer le billet:\n\n " + data[id].titre+ " ?" )) 
        window.location.href = "supprime_billet.inc.php?id="+id;
      }
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var pc_name;
        var cpu;
        var m_ram;
        var f_ram;
        var u_ram;
        var f_ram_percent;
        var u_ram_percent;
        var speed_wd;
        var speedtest;
        var cegid_stop;
        var cegid_start;
        var date_now;


        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Cpu Usage',     11],
          ['Used Ram',      2],
          ['Free Ram',  2],
          ['Write/Delete Speed', 2],
          ['Speed Test',    7]
        ]);

        var options = {
          title: 'Gardette SuperVision'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
      