<?php

namespace App\Services;
use App\SocialAccount;
use App\User;
use Laravel\Socialite\Contracts\User as ProviderUser;

class SocialTwitterAccountService
{
    public function createOrGetUser(ProviderUser $providerUser)
    {
        $account = SocialAccount::whereProvider('twitter')
            ->whereProviderUserId($providerUser->getId())
            ->first();

        if ($account) {
            return $account->user;
        } else {

            $account = new SocialAccount([
                'provider_user_id' => $providerUser->getId(),
                'provider' => 'twitter'
            ]);

            $user = User::whereEmail($providerUser->getEmail())->first();

            if (!$user) {

                $user = User::create([
                    'email' => "don't use email",
                    'name' => $providerUser->getName(),
                    'password' => md5(rand(1,10000)),
                ]);
            }

            $account->user()->associate($user);
            $account->save();

            return $user;
        }
    }
}