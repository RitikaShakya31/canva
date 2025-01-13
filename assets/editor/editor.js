

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

//background Tab handling
const tabButtons = document.querySelectorAll(".tab-btn");
const tabContents = document.querySelectorAll(".tab-content");

tabButtons.forEach(button => {
  button.addEventListener("click", () => {
    const targetContentClass = button.dataset.target;

    // Update active tab button
    tabButtons.forEach(btn => btn.classList.remove("active"));
    button.classList.add("active");

    // Show relevant tab content and hide others
    tabContents.forEach(content => {
      content.style.display = content.classList.contains(targetContentClass) ? "block" : "none";
    });
  });
});

// Opacity slider handling
const opacitySlider = document.querySelector(".opacity-slider");
let currentOpacity = 1;
opacitySlider?.addEventListener("input", (e) => {
  currentOpacity = e.target.value / 100;
  applyEffect();
});

// Function to apply effect with the selected background color and opacity
function applyEffect() {
  const canvas = document.getElementById("editor-canvas");
  const ctx = canvas.getContext("2d");
  const imageURL = sessionStorage.getItem("selectedImageURL");
  const img = new Image();

  img.onload = function () {
    const canvasWidth = canvas.width;
    const canvasHeight = canvas.height;

    // Clear the canvas and redraw the image
    ctx.clearRect(0, 0, canvasWidth, canvasHeight);
    ctx.drawImage(img, 0, 0, canvasWidth, canvasHeight);

    // Apply the selected background color with the current opacity
    if (selectedColor) {
      ctx.fillStyle = selectedColor;
      ctx.globalAlpha = currentOpacity;
      ctx.fillRect(0, 0, canvasWidth, canvasHeight);
      ctx.globalAlpha = 1; // Reset alpha
    }
  };

  if (imageURL) {
    img.src = imageURL;
  } else {
    console.warn("No image URL found in sessionStorage.");
  }
}

let selectedColor = null;
document.querySelectorAll(".effect-preset").forEach((preset) => {
  preset.addEventListener("click", (e) => {
    selectedColor = e.target.style.backgroundColor;
    applyEffect();
  });
});

document.addEventListener("DOMContentLoaded", () => {
  const canvas = document.getElementById("editor-canvas");
  const ctx = canvas.getContext("2d");
  const img = new Image();

  // Get the image URL from the query string
  const urlParams = new URLSearchParams(window.location.search);
  const imageUrl = urlParams.get("image_url"); // Retrieve the "image_url" query parameter

  if (imageUrl) {
    img.onload = () => {
      // Draw the image on the canvas
      ctx.drawImage(img, 0, 0, canvas.width, canvas.height);

      // Store the image URL in sessionStorage for frame application
      sessionStorage.setItem("selectedImageURL", imageUrl);
    };
    img.src = imageUrl; // Set the image source
  } else {
    console.warn("No image URL found in query parameters.");
  }
});

// Function to apply the selected frame
function applyFrame(frameType) {
  const canvas = document.getElementById("editor-canvas");
  const ctx = canvas.getContext("2d");
  const imageURL = sessionStorage.getItem("selectedImageURL");
  const img = new Image();

  img.onload = function () {
    const canvasWidth = canvas.width;
    const canvasHeight = canvas.height;

    // Clear the canvas and redraw the image
    ctx.clearRect(0, 0, canvasWidth, canvasHeight);
    ctx.drawImage(img, 0, 0, canvasWidth, canvasHeight);

    // Apply frame based on frameType
    if (frameType === "light") {
      const topGradient = ctx.createLinearGradient(0, 0, 0, canvasHeight / 4);
      topGradient.addColorStop(0, "rgba(255, 255, 255, 1)");
      topGradient.addColorStop(1, "rgba(255, 255, 255, 0)");
      ctx.fillStyle = topGradient;
      ctx.fillRect(0, 0, canvasWidth, canvasHeight / 4);

      const bottomGradient = ctx.createLinearGradient(
        0,
        canvasHeight,
        0,
        canvasHeight - canvasHeight / 4
      );
      bottomGradient.addColorStop(0, "rgba(255, 255, 255, 1)");
      bottomGradient.addColorStop(1, "rgba(255, 255, 255, 0)");
      ctx.fillStyle = bottomGradient;
      ctx.fillRect(
        0,
        canvasHeight - canvasHeight / 4,
        canvasWidth,
        canvasHeight / 4
      );
    } else if (frameType === "dark") {
      const topGradient = ctx.createLinearGradient(0, 0, 0, canvasHeight / 4);
      topGradient.addColorStop(0, "rgba(0, 0, 0, 1)");
      topGradient.addColorStop(1, "rgba(0, 0, 0, 0)");
      ctx.fillStyle = topGradient;
      ctx.fillRect(0, 0, canvasWidth, canvasHeight / 4);

      const bottomGradient = ctx.createLinearGradient(
        0,
        canvasHeight,
        0,
        canvasHeight - canvasHeight / 4
      );
      bottomGradient.addColorStop(0, "rgba(0, 0, 0, 1)");
      bottomGradient.addColorStop(1, "rgba(0, 0, 0, 0)");
      ctx.fillStyle = bottomGradient;
      ctx.fillRect(
        0,
        canvasHeight - canvasHeight / 4,
        canvasWidth,
        canvasHeight / 4
      );
    }
  };

  if (imageURL) {
    img.src = imageURL;
  } else {
    console.warn("No image URL found in sessionStorage.");
  }
}

