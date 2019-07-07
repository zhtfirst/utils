<?php

$input = ['foo', false, -1, null, '', []];
var_dump(array_filter($input));
// 结果 [0 => 'foo', 2 => -1]