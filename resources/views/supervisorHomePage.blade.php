<!DOCTYPE html>
<html lang ="en">
    <head>
        <link rel="stylesheet" type="text/css" href="<?php echo asset('css/normalize.css')?>">
        <link rel="stylesheet" type="text/css" href="<?php echo asset('css/grid.css')?>">
        <link rel="stylesheet" type="text/css"href="<?php echo asset('css/style.css')?>">
        <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,300italic' rel='stylesheet' type='text/css'>
        <script src="resources/js/main.js" type="text/javascript"></script>

        <title>911 SUPERVISOR</title>
    </head>

    <body>
        <header>
          <div class="Supervisor-text-box">
                <h1>911 Supervisor</h1>
            </div>

            <section class="supervisor-form">
                <div class="row">
                    <h2>Incident Report Pending</h2>
                </div>
            </section>

            <div id="reports">
                @foreach ($query as $case)
              <a href="/viewReport/{{ $case->id }}">
                <button class='btn-sup' onclick='#'>case {{ $case->id }} &nbsp;--&nbsp; {{ $case->title}} </button>
              </a>
              @endforeach
             </div>

         </header>

         <script type="text/javascript">



      function loadPending() {

          callPage("reportLoading.php");

          loadJSON("pendingList.json", function(response) {

            var reportIDArray = new Array();
            var titleArray = new Array();
            var myobj = JSON.parse(response);
            for (var j = 0; j < myobj.cases.length; j++){
              reportIDArray.push(myobj.cases[j].id)
              titleArray.push(myobj.cases[j].title);
            }
            var cases = document.getElementById('reports');
            for (var i = 0; i < reportIDArray.length; i++){
              cases.innerHTML += "<button class='btn-sup' onclick='#'>" + reportIDArray[i] + " --- " + titleArray[i] + "</button>";
          }
      });
    }

      //  window.onload = loadPending;

         </script>

    </body>
</html>
