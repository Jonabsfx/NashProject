<?php

namespace NashProject\Auction\Model;

class Bid
{
    /** @var User */
    private $user;
    /** @var float */
    private $amount;

    public function __construct(User $user, float $amount)
    {
        $this->user = $user;
        $this->amount = $amount;
    }

    public function getUser(): User
    {
        return $this->user;
    }

    public function getAmount(): float
    {
        return $this->amount;
    }
}
