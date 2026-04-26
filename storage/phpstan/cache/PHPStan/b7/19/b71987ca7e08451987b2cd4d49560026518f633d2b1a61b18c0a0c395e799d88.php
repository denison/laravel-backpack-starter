<?php declare(strict_types = 1);

// osfsl-/var/www/vendor/composer/../backpack/crud/src/app/Models/Traits/HasIdentifiableAttribute.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Backpack\CRUD\app\Models\Traits\HasIdentifiableAttribute
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-774aeae7d894d7ea17842eba82cddf84ca30ef89207a4ada5b6a08ee78f0bd01-8.4.20-6.70.0.0',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Backpack\\CRUD\\app\\Models\\Traits\\HasIdentifiableAttribute',
        'filename' => '/var/www/vendor/composer/../backpack/crud/src/app/Models/Traits/HasIdentifiableAttribute.php',
      ),
    ),
    'namespace' => 'Backpack\\CRUD\\app\\Models\\Traits',
    'name' => 'Backpack\\CRUD\\app\\Models\\Traits\\HasIdentifiableAttribute',
    'shortName' => 'HasIdentifiableAttribute',
    'isInterface' => false,
    'isTrait' => true,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => NULL,
    'attributes' => 
    array (
    ),
    'startLine' => 7,
    'endLine' => 78,
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
      'identifiableAttribute' => 
      array (
        'name' => 'identifiableAttribute',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the name of the attribute that best defines the entry, from the user perspective.
 *
 * Rephrased: In most cases a user will NOT identify an Article because its ID is "4", but
 * because its name is "10 Ways to Burn Fat". This method returns the column in the database
 * that represents what is better to show to the user as an identifier rather than the ID.
 * Ex: name, title, label, description etc.
 *
 * @return string The name of the column that best defines this entry from the user perspective.
 */',
        'startLine' => 19,
        'endLine' => 26,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Backpack\\CRUD\\app\\Models\\Traits',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Models\\Traits\\HasIdentifiableAttribute',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Models\\Traits\\HasIdentifiableAttribute',
        'currentClassName' => 'Backpack\\CRUD\\app\\Models\\Traits\\HasIdentifiableAttribute',
        'aliasName' => NULL,
      ),
      'guessIdentifiableColumnName' => 
      array (
        'name' => 'guessIdentifiableColumnName',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the most likely column in the db table that could be used as an identifiable attribute.
 *
 * @return string The name of the column in the database that is most likely to be a good identifying attribute.
 *
 * @throws \\Exception
 */',
        'startLine' => 35,
        'endLine' => 77,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 20,
        'namespace' => 'Backpack\\CRUD\\app\\Models\\Traits',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Models\\Traits\\HasIdentifiableAttribute',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Models\\Traits\\HasIdentifiableAttribute',
        'currentClassName' => 'Backpack\\CRUD\\app\\Models\\Traits\\HasIdentifiableAttribute',
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