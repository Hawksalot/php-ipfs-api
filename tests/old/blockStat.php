<?php

require_once __DIR__ . '/../vendor/autoload.php';
require '../src/Ipfs.php';

use PhpIpfs\Ipfs;

// @todo create test for block created during blockPut test
echo Ipfs::blockStat('nOtArEaLaRgUmEnT');