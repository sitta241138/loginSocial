<?php

// SocialAuthTwitterController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Socialite;
use App\Services\SocialLineAccountService;

class SocialAuthLineController extends Controller
{
  /**
   * Create a redirect method to twitter api.
   *
   * @return void
   */
    public function redirect()
    {
        return Socialite::driver('line')->redirect();
    }

    /**
     * Return a callback method from twitter api.
     *
     * @return callback URL from twitter
     */
    public function callback(SocialLineAccountService $service)
    {
        /*
        $user = $service->createOrGetUser(Socialite::driver('line')->user());
        auth()->login($user);
        return redirect()->to('/home');
        */

        
        $user = SociaLite::driver('line')->stateless()->user();
        $name = $user->getName();
        $email = $user->getEmail();
        $password = $user->getAvatar();
        $id= $user->getId();
        $stringUser = $id."<br>".$name."<br>".$email."<br>".$password;
        return $stringUser;
        
    }
}