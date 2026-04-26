<?php declare(strict_types = 1);

// osfsl-/var/www/vendor/composer/../backpack/crud/src/app/Library/CrudPanel/CrudField.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Backpack\CRUD\app\Library\CrudPanel\CrudField
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-420dc400475e342226747e609da032a45528adbb016a101780e0cd8f7750120e-8.4.20-6.70.0.0',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudField',
        'filename' => '/var/www/vendor/composer/../backpack/crud/src/app/Library/CrudPanel/CrudField.php',
      ),
    ),
    'namespace' => 'Backpack\\CRUD\\app\\Library\\CrudPanel',
    'name' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudField',
    'shortName' => 'CrudField',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Adds fluent syntax to Backpack CRUD Fields.
 *
 * In addition to the existing:
 * - CRUD::addField([\'name\' => \'price\', \'type\' => \'number\']);
 *
 * Developers can also do:
 * - CRUD::field(\'price\')->type(\'number\');
 *
 * And if the developer uses CrudField as Field in their CrudController:
 * - Field::name(\'price\')->type(\'number\');
 *
 * @method self type(string $value)
 * @method self label(string $value)
 * @method self tab(string $value)
 * @method self prefix(string $value)
 * @method self suffix(string $value)
 * @method self default(mixed $value)
 * @method self hint(string $value)
 * @method self attributes(array $value)
 * @method self wrapper(array $value)
 * @method self fake(bool $value)
 * @method self store_in(string $value)
 * @method self validationRules(string $value)
 * @method self validationMessages(array $value)
 * @method self entity(string $value)
 * @method self addMorphOption(string $key, string $label, array $options)
 * @method self morphTypeField(array $value)
 * @method self morphIdField(array $value)
 * @method self upload(bool $value)
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 39,
    'endLine' => 491,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
    ),
    'traitClassNames' => 
    array (
      0 => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Traits\\Support\\MacroableWithAttributes',
      1 => 'Illuminate\\Support\\Traits\\Conditionable',
    ),
    'immediateConstants' => 
    array (
    ),
    'immediateProperties' => 
    array (
      'attributes' => 
      array (
        'declaringClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudField',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudField',
        'name' => 'attributes',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 44,
        'endLine' => 44,
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
            'startLine' => 46,
            'endLine' => 46,
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
        'startLine' => 46,
        'endLine' => 76,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Backpack\\CRUD\\app\\Library\\CrudPanel',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudField',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudField',
        'currentClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudField',
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
        'startLine' => 78,
        'endLine' => 81,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Backpack\\CRUD\\app\\Library\\CrudPanel',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudField',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudField',
        'currentClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudField',
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
            'startLine' => 89,
            'endLine' => 89,
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
 * Create a CrudField object with the parameter as its name.
 *
 * @param  string  $name  Name of the column in the db, or model attribute.
 * @return CrudField
 */',
        'startLine' => 89,
        'endLine' => 92,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Backpack\\CRUD\\app\\Library\\CrudPanel',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudField',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudField',
        'currentClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudField',
        'aliasName' => NULL,
      ),
      'entity' => 
      array (
        'name' => 'entity',
        'parameters' => 
        array (
          'entity' => 
          array (
            'name' => 'entity',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 100,
            'endLine' => 100,
            'startColumn' => 28,
            'endColumn' => 34,
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
 * When defining the entity, make sure Backpack guesses the relationship attributes if needed.
 *
 * @param  string|bool  $entity
 * @return self
 */',
        'startLine' => 100,
        'endLine' => 109,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Backpack\\CRUD\\app\\Library\\CrudPanel',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudField',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudField',
        'currentClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudField',
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
 * Remove the current field from the current operation.
 *
 * @return void
 */',
        'startLine' => 116,
        'endLine' => 119,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Backpack\\CRUD\\app\\Library\\CrudPanel',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudField',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudField',
        'currentClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudField',
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
            'startLine' => 127,
            'endLine' => 127,
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
 * Remove an attribute from the current field definition array.
 *
 * @param  string  $attribute  Name of the attribute being removed.
 * @return CrudField
 */',
        'startLine' => 127,
        'endLine' => 132,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Backpack\\CRUD\\app\\Library\\CrudPanel',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudField',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudField',
        'currentClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudField',
        'aliasName' => NULL,
      ),
      'after' => 
      array (
        'name' => 'after',
        'parameters' => 
        array (
          'destinationField' => 
          array (
            'name' => 'destinationField',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 140,
            'endLine' => 140,
            'startColumn' => 27,
            'endColumn' => 43,
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
 * Move the current field after another field.
 *
 * @param  string  $destinationField  Name of the destination field.
 * @return CrudField
 */',
        'startLine' => 140,
        'endLine' => 146,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Backpack\\CRUD\\app\\Library\\CrudPanel',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudField',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudField',
        'currentClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudField',
        'aliasName' => NULL,
      ),
      'before' => 
      array (
        'name' => 'before',
        'parameters' => 
        array (
          'destinationField' => 
          array (
            'name' => 'destinationField',
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
            'startColumn' => 28,
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
 * Move the current field before another field.
 *
 * @param  string  $destinationField  Name of the destination field.
 * @return CrudField
 */',
        'startLine' => 154,
        'endLine' => 160,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Backpack\\CRUD\\app\\Library\\CrudPanel',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudField',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudField',
        'currentClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudField',
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
 * Make the current field the first one in the fields list.
 *
 * @return CrudField
 */',
        'startLine' => 167,
        'endLine' => 173,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Backpack\\CRUD\\app\\Library\\CrudPanel',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudField',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudField',
        'currentClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudField',
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
 * Make the current field the last one in the fields list.
 *
 * @return CrudField
 */',
        'startLine' => 180,
        'endLine' => 186,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Backpack\\CRUD\\app\\Library\\CrudPanel',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudField',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudField',
        'currentClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudField',
        'aliasName' => NULL,
      ),
      'size' => 
      array (
        'name' => 'size',
        'parameters' => 
        array (
          'numberOfColumns' => 
          array (
            'name' => 'numberOfColumns',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 203,
            'endLine' => 203,
            'startColumn' => 26,
            'endColumn' => 41,
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
 * Set the wrapper width at this many number of columns.
 * For example, to set a field wrapper to span across 6 columns, you can do both:
 * ->wrapper([\'class\' => \'form-group col-md-6\'])
 * ->size(6).
 *
 * @param  int  $numberOfColumns  How many columns should this field span across (1-12)?
 * @return CrudField
 */',
        'startLine' => 203,
        'endLine' => 208,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Backpack\\CRUD\\app\\Library\\CrudPanel',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudField',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudField',
        'currentClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudField',
        'aliasName' => NULL,
      ),
      'on' => 
      array (
        'name' => 'on',
        'parameters' => 
        array (
          'event' => 
          array (
            'name' => 'event',
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
            'startLine' => 217,
            'endLine' => 217,
            'startColumn' => 24,
            'endColumn' => 36,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'closure' => 
          array (
            'name' => 'closure',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Closure',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 217,
            'endLine' => 217,
            'startColumn' => 39,
            'endColumn' => 55,
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
 * Set an event to a certain closure. Will overwrite if existing.
 *
 * @param  string  $event  Name of Eloquent Model event
 * @param  \\Closure  $closure  The function aka callback aka closure to run.
 * @return CrudField
 */',
        'startLine' => 217,
        'endLine' => 222,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Backpack\\CRUD\\app\\Library\\CrudPanel',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudField',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudField',
        'currentClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudField',
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
            'startLine' => 231,
            'endLine' => 231,
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
        'startLine' => 231,
        'endLine' => 241,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Backpack\\CRUD\\app\\Library\\CrudPanel',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudField',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudField',
        'currentClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudField',
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
                'startLine' => 249,
                'endLine' => 249,
                'startTokenPos' => 836,
                'startFilePos' => 7223,
                'endTokenPos' => 836,
                'endFilePos' => 7226,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 249,
            'endLine' => 249,
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
        'docComment' => '/**
 * Mark the field has having upload functionality, so that the form would become multipart.
 *
 * @param  bool  $upload
 * @return self
 */',
        'startLine' => 249,
        'endLine' => 254,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Backpack\\CRUD\\app\\Library\\CrudPanel',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudField',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudField',
        'currentClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudField',
        'aliasName' => NULL,
      ),
      'validationRules' => 
      array (
        'name' => 'validationRules',
        'parameters' => 
        array (
          'rules' => 
          array (
            'name' => 'rules',
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
            'startLine' => 262,
            'endLine' => 262,
            'startColumn' => 37,
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
 * Save the validation rules on the CrudPanel per field basis.
 *
 * @param  string  $rules  the field rules: required|min:1|max:5
 * @return self
 */',
        'startLine' => 262,
        'endLine' => 268,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Backpack\\CRUD\\app\\Library\\CrudPanel',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudField',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudField',
        'currentClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudField',
        'aliasName' => NULL,
      ),
      'validationMessages' => 
      array (
        'name' => 'validationMessages',
        'parameters' => 
        array (
          'messages' => 
          array (
            'name' => 'messages',
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
            'startLine' => 276,
            'endLine' => 276,
            'startColumn' => 40,
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
        'docComment' => '/**
 * Save the validation messages on the CrudPanel per field basis.
 *
 * @param  array  $messages  the messages for field rules: [required => please input something, min => the minimum allowed is 1]
 * @return self
 */',
        'startLine' => 276,
        'endLine' => 288,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Backpack\\CRUD\\app\\Library\\CrudPanel',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudField',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudField',
        'currentClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudField',
        'aliasName' => NULL,
      ),
      'addMorphOption' => 
      array (
        'name' => 'addMorphOption',
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
            'startLine' => 308,
            'endLine' => 308,
            'startColumn' => 36,
            'endColumn' => 46,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'label' => 
          array (
            'name' => 'label',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 308,
                'endLine' => 308,
                'startTokenPos' => 1041,
                'startFilePos' => 9468,
                'endTokenPos' => 1041,
                'endFilePos' => 9471,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 308,
            'endLine' => 308,
            'startColumn' => 49,
            'endColumn' => 61,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'options' => 
          array (
            'name' => 'options',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 308,
                'endLine' => 308,
                'startTokenPos' => 1050,
                'startFilePos' => 9491,
                'endTokenPos' => 1051,
                'endFilePos' => 9492,
              ),
            ),
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
            'startLine' => 308,
            'endLine' => 308,
            'startColumn' => 64,
            'endColumn' => 82,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * This function is responsible for setting up the morph fields structure.
 * Developer can define the morph structure as follows:
 *  \'morphOptions => [
 *       [\'nameOnAMorphMap\', \'label\', [options]],
 *       [\'App\\Models\\Model\'], // display the name of the model
 *       [\'App\\Models\\Model\', \'label\', [\'data_source\' => backpack_url(\'smt\')]
 *  ]
 * OR
 * ->addMorphOption(\'App\\Models\\Model\', \'label\', [\'data_source\' => backpack_url(\'smt\')]).
 *
 * @param  string  $key  - the morph option key, usually a \\Model\\Class or a string for the morphMap
 * @param  ?string  $label  - the displayed text for this option
 * @param  array  $options  - options for the corresponding morphable_id field (usually ajax options)
 * @return self
 *
 * @throws \\Exception
 */',
        'startLine' => 308,
        'endLine' => 313,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Backpack\\CRUD\\app\\Library\\CrudPanel',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudField',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudField',
        'currentClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudField',
        'aliasName' => NULL,
      ),
      'morphTypeField' => 
      array (
        'name' => 'morphTypeField',
        'parameters' => 
        array (
          'configs' => 
          array (
            'name' => 'configs',
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
            'startLine' => 323,
            'endLine' => 323,
            'startColumn' => 36,
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
 * Allow developer to configure the morph type field.
 *
 * @param  array  $configs
 * @return self
 *
 * @throws \\Exception
 */',
        'startLine' => 323,
        'endLine' => 339,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Backpack\\CRUD\\app\\Library\\CrudPanel',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudField',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudField',
        'currentClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudField',
        'aliasName' => NULL,
      ),
      'morphIdField' => 
      array (
        'name' => 'morphIdField',
        'parameters' => 
        array (
          'configs' => 
          array (
            'name' => 'configs',
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
            'startLine' => 349,
            'endLine' => 349,
            'startColumn' => 34,
            'endColumn' => 47,
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
 * Allow developer to configure the morph type id selector.
 *
 * @param  array  $configs
 * @return self
 *
 * @throws \\Exception
 */',
        'startLine' => 349,
        'endLine' => 366,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Backpack\\CRUD\\app\\Library\\CrudPanel',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudField',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudField',
        'currentClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudField',
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
        'startLine' => 368,
        'endLine' => 371,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Backpack\\CRUD\\app\\Library\\CrudPanel',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudField',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudField',
        'currentClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudField',
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
            'startLine' => 383,
            'endLine' => 383,
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
            'startLine' => 383,
            'endLine' => 383,
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
 * Set the value for a certain attribute on the CrudField object.
 *
 * @param  string  $attribute  Name of the attribute.
 * @param  mixed  $value  Value of that attribute.
 */',
        'startLine' => 383,
        'endLine' => 386,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'Backpack\\CRUD\\app\\Library\\CrudPanel',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudField',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudField',
        'currentClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudField',
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
            'startLine' => 394,
            'endLine' => 394,
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
 * Replace all field attributes on the CrudField object
 * with the given array of attribute-value pairs.
 *
 * @param  array  $array  Array of attributes and their values.
 */',
        'startLine' => 394,
        'endLine' => 397,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'Backpack\\CRUD\\app\\Library\\CrudPanel',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudField',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudField',
        'currentClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudField',
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
 * Update the global CrudPanel object with the current field attributes.
 *
 * @return CrudField
 */',
        'startLine' => 404,
        'endLine' => 416,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'Backpack\\CRUD\\app\\Library\\CrudPanel',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudField',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudField',
        'currentClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudField',
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
 * Get the fresh attributes for the current field.
 *
 * @return array
 */',
        'startLine' => 423,
        'endLine' => 429,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'Backpack\\CRUD\\app\\Library\\CrudPanel',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudField',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudField',
        'currentClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudField',
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
 * @return CrudField
 */',
        'startLine' => 443,
        'endLine' => 448,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Backpack\\CRUD\\app\\Library\\CrudPanel',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudField',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudField',
        'currentClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudField',
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
 * @return CrudField
 */',
        'startLine' => 459,
        'endLine' => 464,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Backpack\\CRUD\\app\\Library\\CrudPanel',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudField',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudField',
        'currentClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudField',
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
            'startLine' => 481,
            'endLine' => 481,
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
            'startLine' => 481,
            'endLine' => 481,
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
 * - the CrudField object to have an attribute with that value;
 * - that field be updated inside the global CrudPanel object;.
 *
 * Eg: type(\'number\') will set the "type" attribute to "number"
 *
 * @param  string  $method  The method being called that doesn\'t exist.
 * @param  array  $parameters  The arguments when that method was called.
 * @return CrudField
 */',
        'startLine' => 481,
        'endLine' => 490,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Backpack\\CRUD\\app\\Library\\CrudPanel',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudField',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudField',
        'currentClassName' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudField',
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