<?php declare(strict_types = 1);

// osfsl-/var/www/vendor/composer/../backpack/crud/src/app/Models/Traits/HasFakeFields.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Backpack\CRUD\app\Models\Traits\HasFakeFields
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-ce16633dabf8b0acf208453756dc2227ed3a89532c5677c95a8788ccee630ae3-8.4.20-6.70.0.0',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Backpack\\CRUD\\app\\Models\\Traits\\HasFakeFields',
        'filename' => '/var/www/vendor/composer/../backpack/crud/src/app/Models/Traits/HasFakeFields.php',
      ),
    ),
    'namespace' => 'Backpack\\CRUD\\app\\Models\\Traits',
    'name' => 'Backpack\\CRUD\\app\\Models\\Traits\\HasFakeFields',
    'shortName' => 'HasFakeFields',
    'isInterface' => false,
    'isTrait' => true,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => NULL,
    'attributes' => 
    array (
    ),
    'startLine' => 13,
    'endLine' => 83,
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
      'addFakes' => 
      array (
        'name' => 'addFakes',
        'parameters' => 
        array (
          'columns' => 
          array (
            'name' => 'columns',
            'default' => 
            array (
              'code' => '[\'extras\']',
              'attributes' => 
              array (
                'startLine' => 20,
                'endLine' => 20,
                'startTokenPos' => 37,
                'startFilePos' => 576,
                'endTokenPos' => 39,
                'endFilePos' => 585,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 20,
            'endLine' => 20,
            'startColumn' => 30,
            'endColumn' => 50,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add fake fields as regular attributes, even though they are stored as JSON.
 *
 * @param  array  $columns  - the database columns that contain the JSONs
 */',
        'startLine' => 20,
        'endLine' => 39,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Backpack\\CRUD\\app\\Models\\Traits',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Models\\Traits\\HasFakeFields',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Models\\Traits\\HasFakeFields',
        'currentClassName' => 'Backpack\\CRUD\\app\\Models\\Traits\\HasFakeFields',
        'aliasName' => NULL,
      ),
      'withFakes' => 
      array (
        'name' => 'withFakes',
        'parameters' => 
        array (
          'columns' => 
          array (
            'name' => 'columns',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 47,
                'endLine' => 47,
                'startTokenPos' => 211,
                'startFilePos' => 1550,
                'endTokenPos' => 212,
                'endFilePos' => 1551,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 47,
            'endLine' => 47,
            'startColumn' => 31,
            'endColumn' => 43,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Return the entity with fake fields as attributes.
 *
 * @param  array  $columns  - the database columns that contain the JSONs
 * @return Model
 */',
        'startLine' => 47,
        'endLine' => 60,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Backpack\\CRUD\\app\\Models\\Traits',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Models\\Traits\\HasFakeFields',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Models\\Traits\\HasFakeFields',
        'currentClassName' => 'Backpack\\CRUD\\app\\Models\\Traits\\HasFakeFields',
        'aliasName' => NULL,
      ),
      'shouldDecodeFake' => 
      array (
        'name' => 'shouldDecodeFake',
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
            'startLine' => 68,
            'endLine' => 68,
            'startColumn' => 38,
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
 * Determine if this fake column should be json_decoded.
 *
 * @param  $column  string fake column name
 * @return bool
 */',
        'startLine' => 68,
        'endLine' => 71,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Backpack\\CRUD\\app\\Models\\Traits',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Models\\Traits\\HasFakeFields',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Models\\Traits\\HasFakeFields',
        'currentClassName' => 'Backpack\\CRUD\\app\\Models\\Traits\\HasFakeFields',
        'aliasName' => NULL,
      ),
      'shouldEncodeFake' => 
      array (
        'name' => 'shouldEncodeFake',
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
            'startLine' => 79,
            'endLine' => 79,
            'startColumn' => 38,
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
 * Determine if this fake column should get json_encoded or not.
 *
 * @param  $column  string fake column name
 * @return bool
 */',
        'startLine' => 79,
        'endLine' => 82,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Backpack\\CRUD\\app\\Models\\Traits',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Models\\Traits\\HasFakeFields',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Models\\Traits\\HasFakeFields',
        'currentClassName' => 'Backpack\\CRUD\\app\\Models\\Traits\\HasFakeFields',
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