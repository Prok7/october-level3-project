<?php
    namespace Admin\User\Http\Resources;
    use Illuminate\Http\Resources\Json\JsonResource;

    class ArrivalResource extends JsonResource {
        public function toArray($request) {
            return [
                "user_id" => $this->user_id,
                "arrival_date" => $this->created_at
            ];
        }
    }