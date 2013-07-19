<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>napcae's mind &middot; Systemstatus</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Chi Trung Nguyen">

    <!-- Le styles -->
    <link href="/css/bootstrap.css" rel="stylesheet">
    <link href="/css/bootstrap-responsive.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 20px;
        padding-bottom: 40px;
      }

      /* Custom container */
      .container-narrow {
        margin: 0 auto;
        max-width: 700px;
      }
      .container-narrow > hr {
        margin: 30px 0;
      }

      /* Main marketing message and sign up button */
      .jumbotron {
        margin: 60px 0;
        text-align: center;
      }
      .jumbotron h1 {
        font-size: 72px;
        line-height: 1;
      }
      .jumbotron .btn {
        font-size: 21px;
        padding: 14px 24px;
      }

      /* Supporting marketing content */
      .marketing {
        margin: 60px 0;
      }
      .marketing p + h4 {
        margin-top: 28px;
      }
    </style>

<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400,700,600,300' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="/js/html5shiv.js"></script>
    <![endif]-->
  </head>

  <body>
     <div class="container-narrow" style="padding:0 19px">
                <div class="masthead">
                            <div class="hidden-phone">
                                <ul class="nav nav-pills pull-right">
                                    <li>
                                        <a href="/index.html">Home</a>
                                    </li>
                                    <li>
                                        <a href="/blog">Blog</a>
                                    </li>
                                    <li>
                                        <li class="active"><a href="/status.php">Systemstatus</a>
                                    </li>
                                    <li>
                                        <a href="/contact.html">Contact</a>
                                    </li>
                                </ul>
                                 <h3 class="muted">napcae's mind</h3>
                            </div>
                            </div><!-- hidden-phone -->
                            
                            <div class="visible-phone">
                                <h3 class="muted">napcae's mind</h3>
                                <ul class="nav nav-pills nav-stacked">
                                    <li>
                                        <a href="/index.html">Home</a>
                                    </li>
                                    <li>
                                        <a href="/blog">Blog</a>
                                    </li>
                                    <li>
                                        <li class="active"><a href="/status.php">Systemstatus</a>
                                    </li>
                                    <li>
                                        <a href="/contact.html">Contact</a>
                                    </li>
                                </ul>
                            </div><!-- visible-phone -->

                <hr>
      
    <div class="row-fluid">
        <div class="span12">
                <?php
                    $date = date('d.m.Y');
                    $time= date('H:i');
                    echo "<h4>Systemstatus from $date at $time</h4>";
                ?>
                
                </br>
                
                <table class="table table-bordered">
                    <th width="100px">Service</th><th width="200px">Status</th>
                    <?php
                            $ip = "mc.napcaesmind.de";
                            $port = "25565";
                            if ($check=@fsockopen($ip,$port,$ERROR_NO,$ERROR_STR,(float)0.5)) {
                                fclose($check);
                                echo "<tr class='success'>";
                                    echo "<td>";
                                        echo "<p>Minecraft</p>";
                                    echo "</td>";
                                    echo "<td>";
                                        echo "<img src='/img/iconmonstr-check-mark-4-icon.png' width='32'></img>";
                                    echo "</td>";
                                echo "</tr>";
                                }
                            else {
                                echo "<tr class='error'>";
                                    echo "<td>";
                                        echo "Minecraft";
                                    echo "</td>";
                                    echo "<td>";
                                        echo "<img src='/img/iconmonstr-x-mark-4-icon.png' width='32'></img>";
                                    echo "</td>";
                                echo "</tr>";
                                };
                    ?>
                    
                    <?php
                            $ip = "ts.napcaesmind.de";
                            $port = "10011";
                            if ($check=@fsockopen($ip,$port,$ERROR_NO,$ERROR_STR,(float)0.5)) {
                                fclose($check);
                                echo "<tr class='success'>";
                                    echo "<td>";
                                        echo "<a href='ts3server://teamspeak.napcaesmind.de?port=9987'>TeamSpeak</a>";
                                    echo "</td>";
                                    echo "<td>";
                                        echo "<img src='/img/iconmonstr-check-mark-4-icon.png' width='32'></img>";
                                    echo "</td>";
                                echo "</tr>";
                                }
                            else {
                                echo "<tr class='error'>";
                                    echo "<td>";
                                        echo "TeamSpeak";
                                    echo "</td>";
                                    echo "<td>";
                                        echo "<img src='/img/iconmonstr-x-mark-4-icon.png' width='32'></img>";
                                    echo "</td>";
                                echo "</tr>";
                                };
                    ?>
        
                      
                </table>
        </div><!-- span 12-->
</div><!-- row-fluid-->


    <hr>
      
      <div class="footer">
                <div class="row-fluid">
                    <div class="span12"><p>
                        <a href="http://www.napcaesmind.de">napcae's mind</a> 2010 - 2013
                        &middot; <a href="/impressum">About</a> &middot; <a href="/secured">Login</a> &middot; 
                        <a href="/blog/feed"><img alt="feed" width="16" src="/img/iconmonstr-rss-3-icon">  RSS</a>
                   </div>
                    <br><br>
                    <div class="span12" style="text-align:center;">
                        proudly hosted on<img width="28" src="/img/raspi.png">
                    </div>
                </div>
                <!-- row fluid -->
            </div> 
            <!-- /footer -->
        </div>
        <!-- /container -->


  </body>
</html>
