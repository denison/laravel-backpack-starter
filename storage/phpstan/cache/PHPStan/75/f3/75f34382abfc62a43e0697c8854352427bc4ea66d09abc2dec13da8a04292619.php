<?php declare(strict_types = 1);

// osfsl-/var/www/vendor/composer/../backpack/crud/src/app/Library/CrudPanel/Traits/Fields.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Backpack\CRUD\app\Library\CrudPanel\Traits\Fields
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-a53b98ca055262c4b0d82117f1641a7167e46d3bb0ba27327db97d6233515de2-8.4.20-6.70.0.0',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Fields',
        'filename' => '/var/www/vendor/composer/../backpack/crud/src/app/Library/CrudPanel/Traits/Fields.php',
      ),
    ),
    'namespace' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits',
    'name' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Fields',
    'shortName' => 'Fields',
    'isInterface' => false,
    'isTrait' => true,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => NULL,
    'attributes' => 
    array (
    ),
    'startLine' => 9,
    'endLine' => 542,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
    ),
    'traitClassNames' => 
    array (
      0 => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\FieldsProtectedMethods',
      1 => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\FieldsPrivateMethods',
    ),
    'immediateConstants' => 
    array (
    ),
    'immediateProperties' => 
    array (
    ),
    'immediateMethods' => 
    array (
      'fields' => 
      array (
        'name' => 'fields',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the CRUD fields for the current operation with name processed to be usable in HTML.
 *
 * @return array
 */',
        'startLine' => 23,
        'endLine' => 26,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Fields',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Fields',
        'currentClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Fields',
        'aliasName' => NULL,
      ),
      'getCleanStateFields' => 
      array (
        'name' => 'getCleanStateFields',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the fields as they are stored inside operation setting, not running the
 * presentation callbacks like converting the `dot.names` into `dot[names]` for html for example.
 */',
        'startLine' => 32,
        'endLine' => 35,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Fields',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Fields',
        'currentClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Fields',
        'aliasName' => NULL,
      ),
      'makeSureFieldHasNecessaryAttributes' => 
      array (
        'name' => 'makeSureFieldHasNecessaryAttributes',
        'parameters' => 
        array (
          'field' => 
          array (
            'name' => 'field',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 45,
            'endLine' => 45,
            'startColumn' => 57,
            'endColumn' => 62,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * The only REALLY MANDATORY attribute when defining a field is the \'name\'.
 * Everything else Backpack can probably guess. This method makes sure  the
 * field definition array is complete, by guessing missing attributes.
 *
 * @param  string|array  $field  The definition of a field (string or array).
 * @return array The correct definition of that field.
 */',
        'startLine' => 45,
        'endLine' => 62,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Fields',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Fields',
        'currentClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Fields',
        'aliasName' => NULL,
      ),
      'makeSureFieldHasRelationshipAttributes' => 
      array (
        'name' => 'makeSureFieldHasRelationshipAttributes',
        'parameters' => 
        array (
          'field' => 
          array (
            'name' => 'field',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 70,
            'endLine' => 70,
            'startColumn' => 60,
            'endColumn' => 65,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * When field is a relationship, Backpack will try to guess some basic attributes from the relation.
 *
 * @param  array  $field
 * @return array
 */',
        'startLine' => 70,
        'endLine' => 80,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Fields',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Fields',
        'currentClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Fields',
        'aliasName' => NULL,
      ),
      'registerFieldEvents' => 
      array (
        'name' => 'registerFieldEvents',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Register all Eloquent Model events that are defined on fields.
 * Eg. saving, saved, creating, created, updating, updated.
 *
 * @see https://laravel.com/docs/master/eloquent#events
 *
 * @return void
 */',
        'startLine' => 90,
        'endLine' => 99,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Fields',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Fields',
        'currentClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Fields',
        'aliasName' => NULL,
      ),
      'addField' => 
      array (
        'name' => 'addField',
        'parameters' => 
        array (
          'field' => 
          array (
            'name' => 'field',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 107,
            'endLine' => 107,
            'startColumn' => 30,
            'endColumn' => 35,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a field to the create/update form or both.
 *
 * @param  string|array  $field  The new field.
 * @return self
 */',
        'startLine' => 107,
        'endLine' => 116,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Fields',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Fields',
        'currentClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Fields',
        'aliasName' => NULL,
      ),
      'addFields' => 
      array (
        'name' => 'addFields',
        'parameters' => 
        array (
          'fields' => 
          array (
            'name' => 'fields',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 123,
            'endLine' => 123,
            'startColumn' => 31,
            'endColumn' => 37,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add multiple fields to the create/update form or both.
 *
 * @param  array  $fields  The new fields.
 */',
        'startLine' => 123,
        'endLine' => 130,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Fields',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Fields',
        'currentClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Fields',
        'aliasName' => NULL,
      ),
      'afterField' => 
      array (
        'name' => 'afterField',
        'parameters' => 
        array (
          'targetFieldName' => 
          array (
            'name' => 'targetFieldName',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 137,
            'endLine' => 137,
            'startColumn' => 32,
            'endColumn' => 47,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Move the most recently added field after the given target field.
 *
 * @param  string  $targetFieldName  The target field name.
 */',
        'startLine' => 137,
        'endLine' => 142,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Fields',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Fields',
        'currentClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Fields',
        'aliasName' => NULL,
      ),
      'beforeField' => 
      array (
        'name' => 'beforeField',
        'parameters' => 
        array (
          'targetFieldName' => 
          array (
            'name' => 'targetFieldName',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 149,
            'endLine' => 149,
            'startColumn' => 33,
            'endColumn' => 48,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Move the most recently added field before the given target field.
 *
 * @param  string  $targetFieldName  The target field name.
 */',
        'startLine' => 149,
        'endLine' => 154,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Fields',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Fields',
        'currentClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Fields',
        'aliasName' => NULL,
      ),
      'makeFirstField' => 
      array (
        'name' => 'makeFirstField',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Move this field to be first in the fields list.
 *
 * @return ?bool
 */',
        'startLine' => 161,
        'endLine' => 169,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Fields',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Fields',
        'currentClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Fields',
        'aliasName' => NULL,
      ),
      'removeField' => 
      array (
        'name' => 'removeField',
        'parameters' => 
        array (
          'name' => 
          array (
            'name' => 'name',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 176,
            'endLine' => 176,
            'startColumn' => 33,
            'endColumn' => 37,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Remove a certain field from the create/update/both forms by its name.
 *
 * @param  string  $name  Field name (as defined with the addField() procedure)
 */',
        'startLine' => 176,
        'endLine' => 183,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Fields',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Fields',
        'currentClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Fields',
        'aliasName' => NULL,
      ),
      'removeFields' => 
      array (
        'name' => 'removeFields',
        'parameters' => 
        array (
          'array_of_names' => 
          array (
            'name' => 'array_of_names',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 190,
            'endLine' => 190,
            'startColumn' => 34,
            'endColumn' => 48,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Remove many fields from the create/update/both forms by their name.
 *
 * @param  array  $array_of_names  A simple array of the names of the fields to be removed.
 */',
        'startLine' => 190,
        'endLine' => 197,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Fields',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Fields',
        'currentClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Fields',
        'aliasName' => NULL,
      ),
      'removeAllFields' => 
      array (
        'name' => 'removeAllFields',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Remove all fields from the create/update/both forms.
 */',
        'startLine' => 202,
        'endLine' => 210,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Fields',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Fields',
        'currentClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Fields',
        'aliasName' => NULL,
      ),
      'removeFieldAttribute' => 
      array (
        'name' => 'removeFieldAttribute',
        'parameters' => 
        array (
          'field' => 
          array (
            'name' => 'field',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 218,
            'endLine' => 218,
            'startColumn' => 42,
            'endColumn' => 47,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'attribute' => 
          array (
            'name' => 'attribute',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 218,
            'endLine' => 218,
            'startColumn' => 50,
            'endColumn' => 59,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Remove an attribute from one field\'s definition array.
 *
 * @param  string  $field  The name of the field.
 * @param  string  $attribute  The name of the attribute being removed.
 */',
        'startLine' => 218,
        'endLine' => 225,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Fields',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Fields',
        'currentClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Fields',
        'aliasName' => NULL,
      ),
      'modifyField' => 
      array (
        'name' => 'modifyField',
        'parameters' => 
        array (
          'fieldName' => 
          array (
            'name' => 'fieldName',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 233,
            'endLine' => 233,
            'startColumn' => 33,
            'endColumn' => 42,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'modifications' => 
          array (
            'name' => 'modifications',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 233,
            'endLine' => 233,
            'startColumn' => 45,
            'endColumn' => 58,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Update value of a given key for a current field.
 *
 * @param  string  $fieldName  The field name
 * @param  array  $modifications  An array of changes to be made.
 */',
        'startLine' => 233,
        'endLine' => 245,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Fields',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Fields',
        'currentClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Fields',
        'aliasName' => NULL,
      ),
      'setFieldLabel' => 
      array (
        'name' => 'setFieldLabel',
        'parameters' => 
        array (
          'field' => 
          array (
            'name' => 'field',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 253,
            'endLine' => 253,
            'startColumn' => 35,
            'endColumn' => 40,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'label' => 
          array (
            'name' => 'label',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 253,
            'endLine' => 253,
            'startColumn' => 43,
            'endColumn' => 48,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Set label for a specific field.
 *
 * @param  string  $field
 * @param  string  $label
 */',
        'startLine' => 253,
        'endLine' => 256,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Fields',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Fields',
        'currentClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Fields',
        'aliasName' => NULL,
      ),
      'checkIfFieldIsFirstOfItsType' => 
      array (
        'name' => 'checkIfFieldIsFirstOfItsType',
        'parameters' => 
        array (
          'field' => 
          array (
            'name' => 'field',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 265,
            'endLine' => 265,
            'startColumn' => 50,
            'endColumn' => 55,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Check if field is the first of its type in the given fields array.
 * It\'s used in each field_type.blade.php to determine whether to push the css and js content or not (we only need to push the js and css for a field the first time it\'s loaded in the form, not any subsequent times).
 *
 * @param  array  $field  The current field being tested if it\'s the first of its type.
 * @return bool true/false
 */',
        'startLine' => 265,
        'endLine' => 275,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Fields',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Fields',
        'currentClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Fields',
        'aliasName' => NULL,
      ),
      'getCurrentFields' => 
      array (
        'name' => 'getCurrentFields',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @return array
 */',
        'startLine' => 280,
        'endLine' => 283,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Fields',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Fields',
        'currentClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Fields',
        'aliasName' => NULL,
      ),
      'orderFields' => 
      array (
        'name' => 'orderFields',
        'parameters' => 
        array (
          'order' => 
          array (
            'name' => 'order',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 291,
            'endLine' => 291,
            'startColumn' => 33,
            'endColumn' => 38,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Order the CRUD fields. If certain fields are missing from the given order array, they will be
 * pushed to the new fields array in the original order.
 *
 * @param  array  $order  An array of field names in the desired order.
 */',
        'startLine' => 291,
        'endLine' => 296,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Fields',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Fields',
        'currentClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Fields',
        'aliasName' => NULL,
      ),
      'getFields' => 
      array (
        'name' => 'getFields',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the fields for the create or update forms.
 *
 * @return array all the fields that need to be shown and their information
 */',
        'startLine' => 303,
        'endLine' => 306,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Fields',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Fields',
        'currentClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Fields',
        'aliasName' => NULL,
      ),
      'hasUploadFields' => 
      array (
        'name' => 'hasUploadFields',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Check if the create/update form has upload fields.
 * Upload fields are the ones that have "upload" => true defined on them.
 *
 * @return bool
 */',
        'startLine' => 314,
        'endLine' => 331,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Fields',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Fields',
        'currentClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Fields',
        'aliasName' => NULL,
      ),
      'getLoadedFieldTypes' => 
      array (
        'name' => 'getLoadedFieldTypes',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get all the field types whose resources (JS and CSS) have already been loaded on page.
 *
 * @return array Array with the names of the field types.
 */',
        'startLine' => 342,
        'endLine' => 345,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Fields',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Fields',
        'currentClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Fields',
        'aliasName' => NULL,
      ),
      'setLoadedFieldTypes' => 
      array (
        'name' => 'setLoadedFieldTypes',
        'parameters' => 
        array (
          'fieldTypes' => 
          array (
            'name' => 'fieldTypes',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 352,
            'endLine' => 352,
            'startColumn' => 41,
            'endColumn' => 51,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Set an array of field type names as already loaded for the current operation.
 *
 * @param  array  $fieldTypes
 */',
        'startLine' => 352,
        'endLine' => 355,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Fields',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Fields',
        'currentClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Fields',
        'aliasName' => NULL,
      ),
      'getFieldTypeWithNamespace' => 
      array (
        'name' => 'getFieldTypeWithNamespace',
        'parameters' => 
        array (
          'field' => 
          array (
            'name' => 'field',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 364,
            'endLine' => 364,
            'startColumn' => 47,
            'endColumn' => 52,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get a namespaced version of the field type name.
 * Appends the \'view_namespace\' attribute of the field to the `type\', using dot notation.
 *
 * @param  mixed  $field
 * @return string Namespaced version of the field type name. Ex: \'text\', \'custom.view.path.text\'
 */',
        'startLine' => 364,
        'endLine' => 376,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Fields',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Fields',
        'currentClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Fields',
        'aliasName' => NULL,
      ),
      'addLoadedFieldType' => 
      array (
        'name' => 'addLoadedFieldType',
        'parameters' => 
        array (
          'field' => 
          array (
            'name' => 'field',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 384,
            'endLine' => 384,
            'startColumn' => 40,
            'endColumn' => 45,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a new field type to the loadedFieldTypes array.
 *
 * @param  string  $field  Field array
 * @return bool Successful operation true/false.
 */',
        'startLine' => 384,
        'endLine' => 397,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Fields',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Fields',
        'currentClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Fields',
        'aliasName' => NULL,
      ),
      'markFieldTypeAsLoaded' => 
      array (
        'name' => 'markFieldTypeAsLoaded',
        'parameters' => 
        array (
          'field' => 
          array (
            'name' => 'field',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 406,
            'endLine' => 406,
            'startColumn' => 43,
            'endColumn' => 48,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Alias of the addLoadedFieldType() method.
 * Adds a new field type to the loadedFieldTypes array.
 *
 * @param  string  $field  Field array
 * @return bool Successful operation true/false.
 */',
        'startLine' => 406,
        'endLine' => 409,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Fields',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Fields',
        'currentClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Fields',
        'aliasName' => NULL,
      ),
      'fieldTypeLoaded' => 
      array (
        'name' => 'fieldTypeLoaded',
        'parameters' => 
        array (
          'field' => 
          array (
            'name' => 'field',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 417,
            'endLine' => 417,
            'startColumn' => 37,
            'endColumn' => 42,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Check if a field type\'s reasources (CSS and JS) have already been loaded.
 *
 * @param  string  $field  Field array
 * @return bool Whether the field type has been marked as loaded.
 */',
        'startLine' => 417,
        'endLine' => 420,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Fields',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Fields',
        'currentClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Fields',
        'aliasName' => NULL,
      ),
      'fieldTypeNotLoaded' => 
      array (
        'name' => 'fieldTypeNotLoaded',
        'parameters' => 
        array (
          'field' => 
          array (
            'name' => 'field',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 428,
            'endLine' => 428,
            'startColumn' => 40,
            'endColumn' => 45,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Check if a field type\'s reasources (CSS and JS) have NOT been loaded.
 *
 * @param  string  $field  Field array
 * @return bool Whether the field type has NOT been marked as loaded.
 */',
        'startLine' => 428,
        'endLine' => 431,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Fields',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Fields',
        'currentClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Fields',
        'aliasName' => NULL,
      ),
      'getAllFieldNames' => 
      array (
        'name' => 'getAllFieldNames',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get a list of all field names for the current operation.
 *
 * @return array
 */',
        'startLine' => 438,
        'endLine' => 455,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Fields',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Fields',
        'currentClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Fields',
        'aliasName' => NULL,
      ),
      'getStrippedSaveRequest' => 
      array (
        'name' => 'getStrippedSaveRequest',
        'parameters' => 
        array (
          'request' => 
          array (
            'name' => 'request',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 464,
            'endLine' => 464,
            'startColumn' => 44,
            'endColumn' => 51,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the request without anything that might have been maliciously inserted.
 * Only specific field names that have been introduced with addField() are kept in the request.
 *
 * @param  \\Illuminate\\Http\\Request  $request
 * @return array
 */',
        'startLine' => 464,
        'endLine' => 482,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Fields',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Fields',
        'currentClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Fields',
        'aliasName' => NULL,
      ),
      'hasFieldWhere' => 
      array (
        'name' => 'hasFieldWhere',
        'parameters' => 
        array (
          'attribute' => 
          array (
            'name' => 'attribute',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 491,
            'endLine' => 491,
            'startColumn' => 35,
            'endColumn' => 44,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 491,
            'endLine' => 491,
            'startColumn' => 47,
            'endColumn' => 52,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Check if a field exists, by any given attribute.
 *
 * @param  string  $attribute  Attribute name on that field definition array.
 * @param  string  $value  Value of that attribute on that field definition array.
 * @return bool
 */',
        'startLine' => 491,
        'endLine' => 498,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Fields',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Fields',
        'currentClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Fields',
        'aliasName' => NULL,
      ),
      'firstFieldWhere' => 
      array (
        'name' => 'firstFieldWhere',
        'parameters' => 
        array (
          'attribute' => 
          array (
            'name' => 'attribute',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 507,
            'endLine' => 507,
            'startColumn' => 37,
            'endColumn' => 46,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 507,
            'endLine' => 507,
            'startColumn' => 49,
            'endColumn' => 54,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the first field where a given attribute has the given value.
 *
 * @param  string  $attribute  Attribute name on that field definition array.
 * @param  string  $value  Value of that attribute on that field definition array.
 * @return bool
 */',
        'startLine' => 507,
        'endLine' => 512,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Fields',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Fields',
        'currentClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Fields',
        'aliasName' => NULL,
      ),
      'holdsMultipleInputs' => 
      array (
        'name' => 'holdsMultipleInputs',
        'parameters' => 
        array (
          'fieldName' => 
          array (
            'name' => 'fieldName',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'string',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 518,
            'endLine' => 518,
            'startColumn' => 41,
            'endColumn' => 57,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * The field hold multiple inputs (one field represent multiple model attributes / relations)
 * eg: date range or checklist dependency.
 */',
        'startLine' => 518,
        'endLine' => 521,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Fields',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Fields',
        'currentClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Fields',
        'aliasName' => NULL,
      ),
      'field' => 
      array (
        'name' => 'field',
        'parameters' => 
        array (
          'nameOrDefinition' => 
          array (
            'name' => 'nameOrDefinition',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 538,
            'endLine' => 538,
            'startColumn' => 27,
            'endColumn' => 43,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Create and return a CrudField object for that field name.
 *
 * Enables developers to use a fluent syntax to declare their fields,
 * in addition to the existing options:
 * - CRUD::addField([\'name\' => \'price\', \'type\' => \'number\']);
 * - CRUD::field(\'price\')->type(\'number\');
 * - CRUD::field([\'name\' => \'price\', \'type\' => \'number\']);
 *
 * And if the developer uses the CrudField object as Field in their CrudController:
 * - Field::name(\'price\')->type(\'number\');
 *
 * @param  string|array  $nameOrDefinition  The name of the column in the db, or model attribute.
 * @return CrudField
 */',
        'startLine' => 538,
        'endLine' => 541,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Fields',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Fields',
        'currentClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Fields',
        'aliasName' => NULL,
      ),
    ),
    'traitsData' => 
    array (
      'aliases' => 
      array (
      ),
      'modifiers' => 
      array (
      ),
      'precedences' => 
      array (
      ),
      'hashes' => 
      array (
      ),
    ),
  ),
));