document.addEventListener("DOMContentLoaded", () => {
  const canvas = document.getElementById("editor-canvas");
  const ctx = canvas.getContext("2d");

  canvas.width = 800;
  canvas.height = 800;

  // Default text values with custom positions and Font Awesome icons
  const profileData = {
    text1: { value: "Name: John Doe", x: 650, y: 50 },
    text2: { value: "\uf3c5 Location: This is testing", x: 20, y: 775 }, // Location icon
    text3: { value: "\uf095 Phone: +1234567890", x: 20, y: 750 }, // Phone icon
    text4: { value: "\uf099 Social: @example", x: 600, y: 75 }, // Social icon (Twitter)
    text5: { value: "\uf0ac Website: www.example.com", x: 510, y: 750 }, // Globe icon
    text6: { value: "\uf0e0 Email: john.doe@example.com", x: 230, y: 750 }, // Email icon
    logo: { value: "Your Logo", x: 100, y: 50 },
  };

  // Track which elements are displayed on the canvas
  const selectedElements = {
    text1: false,
    text2: false,
    text3: false,
    text4: false,
    text5: false,
    text6: false,
    logo: false,
  };

  // Map checkboxes to profile data keys
  const checkboxMap = {
    text1Checkbox: "text1",
    text2Checkbox: "text2",
    text3Checkbox: "text3",
    text4Checkbox: "text4",
    text5Checkbox: "text5",
    text6Checkbox: "text6",
    logoCheckbox: "logo",
  };

  // Listen for checkbox changes
  document
    .querySelectorAll(".checkbox-item input[type='checkbox']")
    .forEach((checkbox) => {
      checkbox.addEventListener("change", (event) => {
        const key = checkboxMap[event.target.id];
        if (key) {
          selectedElements[key] = event.target.checked;
          drawCanvas();
        }
      });
    });

  // Function to draw the canvas content
  function drawCanvas() {
    ctx.clearRect(0, 0, canvas.width, canvas.height); // Clear the canvas

    // Set Font Awesome font
    const fontAwesome = "20px FontAwesome";

    // Draw the current image first
    const imageURL = sessionStorage.getItem("selectedImageURL");
    if (imageURL) {
      const img = new Image();
      img.onload = () => {
        ctx.drawImage(img, 0, 0, canvas.width, canvas.height);

        // Draw the selected elements on top of the image
        for (const key in selectedElements) {
          if (selectedElements[key]) {
            const element = profileData[key];
            ctx.font = fontAwesome;
            ctx.fillStyle = "black";
            ctx.fillText(element.value, element.x, element.y);
          }
        }
      };
      img.src = imageURL;
    } else {
      // Draw the selected elements if no image is available
      for (const key in selectedElements) {
        if (selectedElements[key]) {
          const element = profileData[key];
          ctx.font = fontAwesome;
          ctx.fillStyle = "black";
          ctx.fillText(element.value, element.x, element.y);
        }
      }
    }
  }

  // Initial render with no selected text
  drawCanvas();
});



////canvas gallery image

document.getElementById("gallery-btn").addEventListener("click", function () {
  document.getElementById("image-upload").click();
});

document
  .getElementById("image-upload")
  .addEventListener("change", function (event) {
    const file = event.target.files[0];
    if (file) {
      const reader = new FileReader();
      reader.onload = function (e) {
        const img = new Image();
        img.onload = function () {
          const canvas = document.getElementById("editor-canvas");
          const ctx = canvas.getContext("2d");

          // Clear the canvas
          ctx.clearRect(0, 0, canvas.width, canvas.height);

          // Draw the uploaded image on the canvas
          const scale = Math.min(
            canvas.width / img.width,
            canvas.height / img.height
          );
          const x = (canvas.width - img.width * scale) / 2;
          const y = (canvas.height - img.height * scale) / 2;

          ctx.drawImage(img, x, y, img.width * scale, img.height * scale);

          // Store the image URL in sessionStorage for frame application
          sessionStorage.setItem("selectedImageURL", e.target.result);
        };
        img.src = e.target.result;
      };
      reader.readAsDataURL(file);
    }
  });


  


