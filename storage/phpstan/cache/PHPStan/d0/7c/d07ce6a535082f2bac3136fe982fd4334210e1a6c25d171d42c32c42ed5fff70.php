<?php declare(strict_types = 1);

// osfsl-/var/www/vendor/composer/../backpack/crud/src/app/Models/Traits/HasRelationshipFields.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Backpack\CRUD\app\Models\Traits\HasRelationshipFields
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-1896cbacd58f4c00a65eb6113d165b7b0c05a4d5744d244705ff9fb73276b349-8.4.20-6.70.0.0',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Backpack\\CRUD\\app\\Models\\Traits\\HasRelationshipFields',
        'filename' => '/var/www/vendor/composer/../backpack/crud/src/app/Models/Traits/HasRelationshipFields.php',
      ),
    ),
    'namespace' => 'Backpack\\CRUD\\app\\Models\\Traits',
    'name' => 'Backpack\\CRUD\\app\\Models\\Traits\\HasRelationshipFields',
    'shortName' => 'HasRelationshipFields',
    'isInterface' => false,
    'isTrait' => true,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => NULL,
    'attributes' => 
    array (
    ),
    'startLine' => 14,
    'endLine' => 145,
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
    ),
    'immediateMethods' => 
    array (
      'getConnectionWithExtraTypeMappings' => 
      array (
        'name' => 'getConnectionWithExtraTypeMappings',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Register additional types in doctrine schema manager for the current connection.
 *
 * @return DB
 */',
        'startLine' => 21,
        'endLine' => 45,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Backpack\\CRUD\\app\\Models\\Traits',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Models\\Traits\\HasRelationshipFields',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Models\\Traits\\HasRelationshipFields',
        'currentClassName' => 'Backpack\\CRUD\\app\\Models\\Traits\\HasRelationshipFields',
        'aliasName' => NULL,
      ),
      'getTableWithPrefix' => 
      array (
        'name' => 'getTableWithPrefix',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the model\'s table name, with the prefix added from the configuration file.
 *
 * @return string Table name with prefix
 */',
        'startLine' => 52,
        'endLine' => 58,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Backpack\\CRUD\\app\\Models\\Traits',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Models\\Traits\\HasRelationshipFields',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Models\\Traits\\HasRelationshipFields',
        'currentClassName' => 'Backpack\\CRUD\\app\\Models\\Traits\\HasRelationshipFields',
        'aliasName' => NULL,
      ),
      'getColumnType' => 
      array (
        'name' => 'getColumnType',
        'parameters' => 
        array (
          'columnName' => 
          array (
            'name' => 'columnName',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 66,
            'endLine' => 66,
            'startColumn' => 35,
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
 * Get the column type for a certain db column.
 *
 * @param  string  $columnName  Name of the column in the db table.
 * @return string Db column type.
 */',
        'startLine' => 66,
        'endLine' => 73,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Backpack\\CRUD\\app\\Models\\Traits',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Models\\Traits\\HasRelationshipFields',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Models\\Traits\\HasRelationshipFields',
        'currentClassName' => 'Backpack\\CRUD\\app\\Models\\Traits\\HasRelationshipFields',
        'aliasName' => NULL,
      ),
      'isColumnNullable' => 
      array (
        'name' => 'isColumnNullable',
        'parameters' => 
        array (
          'columnName' => 
          array (
            'name' => 'columnName',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 81,
            'endLine' => 81,
            'startColumn' => 45,
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
 * Checks if the given column name is nullable.
 *
 * @param  string  $column_name  The name of the db column.
 * @return bool
 */',
        'startLine' => 81,
        'endLine' => 88,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Backpack\\CRUD\\app\\Models\\Traits',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Models\\Traits\\HasRelationshipFields',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Models\\Traits\\HasRelationshipFields',
        'currentClassName' => 'Backpack\\CRUD\\app\\Models\\Traits\\HasRelationshipFields',
        'aliasName' => NULL,
      ),
      'dbColumnHasDefault' => 
      array (
        'name' => 'dbColumnHasDefault',
        'parameters' => 
        array (
          'columnName' => 
          array (
            'name' => 'columnName',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 96,
            'endLine' => 96,
            'startColumn' => 47,
            'endColumn' => 57,
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
 * Checks if the given column name has default value set.
 *
 * @param  string  $columnName  The name of the db column.
 * @return bool
 */',
        'startLine' => 96,
        'endLine' => 103,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Backpack\\CRUD\\app\\Models\\Traits',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Models\\Traits\\HasRelationshipFields',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Models\\Traits\\HasRelationshipFields',
        'currentClassName' => 'Backpack\\CRUD\\app\\Models\\Traits\\HasRelationshipFields',
        'aliasName' => NULL,
      ),
      'getDbColumnDefault' => 
      array (
        'name' => 'getDbColumnDefault',
        'parameters' => 
        array (
          'columnName' => 
          array (
            'name' => 'columnName',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 111,
            'endLine' => 111,
            'startColumn' => 47,
            'endColumn' => 57,
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
 * Return the db column default value.
 *
 * @param  string  $column_name  The name of the db column.
 * @return bool
 */',
        'startLine' => 111,
        'endLine' => 118,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Backpack\\CRUD\\app\\Models\\Traits',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Models\\Traits\\HasRelationshipFields',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Models\\Traits\\HasRelationshipFields',
        'currentClassName' => 'Backpack\\CRUD\\app\\Models\\Traits\\HasRelationshipFields',
        'aliasName' => NULL,
      ),
      'getConnectionAndTable' => 
      array (
        'name' => 'getConnectionAndTable',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Return the current model connection and table name.
 */',
        'startLine' => 123,
        'endLine' => 130,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 20,
        'namespace' => 'Backpack\\CRUD\\app\\Models\\Traits',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Models\\Traits\\HasRelationshipFields',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Models\\Traits\\HasRelationshipFields',
        'currentClassName' => 'Backpack\\CRUD\\app\\Models\\Traits\\HasRelationshipFields',
        'aliasName' => NULL,
      ),
      'getDbTableSchema' => 
      array (
        'name' => 'getDbTableSchema',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 132,
        'endLine' => 137,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Backpack\\CRUD\\app\\Models\\Traits',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Models\\Traits\\HasRelationshipFields',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Models\\Traits\\HasRelationshipFields',
        'currentClassName' => 'Backpack\\CRUD\\app\\Models\\Traits\\HasRelationshipFields',
        'aliasName' => NULL,
      ),
      'isSqlConnection' => 
      array (
        'name' => 'isSqlConnection',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 139,
        'endLine' => 144,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 20,
        'namespace' => 'Backpack\\CRUD\\app\\Models\\Traits',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Models\\Traits\\HasRelationshipFields',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Models\\Traits\\HasRelationshipFields',
        'currentClassName' => 'Backpack\\CRUD\\app\\Models\\Traits\\HasRelationshipFields',
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