<?php
function getHeader($startSession,$title)
{
    if ($startSession == true) {
        session_start();

        echo "
        <!DOCTYPE html>
        <html>
        <head>
            <meta charset=\"UTF-8\">
             <title>{$title}</title>
                <link rel='stylesheet' href='./css/boostrap.min.css'>
        </head>
        <body>";
    }
}
function getFooter(){
    echo "
        </body>
        </html>";
}
.