<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Uni Sans", sans-serif;
        }

        .company-logo {
            border-radius: 8%;
            max-width: 15%;
            height: auto;
            float: left;
            margin-right: 40px;
        }

        nav {
            display: flex;
            align-items: center;
            justify-content: space-around;
            height: 70px;
            background-image: linear-gradient(to right, #003770, #f80211);
            border-bottom: 2px solid #fff;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 999;
        }

        nav .logo a {
            font-size: 25px;
            color: #fff;
            font-weight: 600;
            text-decoration: none;
        }

        /*
        cambios
        nav .logo a:hover {
            color: #003770;
            transition: 0.5s;
        }*/

        nav ul {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 2.5rem;
        }

        nav ul li {
            list-style: none;
        }

        nav ul li a {
            color: #fff;
            text-decoration: none;
            font-size: 15px;
            font-weight: 500;
        }

        nav ul li a:hover {
            color: #003770;
            transition: 0.5s;
        }

        .menu-icon {
            display: none;
            width: 25px;
            height: 3px;
            background: #fff;
            transform: translateY(-50%);
            transition: 0.5s;
            border-radius: 5px;
            cursor: pointer;
        }

        .menu-icon::before,
        .menu-icon::after {
            content: "";
            position: absolute;
            width: 25px;
            height: 3px;
            background: #fff;
            transition: 0.5s;
            border-radius: 5px;
        }

        .menu-icon::before {
            top: -8px;
        }

        .menu-icon::after {
            top: -8px;
        }

        .menu-icon.active {
            background: rgba(0, 0, 0, 0);
        }

        .menu-icon.active::before {
            top: 0;
            transform: rotate(45deg);
        }

        .menu-icon.active::after {
            top: 0;
            transform: rotate(135deg);
        }

        @media screen and (max-width:992px) {
            nav ul {
                position: fixed;
                top: 0px;
                right: 100%;
                width: 100%;
                height: 90vh;
                background: #004a92;
                flex-direction: column;
                transition: 0.5s ease-in;
            }

            nav ul li a {
                font-size: 24px;
            }

            ul.active {
                right: 0;
                transition: 0.5s ease-in;
            }

            .menu-icon {
                display: block;
            }
        }

        body {
            font-family: Arial, sans-serif;
            /*background-color: #fff;  */
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        .header {
            background-color: white;
            color: white;
            text-align: center;
            padding: 20px 0;
        }

        .container {
            max-width: 1300px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
        }

        .form-title {
            font-size: 28px;
            margin-bottom: 20px;
            text-align: center;
        }

        input[type="text"],
        input[type="number"],
        input[type="date"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        input[type="file"] {
            margin-top: 5px;
        }

        input[type="submit"] {
            background-color: #04243C;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        input[type="reset"] {
            background-color: #A70606;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        input[type="submit"]:hover,
        input[type="reset"]:hover {
            background-color: #0056b3;
        }

        .columns {
            display: flex;
            justify-content: space-between;
        }

        .column {
            flex: 1;
            padding: 10px;
        }

        .footer {
            /*background-color: #004a92;*/
            background-color: #003770;
            color: white;
            padding: 15px;
            position: fixed;
            bottom: 0;
            right: 0;
            left: 0;
            font-size: 15px;
            display: flex;
            justify-content: space-between;
            /*justify-content: space-around;*/
            align-items: center;
            /*z-index: 1000; */
        }

        .footer-izq {
            flex: 1;
            text-align: left;
            margin-left: 70px;
        }

        .footer-medio {
            text-align: center;
            display: flex;
            align-items: center;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            display: flex;
            align-items: center;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            font-size: 18px;
        }

        .footer-der {
            flex: 1;
            text-align: center;
        }

        /*.footer-izq,
        .footer-medio,
        .footer-der {
            flex: 1;
            text-align: center;
            padding: 5px;
        }*/

        .footer-der a {
            color: white;
            text-decoration: none;
            /*cambios
            transition: color 0.3s;
            font-size: 18px;*/
        }

        .footer-der a:hover {
            color: red;
            transition: 0.5s;
            /*cambios
            font-size: 20px;*/
        }

        /*.show-on-mobile {
            display: none;
        }

        @media screen and (max-width: 992px) {
            .show-on-mobile {
                display: block;
            }

            .menu-icon {
                display: block;
                z-index: 1000; 
            }

            nav ul {
                position: fixed;
                top: 0;
                right: 100%;
                width: 100%;
                height: 90vh;
                background: #004a92;
                flex-direction: column;
                transition: 0.5s ease-in;
                z-index: 1000; 
            }

            nav ul.active {
                right: 0;
                transition: 0.5s ease-in;
            }

            .footer {
                display: none; 
            }
        }*/

    </style>
        
    <script>
            document.addEventListener('DOMContentLoaded', () => {
                const menuIcon = document.querySelector(".menu-icon");
                const navList = document.querySelector("nav ul");  
        
                menuIcon.addEventListener('click', () => {
                    menuIcon.classList.toggle("active");
                    navList.classList.toggle("active");
                });
            });
    </script>
        
</head>
<body>
    <nav>
        <div class="logo">
            <img src="/images/Logo_TE.png" alt="Logo de Enrique" class="company-logo">
            <div><a>TRIBUNAL ELECTORAL</a></div>
            <div><a>UNIVERSITARIO</a></div>
        </div>
        <ul>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>

            <li><a href="{{ url('/home') }}">Inicio</a></li>
            <li><a href="{{ url('/elecciones') }}">Elecciones</a></li>
            <li><a href="#">Documentación</a></li>
            <li><a href="#">Ingreso</a></li>
            <!--<li class="show-on-mobile"><a href="#">Acerca de</a></li>
            <li class="show-on-mobile"><a href="#">Contactos</a></li>-->
        </ul>
        <div class="menu-icon"></div>
    </nav>
    <div class="footer">
        <div class="footer-izq">
            Av. Oquendo y calle Jordán 
            <br>
            Mail: Tribunal_electoral@umss.edu
            <br>
            www.umss.edu.bo Cochabamba - Bolivia
            <br>
            Design: DevGenius
        </div>
        <div class="footer-medio">
            Copyright © 2023 Tribunal Electoral Universitario Todos los derechos Reservados
            <!--<br>
            Todos los derechos Reservados
            <br>-->
        </div>
        <div class="footer-der">
            <a href="#">Acerca de</a>
            <span>&nbsp;|&nbsp;</span> 
            <a href="#">Contactos</a>
        </div>
    </div>
    
</body>

