<!DOCTYPE html>
<html lang="ps">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>ثبت نام | د اوبو بیلینګ سیسټم</title>
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
        <a  href="/login">ننوتل</a>
        <a  href="/register">ثبت نام</a>
        
      </nav>
    </header>
 <!-- class="button button-ghost" -->

<main class="auth-main">

<section class="auth-card">

<h1>ثبت نام</h1>

<p>د نوم، آدرس او ایمیل له لارې خپل اکاؤنټ جوړ کړئ</p>

<form class="auth-form" id="registerForm" novalidate>

<label>
بشپړ نوم
<input type="text" id="fullname" placeholder="نوم ستاسو" required>
</label>

<label>
آدرس
<input type="text" id="address" placeholder="آدرس ستاسو" required>
</label>

<label>
ایمیل
<input type="email" id="email" placeholder="ایمیل ستاسو" required>
</label>

<label class="password-box">
رمز
<input type="password" id="password" placeholder="رمز ټینګ" required minlength="6">
<span id="eye">👁</span>
</label>

<button class="button" type="submit">نام ثبت</button>

<p class="small">
که دمخه حساب لرئ <a href="login.html" style="color: blue;">Login</a>
</p>

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
