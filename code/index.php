<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  </head>
  <style>
    *{
      margin: 0;
      padding: 0;
      box-sizing: border;
      font-family: sans-serif;
    }
    img{
      width: 100px;
      height: 100px;
     margin-left: 40%;
     display: block;
     border: 1px solid;
     background-color: gray;
     
    }
    span{
      color: red;
    }

  </style>
  <body>
  
    <div class="container-fluid mt-3">
      <h3 class="bg-primary text-light" >Student Registration</h3>    
     <form action="" method="post">
     <div class="persons border">
        <div class="row">
        <div class="col-lg-6 border border-primary mx-auto ">
        <h3> <i class="bi bi-person-rolodex"></i> i Person information </h3>
          <div class="row">
          <div class="form-group col pt-3">
          <label for="email">First Name <span>* </span></label>
          <input type="text" class="form-control" name="fname" placeholder="Type here name" required="required">
        </div>

        <div class="form-group col pt-3">
          <label for="email">Last Name <span>* </span></label>
          <input type="text" class="form-control" name="lname" placeholder="Enter Last required ">
        </div>
          </div>
          <div class="row">
          <div class="form-group col pt-3">
          <label for="email">Dath of Birth <span>* </span></label>
          <input type="date" class="form-control" name="birth" placeholder="date">
        </div>

        <div class="form-group col pt-3">
          <label for="text">Gender:</label>
          <select name="" class="form-control" name="gender">
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Other">Other</option>
          </select>
        </div>
          </div>
          <div class="form-group pt-3">
          <label for="email">Email Address: <span>* </span>  </label>
          <input type="email" class="form-control" name="email" placeholder="Enter email" required >
        </div>
        <div class="row">
          <div class="form-group col pt-3">
          <label for="email">Mobile Number <span> * </span> </label>
          <input type="number" class="form-control"  name="mobile" placeholder="mobile" required="required">
        </div>

        <div class="form-group col pt-3">
          <label for="email"> Category </label>
          <select name="" class="form-control" name="ctg">
            <option value="Male">---Select Category---</option>
            <option value="Female">O.B.C</option>
            <option value="Other">S.T</option>
            <option value="Other">S.C</option>

          </select>

        </div>
          </div>
        <div class="form-group pt-3 mb-3">
          <label for="email">General Address:</label>
          <textarea name="address" rows="2" class="form-control">General Address  </textarea>
        </div>
        <!-- image -->
        <div class="image mt-3">
        <img class="rounded-circle" id="image" >
        <input type="file" style="margin-left: 30%; margin-top: 10px;" class="mb-3 img-thumbnail" accept=".png, .jpg, .jpeg, .jpe" id="file" onchange="loadFile(event)" ><br>
        <span class="text-danger" style="margin-left: 30%;" >accept .png, .jpg, .jpeg, .jpe</span>
      </div>

        </div>
        <script type="text/javascript">
          var loadFile = function(event){
            var reader = new FileReader();
            reader.onload =function(){
              var output=document.getElementById('image');
              output.src=reader.result;
            };
            $('#image').show();
            reader.readAsDataURL(event.target.files[0]);
          

          };




        </script>


        <!-- 2nd column -->
        <div class="col-lg-5 border border-primary mx-auto" >
        <h3> <i class="bi bi-buildings-fill"></i> School Details </h3>
          <div class="row">
          <div class="form-group col pt-3">
          <label for="email">Date of Join (mm/dd/yy) </label>
          <input type="date" class="form-control"  name="join"  placeholder="Type here name" required="required">
        </div>

        <div class="form-group col pt-3">
          <label for="email">Calss <span>*</span></label>
          <input type="text" class="form-control" placeholder="Enter Last" id="email" required>
        </div>
          </div>
          <div class="row">
          <div class="form-group col pt-3">
          <label for="email">Roll Number</label>
          <input type="number" class="form-control" placeholder="Number">
        </div>

        <div class="form-group col pt-3">
          <label for="text">Years:</label>     
          <input type="date" class="form-control" name="session Year" >
        </div>
          </div>
          <h3><i class="bi bi-people-fill"></i> Parent Details</h3>
          <div class="row">
          <div class="form-group col pt-3">
          <label for="email">Father's Name <span>* </span> </label>
          <input type="text" class="form-control" placeholder="father" required >
        </div>

        <div class="form-group col pt-3">
          <label for="text">Mother's Name:</label>     
          <input type="text" class="form-control" placeholder="mother" name="mother" >
        </div>
      
        
          </div>
  
        </div>
        </div>
        <div class="form-control text-center ">
        <button type="submit" class="btn btn-success mt-3 " >Save</button>
        <button type="reset" class="btn btn-primary mt-3 " >Reset</button>


        </div>

      
      </div>
     </form>

    </div>



  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>