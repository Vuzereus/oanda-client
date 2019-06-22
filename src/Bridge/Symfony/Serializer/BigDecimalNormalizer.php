<?php

/*
 * This file is part of the Mab05k Oanda Client Bundle.
 * (c) Michael A. Bos <mab05k@gmail.com>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Mab05k\OandaClient\Bridge\Symfony\Serializer;

use Brick\Math\BigDecimal;
use Symfony\Component\Serializer\Normalizer\ContextAwareDenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\ContextAwareNormalizerInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;

/**
 * Class BigDecimalNormalizer.
 */
class BigDecimalNormalizer implements ContextAwareNormalizerInterface, NormalizerAwareInterface, ContextAwareDenormalizerInterface, DenormalizerAwareInterface
{
    use NormalizerAwareTrait;
    use DenormalizerAwareTrait;

    /**
     * @param $data
     * @param null  $format
     * @param array $context
     *
     * @return bool
     */
    public function supportsNormalization($data, $format = null, array $context = [])
    {
        return $data instanceof BigDecimal;
    }

    /**
     * @param $data
     * @param $type
     * @param null  $format
     * @param array $context
     *
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null, array $context = [])
    {
        return is_a($type, BigDecimal::class, true);
    }

    /**
     * @param mixed $object
     * @param null  $format
     * @param array $context
     *
     * @return bool|\Brick\Math\BigDecimal|float|int|string
     */
    public function normalize($object, $format = null, array $context = [])
    {
        if (!$object instanceof BigDecimal) {
            throw new \RuntimeException('Invalid object passed to Money Context Callback function');
        }

        return $object->jsonSerialize();
    }

    /**
     * @param mixed  $data
     * @param string $class
     * @param null   $format
     * @param array  $context
     *
     * @return BigDecimal|\Brick\Math\BigNumber|object
     */
    public function denormalize($data, $class, $format = null, array $context = [])
    {
        return BigDecimal::of($data);
    }
}