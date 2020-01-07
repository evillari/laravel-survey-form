<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href=" {{ mix('css/app.css')}}">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
            
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .full-width {
                width: 100vw;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <section class="">
            <div class="container content" > 
                <div class="" style="margin-top:200px;padding-bottom:100px"> 
                  <div class="col-12" > 
                    <h1> Please fill in the information below for the survey.</h1>
                  </div>
                <div>
                <div class="" >
                  <form action="/sresults" method="get" style="margin-top:100px">
                    <div class="row form-group ">
                     
                        <label for="Name" class="col-sm-4">Name</label>
                     
                      
                        <input type="text" class="form-control col-sm-4" name="" id="" aria-describedby="helpId" placeholder="">
                      
                    </div>
                    <div class="row form-group">
                          <label for="email" class="col-sm-4">Email</label>
                          <input type="email" class="form-control col-sm-4" name="" id="" aria-describedby="emailHelpId" placeholder="">
                        </div>
                    
                    <div class="row form-group mb-5">
               
                        <label for="age" class="col-sm-4">Age</label>       
                      
                        <select class="form-control col-sm-4" name="age-range" id="age">
                          <option>15-25 years old</option>
                          <option>25-35 years old</option>
                          <option>35-45 years old</option>
                          <option>45-55 years old</option>
                          <option>55-65 years old</option>
                        </select>
                    </div>
                    <h5 class="mb-4">Please select all that applies for your current role/capability</h5>
                    <div class="row mb-3"> 
                      <div class="col-sm-2 offset-1 form-check">
                        <input class="form-check-input" type="checkbox" id="skill1">
                        <label class="form-check-label" for="skill1">Programming</label>
                      </div>
                      <div class=" col-sm-2 form-check">
                        <input class="form-check-input" type="checkbox" id="skill2">
                       <label class="form-check-label" for="skill2">Data Engineer</label>
                     </div>
                     <div class=" col-sm-2 form-check">
                        <input class="form-check-input" type="checkbox" id="skill3">
                       <label class="form-check-label" for="skill3">Data Scientist</label>
                     </div>
                     <div class=" col-sm-2 form-check">
                        <input class="form-check-input" type="checkbox" id="skill4">
                       <label class="form-check-label" for="skill4">Operations Manager</label>
                     </div>
                     <div class=" col-sm-2 form-check">
                        <input class="form-check-input" type="checkbox" id="skill5">
                       <label class="form-check-label" for="skill5">Supervisor</label>
                     </div>
                    </div>

                    <div class="row mb-3"> 
                      <div class="col-sm-2 offset-1 form-check">
                        <input class="form-check-input" type="checkbox" id="skill6">
                        <label class="form-check-label" for="skill6">Data Analyst</label>
                      </div>
                      <div class=" col-sm-2 form-check">
                        <input class="form-check-input" type="checkbox" id="skill7">
                       <label class="form-check-label" for="skill7">Business Owner</label>
                     </div>
                     <div class=" col-sm-2 form-check">
                        <input class="form-check-input" type="checkbox" id="skill8">
                       <label class="form-check-label" for="skill8">Project Manager</label>
                     </div>
                     <div class=" col-sm-2 form-check">
                        <input class="form-check-input" type="checkbox" id="skill9">
                       <label class="form-check-label" for="skill9">Customer Service</label>
                     </div>
                     <div class=" col-sm-2 form-check">
                        <input class="form-check-input" type="checkbox" id="skill10">
                       <label class="form-check-label" for="skill10">Operator</label>
                     </div>
                    </div>

                      <div class="row">
                        <button type="submit" class="col-sm-4 offset-4 btn btn-primary" style="margin-top:50px">Submit</button>
                      </div>
                    </form>
                </div>
            </div>
        </section>



        <script src="{{ mix('js/app.js')}}"> </script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>   
    </body>
</html>
