# MyfcCaptcha

MyfcCaptcha basit bit captcha sistemidir 

  - Kullanımı kolaydır

### Version
1.0

### Kurulum

You need Gulp installed globally:

```sh
<?php 

use Myfc\Captcha;
$captcha  = new Captcha( [
	      'height' => 50, ## oluşturulacak resmin yüksekliği
		  'width' => 150, ##oluşturulacak resmin genişliği
		  'font' => 'fonts/segoepr.ttf'## kullanılacak fontun yolu
] );

$captcha->generate(); ##resmi oluşturur

```
### Veriyi Kontrol Etme

```sh 

use Myfc\Captcha;

$check = Captcha::check($_POST['guvenlik']);

```
