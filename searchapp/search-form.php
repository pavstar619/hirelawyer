<!DOCTYPE html>
<html lang="en">
<head>
<link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
<link href='https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css' rel='stylesheet' type='text/css'>

<meta charset="UTF-8">
<title>Search</title>
<style type="text/css">
    body{
        font-family: 'Lato', sans-serif;
        margin:0;
        padding:0;
        text-align: center;
        background:linear-gradient(rgba(0, 0, 0, 0.541), rgba(0, 0, 0, 0.541)),url(https://images.unsplash.com/photo-1473163928189-364b2c4e1135?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80) no-repeat center;
        background-size:cover;
        color:white;
        }
    form{
        display: inline-block;
        margin-top:15em;
    
    }
    h1{
        padding: 20px;
        font-size: 60px;
    } 

    .row {
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
    }
    .btn-primary {
    border: none;
    background-color: darkorange;
    color: white;
    font-size: 30px;
    border-radius: 50px;
    margin-top: 15px;
    }

    .btn-primary:hover {
    background-color: #9c5600;
    }
    /* Formatting search box */
    .search-box{
        width: 300px;
        position: relative;
        display: inline-block;
        font-size: 14px;
    }
    .search-box input[type="text"]{
        height: 45px;
        padding: 5px 10px;
        border: 1px solid darkorange;
        font-size: 25px;
    }
    .result{
        position: absolute;        
        z-index: 999;
        top: 100%;
        left: 0;
        font-size:25px;
    }
    .search-box input[type="text"], .result{
        width: 100%;
        box-sizing: border-box;
    }
    /* Formatting result items */
    .result p{
        margin: 0;
        padding: 7px 10px;
        border: 1px solid darkorange;
        border-top: none;
        cursor: pointer;
    }
    .result p:hover{
        background: darkorange;
    }
</style>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('.search-box input[type="text"]').on("keyup input", function(){
        /* Get input value on change */
        var inputVal = $(this).val();
        var resultDropdown = $(this).siblings(".result");
        if(inputVal.length){
            $.get("backend-search.php", {term: inputVal}).done(function(data){
                // Display the returned data in browser
                resultDropdown.html(data);
            });
        } else{
            resultDropdown.empty();
        }
    });
    
    // Set search input value on click of result item
    $(document).on("click", ".result p", function(){
        $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
        $(this).parent(".result").empty();
    });
});
</script>
</head>
<body>
    <div class="row">
            <form action="/hirelawyer/profile" method="post">
                <h1>Search for a lawyer</h1>
                <div class="search-box">
                <input type="text" class="form-control" autocomplete="off" placeholder="Search lawyers..." />
                <input class="btn btn-primary" type="submit" value="Search">
                <div class="result"></div>
            </form>
        </div>
    </div>
</body>
</html>


<!-- <div class="row">
            <div class="red-square">
                <div class="row">
                <h1>Search for a lawyer</h1>
                </div>
                <div class="row">
                    <img style="width: 150px; height:150px; display: block; margin-left: auto; margin-right: auto; margin-bottom:20px;" src='avatar.png'>
                </div>
                <div class="row">
                    <a class="btn btn-primary" href="/hirelawyer/chat/index.html">Contact Lawyer</a>
                </div>
            </div>
      
        </div> -->