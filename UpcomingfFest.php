<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poster wala || Home</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baskervville:ital@0;1&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <section class="headersection-others">
        <?php include('section/header.php') ?>
    </section>

    <section class="breadcrumball">
        <div class="breadcrumbtracking">
            <p>Home > Latest Festivals</p>
            <h1>Latest Festivals</h1>
        </div>
        <div class="breadcrumbbtn">
            <span class="breadcrumbbtnspan"><a href="contact-us.php">Contact Us</a></span>
        </div>
    </section>

    <div class="main-content">
        <!-- Horizontal Header with Title and Filter -->
        <div class="content-header">
            <h2 class="section-title">Latest Festivals</h2>
            <div class="filter-row">
                <button class="filter-btn active">All</button>
                <button class="filter-btn">Religious</button>
                <button class="filter-btn">Cultural</button>
                <button class="filter-btn">Regional</button>
                <button class="filter-btn">Seasonal</button>
            </div>
        </div>

        <!-- Grid Below -->
        <div class="upco-container">
            <div class="upco-card">
                <img src="assets/category-images/image.png" alt="Diwali">
                <div class="upco-title">Diwali</div>
            </div>
            <div class="upco-card">
                <img src="assets/category-images/image.png" alt="Dev Diwali">
                <div class="upco-title">Dev Diwali</div>
            </div>
            <div class="upco-card">
                <img src="assets/category-images/image.png" alt="Chhath Puja">
                <div class="upco-title">Chhath Puja</div>
            </div>
            <div class="upco-card">
                <img src="assets/category-images/image.png" alt="Durga Puja">
                <div class="upco-title">Durga Puja</div>
            </div>
            <div class="upco-card">
                <img src="assets/category-images/image.png" alt="Bhai Dooj">
                <div class="upco-title">Bhai Dooj</div>
            </div>
            <div class="upco-card">
                <img src="assets/category-images/image.png" alt="Govardhan Puja">
                <div class="upco-title">Govardhan Puja</div>
            </div>
            <div class="upco-card">
                <img src="assets/category-images/image.png" alt="Nag Panchami">
                <div class="upco-title">Nag Panchami</div>
            </div>
            <div class="upco-card">
                <img src="assets/category-images/image.png" alt="Eid-Ul-Fitr">
                <div class="upco-title">Eid-Ul-Fitr</div>
            </div>
            <div class="upco-card">
                <img src="assets/category-images/image.png" alt="Politics">
                <div class="upco-title">Politics</div>
            </div>
            <div class="upco-card">
                <img src="assets/category-images/image.png" alt="Birthday">
                <div class="upco-title">Birthday</div>
            </div>
            <div class="upco-card">
                <img src="assets/category-images/image.png" alt="Anniversary">
                <div class="upco-title">Anniversary</div>
            </div>
            <div class="upco-card">
                <img src="assets/category-images/image.png" alt="Zodiac Sign">
                <div class="upco-title">Zodiac Sign</div>
            </div>
            <div class="upco-card">
                <img src="assets/category-images/image.png" alt="Festival">
                <div class="upco-title">Festival</div>
            </div>
            <div class="upco-card">
                <img src="assets/category-images/image.png" alt="Event">
                <div class="upco-title">Event</div>
            </div>
            <div class="upco-card">
                <img src="assets/category-images/image.png" alt="Holiday">
                <div class="upco-title">Holiday</div>
            </div>
            <div class="upco-card">
                <img src="assets/category-images/image.png" alt="Celebration">
                <div class="upco-title">Celebration</div>
            </div>

            <!-- Repeat other cards as needed -->
        </div>
    </div>

    <?php include('section/footer.php') ?>

    <script>
        const filterButtons = document.querySelectorAll('.filter-btn');

        filterButtons.forEach(button => {
            button.addEventListener('click', () => {
                filterButtons.forEach(btn => btn.classList.remove('active'));
                button.classList.add('active');
            });
        });
    </script>
</body>

</html>