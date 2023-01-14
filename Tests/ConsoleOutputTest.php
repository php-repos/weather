<?php

namespace Tests\ConsoleOutputTest;

use function PhpRepos\FileManager\Resolver\root;
use function PhpRepos\TestRunner\Assertions\Boolean\assert_true;
use function PhpRepos\TestRunner\Runner\test;

test(
    title: 'it should show the weather in the console',
    case: function () {
        $output = shell_exec('php ' . root() . 'console.php');

        assert_true(str_starts_with($output, 'Weather report:'), 'The output is not correct: ' . $output);
    }
);
