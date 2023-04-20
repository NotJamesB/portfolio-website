<!DOCTYPE html>
<html lang="en">
<head>
    <!-- <meta charset="UTF-8"> -->
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
    <link rel="stylesheet" href="app.css">
    <link rel="stylesheet" href="app.js">
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Oswald:wght@300&display=swap');
    </style>
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Document</title>
</head>
<body>
    <div class="background-image"></div>
    <div class="container mx-auto">
        <div class="Header flex justify-between items-center">
            <div class="HeaderName text-white bold">
                <h1 class="name text-white font-bold text-4xl mt-5 ">James Bucsko</h1>
            </div>
            <div class="HeaderButtons">
                <button class="contact mt-5" style="--clr:#b900ff"><span>Home</span><i></i></button>
                <button class="contact mt-5" style="--clr:#d900ff"><span>About</span><i></i></button>
                <button class="contact mt-5" style="--clr:#b600bf"><span>Projects</span><i></i></button>
                <button class="contact mt-5" style="--clr:#FF44CC"><span>Contact Me</span><i></i></button>
            </div>
        </div>
        <div class="infopanel mt-20 flex justify-around"> 
            <div class="leftinfocolumn">
                <h1 class="text-white text-6xl font-bold">Full Stack<br>Web Developer</h1>
                <p class="text-white text-2xl mt-5">Welcome to my portfolio page. Here you will find <br> 
                information about me, Links to my projects and github,<br>
                details about my experience and ways to contact me. </p>
            </div>
            <div class="rightinfocolumn flex">
                <img class="profilepic" src="https://avatars.githubusercontent.com/u/97855508?v=4">
            </div>
        </div>
    </div>
</body>
</html>