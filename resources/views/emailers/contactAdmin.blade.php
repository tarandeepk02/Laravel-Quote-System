<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>New Contact Form Submission</title>
</head>
<body style="background:#f7f7f7;padding:50px;">
<center>
  <img src="https://staging.signsco.ca/public//web_assets/img/logo.png" width="200"/> <br>
  <br>
  <p>This email is to inform you that a new contact form submission has been received on our website. Below are the details of the submission:</p>
  <table cellpadding="20" style="border:1px dashed #333; border-collapse:collapse;" width="100%">
    <thead>
      <tr>
        <th colspan="2"><span>Full Name</span></th>
        <th colspan="3"><span>{{ $contact->name }}</span></th>
      </tr>
	  <tr>
        <th colspan="2"><span>Email ID</span></th>
        <th colspan="3"><span>{{ $contact->email }}</span></th>
      </tr>
	  <tr>
        <th colspan="2"><span>Subject</span></th>
        <th colspan="3"><span>{{ $contact->subject }}</span></th>
      </tr>
	  <tr>
        <th colspan="2"><span>Message</span></th>
        <th colspan="3"><span>{{ $contact->message }}</span></th>
      </tr>
      
    </thead>
  </table>
  <p>www.signsco.ca</p>
</center>
</body>
</html>
