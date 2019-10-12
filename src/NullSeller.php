<?php
namespace NullObject;

class NullSeller implements SellerInterface
{
    public function price()
    {
        return null;
    }

    public function rate()
    {
        return null;
    }
}