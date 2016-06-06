<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>login index</title>
    <link rel="stylesheet" href="css/style.css">    
  </head>

  <body>
    <div class="login-page">
  <div class="form">
    <form class="register-form" action="" method="" >
      <input type="text" placeholder="name"/>
      <input type="password" placeholder="password"/>
      <input type="text" placeholder="email address"/>
      <button>create</button>
<p class="message">Already registered? <a href="#">Sign In</a></p>
    </form>

<form class="login-form" action="{{ url('rootpage/loginCheck/1/1')  }}" method="POST" >
      {{ csrf_field() }}
      <input type="text"     name='user'   placeholder="username"/>
      <input type="password" name='pass'   placeholder="password"/>
      <button>login</button>
      <p class="message">Not registered? <a href="#">Create an account</a></p>
    </form>
  

  @if(1==0)
      <div class="alert alert-danger">
            <strong>請檢查您輸入的資料！</strong>
            <br><br>
            <ul >
              
              <li >錯誤訊息...</li>

            </ul><br>
          </div>
  @endif




  </div>
</div>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="js/index.js"></script>

    
  </body>
</html>
