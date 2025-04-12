<?php

use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail; // Ensure Mail facade is included

/**
 * Sends an email using a stored template.
 *
 * @param string $etype     The email type/template name.
 * @param string $toemail   Recipient email address.
 * @param array  $values    Key-value array to replace template variables.
 *
 * @return string           Status message ('Email sent' or 'Not Sent').
 */
function sendEmail($etype, $toemail, $values)
{
    // Fetch the email template based on type
    $qryse = DB::table('templates')->where('temp_name', $etype)->first();

    // Extract template variables from the database
    $template = explode(' ', $qryse->temp_vars);
    $messageBody = $qryse->temp_body;

    // Replace template variables with actual values
    if (count($template) > 0) {
        foreach ($template as $temp) {
            if (!empty($temp)) {
                $key = preg_replace('/[^a-zA-Z0-9_\']/', '', $temp);
                if (in_array($temp, $template) && isset($values[$key])) {
                    $messageBody = str_replace($temp, $values[$key], $messageBody);
                }
            }
        }
    }

    // Prepare data for the email
    $data = [
        'message'           => $messageBody,
        'email'             => $toemail,
        'temp_subject'      => $qryse->temp_subject,
        'mail_from_address' => env('MAIL_USERNAME'),
        'mail_from_name'    => env('APP_NAME'),
        'values'            => $values,
        'etype'             => $etype
    ];

    // Send the email
    $maill = Mail::send([], $data, function ($message) use ($data) {
        $message->from($data['mail_from_address'], $data['mail_from_name']);
        $message->to($data['email']);
        $message->subject($data['temp_subject']);
        $message->html($data['message']); // Send as HTML content

        // Add reply-to if this is a support email
        if ($data['etype'] == 'support_to_admin') {
            $message->replyTo($data['values']['uploader_email'], $data['values']['uploader_name']);
        }
    });

    // Return status
    return $maill ? 'Email sent' : 'Not Sent';
}

/**
 * Converts a value to a float with 2 decimal places.
 *
 * @param mixed $val  The value to be formatted.
 *
 * @return float      The formatted float value.
 */
function floatValue($val)
{
    return number_format((float)$val, 2, '.', '');
}
