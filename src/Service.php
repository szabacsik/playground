<?php

namespace App;

class Service
{
    public function action(): array
    {
        return [1, 2, 3];
    }

    public function execute(): array
    {
        return [4, 5, 6];
    }

    private function run(): void
    {
        sleep(1);
    }
}