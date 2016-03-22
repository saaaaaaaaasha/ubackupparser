<?php
namespace ubackupparser\Convert\Base;

interface IConvertible{

    public function isAllowed($field);

    public function process($field, &$fields, $module);	
}