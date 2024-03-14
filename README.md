Mail-API
The PHP-based mail API simplifies email handling within web applications. It offers a single function that efficiently composes and delivers emails, accepting essential parameters such as sender email, password, title, content, and recipient email.

This API is designed for ease of integration into any PHP-based website, offering straightforward functionality for sending emails seamlessly.

If you wish to customize the SMTP host beyond the default Google settings used in this code, here are some examples:

Gmail SMTP:

Host: smtp.gmail.com
Port: 587 (TLS) or 465 (SSL)
Note: Requires Gmail account credentials for authentication.
Yahoo SMTP:

Host: smtp.mail.yahoo.com
Port: 587 (TLS) or 465 (SSL)
Note: Requires Yahoo account credentials for authentication.
Outlook SMTP:

Host: smtp-mail.outlook.com
Port: 587 (TLS) or 465 (SSL)
Note: Requires Outlook or Hotmail account credentials for authentication.
SendGrid SMTP:

Host: smtp.sendgrid.net
Port: 587 (TLS)
Note: Requires registration with SendGrid and an API key for authentication.
Mailgun SMTP:

Host: smtp.mailgun.org
Port: 587 (TLS)
Note: Requires registration with Mailgun and an API key for authentication.
Elastic Email SMTP:

Host: smtp.elasticemail.com
Port: 587 (TLS)
Note: Requires registration with Elastic Email and an API key for authentication.
While various SMTP options are available, using the default Google SMTP is recommended due to its simplicity and cost-effectiveness.

This code is my original creation and is freely accessible to anyone seeking to incorporate email functionality into their projects.


