<?php declare(strict_types = 1);

// osfsl-/var/www/vendor/composer/../backpack/crud/src/app/Library/CrudPanel/Traits/AutoSet.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Backpack\CRUD\app\Library\CrudPanel\Traits\AutoSet
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-4ad8689630ae2b65d6a8cc3d7331bc2e012bab75fdaae679e271b7b27f36d2fd-8.4.20-6.70.0.0',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\AutoSet',
        'filename' => '/var/www/vendor/composer/../backpack/crud/src/app/Library/CrudPanel/Traits/AutoSet.php',
      ),
    ),
    'namespace' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits',
    'name' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\AutoSet',
    'shortName' => 'AutoSet',
    'isInterface' => false,
    'isTrait' => true,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => NULL,
    'attributes' => 
    array (
    ),
    'startLine' => 5,
    'endLine' => 228,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
    ),
    'traitClassNames' => 
    array (
    ),
    'immediateConstants' => 
    array (
    ),
    'immediateProperties' => 
    array (
      'autoset' => 
      array (
        'declaringClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\AutoSet',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\AutoSet',
        'name' => 'autoset',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 7,
            'endLine' => 7,
            'startTokenPos' => 19,
            'startFilePos' => 103,
            'endTokenPos' => 20,
            'endFilePos' => 104,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 7,
        'endLine' => 7,
        'startColumn' => 5,
        'endColumn' => 28,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
    ),
    'immediateMethods' => 
    array (
      'setFromDb' => 
      array (
        'name' => 'setFromDb',
        'parameters' => 
        array (
          'setFields' => 
          array (
            'name' => 'setFields',
            'default' => 
            array (
              'code' => 'true',
              'attributes' => 
              array (
                'startLine' => 15,
                'endLine' => 15,
                'startTokenPos' => 35,
                'startFilePos' => 350,
                'endTokenPos' => 35,
                'endFilePos' => 353,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 15,
            'endLine' => 15,
            'startColumn' => 31,
            'endColumn' => 47,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'setColumns' => 
          array (
            'name' => 'setColumns',
            'default' => 
            array (
              'code' => 'true',
              'attributes' => 
              array (
                'startLine' => 15,
                'endLine' => 15,
                'startTokenPos' => 42,
                'startFilePos' => 370,
                'endTokenPos' => 42,
                'endFilePos' => 373,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 15,
            'endLine' => 15,
            'startColumn' => 50,
            'endColumn' => 67,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * For a simple CRUD Panel, there should be no need to add/define the fields.
 * The public columns in the database will be converted to be fields.
 *
 * @return void
 */',
        'startLine' => 15,
        'endLine' => 44,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\AutoSet',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\AutoSet',
        'currentClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\AutoSet',
        'aliasName' => NULL,
      ),
      'getDbColumnTypes' => 
      array (
        'name' => 'getDbColumnTypes',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get all columns from the database for that table.
 *
 * @return array
 */',
        'startLine' => 51,
        'endLine' => 69,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\AutoSet',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\AutoSet',
        'currentClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\AutoSet',
        'aliasName' => NULL,
      ),
      'setDoctrineTypesMapping' => 
      array (
        'name' => 'setDoctrineTypesMapping',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Set extra types mapping on model.
 *
 * DEPRECATION NOTICE: This method is no longer used and will be removed in future versions of Backpack
 *
 * @deprecated
 */',
        'startLine' => 78,
        'endLine' => 81,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\AutoSet',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\AutoSet',
        'currentClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\AutoSet',
        'aliasName' => NULL,
      ),
      'getDbTableColumns' => 
      array (
        'name' => 'getDbTableColumns',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get all columns in the database table.
 *
 * @return array
 */',
        'startLine' => 88,
        'endLine' => 96,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\AutoSet',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\AutoSet',
        'currentClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\AutoSet',
        'aliasName' => NULL,
      ),
      'inferFieldTypeFromDbColumnType' => 
      array (
        'name' => 'inferFieldTypeFromDbColumnType',
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
            'startLine' => 104,
            'endLine' => 104,
            'startColumn' => 55,
            'endColumn' => 64,
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
 * Infer a field type, judging from the database column type.
 *
 * @param  string  $field  Field name.
 * @return string Field type.
 */',
        'startLine' => 104,
        'endLine' => 168,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\AutoSet',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\AutoSet',
        'currentClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\AutoSet',
        'aliasName' => NULL,
      ),
      'makeLabel' => 
      array (
        'name' => 'makeLabel',
        'parameters' => 
        array (
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
            'startLine' => 176,
            'endLine' => 176,
            'startColumn' => 31,
            'endColumn' => 36,
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
 * Turn a database column name or PHP variable into a pretty label to be shown to the user.
 *
 * @param  string  $value  The value.
 * @return string The transformed value.
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
        'declaringClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\AutoSet',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\AutoSet',
        'currentClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\AutoSet',
        'aliasName' => NULL,
      ),
      'getLabel' => 
      array (
        'name' => 'getLabel',
        'parameters' => 
        array (
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
            'startLine' => 188,
            'endLine' => 188,
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
 * Alias to the makeLabel method.
 */',
        'startLine' => 188,
        'endLine' => 191,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\AutoSet',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\AutoSet',
        'currentClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\AutoSet',
        'aliasName' => NULL,
      ),
      'setLabeller' => 
      array (
        'name' => 'setLabeller',
        'parameters' => 
        array (
          'labeller' => 
          array (
            'name' => 'labeller',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'callable',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 199,
            'endLine' => 199,
            'startColumn' => 33,
            'endColumn' => 50,
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
 * Change the way labels are made.
 *
 * @param  callable  $labeller  A function that receives a string and returns the formatted string, after stripping down useless characters.
 * @return self
 */',
        'startLine' => 199,
        'endLine' => 204,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\AutoSet',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\AutoSet',
        'currentClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\AutoSet',
        'aliasName' => NULL,
      ),
      'getDbColumnsNames' => 
      array (
        'name' => 'getDbColumnsNames',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the database column names, in order to figure out what fields/columns to show in the auto-fields-and-columns functionality.
 *
 * @return array Database column names as an array.
 */',
        'startLine' => 211,
        'endLine' => 227,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\AutoSet',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\AutoSet',
        'currentClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\AutoSet',
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