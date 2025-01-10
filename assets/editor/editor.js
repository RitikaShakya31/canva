// Canvas Setup
const canvas = document.getElementById("editor-canvas");
const ctx = canvas.getContext("2d");

function resizeCanvas() {
    const container = document.querySelector(".canvas-container");
    const size = Math.min(container.clientWidth, container.clientHeight - 20);
    canvas.width = size;
    canvas.height = size;
    ctx.fillStyle = "white";
    ctx.fillRect(0, 0, size, size);
}

window.addEventListener("resize", resizeCanvas);
resizeCanvas();

// Load sample image
async function loadImage() {
    const img = new Image();
    img.crossOrigin = "anonymous";
    img.src = "https://source.unsplash.com/random/800x800";

    img.onload = () => {
        const scale = Math.min(
            canvas.width / img.width,
            canvas.height / img.height
        );
        const x = (canvas.width - img.width * scale) / 2;
        const y = (canvas.height - img.height * scale) / 2;

        ctx.drawImage(img, x, y, img.width * scale, img.height * scale);
    };
}

loadImage();

// Modal Handling
const overlay = document.querySelector(".modal-overlay");
const navItems = document.querySelectorAll(".nav-item");
const modals = document.querySelectorAll(".modal");
const imageModal = document.getElementById("image-modal");
const backButtons = document.querySelectorAll(".back-btn");

function closeAllModals() {
    modals.forEach((modal) => modal.classList.remove("active"));
    imageModal.classList.remove("active");
    overlay.classList.remove("active");
}

navItems.forEach((item) => {
    item.addEventListener("click", (e) => {
        e.preventDefault();
        closeAllModals();

        const modalType = item.dataset.modal;
        if (modalType === "image") {
            imageModal.classList.add("active");
        } else {
            const modal = document.getElementById(`${modalType}-modal`);
            if (modal) {
                modal.classList.add("active");
            }
        }
        overlay.classList.add("active");
    });
});

backButtons.forEach((button) => {
    button.addEventListener("click", closeAllModals);
});

overlay.addEventListener("click", closeAllModals);

// Prevent modal close when clicking inside modal
document.querySelectorAll(".modal, .add-image-modal").forEach((modal) => {
    modal.addEventListener("click", (e) => {
        e.stopPropagation();
    });
});

// Tab handling
const tabButtons = document.querySelectorAll(".tab-btn");
tabButtons.forEach((button) => {
    button.addEventListener("click", () => {
        const parent = button.closest(".background-tabs");
        parent.querySelectorAll(".tab-btn").forEach((btn) => {
            btn.classList.remove("active");
        });
        button.classList.add("active");
    });
});

// Opacity slider handling
const opacitySlider = document.querySelector(".opacity-slider");
opacitySlider?.addEventListener("input", (e) => {
    const opacity = e.target.value / 100;
    // Apply opacity to canvas or selected element
});

// Frames
document.addEventListener("DOMContentLoaded", () => {
    const frameOptions = document.querySelectorAll(".frame-option");

    // Frame option handling
    frameOptions.forEach((option) => {
        option.addEventListener("click", () => {
            // Remove 'active' class from all options
            frameOptions.forEach((opt) => opt.classList.remove("active"));

            // Add 'active' class to the clicked option
            option.classList.add("active");

            // Apply frame styles based on the selected option
            applyFrameStyle(option.textContent.trim());
        });
    });

    function applyFrameStyle(option) {
        // Reset canvas style
        canvas.style.border = "";
        canvas.style.backgroundColor = "";

        if (option === "For Light Design") {
            // Set light frame design (White at top and bottom)
            canvas.style.background = "linear-gradient(to bottom, white 0%, white 10%, transparent 10%, transparent 90%, white 90%, white 100%)";
        } else if (option === "For Dark Design") {
            // Set dark design (Black background)
            canvas.style.backgroundColor = "black";
        } else {
            // No frame (Reset to default)
            canvas.style.backgroundColor = "";
        }
    }
});

