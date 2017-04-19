###############################
REST CONTROLLER FOR CODEIGNITER
###############################

Rest Controller adalah sebuah controller yang ada pada codeigniter
dengan tujuan untuk mengolah data yang dijadikan sebagai webservice.
Output dari Rest Controller ini adalah Restfull dengan format JSON.
Repository ini sengaja dibuat dengan tujuan untuk pembelajaran cara membuat Restfull API 
karena tutorial sebelumnya terdapat trouble ketika codeigniter yang baru dipasang REST_Controller 
dari pemiliknya.

********************
Requirement Software
********************
- XAMPP https://www.apachefriends.org/download.html
- PHP 5.+
- CodeIgniter 3.+ https://www.codeigniter.com/download
- Curl https://curl.haxx.se/download.html

***************
Cara Pengerjaan
***************
- Persiapkan CodeIgniter di dalam folder htdocs 
- Kemudian ambil file rest.php (https://github.com/zayedelfasa/aharest/blob/master/application/config/rest.php) kemudian masukkan ke dalam folder /application/config/rest.php di project CodeIgniter Anda.
- Setelah itu ambil file Format.php dan REST_Controller.php pada https://github.com/zayedelfasa/aharest/tree/master/application/libraries kemudian masukkan ke dalam folder /application/libraries/ di project CodeIgniter Anda. 
- Ambil file rest_controller_lang.php pada https://github.com/zayedelfasa/aharest/blob/master/application/language/english/rest_controller_lang.php kemudian masukkan ke dalam folder /application/language/english/ 

******************
PERSIAPAN DATABASE
******************
- Buat Database Kontak    
	CREATE DATABASE kontak;
- Buat tabel kontak    
	USE kontak;
    CREATE TABLE IF NOT EXISTS `telepon` (
      `id` int(11) NOT NULL AUTO_INCREMENT,
      `nama` varchar(50) NOT NULL,
      `nomor` varchar(13) NOT NULL,
      PRIMARY KEY (`id`)
    ) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;
- Masukkan beberapa data kontak    
	USE kontak;
    INSERT INTO `telepon` (`id`, `nama`, `nomor`) VALUES
    (1, 'Orion', '08576666762'),
    (2, 'Mars', '08576666770'),
    (7, 'Alpha', '08576666765');
	
********
PHP CODE
********
Untuk mencoba silahkan konfigurasi database pada proyek Anda di folder /application/config/database.php dengan konfigurasi sebagai berikut : 

    $db['default'] = array(
    	'dsn'	=> '',
    	'hostname' => 'localhost',
    	'username' => 'root',
    	'password' => '',
    	'database' => 'kontak',
    	'dbdriver' => 'mysqli',
    	'dbprefix' => '',
    	'pconnect' => FALSE,
    	'db_debug' => (ENVIRONMENT !== 'production'),
    	'cache_on' => FALSE,
    	'cachedir' => '',
    	'char_set' => 'utf8',
    	'dbcollat' => 'utf8_general_ci',
    	'swap_pre' => '',
    	'encrypt' => FALSE,
    	'compress' => FALSE,
    	'stricton' => FALSE,
    	'failover' => array(),
    	'save_queries' => TRUE
    );
	
Setelah itu coba membuat controller kontak seperti pada file di bawah ini : 
https://github.com/zayedelfasa/aharest/blob/master/application/controllers/kontakapi.php

*********
REFERENSI
*********
- Codepolitan https://www.codepolitan.com/rest-api-server-sederhana-dengan-codeigniter-58901f324a29f
- CodeIgniter REST_SERVER https://github.com/chriskacerguis/codeigniter-restserver
