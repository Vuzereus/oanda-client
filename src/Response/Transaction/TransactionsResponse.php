<?php

/*
 * This file is part of the Mab05k Oanda Client Bundle.
 * (c) Michael A. Bos <mab05k@gmail.com>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Mab05k\OandaClient\Response\Transaction;

use Mab05k\OandaClient\Definition\Traits\LastTransactionIdTrait;
use Mab05k\OandaClient\Definition\Transaction\Transaction;
use Symfony\Component\Serializer\Annotation as Serializer;

/**
 * Class TransactionsResponse.
 */
class TransactionsResponse
{
    use LastTransactionIdTrait;

    /**
     * @var Transaction[]|null
     *
     * @Serializer\SerializedName("transactions")
     */
    private $transactions;

    /**
     * @return Transaction[]|null
     */
    public function getTransactions()
    {
        return $this->transactions;
    }

    /**
     * @param Transaction[]|null $transactions
     *
     * @return TransactionsResponse
     */
    public function setTransactions($transactions)
    {
        $this->transactions = $transactions;

        return $this;
    }
}
