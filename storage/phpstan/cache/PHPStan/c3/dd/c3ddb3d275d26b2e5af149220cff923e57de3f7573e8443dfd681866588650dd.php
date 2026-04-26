<?php declare(strict_types = 1);

// osfsl-/var/www/vendor/composer/../backpack/crud/src/app/Library/CrudPanel/Traits/Create.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Backpack\CRUD\app\Library\CrudPanel\Traits\Create
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-5bff0b79b715f265a0c89ae4206bde1479a5dc7ad7c993cd23d18e317eb4a8f6-8.4.20-6.70.0.0',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Create',
        'filename' => '/var/www/vendor/composer/../backpack/crud/src/app/Library/CrudPanel/Traits/Create.php',
      ),
    ),
    'namespace' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits',
    'name' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Create',
    'shortName' => 'Create',
    'isInterface' => false,
    'isTrait' => true,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => NULL,
    'attributes' => 
    array (
    ),
    'startLine' => 11,
    'endLine' => 387,
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
      'create' => 
      array (
        'name' => 'create',
        'parameters' => 
        array (
          'input' => 
          array (
            'name' => 'input',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 25,
            'endLine' => 25,
            'startColumn' => 28,
            'endColumn' => 33,
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
 * Insert a row in the database.
 *
 * @param  array  $input  All input values to be inserted.
 * @return Model
 */',
        'startLine' => 25,
        'endLine' => 34,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Create',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Create',
        'currentClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Create',
        'aliasName' => NULL,
      ),
      'createModelAndRelations' => 
      array (
        'name' => 'createModelAndRelations',
        'parameters' => 
        array (
          'directInputs' => 
          array (
            'name' => 'directInputs',
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
            'startLine' => 36,
            'endLine' => 36,
            'startColumn' => 46,
            'endColumn' => 64,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'relationInputs' => 
          array (
            'name' => 'relationInputs',
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
            'startLine' => 36,
            'endLine' => 36,
            'startColumn' => 67,
            'endColumn' => 87,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Illuminate\\Database\\Eloquent\\Model',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 36,
        'endLine' => 42,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Create',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Create',
        'currentClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Create',
        'aliasName' => NULL,
      ),
      'getCreateFields' => 
      array (
        'name' => 'getCreateFields',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get all fields needed for the ADD NEW ENTRY form.
 *
 * @return array The fields with attributes and fake attributes.
 */',
        'startLine' => 49,
        'endLine' => 52,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Create',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Create',
        'currentClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Create',
        'aliasName' => NULL,
      ),
      'getRelationFields' => 
      array (
        'name' => 'getRelationFields',
        'parameters' => 
        array (
          'fields' => 
          array (
            'name' => 'fields',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 60,
                'endLine' => 60,
                'startTokenPos' => 223,
                'startFilePos' => 1818,
                'endTokenPos' => 224,
                'endFilePos' => 1819,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 60,
            'endLine' => 60,
            'startColumn' => 39,
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
 * Get all fields with relation set (model key set on field).
 *
 * @param  array  $fields
 * @return array The fields with model key set.
 */',
        'startLine' => 60,
        'endLine' => 89,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Create',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Create',
        'currentClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Create',
        'aliasName' => NULL,
      ),
      'createRelationsForItem' => 
      array (
        'name' => 'createRelationsForItem',
        'parameters' => 
        array (
          'item' => 
          array (
            'name' => 'item',
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
            'startColumn' => 45,
            'endColumn' => 49,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'formattedRelations' => 
          array (
            'name' => 'formattedRelations',
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
            'startColumn' => 52,
            'endColumn' => 70,
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
 * Create relations for the provided model.
 *
 * @param  Model  $item  The current CRUD model.
 * @param  array  $formattedRelations  The form data.
 * @return ?bool
 */',
        'startLine' => 104,
        'endLine' => 189,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Create',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Create',
        'currentClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Create',
        'aliasName' => NULL,
      ),
      'preparePivotAttributesForSave' => 
      array (
        'name' => 'preparePivotAttributesForSave',
        'parameters' => 
        array (
          'attributes' => 
          array (
            'name' => 'attributes',
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
            'startLine' => 191,
            'endLine' => 191,
            'startColumn' => 52,
            'endColumn' => 68,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'relation' => 
          array (
            'name' => 'relation',
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
                      'name' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                      'isIdentifier' => false,
                    ),
                  ),
                  1 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphToMany',
                      'isIdentifier' => false,
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
            'startLine' => 191,
            'endLine' => 191,
            'startColumn' => 71,
            'endColumn' => 105,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'relatedItemKey' => 
          array (
            'name' => 'relatedItemKey',
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
                      'name' => 'string',
                      'isIdentifier' => true,
                    ),
                  ),
                  1 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'int',
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
            'startLine' => 191,
            'endLine' => 191,
            'startColumn' => 108,
            'endColumn' => 133,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
          'pivotKeyName' => 
          array (
            'name' => 'pivotKeyName',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 191,
            'endLine' => 191,
            'startColumn' => 136,
            'endColumn' => 148,
            'parameterIndex' => 3,
            'isOptional' => false,
          ),
          'relationMethod' => 
          array (
            'name' => 'relationMethod',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 191,
            'endLine' => 191,
            'startColumn' => 151,
            'endColumn' => 165,
            'parameterIndex' => 4,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 191,
        'endLine' => 201,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Create',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Create',
        'currentClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Create',
        'aliasName' => NULL,
      ),
      'createUpdateOrDeleteOneToOneRelation' => 
      array (
        'name' => 'createUpdateOrDeleteOneToOneRelation',
        'parameters' => 
        array (
          'relation' => 
          array (
            'name' => 'relation',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 225,
            'endLine' => 225,
            'startColumn' => 59,
            'endColumn' => 67,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'relationMethod' => 
          array (
            'name' => 'relationMethod',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 225,
            'endLine' => 225,
            'startColumn' => 70,
            'endColumn' => 84,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'relationDetails' => 
          array (
            'name' => 'relationDetails',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 225,
            'endLine' => 225,
            'startColumn' => 87,
            'endColumn' => 102,
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
 * Save the attributes of a given HasOne or MorphOne relationship on the
 * related entry, create or delete it, depending on what was sent in the form.
 *
 * For HasOne and MorphOne relationships, the dev might want to a few different things:
 * (A) save an attribute on the related entry (eg. passport.number)
 * (B) set an attribute on the related entry to NULL (eg. slug.slug)
 * (C) save an entire related entry (eg. passport)
 * (D) delete the entire related entry (eg. passport)
 *
 * @param  \\Illuminate\\Database\\Eloquent\\Relations\\HasOne|\\Illuminate\\Database\\Eloquent\\Relations\\MorphOne  $relation
 * @param  string  $relationMethod  The name of the relationship method on the main Model.
 * @param  array  $relationDetails  Details about that relationship. For example:
 *                                  [
 *                                  \'model\' => \'App\\Models\\Passport\',
 *                                  \'parent\' => \'App\\Models\\Pet\',
 *                                  \'entity\' => \'passport\',
 *                                  \'attribute\' => \'passport\',
 *                                  \'values\' => **THE TRICKY BIT**,
 *                                  ]
 * @return ?Model
 */',
        'startLine' => 225,
        'endLine' => 258,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Create',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Create',
        'currentClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Create',
        'aliasName' => NULL,
      ),
      'attachManyRelation' => 
      array (
        'name' => 'attachManyRelation',
        'parameters' => 
        array (
          'item' => 
          array (
            'name' => 'item',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 271,
            'endLine' => 271,
            'startColumn' => 41,
            'endColumn' => 45,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'relation' => 
          array (
            'name' => 'relation',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 271,
            'endLine' => 271,
            'startColumn' => 48,
            'endColumn' => 56,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'relationDetails' => 
          array (
            'name' => 'relationDetails',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 271,
            'endLine' => 271,
            'startColumn' => 59,
            'endColumn' => 74,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
          'relationValues' => 
          array (
            'name' => 'relationValues',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 271,
            'endLine' => 271,
            'startColumn' => 77,
            'endColumn' => 91,
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
 * When using the HasMany/MorphMany relations as selectable elements we use this function to "mimic-sync" in those relations.
 * Since HasMany/MorphMany does not have the `sync` method, we manually re-create it.
 * Here we add the entries that developer added and remove the ones that are not in the list.
 * This removal process happens with the following rules:
 * - by default Backpack will behave like a `sync` from M-M relations: it deletes previous entries and add only the current ones.
 * - `force_delete` is configurable in the field, it\'s `true` by default. When false, if connecting column is nullable instead of deleting the row we set the column to null.
 * - `fallback_id` could be provided. In this case instead of deleting we set the connecting key to whatever developer gives us.
 *
 * @return mixed
 */',
        'startLine' => 271,
        'endLine' => 306,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Create',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Create',
        'currentClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Create',
        'aliasName' => NULL,
      ),
      'handleManyRelationItemRemoval' => 
      array (
        'name' => 'handleManyRelationItemRemoval',
        'parameters' => 
        array (
          'modelInstance' => 
          array (
            'name' => 'modelInstance',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 308,
            'endLine' => 308,
            'startColumn' => 52,
            'endColumn' => 65,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'removedEntries' => 
          array (
            'name' => 'removedEntries',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 308,
            'endLine' => 308,
            'startColumn' => 68,
            'endColumn' => 82,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'relationDetails' => 
          array (
            'name' => 'relationDetails',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 308,
            'endLine' => 308,
            'startColumn' => 85,
            'endColumn' => 100,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
          'relationForeignKey' => 
          array (
            'name' => 'relationForeignKey',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 308,
            'endLine' => 308,
            'startColumn' => 103,
            'endColumn' => 121,
            'parameterIndex' => 3,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 308,
        'endLine' => 343,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Create',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Create',
        'currentClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Create',
        'aliasName' => NULL,
      ),
      'createManyEntries' => 
      array (
        'name' => 'createManyEntries',
        'parameters' => 
        array (
          'entry' => 
          array (
            'name' => 'entry',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 356,
            'endLine' => 356,
            'startColumn' => 40,
            'endColumn' => 45,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'relation' => 
          array (
            'name' => 'relation',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 356,
            'endLine' => 356,
            'startColumn' => 48,
            'endColumn' => 56,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'relationMethod' => 
          array (
            'name' => 'relationMethod',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 356,
            'endLine' => 356,
            'startColumn' => 59,
            'endColumn' => 73,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
          'relationDetails' => 
          array (
            'name' => 'relationDetails',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 356,
            'endLine' => 356,
            'startColumn' => 76,
            'endColumn' => 91,
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
 * Handle HasMany/MorphMany relations when used as creatable entries in the crud.
 * By using repeatable field, developer can allow the creation of such entries
 * in the crud forms.
 *
 * @param  $entry  - eg: story
 * @param  $relation  - eg  story HasMany monsters
 * @param  $relationMethod  - eg: monsters
 * @param  $relationDetails  - eg: info about relation including submitted values
 * @return void
 */',
        'startLine' => 356,
        'endLine' => 386,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Create',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Create',
        'currentClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Create',
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