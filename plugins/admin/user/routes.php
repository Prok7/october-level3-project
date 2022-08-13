<?php
    use Admin\User\Http\Resources\UserResource;
    use Admin\User\Http\Resources\ArrivalResource;
    use Admin\User\Models\User;
    use Admin\User\Models\Arrival;
    use System\Models\Eventlog;

    Route::get("/api/user/{id}", function($id) {
        $user = User::find($id);
        EventLog::add("User $user->name with id $id is viewing his arrivals");
        return new UserResource($user);
    });

    Route::get("/api/arrival/{id}", function($id) {
        return new ArrivalResource(Arrival::find($id));
    });

    Route::get("api/users/get", function() {
        return UserResource::collection(User::all());
    });

    Route::get("api/arrivals/get", function() {
        return ArrivalResource::collection(Arrival::all());
    });