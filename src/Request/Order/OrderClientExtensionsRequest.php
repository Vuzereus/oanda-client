<?php

/*
 * This file is part of the Mab05k Oanda Client Bundle.
 * (c) Michael A. Bos <mab05k@gmail.com>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Mab05k\OandaClient\Request\Order;

use Mab05k\OandaClient\Definition\Transaction\ClientExtension\ClientExtension;
use Symfony\Component\Serializer\Annotation as Serializer;

/**
 * Class OrderClientExtensionsRequest.
 */
class OrderClientExtensionsRequest
{
    /**
     * @var ClientExtension|null
     *
     * @Serializer\SerializedName("clientExtensions")
     */
    private $clientExtensions;

    /**
     * @var ClientExtension|null
     *
     * @Serializer\SerializedName("tradeClientExtensions")
     */
    private $tradeClientExtensions;

    /**
     * @return ClientExtension|null
     */
    public function getClientExtensions(): ?ClientExtension
    {
        return $this->clientExtensions;
    }

    /**
     * @param ClientExtension|null $clientExtensions
     *
     * @return OrderClientExtensionsRequest
     */
    public function setClientExtensions(?ClientExtension $clientExtensions): self
    {
        $this->clientExtensions = $clientExtensions;

        return $this;
    }

    /**
     * @return ClientExtension|null
     */
    public function getTradeClientExtensions(): ?ClientExtension
    {
        return $this->tradeClientExtensions;
    }

    /**
     * @param ClientExtension|null $tradeClientExtensions
     *
     * @return OrderClientExtensionsRequest
     */
    public function setTradeClientExtensions(?ClientExtension $tradeClientExtensions): self
    {
        $this->tradeClientExtensions = $tradeClientExtensions;

        return $this;
    }
}
