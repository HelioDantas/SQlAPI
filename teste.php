<?php
    include_once("Tfilter.php");

$filter = new Tfilter("data", "=", "25-10-2018");
$filter = new Tfilter("hh", "in", [1,2]);

echo $filter->dump();;
