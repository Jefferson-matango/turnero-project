<?php

namespace App\Providers;

// use Illuminate\Auth\Notifications\VerifyEmail;
// use Illuminate\Notifications\Messages\MailMessage;
// use Illuminate\Support\Carbon;
// use Illuminate\Support\Facades\Config;
// use Illuminate\Support\Facades\Lang;
// use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
    }
}

// VerifyEmail::$toMailCallback = function($notifiable, $verificationUrl) {
//     return (new MailMessage)
//     ->subject(Lang::get('Verify Email Address'))
//     ->line(Lang::get('Please click the button below to verify your email address.'))
//     ->action(Lang::get('Verify Email Address'), $verificationUrl)
//     ->line(Lang::get('If you did not create an account, no further action is required.'));
// };

// VerifyEmail::$createUrlCallback = function($notifiable) {
//     return URL::temporarySignedRoute(
//         'verification.verify',
//         Carbon::now()->addMinutes(Config::get('auth.verification.expire', 60)),
//         [
//             'id' => $notifiable->getKey(),
//             'hash' => sha1($notifiable->getEmailForVerification()),
//         ]
//     );
// };