<?php

namespace App\Http\Controllers;

use Socialite,File;
use App\Services\SocialFacebookAccountService;

class SocialAuthFacebookController extends Controller
{
  /**
   * Create a redirect method to facebook api.
   *
   * @return void
   */
    public function redirect()
    {
        return Socialite::driver('facebook')->redirect();
    }

    /**
     * Return a callback method from facebook api.
     *
     * @return callback URL from facebook
     */
    public function callback(SocialFacebookAccountService $service)
    {
        $user = $service->createOrGetUser(Socialite::driver('facebook')->user());
        auth()->login($user);

        $fileContents = file_get_contents($user->getAvatar());
        File::put(public_path() . '/uploads/profile/' . $user->getId() . ".jpg", $fileContents);

        //To show picture 
        $picture = public_path('uploads/profile/' . $user->getId() . ".jpg");

        return redirect()->to('/home');
    }
}