<!DOCTYPE html>
<html>

<head>
    <title>W3.CSS Template</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="voyages.css">
</head>

<body>
    <!-- Sidebar (hidden by default) -->
    <nav class="w3-sidebar w3-bar-block w3-card w3-top w3-xlarge w3-animate-left close" style="z-index:2;width:40%;min-width:300px" id="mySidebar">
        <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button">Close Menu</a>
        <a href="index.php?year=2023" onclick="w3_close()" class="w3-bar-item w3-button">2023</a>
        <a href="index.php?year=2022" onclick="w3_close()" class="w3-bar-item w3-button">2022</a>
        <a href="index.php?year=2021" onclick="w3_close()" class="w3-bar-item w3-button">2021</a>
        <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button">About</a>
    </nav>

    <!-- Top menu -->
    <div class="w3-top">
        <div class="w3-white w3-xlarge" style="max-width:1200px;margin:auto">
            <div class="w3-button w3-padding-16 w3-left" onclick="w3_open()">☰</div>
            <div class="w3-right w3-padding-16">Mail</div>
            <div class="w3-center w3-padding-16">My Food</div>
        </div>
    </div>

    <!-- !PAGE CONTENT! -->
    <div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:100px">
        <?php
        $monTableau = array(
            "clé1" => "valeur1",
            "clé2" => "valeur2",
            "clé3" => "valeur3",
            "clé4" => "valeur4",
            "clé5" => "valeur5",
            "clé6" => "valeur6",
            "clé7" => "valeur7",
            "clé8" => "valeur8",
            "clé9" => "valeur9",
            "clé10" => "valeur10"
        );
        require_once 'connection.php';

        $sql = 'SELECT * FROM voyage WHERE YEAR(occured_on) = 2023';
        $statement = $pdo->query($sql);
        $results = $statement->fetchAll();

        foreach ($results as $voyage) {
            foreach ($voyage as $column => $value) {
                echo '<label>' . $column . '</label><input value="' . $value . '">';
            }
        }
        die;
        ?>

        <?php

        require_once 'connection.php';

        $year = intval($_GET['year']);
        if ($year >= 2021 && $year <= 2023) {
            include('voyage.php');
        } else {
            include('voyage2023.html');
        }
        ?>

        <!-- Pagination -->
        <div class="w3-center w3-padding-32">
            <div class="w3-bar">
                <a href="#" class="w3-bar-item w3-button w3-hover-black">«</a>
                <a href="#" class="w3-bar-item w3-black w3-button">1</a>
                <a href="#" class="w3-bar-item w3-button w3-hover-black">2</a>
                <a href="#" class="w3-bar-item w3-button w3-hover-black">3</a>
                <a href="#" class="w3-bar-item w3-button w3-hover-black">4</a>
                <a href="#" class="w3-bar-item w3-button w3-hover-black">»</a>
            </div>
        </div>

        <hr id="about">

        <!-- About Section -->
        <div class="w3-container w3-padding-32 w3-center">
            <h3>About Me, The Food Man</h3><br>
            <img src="https://picsum.photos/800/533" alt="Me" class="w3-image" style="display:block;margin:auto" width="800" height="533">
            <div class="w3-padding-32">
                <h4><b>I am Who I Am!</b></h4>
                <h6><i>With Passion For Real, Good Food</i></h6>
                <p>Just me, myself and I, exploring the universe of unknownment. I have a heart of love and an interest of lorem ipsum and mauris neque quam blog. I want to share my world with you. Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla. Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
            </div>
        </div>
        <hr>

        <!-- Footer -->
        <footer class="w3-row-padding w3-padding-32">
            <div class="w3-third">
                <h3>FOOTER</h3>
                <p>Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
                <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
            </div>

            <div class="w3-third">
                <h3>BLOG POSTS</h3>
                <ul class="w3-ul w3-hoverable">
                    <li class="w3-padding-16">
                        <img src="https://picsum.photos/50" class="w3-left w3-margin-right" style="width:50px">
                        <span class="w3-large">Lorem</span><br>
                        <span>Sed mattis nunc</span>
                    </li>
                    <li class="w3-padding-16">
                        <img src="https://picsum.photos/50" class="w3-left w3-margin-right" style="width:50px">
                        <span class="w3-large">Ipsum</span><br>
                        <span>Praes tinci sed</span>
                    </li>
                </ul>
            </div>

            <div class="w3-third w3-serif">
                <h3>POPULAR TAGS</h3>
                <p>
                    <span class="w3-tag w3-black w3-margin-bottom">Travel</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">New York</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Dinner</span>
                    <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Salmon</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">France</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Drinks</span>
                    <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Ideas</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Flavors</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Cuisine</span>
                    <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Chicken</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Dressing</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Fried</span>
                    <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Fish</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Duck</span>
                </p>
            </div>
        </footer>

        <!-- End page content -->
    </div>

    <script src="voyages.js"></script>
</body>

</html>