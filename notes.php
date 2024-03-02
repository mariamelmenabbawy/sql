
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>My Notes</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
       <link rel="stylesheet"  href="style.css">
        <style>
            body{
                background: linear-gradient(to left, #440b5994, #000000);

            }
            
           .button{
    padding: 10px 20px; 
    background-color: #000000;
    color: #ffffff; 
    border-radius: 10px; 
    font-size: 16px; 
     cursor: pointer; 
} 

.button:hover {
    background-color: #510b5f; 
}

        </style>
    </head>
    <body>
        <div class="class"> 
            <button class="button"  >Add Your Note</button>
            <!-- <input type="text" placeholder="enter your note" style="display: none;" id="inputbox" > -->
            <div class="notescontainer">

            </div>

        </div> 
        <script src="main.js"></script>
        <a href="logout.php" id="out">Logout</a>
    </body>
</html>