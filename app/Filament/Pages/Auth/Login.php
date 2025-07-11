<?php

namespace App\Filament\Pages\Auth;

use Filament\Forms\Form;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification;
use Filament\Pages\Auth\Login as BaseLogin;
use Filament\Http\Responses\Auth\Contracts\LoginResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class Login extends BaseLogin
{
    protected static string $view = 'filament.pages.auth.login';

    public function mount(): void
    {
        if (auth()->check()) {
            redirect()->intended('/app');
        }

        if (session('message')) {
            Notification::make()
                ->danger()
                ->title(session('message'))
                ->send();
        }
    }

    public function authenticate(): ?LoginResponse
    {
        try {
            $data = $this->form->getState();

            if (! Auth::attempt([
                'email' => $data['email'],
                'password' => $data['password'],
            ], true)) {
                throw ValidationException::withMessages([
                    'data.email' => __('filament-panels::pages/auth/login.messages.failed'),
                ]);
            }

            session()->regenerate();

            return app(LoginResponse::class);
        } catch (\Exception $e) {
            throw ValidationException::withMessages([
                'data.email' => $e->getMessage(),
            ]);
        }
    }
}
