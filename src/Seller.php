<?php
namespace NullObject;

class Seller implements SellerInterface
{
    private $data;

    /**
     * Seller constructor.
     * @param $data
     */
    public function __construct(array $data)
    {
        // 出品者の情報が色々入ったデータ
        $this->data = $data;
    }

    /**
     * 出品者の価格
     * @return int
     */
    public function price(): int
    {
        return $this->data['price'];
    }

    /**
     * 出品者の評価率
     * @return int
     */
    public function rate(): int
    {
        return $this->data['rate'];
    }
}