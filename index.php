<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="main"> 
        <!-- navbar -->
        
        <nav class="navbar bg-dark navbar">
            <div class="navbar-brand">
                <img src="/assets/ErvinSebastian.jpg" class="rounded-circle" alt="Ervin Sebastian" width="50">
                    <i class="text-success">Ervin Sebastian</i>
            </div>
            <div class="navbar-expand">
                <ul class="navbar-nav mt-auto">
                    <li class="nav-item active">
                        <a href="" class="nav-link">About Me</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Projects
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">      
                            <a class="dropdown-item" href="covid_tracker.php">COVID Tracker(API)</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Sample2</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Sample3</a>
                          </div>
                    </li>
                </ul> 
            </div>     
        </nav>

        <!-- main -->
        <div class="container mt-2 border p-3">
           <div class="row">             
           </div>                   
        </div>
    </div>  
</body>
<script>

    
    let samplefn = () =>{
        display.innerHTML = search.value
        }
    let display = document.getElementById('display')
    let search = document.getElementById('search');
    search.addEventListener('keyup', samplefn);
</script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</html>
