<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets\editor\editor.css">
    

    <title>Image Editor</title>
</head>

<body>
    <div class="app">
        <!-- Header -->
        <div class="header">
            <div class="header-left">
                <svg viewBox="0 0 24 24">
                    <path d="M20 11H7.83l5.59-5.59L12 4l-8 8 8 8 1.41-1.41L7.83 13H20v-2z" />
                </svg>
                <svg viewBox="0 0 24 24">
                    <path
                        d="M12 2L2 7l10 5 10-5-10-5zm0 6.2L4.2 7 12 11l7.8-4L12 8.2zM2 15l10 5 10-5v-2L12 18 2 13v2zm10 1.8L4.2 15 12 19l7.8-4L12 16.8z">
                    </path>
                </svg>
            </div>
            <div class="header-center">
                <svg viewBox="0 0 24 24">
                    <path
                        d="M12.5 8c-2.65 0-5.05.99-6.9 2.6L2 7v9h9l-3.62-3.62c1.39-1.16 3.16-1.88 5.12-1.88 3.54 0 6.55 2.31 7.6 5.5l2.37-.78C21.08 11.03 17.15 8 12.5 8z" />
                </svg>
                <svg viewBox="0 0 24 24">
                    <path
                        d="M18.4 10.6C16.55 8.99 14.15 8 11.5 8c-4.65 0-8.58 3.03-9.96 7.22L3.9 16c1.05-3.19 4.05-5.5 7.6-5.5 1.95 0 3.73.72 5.12 1.88L13 16h9V7l-3.6 3.6z" />
                </svg>
            </div>
            <button class="save-btn">Save</button>
        </div>

        <!-- Canvas -->
        <div class="canvas-container">
            <canvas id="editor-canvas"></canvas>
        </div>

        <!-- Bottom Navigation -->
        <div class="bottom-nav">
            <a href="#" class="nav-item" data-modal="frames">
                <svg viewBox="0 0 24 24">
                    <path
                        d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H5V5h14v14z" />
                </svg>
                <span>Frames</span>
            </a>
            <a href="#" class="nav-item" data-modal="profile">
                <svg viewBox="0 0 24 24">
                    <path
                        d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z" />
                </svg>
                <span>Profile</span>
            </a>
            <a href="#" class="nav-item" data-modal="text">
                <svg viewBox="0 0 24 24">
                    <path d="M2.5 4v3h5v12h3V7h5V4h-13zm19 5h-9v3h3v7h3v-7h3V9z" />
                </svg>
                <span>Text</span>
            </a>
            <a href="#" class="nav-item" data-modal="sticker">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                    <path
                        d="M12 2a10 10 0 0 0-10 10 10 10 0 0 0 10 10 10 10 0 0 0 10-10 10 10 0 0 0-10-10zm-4 7a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm6 0a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm-2 6c2 0 4 1 4 3H8c0-2 2-3 4-3z">
                    </path>
                </svg>
                <span>Sticker</span>
            </a>
            <a href="#" class="nav-item" data-modal="image">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M21 19V5H3v14h18zm-2-2H5V7h14v10zm-9-2.5L8 13l-3 4h14l-5-7-3 3.5z"></path>
                </svg>

                <span>Image</span>
            </a>
            <a href="#" class="nav-item" data-modal="effect">
                <svg viewBox="0 0 24 24">
                    <path
                        d="M14.5 6.92L13 5.77V3.88V3.4c0-0.26 0.22-0.48 0.5-0.48c0.28 0 0.5 0.21 0.5 0.48V4h2v-0.6C16 2.07 14.88 1 13.5 1c-1.38 0-2.5 1.07-2.5 2.4v2.37L9.5 6.92L6 6.07l5.05 15.25c0.15 0.45 0.55 0.68 1.45 0.68s1.3-0.23 1.45-0.68L19 6.07L14.5 6.92zM13.28 8.5l0.76 0.58l0.92-0.23L13 14.8V8.29L13.28 8.5zM9.96 9.09l0.76-0.58L11 8.29v6.51L9.03 8.86L9.96 9.09z" />
                </svg>
                <span>Effect</span>
            </a>
            <a href="#" class="nav-item" data-modal="background">
                <svg viewBox="0 0 24 24">
                    <path
                        d="M17.66 7.93L12 2.27 6.34 7.93c-3.12 3.12-3.12 8.19 0 11.31C7.9 20.8 9.95 21.58 12 21.58c2.05 0 4.1-.78 5.66-2.34 3.12-3.12 3.12-8.19 0-11.31zM12 19.59c-1.6 0-3.11-.62-4.24-1.76C6.62 16.69 6 15.19 6 13.59s.62-3.11 1.76-4.24L12 5.1v14.49z" />
                </svg>
                <span>Background</span>
            </a>
        </div>

        <!-- Modal Overlay -->
        <div class="modal-overlay"></div>

        <!-- Add Image Modal -->
        <div class="add-image-modal" id="image-modal">
            <h3>Add Image</h3>
            <p>Select an Image from Gallery or from Camera to Make Post</p>
            <div class="add-image-buttons">
                <button class="add-image-btn" id="camera-btn">Camera</button>
                <button class="add-image-btn" id="gallery-btn">Gallery</button>
                <input type="file" id="image-upload" accept="image/*" style="display: none;" />
                <input type="file" id="camera-upload" accept="image/*" capture="camera" style="display: none;" />
            </div>
            <img id="selected-image" src="" alt="Selected Image" style="display: none;" />
        </div>



        <!-- Sticker Modal -->
        <div class="modal" id="sticker-modal">
            <div class="modal-header">
                <button class="back-btn">
                    <svg viewBox="0 0 24 24">
                        <path d="M20 11H7.83l5.59-5.59L12 4l-8 8 8 8 1.41-1.41L7.83 13H20v-2z" />
                    </svg>
                </button>
                <span class="title">Sticker</span>
            </div>
            <div class="sticker-category">
                <div class="category-header">
                    <span class="category-title">HAPPY BIRTHDAY</span>
                    <a href="#" class="see-all">See all</a>
                </div>
                <div class="sticker-grid">
                    <img src="assets/image/facebook.png" alt="">
                    <img src="assets/image/instagram.png" alt="">
                    <img src="assets/image/youtube.png" alt="">
                    <img src="assets/image/mail.png" alt="">
                    <img src="assets/image/location.png" alt="">
                </div>
            </div>
            <div class="sticker-category">
                <div class="category-header">
                    <span class="category-title">ANNIVERSARY</span>
                    <a href="#" class="see-all">See all</a>
                </div>
                <div class="sticker-grid">
                    <div class="sticker-item"></div>
                    <div class="sticker-item"></div>
                    <div class="sticker-item"></div>
                    <div class="sticker-item"></div>
                </div>
            </div>
        </div>

        <!-- Profile Modal -->
        <div class="modal" id="profile-modal">
            <div class="modal-header">
                <button class="back-btn">
                    <svg viewBox="0 0 24 24">
                        <path d="M20 11H7.83l5.59-5.59L12 4l-8 8 8 8 1.41-1.41L7.83 13H20v-2z" />
                    </svg>
                </button>
                <span class="title">Details</span>
            </div>
            <div class="modal-content">
                <div class="checkbox-grid">
                    <label class="checkbox-item">
                        <input type="checkbox" id="text1Checkbox">
                        <span>Name</span>
                    </label>
                    <label class="checkbox-item">
                        <input type="checkbox" id="text2Checkbox">
                        <span>Designation</span>
                    </label>
                    <label class="checkbox-item">
                        <input type="checkbox" id="text3Checkbox">
                        <span>Phone</span>
                    </label>
                    <label class="checkbox-item">
                        <input type="checkbox" id="text4Checkbox">
                        <span>Social</span>
                    </label>
                    <label class="checkbox-item">
                        <input type="checkbox" id="text5Checkbox">
                        <span>Website</span>
                    </label>
                    <label class="checkbox-item">
                        <input type="checkbox" id="text6Checkbox">
                        <span>Email</span>
                    </label>
                    <label class="checkbox-item">
                        <input type="checkbox" id="logoCheckbox">
                        <span>Logo</span>
                    </label>

                </div>
            </div>
        </div>

        <!-- Text Modal -->
        <div class="modal" id="text-modal">
            <div class="modal-header">
                <button class="back-btn">
                    <svg viewBox="0 0 24 24">
                        <path d="M20 11H7.83l5.59-5.59L12 4l-8 8 8 8 1.41-1.41L7.83 13H20v-2z" />
                    </svg>
                </button>
                <span class="title">Add Text</span>
            </div>
            <div class="modal-content">
                <h2>Add Your Text</h2>
                <input type="text" placeholder="Add Text here" class="text-input">
                <div class="text-actions">
                    <button class="text-action-btn secondary">Cancel</button>
                    <button class="text-action-btn primary">ADD</button>
                </div>
            </div>


        </div>

        <!-- Effect Modal -->
        <div class="modal" id="effect-modal">
            <div class="modal-header">
                <button class="back-btn">
                    <svg viewBox="0 0 24 24">
                        <path d="M20 11H7.83l5.59-5.59L12 4l-8 8 8 8 1.41-1.41L7.83 13H20v-2z" />
                    </svg>
                </button>
                <span class="title">Effect</span>
            </div>
            <div class="opacity-control">
                <label>Opacity</label>
                <input type="range" class="opacity-slider" min="0" max="100" value="100">
                <div class="effect-presets">
                    <div class="effect-preset" style="background-color: #ff0000;"></div>
                    <div class="effect-preset" style="background-color: #00ff00;"></div>
                    <div class="effect-preset" style="background-color: #0000ff;"></div>
                    <div class="effect-preset" style="background-color: #ffff00;"></div>
                    <div class="effect-preset" style="background-color: #00ffff;"></div>
                </div>
            </div>
        </div>

        <!-- Frame Modal -->
        <div class="modal" id="frames-modal">
            <div class="modal-header">
                <button class="back-btn">
                    <svg viewBox="0 0 24 24">
                        <path d="M20 11H7.83l5.59-5.59L12 4l-8 8 8 8 1.41-1.41L7.83 13H20v-2z" />
                    </svg>
                </button>
                <span class="title">Frames</span>
            </div>
            <div class="frame-options">
                <div class="frame-option" onclick="applyFrame('none')">No Frame</div>
                <div class="frame-option" onclick="applyFrame('light')">For Light Design</div>
                <div class="frame-option" onclick="applyFrame('dark')">For Dark Design</div>
            </div>
        </div>

        <!-- Background Modal -->
        <div class="modal" id="background-modal">
            <div class="modal-header">
                <button class="back-btn">
                    <svg viewBox="0 0 24 24">
                        <path d="M20 11H7.83l5.59-5.59L12 4l-8 8 8 8 1.41-1.41L7.83 13H20v-2z" />
                    </svg>
                </button>
                <span class="title">Background</span>
            </div>
            <div class="background-tabs">
                <button class="tab-btn active">Gallery</button>
                <button class="tab-btn">Colors</button>
            </div>
            <div class="background-grid">
                <div class="background-item"></div>
                <div class="background-item"></div>
                <div class="background-item"></div>
                <div class="background-item"></div>
                <div class="background-item"></div>
                <div class="background-item"></div>
                <div class="background-item"></div>
                <div class="background-item"></div>
            </div>
        </div>
    </div>

    <script src="assets\editor\editor.js"></script>
</body>

</html>