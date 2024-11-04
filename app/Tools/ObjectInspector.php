<?php

namespace App\Tools;

use ReflectionClass;

class ObjectInspector
{
    public function inspect($object)
    {
        // Create a reflection of the object's class
        $reflection = new ReflectionClass($object);

        // Get all properties
        $properties = $reflection->getProperties();

        // Get all methods
        $methods = $reflection->getMethods();

        // Format properties and methods to return their names
        $propertyNames = [];
        foreach ($properties as $property) {
            $propertyNames[] = $property->getName();
        }

        $methodNames = [];
        foreach ($methods as $method) {
            $methodNames[] = $method->getName();
        }

        // Return the properties and methods as an associative array
        return [
            'properties' => $propertyNames,
            'methods' => $methodNames
        ];
    }
}

