@extends('app')

@section('content')

<!-- Gallery Section -->
<section class="gallery-section">
    <div class="container">
        <h1 class="text-center">Gallery</h1>
        <div class="row gallery-grid">
            @foreach($images as $image)
                <div class="col-md-4 col-sm-6 gallery-item">
                    <img src="{{ asset('galeri/' . $image) }}" alt="Gallery Image" class="img-thumbnail gallery-trigger" data-src="{{ asset('galeri/' . $image) }}">
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Custom Lightbox Modal -->
<div id="lightbox-modal" class="lightbox-modal">
    <span class="lightbox-close">&times;</span>
    <img class="lightbox-content" id="lightbox-image" src="" alt="Full Image">
</div>

<!-- Gallery Styling -->
<style>
    .gallery-section {
        padding: 50px 0;
        margin-top: 10%;
    }

    .gallery-item {
        margin-bottom: 15px;
    }

    .img-thumbnail {
        width: 100%;
        height: auto;
        object-fit: cover;
        border: 2px solid #ddd;
        border-radius: 25px;
        transition: transform 0.2s ease, box-shadow 0.2s ease;
    }

    .img-thumbnail:hover {
        transform: scale(1.05);
        box-shadow: 0 8px 15px rgb(93, 14, 234);
    }

    .gallery-grid {
        display: flex;
        flex-wrap: wrap;
        gap: 15px;
        justify-content: center;
    }

    .gallery-section h1 {
        margin-bottom: 30px;
        font-size: 2.5rem;
        font-weight: bold;
        color: #333;
    }

    /* Lightbox Modal Styles */
    .lightbox-modal {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.8);
        justify-content: center;
        align-items: center;
        z-index: 1000;
    }

    .lightbox-modal.active {
        display: flex;
    }

    .lightbox-content {
        max-width: 80%;
        max-height: 80%;
        border-radius: 15px;
        animation: fadeIn 0.3s ease-in-out;
    }

    .lightbox-close {
        position: absolute;
        top: 20px;
        right: 20px;
        color: white;
        font-size: 2rem;
        font-weight: bold;
        cursor: pointer;
        z-index: 1001;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
        }
        to {
            opacity: 1;
        }
    }
</style>

<!-- Lightbox JS -->
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const modal = document.getElementById('lightbox-modal');
        const modalImg = document.getElementById('lightbox-image');
        const closeBtn = document.querySelector('.lightbox-close');
        const triggers = document.querySelectorAll('.gallery-trigger');

        triggers.forEach(trigger => {
            trigger.addEventListener('click', (e) => {
                modal.classList.add('active');
                modalImg.src = e.target.dataset.src;
            });
        });

        closeBtn.addEventListener('click', () => {
            modal.classList.remove('active');
        });

        // Close modal when clicking outside the image
        modal.addEventListener('click', (e) => {
            if (e.target === modal) {
                modal.classList.remove('active');
            }
        });
    });
</script>

@endsection
