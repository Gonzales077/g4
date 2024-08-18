<style>
  .background-image {
    opacity:1;
    transform: scale(0.5);
    transition: opacity 0.5s ease-in-out, transform 0.5s ease-in-out;
    z-index: 1;
  }

  .zoom-in {
    animation: zoomIn 4s ease-in-out infinite;
  }

  @keyframes zoomIn {
    0% {
      transform: scale(1);
    }
    50% {
      transform: scale(1.05);
    }
    100% {
      transform: scale(1);
    }
  }
</style>
<script>
  document.addEventListener('DOMContentLoaded', function () {
    const images = [
      'design/back.jpg',
      'design/back2.webp',
      'design/back3.jpg'
    ];
    const backgroundImageDiv = document.querySelector('.background-image');
    let currentIndex = 0;

    function changeBackgroundImage() {
      backgroundImageDiv.style.opacity = 0;
      setTimeout(() => {
        backgroundImageDiv.style.backgroundImage = `url(${images[currentIndex]})`;
        backgroundImageDiv.style.opacity = 1;
        currentIndex = (currentIndex + 1) % images.length;
      }, 0); // Time to match the opacity transition
    }

    // Initialize with the first image
    backgroundImageDiv.style.backgroundImage = `url(${images[currentIndex]})`;

    // Apply the zoom-in effect
    backgroundImageDiv.classList.add('zoom-in');

    // Change image every 5 seconds (4s for image + 1s for transition)
    setInterval(changeBackgroundImage, 5000);
  });
</script>
