<?php
/**
 * Nirob Tech - Redefining Digital Excellence with AI
 * Welcome to Nirob Tech, a pioneer in AI Integration, Podcast Websites, and AI Chatbot solutions.
 * Targeting 500 projects for international business owners in USA, UK, Canada, and Australia by 2025.
 * Contact: contact@nirobtech.com | Fiverr: https://www.fiverr.com/users/muhnirob?ref=1083553
 */

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    
    $to = "contact@nirobtech.com";
    $subject = "New Contact from Nirob Tech";
    $body = "Name: $name\nEmail: $email\nMessage: $message";
    $headers = "From: $email\r\nReply-To: $email\r\nContent-Type: text/plain; charset=UTF-8";
    
    if (mail($to, $subject, $body, $headers)) {
        $success = "Message sent successfully!";
    } else {
        $error = "Failed to send message. Please try again.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Nirob Tech offers AI Integration, Podcast Websites, and AI Chatbots with 80% discount for first 10 clients + lifetime support. Targeting 500 projects in USA, UK, Canada, Australia by 2025.">
    <meta name="keywords" content="AI Integration, Podcast Website, AI Chatbot, 80% Discount, Lifetime Support, Nirob Tech, USA, UK, Canada, Australia, 2025, AI Chatbot Cost, Podcast Website SEO">
    <meta name="author" content="Nirob Tech">
    <meta name="robots" content="index, follow">
    <meta name="geo.region" content="USA, UK, Canada, Australia">
    <meta name="geo.country" content="Global">

    <!-- Open Graph -->
    <meta property="og:title" content="Nirob Tech - 80% Discount on AI Solutions 2025">
    <meta property="og:description" content="First 10 clients get 80% discount + lifetime support on AI Integration, Podcast Websites, and AI Chatbots. Targeting 500 projects by 2025.">
    <meta property="og:image" content="https://nirobtech.com/images/nirob-tech-og-image-usa-uk-2025.jpg">
    <meta property="og:url" content="https://nirobtech.com">
    <meta property="og:type" content="website">
    
    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Nirob Tech - 80% Discount on AI Solutions 2025">
    <meta name="twitter:description" content="First 10 clients get 80% discount + lifetime support on AI-powered services. Targeting 500 projects by 2025.">
    <meta name="twitter:image" content="https://nirobtech.com/images/nirob-tech-og-image-usa-uk-2025.jpg">
    
    <!-- Schema.org -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "Nirob Tech",
        "url": "https://nirobtech.com",
        "logo": "https://nirobtech.com/images/nirob-tech-logo-usa-uk-2025.png",
        "contactPoint": {
            "@type": "ContactPoint",
            "email": "contact@nirobtech.com",
            "contactType": "Customer Support",
            "areaServed": ["US", "CA", "UK", "AU"]
        },
        "sameAs": [
            "#social-link-1",
            "#social-link-2",
            "#social-link-3",
            "#social-link-4",
            "#social-link-5",
            "https://www.fiverr.com/users/muhnirob?ref=1083553"
        ]
    }
    </script>
    
    <title>Nirob Tech - 80% Discount on AI Integration, Chatbots & Podcast Websites 2025</title>
    
    <!-- Favicon -->
    <link rel="icon" href="nirob-tech-favicon-usa-uk-2025.ico">
    
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Roboto:wght@400;500;700&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Swiper.js -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    
    <!-- Custom CSS -->
    <style>
        body {
            font-family: 'Poppins', 'Roboto', 'Inter', sans-serif;
            background: linear-gradient(135deg, #1e3a8a, #2563eb, #059669);
            scroll-behavior: smooth;
            color: #fff;
        }
        .section-card {
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
            backdrop-filter: blur(25px);
            background: rgba(255, 255, 255, 0.12);
            border-radius: 20px;
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        .section-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.6);
        }
        .animate-hero, .animate-section {
            animation: fadeInUp 1.5s ease-in-out;
        }
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(50px); }
            to { opacity: 1; transform: translateY(0); }
        }
        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.08); }
            100% { transform: scale(1); }
        }
        .chatbot {
            position: fixed;
            z-index: 1000;
            background: linear-gradient(45deg, #10b981, #047857);
            padding: 12px;
            border-radius: 50%;
            cursor: pointer;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.5);
            transition: transform 0.3s ease;
        }
        .chatbot:hover {
            transform: scale(1.2);
        }
        .share-bot { left: 10px; top: 15%; }
        .income-bot { left: 10px; top: 25%; }
        .team-bot { left: 10px; top: 35%; }
        .feedback-bot { left: 10px; top: 45%; }
        .live-chat-bot { bottom: 20px; right: 20px; }
        .chatbot-window {
            display: none;
            position: fixed;
            width: 280px;
            background: rgba(255, 255, 255, 0.95);
            color: #000;
            border-radius: 20px;
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.6);
            padding: 15px;
            backdrop-filter: blur(15px);
            z-index: 1001;
        }
        .chatbot-window.active { display: block; }
        .share-window { left: 70px; top: 15%; }
        .income-window { left: 70px; top: 25%; }
        .team-window { left: 70px; top: 35%; }
        .feedback-window { left: 70px; top: 45%; }
        .live-chat-window { bottom: 80px; right: 20px; width: 240px; }
        .mobile-menu {
            position: fixed;
            top: 0;
            right: 0;
            width: 80%;
            height: 100%;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(20px);
            transform: translateX(100%);
            opacity: 0;
            transition: all 0.4s ease-in-out;
            z-index: 1003;
        }
        .mobile-menu.active {
            transform: translateX(0);
            opacity: 1;
        }
        .faq-answer, .buyer-question-answer {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.4s ease-in-out;
        }
        .faq-answer.active, .buyer-question-answer.active {
            max-height: 200px;
        }
        .glassmorphism {
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(25px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 12px;
        }
        .mobile-toggle {
            position: fixed;
            top: 20px;
            right: 20px;
            z-index: 1004;
        }
        .cta-button {
            background: linear-gradient(45deg, #10b981, #047857);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            animation: pulse 2s infinite;
        }
        .cta-button:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 20px rgba(16, 185, 129, 0.5);
        }
        .portfolio-item, .blog-item {
            display: none;
        }
        .portfolio-item.active, .blog-item.active {
            display: block;
        }
        img { loading: lazy; }
        .circle-image {
            border-radius: 50%;
            object-fit: cover;
        }
        footer a, nav a {
            transition: color 0.3s ease, transform 0.3s ease;
        }
        footer a:hover, nav a:hover {
            color: #10b981;
            transform: translateY(-3px);
        }
        .popup-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.7);
            display: none;
            justify-content: center;
            align-items: center;
            z-index: 1002;
        }
        .popup-content {
            background: linear-gradient(45deg, #2563eb, #059669);
            padding: 20px;
            border-radius: 24px;
            max-width: 400px;
            width: 90%;
            text-align: center;
            animation: pulse 1.5s ease-in-out;
            backdrop-filter: blur(10px);
        }
        .popup-close {
            background: none;
            border: none;
            color: #fff;
            font-size: 24px;
            cursor: pointer;
            position: absolute;
            top: 10px;
            right: 15px;
        }
        .swiper-slide {
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(20px);
            border-radius: 12px;
            padding: 20px;
            text-align: center;
        }
        @media (max-width: 640px) {
            .popup-content {
                max-width: 90%;
                padding: 15px;
            }
            .chatbot-window { width: 240px; }
            .share-window { left: 10px; top: 20%; }
            .income-window { left: 10px; top: 30%; }
            .team-window { left: 10px; top: 40%; }
            .feedback-window { left: 10px; top: 50%; }
            .live-chat-window { bottom: 60px; right: 10px; width: 220px; }
            .section-card { padding: 15px; }
            .grid-cols-2, .grid-cols-4 { grid-template-columns: 1fr; }
            .swiper-slide { width: 100%; }
        }
        @media (min-width: 768px) {
            .mobile-menu { display: none; }
        }
    </style>
</head>
<body>
    <!-- Popup -->
    <div id="offerPopup" class="popup-overlay">
        <div class="popup-content glassmorphism">
            <button class="popup-close" onclick="closePopup()"><i class="fas fa-times"></i></button>
            <h2 class="text-3xl font-bold mb-4">Exclusive Offer!</h2>
            <p class="text-lg mb-4">First 10 Clients Get <b>80% Discount</b> + <b>Lifetime Support</b> on All Services!</p>
            <div id="countdown" class="text-xl mb-4">
                <p>Offer Ends in: <span id="timer">23:59:59</span></p>
            </div>
            <a href="#contact" class="cta-button text-white px-6 py-3 rounded-lg">Claim Now</a>
        </div>
    </div>

    <!-- Chatbots -->
    <div class="chatbot share-bot animate-section" onclick="toggleChatbot('shareChatbot')">
        <i class="fas fa-share-alt fa-2x"></i>
    </div>
    <div id="shareChatbot" class="chatbot-window share-window">
        <div class="flex justify-between items-center mb-4">
            <h3 class="text-xl font-semibold">Share Nirob Tech</h3>
            <button onclick="toggleChatbot('shareChatbot')" class="text-gray-500"><i class="fas fa-minus"></i></button>
        </div>
        <p class="mb-3 text-sm">Spread the word about our AI solutions!</p>
        <div class="flex justify-center space-x-4 mt-3">
            <a href="#social-link-2" target="_blank" class="bg-blue-600 p-3 rounded hover:bg-blue-700"><i class="fab fa-facebook-f"></i></a>
            <a href="#social-link-4" target="_blank" class="bg-blue-400 p-3 rounded hover:bg-blue-500"><i class="fab fa-twitter"></i></a>
            <a href="#social-link-3" target="_blank" class="bg-blue-800 p-3 rounded hover:bg-blue-900"><i class="fab fa-linkedin-in"></i></a>
            <a href="#social-link-5" target="_blank" class="bg-pink-600 p-3 rounded hover:bg-pink-700"><i class="fab fa-instagram"></i></a>
        </div>
    </div>
    <div class="chatbot income-bot animate-section" onclick="toggleChatbot('incomeChatbot')">
        <i class="fas fa-dollar-sign fa-2x"></i>
    </div>
    <div id="incomeChatbot" class="chatbot-window income-window">
        <div class="flex justify-between items-center mb-4">
            <h3 class="text-xl font-semibold">Online Income Bot</h3>
            <button onclick="toggleChatbot('incomeChatbot')" class="text-gray-500"><i class="fas fa-minus"></i></button>
        </div>
        <p class="mb-3 text-sm">Earn with our AI-driven affiliate programs!</p>
        <a href="#affiliate-link" target="_blank" class="block bg-green-600 text-white p-3 rounded mt-3 hover:bg-green-700">Start Earning</a>
        <a href="#contact" class="block text-blue-600 underline mt-2 text-sm">Join Our Team</a>
    </div>
    <div class="chatbot team-bot animate-section" onclick="toggleChatbot('teamChatbot')">
        <i class="fas fa-users fa-2x"></i>
    </div>
    <div id="teamChatbot" class="chatbot-window team-window">
        <div class="flex justify-between items-center mb-4">
            <h3 class="text-xl font-semibold">Team Joining Bot</h3>
            <button onclick="toggleChatbot('teamChatbot')" class="text-gray-500"><i class="fas fa-minus"></i></button>
        </div>
        <p class="mb-3 text-sm">Collaborate on AI Integration and Podcast Websites.</p>
        <a href="#team-link" target="_blank" class="block bg-green-600 text-white p-3 rounded mt-3 hover:bg-green-700">Join Now</a>
        <a href="#contact" class="block text-blue-600 underline mt-2 text-sm">Contact Us</a>
    </div>
    <div class="chatbot feedback-bot animate-section" onclick="toggleChatbot('feedbackChatbot')">
        <i class="fas fa-star fa-2x"></i>
    </div>
    <div id="feedbackChatbot" class="chatbot-window feedback-window">
        <div class="flex justify-between items-center mb-4">
            <h3 class="text-xl font-semibold">Feedback Bot</h3>
            <button onclick="toggleChatbot('feedbackChatbot')" class="text-gray-500"><i class="fas fa-minus"></i></button>
        </div>
        <p class="mb-3 text-sm">Share your feedback to improve our AI solutions!</p>
        <form action="/feedback.php" method="POST" class="space-y-3">
            <input type="text" name="feedback_name" placeholder="Your Name" class="w-full p-2 rounded bg-gray-100 text-gray-800">
            <textarea name="feedback_message" placeholder="Your Feedback" class="w-full p-2 rounded bg-gray-100 text-gray-800 h-24"></textarea>
            <button type="submit" class="w-full bg-green-600 text-white p-2 rounded hover:bg-green-700">Submit Feedback</button>
        </form>
    </div>
    <div class="chatbot live-chat-bot animate-section" onclick="toggleChatbot('liveChatBot')">
        <i class="fas fa-comment-dots fa-2x"></i>
    </div>
    <div id="liveChatBot" class="chatbot-window live-chat-window">
        <div class="flex justify-between items-center mb-4">
            <h3 class="text-lg font-semibold">Live Chat with Nirob Tech</h3>
            <button onclick="toggleChatbot('liveChatBot')" class="text-gray-500"><i class="fas fa-minus"></i></button>
        </div>
        <div class="mb-4">
            <h4 class="font-semibold text-sm">About Nirob Tech</h4>
            <p class="text-xs">Leaders in AI Integration, Podcast Websites, and AI Chatbots, targeting 500 projects by 2025.</p>
        </div>
        <div class="mb-4">
            <h4 class="font-semibold text-sm">Quick Links</h4>
            <ul class="text-xs space-y-1">
                <li><a href="#about" class="text-blue-600 hover:underline">About Us</a></li>
                <li><a href="#services" class="text-blue-600 hover:underline">Services</a></li>
                <li><a href="#portfolio" class="text-blue-600 hover:underline">Portfolio</a></li>
                <li><a href="#buyer-questions" class="text-blue-600 hover:underline">Buyer Q&A</a></li>
                <li><a href="#faq" class="text-blue-600 hover:underline">FAQ</a></li>
                <li><a href="#blog" class="text-blue-600 hover:underline">Blog</a></li>
                <li><a href="#contact" class="text-blue-600 hover:underline">Contact</a></li>
            </ul>
        </div>
        <div class="mb-4">
            <h4 class="font-semibold text-sm">FAQs</h4>
            <div class="text-xs">
                <p class="font-medium">What is AI Integration</p>
                <p>Seamless AI solutions for business automation.</p>
                <p class="font-medium mt-2">What is a Podcast Website</p>
                <p>Custom websites for podcast owners with automation.</p>
                <p class="font-medium mt-2">What is an AI Chatbot</p>
                <p>Intelligent bots for customer support and sales.</p>
            </div>
        </div>
        <div class="mb-4">
            <h4 class="font-semibold text-sm">Connect with Us</h4>
            <div class="flex justify-center space-x-4">
                <a href="#social-link-1" class="text-gray-600 hover:text-green-600"><i class="fab fa-github"></i></a>
                <a href="#social-link-2" class="text-gray-600 hover:text-blue-600"><i class="fab fa-facebook-f"></i></a>
                <a href="#social-link-3" class="text-gray-600 hover:text-blue-800"><i class="fab fa-linkedin-in"></i></a>
                <a href="#social-link-4" class="text-gray-600 hover:text-blue-500"><i class="fab fa-twitter"></i></a>
                <a href="#social-link-5" class="text-gray-600 hover:text-pink-700"><i class="fab fa-instagram"></i></a>
            </div>
            <p class="text-xs mt-2">Email: <a href="mailto:contact@nirobtech.com" class="text-blue-600 hover:underline">contact@nirobtech.com</a></p>
        </div>
        <div id="chatMessages" class="h-32 overflow-y-auto mb-3 p-2 bg-gray-100 rounded"></div>
        <input type="text" id="chatInput" placeholder="Type your message..." class="w-full p-2 rounded bg-gray-100 text-gray-800">
        <button onclick="sendMessage()" class="w-full bg-green-600 text-white p-2 rounded mt-2 hover:bg-green-700">Send</button>
    </div>

    <!-- Mobile Toggle -->
    <div class="mobile-toggle md:hidden">
        <button id="mobileToggle" onclick="toggleMenu()" class="text-2xl p-3 bg-gray-900 rounded-full"><i class="fas fa-bars"></i></button>
    </div>

    <!-- Header -->
    <header class="fixed top-0 w-full bg-gray-900 bg-opacity-90 z-50 glassmorphism">
        <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4 flex justify-between items-center">
            <div class="text-3xl font-bold">Nirob Tech</div>
            <div class="hidden md:flex space-x-8 font-medium">
                <a href="#home" class="hover:text-green-400 transition">Home</a>
                <a href="#about" class="hover:text-green-400 transition">About</a>
                <a href="#services" class="hover:text-green-400 transition">Services</a>
                <a href="#portfolio" class="hover:text-green-400 transition">Portfolio</a>
                <a href="#buyer-questions" class="hover:text-green-400 transition">Buyer Q&A</a>
                <a href="#faq" class="hover:text-green-400 transition">FAQ</a>
                <a href="#blog" class="hover:text-green-400 transition">Blog</a>
                <a href="#contact" class="hover:text-green-400 transition">Contact</a>
            </div>
        </nav>
        <div id="mobileMenu" class="mobile-menu md:hidden">
            <div class="flex flex-col items-center space-y-5 py-10 text-lg font-semibold">
                <a href="#home" class="hover:bg-gray-800 w-full text-center py-3" onclick="toggleMenu()">Home</a>
                <a href="#about" class="hover:bg-gray-800 w-full text-center py-3" onclick="toggleMenu()">About</a>
                <a href="#services" class="hover:bg-gray-800 w-full text-center py-3" onclick="toggleMenu()">Services</a>
                <a href="#portfolio" class="hover:bg-gray-800 w-full text-center py-3" onclick="toggleMenu()">Portfolio</a>
                <a href="#buyer-questions" class="hover:bg-gray-800 w-full text-center py-3" onclick="toggleMenu()">Buyer Q&A</a>
                <a href="#faq" class="hover:bg-gray-800 w-full text-center py-3" onclick="toggleMenu()">FAQ</a>
                <a href="#blog" class="hover:bg-gray-800 w-full text-center py-3" onclick="toggleMenu()">Blog</a>
                <a href="#contact" class="hover:bg-gray-800 w-full text-center py-3" onclick="toggleMenu()">Contact</a>
            </div>
        </div>
    </header>

    <!-- Hero -->
    <section id="home" class="min-h-screen flex items-center justify-center text-center px-4 bg-cover bg-center relative" style="background-image: url('https://nirobtech.com/images/hero-bg-usa-uk-2025.jpg')">
        <div class="absolute inset-0 bg-black bg-opacity-65"></div>
        <div class="relative z-10 animate-hero">
            <h1 class="text-5xl sm:text-7xl font-bold mb-6">Nirob Tech</h1>
            <p class="text-xl sm:text-3xl mb-8">Leading AI Integration, Podcast Websites, and AI Chatbot Solutions for USA, UK, Canada, Australia 2025</p>
            <p class="text-lg mb-8">First 10 Clients: <b>80% Discount + Lifetime Support</b></p>
            <div class="flex justify-center space-x-4">
                <a href="#contact" class="cta-button text-white px-8 py-4 rounded-lg text-lg">Claim Offer</a>
                <button onclick="toggleChatbot('shareChatbot')" class="cta-button text-white px-8 py-4 rounded-lg text-lg">Share</button>
            </div>
        </div>
    </section>

    <!-- About -->
    <section id="about" class="py-24 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 animate-section">
        <h2 class="text-4xl font-bold text-center mb-12">About Nirob Tech</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-center">
            <div class="section-card p-8 rounded-xl">
                <img src="https://nirobtech.com/images/ai-innovation-usa-uk-2025.jpg" alt="AI Innovation at Nirob Tech 2025" class="w-full h-48 object-cover rounded-lg mb-4" loading="lazy">
                <h3 class="text-2xl font-semibold mb-4">Our New Journey</h3>
                <p class="text-lg">As a pioneer, Nirob Tech aims to deliver 500 AI-powered projects by 2025 for businesses in USA, UK, Canada, and Australia.</p>
            </div>
            <div class="section-card p-8 rounded-xl">
                <img src="https://nirobtech.com/images/team-mission-usa-uk-2025.jpg" alt="Nirob Tech Team Mission 2025" class="w-full h-48 object-cover rounded-lg mb-4" loading="lazy">
                <h3 class="text-2xl font-semibold mb-4">Our Vision</h3>
                <p class="text-lg">Empowering businesses with AI Integration, Podcast Websites, and AI Chatbots. First 10 clients get 80% discount + lifetime support!</p>
                <a href="#contact" class="block mt-4 text-blue-600 hover:underline">Join Us</a>
            </div>
        </div>
    </section>

    <!-- Services -->
    <section id="services" class="py-24 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 bg-gray-900 glassmorphism animate-section">
        <h2 class="text-4xl font-bold text-center mb-12">Our AI-Powered Services</h2>
        <p class="text-center text-lg mb-6">First 10 Clients Get <b>80% Discount + Lifetime Support</b>!</p>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="section-card p-8 rounded-xl text-center">
                <img src="https://nirobtech.com/images/ai-chatbot-usa-uk-2025.jpg" alt="AI Chatbot Integration 2025" class="w-full h-48 object-cover rounded-lg mb-4" loading="lazy">
                <h3 class="text-2xl font-semibold mb-4">AI Chatbot Integration</h3>
                <p class="text-sm mb-4">Intelligent AI Chatbots for customer support and sales automation.</p>
                <a href="#contact" class="block mt-4 text-blue-600 hover:underline">Get Started</a>
            </div>
            <div class="section-card p-8 rounded-xl text-center">
                <img src="https://nirobtech.com/images/podcast-website-usa-uk-2025.jpg" alt="Podcast Website Development 2025" class="w-full h-48 object-cover rounded-lg mb-4" loading="lazy">
                <h3 class="text-2xl font-semibold mb-4">Podcast Website Development</h3>
                <p class="text-sm mb-4">SEO-optimized Podcast Websites with automation tools.</p>
                <a href="#contact" class="block mt-4 text-blue-600 hover:underline">Get Started</a>
            </div>
            <div class="section-card p-8 rounded-xl text-center">
                <img src="https://nirobtech.com/images/ai-integration-usa-uk-2025.jpg" alt="AI Integration 2025" class="w-full h-48 object-cover rounded-lg mb-4" loading="lazy">
                <h3 class="text-2xl font-semibold mb-4">AI Integration</h3>
                <p class="text-sm mb-4">Streamline operations with AI-driven automation.</p>
                <a href="#contact" class="block mt-4 text-blue-600 hover:underline">Get Started</a>
            </div>
            <div class="section-card p-8 rounded-xl text-center">
                <img src="https://nirobtech.com/images/social-automation-usa-uk-2025.jpg" alt="Social Media Automation 2025" class="w-full h-48 object-cover rounded-lg mb-4" loading="lazy">
                <h3 class="text-2xl font-semibold mb-4">Social Media Automation</h3>
                <p class="text-sm mb-4">AI-driven social media campaigns for maximum engagement.</p>
                <a href="#contact" class="block mt-4 text-blue-600 hover:underline">Get Started</a>
            </div>
        </div>
    </section>

    <!-- Portfolio -->
    <section id="portfolio" class="py-24 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 animate-section">
        <h2 class="text-4xl font-bold text-center mb-12">Our AI-Powered Portfolio</h2>
        <div class="flex justify-center space-x-4 mb-8 flex-wrap">
            <button onclick="filterPortfolio('all')" class="cta-button text-white px-4 py-2 rounded-lg text-base">All</button>
            <button onclick="filterPortfolio('chatbot')" class="cta-button text-white px-4 py-2 rounded-lg text-base">AI Chatbot</button>
            <button onclick="filterPortfolio('website')" class="cta-button text-white px-4 py-2 rounded-lg text-base">Podcast Website</button>
            <button onclick="filterPortfolio('automation')" class="cta-button text-white px-4 py-2 rounded-lg text-base">Automation</button>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="portfolio-item section-card p-6 rounded-xl text-center active" data-category="all chatbot">
                <img src="https://nirobtech.com/images/chatbot-portfolio-usa-uk-2025.jpg" alt="AI Chatbot Portfolio 2025" class="w-full h-40 object-cover rounded-lg mb-4" loading="lazy">
                <h3 class="text-lg font-semibold mb-2">AI Chatbot for E-Commerce</h3>
                <p class="text-sm">Multilingual AI Chatbot for a USA-based e-commerce platform.</p>
                <a href="#contact" class="block mt-4 text-blue-600 hover:underline text-sm">Contact</a>
            </div>
            <div class="portfolio-item section-card p-6 rounded-xl text-center" data-category="all website">
                <img src="https://nirobtech.com/images/website-portfolio-usa-uk-2025.jpg" alt="Podcast Website Portfolio 2025" class="w-full h-40 object-cover rounded-lg mb-4" loading="lazy">
                <h3 class="text-lg font-semibold mb-2">Podcast Website</h3>
                <p class="text-sm">SEO-optimized Podcast Website for a UK-based creator.</p>
                <a href="#contact" class="block mt-4 text-blue-600 hover:underline text-sm">Contact</a>
            </div>
            <div class="portfolio-item section-card p-6 rounded-xl text-center" data-category="all automation">
                <img src="https://nirobtech.com/images/automation-portfolio-usa-uk-2025.jpg" alt="Automation Portfolio 2025" class="w-full h-40 object-cover rounded-lg mb-4" loading="lazy">
                <h3 class="text-lg font-semibold mb-2">Business Automation</h3>
                <p class="text-sm">AI Integration for a Canada-based business.</p>
                <a href="#contact" class="block mt-4 text-blue-600 hover:underline text-sm">Contact</a>
            </div>
            <div class="portfolio-item section-card p-6 rounded-xl text-center" data-category="all automation">
                <img src="https://nirobtech.com/images/social-portfolio-usa-uk-2025.jpg" alt="Social Media Automation Portfolio 2025" class="w-full h-40 object-cover rounded-lg mb-4" loading="lazy">
                <h3 class="text-lg font-semibold mb-2">Social Media Automation</h3>
                <p class="text-sm">AI-powered social media campaign for an Australian brand.</p>
                <a href="#contact" class="block mt-4 text-blue-600 hover:underline text-sm">Contact</a>
            </div>
        </div>
    </section>

    <!-- Buyer Questions -->
    <section id="buyer-questions" class="py-24 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 bg-gray-900 glassmorphism animate-section">
        <h2 class="text-4xl font-bold text-center mb-12">Common Buyer Questions</h2>
        <div class="space-y-4">
            <div class="section-card p-6 rounded-xl">
                <button onclick="toggleBuyerQuestion('buyer1')" class="w-full text-left text-xl font-semibold flex justify-between items-center">
                    <span>How long does it take to deliver an AI Chatbot</span>
                    <i class="fas fa-chevron-down"></i>
                </button>
                <div id="buyer1" class="buyer-question-answer mt-2 text-sm">
                    <p>Typically 7-14 days, depending on customization needs. Contact us for a timeline!</p>
                </div>
            </div>
            <div class="section-card p-6 rounded-xl">
                <button onclick="toggleBuyerQuestion('buyer2')" class="w-full text-left text-xl font-semibold flex justify-between items-center">
                    <span>Can I customize my Podcast Website</span>
                    <i class="fas fa-chevron-down"></i>
                </button>
                <div id="buyer2" class="buyer-question-answer mt-2 text-sm">
                    <p>Yes, fully customizable designs with SEO and automation tools tailored to your brand.</p>
                </div>
            </div>
            <div class="section-card p-6 rounded-xl">
                <button onclick="toggleBuyerQuestion('buyer3')" class="w-full text-left text-xl font-semibold flex justify-between items-center">
                    <span>What payment methods do you accept</span>
                    <i class="fas fa-chevron-down"></i>
                </button>
                <div id="buyer3" class="buyer-question-answer mt-2 text-sm">
                    <p>We accept PayPal, Stripe, and bank transfers. Contact us for details.</p>
                </div>
            </div>
        </div>
        <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "FAQPage",
            "mainEntity": [
                {
                    "@type": "Question",
                    "name": "How long does it take to deliver an AI Chatbot",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Typically 7-14 days, depending on customization needs. Contact us for a timeline!"
                    }
                },
                {
                    "@type": "Question",
                    "name": "Can I customize my Podcast Website",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Yes, fully customizable designs with SEO and automation tools tailored to your brand."
                    }
                },
                {
                    "@type": "Question",
                    "name": "What payment methods do you accept",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "We accept PayPal, Stripe, and bank transfers. Contact us for details."
                    }
                }
            ]
        }
        </script>
    </section>

    <!-- FAQ -->
    <section id="faq" class="py-24 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 bg-gray-900 glassmorphism animate-section">
        <h2 class="text-4xl font-bold text-center mb-12">Frequently Asked Questions</h2>
        <div class="space-y-4">
            <div class="section-card p-6 rounded-xl">
                <button onclick="toggleFAQ('faq1')" class="w-full text-left text-xl font-semibold flex justify-between items-center">
                    <span>What is AI Chatbot Integration</span>
                    <i class="fas fa-chevron-down"></i>
                </button>
                <div id="faq1" class="faq-answer mt-2 text-sm">
                    <p>Intelligent AI Chatbots to automate customer support and sales for businesses in 2025.</p>
                </div>
            </div>
            <div class="section-card p-6 rounded-xl">
                <button onclick="toggleFAQ('faq2')" class="w-full text-left text-xl font-semibold flex justify-between items-center">
                    <span>How does a Podcast Website benefit my show</span>
                    <i class="fas fa-chevron-down"></i>
                </button>
                <div id="faq2" class="faq-answer mt-2 text-sm">
                    <p>SEO-optimized websites with automation and monetization tools to grow your audience.</p>
                </div>
            </div>
        </div>
        <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "FAQPage",
            "mainEntity": [
                {
                    "@type": "Question",
                    "name": "What is AI Chatbot Integration",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Intelligent AI Chatbots to automate customer support and sales for businesses in 2025."
                    }
                },
                {
                    "@type": "Question",
                    "name": "How does a Podcast Website benefit my show",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "SEO-optimized websites with automation and monetization tools to grow your audience."
                    }
                }
            ]
        }
        </script>
    </section>

    <!-- Blog (Placeholder) -->
    <section id="blog" class="py-24 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 animate-section">
        <h2 class="text-4xl font-bold text-center mb-12">Latest Blog Posts</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="blog-item section-card p-6 rounded-xl text-center active">
                <img src="https://nirobtech.com/images/blog-ai-chatbot-usa-uk-2025.jpg" alt="AI Chatbot Trends 2025" class="w-full h-40 object-cover rounded-lg mb-4" loading="lazy">
                <h3 class="text-lg font-semibold mb-2">AI Chatbot Trends for 2025</h3>
                <p class="text-sm">Discover the latest advancements in AI Chatbots for businesses.</p>
                <a href="#contact" class="block mt-4 text-blue-600 hover:underline text-sm">Read More</a>
            </div>
            <div class="blog-item section-card p-6 rounded-xl text-center active">
                <img src="https://nirobtech.com/images/blog-podcast-website-usa-uk-2025.jpg" alt="Podcast Website Tips 2025" class="w-full h-40 object-cover rounded-lg mb-4" loading="lazy">
                <h3 class="text-lg font-semibold mb-2">Podcast Website Tips for 2025</h3>
                <p class="text-sm">Learn how to optimize your Podcast Website for growth.</p>
                <a href="#contact" class="block mt-4 text-blue-600 hover:underline text-sm">Read More</a>
            </div>
        </div>
    </section>

    <!-- Contact -->
    <section id="contact" class="py-24 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 bg-gray-900 glassmorphism animate-section">
        <h2 class="text-4xl font-bold text-center mb-12">Contact Nirob Tech</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="section-card p-10 rounded-xl">
                <h3 class="text-2xl font-semibold mb-4">Get in Touch</h3>
                <p class="text-lg mb-4">Ready to transform your business? Claim your 80% discount now!</p>
                <p class="mb-2"><i class="fas fa-envelope mr-2"></i> <a href="mailto:contact@nirobtech.com" class="text-blue-600 hover:underline">contact@nirobtech.com</a></p>
                <p class="mb-2"><i class="fas fa-briefcase mr-2"></i> <a href="https://www.fiverr.com/users/muhnirob?ref=1083553" target="_blank" class="text-blue-600 hover:underline">Hire on Fiverr</a></p>
            </div>
            <div class="section-card p-10 rounded-xl">
                <h3 class="text-2xl font-semibold mb-4">Send a Message</h3>
                <?php if (isset($success)): ?>
                    <p class="text-green-600 mb-4"><?php echo $success; ?></p>
                <?php elseif (isset($error)): ?>
                    <p class="text-red-600 mb-4"><?php echo $error; ?></p>
                <?php endif; ?>
                <form action="#contact" method="POST" class="space-y-4">
                    <input type="text" name="name" placeholder="Your Name" class="w-full p-3 rounded bg-gray-100 text-gray-800" required>
                    <input type="email" name="email" placeholder="Your Email" class="w-full p-3 rounded bg-gray-100 text-gray-800" required>
                    <textarea name="message" placeholder="Your Message" class="w-full p-3 rounded bg-gray-100 text-gray-800 h-32" required></textarea>
                    <button type="submit" class="w-full cta-button text-white p-3 rounded">Send Message</button>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="py-16 bg-gray-900 glassmorphism animate-section">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="swiper-container mb-12">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <h3 class="text-2xl font-bold mb-2">80% Discount Offer!</h3>
                        <p class="text-lg mb-4">First 10 clients get 80% off + lifetime support!</p>
                        <a href="#contact" class="cta-button text-white px-4 py-2 rounded-lg">Claim Now</a>
                    </div>
                    <div class="swiper-slide">
                        <h3 class="text-2xl font-bold mb-2">Join Our Mission</h3>
                        <p class="text-lg mb-4">Help us reach 500 AI-powered projects by 2025!</p>
                        <a href="#contact" class="cta-button text-white px-4 py-2 rounded-lg">Get Involved</a>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
            <div class="section-card p-8 rounded-xl mb-12 text-center">
                <h3 class="text-3xl font-bold mb-4">Exclusive Offer!</h3>
                <p class="text-lg mb-4">First 10 Clients Get <b>80% Discount</b> + <b>Lifetime Support</b> on All Services!</p>
                <div class="text-xl mb-4">
                    <p>Offer Ends in: <span id="footerTimer">23:59:59</span></p>
                </div>
                <a href="#contact" class="cta-button text-white px-6 py-3 rounded-lg">Claim Now</a>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-xl font-semibold mb-4">Nirob Tech</h3>
                    <p class="text-sm">Targeting 500 AI-powered projects by 2025 in USA, UK, Canada, Australia.</p>
                </div>
                <div>
                    <h3 class="text-xl font-semibold mb-4">Services</h3>
                    <ul class="text-sm space-y-2">
                        <li><a href="#services" class="hover:text-green-400">AI Chatbot Integration</a></li>
                        <li><a href="#services" class="hover:text-green-400">Podcast Website Development</a></li>
                        <li><a href="#services" class="hover:text-green-400">AI Integration</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-xl font-semibold mb-4">Quick Links</h3>
                    <ul class="text-sm space-y-2">
                        <li><a href="#about" class="hover:text-green-400">About</a></li>
                        <li><a href="#portfolio" class="hover:text-green-400">Portfolio</a></li>
                        <li><a href="#buyer-questions" class="hover:text-green-400">Buyer Questions</a></li>
                        <li><a href="#faq" class="hover:text-green-400">FAQ</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-xl font-semibold mb-4">Newsletter</h3>
                    <form action="/newsletter" method="POST" class="space-y-2">
                        <input type="email" name="newsletter_email" placeholder="Your Email" class="w-full text-sm p-2 rounded bg-gray-100 text-gray-800">
                        <button type="submit" class="w-full cta-button text-white p-2 rounded">Subscribe</button>
                    </form>
                </div>
            </div>
            <div class="mt-8 text-center text-sm">
                <p>&copy; 2025 Nirob Tech. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- JavaScript -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        // Swiper
        const swiper = new Swiper('.swiper-container', {
            loop: true,
            autoplay: { delay: 5000 },
            pagination: { el: '.swiper-pagination', clickable: true },
            slidesPerView: 1,
            spaceBetween: 20,
            breakpoints: {
                768: { slidesPerView: 2 }
            }
        });

        // Popup
        window.onload = () => {
            setTimeout(() => {
                document.getElementById('offerPopup').style.display = 'flex';
            }, 1000);
            window.addEventListener('scroll', () => {
                document.getElementById('offerPopup').style.display = 'none';
            });
        };

        function closePopup() {
            document.getElementById('offerPopup').style.display = 'none';
        }

        // Countdown Timer
        function startCountdown() {
            const timers = [document.getElementById('timer'), document.getElementById('footerTimer')];
            let time = 24 * 60 * 60;
            setInterval(() => {
                const hours = Math.floor(time / 3600);
                const minutes = Math.floor((time % 3600) / 60);
                const seconds = time % 60;
                const timeString = `${hours}:${minutes.toString().padStart(2, '0')}:${seconds.toString().padStart(2, '0')}`;
                timers.forEach(timer => {
                    if (timer) timer.textContent = timeString;
                });
                time--;
                if (time < 0) time = 24 * 60 * 60;
            }, 1000);
        }
        startCountdown();

        function toggleMenu() {
            const menu = document.getElementById('mobileMenu');
            const toggleButton = document.getElementById('mobileToggle');
            menu.classList.toggle('active');
            toggleButton.innerHTML = menu.classList.contains('active') ? '<i class="fas fa-times"></i>' : '<i class="fas fa-bars"></i>';
        }

        function toggleChatbot(id) {
            document.getElementById(id).classList.toggle('active');
        }

        function toggleFAQ(id) {
            document.getElementById(id).classList.toggle('active');
        }

        function toggleBuyerQuestion(id) {
            document.getElementById(id).classList.toggle('active');
        }

        function filterPortfolio(category) {
            const items = document.querySelectorAll('.portfolio-item');
            items.forEach(item => {
                const categories = item.getAttribute('data-category').split(' ');
                item.classList.toggle('active', category === 'all' || categories.includes(category));
            });
        }

        function sendMessage() {
            const input = document.getElementById('chatInput');
            const messages = document.getElementById('chatMessages');
            if (input.value.trim()) {
                const message = document.createElement('div');
                message.className = 'text-sm text-gray-800 p-2 bg-gray-200 rounded mb-2';
                message.textContent = input.value;
                messages.appendChild(message);
                messages.scrollTop = messages.scrollHeight;
                input.value = '';
                setTimeout(() => {
                    const response = document.createElement('div');
                    response.className = 'text-sm text-gray-700 p-2 bg-green-100 rounded mb-2';
                    response.textContent = 'Thanks for reaching out! How can Nirob Tech help you with AI solutions?';
                    messages.appendChild(response);
                    messages.scrollTop = messages.scrollHeight;
                }, 1000);
            }
        }
    </script>
</body>
</html>
