<?php declare(strict_types = 1);

// osfsl-/var/www/vendor/composer/../backpack/crud/src/app/Library/CrudPanel/CrudColumn.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Backpack\CRUD\app\Library\CrudPanel\CrudColumn
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-2692a8815f04ef63a31e14b9e730f13aaddbb903090581c56bdcdc8022f6ef25-8.4.20-6.70.0.0',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudColumn',
        'filename' => '/var/www/vendor/composer/../backpack/crud/src/app/Library/CrudPanel/CrudColumn.php',
      ),
    ),
    'namespace' => 'Backpack\\CRUD\\app\\Library\\CrudPanel',
    'name' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudColumn',
    'shortName' => 'CrudColumn',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Adds fluent syntax to Backpack CRUD Columns.
 *
 * In addition to the existing:
 * - CRUD::addColumn([\'name\' => \'price\', \'type\' => \'number\']);
 *
 * Developers can also do:
 * - CRUD::column(\'price\')->type(\'number\');
 *
 * And if the developer uses CrudColumn as Column in their CrudController:
 * - Column::name(\'price\')->type(\'number\');
 *
 * @method self type(string $value)
 * @method self label(string $value)
 * @method self searchLogic(mixed $value)
 * @method self orderLogic(callable $value)
 * @method self orderable(bool $value)
 * @method self wrapper(array $value)
 * @method self visibleInTable(bool $value)
 * @method self visibleInModal(bool $value)
 * @method self visibleInExport(bool $value)
 * @method self visibleInShow(bool $value)
 * @method self priority(int $value)
 * @method self key(string $value)
 * @method self upload(bool $value)
 * @method self linkTo(string $routeName, ?array $parameters = [])
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 35,
    'endLine' => 340,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
    ),
    'traitClassNames' => 
    array (
      0 => 'Illuminate\\Support\\Traits\\Conditionable',
      1 => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Support\\MacroableWithAttributes',
    ),
    'immediateConstants' => 
    array (
    ),
    'immediateProperties' => 
    array (
      'attributes' => 
      array (
        'declaringClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudColumn',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudColumn',
        'name' => 'attributes',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 40,
        'endLine' => 40,
        'startColumn' => 5,
        'endColumn' => 26,
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
      '__construct' => 
      array (
        'name' => '__construct',
        'parameters' => 
        array (
          'nameOrDefinitionArray' => 
          array (
            'name' => 'nameOrDefinitionArray',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 42,
            'endLine' => 42,
            'startColumn' => 33,
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
        'startLine' => 42,
        'endLine' => 64,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Backpack\\CRUD\\app\\Library\\CrudPanel',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudColumn',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudColumn',
        'currentClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudColumn',
        'aliasName' => NULL,
      ),
      'crud' => 
      array (
        'name' => 'crud',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 66,
        'endLine' => 69,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Backpack\\CRUD\\app\\Library\\CrudPanel',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudColumn',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudColumn',
        'currentClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudColumn',
        'aliasName' => NULL,
      ),
      'name' => 
      array (
        'name' => 'name',
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
            'startLine' => 77,
            'endLine' => 77,
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
 * Create a CrudColumn object with the parameter as its name.
 *
 * @param  string  $name  Name of the column in the db, or model attribute.
 * @return CrudColumn
 */',
        'startLine' => 77,
        'endLine' => 80,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Backpack\\CRUD\\app\\Library\\CrudPanel',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudColumn',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudColumn',
        'currentClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudColumn',
        'aliasName' => NULL,
      ),
      'key' => 
      array (
        'name' => 'key',
        'parameters' => 
        array (
          'key' => 
          array (
            'name' => 'key',
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
            'startLine' => 88,
            'endLine' => 88,
            'startColumn' => 25,
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
 * Change the CrudColumn key.
 *
 * @param  string  $key  New key for the column
 * @return CrudColumn
 */',
        'startLine' => 88,
        'endLine' => 107,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Backpack\\CRUD\\app\\Library\\CrudPanel',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudColumn',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudColumn',
        'currentClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudColumn',
        'aliasName' => NULL,
      ),
      'remove' => 
      array (
        'name' => 'remove',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Remove the current column from the current operation.
 *
 * @return void
 */',
        'startLine' => 114,
        'endLine' => 117,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Backpack\\CRUD\\app\\Library\\CrudPanel',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudColumn',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudColumn',
        'currentClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudColumn',
        'aliasName' => NULL,
      ),
      'forget' => 
      array (
        'name' => 'forget',
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
            'startLine' => 125,
            'endLine' => 125,
            'startColumn' => 28,
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
 * Remove an attribute from the column definition array.
 *
 * @param  string  $attribute  Name of the attribute being removed
 * @return CrudColumn
 */',
        'startLine' => 125,
        'endLine' => 130,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Backpack\\CRUD\\app\\Library\\CrudPanel',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudColumn',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudColumn',
        'currentClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudColumn',
        'aliasName' => NULL,
      ),
      'after' => 
      array (
        'name' => 'after',
        'parameters' => 
        array (
          'destinationColumn' => 
          array (
            'name' => 'destinationColumn',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 138,
            'endLine' => 138,
            'startColumn' => 27,
            'endColumn' => 44,
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
 * Move the current column after another column.
 *
 * @param  string  $destinationColumn  Name of the destination column.
 * @return CrudColumn
 */',
        'startLine' => 138,
        'endLine' => 144,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Backpack\\CRUD\\app\\Library\\CrudPanel',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudColumn',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudColumn',
        'currentClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudColumn',
        'aliasName' => NULL,
      ),
      'afterColumn' => 
      array (
        'name' => 'afterColumn',
        'parameters' => 
        array (
          'destinationColumn' => 
          array (
            'name' => 'destinationColumn',
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
            'startLine' => 147,
            'endLine' => 147,
            'startColumn' => 33,
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
        'docComment' => '/** Alias of after() */',
        'startLine' => 147,
        'endLine' => 150,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Backpack\\CRUD\\app\\Library\\CrudPanel',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudColumn',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudColumn',
        'currentClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudColumn',
        'aliasName' => NULL,
      ),
      'before' => 
      array (
        'name' => 'before',
        'parameters' => 
        array (
          'destinationColumn' => 
          array (
            'name' => 'destinationColumn',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 158,
            'endLine' => 158,
            'startColumn' => 28,
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
 * Move the current column before another column.
 *
 * @param  string  $destinationColumn  Name of the destination column.
 * @return CrudColumn
 */',
        'startLine' => 158,
        'endLine' => 164,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Backpack\\CRUD\\app\\Library\\CrudPanel',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudColumn',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudColumn',
        'currentClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudColumn',
        'aliasName' => NULL,
      ),
      'upload' => 
      array (
        'name' => 'upload',
        'parameters' => 
        array (
          'upload' => 
          array (
            'name' => 'upload',
            'default' => 
            array (
              'code' => 'true',
              'attributes' => 
              array (
                'startLine' => 166,
                'endLine' => 166,
                'startTokenPos' => 612,
                'startFilePos' => 4668,
                'endTokenPos' => 612,
                'endFilePos' => 4671,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 166,
            'endLine' => 166,
            'startColumn' => 28,
            'endColumn' => 41,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 166,
        'endLine' => 171,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Backpack\\CRUD\\app\\Library\\CrudPanel',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudColumn',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudColumn',
        'currentClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudColumn',
        'aliasName' => NULL,
      ),
      'subfields' => 
      array (
        'name' => 'subfields',
        'parameters' => 
        array (
          'subfields' => 
          array (
            'name' => 'subfields',
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
            'startColumn' => 31,
            'endColumn' => 40,
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
 * When subfields are defined, pass them through the guessing function
 * so that they have label, relationship attributes, etc.
 *
 * @param  array  $subfields  Subfield definition array
 * @return self
 */',
        'startLine' => 180,
        'endLine' => 190,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Backpack\\CRUD\\app\\Library\\CrudPanel',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudColumn',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudColumn',
        'currentClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudColumn',
        'aliasName' => NULL,
      ),
      'makeFirst' => 
      array (
        'name' => 'makeFirst',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Make the current column the first one in the columns list.
 *
 * @return CrudColumn
 */',
        'startLine' => 197,
        'endLine' => 203,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Backpack\\CRUD\\app\\Library\\CrudPanel',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudColumn',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudColumn',
        'currentClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudColumn',
        'aliasName' => NULL,
      ),
      'makeLast' => 
      array (
        'name' => 'makeLast',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Make the current column the last one in the columns list.
 *
 * @return CrudColumn
 */',
        'startLine' => 210,
        'endLine' => 216,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Backpack\\CRUD\\app\\Library\\CrudPanel',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudColumn',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudColumn',
        'currentClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudColumn',
        'aliasName' => NULL,
      ),
      'dump' => 
      array (
        'name' => 'dump',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Dump the current object to the screen,
 * so that the developer can see its contents.
 *
 * @codeCoverageIgnore
 *
 * @return CrudColumn
 */',
        'startLine' => 230,
        'endLine' => 235,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Backpack\\CRUD\\app\\Library\\CrudPanel',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudColumn',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudColumn',
        'currentClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudColumn',
        'aliasName' => NULL,
      ),
      'dd' => 
      array (
        'name' => 'dd',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Dump and die. Dumps the current object to the screen,
 * so that the developer can see its contents, then stops
 * the execution.
 *
 * @codeCoverageIgnore
 *
 * @return CrudColumn
 */',
        'startLine' => 246,
        'endLine' => 251,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Backpack\\CRUD\\app\\Library\\CrudPanel',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudColumn',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudColumn',
        'currentClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudColumn',
        'aliasName' => NULL,
      ),
      'getAttributes' => 
      array (
        'name' => 'getAttributes',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 253,
        'endLine' => 256,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Backpack\\CRUD\\app\\Library\\CrudPanel',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudColumn',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudColumn',
        'currentClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudColumn',
        'aliasName' => NULL,
      ),
      'setAttributeValue' => 
      array (
        'name' => 'setAttributeValue',
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
            'startLine' => 268,
            'endLine' => 268,
            'startColumn' => 40,
            'endColumn' => 49,
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
            'startLine' => 268,
            'endLine' => 268,
            'startColumn' => 52,
            'endColumn' => 57,
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
 * Set the value for a certain attribute on the CrudColumn object.
 *
 * @param  string  $attribute  Name of the attribute.
 * @param  mixed  $value  Value of that attribute.
 */',
        'startLine' => 268,
        'endLine' => 271,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'Backpack\\CRUD\\app\\Library\\CrudPanel',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudColumn',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudColumn',
        'currentClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudColumn',
        'aliasName' => NULL,
      ),
      'setAllAttributeValues' => 
      array (
        'name' => 'setAllAttributeValues',
        'parameters' => 
        array (
          'array' => 
          array (
            'name' => 'array',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 279,
            'endLine' => 279,
            'startColumn' => 44,
            'endColumn' => 49,
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
 * Replace all column attributes on the CrudColumn object
 * with the given array of attribute-value pairs.
 *
 * @param  array  $array  Array of attributes and their values.
 */',
        'startLine' => 279,
        'endLine' => 282,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'Backpack\\CRUD\\app\\Library\\CrudPanel',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudColumn',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudColumn',
        'currentClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudColumn',
        'aliasName' => NULL,
      ),
      'save' => 
      array (
        'name' => 'save',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Update the global CrudPanel object with the current column attributes.
 *
 * @return CrudColumn
 */',
        'startLine' => 289,
        'endLine' => 300,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'Backpack\\CRUD\\app\\Library\\CrudPanel',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudColumn',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudColumn',
        'currentClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudColumn',
        'aliasName' => NULL,
      ),
      'getFreshAttributes' => 
      array (
        'name' => 'getFreshAttributes',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the fresh attributes for the current column.
 *
 * @return array
 */',
        'startLine' => 307,
        'endLine' => 313,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'Backpack\\CRUD\\app\\Library\\CrudPanel',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudColumn',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudColumn',
        'currentClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudColumn',
        'aliasName' => NULL,
      ),
      '__call' => 
      array (
        'name' => '__call',
        'parameters' => 
        array (
          'method' => 
          array (
            'name' => 'method',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 330,
            'endLine' => 330,
            'startColumn' => 28,
            'endColumn' => 34,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'parameters' => 
          array (
            'name' => 'parameters',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 330,
            'endLine' => 330,
            'startColumn' => 37,
            'endColumn' => 47,
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
 * If a developer calls a method that doesn\'t exist, assume they want:
 * - the CrudColumn object to have an attribute with that value;
 * - that column be updated inside the global CrudPanel object;.
 *
 * Eg: type(\'number\') will set the "type" attribute to "number"
 *
 * @param  string  $method  The method being called that doesn\'t exist.
 * @param  array  $parameters  The arguments when that method was called.
 * @return CrudColumn
 */',
        'startLine' => 330,
        'endLine' => 339,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Backpack\\CRUD\\app\\Library\\CrudPanel',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudColumn',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudColumn',
        'currentClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudColumn',
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