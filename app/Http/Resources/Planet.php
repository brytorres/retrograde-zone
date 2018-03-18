<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Planet extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);

        return [
            'day_of_year' => $this->id,
            'month' => $this->month,
            'day' => $this->day,
            'mercury_direction' => $this->mercury_direction,
            'mercury_sign' => $this->mercury_sign,
            'mercury_time' => $this->mercury_time,
            'mercury_degrees' => $this->mercury_degrees,
            'mercury_minutes' => $this->mercury_minutes,
            'venus_direction' => $this->venus_direction,
            'venus_sign' => $this->venus_sign,
            'venus_time' => $this->venus_time,
            'venus_degrees' => $this->venus_degrees,
            'venus_minutes' => $this->venus_minutes,
            'mars_direction' => $this->mars_direction,
            'mars_sign' => $this->mars_sign,
            'mars_time' => $this->mars_time,
            'mars_degrees' => $this->mars_degrees,
            'mars_minutes' => $this->mars_minutes,
            'jupiter_direction' => $this->jupiter_direction,
            'jupiter_sign' => $this->jupiter_sign,
            'jupiter_time' => $this->jupiter_time,
            'jupiter_degrees' => $this->jupiter_degrees,
            'jupiter_minutes' => $this->jupiter_minutes,
            'saturn_direction' => $this->saturn_direction,
            'saturn_sign' => $this->saturn_sign,
            'saturn_time' => $this->saturn_time,
            'saturn_degrees' => $this->saturn_degrees,
            'saturn_minutes' => $this->saturn_minutes,
            'uranus_direction' => $this->uranus_direction,
            'uranus_sign' => $this->uranus_sign,
            'uranus_time' => $this->uranus_time,
            'uranus_degrees' => $this->uranus_degrees,
            'uranus_minutes' => $this->uranus_minutes,
            'neptune_direction' => $this->neptune_direction,
            'neptune_sign' => $this->neptune_sign,
            'neptune_time' => $this->neptune_time,
            'neptune_degrees' => $this->neptune_degrees,
            'neptune_minutes' => $this->neptune_minutes,
            'pluto_direction' => $this->pluto_direction,
            'pluto_sign' => $this->pluto_sign,
            'pluto_time' => $this->pluto_time,
            'pluto_degrees' => $this->pluto_degrees,
            'pluto_minutes' => $this->pluto_minutes,
        ];
    }

    public function with($request)
    {
        return [
            'version' => '2.0.0',
            'created_by' => 'Bryan Torres',
            'dedicated_to' => 'Curiosity',
            'contact_me' => 'hello@bryantorres.pro',
        ];
    } 
}
