

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
    <title>Item Add</title>
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


                        <form class="max-w-xl m-4 p-10 bg-white rounded shadow-xl" action="itemadd" method="POST" enctype="multipart/form-data" style="margin-inline-start: 20%;background-color: #a9cdf3f5;padding: 5% 10%;">
                            
                                @csrf
                            
                        <p class="text-gray-800 font-medium text-center text-lg font-bold">Add new item</p>
                        <div class="">
                        <label class="block text-sm text-gray-00" for="name">Name</label>
                        <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="name" type="text" name="name" placeholder="Item Name" required="" aria-label="name">
                        </div>
                        <div class="mt-2">
                        <label class="block text-sm text-gray-00" for="info">Details</label>
                        <textarea class="w-full px-5  py-1 text-gray-700 bg-gray-200 rounded" id="info" type="text" name="info" placeholder="Enter Details"   aria-label="info"></textarea>
                        </div>
                        <div class="mt-2">
                        <label class="block text-sm text-gray-00" for="price">Price</label>
                        <input class="w-full px-5  py-1 text-gray-700 bg-gray-200 rounded" id="price" type="number" name="price" placeholder="Enter Price" required=""  aria-label="price">
                        </div>

                        <div class="mt-2">
                            <label class="block text-sm text-gray-00" for="radio" class="leveltext">Type:</label>

                            <input type="radio" id="type1" name="type" value="Coffee">
                            <label class=" text-sm text-gray-00" for="type1" class="leveltext"> Coffee</label><br>

                            <input type="radio" id="type2" name="type" value="Drinks">
                            <label class=" text-sm text-gray-00" for="type2" class="leveltext"> Drinks</label><br>

                            <input type="radio" id="type3" name="type" value="Snacks">
                            <label class="text-sm text-gray-00"for="type3" class="leveltext"> Snacks</label><br>
                        </div>
                        <br>
                        <div class="form-group">
                            <input class=" text-sm text-gray-00" id="input-element" type="file" name="image" ><span style="color: red">@error('image'){{$message}}@enderror</span>
                        </div>
                        <br>



                        <div class="form-group" style="text-align: end;">
                                        <input id="btnSubmit" type="submit"  class="bg-green-500 hover:bg-green-800 text-white font-bold py-2 px-4 rounded-full" name="submit" value="Add">

                                        

                                        </div>

                        </form>


                        
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