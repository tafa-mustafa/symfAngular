<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'jms_serializer.unserialize_object_constructor' shared service.

include_once $this->targetDirs[3].'/vendor/jms/serializer/src/JMS/Serializer/Construction/ObjectConstructorInterface.php';
include_once $this->targetDirs[3].'/vendor/jms/serializer/src/JMS/Serializer/Construction/UnserializeObjectConstructor.php';

return $this->privates['jms_serializer.unserialize_object_constructor'] = new \JMS\Serializer\Construction\UnserializeObjectConstructor();
