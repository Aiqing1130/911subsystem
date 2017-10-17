<!DOCTYPE html>
<html lang ="en">
    <head>
        <link rel="stylesheet" type="text/css" href="<?php echo asset('css/normalize.css')?>">
        <link rel="stylesheet" type="text/css" href="<?php echo asset('css/grid.css')?>">
        <link rel="stylesheet" type="text/css"href="<?php echo asset('css/style.css')?>">
        <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,300italic' rel='stylesheet' type='text/css'>
        <title>911 SUPERVISOR</title>
    </head>

    <body>
        <header>
          <div class="Supervisor-text-box">
                <h1>911 Supervisor</h1>
            </div>

            <section class="supervisor-form">
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
                            <label class="sup-form">Reported on 2017-12-30 @ 23:00:00 hr</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col span-1-of-3">
                            <label>Description</label>
                        </div>
                        <div class="col span-2-of-3">
                            <label class="sup-form">A group of armed men holding both AK47 and hand grenades, one of them already started shooting. The caller saw one person injuried.</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col span-1-of-3">
                            <label>Location Address</label>
                        </div>
                        <div class="col span-2-of-3">
                            <label class="sup-form">50 Nanyang Ave, 639798</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col span-1-of-3">
                            <label for="severity">Severity</label>
                        </div>
                        <div class="col span-2-of-3">
                            <label class="sup-form">Major</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col span-1-of-3">
                            <label for="incidentID">Incident ID</label>
                        </div>
                        <div class="col span-2-of-3">
                            <label class="sup-form">G5916018X</label>
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
            </section>
         </header>
    </body>
</html>
