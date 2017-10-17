<!DOCTYPE html>
<html lang ="en">
    <head>
        <link rel="stylesheet" type="text/css" href="<?php echo asset('css/normalize.css')?>">
        <link rel="stylesheet" type="text/css" href="<?php echo asset('css/grid.css')?>">
        <link rel="stylesheet" type="text/css"href="<?php echo asset('css/style.css')?>">
        <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,300italic' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <title>911 SUPERVISOR</title>
    </head>

    <body>
        <header>
          <div class="Supervisor-text-box">
                <h1>911 Supervisor</h1>
            </div>

          <div id="wrapper">
            <div id="supervisor-form">
                <div class="row">
                    <h2>Incident Report</h2>
                </div>

                <div class="row">

                    <div class="row">
                        <div class="col span-1-of-3">
                            <label for="name">Operator</label>
                        </div>
                        <div class="col span-2-of-3">
                            <label class="sup-form" >Htet Naing</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col span-1-of-3">
                            <label for="date">Date</label>
                        </div>
                        <div class="col span-2-of-3">
                            <label class="sup-form">{{ $query->created_at }}</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col span-1-of-3">
                            <label>Description</label>
                        </div>
                        <div class="col span-2-of-3">
                            <label class="sup-form">{{ $query->description }}</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col span-1-of-3">
                            <label>Location Address</label>
                        </div>
                        <div class="col span-2-of-3">
                            <label class="sup-form">{{ $query->location }}</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col span-1-of-3">
                            <label for="severity">Emergency Level</label>
                        </div>
                        <div class="col span-2-of-3">
                            <label class="sup-form">{{ $query->emergencyLevel }}</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col span-1-of-3">
                            <label for="incidentID">Incident ID</label>
                        </div>
                        <div class="col span-2-of-3">
                            <label class="sup-form">{{ $query->id }}</label>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <form method="post" action="#" class="crisis-form">

                    <div class="row">
                        <div class="col span-1-of-3">
                            <label for="name">Supervisor</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="text" name="name" id="name" placeholder="Supervisor name/Supervisor ID" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col span-1-of-3">
                            <label>Additional Comment</label>
                        </div>
                        <div class="col span-2-of-3">
                            <textarea name="message" placeholder="Further information"></textarea>
                        </div>
                    </div>

                    <div class="sup-btn-row">
                        <div class="col span-1-of-3">
                            <input type="button" value="View Other Reports">
                        </div>

                        <div class="col span-2-of-3">
                            <input type="submit" value="Submit to CMO">
                        </div>
                     </div>
                    </form>
                </div>
            </div>
            <div id="similar-case">
              <div class="sup-padding"></div>
              <h3> Similar Cases </h3>
              <button onclick="myFunction('Demo1')" class="w3-btn w3-block w3-orange w3-left-align">Case1</button>
              <div id="Demo1" class="w3-container w3-hide">
                <p>Some text..</p>
              </div>

            </div>
          </div>

         </header>
         <script>
        function myFunction(id) {
            var x = document.getElementById(id);
            if (x.className.indexOf("w3-show") == -1) {
                x.className += " w3-show";
            } else {
                x.className = x.className.replace(" w3-show", "");
            }
        }
        </script>
    </body>
</html>
