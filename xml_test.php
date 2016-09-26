<?php

    $xml = simplexml_load_file('deals.xml');

?>  

<!-- Body Content -->
<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8" />
    </head>

    <style type="text/css">
        
        .container{
            width: 1000px;
            display: block;
            margin: 0px auto;
        }

        .deal{
            width: 100%;
            padding: 10px;
            border-bottom: solid 1px #ccc;
            margin: 0px auto;
            margin-bottom: 20px;
            display: block;
        }

        p{
            font-family: Helvetica;
            font-size: 17px;
        }

        .dd{
            width: 200px;
            border: solid 1px #ccc;
            padding: 5px;
            float: right;
            position: relative;
            top: -120px;
        }

    </style>

    <body>

        <div class='container'>
            
            <?php

                foreach($xml->deal as $deals)
                {
                    echo '<div class="deal">';

                    echo "<p><b>" . $deals->name . "</b></p>";
                    echo "<p>" . $deals->price . "</p>";
                    echo "<p>" . $deals->desc . "</p>";
                    echo "<img class='dd' src='". $deals->src ."' alt='Sound Lads' />";

                    echo '</div>';
                }

            ?>

        </div>

    </body>
</html>