document.addEventListener("DOMContentLoaded", () => {
    const galleryButton = document.getElementById("gallery-btn");
    const fileInput = document.getElementById("image-upload");
    const opacitySlider = document.querySelector(".opacity-slider");
    const effectPresets = document.querySelectorAll(".effect-preset");
    const addButton = document.querySelector("#text-modal .text-action-btn.primary");
    const textInput = document.querySelector("#text-modal .text-input");

    let img = new Image();
    let currentOpacity = 1; // Default opacity (100%)
    let currentColor = null; // No color filter initially
    let texts = []; // Track texts
    let selectedTextIndex = null;
    let offsetX, offsetY;

    // Set canvas size
    canvas.width = 800;
    canvas.height = 800;

    // Handle Gallery button click
    galleryButton.addEventListener("click", () => {
        fileInput.click(); // Trigger the file input
    });

    // Handle file selection
    fileInput.addEventListener("change", (event) => {
        const file = event.target.files[0];

        if (file) {
            const reader = new FileReader();

            // Load the image
            reader.onload = (e) => {
                img.onload = () => {
                    drawCanvas(); // Ensure the image is drawn first
                };
                img.src = e.target.result;
            };

            // Read the file as a data URL
            reader.readAsDataURL(file);
        }
    });

    // Function to apply opacity and color filter on the image
    function applyOpacityAndFilter() {
        // Apply opacity
        ctx.globalAlpha = currentOpacity;

        // Draw the image on top with applied opacity
        ctx.drawImage(img, 0, 0, canvas.width, canvas.height);

        // Apply color overlay if a color filter is set
        if (currentColor) {
            applyColorFilter();
        }

        // Reset globalAlpha to 1 to avoid affecting other drawings
        ctx.globalAlpha = 1;
    }

    // Handle opacity change from the slider
    opacitySlider.addEventListener("input", (e) => {
        currentOpacity = e.target.value / 100; // Convert to a decimal (0 to 1)
        drawCanvas(); // Redraw image and text with updated opacity
    });

    // Handle color preset selection
    effectPresets.forEach((preset) => {
        preset.addEventListener("click", () => {
            currentColor = preset.style.backgroundColor; // Store the current selected color
            drawCanvas(); // Redraw with new color filter
        });
    });

    // Function to apply color filter to the image as an overlay
    function applyColorFilter() {
        if (!currentColor) return; // Skip if no color is selected

        const [r, g, b] = extractRGB(currentColor);

        // Apply color overlay (semi-transparent effect)
        ctx.fillStyle = `rgba(${r}, ${g}, ${b}, 0.5)`; // 50% opacity for color overlay
        ctx.fillRect(0, 0, canvas.width, canvas.height); // Overlay the color on top of the image
    }

    // Utility function to extract RGB values from color
    function extractRGB(color) {
        const rgb = color.match(/\d+/g);
        return rgb ? [rgb[0], rgb[1], rgb[2]] : [0, 0, 0]; // Default to black if no match
    }

    // Handle adding text to canvas
    addButton.addEventListener("click", () => {
        const text = textInput.value.trim();
        if (text) {
            // Add text to the texts array as an object with properties
            const newText = {
                text: text,
                x: canvas.width / 2, // Default position at the center
                y: canvas.height / 2,
                font: "20px Arial",
                color: "black",
            };
            texts.push(newText);
            drawCanvas(); // Redraw canvas with image and new text
            textInput.value = ""; // Clear the input field
        } else {
            alert("Please enter text before adding.");
        }
    });

    // Function to draw the canvas with image and text elements
    function drawCanvas() {
        ctx.clearRect(0, 0, canvas.width, canvas.height); // Clear the canvas

        // Draw the image as the background with lower z-index
        if (img.src) {
            ctx.globalCompositeOperation = "destination-over";
            ctx.drawImage(img, 0, 0, canvas.width, canvas.height);
            ctx.globalCompositeOperation = "source-over";
        }

        // Apply opacity and color filter on top of the background image
        if (img.src) {
            applyOpacityAndFilter();
        }

        // Draw logo name at the top-left
        drawLogo();

        // Draw each text element on top of the image
        texts.forEach((textObj) => {
            ctx.font = textObj.font;
            ctx.fillStyle = textObj.color;
            ctx.textAlign = "center";
            ctx.fillText(textObj.text, textObj.x, textObj.y);
        });

        // Draw other elements (social icons, contact info, etc.)
        drawProfileElements();
    }

    // Function to draw logo at the top-left
    function drawLogo() {
        ctx.font = "30px Arial";
        ctx.fillStyle = "black";
        ctx.textAlign = "left";
        ctx.fillText("Your Logo", 10, 40); // Top-left
    }

    // Function to draw social media icons and contact info
    function drawProfileElements() {
        const socialIcons = [
            { src: "assets/image/facebook.png", x: 530, y: 60 },
            { src: "assets/image/youtube.png", x: 590, y: 60 },
            { src: "assets/image/instagram.png", x: 650, y: 60 },
        ];
        const contactInfo = { phone: "+1234567890", website: "www.example.com", email: "email@example.com" };

        socialIcons.forEach((icon) => {
            const img = new Image();
            img.src = icon.src;
            img.onload = () => ctx.drawImage(img, icon.x, icon.y, 30, 30);
        });

        ctx.font = "20px Arial";
        ctx.fillStyle = "black";
        ctx.fillText(`Phone: ${contactInfo.phone}`, 10, canvas.height - 60);
        ctx.textAlign = "center";
        ctx.fillText(contactInfo.website, canvas.width / 2, canvas.height - 60);
        ctx.textAlign = "right";
        ctx.fillText(contactInfo.email, canvas.width - 10, canvas.height - 60);
    }

    // Mouse events for dragging text
    canvas.addEventListener("mousedown", (e) => {
        const mouseX = e.offsetX;
        const mouseY = e.offsetY;

        // Check if we clicked on a text object
        texts.forEach((textObj, index) => {
            if (
                mouseX >= textObj.x - ctx.measureText(textObj.text).width / 2 &&
                mouseX <= textObj.x + ctx.measureText(textObj.text).width / 2 &&
                mouseY >= textObj.y - 20 && // 20 is roughly half the font size
                mouseY <= textObj.y + 10 // 10 is roughly half the font size
            ) {
                selectedTextIndex = index; // Store the index of the selected text
                offsetX = mouseX - textObj.x; // Calculate offset for dragging
                offsetY = mouseY - textObj.y;
            }
        });
    });

    canvas.addEventListener("mousemove", (e) => {
        if (selectedTextIndex !== null) {
            const mouseX = e.offsetX;
            const mouseY = e.offsetY;

            // Update the position of the selected text
            texts[selectedTextIndex].x = mouseX - offsetX;
            texts[selectedTextIndex].y = mouseY - offsetY;

            drawCanvas(); // Redraw the canvas with updated text position
        }
    });

    canvas.addEventListener("mouseup", () => {
        selectedTextIndex = null; // Reset the selected text
    });

    // Initial canvas rendering
    drawCanvas();
});

