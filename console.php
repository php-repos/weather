<?php

use PhpRepos\Weather\Request;
use function PhpRepos\Weather\Weather\get;

$request = new Request();
$request->ansi();

echo get($request->url());
