<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="./dist/styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/64683339a5.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

    <style>
        .login {
            background: url('./dist/images/back4.jpg')
        }
    </style>
    <title>Register</title>
</head>

<body class="h-screen font-sans login bg-cover">
    <div class="container mx-auto h-full flex flex-1 justify-center items-center" style="margin-top: 70px">
        <div class="w-full max-w-lg">

            <form class="max-w-x m-4 p-10 rounded shadow-xl" action="submit" method="POST" style="background-color: #114622e3">
                @csrf
                <p class="text-gray-100 font-medium text-center text-lg ">Register</p>
                <div class="">
                    <label class="block text-sm text-gray-100" for="cus_name">Name</label>
                    <input class="w-full px-4 py-1 text-gray-700 bg-gray-200 rounded" id="cus_name" name="name" type="text" required="" placeholder="Your Name" aria-label="Name">
                </div>
                <div class="mt-2">
                    <label class="block text-sm text-gray-100" for="cus_email">Email</label>
                    <input class="w-full px-4  py-1 text-gray-700 bg-gray-200 rounded" id="cus_email" name="email" type="text" required="" placeholder="Your Email" aria-label="Email"><span style="color: red">@error('email'){{$message}}@enderror</span>
                </div>
                <div class="mt-2">
                    <label class="block text-sm text-gray-100" for="cus_phone">Phone</label>
                    <input class="w-full px-4  py-1 text-gray-700 bg-gray-200 rounded" id="cus_phone" name="phone" type="number" placeholder="Your Phone" aria-label="Phone">
                </div>
                <div class="mt-2">
                    <label class=" block text-sm text-gray-100" for="cus_email">Address</label>
                    <textarea class="w-full px-2 py-1 text-gray-700 bg-gray-200 rounded" id="cus_email" name="address" type="text" placeholder="Address" aria-label="Address"></textarea>
                </div>
                <div class="mt-2">
                    <label class="block text-sm text-gray-100" for="cus_pass">Password</label>
                    <input class="w-full px-4  py-1 text-gray-700 bg-gray-200 rounded" id="cus_pass" name="pass" type="password" required="" placeholder="****" aria-label="Password"> <span style="color: red">@error('pass'){{$message}}@enderror</span>
                </div>
                <div class="mt-2">
                    <label for="radio" class="block text-sm text-gray-100">Sex:</label>

                    <input type="radio" id="male" name="sex" value="Male" checked>
                    <label class="text-sm text-gray-100" for="male">Male</label>
                    <input type="radio" id="female" name="sex" value="Female">
                    <label class=" text-sm text-gray-100" for="female">Female</label>
                    <input type="radio" id="others" name="sex" value="others">
                    <label class=" text-sm text-gray-100" for="others">Others</label>

                </div>
                <div class="inline-block mt-2 ">
                    <label for="checkbox" class="block text-sm text-gray-100">Preferable Payment Method?</label>

                    <input type="checkbox" id="pay1" name="pay" value="Cash">
                    <label for="pay1" class=" text-sm text-gray-100"> Cash</label>

                    <input type="checkbox" id="pay2" name="pay" value="Online">
                    <label for="pay2" class=" text-sm text-gray-100"> Online</label>

                    <input type="checkbox" id="pay3" name="pay" value="Card">
                    <label for="pay3" class=" text-sm text-gray-100"> Card</label>
                </div>


                <div class="mt-4">
                    <input id="btnSubmit" type="submit" class="px-4 py-1 text-white font-light tracking-wider bg-green-600 rounded pe-auto" name="submit" value="Register">
                    <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded" name="home"><a href="home" class="text-white">Home</a></button>
                </div>
                <a class="inline-block right-0 align-baseline  text-sm text-300 hover:text-blue-800" href="customerlogin">
                    Already have an account ?
                </a>
            </form>

        </div>
    </div>

</body>

</html>