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
        sleep(2);
    }

    public function process(): array
    {
        $lorem = strtoupper('lorem');
        $ipsum = 'ipsum';
        $dolor = [1, 2, 3];
        return [0, 1, $lorem, $ipsum, $dolor, 2, 3];
    }
}