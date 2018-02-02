<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zf2 for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace ZendTest\Paginator\TestAsset;

class TestAdapter implements \Zend\Paginator\Adapter\AdapterInterface
{
    /**
     * @var mixed
     */
    public $property;

    public function __construct($property = null)
    {
        $this->property = $property;
    }

    public function count()
    {
        return 10;
    }

    public function getItems($pageNumber, $itemCountPerPage)
    {
        return new \ArrayObject(range(1, 10));
    }

    /**
     *  Returns the internal cache id
     *
     * @return string
     */
    public function getCacheInternalId()
    {
        return json_encode($this);
    }
}
