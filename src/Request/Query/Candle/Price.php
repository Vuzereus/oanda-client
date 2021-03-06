<?php

/*
 * This file is part of the Mab05k Oanda Client Bundle.
 * (c) Michael A. Bos <mab05k@gmail.com>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Mab05k\OandaClient\Request\Query\Candle;

use Mab05k\OandaClient\Request\Query\AbstractQueryParameter;
use Mab05k\OandaClient\Request\Query\QueryParameterInterface;

/**
 * Class Price.
 *
 * @author Michael Bos <mab05k@gmail.com>
 */
class Price extends AbstractQueryParameter implements QueryParameterInterface
{
    public const KEY = 'price';

    public const A = 'A';
    public const M = 'M';
    public const B = 'B';
}
