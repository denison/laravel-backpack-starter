<?php declare(strict_types = 1);

// osfsl-/var/www/vendor/composer/../backpack/crud/src/app/Models/Traits/HasUploadFields.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Backpack\CRUD\app\Models\Traits\HasUploadFields
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-e9b325a956d1bafede5900400b2116c755c038bec9116b154346099bee962a7f-8.4.20-6.70.0.0',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Backpack\\CRUD\\app\\Models\\Traits\\HasUploadFields',
        'filename' => '/var/www/vendor/composer/../backpack/crud/src/app/Models/Traits/HasUploadFields.php',
      ),
    ),
    'namespace' => 'Backpack\\CRUD\\app\\Models\\Traits',
    'name' => 'Backpack\\CRUD\\app\\Models\\Traits\\HasUploadFields',
    'shortName' => 'HasUploadFields',
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
    'endLine' => 120,
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
      'uploadFileToDisk' => 
      array (
        'name' => 'uploadFileToDisk',
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
            'startLine' => 32,
            'endLine' => 32,
            'startColumn' => 38,
            'endColumn' => 43,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'attribute_name' => 
          array (
            'name' => 'attribute_name',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 32,
            'endLine' => 32,
            'startColumn' => 46,
            'endColumn' => 60,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'disk' => 
          array (
            'name' => 'disk',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 32,
            'endLine' => 32,
            'startColumn' => 63,
            'endColumn' => 67,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
          'destination_path' => 
          array (
            'name' => 'destination_path',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 32,
            'endLine' => 32,
            'startColumn' => 70,
            'endColumn' => 86,
            'parameterIndex' => 3,
            'isOptional' => false,
          ),
          'fileName' => 
          array (
            'name' => 'fileName',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 32,
                'endLine' => 32,
                'startTokenPos' => 54,
                'startFilePos' => 1272,
                'endTokenPos' => 54,
                'endFilePos' => 1275,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 32,
            'endLine' => 32,
            'startColumn' => 89,
            'endColumn' => 104,
            'parameterIndex' => 4,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Handle file upload and DB storage for a file:
 * - on CREATE
 *     - stores the file at the destination path
 *     - generates a name
 *     - stores the full path in the DB;
 * - on UPDATE
 *     - if the value is null, deletes the file and sets null in the DB
 *     - if the value is different, stores the different file and updates DB value.
 *
 * @param  string  $value  Value for that column sent from the input.
 * @param  string  $attribute_name  Model attribute name (and column in the db).
 * @param  string  $disk  Filesystem disk used to store files.
 * @param  string  $destination_path  Path in disk where to store the files.
 * @param  string  $fileName  Optional filename for the stored file (without the extension)
 */',
        'startLine' => 32,
        'endLine' => 62,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Backpack\\CRUD\\app\\Models\\Traits',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Models\\Traits\\HasUploadFields',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Models\\Traits\\HasUploadFields',
        'currentClassName' => 'Backpack\\CRUD\\app\\Models\\Traits\\HasUploadFields',
        'aliasName' => NULL,
      ),
      'uploadMultipleFilesToDisk' => 
      array (
        'name' => 'uploadMultipleFilesToDisk',
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
            'startLine' => 79,
            'endLine' => 79,
            'startColumn' => 47,
            'endColumn' => 52,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'attribute_name' => 
          array (
            'name' => 'attribute_name',
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
            'startColumn' => 55,
            'endColumn' => 69,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'disk' => 
          array (
            'name' => 'disk',
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
            'startColumn' => 72,
            'endColumn' => 76,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
          'destination_path' => 
          array (
            'name' => 'destination_path',
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
            'startColumn' => 79,
            'endColumn' => 95,
            'parameterIndex' => 3,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Handle multiple file upload and DB storage:
 * - if files are sent
 *     - stores the files at the destination path
 *     - generates random names
 *     - stores the full path in the DB, as JSON array;
 * - if a hidden input is sent to clear one or more files
 *     - deletes the file
 *     - removes that file from the DB.
 *
 * @param  string  $value  Value for that column sent from the input.
 * @param  string  $attribute_name  Model attribute name (and column in the db).
 * @param  string  $disk  Filesystem disk used to store files.
 * @param  string  $destination_path  Path in disk where to store the files.
 */',
        'startLine' => 79,
        'endLine' => 119,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Backpack\\CRUD\\app\\Models\\Traits',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Models\\Traits\\HasUploadFields',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Models\\Traits\\HasUploadFields',
        'currentClassName' => 'Backpack\\CRUD\\app\\Models\\Traits\\HasUploadFields',
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