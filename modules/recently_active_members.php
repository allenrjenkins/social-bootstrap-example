<div class="panel-body">
    <?php
    $rMembers = array_chunk($user->recently_active_members(), 3);
    foreach ($rMembers as $row1) {
        echo '<div class="row" style="margin-bottom:10px;">';
        foreach ($row1 as $k => $v) {
            echo '<div class="col-md-4 col-xs-4">'; 
            echo '<img src="' . $v['picture']['thumbnail'] . '" class="img-responsive img-thumbnail" data-toggle="tooltip" data-placement="top" title="'.$v['login']['username'].'" />';
            echo '</div>';
        }
        echo '</div>';
    }
    ?> 
    <div class="clearfix"></div>
</div>