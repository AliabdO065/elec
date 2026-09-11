<button class="feedback-btn feedback-trigger">
    <span class="btn-text">review</span>
    <span class="starx star1">★</span>
    <span class="starx star2">★</span>
    <span class="starx star3">★</span>
    <span class="starx star4">★</span>
    <span class="starx star5">★</span>
    <span class="starx star6">★</span>
</button>

<div id="feedbackOverlay" class="feedback-overlay">
    <div class="feedback-form">
        <form id="wpforms-form-8584" class="wpforms-validate wpforms-form wpforms-ajax-form" data-formid="8584"
            method="post" enctype="multipart/form-data" action="{{ route('fronted.contact.feedback') }}">
            @csrf
            <div class="card shadow-lg border-0 rounded-4 text-center">
                <div class="card-header text-white fw-bold d-flex justify-content-center align-items-center position-relative"
                    style="background: linear-gradient(135deg,#3064af,#3064af); border-top-left-radius: 1rem; border-top-right-radius: 1rem; padding: 1rem;">
                    {{-- <i class="fa fa-star me-2" style="color: #f5a623"></i> --}}
                    <span style="color: #f5a623"> Feedback</span>
                    <span id="closeFeedback"
                        style="position:absolute; right:15px; cursor:pointer;color: #f5a623; font-size:1.8rem; margin-top: -11px;">&times;</span>
                </div>

                <div class="card-body feedback-body p-4">

                    <!-- Stars -->
                    <div class="mb-3">
                        <label class="form-label fw-semibold d-block mb-2"
                            style="text-align: center;font-weight: 900;">Rate Us</label>
                        <div id="star-rating">
                            <i class="fa fa-star star" data-value="1"></i>
                            <i class="fa fa-star star" data-value="2"></i>
                            <i class="fa fa-star star" data-value="3"></i>
                            <i class="fa fa-star star" data-value="4"></i>
                            <i class="fa fa-star star" data-value="5"></i>
                        </div>
                        <!-- hidden input to hold rate -->
                        <input type="hidden" name="rate" id="rate" required>
                    </div>

                    <!-- Name -->
                    <div class="mb-3 data">
                        <input type="text" id="name" name="name" class="form-control rounded-pill"
                            placeholder="Your Name" required>
                    </div>

                    <!-- Message -->
                    <div class="mb-3 data">
                        <textarea id="message" name="message" class="form-control rounded-3" rows="4" placeholder="Your Message"
                            required style="min-height: 0em;"></textarea>
                    </div>

                    <!-- Submit -->
                    <div class="mb-2">
                        <button type="button" id="submitFeedback"
                            class="btn-submit rounded-pill fw-semibold">Submit</button>
                    </div>

                </div>
            </div>
        </form>
    </div>
    <div id="feedbackToast">Thanks for your feedback!</div>
</div>

