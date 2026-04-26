<?php declare(strict_types = 1);

// osfsl-/var/www/vendor/composer/../backpack/crud/src/app/Http/Controllers/Operations/ListOperation.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Backpack\CRUD\app\Http\Controllers\Operations\ListOperation
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-621b2964653de5771c02f22f438b2c245c8190dd4f4117968eb828a1d8616d3c-8.4.20-6.70.0.0',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\ListOperation',
        'filename' => '/var/www/vendor/composer/../backpack/crud/src/app/Http/Controllers/Operations/ListOperation.php',
      ),
    ),
    'namespace' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations',
    'name' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\ListOperation',
    'shortName' => 'ListOperation',
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
    'endLine' => 150,
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
      'setupListRoutes' => 
      array (
        'name' => 'setupListRoutes',
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
            'startLine' => 18,
            'endLine' => 18,
            'startColumn' => 40,
            'endColumn' => 47,
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
            'startLine' => 18,
            'endLine' => 18,
            'startColumn' => 50,
            'endColumn' => 59,
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
            'startLine' => 18,
            'endLine' => 18,
            'startColumn' => 62,
            'endColumn' => 72,
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
        'startLine' => 18,
        'endLine' => 39,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\ListOperation',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\ListOperation',
        'currentClassName' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\ListOperation',
        'aliasName' => NULL,
      ),
      'setupListDefaults' => 
      array (
        'name' => 'setupListDefaults',
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
        'startLine' => 44,
        'endLine' => 52,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\ListOperation',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\ListOperation',
        'currentClassName' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\ListOperation',
        'aliasName' => NULL,
      ),
      'index' => 
      array (
        'name' => 'index',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Display all rows in the database for this entity.
 *
 * @return \\Illuminate\\Contracts\\View\\View
 */',
        'startLine' => 59,
        'endLine' => 69,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\ListOperation',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\ListOperation',
        'currentClassName' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\ListOperation',
        'aliasName' => NULL,
      ),
      'search' => 
      array (
        'name' => 'search',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * The search function that is called by the data table.
 *
 * @return array JSON Array of cells in HTML form.
 */',
        'startLine' => 76,
        'endLine' => 129,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\ListOperation',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\ListOperation',
        'currentClassName' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\ListOperation',
        'aliasName' => NULL,
      ),
      'showDetailsRow' => 
      array (
        'name' => 'showDetailsRow',
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
            'startLine' => 137,
            'endLine' => 137,
            'startColumn' => 36,
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
 * Used with AJAX in the list view (datatables) to show extra information about that row that didn\'t fit in the table.
 * It defaults to showing some dummy text.
 *
 * @return \\Illuminate\\Contracts\\View\\View
 */',
        'startLine' => 137,
        'endLine' => 149,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\ListOperation',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\ListOperation',
        'currentClassName' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\ListOperation',
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