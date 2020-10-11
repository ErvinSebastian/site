<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio-Covid tracker</title> 
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

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
                            <a class="dropdown-item" href="covid_tracker.php">Covid Tracker(API)</a>
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
        <div class="container mt-2 ">
           <div class="row">    
               <div class="col">
                   <p class="display-4">COVID-19 UPDATES</p>
                 
               </div>                        
           </div>   
           <div class="row"> 
               <span class="font-weight-light" id="cdate">As of.</span> 
          </div>    
           <div class="container mt-2 border">  
               <div class="container mt-2">
                <table id="myTable" class="table table-striped"> 
                    <thead>
                        <tr>
                            <th>Country</th>
                            <th>Active Cases</th>
                            <th>Total Cases</th>
                            <th>Recovered</th>
                            <th>Deaths</th>
                        </tr>
                    </thead>
                         <tbody id="tbody">
                    </tbody>
                </table>
           </div>            
        </div>
    </div>  
</body>

<script>
    let cdate = document.getElementById('cdate');
   const current = (new Date()).toISOString().slice(0, 19).replace(/-/g, "/").replace("T", " ");
   cdate.innerHTML = `As of. ${current}`
    let sample = document.getElementById('tbody')
    let fetchfn  = async() => {
    let response = await fetch("https://covid-193.p.rapidapi.com/statistics", {
	                                "method": "GET",
	                                "headers": {
		                            "x-rapidapi-host": "covid-193.p.rapidapi.com",
		                            "x-rapidapi-key": "bdcc119acfmsh45b846625fc4b2cp1e209fjsn148091680744"
                                                }                                      
                                })
                        let data = await response.json()    
                        let html = '';
                        console.log(data.response)
                        data.response.forEach(element => {  
                       
                        html += `<tr><td>${element.country}</td>
                                 <td>${new Intl.NumberFormat().format(element.cases.active)}</td>
                                 <td>${new Intl.NumberFormat().format(element.cases.total)}</td>
                                 <td>${new Intl.NumberFormat().format(element.cases.recovered)}</td>
                                 <td>${new Intl.NumberFormat().format(element.deaths.total)}</td></tr>`                               
                           });   
                           sample.innerHTML = html
                           $(document).ready( function () {
                             $('#myTable').DataTable();
                            });  
                }        
    fetchfn()     
        </script>  
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
            <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>

</html>