<style>
    .feedback-btn {
        position: fixed;
        bottom: 25px;
        left: 25px;
        background: linear-gradient(135deg, #3064af, #1a8cff);
        color: white;
        border: none;
        border-radius: 50%;
        width: 60px;
        height: 60px;
        font-size: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 100001;
        cursor: pointer;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
        overflow: visible;
        transition: transform 0.3s;
    }

    .feedback-btn:hover {
        transform: scale(1.15);
    }

    .btn-text {
        z-index: 2;
        position: relative;
    }

    /* Star base styles */
    .starx {
        position: absolute;
        color: gold;
        font-size: 15px;
        opacity: 0.9;
        transform-origin: center -25px;
        /* Distance from the text center */
        animation: rotateStar 3s linear infinite;
    }

    /* Each star starts at a different angle */
    .star1 {
        animation-delay: 0s;
    }

    .star2 {
        animation-delay: 0.5s;
    }

    .star3 {
        animation-delay: 1s;
    }
    .star4 {
        animation-delay: 1.5s;
    }

    .star5 {
        animation-delay: 2s;
    }

    .star6 {
        animation-delay: 2.5s;
    }

    /* Keyframes for rotating stars */
    @keyframes rotateStar {
        0% {
            transform: rotate(0deg) translateX(25px) rotate(0deg);
        }

        100% {
            transform: rotate(360deg) translateX(25px) rotate(-360deg);
        }
    }

    /* Form */
    .feedback-form {
        width: 350px;
        transform: scale(0.8);
        opacity: 0;
        transition: all 0.3s ease-in-out;
    }

    .feedback-overlay.active .feedback-form {
        /* transform: scale(1); */
        opacity: 1;
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 999;
    }

    .feedback-body {
        background: #fff;
        border-radius: 0 0 1rem 1rem;
        color: #333;
        font-weight: 500;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
    }

    #star-rating {
        display: flex;
        justify-content: center;
        gap: 6px;
    }

    #star-rating .star {
        font-size: 1.4rem;
        color: #ccc;
        cursor: pointer;
        transition: transform 0.2s, color 0.2s;
    }

    #star-rating .star:hover,
    #star-rating .star.selected {
        color: gold;
        transform: scale(1.3);
    }

    /* Inputs */
    .form-control {
        padding: 0.6rem 1rem;
        font-size: 0.95rem;
        box-shadow: inset 0 2px 5px rgba(0, 0, 0, 0.05);
    }

    /* Submit */
    .btn-submit {
        background: linear-gradient(135deg, #3064af, #1a8cff);
        color: white;
        border: none;
        padding: 0.55rem 2rem;
        font-size: 1rem;
        box-shadow: 0 4px 10px rgba(24, 99, 181, 0.4);
        transition: 13s;
        position: relative;
        left: 50%;
        transform: translateX(-50%);
    }

    .btn-submit:hover {
        background-color: #f5a623;
        /* box-shadow: 0 6px 14px rgba(20,90,156,0.6); */
    }

    /* Toast */
    #feedbackToast {
        position: absolute;
        top: 15px;
        left: 50%;
        transform: translateX(-50%);
        background: #4caf50;
        color: white;
        padding: 10px 20px;
        border-radius: 6px;
        opacity: 0;
        transition: opacity 0.5s;
        z-index: 100002;
        pointer-events: none;
    }

    div.data {
        margin: 20px;
    }
</style>

<script>
    const overlay = document.getElementById('feedbackOverlay');
    const closeBtn = document.getElementById('closeFeedback');
    const toast = document.getElementById('feedbackToast');
    let selectedRating = 0;

    function showToast(message, color = '#4caf50') {
        toast.innerText = message;
        toast.style.background = color;
        toast.style.opacity = '1';
        setTimeout(() => {
            toast.style.opacity = '0';
        }, 2500);
    }

    document.querySelectorAll('.feedback-trigger').forEach(el => {
        el.addEventListener('click', () => overlay.classList.toggle('active'));
    });
    overlay.addEventListener('click', e => {
        if (e.target === overlay) overlay.classList.remove('active');
    });
    closeBtn.addEventListener('click', () => overlay.classList.remove('active'));

    document.querySelectorAll('#star-rating .star').forEach(star => {
        star.addEventListener('click', function() {
            const value = this.getAttribute('data-value');
            selectedRating = value;
            document.querySelectorAll('#star-rating .star').forEach(s => s.classList.remove(
                'selected'));
            document.querySelectorAll('#star-rating .star').forEach(s => {
                if (s.getAttribute('data-value') <= value) s.classList.add('selected');
            });
        });
    });
    document.getElementById('submitFeedback').addEventListener('click', () => {
        const name = document.getElementById('name').value || 'Anonymous';
        const message = document.getElementById('message').value;

        if (!selectedRating) {
            showToast('Please select a star rating!', '#f44336');
            return;
        }
        if (!message) {
            showToast('Message is required!', '#f44336');
            return;
        }

        const formData = new FormData();
        formData.append("name", name);
        formData.append("rate", selectedRating);
        formData.append("message", message);
        formData.append("_token", "{{ csrf_token() }}");

        fetch("{{ route('fronted.contact.feedback') }}", {
                method: "POST",
                body: formData
            })
            .then(async res => {
                try {
                    const data = await res.json();
                    showToast(data.message || 'Thanks for your feedback!');
                } catch (e) {
                    showToast('Thanks for your feedback!');
                }
                setTimeout(() => overlay.classList.remove('active'), 2000);
            })
            .catch(err => {
                showToast('Something went wrong!', '#f44336');
            });
    });
</script>
