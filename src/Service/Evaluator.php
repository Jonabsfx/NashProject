<?php

namespace NashProject\Auction\Service;

use NashProject\Auction\Model\Auction;

class Evaluator{
    private $betterBid;

    public function evaluate(Auction $auction): void
    {

    }

    public function getBetterBid(): float
    {
        return $this->betterBid;
    }
}