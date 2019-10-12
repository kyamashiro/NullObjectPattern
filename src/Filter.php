<?php
namespace NullObject;

class Filter
{
    /**
     * @var Seller[]
     */
    private $sellers;

    /**
     * Filter constructor.
     * @param Seller[]
     */
    public function __construct(array $sellers)
    {
        // 販売者のクラスが入った配列
        $this->sellers = $sellers;
    }

    /**
     * 評価率が80%以上で最安値の出品者情報を取得する
     * @return Seller
     */
    public function featuredSeller(): SellerInterface
    {
        $lowestPrice = null;
        $featuredSellerObject = new NullSeller();
        foreach ($this->sellers as $seller) {
            // 評価率80%以上かつ最安値の出品者に絞る
            if (80 <= $seller->rate() && $this->isLowestPrice($seller, $lowestPrice)) {
                $lowestPrice = $seller->price();
                $featuredSellerObject = $seller;
            }
        }
        return $featuredSellerObject;
    }

    /**
     * @param Seller $seller
     * @param $lowestPrice
     * @return bool
     */
    private function isLowestPrice(Seller $seller, $lowestPrice): bool
    {
        return ($seller->price() < $lowestPrice || !$lowestPrice);
    }
}