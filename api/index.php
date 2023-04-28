<!DOCTYPE html>
<html lang="en">
 <head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="author" content="Arkaneel Roy" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Portfolio</title>
  <link rel="shortcut icon" href="favicon.webp" type="image/x-icon" />
  <link rel="stylesheet" href="./style.css" />
 </head>
 <body>
  <header class="header" id="header">
   <h1>$ ./Hello-World</h1>
   <ul class="nav">
    <li class="nav-item">
     <a href="#about">$About</a>
    </li>
    <li class="nav-item">
     <a href="#skills">$Skills</a>
    </li>
    <li class="nav-item">
     <a href="#contact">$Contact</a>
    </li>
   </ul>
  </header>
  <main class="main">
   <div class="about" id="about">
    <h2>~About</h2>
    <p class="dir">arkaneel@usr/data/about:~</p>
    <p> Hello Everyone! My name is Arkaneel Roy. I am a passionate 15 year programmer from India. I started coding when I was 12 . In this Journey I learned awesome stuffs and will continue to learn in future. My future dream is to get a job at google 🐣. </p>
   </div>
   <div class="skills" id="skills">
    <h2>~Skills</h2>
    <p class="dir">arkaneel@usr/data/skills:~</p>
    <p>I'm skilled in :</p>
    <li>
     <h3>$C:</h3>
     <pre class="C">[############ 50.0%             ]</pre>
    </li>
    <li>
     <h3>$HTML:</h3>
     <pre class="HTML">[####################### 100.0% ]</pre>
    </li>
    <li>
     <h3>$CSS:</h3>
     <pre class="CSS">[################## 90.0%       ]</pre>
    </li>
    <li>
     <h3>$JS:</h3>
     <pre class="JS">[############# 60.0%            ]</pre>
    </li>
    <li>
     <h3>$PHP:</h3>
     <pre class="PHP">[######### 40.0%                ]</pre>
    </li>
    <li>
     <h3>$LUA:</h3>
     <pre class="LUA">[################# 60.0%        ]</pre>
    </li>
    <li>
     <h3>$NODE.JS:</h3>
     <pre class="NJS">[############ 50.0%             ]</pre>
    </li>
   </div>
   <div class="projects">
    <h2>~Projects</h2>
    <p class="dir">arkaneel@usr/data/projects:~</p>
    <ul id="github-projects"></ul>
   </div>
   <div class="contacts" id="contact">
    <h2>~Contact</h2>
    <p class="dir">arkaneel@usr/data/contact:~</p>
    <form id="form" action="https://formsubmit.io/send/80b585ba-714e-4ba3-bd1c-65f7d9aeae78" method="POST">
     <input type="text" name="name" id="name" placeholder="@usr please enter your name:~" required />
     <input type="email" name="email" id="email" placeholder="@usr please enter your email:~" required />
     <textarea name="message" id="message" placeholder="@usr please enter your message:~" required></textarea>
     <input type="submit" name="submit" id="submit" onclick="giveAlert()" value="SEND" />
    </form>
   </div>
  </main>
  <footer class="footer">
   <div class="prompt">arkaneel@usr:~$</div>
   <div class="command">./thankyou.sh</div>
   <div class="output">
    <p>Running Thankyou.....</p>
    <p> Thankyou @usr for checking out my portfolio! Please check out my socials.. </p>
    <li>
     <a href="https://www.github.com/Arkaneel">@github</a>
    </li>
    <li>
     <a href="https://twitter.com/_Arkaneel_Roy_">@twitter</a>
    </li>
    <li>
     <a href="https://instagram.com/afero.centric_king_?igshid=ZDdkNTZiNTM=">@instagram</a>
    </li>
   </div>
  </footer>
  <script>
   const GITHUB_API_URL = "https://api.github.com/users/Arkaneel/repos";
   const PROJECTS_CONTAINER = document.getElementById("github-projects");
   fetch(GITHUB_API_URL).then((response) => response.json()).then((data) => {
    data.forEach((project) => {
     const projectName = project.name;
     const projectUrl = project.html_url;
     const listItem = document.createElement("li");
     const link = document.createElement("a");
     link.href = projectUrl;
     link.textContent = projectName;
     listItem.appendChild(link);
     PROJECTS_CONTAINER.appendChild(listItem);
    });
   }).catch((error) => console.error(error));

   function giveAlert() {
    alert("Form Had Beed Submitted Successfully!");
   }
  </script>
 </body>
</html>
