<?php declare(strict_types=1);


namespace DesignPatterns\Structural\Adapter;


class Kindle implements EBook
{
    private $page = 1;
    private $totalPages = 100;

    public function pressNext()
    {
        $this->page++;
    }

    public function unlock()
    {
    }

    public function getPage(): array
    {
        return [$this->page, $this->totalPages];
    }
}