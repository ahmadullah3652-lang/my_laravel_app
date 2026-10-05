<!DOCTYPE html>
<html lang="ps">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>ننوتل | د اوبو بیلینګ سیسټم</title>
   <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <script src="{{asset('js/script.js') }}" defer></script>
</head>
<body>
  <div class="page-shell auth-shell">
    <header class="site-header">
      <a class="brand-link" href="/index">
        <span class="logo">💧</span>
        <span class="brand-text">داوبودحسابونه</span>
      </a>
    
      <nav class="main-nav">
        
        <a href="/index">کور</a>
        <a href="/features">ځانګړتیاوې</a>
        <a href="/pricing">بیه</a>
        <a href="/about">موږ</a>
        <a href="/report">راپور</a>
        <a href="/dashboard">ډشبورډ</a>
        <a href="/login"class="active">ننوتل</a>
        <a href="/register">ثبت نام</a>
        
      </nav>
     
    </header>

    <main class="auth-main">
      <section class="auth-card">
        <h1>ننوتل</h1>
        <h2>یوازې ثبت شوي کارونکي کولی شي خپل حساب ته لاسرسی ولري.</h2>
        <form class="auth-form" id="loginForm" novalidate>

  <label>
    ایمیل یا کارونکي نوم

<div class="user-box"><input
      type="text"
      id="user"
      placeholder="ستاسو ایمیل یا نوم"
      required
    />
  </div>
  </label>

  <label>
    پاسورډ
   <div class="password-box">

   <input
      type="password"
      id="password"
      placeholder="پاسورډ"
   >

   <span id="eye" style="cursor: pointer;">👁</span>

</div>

  </label>

  <button class="button" type="submit">
    ننوتل
  </button>

  <p id="loginMessage"></p>

</form>
    
      </section>
    </main>
    <script src="script2.js"></script>

    <footer class="site-footer auth-footer">
      <p>© 2026 داوبودحسابونو. ټول حقوق خوندي دي.</p>
    </footer>
  </div>
</body>
</html>
