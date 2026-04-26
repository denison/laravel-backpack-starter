<?php declare(strict_types = 1);

// osfsl-/var/www/vendor/composer/../backpack/crud/src/app/Http/Controllers/Operations/DeleteOperation.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-df438db9d4ac49edd028a99788dbe53c62db7c7ffab9d601dac0f9fecf383862-8.4.20-6.70.0.0',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\DeleteOperation',
        'filename' => '/var/www/vendor/composer/../backpack/crud/src/app/Http/Controllers/Operations/DeleteOperation.php',
      ),
    ),
    'namespace' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations',
    'name' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\DeleteOperation',
    'shortName' => 'DeleteOperation',
    'isInterface' => false,
    'isTrait' => true,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => NULL,
    'attributes' => 
    array (
    ),
    'startLine' => 8,
    'endLine' => 69,
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
      'setupDeleteRoutes' => 
      array (
        'name' => 'setupDeleteRoutes',
        'parameters' => 
        array (
          'segment' => 
          array (
            'name' => 'segment',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 17,
            'endLine' => 17,
            'startColumn' => 42,
            'endColumn' => 49,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'routeName' => 
          array (
            'name' => 'routeName',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 17,
            'endLine' => 17,
            'startColumn' => 52,
            'endColumn' => 61,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'controller' => 
          array (
            'name' => 'controller',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 17,
            'endLine' => 17,
            'startColumn' => 64,
            'endColumn' => 74,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Define which routes are needed for this operation.
 *
 * @param  string  $segment  Name of the current entity (singular). Used as first URL segment.
 * @param  string  $routeName  Prefix of the route name.
 * @param  string  $controller  Name of the current CrudController.
 */',
        'startLine' => 17,
        'endLine' => 24,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\DeleteOperation',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\DeleteOperation',
        'currentClassName' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\DeleteOperation',
        'aliasName' => NULL,
      ),
      'setupDeleteDefaults' => 
      array (
        'name' => 'setupDeleteDefaults',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add the default settings, buttons, etc that this operation needs.
 */',
        'startLine' => 29,
        'endLine' => 52,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\DeleteOperation',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\DeleteOperation',
        'currentClassName' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\DeleteOperation',
        'aliasName' => NULL,
      ),
      'destroy' => 
      array (
        'name' => 'destroy',
        'parameters' => 
        array (
          'id' => 
          array (
            'name' => 'id',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 60,
            'endLine' => 60,
            'startColumn' => 29,
            'endColumn' => 31,
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
 * Remove the specified resource from storage.
 *
 * @param  int  $id
 * @return string
 */',
        'startLine' => 60,
        'endLine' => 68,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\DeleteOperation',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\DeleteOperation',
        'currentClassName' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\DeleteOperation',
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