// Select all images in gallery and color tabs
const galleryImages = document.querySelectorAll(".gallery-content img");
const colorBlocks = document.querySelectorAll(".color-grid div");
const editorCanvas = document.getElementById("editor-canvas");
const canvasContext = editorCanvas.getContext("2d");

// Function to draw selected background image or color on canvas
function drawOnCanvas(imageURL = null, color = null) {
  // Resize canvas
  editorCanvas.width = editorCanvas.clientWidth;
  editorCanvas.height = editorCanvas.clientHeight;

  // Clear the canvas before drawing
  canvasContext.fillStyle = color || "white";
  canvasContext.fillRect(0, 0, editorCanvas.width, editorCanvas.height);

  if (imageURL) {
    const img = new Image();
    img.onload = function () {
      // Scale and center the image
      const scaleWidth = editorCanvas.width / img.width;
      const scaleHeight = editorCanvas.height / img.height;
      const scale = Math.max(scaleWidth, scaleHeight);
      const x = (editorCanvas.width - img.width * scale) / 2;
      const y = (editorCanvas.height - img.height * scale) / 2;
      canvasContext.drawImage(img, x, y, img.width * scale, img.height * scale);
    };
    img.src = imageURL;
  }
}

// Handle image click from gallery
galleryImages.forEach(img => {
  img.addEventListener("click", function () {
    drawOnCanvas(img.src);

    // Store selected background for later use if needed
    sessionStorage.setItem("selectedBackgroundURL", img.src);
  });
});

// Handle color block click
colorBlocks.forEach(block => {
  block.addEventListener("click", function () {
    const backgroundColor = block.style.backgroundColor;
    drawOnCanvas(null, backgroundColor);

    // Optionally store the color if needed
    sessionStorage.setItem("selectedBackgroundColor", backgroundColor);
  });
});



///sticker
// Select all sticker images in the sticker grid
// Select all sticker images in the sticker grid
const stickers = document.querySelectorAll(".sticker-grid img");
const editorContainer = document.getElementById("editor-canvas");

// Variables for dragging
let isDragging = false;
let currentSticker = null;
let offsetX, offsetY;

// Function to add stickers on top of the existing background image
stickers.forEach(sticker => {
  sticker.addEventListener("click", function () {
    // Create a new img element for the sticker
    const stickerImg = document.createElement("img");
    stickerImg.src = sticker.src;
    stickerImg.classList.add("movable-sticker");

    // Default position for the sticker on top of the existing image
    stickerImg.style.left = "50px";  // Default horizontal position
    stickerImg.style.top = "50px";   // Default vertical position

    // Append the sticker to the editor container (on top of the background image)
    editorContainer.appendChild(stickerImg);

    // Allow sticker dragging
    stickerImg.addEventListener("mousedown", startDragging);

    // Optionally hide the sticker modal after selection
    document.getElementById("sticker-modal").classList.remove("active");
  });
});

// Start dragging
function startDragging(e) {
  isDragging = true;
  currentSticker = e.target;

  // Calculate offset for smooth dragging
  offsetX = e.offsetX;
  offsetY = e.offsetY;

  document.addEventListener("mousemove", dragSticker);
  document.addEventListener("mouseup", stopDragging);
}

// Dragging function
function dragSticker(e) {
  if (isDragging && currentSticker) {
    currentSticker.style.left = `${e.pageX - editorContainer.offsetLeft - offsetX}px`;
    currentSticker.style.top = `${e.pageY - editorContainer.offsetTop - offsetY}px`;
  }
}

// Stop dragging
function stopDragging() {
  isDragging = false;
  currentSticker = null;
  document.removeEventListener("mousemove", dragSticker);
  document.removeEventListener("mouseup", stopDragging);
}




////text

// // Add text to canvas when "ADD" button is clicked
// document
//   .querySelector(".text-action-btn.primary")
//   .addEventListener("click", () => {
//     const textInput = document.querySelector(".text-input").value;
//     if (textInput) {
//       ctx.font = "50px Arial";
//       ctx.fillStyle = "black";
//       const textWidth = ctx.measureText(textInput).width;
//       const xPosition = (canvas.width - textWidth) / 2; // Center the text horizontally
//       const yPosition = canvas.height / 2; // Center the text vertically
//       ctx.fillText(textInput, xPosition, yPosition);

