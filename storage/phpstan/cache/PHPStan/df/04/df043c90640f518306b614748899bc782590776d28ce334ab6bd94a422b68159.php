<?php declare(strict_types = 1);

// osfsl-/var/www/vendor/composer/../backpack/crud/src/app/Library/CrudPanel/Traits/ColumnsProtectedMethods.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Backpack\CRUD\app\Library\CrudPanel\Traits\ColumnsProtectedMethods
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6470a1c722cae2fe5876daee549acd619d6ebbda8315cb0c85348fd6deb9b43a-8.4.20-6.70.0.0',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\ColumnsProtectedMethods',
        'filename' => '/var/www/vendor/composer/../backpack/crud/src/app/Library/CrudPanel/Traits/ColumnsProtectedMethods.php',
      ),
    ),
    'namespace' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits',
    'name' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\ColumnsProtectedMethods',
    'shortName' => 'ColumnsProtectedMethods',
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
    'endLine' => 352,
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
      'addColumnToOperationSettings' => 
      array (
        'name' => 'addColumnToOperationSettings',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 16,
            'endLine' => 16,
            'startColumn' => 53,
            'endColumn' => 59,
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
 * Add a column to the current operation, using the Setting API.
 *
 * @param  array  $column  Column definition array.
 */',
        'startLine' => 16,
        'endLine' => 22,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\ColumnsProtectedMethods',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\ColumnsProtectedMethods',
        'currentClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\ColumnsProtectedMethods',
        'aliasName' => NULL,
      ),
      'makeSureColumnHasPriority' => 
      array (
        'name' => 'makeSureColumnHasPriority',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 30,
            'endLine' => 30,
            'startColumn' => 50,
            'endColumn' => 56,
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
 * If a column priority has not been defined, provide a default one.
 *
 * @param  array  $column  Column definition array.
 * @return array Proper array defining the column.
 */',
        'startLine' => 30,
        'endLine' => 38,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\ColumnsProtectedMethods',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\ColumnsProtectedMethods',
        'currentClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\ColumnsProtectedMethods',
        'aliasName' => NULL,
      ),
      'makeSureColumnHasName' => 
      array (
        'name' => 'makeSureColumnHasName',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 47,
            'endLine' => 47,
            'startColumn' => 46,
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
 * If the field definition array is actually a string, it means the programmer was lazy
 * and has only passed the name of the column. Turn that into a proper array.
 *
 * @param  array  $column  Column definition array.
 * @return array Proper array defining the column.
 */',
        'startLine' => 47,
        'endLine' => 60,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\ColumnsProtectedMethods',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\ColumnsProtectedMethods',
        'currentClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\ColumnsProtectedMethods',
        'aliasName' => NULL,
      ),
      'makeSureColumnHasLabel' => 
      array (
        'name' => 'makeSureColumnHasLabel',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 69,
            'endLine' => 69,
            'startColumn' => 47,
            'endColumn' => 53,
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
 * If a column array is missing the "label" attribute, an ugly error would be show.
 * So we add the field Name as a label - it\'s better than nothing.
 *
 * @param  array  $column  Column definition array.
 * @return array Proper array defining the column.
 */',
        'startLine' => 69,
        'endLine' => 76,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\ColumnsProtectedMethods',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\ColumnsProtectedMethods',
        'currentClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\ColumnsProtectedMethods',
        'aliasName' => NULL,
      ),
      'makeSureColumnHasType' => 
      array (
        'name' => 'makeSureColumnHasType',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 84,
            'endLine' => 84,
            'startColumn' => 46,
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
 * If a column definition is missing the type, set a default.
 *
 * @param  array  $column  Column definition array.
 * @return array Column definition array with type.
 */',
        'startLine' => 84,
        'endLine' => 144,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\ColumnsProtectedMethods',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\ColumnsProtectedMethods',
        'currentClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\ColumnsProtectedMethods',
        'aliasName' => NULL,
      ),
      'makeSureColumnHasKey' => 
      array (
        'name' => 'makeSureColumnHasKey',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 154,
            'endLine' => 154,
            'startColumn' => 45,
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
 * If a column definition is missing the key, set the default.
 * The key is used when storing all columns using the Settings API,
 * it is used as the "key" of the associative array that holds all columns.
 *
 * @param  array  $column  Column definition array.
 * @return array Column definition array with key.
 */',
        'startLine' => 154,
        'endLine' => 161,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\ColumnsProtectedMethods',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\ColumnsProtectedMethods',
        'currentClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\ColumnsProtectedMethods',
        'aliasName' => NULL,
      ),
      'makeSureColumnHasWrapper' => 
      array (
        'name' => 'makeSureColumnHasWrapper',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 171,
            'endLine' => 171,
            'startColumn' => 49,
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
 * @deprecated Never used. Will be removed in a future version.
 *
 * @param  array  $column  Column definition array.
 * @return array Column definition array with wrapper.
 *
 * @codeCoverageIgnore
 */',
        'startLine' => 171,
        'endLine' => 178,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\ColumnsProtectedMethods',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\ColumnsProtectedMethods',
        'currentClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\ColumnsProtectedMethods',
        'aliasName' => NULL,
      ),
      'makeSureColumnHasEntity' => 
      array (
        'name' => 'makeSureColumnHasEntity',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 180,
            'endLine' => 180,
            'startColumn' => 48,
            'endColumn' => 54,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 180,
        'endLine' => 234,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\ColumnsProtectedMethods',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\ColumnsProtectedMethods',
        'currentClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\ColumnsProtectedMethods',
        'aliasName' => NULL,
      ),
      'makeSureColumnHasAttribute' => 
      array (
        'name' => 'makeSureColumnHasAttribute',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'array',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 242,
            'endLine' => 242,
            'startColumn' => 51,
            'endColumn' => 63,
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
 * Infer the attribute for the column when needed.
 *
 * @param  array  $column
 * @return void
 */',
        'startLine' => 242,
        'endLine' => 245,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\ColumnsProtectedMethods',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\ColumnsProtectedMethods',
        'currentClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\ColumnsProtectedMethods',
        'aliasName' => NULL,
      ),
      'makeSureColumnHasModel' => 
      array (
        'name' => 'makeSureColumnHasModel',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 254,
            'endLine' => 254,
            'startColumn' => 47,
            'endColumn' => 53,
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
 * If an entity has been defined for the column, but no model,
 * determine the model from that relationship.
 *
 * @param  array  $column  Column definition array.
 * @return array Column definition array with model.
 */',
        'startLine' => 254,
        'endLine' => 263,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\ColumnsProtectedMethods',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\ColumnsProtectedMethods',
        'currentClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\ColumnsProtectedMethods',
        'aliasName' => NULL,
      ),
      'makeSureColumnHasRelationType' => 
      array (
        'name' => 'makeSureColumnHasRelationType',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 272,
            'endLine' => 272,
            'startColumn' => 54,
            'endColumn' => 60,
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
 * If an entity has been defined for the column, but no relation type,
 * determine the relation type from that relationship.
 *
 * @param  array  $column  Column definition array.
 * @return array Column definition array with model.
 */',
        'startLine' => 272,
        'endLine' => 279,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\ColumnsProtectedMethods',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\ColumnsProtectedMethods',
        'currentClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\ColumnsProtectedMethods',
        'aliasName' => NULL,
      ),
      'moveColumn' => 
      array (
        'name' => 'moveColumn',
        'parameters' => 
        array (
          'targetColumn' => 
          array (
            'name' => 'targetColumn',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 287,
            'endLine' => 287,
            'startColumn' => 35,
            'endColumn' => 47,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'before' => 
          array (
            'name' => 'before',
            'default' => 
            array (
              'code' => 'true',
              'attributes' => 
              array (
                'startLine' => 287,
                'endLine' => 287,
                'startTokenPos' => 1410,
                'startFilePos' => 9762,
                'endTokenPos' => 1410,
                'endFilePos' => 9765,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 287,
            'endLine' => 287,
            'startColumn' => 50,
            'endColumn' => 63,
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
 * Move the most recently added column before or after the given target column. Default is before.
 *
 * @param  string|array  $targetColumn  The target column name or array.
 * @param  bool  $before  If true, the column will be moved before the target column, otherwise it will be moved after it.
 */',
        'startLine' => 287,
        'endLine' => 314,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\ColumnsProtectedMethods',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\ColumnsProtectedMethods',
        'currentClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\ColumnsProtectedMethods',
        'aliasName' => NULL,
      ),
      'hasDatabaseColumn' => 
      array (
        'name' => 'hasDatabaseColumn',
        'parameters' => 
        array (
          'table' => 
          array (
            'name' => 'table',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 323,
            'endLine' => 323,
            'startColumn' => 42,
            'endColumn' => 47,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
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
            'startLine' => 323,
            'endLine' => 323,
            'startColumn' => 50,
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
 * Check if the column exists in the database, as a DB column.
 *
 * @param  string  $table
 * @param  string  $name
 * @return bool
 */',
        'startLine' => 323,
        'endLine' => 338,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\ColumnsProtectedMethods',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\ColumnsProtectedMethods',
        'currentClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\ColumnsProtectedMethods',
        'aliasName' => NULL,
      ),
      'prepareAttributesAndAddColumn' => 
      array (
        'name' => 'prepareAttributesAndAddColumn',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
              'data' => 
              array (
                'types' => 
                array (
                  0 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'array',
                      'isIdentifier' => true,
                    ),
                  ),
                  1 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'string',
                      'isIdentifier' => true,
                    ),
                  ),
                ),
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 343,
            'endLine' => 343,
            'startColumn' => 52,
            'endColumn' => 71,
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
            'name' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudColumn',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Prepare the column attributes and add it to operation settings.
 */',
        'startLine' => 343,
        'endLine' => 351,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\ColumnsProtectedMethods',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\ColumnsProtectedMethods',
        'currentClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\ColumnsProtectedMethods',
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