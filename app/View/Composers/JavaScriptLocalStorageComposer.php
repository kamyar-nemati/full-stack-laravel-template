<?php

namespace App\View\Composers;

use App\Repositories\UserRepository;

use Illuminate\View\View;

class JavaScriptLocalStorageComposer
{
    /**
     * The user repository implementation.
     *
     * @var \App\Repositories\UserRepository
     */
    protected $users;

    /**
     * Create a new profile composer.
     *
     * @param  \App\Repositories\UserRepository  $users
     * @return void
     */
    public function __construct(UserRepository $users)
    {
        // Dependencies are automatically resolved by the service container...
        $this->users = $users;
    }

    /**
     * Bind data to the view.
     *
     * @param  \Illuminate\View\View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $javascript_local_storage = [
            //
        ];

        $view->with('javascript_local_storage', $javascript_local_storage);
    }
}
