# REST CONTROLLER FOR CODEIGNITER

Rest Controller adalah sebuah controller yang ada pada codeigniter dengan tujuan untuk mengolah data yang dijadikan sebagai webservice. Output dari Rest Controller ini adalah Restfull dengan format JSON. Repository ini sengaja dibuat dengan tujuan untuk pembelajaran cara membuat Restfull API karena tutorial sebelumnya terdapat trouble ketika codeigniter yang baru dipasang REST_Controller dari pemiliknya.

## SOFTWARE YANG DIBUTUHKAN

- [XAMPP](https://www.apachefriends.org/download.html)
- PHP 5.+
- [CodeIgniter 3.+](https://www.codeigniter.com/download)
- [Curl](https://curl.haxx.se/download.html)

## CARA PENGERJAAN

- Persiapkan CodeIgniter di dalam folder htdocs 
- Kemudian ambil file [rest.php](https://github.com/zayedelfasa/aharest/blob/master/application/config/rest.php) kemudian masukkan ke dalam folder /application/config/rest.php di project CodeIgniter Anda.
- Setelah itu ambil file [Format.php](https://github.com/zayedelfasa/aharest/tree/master/application/libraries/Format.php) dan [REST_Controller.php](https://github.com/zayedelfasa/aharest/tree/master/application/libraries/REST_Controller.php) kemudian masukkan ke dalam folder /application/libraries/ di project CodeIgniter Anda. 
- Ambil file [rest_controller_lang.php](https://github.com/zayedelfasa/aharest/blob/master/application/language/english/rest_controller_lang.php) kemudian masukkan ke dalam folder /application/language/english/ 

## PERSIAPAN DATABASE

- Buat Database Kontak pada database MySql    

    create database kontak;

- Buat tabel kontak

    create table if not exists `telepon` (`id` int(11) not null auto_increment ,`nama` varchar(50) not null,`nomor` varchar(13) not null, primary key (`id`)) engine=InnoDB  default charset=latin1 auto_increment=8;

- Masukkan beberapa data kontak

    insert into `telepon` (`id`, `nama`, `nomor`) values (1, 'Orion', '08576666762'),(2, 'Mars', '08576666770'),(7, 'Alpha', '08576666765');
	
## KONFIGURASI DATABASE PADA CI

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
	
Setelah itu coba membuat controller kontak seperti pada file [kontakapi.php](https://github.com/zayedelfasa/aharest/blob/master/application/controllers/kontakapi.php)

## TEST REST CONTROLLER
Cara menjalankan REST_Controller yang telah dibuat dapat menggunakan curl. Ada empat metode yang digunakan untuk pengolahan data. Metode tersebut yaitu : 

- GET
    GET digunakan untuk menyimpan ataupun menganmbil data.
    
    `curl http://[domain.com]/index.php/kontakapi`
	
    `curl http://[domain.com]/index.php/kontakapi?id=1`
	
- POST
    POST digunakan untuk menyimpan data baru.
    
    `curl -X POST -d "id=3&nama=zayed elfasa&nomor=0812784958476" http://[domain.com]/index.php/kontakapi`
	
- PUT
    PUT digunakan untuk memperbarui data yang sudah ada sebelumnya
    
    `curl -X PUT -d "id=3&nama=arin&nomor=0812784958676" http://[domain.com]/index.php/kontakapi`
	
- DELETE
    DELETE digunakan untuk menghapus data. 
	
	`curl -X DELETE -d http://[domain.com]/index.php/kontakapi?id=3`

## REFERENSI

- [Codepolitan](https://www.codepolitan.com/rest-api-server-sederhana-dengan-codeigniter-58901f324a29f)
- [CodeIgniter REST_SERVER](https://github.com/chriskacerguis/codeigniter-restserver)
