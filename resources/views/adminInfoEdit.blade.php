<!DOCTYPE html>
<html>
<head>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/64683339a5.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css"></script>
             <title>Edit info| Admin</title>
</head>  
  <!-- STYLE SHEET -->
  <style>
   body{
    background-color:rgb(165 203 242 / 82%);
   }
       #entry{
           background-color: #75a7da;
           text-align: center;
           margin-top: 50px;
           width: 500px;
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

<body>



@foreach (session('user') as $posts)
   <form action="#" method="POST">
            <div class="row justify-content-center"> 
              <div id="entry">
                <h2>Update User info</h2><br>

                

                <!-- <div class="form-group">    
               <input  type="number" name="id" value={{$posts->id}}> 
              
                </div> -->

            <br>
        
            
                                <div class="form-group">    
                                <input  id="input-element" type="text" name="name" value={{$posts->aName}}> 
                                </div>

                               
                                <div class="form-group">
                                 <input id="input-element" type="text" name="email" value={{$posts->aEmail}}>
                                </div>

                             

                                

                                <div class="form-group">
                                 <input id="input-element" type="number" name="pass" value={{$posts->aPass}}>
                                </div>

                
                                @endforeach
 <!--Submit button -->     

                <div class="form-group">
                 <input type="submit" class="btn btn-success" name="update" value="Update">

                <div id="btnHome" class="btn btn-primary"> <a href ="adminInfoShow"   class="text-white">Cancel</a></div>
                </div>   
              </div>
            </div>
          </div>
    

      </form>
    
</body>
</html>