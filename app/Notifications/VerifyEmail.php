<?php
namespace App\Notifications;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Lang;
use Illuminate\Auth\Notifications\VerifyEmail as VerifyEmailBase;
use App\Helpers\Helper;
use App\Mail\MailInspectionEntryResults as Mailable;
use DB;
use Illuminate\Support\HtmlString;

class VerifyEmail extends VerifyEmailBase
{
//    use Queueable;
	/*public function via($notifiable)
    {
        return ['mail'];
    }*/
    // change as you want
    public function toMail($notifiable)
    {
        if (static::$toMailCallback) {
            return call_user_func(static::$toMailCallback, $notifiable);
        }
        /*return (new MailMessage)
            ->subject('Verify Email Address')
            ->line('Please click the button below to verify your email address.')
            ->action(
                'Verify Email Address',
                $this->verificationUrl($notifiable)
            )
            ->line('If you did not create an account, no further action is required.');*/
			//dd($notifiable->email);
			
		/*Email*/
		/*$values = array('name'=>$notifiable->name, 'email' => $notifiable->email, 'link' => $this->verificationUrl($notifiable));
		return (sendEmail('account_register',$notifiable->email,$values));*/				
		/*Email*/		
			//return '200';
		//'200';	
		
		
		$values = array('name'=>$notifiable->name, 'email' => $notifiable->email, 'link' => $this->verificationUrl($notifiable));
		
		
		$qryse = DB::table('templates')->where('temp_name','account_register')->first();
				//dd($qryse);
				$template = explode(' ',$qryse->temp_vars);
				//print_r($template);		
				$message1 = $qryse->temp_body;
				if(count($template)>0)
				{
				foreach($template as $k=>$temp)
				{
				//$offset = str_replace('{','',$temp);
				//$offset = str_replace('}','',$temp);
				if(!empty($temp))
				{
				$offset = preg_replace('/[^a-zA-Z0-9_\']/', '', $temp);
				//dd($newstr);
				if(in_array($temp, $template)) { 
				$message1 = str_replace($temp, $values[$offset], $message1);
				}
				}
				}
				}
		
		//dd($message1);
		
		
		
		return (new MailMessage)

                        ->subject($qryse->temp_subject)

                        //->from([env('MAIL_FROM_ADDRESS') => env('MAIL_FROM_NAME')])
						//->to($notifiable->email,$notifiable->name)
                        ->line(new HtmlString($message1));
		
		
			
    }
}