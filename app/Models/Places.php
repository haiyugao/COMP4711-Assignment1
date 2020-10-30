<?php
namespace App\Models;

/*
 * Mock travel destination data.
 * Note that we don't have to extend CodeIgniter's model for now
 */

class Places {

    //mock data : an array of records
    protected $data = [
        '1' => [
            'id' => 1,
            'name' => 'Ronaldo',
            'nationality' => 'Portugal',
            'image' => 'Ronaldo.jpg',
			'age' => 35,
			'height' => '1.85m',
			'career record' => 'Five Golden Globes',
        ],
        '2' => [
            'id' => 2,
            'name' => 'Barak',
            'nationality' => 'Argentina',
            'image' => 'Barak.jpg',
            'age' => 27,
	    'height' => '1.77m',
	    'career record' => 'Five Serie A titles',
        ],
        '3' => [
            'id' => 3,
            'name' => 'Buffon',
            'nationality' => 'Italy',
            'image' => 'Buffon.jpg',
            'age' => 42,
	    'height' => '1.91m',
	    'career record' => 'A World Cup winner and twice Italian Player of the Year.',
        ],
        '4' => [
            'id' => 4,
            'name' => 'Bernadeski',
            'nationality' => 'Italy',
            'image' => 'Bernadeski.jpg',
            'age' => 26,
	    'height' => '1.85m',
	    'career record' => 'Three Serie A titles.',
        ],
        '5' => [
            'id' => 5,
            'name' => 'Matese Delicht',
            'nationality' => 'Netherlands',
            'image' => 'Matese Delicht.jpg',
            'age' => 21,
	    'height' => '1.85m',
	    'career record' => 'One Serie A titles.',
        ],
	'6' => [
            'id' => 6,
            'name' => 'Juan Cuadrado',
            'nationality' => 'Colombia',
            'image' => 'Juan Cuadrado.jpg',
            'age' => 32,
	    'height' => '1.79m',
	    'career record' => 'One Serie A titles and The premiership champions.',
        ],
    ];

    public function findAll() {
        return $this->data;
    }

    public function find($id = null) {
        if (!empty($id) && isset($this->data[$id])) {
            return $this->data[$id];
        }
        return null;
    }

}
