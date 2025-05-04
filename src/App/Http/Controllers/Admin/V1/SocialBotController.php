<?php

namespace Callmeaf\SocialBot\App\Http\Controllers\Admin\V1;

use Callmeaf\Base\App\Http\Controllers\Admin\V1\AdminController;
use Callmeaf\SocialBot\App\Repo\Contracts\SocialBotRepoInterface;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;

class SocialBotController extends AdminController implements HasMiddleware
{
    public function __construct(protected SocialBotRepoInterface $socialBotRepo)
    {
        parent::__construct($this->socialBotRepo->config);
    }

    public static function middleware(): array
    {
        return [
           //
        ];
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return $this->socialBotRepo->latest()->search()->paginate();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        return $this->socialBotRepo->create(data: $this->request->validated());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return $this->socialBotRepo->findById(value: $id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(string $id)
    {
        return $this->socialBotRepo->update(id: $id, data: $this->request->validated());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return $this->socialBotRepo->delete(id: $id);
    }

    public function statusUpdate(string $id)
    {
        return $this->socialBotRepo->update(id: $id, data: $this->request->validated());
    }

    public function typeUpdate(string $id)
    {
        return $this->socialBotRepo->update(id: $id, data: $this->request->validated());
    }

    public function trashed()
    {
        return $this->socialBotRepo->trashed()->latest()->search()->paginate();
    }

    public function restore(string $id)
    {
        return $this->socialBotRepo->restore(id: $id);
    }

    public function forceDestroy(string $id)
    {
        return $this->socialBotRepo->forceDelete(id: $id);
    }
}
