<p align="center">
    <img src="https://lh3.googleusercontent.com/QLj-M5oHQqdOsfr8s9uYZ0b9OV3MryfoMnU8cdjozra9aQwaX1amaR8rVLyfUmiY7khCLySjEt9tmE-icO7uqGvXm3zReKtFC9wguowAqIV8etrHz61Dds1QI-phjvW7RsH-FSDyVWoYFM4L2vr26rgAis5hfLDTAtODQyhRIw0JOfD5NnpZoxEEhoQiDs3osYAKg48TTDuQ_oa-EoHX9GCrdQom4BQGafraYcvRc2g-MDrg77ml0z8R4nmtKmoXqeN75lQ2dVirH1si73qR40iQWaBLywW9tiIlZktzRTPunNvR3uT-kQYKyUU1KcXtF4cmfeQlF5ABOWfharD_NhZHT2qN73tQ99zDcV6kHMDf1hLFzRmHnenZESZdIFjnt4fEplQUF6DgEGvBkXijDFn6w7fZY_zqXKZrIRtQNObOpsHwnpnLAui2gnYb6_esToq-_3lGksVde-DySQ8ix3uFFJX-MCpNsPf-15Kn_mn-It7O6gk1UhmweE5Q0DGUJ_kEd6LqbUc2HMueSdUT95QEDI8ylt-e04-dUiwn7O4NK4iAG-q2kRKobU1ztRrfOF6MYLvAlD9Dr-OPNZvY0ndh8oPo3rxzrTUIw4w=w838-h456-no" width="546">
</p>

<p align="center">
    Cleanses (database inverse seeds) for laravel framework.
    This package is beta version!
</p>

## How to install

Run this command in terminal

	composer require "sbkinfo/cleanses:dev-master"

Include ServiceProvider in <b>config/app.php</b> 

```php

'providers' => [
    
    # Other service providers...
    SBKInfo\Cleanses\Providers\CleanserProvider::class
    
]

```
