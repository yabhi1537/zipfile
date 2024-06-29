<?php

namespace App\Http\Controllers;

use App\Models\EmailSettingsModel1;
use App\Models\EmailSettingsModel2;
use Illuminate\Http\Request;
use App\Models\SettingModel;
use App\Models\LocalizationSettingModel;
use App\Models\OtherSettingModel;
use App\Models\PaymentSettingsModel;
use App\Models\PaymentSettingsModel2;
use App\Models\SeoSettingsModel;
use App\Models\SocialLinkSettingsModel;
use App\Models\SocialSettingsModel;
use App\Models\ThemeSettingsModel;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class SettingController extends Controller
{

    public function setting(Request $request)
    {
         $updatesetting = SettingModel::get();
         $setting = $updatesetting[0];
        return view('Settings/settings',compact('setting'));
    }

    public function updatesetting(Request $request, $id)
    {
    
        $valData =  $request->validate([           
            'logo' => 'image|mimes: jpeg,png,jpg,gif,webp|max:2048',
            'favicon1' => 'image|mimes: jpeg,png,jpg,gif,webp',
          ]);
         
          $updatesetting = SettingModel::find($id);
          if($request->file('favicon1'))
          {
              $file= $request->file('favicon1');
              $filenamefavicon= time()."_".$file->getClientOriginalName();
              $file->move('uploads\favicon', $filenamefavicon, 'public');            
          }
          else{
               $filenamefavicon = $request->oldfavicon;
              }
           

          if($request->file('logo'))
          {
              $file= $request->file('logo');
              $filenamelogo= time()."_".$file->getClientOriginalName();
              $file->move('uploads\logo', $filenamelogo, 'public');            
          }
          else{
               $filenamelogo = $request->oldlogo;
              }
        
         if($updatesetting){
         $updatesetting->websitename = $request->input('websitename');
         $updatesetting->logo = $filenamelogo;
         $updatesetting->favicon = $filenamefavicon;
         $updatesetting->save();
         }
         return redirect()->back()->with('success','Change updated successfully.');
    }

    public function updatesetting2(Request $request, $id)
    {
        $updatesetting = SettingModel::find($id);
        if($updatesetting){
        $updatesetting->address1 = $request->input('address1');
        $updatesetting->address2 = $request->input('address2');
        $updatesetting->city = $request->input('city');
        $updatesetting->postalcode = $request->input('postalcode');
        $updatesetting->country = $request->input('country');
        $updatesetting->state = $request->input('state');
        $updatesetting->save();
         }
        return redirect()->back()->with('success','Change updated successfully.');
    }

    public function localizationdetails()
    {
        $Localizationall = LocalizationSettingModel::get();
        $Localization = $Localizationall[0];
        return view('Settings/localization-details',compact('Localization'));
    }

    public function updatelocalization(Request $request,$id)
    {
            $authid = Auth::user();
            if($authid){
            $userId = $authid->id;
            $Localization = LocalizationSettingModel::find($id);
            if($Localization){
            $Localization->user_id = $userId;
            $Localization->timezone = $request->input('timezone');
            $Localization->dateformat = $request->input('dateformat');
            $Localization->timeformat = $request->input('timeformat');
            $Localization->currencysymbol = $request->input('currencysymbol');
            $Localization->save();
            }
            }
            return redirect()->back()->with('success','Change updated successfully.');
    }

    public function paymentsettings()
    {
        $Payments = PaymentSettingsModel::get();
        $Payments2 = PaymentSettingsModel2::get();
        $Payment = $Payments[0];
        $Payment2 = $Payments2[0];
        return view('Settings/payment-settings',compact('Payment','Payment2'));
    }

    public function updatepayment(Request $request,$id)
    {
        $authid = Auth::user();
        if($authid){
        $userId = $authid->id;
        $payment = PaymentSettingsModel::find($id);
        if($payment){
            $payment->user_id = $userId;
            $payment->livesandbox_key = $request->input('livesandbox_key');
            $payment->tokenization_key = $request->input('tokenization_key');
            $payment->merchant_id = $request->input('merchant_id');
            $payment->public_key = $request->input('public_key');
            $payment->private_key = $request->input('private_key');
            $payment->app_id = $request->input('app_id');
            $payment->secret_key = $request->input('secret_key');
            $payment->save();
            return redirect()->back()->with('success','Change updated successfully.');
        }
    }
        return view('Settings/payment-settings');
    }

    public function changestatusoption(Request $request)
    {
        $Payment = PaymentSettingsModel::find($request->id);
        if ($Payment->option == '1') {
            $Payment->option = 0;
        } else {
            $Payment->option = 1;
        }
        $Payment->save();
        return redirect()->back()->with('success','Change updated successfully.');
    }

    public function updatepayment2(Request $request,$id)
    {
        $authid = Auth::user();
        if($authid){
        $userId = $authid->id;
        $payment = PaymentSettingsModel2::find($id);
        if($payment){
            $payment->user_id = $userId;
            $payment->livesandbox_key = $request->input('livesandbox_key');
            $payment->gatewayname = $request->input('gatewayname');
            $payment->api_key = $request->input('api_key');
            $payment->restkey = $request->input('restkey');
            $payment->save();
            return redirect()->back()->with('success','Change updated successfully.');
        }
    }
        return view('Settings/payment-settings');
    }
    public function changestatusoption2(Request $request)
    {
        $Payment = PaymentSettingsModel2::find($request->id);
        if ($Payment->option == '1') {
            $Payment->option = 0;
        } else {
            $Payment->option = 1;
        }
        $Payment->save();
        return redirect()->back()->with('success','Change updated successfully.');
    }

    public function settingoptionemail(Request $request)
    {
        $Email = EmailSettingsModel1::find($request->id);
        if ($Email->option == '1') {
            $Email->option = 0;
        } else {
            $Email->option = 1;
        }
        $Email->save();
        return redirect()->back()->with('success','Change updated successfully.');
    }
    public function settingoptionemail2(Request $request)
    {
        $Email = EmailSettingsModel2::find($request->id);
        if ($Email->option == '1') {
            $Email->option = 0;
        } else {
            $Email->option = 1;
        }
        $Email->save();
        return redirect()->back()->with('success','Change updated successfully.');
    }
    public function emailsettings()
    {
       $email =  EmailSettingsModel1::get();
       $email2 =  EmailSettingsModel2::get();
       $emails = $email[0];
       $emailssetting2 = $email2[0];
       return view('Settings/email-settings',compact('emails','emailssetting2'));
    }

    public function emailsettingsupdate(Request $request,$id)
    {
        $authid = Auth::user();
        if($authid){
        $userId = $authid->id;
        $email =  EmailSettingsModel1::find($id);
        if($email){
            $email->user_id = $userId;
            $email->name = $request->input('name');
            $email->address = $request->input('address');
            $email->password = $request->input('password');
            $email->save();
            return redirect()->back()->with('success','Change updated successfully.');
        }
    }
    }
    public function emailsettingsupdate2(Request $request,$id)
    {
        $authid = Auth::user();
        if($authid){
        $userId = $authid->id;
        $email =  EmailSettingsModel2::find($id);
        if($email){
            $email->user_id = $userId;
            $email->address = $request->input('address');
            $email->password = $request->input('password');
            $email->host = $request->input('host');
            $email->port = $request->input('port');
            $email->save();
            return redirect()->back()->with('success','Change updated successfully.');
        }
    }
    }

    public function socialsettings()
    {
        $socialdata = SocialSettingsModel::get();
        $social = $socialdata[0];
        return view('Settings/social-settings',compact('social'));
    }

    public function googleupdate(Request $request,$id)
    {
        $authid = Auth::user();
        if($authid){
        $userId = $authid->id;
        $email =  SocialSettingsModel::find($id);
        if($email){
            $email->user_id = $userId;
            $email->google_client_id = $request->input('google_client_id');
            $email->google_client_secret = $request->input('google_client_secret');
            $email->save();
            return redirect()->back()->with('success','Change updated successfully.');
        }
    }
    }

    public function twiterupdate(Request $request,$id)
    {
        $authid = Auth::user();
        if($authid){
        $userId = $authid->id;
        $email =  SocialSettingsModel::find($id);
        if($email){
            $email->user_id = $userId;
            $email->twiter_client_id = $request->input('twiter_client_id');
            $email->twiter_client_secret = $request->input('twiter_client_secret');
            $email->save();
            return redirect()->back()->with('success','Change updated successfully.');
        }
    }
    }
    public function facebookupdate(Request $request,$id)
    {
        $authid = Auth::user();
        if($authid){
        $userId = $authid->id;
        $email =  SocialSettingsModel::find($id);
        if($email){
            $email->user_id = $userId;
            $email->facebook_app_id = $request->input('facebook_app_id');
            $email->facebook_app_secret = $request->input('facebook_app_secret');
            $email->save();
            return redirect()->back()->with('success','Change updated successfully.');
        }
    }
    }

    public function sociallinks()
    {
        $allurl = '';
        $socialdata = SocialLinkSettingsModel::get();
        $sociallink = $socialdata[0];
             $data = $sociallink->url;  
             if($data > 0){
             $allurl = json_decode($data);
             }                                          
        return view('Settings/social-links',compact('sociallink','allurl'));
    }
    
    public function sociallinkupdate(Request $request,$id)
    {
       
        $authid = Auth::user();
        if($authid){
        $userId = $authid->id;
        $SocialLink =  SocialLinkSettingsModel::find($id);
        if($SocialLink){
            $SocialLink->user_id = $userId;
            $SocialLink->linkedin_url = $request->input('linkedin_url');
            $SocialLink->twitter_url = $request->input('twitter_url');
            $SocialLink->facebook_url = $request->input('facebook_url');
            $SocialLink->youtube_url = $request->input('youtube_url');
            $SocialLink->url =  json_encode($request->input('url'));
            $SocialLink->save();
            return redirect()->back()->with('success','Change updated successfully.');
        }
      }
     }

        public function seosettings()
        {
            $socialdata = SeoSettingsModel::get();
            $seo = $socialdata[0];
            return view('Settings/seo-settings',compact('seo'));
        }
        
        public function seoupdate(Request $request,$id)
        {
            $authid = Auth::user();
            if($authid){
            $userId = $authid->id;
            $Seo =  SeoSettingsModel::find($id);
            if($Seo){
                $Seo->user_id = $userId;
                $Seo->meta_title = $request->input('meta_title');
                $Seo->meta_keywords = $request->input('meta_keywords');
                $Seo->meta_description = $request->input('meta_description');
                $Seo->save();
                return redirect()->back()->with('success','Change updated successfully.');
            }
        }
        }

        public function themesettings()
        {
            $ThemeSetting = ThemeSettingsModel::get();
            $theme = $ThemeSetting[0];
            return view('Settings/theme-settings',compact('theme'));
        }

        public function themeupdate(Request $request,$id)
        {
            $valData =  $request->validate([           
                'logo' => 'image|mimes: jpeg,png,jpg,gif|max:2048',
                'favicon' => 'image|mimes: jpeg,png,jpg,gif|max:2048',
              ]);
            $authid = Auth::user();
            if($authid){
            $userId = $authid->id;
            $updatesetting =  ThemeSettingsModel::find($id);
            if($updatesetting){

                $updatesetting->user_id = $userId;
                  if($request->file('favicon'))
                  {
                      $file= $request->file('favicon');
                      $filenamefavicon= time()."_".$file->getClientOriginalName();
                      $file->move('uploads\themesettingfavicon', $filenamefavicon, 'public');            
                  }
                  else{
                       $filenamefavicon = $request->oldfavicon;
                      }
                  if($request->file('logo'))
                  {
                      $file= $request->file('logo');
                      $filenamelogo= time()."_".$file->getClientOriginalName();
                      $file->move('uploads\themesettinglogo', $filenamelogo, 'public');            
                  }
                  else{
                       $filenamelogo = $request->oldlogo;
                      }
                
                 if($updatesetting){
                 $updatesetting->name = $request->input('name');
                 $updatesetting->logo = $filenamelogo;
                 $updatesetting->favicon = $filenamefavicon;
                 $updatesetting->save();
                 }
                 return redirect()->back()->with('success','Change updated successfully.');
            }
        }
        }

        public function settingoptionsocial(Request $request)
        {
            $Social = SocialSettingsModel::find($request->id);
            if ($Social->google_option == '1') {
                $Social->google_option = 0;
            } else {
                $Social->google_option = 1;
            }
            $Social->save();
            return redirect()->back()->with('success','Change updated successfully.');
        }

        public function settingoptionfacebook(Request $request)
        {
            $Social = SocialSettingsModel::find($request->id);
            if ($Social->facebook_option == '1') {
                $Social->facebook_option = 0;
            } else {
                $Social->facebook_option = 1;
            }
            $Social->save();
            return redirect()->back()->with('success','Change updated successfully.');
        }

        public function settingoptiontwiter(Request $request)
        {
            $Social = SocialSettingsModel::find($request->id);
            if ($Social->twiter_option == '1') {
                $Social->twiter_option = 0;
            } else {
                $Social->twiter_option = 1;
            }
            $Social->save();
            return redirect()->back()->with('success','Change updated successfully.');
        }

        public function changepassword()
        {
            $authid = Auth::user();
            if($authid){
                $id = $authid->id;
                $passwordchange = User::find($id);
            }
         return view('Settings/change-password',compact('passwordchange'));
        }

        public function passwordupdate(Request $request,$id)
        {
            
            $user = User::findOrFail($id);
     
            $this->validate($request, [
                'old_password'          => 'required',
                'password'              => 'required|min:6|confirmed',
                'password_confirmation' => 'required'
            ]);
         
            if (!Hash::check($request->get('old_password'), $user->password)) 
            {
                return back()->with('error', "Current Password is Invalid");
            }

            if (strcmp($request->get('old_password'), $request->password) == 0) 
            {
                return redirect()->back()->with("error", "New Password cannot be same as your current password.");
            }
    
            $user =  User::find($user->id);
            $user->password =  Hash::make($request->password);
            $user->save();
            return back()->with('success', "Password Changed Successfully");
         }

         public function othersettings()
         {
             $others = OtherSettingModel::get();
             $other = $others[0];
             return view('Settings/others-settings',compact('other'));
         }

         public function GoogleAnalyticsSetting(Request $request,$id)
         {
             $authid = Auth::user();
             if($authid){
             $userId = $authid->id;
             $other =  OtherSettingModel::find($id);
             if($other){
                 $other->user_id = $userId;
                 $other->name_google_analytic = $request->input('name_google_analytic');
                 $other->save();
                 return redirect()->back()->with('success','Change updated successfully.');
             }
         }
         }

         public function GoogleAdsenseSetting(Request $request,$id)
         {
             $authid = Auth::user();
             if($authid){
             $userId = $authid->id;
             $other =  OtherSettingModel::find($id);
             if($other){
                 $other->user_id = $userId;
                 $other->name_google_adsense_code = $request->input('name_google_adsense_code');
                 $other->save();
                 return redirect()->back()->with('success','Change updated successfully.');
             }
         }
         }

         public function FacebookMessengerSetting(Request $request,$id)
         {
             $authid = Auth::user();
             if($authid){
             $userId = $authid->id;
             $other =  OtherSettingModel::find($id);
             if($other){
                 $other->user_id = $userId;
                 $other->name_facebook_messenger = $request->input('name_facebook_messenger');
                 $other->save();
                 return redirect()->back()->with('success','Change updated successfully.');
             }
         }
         }

         public function FacebookPixelSetting(Request $request,$id)
         {
             $authid = Auth::user();
             if($authid){
             $userId = $authid->id;
             $other =  OtherSettingModel::find($id);
             if($other){
                 $other->user_id = $userId;
                 $other->name_facebook_pixel = $request->input('name_facebook_pixel');
                 $other->save();
                 return redirect()->back()->with('success','Change updated successfully.');
             }
         }
         }

         public function GoogleRechaptchaSetting(Request $request,$id)
         {
             $authid = Auth::user();
             if($authid){
             $userId = $authid->id;
             $other =  OtherSettingModel::find($id);
             if($other){
                 $other->user_id = $userId;
                 $other->google_rechaptcha_site_key = $request->input('google_rechaptcha_site_key');
                 $other->google_rechaptcha_secret_key = $request->input('google_rechaptcha_secret_key');
                 $other->save();
                 return redirect()->back()->with('success','Change updated successfully.');
             }
         }
         }

         public function CookieSetting(Request $request,$id)
         {
             $authid = Auth::user();
             if($authid){
             $userId = $authid->id;
             $other =  OtherSettingModel::find($id);
             if($other){
                 $other->user_id = $userId;
                 $other->name_cookies_agreement = $request->input('name_cookies_agreement');
                 $other->save();
                 return redirect()->back()->with('success','Change updated successfully.');
             }
         }
         }

         public function enablegoogleadsensestatus(Request $request)
        {
            $Social = OtherSettingModel::find($request->id);
            if ($Social->enable_google_adsense_code == '1') {
                $Social->enable_google_adsense_code = 0;
            } else {
                $Social->enable_google_adsense_code = 1;
            }
            $Social->save();
            return redirect()->back()->with('success','Change updated successfully.');
        }
        public function googleanalyticstatus(Request $request)
        {
            $Social = OtherSettingModel::find($request->id);
            if ($Social->enable_google_analytic == '1') {
                $Social->enable_google_analytic = 0;
            } else {
                $Social->enable_google_analytic = 1;
            }
            $Social->save();
            return redirect()->back()->with('success','Change updated successfully.');
        }


        public function facebookmessengerstatus(Request $request)
        {
            $Social = OtherSettingModel::find($request->id);
            if ($Social->enable_facebook_messenger == '1') {
                $Social->enable_facebook_messenger = 0;
            } else {
                $Social->enable_facebook_messenger = 1;
            }
            $Social->save();
            return redirect()->back()->with('success','Change updated successfully.');
        }
        public function facebookpixelstatus(Request $request)
        {
            $Social = OtherSettingModel::find($request->id);
            if ($Social->enable_facebook_pixel == '1') {
                $Social->enable_facebook_pixel = 0;
            } else {
                $Social->enable_facebook_pixel = 1;
            }
            $Social->save();
            return redirect()->back()->with('success','Change updated successfully.');
        }
        public function googlerecaptchastatus(Request $request)
        {
            $Social = OtherSettingModel::find($request->id);
            if ($Social->enable_google_recaptcha == '1') {
                $Social->enable_google_recaptcha = 0;
            } else {
                $Social->enable_google_recaptcha = 1;
            }
            $Social->save();
            return redirect()->back()->with('success','Change updated successfully.');
        }
        public function cookieagreementstatus(Request $request)
        {
            $Social = OtherSettingModel::find($request->id);
            if ($Social->enable_cookies_agreement == '1') {
                $Social->enable_cookies_agreement = 0;
            } else {
                $Social->enable_cookies_agreement = 1;
            }
            $Social->save();
            return redirect()->back()->with('success','Change updated successfully.');
        }
}
