<?php
    include_once("Tfilter.php");

$filter = new Tfilter("data", "=", "25-10-2018");


echo $filter->dump();;
