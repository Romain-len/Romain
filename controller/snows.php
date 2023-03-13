
<?php

function snows()
{
    require "model/model.php";

    $snows=getSnows();

    require "view/snows.php";
}
function Snow($id)
{
    require "model/model.php";

    $snows=getSnow($id);
    $snow = $snows[0];
    require "view/snow.php";
}