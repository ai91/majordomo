<?php

$group_name=$this->getProperty('groupName');
$objects = getObjectsByProperty('group'.$group_name,1);
foreach($objects as $object_title) {
    callMethod($object_title.'.turnOff');
}
$this->setProperty('status', 0);