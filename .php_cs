<?php

$finder = Symfony\Component\Finder\Finder::create()
    ->notPath('vendor')
    ->notPath('bootstrap')
    ->notPath('storage')
    ->notPath('database/migrations')
    ->notPath('resources/lang')
    ->in(__DIR__)
    ->name('*.php')
    ->notName('server.php')
    ->notName('index.php')
    ->notName('*.blade.php');

return PhpCsFixer\Config::create()
    ->setRules([
       '@PSR2' => true,
       'array_syntax' => ['syntax' => 'short'],
       'array_indentation' => true,
       'ordered_imports' => ['sortAlgorithm' => 'alpha'],
       'binary_operator_spaces' => true,
       'blank_line_after_opening_tag' => true,
       'blank_line_before_statement' => [
           'statements' => ['return'],
       ],
       'braces' => [
           'allow_single_line_closure' => true,
       ],
       'cast_spaces' => true,
       'compact_nullable_typehint' => true,
       'concat_space' => ['spacing' => 'one'],
       'declare_equal_normalize' => true,
       'function_typehint_space' => true,
       'hash_to_slash_comment' => true,
       'heredoc_to_nowdoc' => true,
       'include' => true,
       'logical_operators' => true,
       'lowercase_cast' => true,
       'lowercase_constants' => true,
       'lowercase_static_reference' => true,
       'magic_constant_casing' => true,
       'magic_method_casing' => true,
       'method_argument_space' => [
           'after_heredoc' => true,
           'keep_multiple_spaces_after_comma' => false,
           'on_multiline' => 'ensure_fully_multiline',
       ],
       'method_chaining_indentation' => true,
       'method_separation' => true,
       'native_function_casing' => true,
       'new_with_braces' => true,
       'no_blank_lines_after_class_opening' => true,
       'no_blank_lines_after_phpdoc' => true,
       'no_alternative_syntax' => true,
       'no_empty_phpdoc' => true,
       'no_empty_statement' => true,
       'no_extra_blank_lines' => [
           'tokens' => ['extra'],
       ],
       'no_leading_import_slash' => true,
       'no_leading_namespace_whitespace' => true,
       'no_multiline_whitespace_around_double_arrow' => true,
       'no_multiline_whitespace_before_semicolons' => true,
       'no_short_bool_cast' => true,
       'no_singleline_whitespace_before_semicolons' => true,
       'no_trailing_comma_in_list_call' => true,
       'no_trailing_comma_in_singleline_array' => true,
       'no_unneeded_control_parentheses' => true,
       'no_unneeded_curly_braces' => true,
       'no_unused_imports' => true,
       'no_useless_return' => true,
       'no_whitespace_before_comma_in_array' => true,
       'no_whitespace_in_blank_line' => true,
       'normalize_index_brace' => true,
       'not_operator_with_successor_space' => true,
       'object_operator_without_whitespace' => true,
       'phpdoc_indent' => true,
       'phpdoc_inline_tag' => true,
       'phpdoc_no_access' => true,
       'phpdoc_no_package' => true,
       'phpdoc_no_useless_inheritdoc' => true,
       'phpdoc_scalar' => true,
       'phpdoc_single_line_var_spacing' => true,
       'phpdoc_to_comment' => false,
       'phpdoc_trim' => true,
       'phpdoc_types' => true,
       'phpdoc_var_without_name' => true,
       'return_type_declaration' => [
           'space_before' => 'none',
       ],
       'short_scalar_cast' => true,
       'simplified_null_return' => false,
       'single_blank_line_before_namespace' => true,
       'single_quote' => true,
       'single_trait_insert_per_statement' => true,
       'space_after_semicolon' => true,
       'standardize_not_equals' => true,
       'ternary_operator_spaces' => true,
       'trailing_comma_in_multiline_array' => true,
       'trim_array_spaces' => true,
       'unary_operator_spaces' => true,
       'whitespace_after_comma_in_array' => true,
   ])
    ->setFinder($finder);
