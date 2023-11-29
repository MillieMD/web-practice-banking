<!DOCTYPE html>
<html>
<head>


</head>

    <link rel = "stylesheet" href = "css/style.css">

</head>

<body class = "theme-light" id = "body">

<div class = "header"> 

    <div class = "row" style = "justify-content: space-evenly;"> 

       <h1> Shilling Bank </h1>
       <button onclick = "toggleMode();" class = "secondary-button" id = "darkModeToggle"> Dark Mode </button>

    </div>

    <div class = "row"> 

        <a href = "#"><button class = "nav-button"> Home </button></a>
        <a href = "#"><button class = "nav-button"> Current Accounts </button></a>
        <a href = "#"><button class = "nav-button"> Savings Accounts </button></a>
        <a href = "#"><button class = "nav-button"> Business Accounts </button></a>

    </div>

</div>

<div class = "main-content"> 

lol

</div>

<div class = "footer">

    <div class = "row"> <!-- Row is a centered, flexbox row -->
    </div>

    <div class = "col"> <!-- Col is a centered flexbox column -->
    </div>

</div>
</body>

<script> 

    let darkMode = false;

    function toggleMode(){

        darkMode = !darkMode;
        let body = document.getElementById("body");
        let darkModeToggle = document.getElementById("darkModeToggle");
        

        if(darkMode){

            body.classList.add("theme-dark");
            body.classList.remove("theme-light");

            darkModeToggle.innerHTML = "Light Mode";

        }else{
            body.classList.add("theme-light");
            body.classList.remove("theme-dark");

            darkModeToggle.innerHTML = "Dark Mode";
        }



    }

</script>

</html>