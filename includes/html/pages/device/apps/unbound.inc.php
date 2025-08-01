<?php

$graphs = [
    'unbound_queries' => 'Unbound - Queries',
    'unbound_cache' => 'Unbound - Cache',
    'unbound_operations' => 'Unbound - Operations',
    'unbound_requestlist' => 'Unbound - Request list',
    'unbound_recursiontime' => 'Unbound - Recursion time',
];
foreach ($graphs as $key => $text) {
    $graph_type = $key;
    $graph_array['height'] = '100';
    $graph_array['width'] = '215';
    $graph_array['to'] = \App\Facades\LibrenmsConfig::get('time.now');
    $graph_array['id'] = $app['app_id'];
    $graph_array['type'] = 'application_' . $key;

    echo '<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">' . $text . '</h3>
    </div>
    <div class="panel-body">
    <div class="row">';
    include 'includes/html/print-graphrow.inc.php';
    echo '</div>';
    echo '</div>';
    echo '</div>';
}
