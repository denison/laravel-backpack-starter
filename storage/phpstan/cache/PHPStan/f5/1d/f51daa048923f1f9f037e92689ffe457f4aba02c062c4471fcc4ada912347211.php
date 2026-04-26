<?php declare(strict_types = 1);

// osfsl-/var/www/vendor/composer/../backpack/crud/src/app/Library/CrudPanel/Traits/Relationships.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Backpack\CRUD\app\Library\CrudPanel\Traits\Relationships
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-9d47cd7c155c42ed6576be6443dab8e2bf1e8fc37cf16e7d27d6be32e508b8b1-8.4.20-6.70.0.0',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Relationships',
        'filename' => '/var/www/vendor/composer/../backpack/crud/src/app/Library/CrudPanel/Traits/Relationships.php',
      ),
    ),
    'namespace' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits',
    'name' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Relationships',
    'shortName' => 'Relationships',
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
    'endLine' => 406,
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
      'getRelationInstance' => 
      array (
        'name' => 'getRelationInstance',
        'parameters' => 
        array (
          'field' => 
          array (
            'name' => 'field',
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
            'startColumn' => 41,
            'endColumn' => 46,
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
 * From the field entity we get the relation instance.
 *
 * @param  array  $entity
 * @return object
 */',
        'startLine' => 16,
        'endLine' => 37,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Relationships',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Relationships',
        'currentClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Relationships',
        'aliasName' => NULL,
      ),
      'inferFieldModelFromRelationship' => 
      array (
        'name' => 'inferFieldModelFromRelationship',
        'parameters' => 
        array (
          'field' => 
          array (
            'name' => 'field',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 45,
            'endLine' => 45,
            'startColumn' => 53,
            'endColumn' => 58,
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
 * Grabs an relation instance and returns the class name of the related model.
 *
 * @param  array  $field
 * @return string
 */',
        'startLine' => 45,
        'endLine' => 50,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Relationships',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Relationships',
        'currentClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Relationships',
        'aliasName' => NULL,
      ),
      'inferRelationTypeFromRelationship' => 
      array (
        'name' => 'inferRelationTypeFromRelationship',
        'parameters' => 
        array (
          'field' => 
          array (
            'name' => 'field',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 58,
            'endLine' => 58,
            'startColumn' => 55,
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
 * Return the relation type from a given field: BelongsTo, HasOne ... etc.
 *
 * @param  array  $field
 * @return string
 */',
        'startLine' => 58,
        'endLine' => 63,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Relationships',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Relationships',
        'currentClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Relationships',
        'aliasName' => NULL,
      ),
      'getOnlyRelationEntity' => 
      array (
        'name' => 'getOnlyRelationEntity',
        'parameters' => 
        array (
          'field' => 
          array (
            'name' => 'field',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 65,
            'endLine' => 65,
            'startColumn' => 43,
            'endColumn' => 48,
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
        'startLine' => 65,
        'endLine' => 76,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Relationships',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Relationships',
        'currentClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Relationships',
        'aliasName' => NULL,
      ),
      'getFieldsWithRelationType' => 
      array (
        'name' => 'getFieldsWithRelationType',
        'parameters' => 
        array (
          'relation_types' => 
          array (
            'name' => 'relation_types',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 86,
            'endLine' => 86,
            'startColumn' => 47,
            'endColumn' => 61,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'nested' => 
          array (
            'name' => 'nested',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 86,
                'endLine' => 86,
                'startTokenPos' => 481,
                'startFilePos' => 3083,
                'endTokenPos' => 481,
                'endFilePos' => 3087,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 86,
            'endLine' => 86,
            'startColumn' => 64,
            'endColumn' => 78,
            'parameterIndex' => 1,
            'isOptional' => true,
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
        'docComment' => '/**
 * Get the fields for relationships, according to the relation type. It looks only for direct
 * relations - it will NOT look through relationships of relationships.
 *
 * @param  string|array  $relation_types  Eloquent relation class or array of Eloquent relation classes. Eg: BelongsTo
 * @param  bool  $nested  Should nested fields be included
 * @return array The fields with corresponding relation types.
 */',
        'startLine' => 86,
        'endLine' => 100,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Relationships',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Relationships',
        'currentClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Relationships',
        'aliasName' => NULL,
      ),
      'parseRelationFieldNamesFromHtml' => 
      array (
        'name' => 'parseRelationFieldNamesFromHtml',
        'parameters' => 
        array (
          'fields' => 
          array (
            'name' => 'fields',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 109,
            'endLine' => 109,
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
 * Parse the field name back to the related entity after the form is submitted.
 * Its called in getAllFieldNames().
 *
 * @param  array  $fields
 * @return array
 */',
        'startLine' => 109,
        'endLine' => 126,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Relationships',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Relationships',
        'currentClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Relationships',
        'aliasName' => NULL,
      ),
      'getRelationFieldsWithoutRelationType' => 
      array (
        'name' => 'getRelationFieldsWithoutRelationType',
        'parameters' => 
        array (
          'relations' => 
          array (
            'name' => 'relations',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 134,
            'endLine' => 134,
            'startColumn' => 59,
            'endColumn' => 68,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'fields' => 
          array (
            'name' => 'fields',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 134,
                'endLine' => 134,
                'startTokenPos' => 749,
                'startFilePos' => 4678,
                'endTokenPos' => 750,
                'endFilePos' => 4679,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 134,
            'endLine' => 134,
            'startColumn' => 71,
            'endColumn' => 82,
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
 * Gets the relation fields that DON\'T contain the provided relations.
 *
 * @param  string|array  $relations  - the relations to exclude
 * @param  array  $fields
 */',
        'startLine' => 134,
        'endLine' => 155,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Relationships',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Relationships',
        'currentClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Relationships',
        'aliasName' => NULL,
      ),
      'changeBelongsToNamesFromRelationshipToForeignKey' => 
      array (
        'name' => 'changeBelongsToNamesFromRelationshipToForeignKey',
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
            'startLine' => 170,
            'endLine' => 170,
            'startColumn' => 71,
            'endColumn' => 76,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'fields' => 
          array (
            'name' => 'fields',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 170,
                'endLine' => 170,
                'startTokenPos' => 901,
                'startFilePos' => 5761,
                'endTokenPos' => 902,
                'endFilePos' => 5762,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 170,
            'endLine' => 170,
            'startColumn' => 79,
            'endColumn' => 90,
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
 * Changes the input names to use the foreign_key, instead of the relation name,
 * for BelongsTo relations (eg. "user_id" instead of "user").
 *
 * When $fields are provided, we will use those fields to determine the correct
 * foreign key. Otherwise, we will use the main CRUD fields.
 *
 * eg: user -> user_id
 *
 * @param  array  $input
 * @param  array  $belongsToFields
 * @return array
 */',
        'startLine' => 170,
        'endLine' => 196,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Relationships',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Relationships',
        'currentClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Relationships',
        'aliasName' => NULL,
      ),
      'guessIfFieldHasMultipleFromRelationType' => 
      array (
        'name' => 'guessIfFieldHasMultipleFromRelationType',
        'parameters' => 
        array (
          'relation_type' => 
          array (
            'name' => 'relation_type',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 204,
            'endLine' => 204,
            'startColumn' => 61,
            'endColumn' => 74,
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
 * Based on relation type returns if relation allows multiple entities.
 *
 * @param  string  $relation_type
 * @return bool
 */',
        'startLine' => 204,
        'endLine' => 218,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Relationships',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Relationships',
        'currentClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Relationships',
        'aliasName' => NULL,
      ),
      'guessIfFieldHasPivotFromRelationType' => 
      array (
        'name' => 'guessIfFieldHasPivotFromRelationType',
        'parameters' => 
        array (
          'relation_type' => 
          array (
            'name' => 'relation_type',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 226,
            'endLine' => 226,
            'startColumn' => 58,
            'endColumn' => 71,
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
 * Based on relation type returns if relation has a pivot table.
 *
 * @param  string  $relation_type
 * @return bool
 */',
        'startLine' => 226,
        'endLine' => 236,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Relationships',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Relationships',
        'currentClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Relationships',
        'aliasName' => NULL,
      ),
      'getRelationFieldsWithoutPivot' => 
      array (
        'name' => 'getRelationFieldsWithoutPivot',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get all relation fields that don\'t have pivot set.
 *
 * @return array The fields with model key set.
 */',
        'startLine' => 243,
        'endLine' => 250,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Relationships',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Relationships',
        'currentClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Relationships',
        'aliasName' => NULL,
      ),
      'getRelationFieldsWithPivot' => 
      array (
        'name' => 'getRelationFieldsWithPivot',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get all fields with n-n relation set (pivot table is true).
 *
 * @return array The fields with n-n relationships.
 */',
        'startLine' => 257,
        'endLine' => 264,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Relationships',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Relationships',
        'currentClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Relationships',
        'aliasName' => NULL,
      ),
      'getOverwrittenNameForBelongsTo' => 
      array (
        'name' => 'getOverwrittenNameForBelongsTo',
        'parameters' => 
        array (
          'field' => 
          array (
            'name' => 'field',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 273,
            'endLine' => 273,
            'startColumn' => 53,
            'endColumn' => 58,
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
 * Return the name for the BelongTo relation making sure it always has the
 * foreign_key instead of relationName (eg. "user_id", not "user").
 *
 * @param  array  $field  The field we want to get the name from
 * @return string
 */',
        'startLine' => 273,
        'endLine' => 284,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Relationships',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Relationships',
        'currentClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Relationships',
        'aliasName' => NULL,
      ),
      'getPivotFieldStructure' => 
      array (
        'name' => 'getPivotFieldStructure',
        'parameters' => 
        array (
          'field' => 
          array (
            'name' => 'field',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 292,
            'endLine' => 292,
            'startColumn' => 52,
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
 * Returns the pivot definition for BelongsToMany/MorphToMany relation provided in $field.
 *
 * @param  array  $field
 * @return array
 */',
        'startLine' => 292,
        'endLine' => 318,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 20,
        'namespace' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Relationships',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Relationships',
        'currentClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Relationships',
        'aliasName' => NULL,
      ),
      'modelMethodIsRelationship' => 
      array (
        'name' => 'modelMethodIsRelationship',
        'parameters' => 
        array (
          'model' => 
          array (
            'name' => 'model',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 331,
            'endLine' => 331,
            'startColumn' => 48,
            'endColumn' => 53,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
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
            'startLine' => 331,
            'endLine' => 331,
            'startColumn' => 56,
            'endColumn' => 62,
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
 * Checks the properties of the provided method to better verify if it could be a relation.
 * Case the method is not public, is not a relation.
 * Case the return type is Attribute, or extends Attribute is not a relation method.
 * If the return type extends the Relation class is for sure a relation
 * Otherwise we just assume it\'s a relation.
 *
 * @param  $model
 * @param  $method
 * @return bool|string
 */',
        'startLine' => 331,
        'endLine' => 368,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Relationships',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Relationships',
        'currentClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Relationships',
        'aliasName' => NULL,
      ),
      'isAttributeInRelationString' => 
      array (
        'name' => 'isAttributeInRelationString',
        'parameters' => 
        array (
          'field' => 
          array (
            'name' => 'field',
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
            'startLine' => 374,
            'endLine' => 374,
            'startColumn' => 49,
            'endColumn' => 60,
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
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Check if it\'s possible that attribute is in the relation string when
 * the last part of the string is not a method on the chained relations.
 */',
        'startLine' => 374,
        'endLine' => 405,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Relationships',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Relationships',
        'currentClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Relationships',
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