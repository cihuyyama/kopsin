

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
    <title>Place Order </title>
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
            <div class="row">

                <div class="col-sm-5" style="padding: 10px 50px;">
                    <div class="container" style="font-size: 13px;">   
                        <!-- <div class="list-group-item list-group-tem-action active">Menu</div> -->
                            <div class="panel-body bg-dark" style="color: rebeccapurple">
                                <form id="tbl-project">
                                    <table class="table table-bordered" style="color: white">
                                        <div role="alert" id="errorMsg" class="mt-5" >
                                            <!-- Error msg  -->
                                        </div>

                                        <tr style="text-align: center;background-color: #45bb85;">
                        
                                            
                                            <th width="10%">Order Id</th>
                                            <th width="20%">Name</th>
                                            <th width="10%">Userid</th>
                                            <th width="10%">Address</th>
                                            <th width="20%">Item</th>
                                           
                                            
                                            
                                        </tr>
                                        @foreach ($collection as $item)

                                        <tr style="text-align: center;background-color: #236547d4;">
                            
                                            <td id="id">{{$item->id}}</td>
                                            <td id="name">{{$item->name}}</td>
                                            <td id="userId">{{$item->user_id}}</td>
                                            <td id="address">{{$item->address}}</td>
                                            <td  id="cart">{{$item->cart}}</td>
                                                                         <!-- <td class="border px-4 py-2">
                                                <i class="fas fa-check text-green-500 mx-2"></i></td> -->
                                       
                                        </tr>
                                        @endforeach


                                    </table>
                                    <span>{{$collection->links()}}</span>


                                </form>
                            </div>

                    </div>


                </div>

<script src="component/jquery/jquery.js"></script>

<script src="component/jquery/jquery.min.js"></script>


<script>
    var tot = 0;
    var total = 0;
    //var name = null; 

    function add()
    {
        
 
       
          
            var price = $('#price').val();

        $(document).ready(function(){
           
            $("input[name='qty']").val(function(){  
                    // $("input[name='qty']").val(function(){
                    
                
        
            //  if(!$("input[name='qty']").is(':empty')){   
                  
               // alert("not empty");
                  
                  let qty = $(this).val();
                  //name = $('#name').val(name);
        
                    tot = qty * price;
        
                    var table1 =
        
                        "<tr>"+
                        "<td><button type='button' name='record' class='btn btn-warning' onclick='deleterow(this)'>Delete</td> "  +
                        "<td>" + name  +  "</td>"  +
                        "<td>" + price  +  "</td>"  +
                        "<td>" + qty  +  "</td>"  +
                        "<td>" + tot  +  "</td>"  +
                        "</tr>";
        
                        total += Number(tot);
                        $('#total').val(total);
        
                        $("#tbl-item tbody").append(table1);
             //}
            });
           
      });
 
    
    }


      function deleterow(e)
    {
        total_cost = parseInt($(e).parent().parent().find('td:last').text(),10);
        total -= total_cost;
        $('#total').val(total);
        $(e).parent().parent().remove();
    }
 
 
 
    $('#reset').click(function()
        {
            location.reload();
        }
    );
 
</script>


    <!-- <style>
        
        .bg-dark {
            background-color: #b89fea!important;
            
            }


    </style> -->



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