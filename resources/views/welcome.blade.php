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
<body class="bg-gradient-to-r from-zinc-950 to-zinc-900 ">
    <!-- <div class="background-image"></div> -->
    <div class="container mx-auto">
        <div class="Header flex justify-between items-center">
            <div class="HeaderName text-white bold">
                <h1 class="name text-white font-bold text-4xl mt-5 ">James Bucsko</h1>
            </div>
            <div class="HeaderButtons">
                <button class="contact mt-5" style="--clr:#b900ff"><span>Home</span><i></i></button>
                <button class="contact mt-5" onClick="document.getElementById('about').scrollIntoView();" style="--clr:#d900ff"><span>About</span><i></i></button>
                <button class="contact mt-5" style="--clr:#b600bf"><span>Projects</span><i></i></button>
                <button class="contact mt-5" style="--clr:#FF44CC"><span>Contact Me</span><i></i></button>
            </div>
        </div>
        <div class="infopanel mt-20 flex justify-around"> 
            <div class="leftinfocolumn pt-20">
                <h1 class="text-white text-6xl font-bold">Full Stack<br>Software Developer</h1>
                <p class="text-white text-2xl mt-5">Welcome to my portfolio page. Here you will find <br> 
                information about me, Links to my projects and github,<br>
                details about my experience, and ways to contact me. </p>
            </div>
            <div class="rightinfocolumn flex">
                <img class="profilepic" src="https://avatars.githubusercontent.com/u/97855508?v=4">
            </div>
        </div>
    </div>
    <div id="about" class="aboutMe mx-auto">
            <h1 class="text-6xl text-white"> About Me </h1>
        <div class="aboutText">
            <p class="aboutinfo text-white text-3xl"> My name is James Bucsko. I am a newly graduated Full-Stack Software Developer with <br> an Associate Level Degree from Coding Dojo.
        I am dedicated to learning new things and <br>adapting to the ever growing world of programming,
        I have created multiple applications<br> with many different languages and programs. Take a scroll and check them out!  </p>
    </div>
    <div class="downarrow">
        <img class="downpic" src="https://cdn2.iconfinder.com/data/icons/arrows-set-8/100/double_down-512.png" alt="downArrowImg">
    </div>
</div>
    <div class="projects bg-white">
            <div class="projtitle">
                <h1 class="text-6xl">Projects</h1>
            </div>
            <div class="projectbuttons coulmns-4">
            </div>
    </div>
</body>
</html>