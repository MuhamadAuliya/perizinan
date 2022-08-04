<?php

function base_url()
{
    $base_url = "http://" . $_SERVER['HTTP_HOST'];
    $base_url .= str_replace(basename($_SERVER['SCRIPT_NAME']), "", $_SERVER['SCRIPT_NAME']);
    return $base_url;
}


function getcontentadmin($url, $target, $action = null)
{
    $selectedfolder = "file/" . $target . "/";
    if ($action == null) {
        $selectedfile = $selectedfolder . "views/list_" . $target . ".php";
        @include($selectedfile); 
    } else {

        if ($action == "list" or $action == "form" or $action == "edit") {

            $selectedfile = $selectedfolder . "views/" .  $action . "_" . $target . ".php";
            include($selectedfile);
        } elseif ($action == "delete" or $action == "input" or $action == "update") {
            $selectedfile = $selectedfolder . "controllers/" . $target . "_controllers.php";
            include($selectedfile);
        } else {
?>

            <div class="col-mid-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>halaman tidak di temukan</h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <h1>404 - not found</h1>
                        <br>
                        mohon maaf  file yang anda cari tidak di temukan.
                    </div>
                </div>
            </div>
<?php
        }
            
    }
}