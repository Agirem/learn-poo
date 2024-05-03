<?php
    require "class/ClientPlus.php";

    $client1 = new ClientPlus('Ousmane', 'Meriga', 3 , 'Ousmane.meriga12');

    $client2 = $client1;

    $client2->setPrenom('Babana');
    $client3 = clone $client1;
    $client3->setPrenom('AGIREM');

    echo '<pre>';
    print_r($client1);
    print_r($client2);
    print_r($client3);
    echo '</pre>';

