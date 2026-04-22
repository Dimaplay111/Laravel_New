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
    public function intersect()
    {
        $collection = collect(['Desk','Sofa','Chair']);
        $intersect = $collection->intersect(['Desk','Chair','Bookcase']);
        $intersect->all();
        return $intersect;
    }
    public function keyby()
    {
        $collection = collect([
            ['human_id' => 'humn-100', 'name' => 'Aleksandr'],
            ['human_id' => 'humn-200', 'name' => 'Dmitriy'],
            ['human_id' => 'humn-300', 'name' => 'Aktan'],
            ['human_id' => 'humn-400', 'name' => 'Nikita'],
            ['human_id' => 'humn-500', 'name' => 'Ruslan'],
            ['human_id' => 'humn-600', 'name' => 'Eugene'],
            ['human_id' => 'humn-700', 'name' => 'Yaroslave'],
            ['human_id' => 'humn-800', 'name' => 'Valentin'],
            ['human_id' => 'humn-900', 'name' => 'Il`dar'],
            ['human_id' => 'humn-901', 'name' => 'Kirill'],
        ]);
        $keyed = $collection->keyBy('human_id');
        $keyed->all();
        return $keyed;
    }
    public function keys()
    {
        $collection = collect([
            ['human_id' => 'humn-100', 'name' => 'Aleksandr'],
            ['human_id' => 'humn-200', 'name' => 'Dmitriy'],
            ['human_id' => 'humn-300', 'name' => 'Aktan'],
            ['human_id' => 'humn-400', 'name' => 'Nikita'],
            ['human_id' => 'humn-500', 'name' => 'Ruslan'],
            ['human_id' => 'humn-600', 'name' => 'Eugene'],
            ['human_id' => 'humn-700', 'name' => 'Yaroslave'],
            ['human_id' => 'humn-800', 'name' => 'Valentin'],
            ['human_id' => 'humn-900', 'name' => 'Il`dar'],
            ['human_id' => 'humn-101', 'name' => 'Kirill'],
        ]);
        $keys = $collection->keys();
        $keys->all();
        return $keys->all();
    }
    public function map()
    {
        $collection = collect([1,2,3,4,5]);
        $multiplied = $collection->map(function ($item, $key) {
            return $item * 2;
        });
        $elve = $multiplied->all();
        return $elve;
    }
    public function max()
    {
        $max = collect([
            ['foo' => 10],
            ['foo' => 210],
            ['foo' => 90],
            ['foo' => 1200],
            ['foo' => 188],
        ])->max('foo');
        $maxim = collect([1, 2, 3, 4, 5, 19, 52, 69])->max();
        return $max;
    }
    public function median()
    {
        $median = collect([
            ['foo' => 10],
            ['foo' => 210],
            ['foo' => 90],
            ['foo' => 1200],
            ['foo' => 188],
        ])->median('foo');
        $mediana = collect([1, 2, 3, 4, 5, 19, 52, 69])->median();
        return $median;
    }
    public function merge()
    {
        $collection = collect(['product_id' => 1, 'price' => 100]);
        $merged = $collection->merge(['price' => 200, 'discount' => false]);
        $merged->all();
        return $merged;
    }
    public function min()
    {
        $min = collect([['foo' => 76], ['foo' => 67]])->min('foo');
        return $min;
    }
    public function mode()
    {
        $mode = collect([
            ['foo' => 67],
            ['foo' => 67],
            ['foo' => 76],
            ['foo' => 76]
        ])->mode('foo');
        return $mode;
    }
    public function nth()
    {
        $collection = collect(['a','b','c','d','e','f']);
        $collection->nth(4);
        return $collection->nth(4);
    }
    public function pipe()
    {
        $collection = collect([1, 2, 3]);
        $piped = $collection->pipe(function ($collection) {
            return $collection->sum();
        });
        return $piped;
    }
    public function pluck()
    {
        $collection = collect([
            ['product_id' => 'prod-100', 'name' => 'Desk'],
            ['product_id' => 'prod-200', 'name' => 'Chair'],
        ]);
        $plucked = $collection->pluck('name');
        $plucked->all();
        return $plucked->all();
    }
    public function pop()
    {
        $collection = collect([1, 2, 3, 4, 5, 6]);
        $collection->pop();
        return $collection->all();
    }
}
