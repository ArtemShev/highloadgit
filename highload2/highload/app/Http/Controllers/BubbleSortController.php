<?php

namespace App\Http\Controllers;


use App\Services\BubbleSortInterface;
use App\Services\SortInterface;
use Illuminate\Routing\Controller as BaseController;
use Psr\Log\LoggerInterface;

class BubbleSortController extends BaseController
{
    public function __construct(
        private LoggerInterface $logger,
        private BubbleSortInterface $bubbleSort
    )
    {
    }

    public function list()
    {
        try {
            $inputArray = [14,56,7,8,9,54,2,56,8,9,6534,6,78,0];
            $timeStart = time();

            $sortedArray = $this->bubbleSort->sort($inputArray);

            $timeEnd = time();

            $this->logger->debug($timeEnd - $timeStart);
            $this->logger->debug(memory_get_usage());


        } catch (\Throwable $exception)
        {
            $this->logger->error('Здесь были ошибки: '. $exception->getMessage());
        }
    }


}
