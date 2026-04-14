<?php

namespace App\Http\Controllers;

use Illuminate\Support\Collection;
class CollectionController extends Controller
{
    public function collect()
    {
        $collect = collect([1, 2, 3])->all();
        return $collect;
    }
    public function avg()
    {
        $average1 = collect([
        ['foo' => 10],
        ['foo' => 10],
        ['foo' => 20],
        ['foo' => 40]
        ])->avg('foo');
        $average2 = collect([1, 1, 2, 4])->avg();
        return $average2;
    } 
    public function chunk()
    {
        $collection = collect([1, 2, 3, 4, 5, 6, 7]);
        $chunks = $collection->chunk(4);
        $chunks->all();
        return $chunks;
    }
    public function  chunkwhile()
    {
        $collection = collect(str_split('AABBCCCD'));
        $chunks = $collection->chunkWhile(function ($value, $key, $chunk) {
        return $value === $chunk->last();
        });
        $chunks->all();
        return $chunks;
    }
    public function collapse()
    {
        $collection = collect([
        [1, 2, 3],
        [4, 5, 6],
        [7, 8, 9],
    ]);

        $collapsed = $collection->collapse();

        $collapsed->all();
        return $collapsed;
    }
    public function combine()
    {
        $collection = collect(['name', 'age']);
        $combined = $collection->combine(['George', 29]);
        $combined->all();
        return $combined;
    }
    public function concat()
    {
        $collection = collect(['John Doe']);
        $concatenated = $collection->concat(['Jane Doe'])->concat(['name' => 'Johnny Doe']);
        $concatenated->all();
        return $concatenated;
    }
    public function crossjoin()
    {
        $collection = collect([1, 2]);
    $matrix = $collection->crossJoin(['a', 'b']);
    $matrix->all();

    $collection = collect([1, 2]);
    $matrix = $collection->crossJoin(['a', 'b'], ['I', 'II']);
    $matrix->all();
    return $matrix;
    }
    public function diff()
    {
        $collection = collect([1, 2, 3, 4, 5]);
        $diff = $collection->diff([2, 4, 6, 8]);
        return $diff->all();
    }
    public function dump()
    {
        $collection = collect(['John Doe', 'Jane Doe']);
        $collection->dump();
        return $collection;
    }
    public function duplicates()
    {
        $collection = collect(['a', 'b', 'a', 'c', 'b']);
        $collection->duplicates();
        return $collection->duplicates();
    }
    public function except()
    {
        $collection = collect(['product_id' => 1, 'price' => 100, 'discount' => false]);
        $filtered = $collection->except(['price', 'discount']); 
        $filtered->all();
        return $filtered->all();
    }
    public function filter()
    {
        $collection = collect([1, 2, 3, 4]);
        $filtered = $collection->filter(function ($value, $key) {
            return $value > 2;
        });
        $filtered->all();
        return $filtered->all();
    }
    public function flatten()
    {
        $collection = collect([
            'name' => 'taylor',
            'languages' => [
                'php', 'javascript'
            ]
        ]);
        $flattened = $collection->flatten();
        $flattened->all();
        return $flattened;
    }
    public function flip()
    {
        $collection = collect(['name' => 'taylor', 'framework' => 'laravel']);
        $flipped = $collection->flip();
        $flipped->all();
        return $flipped;
    }
    public function forget()
    {
        $collection = collect(['name' => 'taylor', 'framework' => 'laravel']);
        $collection->forget('name');
        $collection->all();
        return $collection;
    }
    public function get()
    {
        $collection = collect(['name' => 'taylor', 'framework' => 'laravel']);
        $value = $collection->get('framework');
        return $value;
    }
    public function implode()
    {
        $collection = collect([
            ['account_id' => 1, 'product' => 'Desk'],
            ['account_id' => 2, 'product' => 'Chair'],
        ]);
        $collection->implode('product', ', ');
        return $collection->implode('product', ', ');
    }
}
