<?php
define('DS', DIRECTORY_SEPARATOR);
define('APNS_SERVER_URL', 'ssl://gateway.push.apple.com:2195');
define('APPLE_PUSH_NOTIFICATION_CERTIFICATE_PEM_FILENAME', 'Certificates.pem');
define('APPLE_PUSH_NOTIFICATION_CERTIFICATE_P12_FILENAME', 'Certificates.p12');
define('APPLE_PUSH_NOTIFICATION_CERTIFICATE_PASS', 'SET_YOUR_OWN_PASSWORD');  // Change this to the certificate's import password
define('APPLE_WWCRCA_CERTIFICATE_PEM_FILENAME', 'AppleWWDRCA.pem');
define('APPLE_ENTRUST_CERTIFICATE_PEM_FILENAME', 'Entrust.net Certification Authority (2048).pem');
define('APPLE_WEBSITE_PUSH_ID', 'web.com.domain.appname');
define('GLOBAL_SERVER_PATH', '');
define('_FILE_TMPPATH', '');
define('SIGNATURE_INITIALS', 'safari-push-notify-');
define('CERTIFICATES_FOLDER', 'certs');
?>
