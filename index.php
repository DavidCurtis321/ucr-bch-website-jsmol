<html>
    <body>
        <ul>
        <?php
        foreach (scandir('.') as $file) {
            if (substr($file, -4, 4) == "html") {
                echo '            <li><a href="' . $file . '">' . basename($file, '.html') . '</a></li>';
            }
        }
        ?>
        </ul>
    </body>
<html>
