<?php

use PhpCsFixer\Config;
use PhpCsFixer\Finder;

$finder = Finder::create()
	->in(__DIR__) // Specify the directory or directories to apply PHP-CS-Fixer to
	->name('*.php')
	//    ->notName('c3.php')
	->exclude([
		'vendor',
		'tests/_support/_generated', // Code is generated
	]);

$config = new Config();

return $config
	->setFinder($finder)
	// ->setParallelConfig(new \PhpCsFixer\Runner\Parallel\ParallelConfig(8, 20))
	->setRules([
		'@PSR12' => true,    // Apply PSR-12 rules

		'indentation_type' => false,
		'array_indentation' => true,  // Ensure consistent indentation for arrays

		'no_unused_imports' => true,  // Example of overriding a specific rule
		'trailing_comma_in_multiline' => true,

		'single_line_comment_spacing' => true,
		// 'comment_to_phpdoc' => true, // --allow-risky=yes

		'concat_space' => [
			'spacing' => 'one',
		],

		'object_operator_without_whitespace' => true,

		'braces_position' => [
			'classes_opening_brace' => 'same_line',
			'control_structures_opening_brace' => 'same_line',
			'functions_opening_brace' => 'same_line',
		],

		'ordered_imports' => [
			'sort_algorithm' => 'alpha',
		],
		'class_attributes_separation' => [
			'elements' => [
				'method' => 'one',
			],
		],
	])
	->setIndent("    ")   // Use 4 spaces for indentation
	->setLineEnding("\n"); // Use UNIX line endings
