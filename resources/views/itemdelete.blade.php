<!DOCTYPE html>
<html>
    <head>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
            <script src="https://kit.fontawesome.com/64683339a5.js" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css"></script>
                <title>Delete Item</title>
    </head>  
  
    <!-- STYLE SHEET -->
    <style>
        body{
            background-color: #f9c757;
        }
        #entry{
            background-color: #f1e9c6;
            margin-top: 50px;
            margin-bottom: 50px;
            border-radius: 10px;
            padding: 10px 100px;
        }

        #input-element{
                background-color: rgb(245 247 247);
                /* color: #f9f9f9; */
                border-radius: 5px;
                border-color: #1ca06f;
        }
        .leveltext{
            color: white;
            
        }
        #text{
            color:white;   
        }
        #btnSubmit{
            background-color: #58c74a;
        }
        #btnHome{
            background-color: #efb921;
        }
    </style> 



   <!-- BODY START -->
  <body>

    <form action="/itemdelete/{{$posts->id}}" method="Get">

        <div class="row justify-content-center"> 
            <div id="entry">

                <div class="alert alert-danger fade show">
                        <span class="close" data-dismiss="alert">×</span>
                        <strong style="text-align:center;background: #f9cccc;">Do you want to delete this Item?</strong>
                        <a href="#" class="alert-link"></a>
                </div>
              


                <h4 class="display-4 text-center" style="font-weight: 500;font-size: 25px;line-height: 2.2;">Delete Food info</h4><br>

                @csrf


                
            
                
                    <div style=" text-align: center;
                                background: #f5d692;
                                padding: 20px 30px;">   

                        <img src="{{$posts->pic}}" class="img-thumbnail" width="150" height="100" data-toggle="modal" data-target="#exampleModal">
                        <br>
                        <b  style="font-style: oblique;color:rebeccapurple">{{$posts->fName}}</b>
                        <b style="font-style: oblique;color: #ff8100;"> {{$posts->fInfo}}</b>
                        
                        <!-- <b style="color: #428a15"> {{$posts->fType}}</b> -->
                        <b style="font-style: oblique;color: #428a15"> Price:{{$posts->fPrice}}</b>
                    </div>

                 <br>
        
            
                            

     <!--Submit button -->     

                <div class="form-group" style="text-align: center;">

                 <input type="submit" class="btn btn-danger" name="delete" value="Delete">
                 <div id="btnHome" class="btn btn-primary"> <a href ="showitem"   class="text-white">Cancel</a></div>

                </div>   
            </div>
        </div>
          
    

      </form>
    
</body>
</html>
