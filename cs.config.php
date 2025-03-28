<?php

declare(strict_types=1);

use PhpCsFixer\Runner\Parallel\ParallelConfigFactory;

# Config Reference: https://mlocati.github.io/php-cs-fixer-configurator/#version:3.13
return function (iterable $finder): PhpCsFixer\Config {
    $config = new PhpCsFixer\Config();
    $config->setParallelConfig(ParallelConfigFactory::detect());
    $config->setFinder($finder);
    $config->setRiskyAllowed(true);
    $config->setRules([
        // Base Ruleset
        '@PSR12' => true,

        // Types and Casting
        'strict_param' => true,
        'strict_comparison' => true,
        'declare_strict_types' => true,
        'modernize_types_casting' => true,
        'void_return' => true,
        'no_short_bool_cast' => true,

        // Syntax Rules
        'array_syntax' => [
            'syntax' => 'short'
        ],
        'single_quote' => true,
        'yoda_style' => [
            'equal' => false,
            'identical' => false,
            'less_and_greater' => false,
        ],

        // Documentation Rules
        'phpdoc_trim' => true,
        'phpdoc_trim_consecutive_blank_line_separation' => true,
        'phpdoc_indent' => true,
        'phpdoc_align' => true,
        'phpdoc_scalar' => true,
        'phpdoc_types' => true,
        'phpdoc_single_line_var_spacing' => true,
        'phpdoc_annotation_without_dot' => true,
        'phpdoc_no_useless_inheritdoc' => true,
        'phpdoc_no_access' => true,
        'phpdoc_no_package' => true,
        'no_superfluous_phpdoc_tags' => true,
        'no_empty_phpdoc' => true,
        'no_blank_lines_after_phpdoc' => true,

        // Imports
        'no_unused_imports' => true,
        'global_namespace_import' => [
            'import_classes' => true,
            'import_constants' => true,
            'import_functions' => true,
        ],

        // Class Notation
        'self_accessor' => true,
        'single_class_element_per_statement' => true,
        'single_import_per_statement' => true,
        'ordered_interfaces' => [
            'direction' => 'ascend',
            'order' => 'alpha'
        ],
        'ordered_class_elements' => [
            'order' => [
                // Traits
                'use_trait',

                // Constants
                'constant_public',
                'constant_protected',
                'constant_private',

                // Static Properties
                'property_public_static',
                'property_protected_static',
                'property_private_static',

                // Properties
                'property_public',
                'property_protected',
                'property_private',

                // Enum case
                'case',

                // Constructor
                'construct',
                'destruct',

                // Abstract Static Methods
                'method_protected_abstract_static',
                'method_public_abstract_static',
                'method_private_abstract_static',

                // Static Methods
                'method_public_static',
                'method_private_static',
                'method_protected_static',

                // Abstract Methods
                'method_public_abstract',
                'method_protected_abstract',
                'method_private_abstract',

                // Methods
                'method_public',
                'method_protected',
                'method_private',
            ]
        ],

        // Spaces and Braces
        'object_operator_without_whitespace' => true,
        'operator_linebreak' => true,
        'braces' => [
            'allow_single_line_closure' => true,
        ],
        'types_spaces' => [
            'space' => 'none',
            'space_multiple_catch' => null
        ],
        'cast_spaces' => [
            'space' => 'single',
        ],
        'function_declaration' => [
            'closure_fn_spacing' => 'none',
            'closure_function_spacing' => 'one',
        ],
        'no_whitespace_before_comma_in_array' => true,
        'no_leading_namespace_whitespace' => true,
        'binary_operator_spaces' => true,
        'unary_operator_spaces' => true,
        'blank_line_between_import_groups' => true,
        'single_line_after_imports' => true,
        'single_blank_line_at_eof' => true,
        'blank_line_after_namespace' => true,
        'no_blank_lines_after_class_opening' => true,
        'no_singleline_whitespace_before_semicolons' => true,
        'no_trailing_whitespace' => true,
        'no_trailing_whitespace_in_comment' => true,
        'single_line_empty_body' => true,

        // Unit Tests
        'php_unit_method_casing' => [
            'case' => 'snake_case'
        ],
    ]);

    return $config;
};
