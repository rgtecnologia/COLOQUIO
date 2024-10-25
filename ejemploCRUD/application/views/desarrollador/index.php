<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil de Desarrollador</title>
    <style>
        .cuerpo {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            padding: 5px;
            display: flex;
            justify-content: center;
            align-items: center;
           
            margin: 0;
        }
        .profile-card {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
            max-width: 600px;
            width: 100%;
        }
        .profile-card img {
            border-radius: 50%;
            border: 5px solid #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 150px;
            height: 150px;
            margin-bottom: 20px;
        }
        .profile-card h1 {
            font-size: 24px;
            margin-bottom: 10px;
            color: #333;
        }
        .profile-card p {
            font-size: 16px;
            color: #666;
            line-height: 1.6;
            margin-bottom: 10px;
        }
        .profile-card .skills {
            font-weight: bold;
            margin-top: 20px;
        }
    </style>
</head>
<body>
  <div class="cuerpo">
    <div class="profile-card">
        <img src="<?php echo base_url();?>imagenes/perfil.jpg" alt="Foto de perfil">
        <h1>ALAN RODRIGUEZ  2do 2da</h1>
        <p>Inicio en 2023 - Estado: Cursando, 2024<br>
         Localidad: San Juan Capital </p>
        <p>Estudiante de la Tecnicatura Superior en Desarrollo de Software</p>
        <div class="skills">
            <p>Uso: HTML, CSS, Bootstrap, PHP y CodeIgniter</p>
            <p>Sitio desarrollado para la asignatura, Programación III</p>
        </div>
    </div>
      </div>
</body>
</html>
