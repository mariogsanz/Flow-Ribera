# Flow Ribera

***Flow Ribera*** es una aplicación desarrollada para llevar el control de los alumnos que salen del centro en horario lectivo ya sea por motivos médicos, personales o de otro tipo.

Para poner en funcionamiento la aplicación, puedes instalarla directamente en tu servidor web, o utilizar XAMPP. En este caso se utilizará XAMPP.

[Instalar XAMPP](https://www.apachefriends.org/)

Una vez que tengas el XAMPP configurado a tu gusto, clona el repositorio en la ruta `{xampp}/htdocs`. En tu base de datos importa el archivo `flowribera.sql` para obtener la estructura necesaria junto con datos de prueba que pueden ser modificados posteriormente.

Cuando tengas la base de datos configurada, edita el archivo `config.php` para hacer coincidir los datos  `host`, `user`, `pass`, `port` y `dbname` con los de la base de datos.

Ya puedes acceder a la aplicación a través de tu navegador.
