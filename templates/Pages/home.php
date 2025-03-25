<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Lista de Enlaces</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;600&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(135deg, #c3cfe2, #dde5f2);
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      overflow: hidden;
    }

    .card {
      background: rgba(255, 255, 255, 0.2);
      backdrop-filter: blur(15px);
      -webkit-backdrop-filter: blur(15px);
      border-radius: 20px;
      box-shadow: 0 8px 30px rgba(0, 0, 0, 0.15);
      padding: 40px 60px;
      text-align: center;
      animation: fadeIn 1.5s ease;
    }

    h1 {
      font-size: 2.8em;
      color: #2c3e50;
      margin-bottom: 25px;
    }

    ul {
      list-style: none;
    }

    ul li {
      margin: 18px 0;
    }

    a {
      font-size: 1.4em;
      text-decoration: none;
      color: #1e88e5;
      transition: all 0.3s ease;
    }

    a:hover {
      color: #0d47a1;
      transform: translateX(5px);
    }

    i {
      margin-right: 10px;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(30px); }
      to { opacity: 1; transform: translateY(0); }
    }
  </style>
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

</head>
<body>

  <div class="card">
    <h1>🌟 Lista de Enlaces</h1>
    <ul>
      <li><a href="/perfiles"><i class="fas fa-user-circle"></i>Perfiles</a></li>
      <li><a href="/registro"><i class="fas fa-user-plus"></i>Registro</a></li>
      <li><a href="/roles"><i class="fas fa-user-tag"></i>Roles</a></li>
      <li><a href="/usuarios"><i class="fas fa-users"></i>Usuarios</a></li>
    </ul>
  </div>

</body>
</html>
