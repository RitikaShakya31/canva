<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Battery</title>
    <style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
    }

    body {
        background-color: #fff;
    }

    .container {
        padding: 16px;
    }

    /* Header */
    .header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-top: 20px;
        margin-bottom: 20px;
    }

    .header h1 {
        font-size: 24px;
        font-weight: 600;
    }

    .change-category {
        background: #FF1B51;
        color: white;
        border: none;
        padding: 8px 16px;
        border-radius: 20px;
        font-size: 14px;
        display: flex;
        align-items: center;
        gap: 4px;
    }

    /* Search */
    .search-container {
        background: #F5F5F5;
        border-radius: 12px;
        padding: 12px 16px;
        margin-bottom: 20px;
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .search-container input {
        border: none;
        background: transparent;
        width: 100%;
        font-size: 16px;
        outline: none;
    }

    /* Select */
    .select-container {
        margin-bottom: 24px;
    }

    select {
        width: 100%;
        padding: 12px;
        border: 1px solid #E5E5E5;
        border-radius: 12px;
        font-size: 16px;
        appearance: none;
        background: white;
    }

    /* Category Sections */
    .category-section {
        margin-bottom: 32px;
    }

    .section-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 16px;
    }

    .section-title {
        font-size: 18px;
        font-weight: 600;
    }

    .see-all {
        color: #666;
        text-decoration: none;
        font-size: 14px;
    }

    .image-scroll {
        display: flex;
        gap: 12px;
        overflow-x: auto;
        padding-bottom: 8px;
        scrollbar-width: none;
        -ms-overflow-style: none;
    }

    .image-scroll::-webkit-scrollbar {
        display: none;
    }

    .image-card {
        flex: 0 0 auto;
        width: 140px;
        height: 140px;
        border-radius: 12px;
        overflow: hidden;
    }

    .image-card img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    </style>
</head>

<body>
    <div class="container">
        <!-- Header -->
        <div class="header">
            <h1>Battery</h1>
            <button class="change-category" data-target="brand.php">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M12 20h9M3 20h3m3 0h3M3 12h18M3 4h12"></path>
                </svg>
                Change Category
            </button>
        </div>


        <!-- Search -->
        <div class="search-container">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#666" stroke-width="2">
                <circle cx="11" cy="11" r="8"></circle>
                <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
            </svg>
            <input type="text" placeholder="Search Category & Images">
        </div>

        <!-- Select -->
        <div class="select-container">
            <select>
                <option value="">Select Sub Category</option>
            </select>
        </div>

        <!-- Solar Plant Section -->
        <div class="category-section">
            <div class="section-header">
                <h2 class="section-title">Solar Plant (Install)</h2>
                <a href="#" class="see-all">See all</a>
            </div>
            <div class="image-scroll">
                <div class="image-card">
                    <img src="category\3d-render-robot-holding-solar-panel-grassy-glboe_1048-10930.avif">
                </div>
                <div class="image-card">
                    <img src="category\3d-render-robot-holding-solar-panel-grassy-glboe_1048-10930.avif">
                </div>
                <div class="image-card">
                    <img src="category\3d-render-robot-holding-solar-panel-grassy-glboe_1048-10930.avif">
                </div>
                <div class="image-card">
                    <img src="category\3d-render-robot-holding-solar-panel-grassy-glboe_1048-10930.avif">
                </div>
            </div>
        </div>

        <!-- Battery Shop Section -->
        <div class="category-section">
            <div class="section-header">
                <h2 class="section-title">Battery Shop</h2>
                <a href="#" class="see-all">See all</a>
            </div>
            <div class="image-scroll">
                <div class="image-card">
                    <img src="category\3d-render-robot-holding-solar-panel-grassy-glboe_1048-10930.avif" alt="Battery">
                </div>
                <div class="image-card">
                    <img src="category\3d-render-robot-holding-solar-panel-grassy-glboe_1048-10930.avif" alt="Battery">
                </div>
                <div class="image-card">
                    <img src="category\3d-render-robot-holding-solar-panel-grassy-glboe_1048-10930.avif" alt="Battery">
                </div>
                <div class="image-card">
                    <img src="category\3d-render-robot-holding-solar-panel-grassy-glboe_1048-10930.avif" alt="Battery">
                </div>
            </div>
        </div>

        <!-- Battery Manufacturer Section -->
        <div class="category-section">
            <div class="section-header">
                <h2 class="section-title">Battery Manufacturer</h2>
                <a href="#" class="see-all">See all</a>
            </div>
            <div class="image-scroll">
                <div class="image-card">
                    <img src="category\3d-render-robot-holding-solar-panel-grassy-glboe_1048-10930.avif">
                </div>
                <div class="image-card">
                    <img src="category\3d-render-robot-holding-solar-panel-grassy-glboe_1048-10930.avif">
                </div>
                <div class="image-card">
                    <img src="category\3d-render-robot-holding-solar-panel-grassy-glboe_1048-10930.avif">
                </div>
                <div class="image-card">
                    <img src="category\3d-render-robot-holding-solar-panel-grassy-glboe_1048-10930.avif"
                        alt="Manufacturer">
                </div>
            </div>
        </div>
    </div>

    <?php
include 'nav.php';
?>

    <script>
    // Add smooth scrolling to image galleries
    document.querySelectorAll('.image-scroll').forEach(gallery => {
        let isDown = false;
        let startX;
        let scrollLeft;

        gallery.addEventListener('mousedown', (e) => {
            isDown = true;
            startX = e.pageX - gallery.offsetLeft;
            scrollLeft = gallery.scrollLeft;
        });

        gallery.addEventListener('mouseleave', () => {
            isDown = false;
        });

        gallery.addEventListener('mouseup', () => {
            isDown = false;
        });

        gallery.addEventListener('mousemove', (e) => {
            if (!isDown) return;
            e.preventDefault();
            const x = e.pageX - gallery.offsetLeft;
            const walk = (x - startX) * 2;
            gallery.scrollLeft = scrollLeft - walk;
        });
    });


    // Add click event listener to the Change Category button
    document.querySelector('.change-category').addEventListener('click', function() {
        const target = this.getAttribute('data-target'); // Retrieve the target PHP file
        if (target) {
            window.location.href = target; // Redirect to the specified file
        }
    });
    </script>
</body>

</html>