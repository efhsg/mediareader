<?php


namespace App\Domain;


class Mount
{

    /**
     * @var string
     */
    private $point;

    /**
     * Mount constructor.
     * @param string $point
     */
    public function __construct(string $point=null)
    {
        $this->point = $point;
    }

    /**
     * @return string
     */
    public function getPoint(): ?string
    {
        return $this->point;
    }


}
