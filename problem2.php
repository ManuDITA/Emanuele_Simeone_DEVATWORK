<?php

/**
 * Class Mail
 *
 */
class mail
{
    /**
     * Indicates if the connection to the mail server requires authentication
     * @var <boolean>
     */
    private $authentication = true;
    /**
     * Indicates the host where the connection to the mail server will be made.
     * @var <string>
     */
    private $host = '192.168.1.33';
    /**
     * Specifies the user to be used for authentication with the mail server.
     * @var <string>
     */
    private $user = 'user';
    /**
     * Specifies the password to be used for authentication with the mail server.
     * @var <string>
     */
    private $password = 'pAss12345';


    public function __construct($host, $user, $password, $authentication)
    {
        // Default constructor values
        $this->host = $host;
        $this->user = $user;
        $this->password = $password;
        $this->authentication = $authentication;
    }
    /**

     * Send the email
     * @param <string> $recipient Is the recipient's email address
     * @param <string> $subject This is the subject of the message.
     * @param <string> $body Is the message body
     * @param <boolean> $is_html Indicates if the message body is in html format
     * @param <array> $para_cc An array of email addresses for Cc copy.
     * @param <array> $para_bcc An array of email addresses for copy Bcc
     * @return <boolean> Returns true if email is sent and throws an exception on failure
     */
    private function sendEmail(
        $recipient,
        $subject,
        $body,
        $is_html = false,
        array $para_cc = array(),
        array $para_bcc = array()
    ) {
        //... Sends the email and returns true if everything went well or throws an exception if it fails
        echo $body;
    }

    /**
     * Sending a registration email.
     * @param string $recipient    Recipient's email address
     * @param string $name         User's name
     */
    public function sendRegistrationEmail($recipient)
    {
        $subject = 'Welcome to Our Web Application';
        $body = "<p>Welcome <strong>$this->user</strong>,<br>"
            . "your registration has been successfully completed.<p>"
            . "<p>We hope that our services will be to your liking</p>"
            . "<p>Best regards</p>\n";

        $this->sendEmail($recipient, $subject, $body, true);
    }

    /**
     * Sending an unsubscribe email.
     * @param string $recipient    Recipient's email address
     */
    public function sendUnsubscribeEmail($recipient)
    {
        $subject = 'Unsubscribe from DEVATWORK service';
        $body = "You have successfully unsubscribed from our web application. Sad to see you go :(\n";

        $this->sendEmail($recipient, $subject, $body, true);
    }


    /**
     * Sending a password reminder email.
     *
     * @param string $recipient        Recipient's email address
     * @param string $username         User's username
     * @param string $password         User's password
     */
    public function sendPasswordReminderEmail($recipient)
    {
        $subject = 'Password Reminder';
        $body = "Dear user,\n\n"
              . "we remind you that your access data are as follows:\n"
              . "user: $this->user\n"
              . "password: $this->password.\n"
              . "Best regards.";

        $this->sendEmail($recipient, $subject, $body, true);
    }
}

$myRegistrationEmail = new mail('192.168.1.66', 'asd', 'r3g1str0', true);
$myRegistrationEmail->sendRegistrationEmail("DEV@WORK");
echo "\n\n";

$myUnsubscribeEmail = new mail('192.168.33', 'user', 'pAss12345', true);
$myUnsubscribeEmail->sendUnsubscribeEmail("DEV@WORK");

echo "\n\n";
$myPasswordReminderEmail = new mail('192.168.1.22', 'null', 'null', false);
$myPasswordReminderEmail->sendPasswordReminderEmail("DEV@WORK");