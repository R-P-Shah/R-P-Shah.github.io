<!DOCTYPE html>
<html>

<head>

    <meta lang="en" charset="utf-8" />

    <title>Rahul Shah's Website</title>

    <link rel="stylesheet" type="text/css" href="/assets/css/styles.css" />

    <!-- Load in arcade font -->
    <link href="https://fonts.googleapis.com/css?family=Press+Start+2P" rel="stylesheet">



</head>


<body>

    <!-- nav bar -->
    <nav>
        <ul id="links">
            <li><a href="mailto: me@rahulpshah.com">&nbsp;CONTACT</a></li>
            <li><a href="#">&nbsp;RÉSUMÉ</a></li>
            <li><a href="#">&nbsp;MY BLOG</a></li>
        </ul>
    </nav>


    <!-- character img -->
    <div id="sprite">
        <img src="assets/img/mysprite.png">
    </div>

    <!-- content -->
    <div id="table">
        <span id="menu_bar">
            <a id= "bioMenu" class="menu_item" onmouseover="menuHover(this, 'bio');" >&nbsp;BIO</a>
            <a id="statMenu" class="menu_item" onmouseover="menuHover(this, 'stat');" >&nbsp;STAT</a>
            <a id= "abilitiesMenu" class="menu_item"  onmouseover="menuHover(this, 'abilities');">&nbsp;ABL</a>
        </span>

        <div class="content_pane">
            <div class="content" id="bio" style="display: block;">
                <p><strong>Class:</strong> UX Wizard</p>
                <p><strong>Training:</strong> Rochester Institute of Technology</p>
                <p><strong>Major:</strong> Human-Centered Computing</p>
                <p><strong>Minor:</strong> Software Engineering</p>
                <p><strong>Immersion:</strong> Psychology</p>
                <p><strong>Concentrations:</strong> Accessibility, Instructional Technology</p>
                <p><strong>Language:</strong> English, American Sign Language</p>
                <p><strong>Nature:</strong> Determined</p>
                <p><strong>Description:</strong> From the faraway lands of rural Maryland, he has journeyed far and wide in a mission to become the best UX Wizard in all the land. He aims to create a digital world in which everyone can learn and can access. Though early in his journey, he has a lot of potential and has proven to already be quite the creative Design Sorcerer.</p>

            </div>

            <div class="content" id="stat" style="display: none;"></div>

            <div class="content" id="abilities" style="display: none;">
                <h2><strong>Abilities</strong></h2>
                <p><strong>Traits:</strong> determined, loyal, driven, passionate</p>
                <p><strong>Pack Hunting:</strong> Works well in dedicated teams</p>
                <p><strong>Resolve:</strong> Excellent at getting out of a tight spot.</p>
                <p><strong>Helping-Hand:</strong> Always willing to help others in need.</p>
                <p><strong>Reflection:</strong> Can absorb critiques and adapt accordingly.</p>
            </div>
        </div>

    </div>


    <script>
        function menuHover(menu, id) {
            var panes = document.getElementsByClassName("content");

            //set all other contents to none
            for (var i = 0; i < panes.length; i++) {
                panes[i].style.display = "none";
            }

            //now set the menu bar 
            var menus = document.getElementsByClassName("menu_item");
            for (var i = 0; i < menus.length; i++) {
                menus[i].style.color = "white";
                menus[i].innerHTML = menus[i].innerHTML.replace("&gt;", "&nbsp;");

            }

            //set the desired menu as active and show the content
            document.getElementById(id).style.display = "block";
            addCarrot(menu);
        }

        function addCarrot(menu) {
            menu.innerHTML = menu.innerHTML.replace("&nbsp;", "&gt;")
            menu.style.color = "yellow";
        }

    </script>
</body>


</html>
