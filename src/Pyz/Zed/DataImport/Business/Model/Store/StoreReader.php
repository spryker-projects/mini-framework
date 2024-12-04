<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\DataImport\Business\Model\Store;

use Spryker\Zed\DataImport\Business\Model\DataReader\DataReaderInterface;
use Spryker\Zed\DataImport\Business\Model\DataSet\DataSetInterface;

class StoreReader implements DataReaderInterface
{
    /**
     * @var array<string>
     */
    protected array $stores = [];

    protected int $position = 0;

    public function __construct(protected DataSetInterface $dataSet)
    {
    }

    /**
     * Move forward to next element
     *
     * @link http://php.net/manual/en/iterator.next.php
     *
     * @since 5.0.0
     */
    public function next(): void
    {
        ++$this->position;
    }

    /**
     * Return the key of the current element
     *
     * @link http://php.net/manual/en/iterator.key.php
     *
     * @since 5.0.0
     *
     * @return mixed scalar on success, or null on failure.
     */
    public function key(): mixed
    {
        return $this->position;
    }

    /**
     * Checks if current position is valid
     *
     * @link http://php.net/manual/en/iterator.valid.php
     *
     * @since 5.0.0
     *
     * @return bool The return value will be casted to boolean and then evaluated.
     * Returns true on success or false on failure.
     */
    public function valid(): bool
    {
        return isset($this->dataSet[$this->position]);
    }

    /**
     * Rewind the Iterator to the first element
     *
     * @link http://php.net/manual/en/iterator.rewind.php
     *
     * @since 5.0.0
     */
    public function rewind(): void
    {
        $this->position = 0;
    }

    public function current(): DataSetInterface
    {
        return $this->dataSet;
    }
}
