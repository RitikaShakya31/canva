class ImageEditor {
    constructor() {
        this.canvas = document.getElementById('editorCanvas');
        this.ctx = this.canvas.getContext('2d');
        this.canvasWrapper = document.querySelector('.canvas-wrapper');
        this.zoomInBtn = document.getElementById('zoomInBtn');
        this.zoomOutBtn = document.getElementById('zoomOutBtn');
        this.stickersContainer = document.getElementById('stickersContainer');

        this.currentZoom = 1;
        this.MIN_ZOOM = 0.5;
        this.MAX_ZOOM = 2;
        this.ZOOM_STEP = 0.1;

        this.image = new Image();
        this.texts = [];
        this.stickers = [];
        this.selectedTextIndex = null;
        this.selectedSticker = null;
        this.isDragging = false;

        this.initializeEventListeners();
        this.loadStickers();
        this.setupImageLoader();
        this.updateControlStates();
    }

    initializeEventListeners() {
        this.zoomInBtn.addEventListener('click', () => this.adjustZoom(this.ZOOM_STEP));
        this.zoomOutBtn.addEventListener('click', () => this.adjustZoom(-this.ZOOM_STEP));

        document.getElementById('addTextBtn').addEventListener('click', () => this.addText());
        document.getElementById('deleteTextBtn').addEventListener('click', () => this.deleteText());
        document.getElementById('boldBtn').addEventListener('click', () => this.toggleBold());
        document.getElementById('underlineBtn').addEventListener('click', () => this.toggleUnderline());
        document.getElementById('fontSize').addEventListener('input', () => this.updateFontSize());
        document.getElementById('fontFamily').addEventListener('change', () => this.changeFont());
        document.getElementById('colorPicker').addEventListener('change', () => this.changeTextColor());
        document.getElementById('saveBtn').addEventListener('click', () => this.saveImage());
        document.getElementById('deleteStickerBtn').addEventListener('click', () => this.deleteSticker());

        this.canvas.addEventListener('mousedown', this.handleMouseDown.bind(this));
        this.canvas.addEventListener('mousemove', this.handleMouseMove.bind(this));
        this.canvas.addEventListener('mouseup', this.handleMouseUp.bind(this));
        this.canvas.addEventListener('touchstart', this.handleTouchStart.bind(this));
        this.canvas.addEventListener('touchmove', this.handleTouchMove.bind(this));
        this.canvas.addEventListener('touchend', this.handleTouchEnd.bind(this));
    }

    adjustZoom(step) {
        this.currentZoom = Math.min(Math.max(this.MIN_ZOOM, this.currentZoom + step), this.MAX_ZOOM);
        this.updateCanvasZoom();
    }

    updateCanvasZoom() {
        this.canvasWrapper.style.transform = `scale(${this.currentZoom})`;
        this.canvasWrapper.style.transformOrigin = 'top left';
    }

    loadStickers() {
        const stickers = ['stickers/sticker1.png', 'stickers/sticker2.png', 'stickers/sticker3.png'];
        stickers.forEach(stickerSrc => {
            const stickerElement = document.createElement('div');
            stickerElement.classList.add('sticker-option');
            stickerElement.innerHTML = `<img src="${stickerSrc}" alt="Sticker">`;
            stickerElement.addEventListener('click', () => this.addStickerToCanvas(stickerSrc));
            this.stickersContainer.appendChild(stickerElement);
        });
    }

    addStickerToCanvas(stickerSrc) {
        const stickerImage = new Image();
        stickerImage.src = stickerSrc;
        stickerImage.onload = () => {
            this.selectedSticker = {
                image: stickerImage,
                x: this.canvas.width / 2 - stickerImage.width / 2,
                y: this.canvas.height / 2 - stickerImage.height / 2,
                width: stickerImage.width,
                height: stickerImage.height
            };
            this.drawCanvas();
        };
    }

    setupImageLoader() {
        this.image.src = 'category/1.jpg';
        this.image.onload = () => {
            this.canvas.width = this.image.width;
            this.canvas.height = this.image.height;
            this.drawCanvas();
        };
    }

    drawCanvas() {
        this.ctx.clearRect(0, 0, this.canvas.width, this.canvas.height);
        this.ctx.drawImage(this.image, 0, 0, this.canvas.width, this.canvas.height);

        if (this.selectedSticker) {
            this.ctx.drawImage(
                this.selectedSticker.image,
                this.selectedSticker.x,
                this.selectedSticker.y,
                this.selectedSticker.width,
                this.selectedSticker.height
            );
        }

        this.texts.forEach((text, index) => {
            this.ctx.save();
            this.ctx.translate(text.x, text.y);
            this.ctx.rotate((text.rotation || 0) * Math.PI / 180);

            let fontStyle = `${text.bold ? "bold " : ""}${text.size || 20}px ${text.font || "Roboto"}`;
            if (text.underline) {
                fontStyle += " underline";
            }

            this.ctx.font = fontStyle;
            this.ctx.fillStyle = text.color || '#000000';
            this.ctx.fillText(text.content, 0, 0);

            if (text.underline) {
                const textMetrics = this.ctx.measureText(text.content);
                this.ctx.beginPath();
                this.ctx.moveTo(0, 5);
                this.ctx.lineTo(textMetrics.width, 5);
                this.ctx.strokeStyle = text.color || '#000000';
                this.ctx.stroke();
            }

            if (this.selectedTextIndex === index) {
                const textMetrics = this.ctx.measureText(text.content);
                this.ctx.strokeStyle = 'red';
                this.ctx.lineWidth = 1;
                this.ctx.strokeRect(-5, -(text.size || 20), textMetrics.width + 10, (text.size || 20) + 10);
            }

            this.ctx.restore();
        });

        this.updateControlStates();
    }

    addText() {
        const textInput = document.getElementById('textInput');
        const color = document.getElementById('colorPicker').value;
        const content = textInput.value.trim();

        if (content) {
            this.texts.push({
                content,
                x: this.canvas.width / 2,
                y: this.canvas.height / 2,
                color,
                rotation: 0,
                size: 20,
                bold: false,
                underline: false,
                font: "Roboto",
            });
            this.selectedTextIndex = this.texts.length - 1;
            this.drawCanvas();
            textInput.value = '';
        }
    }

    deleteText() {
        if (this.selectedTextIndex !== null) {
            this.texts.splice(this.selectedTextIndex, 1);
            this.selectedTextIndex = null;
            this.drawCanvas();
        }
    }

    toggleBold() {
        if (this.selectedTextIndex !== null) {
            this.texts[this.selectedTextIndex].bold = !this.texts[this.selectedTextIndex].bold;
            this.drawCanvas();
        }
    }

    toggleUnderline() {
        if (this.selectedTextIndex !== null) {
            this.texts[this.selectedTextIndex].underline = !this.texts[this.selectedTextIndex].underline;
            this.drawCanvas();
        }
    }

    updateFontSize() {
        if (this.selectedTextIndex !== null) {
            const newSize = parseInt(document.getElementById('fontSize').value, 10);
            this.texts[this.selectedTextIndex].size = newSize;
            this.drawCanvas();
        }
    }

    changeFont() {
        if (this.selectedTextIndex !== null) {
            const newFont = document.getElementById('fontFamily').value;
            this.texts[this.selectedTextIndex].font = newFont;
            this.drawCanvas();
        }
    }

    changeTextColor() {
        if (this.selectedTextIndex !== null) {
            const newColor = document.getElementById('colorPicker').value;
            this.texts[this.selectedTextIndex].color = newColor;
            this.drawCanvas();
        }
    }

    handleMouseDown(e) {
        const rect = this.canvas.getBoundingClientRect();
        const mouseX = (e.clientX - rect.left) / this.currentZoom;
        const mouseY = (e.clientY - rect.top) / this.currentZoom;

        this.handleInteractionStart(mouseX, mouseY);
    }

    handleTouchStart(e) {
        e.preventDefault();
        const rect = this.canvas.getBoundingClientRect();
        const touch = e.touches[0];
        const touchX = (touch.clientX - rect.left) / this.currentZoom;
        const touchY = (touch.clientY - rect.top) / this.currentZoom;

        this.handleInteractionStart(touchX, touchY);
    }

    handleInteractionStart(x, y) {
        let textClicked = false;
        let stickerClicked = false;

        this.texts.forEach((text, index) => {
            const textMetrics = this.ctx.measureText(text.content);
            const textWidth = textMetrics.width;
            const textHeight = text.size || 20;

            if (
                x >= text.x &&
                x <= text.x + textWidth &&
                y >= text.y - textHeight &&
                y <= text.y
            ) {
                this.selectedTextIndex = index;
                this.isDragging = true;
                this.dragOffsetX = x - text.x;
                this.dragOffsetY = y - text.y;
                textClicked = true;
            }
        });

        if (this.selectedSticker) {
            if (
                x >= this.selectedSticker.x &&
                x <= this.selectedSticker.x + this.selectedSticker.width &&
                y >= this.selectedSticker.y &&
                y <= this.selectedSticker.y + this.selectedSticker.height
            ) {
                this.isDragging = true;
                this.dragOffsetX = x - this.selectedSticker.x;
                this.dragOffsetY = y - this.selectedSticker.y;
                stickerClicked = true;
            }
        }

        if (!textClicked && !stickerClicked) {
            this.selectedTextIndex = null;
            this.isDragging = false;
        }

        this.drawCanvas();
    }

    handleMouseMove(e) {
        if (this.isDragging) {
            const rect = this.canvas.getBoundingClientRect();
            const mouseX = (e.clientX - rect.left) / this.currentZoom;
            const mouseY = (e.clientY - rect.top) / this.currentZoom;

            this.handleInteractionMove(mouseX, mouseY);
        }
    }

    handleTouchMove(e) {
        e.preventDefault();
        if (this.isDragging) {
            const rect = this.canvas.getBoundingClientRect();
            const touch = e.touches[0];
            const touchX = (touch.clientX - rect.left) / this.currentZoom;
            const touchY = (touch.clientY - rect.top) / this.currentZoom;

            this.handleInteractionMove(touchX, touchY);
        }
    }

    handleInteractionMove(x, y) {
        if (this.selectedTextIndex !== null) {
            this.texts[this.selectedTextIndex].x = x - this.dragOffsetX;
            this.texts[this.selectedTextIndex].y = y - this.dragOffsetY;
        } else if (this.selectedSticker) {
            this.selectedSticker.x = x - this.dragOffsetX;
            this.selectedSticker.y = y - this.dragOffsetY;
        }
        this.drawCanvas();
    }

    handleMouseUp() {
        this.isDragging = false;
    }

    handleTouchEnd() {
        this.isDragging = false;
    }

    deleteSticker() {
        this.selectedSticker = null;
        this.drawCanvas();
    }

    updateControlStates() {
        const deleteTextBtn = document.getElementById('deleteTextBtn');
        const boldBtn = document.getElementById('boldBtn');
        const underlineBtn = document.getElementById('underlineBtn');
        const fontSizeInput = document.getElementById('fontSize');
        const fontFamilySelect = document.getElementById('fontFamily');
        const colorPicker = document.getElementById('colorPicker');

        const isTextSelected = this.selectedTextIndex !== null;
        deleteTextBtn.disabled = !isTextSelected;
        boldBtn.disabled = !isTextSelected;
        underlineBtn.disabled = !isTextSelected;
        fontSizeInput.disabled = !isTextSelected;
        fontFamilySelect.disabled = !isTextSelected;
        colorPicker.disabled = !isTextSelected;

        if (isTextSelected) {
            const currentText = this.texts[this.selectedTextIndex];
            boldBtn.classList.toggle('active', currentText.bold);
            underlineBtn.classList.toggle('active', currentText.underline);
        }
    }

    saveImage() {
        const tempCanvas = document.createElement('canvas');
        const tempCtx = tempCanvas.getContext('2d');

        tempCanvas.width = this.image.width;
        tempCanvas.height = this.image.height;

        tempCtx.drawImage(this.image, 0, 0, tempCanvas.width, tempCanvas.height);

        if (this.selectedSticker) {
            tempCtx.drawImage(
                this.selectedSticker.image,
                this.selectedSticker.x,
                this.selectedSticker.y,
                this.selectedSticker.width,
                this.selectedSticker.height
            );
        }

        this.texts.forEach(text => {
            tempCtx.save();
            tempCtx.translate(text.x, text.y);
            tempCtx.rotate((text.rotation || 0) * Math.PI / 180);

            let fontStyle = `${text.bold ? "bold " : ""}${text.size || 20}px ${text.font || "Roboto"}`;
            tempCtx.font = fontStyle;
            tempCtx.fillStyle = text.color || '#000000';
            tempCtx.fillText(text.content, 0, 0);

            if (text.underline) {
                const textMetrics = tempCtx.measureText(text.content);
                tempCtx.beginPath();
                tempCtx.moveTo(0, 5);
                tempCtx.lineTo(textMetrics.width, 5);
                tempCtx.strokeStyle = text.color || '#000000';
                tempCtx.stroke();
            }

            tempCtx.restore();
        });

        const dataUrl = tempCanvas.toDataURL('image/png', 1.0);
        const link = document.createElement('a');
        link.download = 'edited_image.png';
        link.href = dataUrl;
        link.click();
    }
}

document.addEventListener('DOMContentLoaded', () => {
    new ImageEditor();
});