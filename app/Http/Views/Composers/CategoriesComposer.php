<?php

namespace App\Http\Views\Composers;

use Illuminate\View\View;
// use App\Repositories\UserRepository;
use App\Services\CategoriesService;
use App\Services\CartService;


class CategoriesComposer
{
    /**
     * The user repository implementation.
     *
     * @var UserRepository
     */
    protected $categoriesService;
    protected $cartService;

    /**
     * Create a new profile composer.
     *
     * @param  UserRepository  $users
     * @return void
     */
    public function __construct(CategoriesService $categoriesService, CartService $cartService)
    {
        // Dependencies automatically resolved by service container...
        // $this->users = $users;
        $this->categoriesService = $categoriesService;
        $this->cartService       = $cartService;
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $value              = (empty(session('cart_code'))) ? "" : session('cart_code');
        $categoriesCurrent  = $this->categoriesService->getAll();
        $carts              = $this->cartService->cartCode($value);
        if(count($carts) === 0){
            $count = 0;
        }else{
            $count = count($carts);
        }
        $view->with('count', $count);
        $view->with('categoriesCurrent', $categoriesCurrent);
        $view->with('value', $value);
    }
}   