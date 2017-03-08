<?php
namespace Tree;

use PHPUnit\Framework\TestCase;

class TreeTest extends TestCase
{

    public $id = 'id';

    public $pId = 'pId';

    public $child = 'child';

    public function testBuildTree()
    {
        $items = [];

        for ($i = 0; $i < 10; $i++) {
            $pId = $i % 5;
            $items[] = [
                $this->id => $i + 1,
                $this->pId => $pId,
                'name' => 'name' . ($i + 1),
            ];
        }

        $tree =  new Tree($items, $this->id, $this->pId, $this->child);

        $this->assertTrue(is_array($tree->buildTree()));

        print PHP_EOL . 'memory size : ' . number_format(memory_get_usage()) . PHP_EOL;

    }
}



