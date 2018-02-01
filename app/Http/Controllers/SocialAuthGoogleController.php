<?php

// SocialAuthTwitterController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Socialite;
use App\Services\SocialGoogleAccountService;

class SocialAuthGoogleController extends Controller
{
  /**
   * Create a redirect method to twitter api.
   *
   * @return void
   */
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * Return a callback method from twitter api.
     *
     * @return callback URL from twitter
     */
    public function callback(SocialGoogleAccountService $service)
    {
        
        $user = $service->createOrGetUser(Socialite::driver('google')->user());
        auth()->login($user);
        return redirect()->to('/home');
        

        /*
        $user = SociaLite::driver('google')->stateless()->user();
        $name = $user->getName();
        $email = $user->getEmail();
        $password = $user->getAvatar();
        $id= $user->getId();
        $stringUser = $id."<br>".$name."<br>".$email."<br>".$password;
        return $stringUser;
        */
    }
}