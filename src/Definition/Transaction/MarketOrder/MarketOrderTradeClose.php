<?php

/*
 * This file is part of the Mab05k Oanda Client Bundle.
 * (c) Michael A. Bos <mab05k@gmail.com>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Mab05k\OandaClient\Definition\Transaction\MarketOrder;

use Mab05k\OandaClient\Definition\Traits\ClientTradeIdTrait;
use Mab05k\OandaClient\Definition\Traits\TradeIdTrait;
use Symfony\Component\Serializer\Annotation as Serializer;

/**
 * Class MarketOrderTradeClose.
 *
 * @author Michael Bos <mab05k@gmail.com>
 */
class MarketOrderTradeClose
{
    use TradeIdTrait;
    use ClientTradeIdTrait;

    /**
     * @var string|null
     *
     * @Serializer\SerializedName("units")
     */
    private $units;

    /**
     * @return string|null
     *
     * Indication of how much of the Trade to close. Either “ALL”, or a
     * DecimalNumber reflection a partial close of the Trade.
     */
    public function getUnits(): ?string
    {
        return $this->units;
    }

    /**
     * @param string|null $units
     *
     * @return $this
     */
    public function setUnits(?string $units): self
    {
        $this->units = $units;

        return $this;
    }
}
