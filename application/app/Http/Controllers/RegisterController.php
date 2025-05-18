<?php declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

use App\Http\Requests\RegisterRequest;
use App\Repositories\UserRepository;

class RegisterController extends Controller
{
    public function __construct(
        private UserRepository $userRepository
    )
    {}

    public function index(): View
    {
        return view('register.index');
    }

    public function store(RegisterRequest $request): RedirectResponse
    {
        $user = $this->userRepository->create($request->all());
        return redirect()->route('login.index');
    }
}
