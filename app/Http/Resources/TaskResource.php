<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TaskResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $data = parent::toArray($request);
        $data['status'] = $this->is_done ? 'finished':'open';
        return $data;
    }
}


/*
 * $data = parent::toArray($request);
 *      converts request body to array
 *
 * $data['status'] = $this->is_done ? 'finished':'open';
 *      returns a 'status' field as well as 'is_done' field
 *      which stores and displays a text on condition using the content of 'is_done' field
 *      if is_done is true,status:finished   else,status:open
 */
