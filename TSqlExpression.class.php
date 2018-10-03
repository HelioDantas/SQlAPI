<?php
abstract class TSqlExpression{

    const AND_OP = "AND";
    const OR_OP = "OR";
    abstract public function dump();

}