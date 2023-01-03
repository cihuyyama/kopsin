<!DOCTYPE html>
<html lang="en">

<head>

</head>

<body>
    <header class="bg-nav" style="background-color: #3c7d4a">
            <div class="flex justify-between">
                <div class="p-1 mx-3 inline-flex items-center">
                <i style="color: #9e5101" class="fas fa-coffee"></i>
                    <h1 class="text-white p-2">KOPI SINI</h1>
                </div>

                <div class="p-1 flex flex-row items-center">
                    <!-- <a href="#" class="text-white p-2 mr-2 no-underline hidden md:block lg:block">Github</a> -->
                   

                    @foreach (session('user') as $item)
                    <img onclick="profileToggle()" class="inline-block h-8 w-8 rounded-full" src="{{asset('/dist/images/user1.png')}}" alt="">
                   
                    <span class="navbar-text" style="font-weight: 500;margin: 0px 10px;color: white;">ADMIN: {{$item->aName}}</span>
                    @endforeach
                    <button class="px-2  text-white font-size-10  bg-orange-500 rounded"  name="logout" style="padding: 2px 0.5rem;"><a href ="logout"   class="text-white">logout</a></button>
                            
                    
        
                </div>
            </div>
        </header>
</body>
</html>