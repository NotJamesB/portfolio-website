<!DOCTYPE html>
<html lang="en">

<head>
    <!-- <meta charset="UTF-8"> -->
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
    <link rel="stylesheet" href="app.css">
    <link rel="stylesheet" href="app.js">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Oswald:wght@300&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Share+Tech+Mono&display=swap');
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
                <button id="aboutBtn" class="contact mt-5" style="--clr:#d900ff"><span>About</span><i></i></button>
                <button id="projectsBtn" class="contact mt-5" style="--clr:#b600bf"><span>Projects</span><i></i></button>
                <button id="skillsBtn" class="contact mt-5" style="--clr:#b900ff"><span>Skills</span><i></i></button>
                <button id="contactBtn" class="contact mt-5" style="--clr:#FF44CC"><span>Contact Me</span><i></i></button>
            </div>
        </div>
        <div class="infopanel mt-20 flex justify-around">
            <div class="leftinfocolumn pt-20">
                <h1 class="intro text-white text-6xl font-bold">Full Stack<br>Software Developer</h1>
                <p class="intro text-white text-2xl mt-5">Welcome to my portfolio page. Here you will find <br>
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
            <p class="aboutinfo text-white text-3xl"> My name is James Bucsko. I am a newly graduated Full-Stack Software Developer with an Associate Level Degree from Coding Dojo.
                I am dedicated to learning new things and adapting to the ever growing world of programming,
                I have created multiple applications with many different languages and programs. Take a scroll and check them out! </p>
        </div>
    </div>
    <div class="projects">
        <div class="projtitle">
            <h1 class="text-6xl text-white mb-10">Projects</h1>
        </div>
        <div class="projectbuttons">
            <div class="testparent">
                <a class="testlink" href="https://github.com/Coding-Dojo-Group/GameDev-Project-Java">
                    <img class="staticimg" src="https://www.brcline.com/wp-content/uploads/2016/01/bootstrap-logo-300x240.png"></a>
                <div class="testchild">
                    <img class="projectimg1" id="projimghover" src="https://cdn-useast1.kapwing.com/final_64456b9b3498610017c94411_477596.gif">
                </div>
            </div>
            <div class="testparent">
                <a class="testlink" href="https://github.com/Coding-Dojo-Group/GameDev-Project-Java">
                    <img class="staticimg" src="https://variety.com/wp-content/uploads/2017/05/unity-game-maker.jpg?w=681&h=383&crop=1"></a>
                <div class="testchild">
                    <img class="projectimg1" id="projimghover" src="https://cdn-useast1.kapwing.com/final_64456dc863fd0f001738e3b6_587122.gif">
                </div>
            </div>
        </div>
        <div class="projectbuttons">
            <div class="testparent">
                <a class="testlink" href="https://github.com/Coding-Dojo-Group/GameDev-Project-Java">
                    <img class="staticimg" src="https://www.coveros.com/wp-content/uploads/2014/03/java-logo.jpg"></a>
                <div class="testchild">
                    <img class="projectimg1" id="projimghover" src="https://cdn-useast1.kapwing.com/final_644573d93c96af00178afc07_42324.gif">
                </div>
            </div>
            <div class="testparent">
                <a class="testlink" href="https://github.com/Coding-Dojo-Group/GameDev-Project-Java">
                    <img class="staticimg" src="https://allvectorlogo.com/img/2019/07/laravel-logo-vector.png"></a>
                <div class="testchild">
                    <img class="projectimg1" id="projimghover" src="https://cdn-useast1.kapwing.com/final_644582af87a4c301f1d3b686_489996.gif">
                </div>
            </div>
        </div>
    </div>
    <div class="skills">
        <div class="skillsinfo">
            <h1 class="text-6xl text-white mb-10">Skills</h1>
            <div class="logos">
                <div class="flex justify-around">
                    <img class="logoicons" src="https://brandeps.com/icon-download/L/Laravel-icon-vector-02.svg">
                    <img class="logoicons" src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/27/PHP-logo.svg/711px-PHP-logo.svg.png?20180502235434">
                    <img class="logoicons" src="https://freesvg.org/img/1643312660java.png">
                </div>
                <div class="flex mt-10 justify-around">
                    <img class="logoicons" src="https://brandeps.com/logo-download/H/HTML-5-logo-vector-01.svg">
                    <img class="logoicons" src="https://brandeps.com/logo-download/C/CSS-3-logo-vector-01.svg">
                    <img class="logoicons" src="https://brandeps.com/logo-download/M/MySQL-logo-vector-01.svg">
                </div>
                <div class="flex mt-10 justify-around">
                    <img class="logoicons" src="https://brandeps.com/icon-download/C/C-sharp-icon-vector-01.svg">
                    <img class="logoicons" src="https://brandeps.com/icon-download/J/Javascript-icon-vector-03.svg">
                    <img class="logoicons" src="https://brandeps.com/logo-download/B/Bootstrap-logo-vector-01.svg">
                </div>
            </div>
        </div>
    </div>
    <div class="links">
        <div class="flex"></div>
        <a class="linkbtns" href="https://github.com/NotJamesB"><img src="https://brandeps.com/icon-download/G/Github-badge-icon-vector-01.svg"></a>
        <a class="linkbtns" href="mailto: notjamesbucsko@gmail.com"><img src="https://brandeps.com/logo-download/G/Gmail-logo-vector-01.svg"></a>
        <a class="linkbtns" href="https://www.linkedin.com/in/james-bucsko/"><img src="https://brandeps.com/icon-download/L/Linkedin-icon-vector-13.svg"></a>
        <a class="linkbtns" href="https://docs.google.com/document/d/1oqUKO9oCXyzgJ1k-3Q7XZSqUcYT8I8wUxCyB3r_a74Y/edit?usp=sharing"><img src="https://brandeps.com/logo-download/G/Google-docs-logo-vector-02.svg"></a>
    </div>
</body>

</html>