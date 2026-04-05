<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Login Perpustakaan</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Font -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }

    body {
      height: 100vh;
      background: linear-gradient(135deg, #1e1e8f, #6a5acd, #00c6ff);
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .login-card {
      width: 350px;
      backdrop-filter: blur(15px);
      background: rgba(255, 255, 255, 0.15);
      border-radius: 20px;
      padding: 30px;
      color: white;
      box-shadow: 0 10px 30px rgba(0,0,0,0.3);
      text-align: center;
      animation: fadeIn 1s ease;
    }

    @keyframes fadeIn {
      from {
        opacity: 0;
        transform: translateY(20px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .logo {
      display: flex;
      justify-content: center;
      align-items: center;
      gap: 10px;
    }

    .logo h2 {
      font-weight: 600;
    }

    h3 {
      margin: 20px 0;
    }

    .input-group {
      margin-bottom: 15px;
    }

    .input-group input {
      width: 100%;
      padding: 12px;
      border: none;
      border-radius: 10px;
      outline: none;
      transition: 0.3s;
    }

    .input-group input:focus {
      box-shadow: 0 0 10px rgba(255,255,255,0.7);
    }

    .password-group {
      position: relative;
    }

    .password-group span {
      position: absolute;
      right: 10px;
      top: 50%;
      transform: translateY(-50%);
      cursor: pointer;
    }

    .options {
      display: flex;
      justify-content: space-between;
      font-size: 12px;
      margin-bottom: 15px;
    }

    .options a {
      color: #fff;
      text-decoration: none;
    }

    button {
      width: 100%;
      padding: 12px;
      border: none;
      border-radius: 10px;
      background: #00c6ff;
      color: white;
      font-weight: bold;
      cursor: pointer;
      transition: 0.3s;
    }

    button:hover {
      background: #0072ff;
      transform: scale(1.05);
    }

    .signup {
      margin-top: 15px;
      font-size: 13px;
    }

    .signup a {
      color: #00c6ff;
      text-decoration: none;
    }
  </style>
</head>

<body>

<div class="login-card">

  <div class="logo">
    📖 <h2>Perpustakaan</h2>
  </div>

  <h3>Login</h3>

  <form>
    <div class="input-group">
      <input type="email" placeholder="Email" required>
    </div>

    <div class="input-group password-group">
      <input type="password" id="password" placeholder="Password" required>
      <span onclick="togglePassword()">👁️</span>
    </div>

    <div class="options">
      <label>
        <input type="checkbox"> Remember me
      </label>
      <a href="#">Forgot password?</a>
    </div>

    <button type="submi">Login</button>

    <p class="signup">
      Belum punya akun? <a href="#">Daftar</a>
    </p>
  </form>

</div>

<script>
function togglePassword() {
  const password = document.getElementById("password");
  password.type = password.type === "password" ? "text" : "password";
}
</script>

</body>
</html>