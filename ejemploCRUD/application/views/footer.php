<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Footer Modificado</title>
    <style>
        .footer {
            color: #ffffff;
            background-color: #073766; 
            text-align: center;
            padding: 20px;
            display: flex;
            justify-content: space-around;
            align-items: center;
            font-family: Arial, Helvetica, sans-serif;
            position: relative;
            bottom: 0;
            width: 100%;
        }
        .footer div {
            flex: 1;
            padding: 10px;
        }
        .footer img {
            max-width: 100%;
            height: auto;
            border-radius: 50%;
        }
        .footer p {
            margin: 0;
            padding: 5px;
            line-height: 1.6;
        }
        .footer .contact-info {
            text-align: left;
            padding-left: 24px;
        }
        .footer .program-info {
            text-align: left;
            padding-left: 34px;
        }
    </style>
</head>
<body>
    <hr/>
    <footer class="footer">
      
        <div class="contact-info">
        <b>
            <p>ALAN RODRIGUEZ  2do 2da<br>
            <span id="current-date"></span><br>
           CAPITAL San Juan </p>
            <p>Estudiante de la Tecnicatura Superior en desarrollo de Software</p>
            
        </div>
        <div class="program-info">
            <p>PROGRAMACION III</p>
            <p>Esta página fue desarrollada utilizando HTML 5,<br>
            CSS, Bootstrap 5, PHP y CodeIgniter</p>
        </div>
        </b>
    </footer>
    <script>
        // Función para obtener la fecha actual
        function getCurrentDate() {
            const monthNames = [
                "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", 
                "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"
            ];
            const now = new Date();
            const day = now.getDate();
            const month = monthNames[now.getMonth()];
            const year = now.getFullYear();
            return `${day} de ${month} de ${year}`;
        }

        // Función para insertar la fecha actual en el HTML
        function insertCurrentDate() {
            const dateElement = document.getElementById('current-date');
            dateElement.textContent = getCurrentDate();
        }

        // Ejecutar la función cuando la página se haya cargado
        window.onload = insertCurrentDate;
    </script>
</body>
</html>
