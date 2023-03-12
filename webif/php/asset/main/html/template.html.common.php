<?php

$exHTML = <<< ENDEXHTML

<!DOCTYPE html>
<html>

    <head>
        <title>OpenDeploy</title>
        <link rel="stylesheet" href="style/style.desktop.css" media="screen">
        EXHEAD_INJECT
    </head>

    <body>

        <header>
            <nav>
                <ul>
                    <li class="h-icon">OpenDeploy</li>
                    <li class="h-active">Devices</li>
                    <li>Policies</li>
                    <li>Sources</li>

                    <li class="f-right">Admin</li>
                    <li class="f-right">Info</li>
                </ul>
            </nav>

        </header>

        <main id="module-container">
            <h1>OpenDeploy</h1>
            <div id="module-content">
                EXMODULE_INJECT
            </div>

        </main>

        <footer>
            <span class="statusbar-container">
                <span class="statusbar-element">OpenDeploy v0.0.0B</span>
                <span class="statusbar-element">OpenDeploy v0.0.0B</span>
            </span>
        </footer>
    </body>

</html>
ENDEXHTML;


?>