document.addEventListener('DOMContentLoaded', () => {
    const imageURL = sessionStorage.getItem('selectedImageURL');
    const canvasShape = sessionStorage.getItem('canvasShape');

    if (imageURL && canvasShape) {
        const canvas = document.getElementById('canvas');
        const ctx = canvas.getContext('2d');
        const img = new Image();

        img.onload = function () {
            setCanvasDimensions();
            drawImage();
        };

        img.src = imageURL;

        function setCanvasDimensions() {
            if (canvasShape === 'square') {
                canvas.width = 600;
                canvas.height = 600;
            } else if (canvasShape === 'rectangle') {
                canvas.width = 600;
                canvas.height = 800;
            }
        }

        function drawImage() {
            ctx.clearRect(0, 0, canvas.width, canvas.height);
            ctx.drawImage(img, 0, 0, canvas.width, canvas.height);
        }

        // Handle window resize
        window.addEventListener('resize', () => {
            setCanvasDimensions();
            drawImage();
        });
    }
});


function applyFrame(frameType) {
    const imageURL = sessionStorage.getItem('selectedImageURL');
    const img = new Image();

    img.onload = function () {
        const canvasWidth = canvas.width;
        const canvasHeight = canvas.height;
        ctx.clearRect(0, 0, canvasWidth, canvasHeight);

        // Draw the image as the background with lower z-index
        ctx.globalCompositeOperation = "destination-over";
        ctx.drawImage(img, 0, 0, canvasWidth, canvasHeight);
        ctx.globalCompositeOperation = "source-over";

        if (frameType === 'light') {
            const topGradient = ctx.createLinearGradient(0, 0, 0, canvasHeight / 4);
            topGradient.addColorStop(0, 'rgba(255, 255, 255, 1)');
            topGradient.addColorStop(1, 'rgba(255, 255, 255, 0)');
            ctx.fillStyle = topGradient;
            ctx.fillRect(0, 0, canvasWidth, canvasHeight / 4);

            const bottomGradient = ctx.createLinearGradient(0, canvasHeight, 0, canvasHeight - canvasHeight / 4);
            bottomGradient.addColorStop(0, 'rgba(255, 255, 255, 1)');
            bottomGradient.addColorStop(1, 'rgba(255, 255, 255, 0)');
            ctx.fillStyle = bottomGradient;
            ctx.fillRect(0, canvasHeight - canvasHeight / 4, canvasWidth, canvasHeight / 4);
        } else if (frameType === 'dark') {
            const topGradient = ctx.createLinearGradient(0, 0, 0, canvasHeight / 4);
            topGradient.addColorStop(0, 'rgba(0, 0, 0, 1)');
            topGradient.addColorStop(1, 'rgba(0, 0, 0, 0)');
            ctx.fillStyle = topGradient;
            ctx.fillRect(0, 0, canvasWidth, canvasHeight / 4);

            const bottomGradient = ctx.createLinearGradient(0, canvasHeight, 0, canvasHeight - canvasHeight / 4);
            bottomGradient.addColorStop(0, 'rgba(0, 0, 0, 1)');
            bottomGradient.addColorStop(1, 'rgba(0, 0, 0, 0)');
            ctx.fillStyle = bottomGradient;
            ctx.fillRect(0, canvasHeight - canvasHeight / 4, canvasWidth, canvasHeight / 4);
        }
    };

    if (imageURL) {
        img.src = imageURL;
    }
}
