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
        $socialUser = $this->getSocialUser();

        $user = $service->createOrGetUser($socialUser);
        auth()->login($user);

        $fileContents = file_get_contents($socialUser->getAvatar());

        echo app_path();
        // File::put(public_path() . '/uploads/profile/' . $socialUser->getId() . ".jpg", $fileContents);

        // //To show picture 
        // $picture = public_path('uploads/profile/' . $socialUser->getId() . ".jpg");

        // return redirect()->to('/home')->with(array('avatar'=>$picture));
    }

    public function getSocialUser()
    {
        return Socialite::driver('facebook')->user();
    }
}