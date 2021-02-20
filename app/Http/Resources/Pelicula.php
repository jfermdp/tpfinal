<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
class Pelicula extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'titulo' => $this->titulo,
            'estreno' => $this->estreno,
            'genero'=>$this->genero,
            'director'=> $this->director,
            'protagonista1'=>$this->actor1,
            'protagonista2'=>$this->actor2,
            'protagonista4'=>$this->actor3
        ];
    }
}
