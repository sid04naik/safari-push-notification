# Safari Push Notifications (SPN): The Complete Setup Guide [![CodeFactor](https://www.codefactor.io/repository/github/sid04naik/safari-push-notification/badge)](https://www.codefactor.io/repository/github/sid04naik/safari-push-notification)
The Complete Setup Guide for configuring the Safari Push Notification.

Safari Push Notifications is an `Apple developer service` that delivers notifications on the Safari web browser.

To Configure the `Safari Push Notifications (SPN)` the follow the medium documentation linked below.

## Documentation:
[View Medium Documentation](https://medium.com/@sid04naik/safari-push-notifications-spn-the-complete-setup-guide-6aa49889e8a1)

## Certificates
We need to generate and download the list to enable SPN.
All the files should be placed in `certs` folder

* AppleWWDRCA.cer
* AppleWWDRCA.pem
* Entrust.net Certification Authority (2048).pem
* website_aps_production.cer
* Certificates.p12
* Certificates.pem

### Notification Icons
The list of icons needs to generated and should be placed in `pushPackage.raw/icon.iconsent` folder

* icon_16x16.png
* icon_16x16@2x.png
* icon_32x32.png
* icon_32x32@2x.png
* icon_64x64.png
* icon_64x64@2x.png
* icon_128x128.png
* icon_128x128@2x.png
* icon_256x256.png
* icon_256x256@2x.png
* icon_512x512.png
* icon_512x512@2x.png

## LICENSE

[MIT License](https://github.com/sid04naik/safari-push-notification/blob/main/LICENSE)

Copyright (c) 2020 Siddhant Naik
