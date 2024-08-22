<!-- <?php
    include(get_template_directory() . '/template-parts/global/header.php');
    include(get_template_directory() . '/template-parts/home/hero.php');
    include(get_template_directory() . '/template-parts/home/categories.php');
    include(get_template_directory() . '/template-parts/home/brand-promise.php');
    include(get_template_directory() . '/template-parts/home/founder-story.php');
   
    
    include(get_template_directory() . '/template-parts/home/the-experience.php');
    include(get_template_directory() . '/template-parts/home/personalised-dresses.php');
    include(get_template_directory() . '/template-parts/testimonials.php');
    include(get_template_directory() . '/template-parts/global/footer.php');

    ?>
     -->

     <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Wedding Dress Boutique</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@1/css/pico.min.css">
    <style>
        body {
            background-color: #f8f8f8;
            color: #333;
            font-family: 'Georgia', serif;
        }

        header {
            background-color: #f5e1e1;
            padding: 20px;
            text-align: center;
        }

        .container {
            padding: 40px 0;
        }

        nav ul {
            display: flex;
            justify-content: space-between;
        }

        nav ul li a {
            color: #b30000;
            text-decoration: none;
            padding: 10px 15px;
        }

        h1 {
            color: #b30000;
        }

        .decorative-element {
            background-image: url('https://files.oaiusercontent.com/file-1ahsCa72qMZFaeThqJYxplMS?se=2024-08-22T19%3A41%3A25Z&sp=r&sv=2024-08-04&sr=b&rscc=max-age%3D604800%2C%20immutable%2C%20private&rscd=attachment%3B%20filename%3D82a7d789-515d-452e-a52e-b73d58c302ef.webp&sig=UVAkW715nJ5fMcJWDY3C0D7GSTRddhEV7u0CbJdk/ss%3D');
            background-repeat: no-repeat;
            background-size: cover;
            padding: 100px;
            margin-bottom: 40px;
        }

        .product-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }

        .product-item img {
            width: 100%;
            border-radius: 5px;
        }

        footer {
            text-align: center;
            padding: 20px;
            background-color: #f5e1e1;
        }

        .subscribe-section {
            margin-top: 40px;
            background-color: #f5e1e1;
            padding: 20px;
            border-radius: 10px;
        }

        .subscribe-section form {
            display: flex;
            gap: 10px;
        }
    </style>
</head>

<body>

    <header>
        <h1>Wedding Dress Boutique</h1>
        <p>Where Love Stories Begin...</p>
    </header>

    <nav class="container-fluid">
        <ul>
            <li><strong>Catalogue</strong></li>
        </ul>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Categories</a></li>
            <li><a href="#" role="button">Contact</a></li>
        </ul>
    </nav>

    <main class="container">
        <div class="decorative-element">
            <!-- Decorative background with magic and ravens -->
        </div>

        <div class="grid">
            <section>
                <hgroup>
                    <h2>Our Collection</h2>
                    <h3>Discover the Magic in Every Dress</h3>
                </hgroup>
                <p>Browse through our enchanting collection of wedding dresses, each piece telling its own love story.</p>

                <div class="product-grid">
                    <div class="product-item">
                        <img src="https://source.unsplash.com/1600x900/?wedding,dress" alt="Wedding Dress">
                    </div>
                    <div class="product-item">
                        <img src="https://source.unsplash.com/1600x900/?bride,gown" alt="Wedding Gown">
                    </div>
                    <div class="product-item">
                        <img src="https://source.unsplash.com/1600x900/?wedding,bridal" alt="Bridal Dress">
                    </div>
                </div>

                <h3>Our Story</h3>
                <p>Each dress in our collection is inspired by the timeless tales of romance and magic. From the elegant silhouettes to the intricate lace details, our dresses are designed for those who believe in the beauty of love stories.</p>

                <h3>Featured Collections</h3>
                <p>Explore our featured collections, where every gown is a masterpiece crafted with passion and love. Let your wedding day be the start of your own love story.</p>
            </section>
        </div>
    </main>

    <section class="subscribe-section" aria-label="Subscribe example">
        <div class="container">
            <article>
                <hgroup>
                    <h2>Stay Updated</h2>
                    <h3>Subscribe to our newsletter</h3>
                </hgroup>
                <form class="grid">
                    <input type="text" id="firstname" name="firstname" placeholder="Your First Name" aria-label="First Name" required />
                    <input type="email" id="email" name="email" placeholder="Your Email" aria-label="Email" required />
                    <button type="submit" onclick="event.preventDefault()">Subscribe</button>
                </form>
            </article>
        </div>
    </section>

    <footer class="container">
        <small><a href="#">Privacy Policy</a> • <a href="#">Terms of Service</a></small>
    </footer>

</body>

</html>