//       // Make the text movable
//       makeTextMovable(textInput, xPosition, yPosition);
//     }
//   });
// Assume isDragging, offsetX, offsetY are defined elsewhere already

// Event listener for adding text
// Assume isDragging, offsetX, offsetY are defined elsewhere already
let isResizing = false; // Add this line to define isResizing

// Event listener for adding text

document
  .querySelector(".text-action-btn.primary")
  .addEventListener("click", () => {
    const textInput = document.querySelector(".text-input").value;
    if (textInput) {
      ctx.font = "50px Arial";
      ctx.fillStyle = "black";
      const textWidth = ctx.measureText(textInput).width;
      const xPosition = (canvas.width - textWidth) / 2; // Center the text horizontally
      const yPosition = canvas.height / 2; // Center the text vertically

      // Create the text element
      textElement = {
        text: textInput,
        x: xPosition,
        y: yPosition,
        width: textWidth,
        height: 50,
      };

      // Draw the text and border with delete and resize options
      drawCanvas();

      // Make the text movable
      makeTextMovable();
    }
  });

// Function to draw the text with border and icons
function drawCanvas() {
  ctx.clearRect(0, 0, canvas.width, canvas.height); // Clear the canvas

  // Redraw the background image (if any)
  const imageURL = sessionStorage.getItem("selectedImageURL");
  if (imageURL) {
    const img = new Image();
    img.onload = () => {
      ctx.drawImage(img, 0, 0, canvas.width, canvas.height);
      drawTextWithBorder();
    };
    img.src = imageURL;
  } else {
    // Draw the text and border if no image
    drawTextWithBorder();
  }
}

// Function to draw the text with border and icons
function drawTextWithBorder() {
  // Draw text border (box)
  ctx.strokeStyle = "black";
  ctx.lineWidth = 2;
  ctx.strokeRect(textElement.x - 10, textElement.y - textElement.height, textElement.width + 20, textElement.height + 20);

  // Draw delete icon (X in top-left corner)
  ctx.fillStyle = "red";
  ctx.font = "20px Arial";
  ctx.fillText("X", textElement.x - 10, textElement.y - textElement.height + 20);

  // Draw resize handle (circle in top-right corner)
  ctx.beginPath();
  ctx.arc(textElement.x + textElement.width + 10, textElement.y - textElement.height + 10, 10, 0, Math.PI * 2);
  ctx.fillStyle = "blue";
  ctx.fill();
  
  // Draw the actual text
  ctx.fillStyle = "black";
  ctx.font = "50px Arial";
  ctx.fillText(textElement.text, textElement.x, textElement.y);
}

// Function to enable dragging and resizing of the text
function makeTextMovable() {
  canvas.addEventListener("mousedown", (e) => {
    const mouseX = e.offsetX;
    const mouseY = e.offsetY;

    // Check if mouse is over the text (for dragging)
    if (
      mouseX >= textElement.x - 10 &&
      mouseX <= textElement.x + textElement.width + 10 &&
      mouseY >= textElement.y - textElement.height &&
      mouseY <= textElement.y + 10
    ) {
      isDragging = true;
      offsetX = mouseX - textElement.x;
      offsetY = mouseY - textElement.y;
    }

    // Check if mouse is over delete icon (for deleting text)
    if (
      mouseX >= textElement.x - 10 &&
      mouseX <= textElement.x + 10 &&
      mouseY >= textElement.y - textElement.height + 10 &&
      mouseY <= textElement.y - textElement.height + 30
    ) {
      deleteText();
    }

    // Check if mouse is over resize handle (for resizing text)
    if (
      mouseX >= textElement.x + textElement.width + 10 &&
      mouseX <= textElement.x + textElement.width + 30 &&
      mouseY >= textElement.y - textElement.height + 10 &&
      mouseY <= textElement.y - textElement.height + 30
    ) {
      isResizing = true;
    }
  });

  canvas.addEventListener("mousemove", (e) => {
    if (isDragging) {
      textElement.x = e.offsetX - offsetX;
      textElement.y = e.offsetY - offsetY;
      textElement.width = ctx.measureText(textElement.text).width; // Recalculate text width while dragging
      drawCanvas();
    }

    if (isResizing) {
      const mouseX = e.offsetX;
      textElement.width = mouseX - textElement.x - 10; // Resize by moving the mouse in the X direction
      drawCanvas();
    }
  });

  canvas.addEventListener("mouseup", () => {
    isDragging = false;
    isResizing = false; // Reset the resizing flag
  });
}

// Function to delete text
function deleteText() {
  textElement = null;
  drawCanvas(); // Redraw canvas after deleting text
}
