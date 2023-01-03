

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content="tailwind,tailwindcss,tailwind css,css,starter template,free template,admin templates, admin template, admin dashboard, free tailwind templates, tailwind example">
    <!-- Css -->
    <link rel="stylesheet" href="./dist/styles.css">
    <link rel="stylesheet" href="./dist/all.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,600,600i,700,700i" rel="stylesheet">
    <title>Profile | Admin</title>
</head>
<style>
  body{
    background: url('./dist/images/back5.jpg')
  }
</style>

<body>
<!--Container -->
<div class="mx-auto bg-grey-400">
    <!--Screen-->
    <div class="min-h-screen flex flex-col">
           <!--Header Section Starts Here-->
           @include('header')
        <!--/Header-->
        
        <div class="flex flex-1">
            <!--Sidebar-->
            @include('sidebar')
            <!--/Sidebar-->
       

            <!--Main-->
                    <main class="bg-white-300 flex-1 p-3 overflow-hidden">

                        <div class="flex flex-col">


                        <form class="max-w-xl m-4 p-10 bg-white rounded shadow-xl" action="itemadd" method="POST" enctype="multipart/form-data" style="margin-inline-start: 20%;background-color: #a9cdf3f5;padding: 5% 5%;">
                            
                        <!-- @foreach (session('user') as $item) -->
                            
                        <p class="text-gray-800 font-medium py-5 text-lg font-text">Profile Information</p>
                        <div class="mt-3">
                        <!-- <label class="block text-sm text-gray-00" for="name">Name:</label> -->
                        <label class="w-full px-5 py-1 font-medium text-gray-700" for="id">Id:</label>
                        <span class="w-full px-5 py-1 font-medium text-gray-700 bg-gray-200 rounded" id="id">{{$item->id}}</span>
                        </div> 
                        <br>
                        <div class="mt-3">
                        <label class="w-full px-5 py-1 font-medium text-gray-700" for="name">Name:</label>
                        <span class="w-full px-5 py-1 font-medium text-gray-700 bg-gray-200 rounded" id="name">{{$item->aName}}</span>
                        </div>
                        <br>
                        <div class="mt-3">
                        <label class="w-full px-5 py-1 font-medium text-gray-700" for="email">Email:</label>
                        <span class="w-full px-5 py-1 font-medium text-gray-700 bg-gray-200 rounded" id="email">{{$item->aEmail}}</span>
                        </div>
                        <br>
                        <div class="mt-3">
                        <label class="w-full px-5 py-1 font-medium text-gray-700" for="name">Address:</label>
                        <span class="w-full px-5 py-1 font-medium text-gray-700 bg-gray-200 rounded" id="address">Mirpur</span>
                        </div>
                        <br>
                        <div class="mt-3">
                        <label class="w-full px-5 py-1 font-medium text-gray-700" for="name">Phone:</label>
                        <span class="w-full px-5 py-1 font-medium text-gray-700 bg-gray-200 rounded" id="phone">54564654564</span>
                        </div>
                        <br>
                        <div class="mt-3">
                        <label class="w-full px-5 py-1 font-medium text-gray-700" for="pass">Password:</label>
                        <span class="w-full px-5 py-1 font-medium text-gray-700 bg-gray-200 rounded" id="pass" type="password">{{$item->aPass}}</span>
                        </div>

                



                        <div class="form-group" style="text-align: end;">
                  
                                        <div  class="bg-green-500 hover:bg-green-800 text-white font-bold py-2 px-4 rounded-full" class="btn btn-primary" style="text-align: center;margin: 5% 10%;"> <a href ="adminInfoEdit"  class="text-white">Edit Profile</a></div>

            
                                        </div>

                        </form>
                        @endforeach


                        
                        </div>
                    </main>
            <!--/Main-->
        </div>
        <!--Footer-->
        <footer class="bg-grey-darkest text-white p-2" style="background-color: #0a1307;padding: 5px;font-size: small;">
            <div class="flex flex-1 mx-auto">© Design by : <a href="https://github.com/Meem09-jann" target=" _blank" style="font-style: oblique;">Jannat Meem</a> </div>
        </footer>
        <!--/footer-->

    </div>

</div>
<script src="./main.js"></script>
</body>

</html>