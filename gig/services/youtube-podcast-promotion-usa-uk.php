<?php
// SEO Settings
$pageTitle = "MUH Nirob: Elite Podcast & YouTube Promotion";
$pageDescription = "Grow your podcast or YouTube channel with MUH Nirob’s premium services for sports, tech, lifestyle, and business in USA, UK, Canada, Australia.";
$keywords = "podcast promotion USA, YouTube promotion UK, MUH Nirob podcast marketing, NirobTech YouTube growth, sports podcast, tech YouTube, lifestyle, business niche";
$slug = "/contact";
$ogImage = "https://nirobtech.com/images/muh-nirob-hero.jpg";

// Form Handling
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $youtubeLink = htmlspecialchars($_POST['youtube-link']);
    $podcastLink = htmlspecialchars($_POST['podcast-link']);
    $to = 'nirob@nirobtech.com';
    $subject = 'New Promotion Inquiry from NirobTech';
    $message = "Name: $name\nEmail: $email\nYouTube: $youtubeLink\nPodcast: $podcastLink";
    $headers = "From: no-reply@nirobtech.com";
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        mail($to, $subject, $message, $headers);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>
    <meta name="description" content="<?php echo $pageDescription; ?>">
    <meta name="keywords" content="<?php echo $keywords; ?>">
    <meta name="author" content="MUH Nirob, NirobTech">
    <meta name="robots" content="index, follow">
    <!-- Open Graph & Twitter -->
    <meta property="og:title" content="<?php echo $pageTitle; ?>">
    <meta property="og:description" content="<?php echo $pageDescription; ?>">
    <meta property="og:image" content="<?php echo $ogImage; ?>">
    <meta property="og:url" content="https://nirobtech.com<?php echo $slug; ?>">
    <meta property="og-type" content="website">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@MUHNirob">
    <meta name="twitter:image" content="<?php echo $ogImage; ?>">
    <!-- Schema -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Service",
        "serviceType": "Podcast & YouTube Promotion",
        "provider": {
            "@type": "Organization",
            "name": "MUH Nirob - NirobTech",
            "url": "https://nirobtech.com",
            "logo": "https://nirobtech.com/images/logo.png"
        },
        "areaServed": ["United States", "United Kingdom", "Canada", "Australia"],
        "description": "Premium promotion for sports, tech, lifestyle, and business content."
    }
    </script>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "FAQPage",
        "mainEntity": [
            {
                "@type": "Question",
                "name": "How fast can my podcast grow?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Expect growth in 2-4 weeks with our niche-focused strategies."
                }
            },
            {
                "@type": "Question",
                "name": "Can you promote business content?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, we amplify business podcasts and YouTube channels globally."
                }
            }
        ]
    }
    </script>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #0a0f3f, #5a1fe4);
            color: #fff;
            overflow-x: hidden;
        }
        .hero-section {
            background: url('<?php echo $ogImage; ?>') center/cover no-repeat;
            height: 80vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            animation: fadeIn 1.5s ease-in-out;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: none; }
        }
        .card, .service-card, .niche-card, .test-card {
            background: #fff;
            color: #111827;
            border-radius: 12px;
            padding: 1.5rem;
            margin-bottom: 1rem;
            box-shadow: 0 8px 16px rgba(0,0,0,0.2);
            transition: transform 0.3s ease;
        }
        .card:hover, .service-card:hover, .niche-card:hover, .test-card:hover {
            transform: translateY(-5px);
        }
        .service-card img, .niche-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 8px;
        }
        .test-card img {
            width: 60px;
            height: 60px;
            border-radius: 50%;
        }
        .chatbot {
            position: fixed;
            bottom: 80px;
            z-index: 1000;
            width: 280px;
            background: #f9fafb;
            border-radius: 12px;
            box-shadow: 0 8px 16px rgba(0,0,0,0.3);
            padding: 1rem;
            display: none;
            animation: slideIn 0.5s ease;
        }
        @keyframes slideIn {
            from { transform: translateY(50px); opacity: 0; }
            to { transform: none; opacity: 1; }
        }
        .chatbot.left { left: 12px; }
        .chatbot.right { right: 12px; }
        .chatbot img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin-bottom: 0.5rem;
        }
        .chatbot .message { font-size: 0.9rem; color: #111827; margin-bottom: 0.5rem; }
        .chatbot .stat { font-size: 0.8rem; color: #dc2626; margin-bottom: 0.5rem; }
        .chatbot .faq { font-size: 0.75rem; color: #374151; margin-bottom: 0.5rem; }
        .chatbot .countdown { font-size: 0.8rem; color: #dc2626; margin-bottom: 0.5rem; }
        .chatbot input {
            width: 100%;
            padding: 0.5rem;
            border-radius: 6px;
            border: 1px solid #d1d5db;
            margin-bottom: 0.5rem;
            font-size: 0.8rem;
            color: #111827;
            background: #fff;
        }
        .chatbot input::placeholder { color: #9ca3af; }
        .chatbot a { transition: transform 0.3s ease; }
        .chatbot a:hover { transform: scale(1.05); }
        .chatbot-toggle {
            position: fixed;
            bottom: 12px;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: #ffd700;
            color: #0a0f3f;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            z-index: 1001;
            transition: transform 0.3s ease;
        }
        .chatbot-toggle:hover { transform: scale(1.1); }
        .chatbot-toggle.left { left: 12px; }
        .chatbot-toggle.right { right: 12px; }
        .share-toggle {
            position: fixed;
            bottom: 12px;
            left: 50%;
            transform: translateX(-50%);
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: #ffd700;
            color: #0a0f3f;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            z-index: 1001;
            transition: transform 0.3s ease;
        }
        .share-toggle:hover { transform: scale(1.1); }
        .share-menu {
            position: fixed;
            bottom: 80px;
            left: 50%;
            transform: translateX(-50%);
            background: #f9fafb;
            border-radius: 12px;
            box-shadow: 0 8px 16px rgba(0,0,0,0.3);
            padding: 1rem;
            display: none;
            animation: slideIn 0.5s ease;
            z-index: 1000;
        }
        .share-menu a {
            display: inline-flex;
            margin: 0 0.5rem;
            transition: transform 0.3s ease;
        }
        .share-menu a:hover { transform: scale(1.2); }
        .faq-card {
            background: linear-gradient(135deg, #f3f4f6, #e5e7eb);
            color: #111827;
            border-radius: 8px;
            margin-bottom: 0.5rem;
            cursor: pointer;
            transition: box-shadow 0.3s ease;
        }
        .faq-card:hover { box-shadow: 0 4px 8px rgba(0,0,0,0.2); }
        .faq-card .question {
            padding: 0.75rem;
            font-size: 0.9rem;
            font-weight: 500;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .faq-card .answer {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease, padding 0.3s ease;
            padding: 0 0.75rem;
        }
        .faq-card.active .answer {
            max-height: 200px;
            padding: 0.75rem;
        }
        .faq-card .arrow { transition: transform 0.3s ease; }
        .faq-card.active .arrow { transform: rotate(180deg); }
        .form-input, .form-button {
            transition: all 0.3s ease;
        }
        .form-input:focus {
            border-color: #ffd700;
            box-shadow: 0 0 4px rgba(255,215,0,0.3);
        }
        .form-button:hover { background: #eab308; }
        @media (max-width: 360px) {
            .hero-section { height: 60vh; }
            .hero-section h1 { font-size: 1.5rem; }
            .service-card img, .niche-card img { height: 160px; }
            .chatbot { width: 240px; padding: 0.75rem; }
            .chatbot .message { font-size: 0.8rem; }
            .chatbot input { font-size: 0.75rem; }
            .share-menu { width: 240px; }
            .faq-card .question { font-size: 0.8rem; }
            .form-input, .form-button { font-size: 0.75rem; }
        }
        @media (min-width: 361px) and (max-width: 768px) {
            .hero-section { height: 70vh; }
            .hero-section h1 { font-size: 2rem; }
            .service-card img, .niche-card img { height: 180px; }
            .chatbot { width: 260px; }
            .share-menu { width: 260px; }
            .faq-card .question { font-size: 0.85rem; }
        }
        @media (min-width: 769px) {
            .hero-section h1 { font-size: 3rem; }
            .service-card img, .niche-card img { height: 200px; }
            .chatbot { width: 280px; }
            .share-menu { width: 300px; }
        }
        [data-browser*="chrome"], [data-browser*="firefox"], [data-browser*="safari"], [data-browser*="edge"] {
            /* Ensure cross-browser compatibility */
            display: block;
        }
    </style>
</head>
<body data-browser="unknown">
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container mx-auto px-4">
            <h1 class="text-2xl md:text-4xl font-bold mb-4 font-[Montserrat]">Skyrocket Your Content with MUH Nirob</h1>
            <p class="text-sm md:text-lg mb-6">Premium Podcast & YouTube Promotion for Sports, Tech, Lifestyle, Business</p>
            <a href="https://nirobtech.com/contact" class="inline-block bg-yellow-400 text-blue-900 font-bold py-2 px-6 rounded-full hover:bg-yellow-500 transition-colors animate-pulse text-sm">Contact Us</a>
        </div>
    </section>

    <!-- Trust Badge -->
    <section class="container mx-auto py-6 px-4">
        <div class="card text-center bg-yellow-400 text-blue-900">
            <p class="text-sm md:text-base font-semibold">Trusted by <span id="trustCounter">0</span>+ Creators</p>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="container mx-auto py-8 px-4">
        <h2 class="text-2xl md:text-3xl font-bold text-center mb-6 font-[Montserrat]">Our Premium Services</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="service-card">
                <img src="https://nirobtech.com/images/podcast-service.jpg" alt="Podcast Promotion" loading="lazy">
                <h3 class="text-lg md:text-xl font-semibold mt-3">Podcast Promotion</h3>
                <p class="text-sm mt-2">Boost your podcast in sports or business niches globally.</p>
                <a href="https://nirobtech.com/contact" class="inline-block bg-yellow-400 text-blue-900 font-bold py-2 px-4 rounded-full mt-3 hover:bg-yellow-500 transition-colors text-sm">Contact Us</a>
            </div>
            <div class="service-card">
                <img src="https://nirobtech.com/images/youtube-service.jpg" alt="YouTube Promotion" loading="lazy">
                <h3 class="text-lg md:text-xl font-semibold mt-3">YouTube Promotion</h3>
                <p class="text-sm mt-2">Grow your YouTube channel in tech or lifestyle niches.</p>
                <a href="https://nirobtech.com/contact" class="inline-block bg-yellow-400 text-blue-900 font-bold py-2 px-4 rounded-full mt-3 hover:bg-yellow-500 transition-colors text-sm">Contact Us</a>
            </div>
        </div>
    </section>

    <!-- Niches Section -->
    <section class="container mx-auto py-8 px-4 bg-gray-50">
        <h2 class="text-2xl md:text-3xl font-bold text-center mb-6 text-blue-900 font-[Montserrat]">Your Content, Our Reach</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="niche-card">
                <img src="https://nirobtech.com/images/sports-niche.jpg" alt="Sports Content">
                <h3 class="text-lg md:text-xl font-semibold mt-3">Sports Content</h3>
                <p class="text-sm mt-2">Reach sports fans globally.</p>
                <a href="https://nirobtech.com/contact" class="inline-block bg-yellow-400 text-blue-900 font-bold py-2 px-4 rounded-full mt-3 hover:bg-yellow-500 transition-colors text-sm">Contact Us</a>
            </div>
            <div class="niche-card">
                <img src="https://nirobtech.com/images/tech-lifestyle-niche.jpg" alt="Tech & Lifestyle">
                <h3 class="text-lg md:text-xl font-semibold mt-3">Tech & Lifestyle</h3>
                <p class="text-sm mt-2">Engage tech and lifestyle audiences.</p>
                <a href="https://nirobtech.com/contact" class="inline-block bg-yellow-400 text-blue-900 font-bold py-2 px-4 rounded-full mt-3 hover:bg-yellow-500 transition-colors text-sm">Contact Us</a>
            </div>
            <div class="niche-card">
                <img src="https://nirobtech.com/images/business-niche.jpg" alt="Business Content">
                <h3 class="text-lg md:text-xl font-semibold mt-3">Business Content</h3>
                <p class="text-sm mt-2">Amplify your business content.</p>
                <a href="https://nirobtech.com/contact" class="inline-block bg-yellow-400 text-blue-900 font-bold py-2 px-4 rounded-full mt-3 hover:bg-yellow-500 transition-colors text-sm">Contact Us</a>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="container mx-auto py-8 px-4">
        <h2 class="text-2xl md:text-3xl font-bold text-center mb-6 font-[Montserrat]">What Creators Say</h2>
        <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
            <div class="test-card text-center">
                <img src="https://nirobtech.com/images/client-usa.jpg" alt="Client USA" class="mx-auto">
                <p class="text-sm mt-2 italic">"My sports podcast exploded!"</p>
                <p class="text-sm font-semibold mt-1">Alex, USA</p>
            </div>
            <div class="test-card text-center">
                <img src="https://nirobtech.com/images/client-uk.jpg" alt="Client UK" class="mx-auto">
                <p class="text-sm mt-2 italic">"Tech channel grew fast!"</p>
                <p class="text-sm font-semibold mt-1">Emma, UK</p>
            </div>
            <div class="test-card text-center">
                <img src="https://nirobtech.com/images/client-canada.jpg" alt="Client Canada" class="mx-auto">
                <p class="text-sm mt-2 italic">"Business podcast soared!"</p>
                <p class="text-sm font-semibold mt-1">Liam, Canada</p>
            </div>
            <div class="test-card text-center">
                <img src="https://nirobtech.com/images/client-australia.jpg" alt="Client Australia" class="mx-auto">
                <p class="text-sm mt-2 italic">"Lifestyle videos viral!"</p>
                <p class="text-sm font-semibold mt-1">Zoe, Australia</p>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="container mx-auto py-8 px-4">
        <h2 class="text-2xl md:text-3xl font-bold text-center mb-6 font-[Montserrat]">Frequently Asked Questions</h2>
        <div class="max-w-3xl mx-auto">
            <div class="faq-card">
                <div class="question">
                    <span>How fast can my podcast grow?</span>
                    <svg class="arrow w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </div>
                <div class="answer"><p class="text-sm">Growth in 2-4 weeks with our strategies.</p></div>
            </div>
            <div class="faq-card">
                <div class="question">
                    <span>Can you promote YouTube globally?</span>
                    <svg class="arrow w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </div>
                <div class="answer"><p class="text-sm">Yes, we target USA, UK, Canada, Australia.</p></div>
            </div>
            <div class="faq-card">
                <div class="question">
                    <span>Do you promote business content?</span>
                    <svg class="arrow w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </div>
                <div class="answer"><p class="text-sm">Absolutely, we boost business podcasts and videos.</p></div>
            </div>
            <div class="faq-card">
                <div class="question">
                    <span>Which platforms do you support?</span>
                    <svg class="arrow w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </div>
                <div class="answer"><p class="text-sm">Spotify, Apple Podcasts, YouTube, SoundCloud, Vimeo.</p></div>
            </div>
            <div class="faq-card">
                <div class="question">
                    <span>How do you boost engagement?</span>
                    <svg class="arrow w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </div>
                <div class="answer"><p class="text-sm">Polls, audiograms, Q&A, and social campaigns.</p></div>
            </div>
            <div class="faq-card">
                <div class="question">
                    <span>Are your methods safe?</span>
                    <svg class="arrow w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </div>
                <div class="answer"><p class="text-sm">100% safe, white-hat SEO techniques.</p></div>
            </div>
            <div class="faq-card">
                <div class="question">
                    <span>Do you provide analytics?</span>
                    <svg class="arrow w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </div>
                <div class="answer"><p class="text-sm">Detailed reports on growth and engagement.</p></div>
            </div>
            <div class="faq-card">
                <div class="question">
                    <span>Can you promote niche content?</span>
                    <svg class="arrow w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </div>
                <div class="answer"><p class="text-sm">Yes, sports, tech, lifestyle, business niches.</p></div>
            </div>
            <div class="faq-card">
                <div class="question">
                    <span>How do I get started?</span>
                    <svg class="arrow w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </div>
                <div class="answer"><p class="text-sm">Contact us to begin your journey!</p></div>
            </div>
            <div class="faq-card">
                <div class="question">
                    <span>Why choose NirobTech?</span>
                    <svg class="arrow w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </div>
                <div class="answer"><p class="text-sm">Proven results, global reach, 15,000+ creators.</p></div>
            </div>
            <div class="faq-card">
                <div class="question">
                    <span>What’s the cost?</span>
                    <svg class="arrow w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </div>
                <div class="answer"><p class="text-sm">Contact us for custom pricing.</p></div>
            </div>
            <div class="faq-card">
                <div class="question">
                    <span>Do you offer refunds?</span>
                    <svg class="arrow w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </div>
                <div class="answer"><p class="text-sm">Contact us to discuss our policies.</p></div>
            </div>
        </div>
    </section>

    <!-- Contact Form -->
    <section class="container mx-auto py-8 px-4 bg-gray-50">
        <h2 class="text-2xl md:text-3xl font-bold text-center mb-6 text-blue-900 font-[Montserrat]">Get Started Today</h2>
        <form method="POST" class="max-w-md mx-auto" onsubmit="return validateForm()">
            <input type="text" name="name" id="name" placeholder="Your Name" required class="form-input w-full p-2 mb-3 rounded-lg border border-gray-300 text-sm">
            <input type="email" name="email" id="email" placeholder="Your Email" required class="form-input w-full p-2 mb-3 rounded-lg border border-gray-300 text-sm">
            <input type="url" name="youtube-link" id="youtube-link" placeholder="YouTube Channel Link" class="form-input w-full p-2 mb-3 rounded-lg border border-gray-300 text-sm">
            <input type="url" name="podcast-link" id="podcast-link" placeholder="Podcast Link" class="form-input w-full p-2 mb-3 rounded-lg border border-gray-300 text-sm">
            <button type="submit" name="submit" class="form-button w-full bg-yellow-400 text-blue-900 font-bold py-2 rounded-lg hover:bg-yellow-500 text-sm">Submit</button>
            <p class="text-center text-sm mt-3">Questions? <a href="https://nirobtech.com/contact" class="text-blue-900 underline hover:text-blue-700">Contact Us</a></p>
        </form>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-8">
        <div class="container mx-auto px-4 text-center">
            <h3 class="text-lg md:text-2xl font-bold mb-4 font-[Montserrat]">Join MUH Nirob</h3>
            <form class="max-w-sm mx-auto mb-4">
                <input type="email" placeholder="Your Email" class="w-full p-2 rounded-md text-gray-900 text-sm mb-3">
                <a href="https://nirobtech.com/contact" class="inline-block bg-yellow-400 text-blue-900 font-bold py-2 px-5 rounded-full hover:bg-yellow-500 text-sm">Contact Us</a>
            </form>
            <div>
                <a href="https://x.com/MUHNirob" target="_blank" class="text-white mx-2 hover:underline text-sm">X</a>
                <a href="https://nirobtech.com/contact" class="text-white mx-2 hover:underline text-sm">Contact</a>
            </div>
            <p class="mt-4 text-sm">© 2025 MUH Nirob - NirobTech. All Rights Reserved.</p>
        </div>
    </footer>

    <!-- Chatbots -->
    <div class="chatbot left" id="podcastChatbot">
        <img src="https://nirobtech.com/images/podcast-bot.jpg" alt="Podcast Bot">
        <div class="message" id="podcastMessage">Hey Creator, boost your podcast!</div>
        <div class="stat">4,000+ Podcasts Promoted!</div>
        <div class="faq">Q: How fast? A: 2-4 weeks!</div>
        <div class="faq">Q: Platforms? A: Spotify, Apple!</div>
        <div class="faq">Q: Safe? A: White-hat SEO!</div>
        <div class="faq">Q: Sports? A: Yes!</div>
        <div class="countdown" id="podcastCountdown">Offer Ends: 2:00</div>
        <input type="text" placeholder="Your Name" id="podcastName">
        <a href="https://www.profitabler.com/q50i8hhww?key=c9f2fcf4e4236d197a23cc4d2405c35e" class="inline-block bg-blue-600 text-white font-bold py-2 px-4 rounded-full hover:bg-blue-700 text-sm">Get Started</a>
    </div>
    <div class="chatbot right" id="youtubeChatbot">
        <img src="https://nirobtech.com/images/youtube-bot.jpg" alt="YouTube Bot">
        <div class="message" id="youtubeMessage">Hey Creator, grow your YouTube!</div>
        <div class="stat">12M+ Views Generated!</div>
        <div class="faq">Q: Subscribers? A: Global!</div>
        <div class="faq">Q: Rankings? A: Top SEO!</div>
        <div class="faq">Q: Safe? A: Ethical!</div>
        <div class="faq">Q: Tech? A: Yes!</div>
        <div class="countdown" id="youtubeCountdown">Offer Ends: 2:00</div>
        <input type="text" placeholder="Your Name" id="youtubeName">
        <a href="https://www.profitabler.com/ejvxn2t4wn?key=dcc30e11dd326b70ccdb63ac5b6e22fb" class="inline-block bg-red-600 text-white font-bold py-2 px-4 rounded-full hover:bg-red-700 text-sm">Get Started</a>
    </div>
    <div class="chatbot-toggle left" onclick="toggleChatbot('podcastChatbot')">
        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10zm0-2a8 8 0 110-16 8 8 0 010 16zm-2-6h4v2h-4v-2zm0-4h4v2h-4v-2z"></path></svg>
    </div>
    <div class="chatbot-toggle right" onclick="toggleChatbot('youtubeChatbot')">
        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M23.5 6.5a3.3 3.3 0 00-2.3-2.3C19.4 3.5 12 3.5 12 3.5s-7.4 0-9.2.7a3.3 3.3 0 00-2.3 2.3C0 8.4 0 12 0 12s0 3.6.7 5.3a3.3 3.3 0 002.3 2.3c1.8.7 9.2.7 9.2.7s7.4 0 9.2-.7a3.3 3.3 0 002.3-2.3c.7-1.7.7-5.3.7-5.3s0-3.6-.7-5.3zM9.5 16.5v-9l6 4.5-6 4.5z"></path></svg>
    </div>
    <!-- Share Button -->
    <div class="share-toggle" onclick="toggleShareMenu()">
        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M18 16.08c-.76 0-1.44.3-1.96.77L8.91 12.7c.05-.23.09-.46.09-.7s-.04-.47-.09-.7l7.05-4.11c.54.5 1.25.81 2.04.81 1.66 0 3-1.34 3-3s-1.34-3-3-3-3 1.34-3 3c0 .24.04.47.09.7L8.04 9.81C7.5 9.31 6.79 9 6 9c-1.66 0-3 1.34-3 3s1.34 3 3 3c.79 0 1.5-.31 2.04-.81l7.12 4.16c-.05.21-.08.43-.08.65 0 1.61 1.31 2.92 2.92 2.92s2.92-1.31 2.92-2.92c0-1.61-1.31-2.92-2.92-2.92zM18 4c.55 0 1 .45 1 1s-.45 1-1 1-1-.45-1-1 .45-1 1-1zM6 13c-.55 0-1-.45-1-1s.45-1 1-1 1 .45 1 1-.45 1-1 1zm12 7.02c-.55 0-1-.45-1-1s.45-1 1-1 1 .45 1 1-.45 1-1 1z"></path></svg>
    </div>
    <div class="share-menu" id="shareMenu">
        <a href="https://x.com/intent/tweet?url=https://nirobtech.com<?php echo $slug; ?>&text=<?php echo urlencode($pageTitle); ?>" target="_blank">
            <svg class="w-6 h-6 text-blue-600" fill="currentColor" viewBox="0 0 24 24"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"></path></svg>
        </a>
        <a href="https://www.facebook.com/sharer/sharer.php?u=https://nirobtech.com<?php echo $slug; ?>" target="_blank">
            <svg class="w-6 h-6 text-blue-800" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"></path></svg>
        </a>
        <a href="https://www.linkedin.com/shareArticle?url=https://nirobtech.com<?php echo $slug; ?>&title=<?php echo urlencode($pageTitle); ?>" target="_blank">
            <svg class="w-6 h-6 text-blue-500" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.920-2.063 2.063-2.063 1.140 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0z"></path></svg>
        </a>
        <a href="https://api.whatsapp.com/send?text=<?php echo urlencode($pageTitle . ' https://nirobtech.com' . $slug); ?>" target="_blank">
            <svg class="w-6 h-6 text-green-500" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.198-.347.223-.644.075-.297-.148-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.134.297-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.074-.149-.669-.816-.911-1.115-.241-.297-.436-.297-.645-.198-.198.099-.471.496-.669.694-.198.198-.297.397-.446.595-.148.198-.347.446-.595.644-.247.198-.52.347-.868.446-.347.099-.644.099-.941 0-.297-.099-1.255-.471-1.827-.966-.571-.495-1.083-1.086-1.255-1.782-.173-.694-.074-1.289.223-1.786.297-.496.694-.943 1.04-1.29.347-.347.694-.645 1.04-.943.347-.297.694-.496.991-.645.297-.149.595-.099.892 0 .297.099.595.397.892.694.297.297.595.645.892.943.297.297.496.694.595.991.099.297.099.595 0 .892-.099.297-.397.595-.694.892-.297.297-.595.496-.892.694zM12 0C5.373 0 0 5.373 0 12s5.373 12 12 12 12-5.373 12-12S18.627 0 12 0z"></path></svg>
        </a>
        <a href="https://pinterest.com/pin/create/button/?url=https://nirobtech.com<?php echo $slug; ?>&media=<?php echo $ogImage; ?>&description=<?php echo urlencode($pageDescription); ?>" target="_blank">
            <svg class="w-6 h-6 text-red-600" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0C5.373 0 0 5.373 0 12c0 5.085 3.163 9.426 7.627 11.174-.105-.949-.2-2.405.042-3.441.218-.937 1.407-5.965 1.407-5.965s-.359-.719-.359-1.781c0-1.669.967-2.914 2.171-2.914 1.023 0 1.518.769 1.518 1.69 0 1.029-.653 2.567-.992 3.992-.285 1.193.6 2.165 1.775 2.165 2.128 0 3.768-2.245 3.768-5.487 0-2.861-2.063-4.869-5.008-4.869-3.41 0-5.409 2.562-5.409 5.199 0 1.033.394 2.143.886 2.741.099.119.112.243.083.364l-.333 1.36c-.027.108-.141.157-.252.124-1.878-.604-3.046-2.499-3.046-4.013 0-3.248 2.708-6.231 7.65-6.231 4.012 0 7.139 2.861 7.139 6.696 0 3.987-2.513 7.198-5.998 7.198-1.173 0-2.275-.611-2.652-1.333l-.722 2.745c-.262 1.017-.964 2.283-1.435 3.056C17.309 21.684 20.573 17.652 20.573 12 20.573 5.373 15.2 0 12 0z"></path></svg>
        </a>
        <a href="https://www.instagram.com/?url=https://nirobtech.com<?php echo $slug; ?>" target="_blank">
            <svg class="w-6 h-6 text-pink-600" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 1.366.062 2.633.336 3.608 1.311.975.975 1.25 2.242 1.311 3.608.058 1.266.07 1.646.07 4.85s-.012 3.584-.07 4.85c-.062 1.366-.336 2.633-1.311 3.608-.975.975-2.242 1.25-3.608 1.311-1.266.058-1.646.07-4.85.07s-3.584-.012-4.85-.07c-1.366-.062-2.633-.336-3.608-1.311-.975-.975-1.25-2.242-1.311-3.608-.058-1.266-.07-1.646-.07-4.85s.012-3.584.07-4.85c.062-1.366.336-2.633 1.311-3.608.975-.975 2.242-1.25 3.608-1.311 1.266-.058 1.646-.07 4.85-.07zM12 0C8.741 0 8.332.014 7.052.072 5.771.13 4.407.404 3.333 1.479 2.258 2.553 1.984 3.917 1.926 5.198.868 6.478.854 6.887.854 12s.014 5.522.072 6.802c.058 1.281.332 2.645 1.407 3.719 1.074 1.074 2.438 1.348 3.719 1.407 1.28.058 1.689.072 6.802.072s5.522-.014 6.802-.072c1.281-.058 2.645-.332 3.719-1.407 1.074-1.074 1.348-2.438 1.407-3.719.058-1.28.072-1.689.072-6.802s-.014-5.522-.072-6.802c-.058-1.281-.332-2.645-1.407-3.719-1.074-1.074-2.438-1.348-3.719-1.407C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zm0 10.162a3.999 3.999 0 110-7.998 3.999 3.999 0 010 7.998zm6.406-11.845a1.44 1.44 0 11-2.881 0 1.44 1.44 0 012.881 0z"></path></svg>
        </a>
    </div>

    <!-- JavaScript -->
    <script>
        // Browser Detection
        const userAgent = navigator.userAgent.toLowerCase();
        const browser = document.body;
        if (userAgent.includes('chrome')) browser.dataset.browser = 'chrome';
        else if (userAgent.includes('firefox')) browser.dataset.browser = 'firefox';
        else if (userAgent.includes('safari')) browser.dataset.browser = 'safari';
        else if (userAgent.includes('edg')) browser.dataset.browser = 'edge';
        else if (userAgent.includes('samsung')) browser.dataset.browser = 'samsung';

        // Trust Counter
        function animateCounter() {
            let count = 0;
            const target = 15000;
            const counter = document.getElementById('trustCounter');
            const interval = setInterval(() => {
                count += 250;
                if (count >= target) {
                    count = target;
                    clearInterval(interval);
                }
                counter.textContent = count.toLocaleString();
            }, 50);
        }

        // Chatbot Toggle
        function toggleChatbot(id) {
            const chatbot = document.getElementById(id);
            chatbot.style.display = chatbot.style.display === 'none' ? 'block' : 'none';
        }

        // Share Menu Toggle
        function toggleShareMenu() {
            const shareMenu = document.getElementById('shareMenu');
            shareMenu.style.display = shareMenu.style.display === 'none' ? 'block' : 'none';
        }

        // Chatbot Messages
        const podcastMessages = [
            "Hey {name}, skyrocket your podcast!",
            "Grow your sports podcast fast!",
            "Want 300K listeners, {name}?",
            "Reach UK, AU fans now!",
            "Boost your business podcast!",
            "Trend on Spotify, {name}!",
            "Go viral with your podcast!",
            "Unlock global listeners!",
            "Shine on Apple Podcasts!",
            "Amplify sports content!",
            "Your podcast, our reach!",
            "Podcast stardom awaits!",
            "Grow listeners in 2 weeks!",
            "Dominate business niches!",
            "Hey {name}, ready to shine?",
            "Launch your podcast now!",
            "Global reach for sports!",
            "Be the next podcast star!"
        ];
        const youtubeMessages = [
            "Hey {name}, grow your YouTube!",
            "Want 300K subscribers fast?",
            "Boost tech videos, {name}!",
            "Go viral in USA, UK!",
            "Skyrocket lifestyle channel!",
            "Trend on YouTube now!",
            "Unlock global subscribers!",
            "Rank high with SEO!",
            "Shine in tech niches!",
            "Your channel, our reach!",
            "Get 75M views, {name}!",
            "YouTube stardom awaits!",
            "Grow in 2-4 weeks!",
            "Lead lifestyle YouTube!",
            "Hey {name}, ready to grow?",
            "Boost your videos now!",
            "Global reach for tech!",
            "Be the next YouTube star!"
        ];

        // Countdown Timer
        function startCountdown(elementId) {
            let time = 120;
            const element = document.getElementById(elementId);
            const timer = setInterval(() => {
                if (time <= 0) time = 120;
                const minutes = Math.floor(time / 60);
                const seconds = time % 60;
                element.textContent = `Offer Ends: ${minutes}:${seconds < 10 ? '0' : ''}${seconds}`;
                time--;
            }, 1000);
        }

        // Update Chatbot Messages
        function updateChatbotMessages() {
            const podcastName = document.getElementById('podcastName').value || 'Creator';
            const youtubeName = document.getElementById('youtubeName').value || 'Creator';
            const podcastMsg = document.getElementById('podcastMessage');
            const youtubeMsg = document.getElementById('youtubeMessage');
            podcastMsg.textContent = podcastMessages[Math.floor(Math.random() * podcastMessages.length)].replace('{name}', podcastName);
            youtubeMsg.textContent = youtubeMessages[Math.floor(Math.random() * youtubeMessages.length)].replace('{name}', youtubeName);
        }

        // Form Validation
        function validateForm() {
            const email = document.getElementById('email').value;
            if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
                alert('Please enter a valid email.');
                return false;
            }
            return true;
        }

        // FAQ Accordion
        document.querySelectorAll('.faq-card').forEach(card => {
            card.addEventListener('click', () => {
                card.classList.toggle('active');
            });
        });

        // Initialize
        animateCounter();
        setInterval(updateChatbotMessages, 1500);
        updateChatbotMessages();
        startCountdown('podcastCountdown');
        startCountdown('youtubeCountdown');
        document.getElementById('podcastName').addEventListener('input', updateChatbotMessages);
        document.getElementById('youtubeName').addEventListener('input', updateChatbotMessages);
    </script>
</body>
</html>
