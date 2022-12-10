<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\Image;

class MovieResource extends JsonResource
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
        $genres = [];
        foreach ($this->genreinmovies as $genreinmovie) {
            $genres[] = $genreinmovie->genre;
           
        }

        return [
            'id' => $this->id,    
            'name' => $this->name,
            'eng_name' => $this->eng_name,
            // 'description' => $this->description,
            'language' => $this->language,
            'studio' => $this->studio,
            'releasedate' => $this->releasedate,
            'runtime' => $this->runtime,
            'avgrating' => $this->avgrating,
            'view' => $this->view,
            'category_id' => $this->category_id,
            'category' => $this->category->name,
            'genres' => $genres,
            'country_id' => $this->country_id,
            'profileimage' => Image::find($this->profileimage_id)->image_url,
            'coverimage' => Image::find($this->coverimage_id)->image_url
        ];
    }
}
