<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu | The Gallery Café</title>
    <link rel="stylesheet" type="text/css" href="style.css"> <!-- External CSS link -->
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .header-container, .footer-container {
            text-align: center;
            background-color: #f8f9fa;
            padding: 20px;
        }

        nav ul {
            list-style: none;
            padding: 0;
        }

        nav ul li {
            display: inline;
            margin-right: 15px;
        }

        nav ul li a {
            text-decoration: none;
            color: #333;
        }

        main {
            margin: 20px auto;
            max-width: 1200px;
        }

        .menu-intro {
            text-align: center;
            margin-bottom: 40px;
        }

        .menu-section {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
        }

        .cuisine-category {
            width: 48%;
            margin-bottom: 30px;
        }

        .cuisine-category ul {
            list-style-type: none;
            padding: 0;
        }

        .cuisine-category ul li {
            display: flex;
            justify-content: space-between;
            margin-bottom: 15px;
        }

        .cuisine-category ul li img {
            max-width: 150px;
            margin-right: 20px;
        }

        .item-details {
            flex-grow: 1;
        }

        .item-details strong {
            font-size: 1.2em;
        }

        footer {
            background-color: #f1f1f1;
            padding: 10px;
            text-align: center;
        }
    </style>
</head>
<body>
    <header>
        <div class="header-container">
            <h1>The Gallery Café - Menu</h1>
            <!-- Navigation Bar -->
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="login.php">Login</a></li>
                    <li><a href="special_events.php">Special Events</a></li>
                    <li><a href="promotions.php">Promotions</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <section class="menu-intro">
            <h2>Explore Our Diverse Cuisines</h2>
            <p>Discover a world of flavors with our carefully crafted menu. Whether you're in the mood for a local dish or an international delight, we've got something for everyone.</p>
        </section>

        <section class="menu-section">
            <article class="cuisine-category">
                <h3>Sri Lankan Specialties</h3>
                <ul>
                    <li>
                        <img src="uploads/rice and curry.jpg" alt="Rice and Curry">
                        <div class="item-details">
                            <strong>Rice and Curry</strong> - $10.00
                        </div>
                    </li>
                    <li>
                        <img src="uploads/kottu roti.jpg" alt="Kottu Roti">
                        <div class="item-details">
                            <strong>Kottu Roti</strong> - $8.00
                        </div>
                    </li>
                    <li>
                        <img src="uploads/hoppers.jpg" alt="Hoppers">
                        <div class="item-details">
                            <strong>Hoppers</strong> - $5.00
                        </div>
                    </li>
                    <li>
                        <img src="uploads/fish curry.jpg" alt="Fish Curry">
                        <div class="item-details">
                            <strong>Fish Curry</strong> - $9.00
                        </div>
                    </li>
                    <li>
                        <img src="uploads/string hoppers.jpg" alt="String Hoppers">
                        <div class="item-details">
                            <strong>String Hoppers</strong> - $4.50
                        </div>
                    </li>
                </ul>
            </article>

            <article class="cuisine-category">
                <h3>Italian Delights</h3>
                <ul>
                    <li>
                        <img src="uploads/pasta carbonara.jpg" alt="Pasta Carbonara">
                        <div class="item-details">
                            <strong>Pasta Carbonara</strong> - $12.00
                        </div>
                    </li>
                    <li>
                        <img src="uploads/margherita pizza.jpg" alt="Margherita Pizza">
                        <div class="item-details">
                            <strong>Margherita Pizza</strong> - $10.00
                        </div>
                    </li>
                    <li>
                        <img src="uploads/tiramisu.jpg" alt="Tiramisu">
                        <div class="item-details">
                            <strong>Tiramisu</strong> - $6.00
                        </div>
                    </li>
                </ul>
            </article>
            <article class="cuisine-category">
                <h3>Chinese Favorites</h3>
                <ul>
                    <li>
                        <img src="uploads/kung pao chicken.jpg" alt="Kung Pao Chicken">
                        <div class="item-details">
                            <strong>Kung Pao Chicken</strong> - $11.00
                        </div>
                    </li>
                    <li>
                        <img src="uploads/sweet and sour pork.jpg" alt="Sweet and Sour Pork">
                        <div class="item-details">
                            <strong>Sweet and Sour Pork</strong> - $10.00
                        </div>
                    </li>
                    <li>
                        <img src="uploads/spring rolls.jpg" alt="Spring Rolls">
                        <div class="item-details">
                            <strong>Spring Rolls</strong> - $5.00
                        </div>
                    </li>
                </ul>
            </article>
            <article class="cuisine-category">
                <h3>Australian Classics</h3>
                <ul>
                    <li>
                        <img src="uploads/meat pie.jpg" alt="Meat Pie">
                        <div class="item-details">
                            <strong>Meat Pie</strong> - $8.00
                        </div>
                    </li>
                    <li>
                        <img src="uploads/pavlova.jpg" alt="Pavlova">
                        <div class="item-details">
                            <strong>Pavlova</strong> - $6.00
                        </div>
                    </li>
                    <li>
                        <img src="uploads/lamington.jpg" alt="Lamington">
                        <div class="item-details">
                            <strong>Lamington</strong> - $4.00
                        </div>
                    </li>
                </ul>
            </article>
              </section>
    </main>

    <footer>
        <div class="footer-container">
            <p>&copy; 2024 The Gallery Café. All Rights Reserved.</p>
        </div>
    </footer>
</body>
</html>
       
