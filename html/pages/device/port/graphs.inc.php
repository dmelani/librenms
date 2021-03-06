<?php

if (file_exists(get_port_rrdfile_path ($device['hostname'], $port['port_id']))) {
    $iid = $id;
    echo '<div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Interface Traffic</h3>
            </div>';
    $graph_type = 'port_bits';

    echo '<div class="panel-body">';
        include 'includes/print-interface-graphs.inc.php';
    echo '</div></div>';

    echo '<div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Interface Packets</h3>
            </div>';
    $graph_type = 'port_upkts';

    echo '<div class="panel-body">';
        include 'includes/print-interface-graphs.inc.php';
    echo '</div></div>';

    echo '<div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Interface Non Unicast</h3>
            </div>';
    $graph_type = 'port_nupkts';
    echo '<div class="panel-body">';
        include 'includes/print-interface-graphs.inc.php';
    echo '</div></div>';

    echo '<div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Interface Errors</h3>
            </div>';
    $graph_type = 'port_errors';

    echo '<div class="panel-body">';
        include 'includes/print-interface-graphs.inc.php';
    echo '</div></div>';

    if (is_file(get_port_rrdfile_path ($device['hostname'], $port['port_id'], 'dot3'))) {
        echo '<div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Ethernet Errors</h3>
            </div>';
        $graph_type = 'port_etherlike';
        
        echo '<div class="panel-body">';
            include 'includes/print-interface-graphs.inc.php';
        echo '</div></div>';
    }
}
