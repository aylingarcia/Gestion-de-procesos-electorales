<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Uni Sans", sans-serif;
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
        nav .logo a:hover {
            color: #003770;
            transition: 0.5s;
        }
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
        @media screen and (max-width: 992px) {
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
                background: radial-gradient(circle at 50% 50%, #C20000,#003770), repeating-radial-gradient(circle, transparent 0, transparent 5px, #333 5px, #333 10px);
    
                margin: 0;
                padding: 0;
                color: white;
                position: relative;
                overflow: hidden;
            }

         


        .header {
            background-image: linear-gradient(to right, #003770, #C20000);
            color: white;
            text-align: center;
            padding: 40px 0;
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }

        .header h1 {
            font-size: 36px;
            font-weight: bold;
        }

        .header p {
            font-size: 18px;
            font-weight: 300;
        }

        .votante-form-container {
            padding: 20px;
            margin-top: 100px; 
        }

        .footer {
            /*background-color: #003770;*/
            background-image: linear-gradient(to right, #003770, #C20000);
            color: white;
            text-align: right;
            padding: 15px;
            position: fixed;
            bottom: 0;
            right: 0;
            left: 0;
            font-size: 15px;
            display: flex;
            flex-direction: column;
            align-items: flex-end;
        } 
        
        .footer .second-line {
            font-size: 14px;
        }
        .content-container {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: flex-start; 
            height: 100vh;

        }
        .title h1 {
            font-size: 28px;
            margin-bottom: 10px;
        }

        
        .title p {
            font-size: 16px;
        }
        .title {
            padding-left: 20px;
        }
    </style>
</head>

<body>
    <nav>
        <div class="logo">
            <div><a href="#">TRIBUNAL ELECTORAL</a></div>
            <div><a href="#">UNIVERSITARIO</a></div>
        </div>
        <ul>
            <li><a href="#">Inicio</a></li>
            <li><a href="#">Elecciones</a></li>
            <li><a href="#">Documentación</a></li>
            <li><a href="#">Acerca de</a></li>
            <li><a href="#">Contactos</a></li>
            <li><a href="#">Ingreso</a></li>
        </ul>
        <div class="menu-icon"></div>
    </nav>
    <!-- Header personalizado -->
    <div class="content-container">
        <div class="title">
            <h1>Tribunal Electoral Universitario</h1>
            <p>El TEU es responsable de las elecciones democráticas dentro de la Universidad Mayor de San Simón.</p>
        </div>
    </div>

    <div class="footer">
        <span>Derechos Reservados © 2023</span>
        <span class="second-line">Tribunal Electoral Universitario DevGeniusSRL</span>
    </div>
</body>

</html>