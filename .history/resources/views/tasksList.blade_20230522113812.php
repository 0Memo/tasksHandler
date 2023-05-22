<?php

foreach($tasks as $task) {
    ?>
    <li>
        <ul>
        <?php
            $task['task'] : $task 
        ?>
        </ul>
    </li>
    <?php
}

?>