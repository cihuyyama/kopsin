

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
    <title>Dashboard | Admin</title>
</head>

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
                    <!-- Stats Row Starts Here -->
                    <div class="flex flex-1 flex-col md:flex-row lg:flex-row mx-2">
                        <div class="shadow-lg bg-red-vibrant border-l-8 hover:bg-red-vibrant-dark border-red-vibrant-dark mb-2 p-2 md:w-1/4 mx-2">
                            <div class="p-4 flex flex-col">
                                <a href="#" class="no-underline text-white text-2xl">
                                    30
                                </a>
                                <a href="#" class="no-underline text-white text-lg">
                                    Total Item
                                </a>
                            </div>
                        </div>

                        <div class="shadow bg-info border-l-8 hover:bg-info-dark border-info-dark mb-2 p-2 md:w-1/4 mx-2">
                            <div class="p-4 flex flex-col">
                                <a href="#" class="no-underline text-white text-2xl">
                                    10
                                </a>
                                <a href="#" class="no-underline text-white text-lg">
                                    Coffee Type
                                </a>
                            </div>
                        </div>

                        <div class="shadow bg-warning border-l-8 hover:bg-warning-dark border-warning-dark mb-2 p-2 md:w-1/4 mx-2">
                            <div class="p-4 flex flex-col">
                                <a href="#" class="no-underline text-white text-2xl">
                                    10
                                </a>
                                <a href="#" class="no-underline text-white text-lg">
                                Drinks Type
                                </a>
                            </div>
                        </div>

                        <div class="shadow bg-success border-l-8 hover:bg-success-dark border-success-dark mb-2 p-2 md:w-1/4 mx-2">
                            <div class="p-4 flex flex-col">
                                <a href="#" class="no-underline text-white text-2xl">
                                    08
                                </a>
                                <a href="#" class="no-underline text-white text-lg">
                                    Snacks Type
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- /Stats Row Ends Here -->

                    <!-- Card Sextion Starts Here -->
                    <div class="flex flex-1 flex-col md:flex-row lg:flex-row mx-2">

                        <!-- table -->

                        <div class="rounded overflow-hidden shadow bg-white mx-2 w-full">
                            <div class="px-6 py-2 border-b border-light-grey">
                                <div class="font-bold text-xl">Populer Items</div>
                            </div>
                            <div class="table-responsive" style="width: 90%; margin: auto;">
                                        <table class="table table-dark " border="1" style="font-size:small;">
                                        <thead class="bg-dark text-white text-normal">
                                        <tr style="text-align: center;">
                                                
                                                
                                                <th width="15%">Name</th>
                                                <th width="18%">Details</th>
                                                <th width="10%">Type</th>
                                                <th width="10%">Price</th>
                                                <th width="15%">Image</th>
                                        </tr>
                                        @foreach ($collection2 as $item)

                                        <tr style="text-align: center;background-color: #62acf7">
                                               
                                                <td class="border px-4 py-2">{{$item->fName}}</td>
                                                <td class="border px-4 py-2">{{$item->fInfo}}</td>
                                                <td class="border px-4 py-2">{{$item->fType}}</td>
                                                <td class="border px-4 py-2">Rp.{{$item->fPrice}}</td>

                                                <td height="100px"><img src="{{$item->pic}}" class="img-thumbnail" width="100" style="margin: auto" /></td>

                                                
                                        </tr>
                                        @endforeach
                                        </thead>
                                        </table>
                                        <!-- <span>{{$collection2->links()}}</span> -->
                                </div>
                        </div>
                        <!-- /table -->

                    </div>
                    <!-- /Cards Section Ends Here -->

                    <!-- Progress Bar -->
                    <div class="flex flex-1 flex-col md:flex-row lg:flex-row mx-2 mt-2">
                        <div class="rounded overflow-hidden shadow bg-white mx-2 w-full pt-2">
                            <div class="px-6 py-2 border-b border-light-grey">
                                <div class="font-bold text-xl">Most Populer Items</div>
                            </div>
                            <div class="">
                                <div class="w-full">

                                   

                                    <div class="shadow w-full bg-grey-light">
                                        <div class="bg-blue-500 text-xs leading-none py-1 text-center text-white"
                                            style="width: 65%">Latte`
                                        </div>
                                    </div>


                                    <div class="shadow w-full bg-grey-light mt-2">
                                        <div class="bg-teal-500 text-xs leading-none py-1 text-center text-white"
                                             style="width: 55%">Cappuccino
                                        </div>
                                    </div>


                                    <div class="shadow w-full bg-grey-light mt-2">
                                        <div class="bg-orange-500 text-xs leading-none py-1 text-center text-white"
                                             style="width: 45%">Espresso 
                                        </div>
                                    </div>


                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    
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