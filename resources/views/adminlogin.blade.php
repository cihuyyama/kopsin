
<!doctype html>
<html lang="en">

<head>
  <title>Login | Admin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="./dist/styles.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
    crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/64683339a5.js" crossorigin="anonymous"></script>
 
  <style>
  .login{
    background: url('./dist/images/login-new.jpeg')
  }
  </style>
</head>

<body class="h-screen font-sans login bg-cover">
        <div class="container mx-auto h-full flex flex-1 justify-center items-center">
        <div class="w-full max-w-lg">
            <div class="leading-loose">
            <form class="max-w-xl m-4 p-10 bg-white rounded shadow-xl" form action="adminlogin" method="POST">
               <div class="alert alert-danger fade show {{!Session::get('incorrect') ? 'hidden' : ''}}" aria-hidden="true">
                            <span class="close" data-dismiss="alert" aria-hidden="true">×</span>
                            <strong style="text-align:center;background: #b3e6e6; color: red;" aria-hidden="true">{{Session::get('incorrect')}}</strong>
                            <a href="#" class="alert-link"></a>
               </div>
                        @csrf
                <p class="text-gray-800 font-medium text-center text-lg font-bold">Admin Login</p>
                <div class="">
                <label class="block text-sm text-gray-00" for="email">Email</label>
              
                <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="email" type="email" name="email" placeholder="Enter your email" required="" aria-label="email"><span style="color: red">@error('email'){{$message}}@enderror</span>
                </div>
                <div class="mt-2">
                <label class="block text-sm text-gray-600" for="password">Password</label>
                <!-- <input id="input-element" type="password" name="pass" placeholder="Enter your Password"> -->
                <input class="w-full px-5  py-1 text-gray-700 bg-gray-200 rounded" id="password" type="password" name="pass" placeholder="Enter your Password" required=""  aria-label="password"><span style="color: red">@error('pass'){{$message}}@enderror</span>
                </div>
                <div class="mt-4 items-center justify-between">
                <input type="submit" class="btn btn-primary" name="submit" value="login">
                                <div class="btn btn-info"> <a href ="home"   class="text-white">Home</a></div>
                <!-- <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded" type="submit">Login</button> -->
                <a class="inline-block right-0 align-baseline  font-bold text-sm text-500 hover:text-blue-800" href="#">
                    Forgot Password?
                </a>
                </div>
                
            </form>

            </div>
        </div>
        </div>
</body>

</html>