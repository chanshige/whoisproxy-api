<?php
declare(strict_types=1);

/*
 * This file is part of the WhoisProxy package.
 *
 * (c) shigeki tanaka <dev@shigeki.tokyo>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Getenv.
 *
 * @param string $key
 * @param null   $default
 * @return mixed
 */
function env($key, $default = null)
{
    $value = getenv($key);

    if (!$value) {
        return $default;
    }

    switch (strtolower($value)) {
        case 'true':
            return true;
            break;

        case 'false':
            return false;
            break;

        default:
            return $value;
            break;
    }
}

/**
 * Build http query.
 *
 * @return string
 */
function buildQuery(): string
{
    $ret = [];
    foreach (func_get_args() as $value) {
        $ret += $value;
    }
    return http_build_query($ret, '', "&");
}