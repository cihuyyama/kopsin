

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
    <title>Customer show</title>
</head>
<style>
  body{
    background: url('./dist/images/back4.jpg')
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
            <main class=" flex-1 p-3 overflow-hidden">

                <div class="flex flex-col">
                    <!-- Stats Row Starts Here -->

                    <!-- /Stats Row Ends Here -->

                    <!-- Card Sextion Starts Here -->
                    <div class="flex flex-1 flex-col md:flex-row lg:flex-row mx-2">

                        <!-- card -->

                        <div >
                            <!-- <div class="px-6 py-2 border-b border-light-grey">
                                <div class="font-bold text-xl" style="text-align: center;">Food List</div>
                            </div> -->

                            <form  class="max-w-x-xl m-4 p-10  rounded shadow-xl" action="showitem" method="GET" style="background-color: #3984498c;">
                                <div class="table-responsive" style=" margin: auto;">
                                    <div class="px-6 py-2 border-b border-light-grey">
                                    <div class="font-bold text-xl" style="text-align: center;color:white">Cashier List</div>
                                   </div>
                                        <table class="table" border="1" style="font-size:small;">
                                        <thead class="bg-dark text-white text-normal">
                                        <tr style="text-align: center;background-color: #2a4e32;">
                                                        
                                                <th width="5%">ID</th>
                                                <th width="15%">Name</th>
                                                <th width="18%">Email</th>
                                                <th width="10%">Phone</th>
                                                <th width="10%">Address</th>
                                                <th width="15%">Sex</th>
                                                <th width="10%">Pay</th>
                                                <th width="20%">Action</th>
                                        </tr>
                                        @foreach ($collection as $item)

                                        <tr style="text-align: center;background-color: #6ab39bf0;">
                                        <td class="border px-4 py-2">{{$item->id}}</td>
                                                <td class="border px-4 py-2">{{$item->cName}}</td>
                                                <td class="border px-4 py-2">{{$item->cEmail}}</td>
                                                <td class="border px-4 py-2">{{$item->cPhone}}</td>
                                                <td class="border px-4 py-2">{{$item->cAddress}}</td>
                                                <td class="border px-4 py-2">{{$item->cSex}}</td>
                                                <td class="border px-4 py-2">{{$item->cPay}}</td>
                                                
                                                <td class="border px-4 py-2">
                                                        <!-- <a class="bg-teal-300 cursor-pointer rounded p-1 mx-1 text-white">
                                                                <i class="fas fa-eye"></i></a> -->
                                                        <a class="bg-teal-300 cursor-pointer rounded p-1 mx-1 text-white" href ="/itemupdate/{{$item->id }}">
                                                                <i class="fas fa-edit"></i></a> 
                                                        <a class="bg-teal-300 cursor-pointer rounded p-1 mx-1 text-red-500" href ="/delete/{{$item->id }}">
                                                                <i class="fas fa-trash"></i>
                                                        </a>
                                                </td>
                                                

                                                
                                        </tr>
                                        @endforeach
                                        </thead>
                                        </table>
                                        <span>{{$collection->links()}}</span>
                                </div>
                             </form>
                        </div>
                        <!-- /card -->
                        

                    </div>
                    <!-- /Cards Section Ends Here -->

                    <!-- Progress Bar -->
                    
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