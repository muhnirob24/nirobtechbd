<?php
/**
 * Nirob Tech - Redefining Digital Excellence with AI
 * Specializing in Chatbot Integration for Businesses in USA, UK, Canada, Australia by 2025.
 * Contact: nirob@nirobtech.com | Fiverr: https://www.fiverr.com/users/muhnirob?ref=1083553
 */

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    
    $to = "nirob@nirobtech.com";
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
    <meta name="description" content="Nirob Tech specializes in Chatbot Integration, AI Chatbot Development, Business Automation, Website Development, and AI Prompts Engineering with 80% discount for first 10 clients + lifetime support. Targeting 500 projects in USA, UK, Canada, Australia by 2025.">
    <meta name="keywords" content="Chatbot Integration, AI Chatbot Development, Business Automation System, Website Development, AI Prompts Engineering, 80% Discount, Lifetime Support, Nirob Tech, USA, UK, Canada, Australia, 2025">
    <meta name="author" content="Nirob Tech">
    <meta name="robots" content="index, follow">
    <meta name="geo.region" content="USA, UK, Canada, Australia">
    <meta name="geo.country" content="Global">

    <!-- Open Graph -->
    <meta property="og:title" content="Nirob Tech - Chatbot Integration & AI Solutions 2025">
    <meta property="og:description" content="First 10 clients get 80% discount + lifetime support on Chatbot Integration, AI Chatbot Development, Business Automation, and more. Targeting 500 projects by 2025 in USA, UK, Canada, Australia.">
    <meta property="og:image" content="https://nirobtech.com/images/nirob-tech-og-image-2025.jpg">
    <meta property="og:url" content="https://nirobtech.com">
    <meta property="og:type" content="website">
    
    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Nirob Tech - Chatbot Integration & AI Solutions 2025">
    <meta name="twitter:description" content="First 10 clients get 80% discount + lifetime support on Chatbot Integration and AI services. Targeting 500 projects by 2025.">
    <meta name="twitter:image" content="https://nirobtech.com/images/nirob-tech-og-image-2025.jpg">
    
    <!-- Pinterest -->
    <meta name="pinterest-rich-pin" content="true">
    <meta name="pinterest:title" content="Nirob Tech - Chatbot Integration & AI Solutions 2025">
    <meta name="pinterest:description" content="Get 80% discount + lifetime support on Chatbot Integration for businesses in USA, UK, Canada, Australia.">
    <meta name="pinterest:image" content="https://nirobtech.com/images/nirob-tech-og-image-2025.jpg">
    
    <!-- WhatsApp -->
    <meta property="og:site_name" content="Nirob Tech">
    <meta property="og:whatsapp" content="true">
    
    <!-- Reddit -->
    <meta name="reddit:thumbnail" content="https://nirobtech.com/images/nirob-tech-og-image-2025.jpg">
    <meta name="reddit:title" content="Nirob Tech - Chatbot Integration & AI Solutions 2025">
    
    <!-- Schema.org -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "Nirob Tech",
        "url": "https://nirobtech.com",
        "logo": "https://nirobtech.com/images/nirob-tech-logo-2025.png",
        "contactPoint": {
            "@type": "ContactPoint",
            "email": "nirob@nirobtech.com",
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
    
    <title>Nirob Tech - Chatbot Integration & AI Solutions with 80% Discount 2025</title>
    
    <!-- Favicon -->
    <link rel="icon" href="nirob-tech-favicon-2025.ico">
    
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Poppins:wght@400;500;600;700&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Swiper.js -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    
    <!-- Custom CSS -->
    <style>
        body {
            font-family: 'Inter', 'Poppins', 'Roboto', sans-serif;
            background: linear-gradient(135deg, #1e3a8a, #2563eb, #059669);
            scroll-behavior: smooth;
            color: #fff;
        }
        .section-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            background: rgba(255, 255, 255, 0.12);
            backdrop-filter: blur(20px);
            border-radius: 16px;
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        .section-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.5);
        }
        .animate-hero, .animate-section {
            animation: fadeInUp 1.2s ease-in-out;
        }
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(40px); }
            to { opacity: 1; transform: translateY(0); }
        }
        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }
        .chatbot {
            position: fixed;
            z-index: 1000;
            background: linear-gradient(45deg, #10b981, #047857);
            padding: 10px;
            border-radius: 50%;
            cursor: pointer;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.4);
            transition: transform 0.3s ease;
        }
        .chatbot:hover {
            transform: scale(1.15);
        }
        .share-bot { left: 15px; top: 15%; }
        .income-bot { left: 15px; top: 25%; }
        .team-bot { left: 15px; top: 35%; }
        .feedback-bot { left: 15px; top: 45%; }
        .live-chat-bot { bottom: 20px; right: 20px; }
        .chatbot-window {
            display: none;
            position: fixed;
            width: 280px;
            background: rgba(255, 255, 255, 0.95);
            color: #000;
            border-radius: 16px;
            box-shadow: 0 16px 40px rgba(0, 0, 0, 0.5);
            padding: 12px;
            backdrop-filter: blur(12px);
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
            transition: all 0.3s ease;
            z-index: 1003;
        }
        .mobile-menu.active {
            transform: translateX(0);
            opacity: 1;
        }
        .faq-answer, .buyer-question-answer {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease;
        }
        .faq-answer.active, .buyer-question-answer.active {
            max-height: 250px;
        }
        .glassmorphism {
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(20px);
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
            box-shadow: 0 8px 16px rgba(16, 185, 129, 0.4);
        }
        .portfolio-item, .blog-item {
            display: none;
        }
        .portfolio-item.active, .blog-item.active {
            display: block;
        }
        img { loading: lazy; }
        footer a, nav a {
            transition: color 0.3s ease, transform 0.3s ease;
        }
        footer a:hover, nav a:hover {
            color: #10b981;
            transform: translateY(-2px);
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
            border-radius: 20px;
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
            font-size: 20px;
            cursor: pointer;
            position: absolute;
            top: 10px;
            right: 15px;
        }
        .swiper-slide {
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(15px);
            border-radius: 12px;
            padding: 16px;
            text-align: center;
        }
        @media (max-width: 640px) {
            .popup-content {
                max-width: 90%;
                padding: 12px;
            }
            .chatbot-window { width: 240px; }
            .share-window { left: 10px; top: 20%; }
            .income-window { left: 10px; top: 30%; }
            .team-window { left: 10px; top: 40%; }
            .feedback-window { left: 10px; top: 50%; }
            .live-chat-window { bottom: 60px; right: 10px; width: 220px; }
            .section-card { padding: 12px; }
            .grid-cols-2, .grid-cols-3, .grid-cols-4 { grid-template-columns: 1fr; }
            .swiper-slide { width: 100%; }
            .mobile-menu { width: 85%; }
        }
        @media (min-width: 768px) {
            .mobile-menu, .mobile-toggle { display: none; }
        }
    </style>
</head>
<body>
    <!-- Popup -->
    <div id="offerPopup" class="popup-overlay">
        <div class="popup-content glassmorphism">
            <button class="popup-close" onclick="closePopup()"><i class="fas fa-times"></i></button>
            <h2 class="text-2xl font-bold mb-3">Exclusive Offer!</h2>
            <p class="text-base mb-3">First 10 Clients Get <b>80% Discount</b> + <b>Lifetime Support</b>!</p>
            <div id="countdown" class="text-lg mb-3">
                <p>Offer Ends in: <span id="timer">23:59:59</span></p>
            </div>
            <a href="#contact" class="cta-button text-white px-6 py-2 rounded-lg">Claim Now</a>
        </div>
    </div>

    <!-- Chatbots -->
    <div class="chatbot share-bot animate-section" onclick="toggleChatbot('shareChatbot')">
        <i class="fas fa-share-alt fa-2x"></i>
    </div>
    <div id="shareChatbot" class="chatbot-window share-window">
        <div class="flex justify-between items-center mb-3">
            <h3 class="text-lg font-semibold">Share Nirob Tech</h3>
            <button onclick="toggleChatbot('shareChatbot')" class="text-gray-500"><i class="fas fa-minus"></i></button>
        </div>
        <p class="mb-2 text-sm">Share our Chatbot Integration solutions!</p>
        <div class="flex justify-center space-x-3 mt-2">
            <a href="#social-link-2" target="_blank" class="bg-blue-600 p-2 rounded hover:bg-blue-700"><i class="fab fa-facebook-f"></i></a>
            <a href="#social-link-4" target="_blank" class="bg-blue-400 p-2 rounded hover:bg-blue-500"><i class="fab fa-twitter"></i></a>
            <a href="#social-link-3" target="_blank" class="bg-blue-800 p-2 rounded hover:bg-blue-900"><i class="fab fa-linkedin-in"></i></a>
            <a href="#social-link-5" target="_blank" class="bg-pink-600 p-2 rounded hover:bg-pink-700"><i class="fab fa-instagram"></i></a>
            <a href="#social-link-6" target="_blank" class="bg-red-600 p-2 rounded hover:bg-red-700"><i class="fab fa-pinterest"></i></a>
            <a href="#social-link-7" target="_blank" class="bg-green-600 p-2 rounded hover:bg-green-700"><i class="fab fa-whatsapp"></i></a>
            <a href="#social-link-8" target="_blank" class="bg-orange-600 p-2 rounded hover:bg-orange-700"><i class="fab fa-reddit"></i></a>
        </div>
    </div>
    <div class="chatbot income-bot animate-section" onclick="toggleChatbot('incomeChatbot')">
        <i class="fas fa-dollar-sign fa-2x"></i>
    </div>
    <div id="incomeChatbot" class="chatbot-window income-window">
        <div class="flex justify-between items-center mb-3">
            <h3 class="text-lg font-semibold">Online Income Bot</h3>
            <button onclick="toggleChatbot('incomeChatbot')" class="text-gray-500"><i class="fas fa-minus"></i></button>
        </div>
        <p class="mb-2 text-sm">Earn with our AI-driven affiliate programs!</p>
        <a href="#affiliate-link" target="_blank" class="block bg-green-600 text-white p-2 rounded mt-2 hover:bg-green-700">Start Earning</a>
        <a href="#contact" class="block text-blue-600 underline mt-1 text-sm">Join Our Team</a>
    </div>
    <div class="chatbot team-bot animate-section" onclick="toggleChatbot('teamChatbot')">
        <i class="fas fa-users fa-2x"></i>
    </div>
    <div id="teamChatbot" class="chatbot-window team-window">
        <div class="flex justify-between items-center mb-3">
            <h3 class="text-lg font-semibold">Team Joining Bot</h3>
            <button onclick="toggleChatbot('teamChatbot')" class="text-gray-500"><i class="fas fa-minus"></i></button>
        </div>
        <p class="mb-2 text-sm">Collaborate on Chatbot Integration projects.</p>
        <a href="#team-link" target="_blank" class="block bg-green-600 text-white p-2 rounded mt-2 hover:bg-green-700">Join Now</a>
        <a href="#contact" class="block text-blue-600 underline mt-1 text-sm">Contact Us</a>
    </div>
    <div class="chatbot feedback-bot animate-section" onclick="toggleChatbot('feedbackChatbot')">
        <i class="fas fa-star fa-2x"></i>
    </div>
    <div id="feedbackChatbot" class="chatbot-window feedback-window">
        <div class="flex justify-between items-center mb-3">
            <h3 class="text-lg font-semibold">Feedback Bot</h3>
            <button onclick="toggleChatbot('feedbackChatbot')" class="text-gray-500"><i class="fas fa-minus"></i></button>
        </div>
        <p class="mb-2 text-sm">Share feedback on our Chatbot Integration services!</p>
        <form action="/feedback.php" method="POST" class="space-y-2">
            <input type="text" name="feedback_name" placeholder="Your Name" class="w-full p-2 rounded bg-gray-100 text-gray-800 text-sm">
            <textarea name="feedback_message" placeholder="Your Feedback" class="w-full p-2 rounded bg-gray-100 text-gray-800 h-20 text-sm"></textarea>
            <button type="submit" class="w-full bg-green-600 text-white p-2 rounded hover:bg-green-700 text-sm">Submit Feedback</button>
        </form>
    </div>
    <div class="chatbot live-chat-bot animate-section" onclick="toggleChatbot('liveChatBot')">
        <i class="fas fa-comment-dots fa-2x"></i>
    </div>
    <div id="liveChatBot" class="chatbot-window live-chat-window">
        <div class="flex justify-between items-center mb-3">
            <h3 class="text-base font-semibold">Live Chat with Nirob Tech</h3>
            <button onclick="toggleChatbot('liveChatBot')" class="text-gray-500"><i class="fas fa-minus"></i></button>
        </div>
        <div class="mb-3">
            <h4 class="font-semibold text-sm">About Nirob Tech</h4>
            <p class="text-xs">Experts in Chatbot Integration, targeting 500 projects by 2025 in USA, UK, Canada, Australia.</p>
        </div>
        <div class="mb-3">
            <h4 class="font-semibold text-sm">Quick Links</h4>
            <ul class="text-xs space-y-1">
                <li><a href="#about" class="text-blue-600 hover:underline">About Us</a></li>
                <li><a href="#services" class="text-blue-600 hover:underline">Services</a></li>
                <li><a href="#portfolio" class="text-blue-600 hover:underline">Portfolio</a></li>
                <li><a href="#success" class="text-blue-600 hover:underline">Success Stories</a></li>
                <li><a href="#buyer-questions" class="text-blue-600 hover:underline">Buyer Q&A</a></li>
                <li><a href="#faq" class="text-blue-600 hover:underline">FAQ</a></li>
                <li><a href="#blog" class="text-blue-600 hover:underline">Blog</a></li>
                <li><a href="#contact" class="text-blue-600 hover:underline">Contact</a></li>
            </ul>
        </div>
        <div class="mb-3">
            <h4 class="font-semibold text-sm">FAQs</h4>
            <div class="text-xs">
                <p class="font-medium">What is Chatbot Integration?</p>
                <p>Automating business processes with AI Chatbots.</p>
                <p class="font-medium mt-1">Why choose Nirob Tech?</p>
                <p>Proven expertise in USA, UK, Canada, Australia markets.</p>
            </div>
        </div>
        <div class="mb-3">
            <h4 class="font-semibold text-sm">Connect with Us</h4>
            <div class="flex justify-center space-x-3">
                <a href="#social-link-1" class="text-gray-600 hover:text-green-600"><i class="fab fa-github"></i></a>
                <a href="#social-link-2" class="text-gray-600 hover:text-blue-600"><i class="fab fa-facebook-f"></i></a>
                <a href="#social-link-3" class="text-gray-600 hover:text-blue-800"><i class="fab fa-linkedin-in"></i></a>
                <a href="#social-link-4" class="text-gray-600 hover:text-blue-500"><i class="fab fa-twitter"></i></a>
                <a href="#social-link-5" class="text-gray-600 hover:text-pink-700"><i class="fab fa-instagram"></i></a>
            </div>
            <p class="text-xs mt-2">Email: <a href="mailto:nirob@nirobtech.com" class="text-blue-600 hover:underline">nirob@nirobtech.com</a></p>
        </div>
        <div id="chatMessages" class="h-28 overflow-y-auto mb-2 p-2 bg-gray-100 rounded text-sm"></div>
        <input type="text" id="chatInput" placeholder="Type your message..." class="w-full p-2 rounded bg-gray-100 text-gray-800 text-sm">
        <button onclick="sendMessage()" class="w-full bg-green-600 text-white p-2 rounded mt-2 hover:bg-green-700 text-sm">Send</button>
    </div>

    <!-- Mobile Toggle -->
    <div class="mobile-toggle md:hidden">
        <button id="mobileToggle" onclick="toggleMenu()" class="text-xl p-2 bg-gray-900 rounded-full"><i class="fas fa-bars"></i></button>
    </div>

    <!-- Header -->
    <header class="fixed top-0 w-full bg-gray-900 bg-opacity-90 z-50 glassmorphism">
        <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4 flex justify-between items-center">
            <div class="text-2xl font-bold">Nirob Tech</div>
            <div class="hidden md:flex space-x-6 font-medium">
                <a href="#home" class="hover:text-green-400 transition">Home</a>
                <a href="#about" class="hover:text-green-400 transition">About</a>
                <a href="#services" class="hover:text-green-400 transition">Services</a>
                <a href="#portfolio" class="hover:text-green-400 transition">Portfolio</a>
                <a href="#success" class="hover:text-green-400 transition">Success Stories</a>
                <a href="#buyer-questions" class="hover:text-green-400 transition">Buyer Q&A</a>
                <a href="#faq" class="hover:text-green-400 transition">FAQ</a>
                <a href="#blog" class="hover:text-green-400 transition">Blog</a>
                <a href="#contact" class="hover:text-green-400 transition">Contact</a>
            </div>
        </nav>
        <div id="mobileMenu" class="mobile-menu md:hidden">
            <div class="flex flex-col items-center space-y-4 py-8 text-base font-semibold">
                <a href="#home" class="hover:bg-gray-800 w-full text-center py-2" onclick="toggleMenu()">Home</a>
                <a href="#about" class="hover:bg-gray-800 w-full text-center py-2" onclick="toggleMenu()">About</a>
                <a href="#services" class="hover:bg-gray-800 w-full text-center py-2" onclick="toggleMenu()">Services</a>
                <a href="#portfolio" class="hover:bg-gray-800 w-full text-center py-2" onclick="toggleMenu()">Portfolio</a>
                <a href="#success" class="hover:bg-gray-800 w-full text-center py-2" onclick="toggleMenu()">Success Stories</a>
                <a href="#buyer-questions" class="hover:bg-gray-800 w-full text-center py-2" onclick="toggleMenu()">Buyer Q&A</a>
                <a href="#faq" class="hover:bg-gray-800 w-full text-center py-2" onclick="toggleMenu()">FAQ</a>
                <a href="#blog" class="hover:bg-gray-800 w-full text-center py-2" onclick="toggleMenu()">Blog</a>
                <a href="#contact" class="hover:bg-gray-800 w-full text-center py-2" onclick="toggleMenu()">Contact</a>
            </div>
        </div>
    </header>

    <!-- Hero -->
    <section id="home" class="min-h-screen flex items-center justify-center text-center px-4 bg-cover bg-center relative" style="background-image: url('https://nirobtech.com/images/hero-bg-2025.jpg')">
        <div class="absolute inset-0 bg-black bg-opacity-65"></div>
        <div class="relative z-10 animate-hero">
            <h1 class="text-4xl sm:text-6xl font-bold mb-6">Nirob Tech</h1>
            <p class="text-lg sm:text-2xl mb-6">Expert Chatbot Integration & AI Solutions for USA, UK, Canada, Australia 2025</p>
            <p class="text-base mb-6">First 10 Clients: <b>80% Discount + Lifetime Support</b></p>
            <div class="flex justify-center space-x-4">
                <a href="#contact" class="cta-button text-white px-6 py-3 rounded-lg text-base">Claim Offer</a>
                <button onclick="toggleChatbot('shareChatbot')" class="cta-button text-white px-6 py-3 rounded-lg text-base">Share</button>
            </div>
        </div>
    </section>

    <!-- About -->
    <section id="about" class="py-20 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 animate-section">
        <h2 class="text-3xl font-bold text-center mb-10">About Nirob Tech</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="section-card p-6 rounded-lg">
                <img src="https://nirobtech.com/images/ai-innovation-2025.jpg" alt="Chatbot Integration Innovation 2025" class="w-full h-40 object-cover rounded-lg mb-4" loading="lazy">
                <h3 class="text-xl font-semibold mb-3">Our Mission</h3>
                <p class="text-sm">Delivering 500 Chatbot Integration projects by 2025 for businesses in USA, UK, Canada, and Australia.</p>
            </div>
            <div class="section-card p-6 rounded-lg">
                <img src="https://nirobtech.com/images/team-mission-2025.jpg" alt="Nirob Tech Team Mission 2025" class="w-full h-40 object-cover rounded-lg mb-4" loading="lazy">
                <h3 class="text-xl font-semibold mb-3">Our Vision</h3>
                <p class="text-sm">Empowering businesses with Chatbot Integration and AI solutions. First 10 clients get 80% discount!</p>
                <a href="#contact" class="block mt-3 text-blue-600 hover:underline text-sm">Join Us</a>
            </div>
        </div>
    </section>

    <!-- Services -->
    <section id="services" class="py-20 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 bg-gray-900 glassmorphism animate-section">
        <h2 class="text-3xl font-bold text-center mb-10">Our AI-Powered Services</h2>
        <p class="text-center text-base mb-6">First 10 Clients Get <b>80% Discount + Lifetime Support</b>!</p>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="section-card p-6 rounded-lg text-center">
                <img src="https://nirobtech.com/images/ai-chatbot-2025.jpg" alt="AI Chatbot Development 2025" class="w-full h-40 object-cover rounded-lg mb-4" loading="lazy">
                <h3 class="text-xl font-semibold mb-3">AI Chatbot Development</h3>
                <p class="text-sm mb-3">Expert Chatbot Integration for seamless customer support and sales automation.</p>
                <a href="#contact" class="block mt-3 text-blue-600 hover:underline">Get Started</a>
            </div>
            <div class="section-card p-6 rounded-lg text-center">
                <img src="https://nirobtech.com/images/business-automation-2025.jpg" alt="Business Automation System 2025" class="w-full h-40 object-cover rounded-lg mb-4" loading="lazy">
                <h3 class="text-xl font-semibold mb-3">Business Automation System</h3>
                <p class="text-sm mb-3">Streamline operations with AI-driven automation and Chatbot Integration.</p>
                <a href="#contact" class="block mt-3 text-blue-600 hover:underline">Get Started</a>
            </div>
            <div class="section-card p-6 rounded-lg text-center">
                <img src="https://nirobtech.com/images/website-development-2025.jpg" alt="Website Development 2025" class="w-full h-40 object-cover rounded-lg mb-4" loading="lazy">
                <h3 class="text-xl font-semibold mb-3">Website Development & Management</h3>
                <p class="text-sm mb-3">SEO-optimized websites with Chatbot Integration for businesses.</p>
                <a href="#contact" class="block mt-3 text-blue-600 hover:underline">Get Started</a>
            </div>
            <div class="section-card p-6 rounded-lg text-center">
                <img src="https://nirobtech.com/images/ai-prompts-2025.jpg" alt="AI Prompts Engineering 2025" class="w-full h-40 object-cover rounded-lg mb-4" loading="lazy">
                <h3 class="text-xl font-semibold mb-3">AI Prompts Engineering & Scripting</h3>
                <p class="text-sm mb-3">Custom AI scripts to enhance Chatbot Integration efficiency.</p>
                <a href="#contact" class="block mt-3 text-blue-600 hover:underline">Get Started</a>
            </div>
        </div>
    </section>

    <!-- Portfolio -->
    <section id="portfolio" class="py-20 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 animate-section">
        <h2 class="text-3xl font-bold text-center mb-10">Our AI-Powered Portfolio</h2>
        <div class="flex justify-center space-x-3 mb-6 flex-wrap">
            <button onclick="filterPortfolio('all')" class="cta-button text-white px-4 py-2 rounded-lg text-sm">All</button>
            <button onclick="filterPortfolio('chatbot')" class="cta-button text-white px-4 py-2 rounded-lg text-sm">Chatbot</button>
            <button onclick="filterPortfolio('website')" class="cta-button text-white px-4 py-2 rounded-lg text-sm">Website</button>
            <button onclick="filterPortfolio('automation')" class="cta-button text-white px-4 py-2 rounded-lg text-sm">Automation</button>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="portfolio-item section-card p-6 rounded-lg text-center active" data-category="all chatbot">
                <img src="https://nirobtech.com/images/chatbot-portfolio-1.jpg" alt="Chatbot Integration E-Commerce 2025" class="w-full h-40 object-cover rounded-lg mb-3" loading="lazy">
                <h3 class="text-base font-semibold mb-2">E-Commerce Chatbot</h3>
                <p class="text-sm">Chatbot Integration for a USA-based e-commerce platform.</p>
                <a href="#contact" class="block mt-2 text-blue-600 hover:underline text-sm">Contact</a>
            </div>
            <div class="portfolio-item section-card p-6 rounded-lg text-center" data-category="all website">
                <img src="https://nirobtech.com/images/website-portfolio-1.jpg" alt="Website Development UK 2025" class="w-full h-40 object-cover rounded-lg mb-3" loading="lazy">
                <h3 class="text-base font-semibold mb-2">Podcast Website</h3>
                <p class="text-sm">SEO-optimized website for a UK podcaster with Chatbot Integration.</p>
                <a href="#contact" class="block mt-2 text-blue-600 hover:underline text-sm">Contact</a>
            </div>
            <div class="portfolio-item section-card p-6 rounded-lg text-center" data-category="all automation">
                <img src="https://nirobtech.com/images/automation-portfolio-1.jpg" alt="Business Automation Canada 2025" class="w-full h-40 object-cover rounded-lg mb-3" loading="lazy">
                <h3 class="text-base font-semibold mb-2">Business Automation</h3>
                <p class="text-sm">Automation system with Chatbot Integration for a Canadian business.</p>
                <a href="#contact" class="block mt-2 text-blue-600 hover:underline text-sm">Contact</a>
            </div>
            <div class="portfolio-item section-card p-6 rounded-lg text-center" data-category="all automation">
                <img src="https://nirobtech.com/images/automation-portfolio-2.jpg" alt="AI Prompts Engineering 2025" class="w-full h-40 object-cover rounded-lg mb-3" loading="lazy">
                <h3 class="text-base font-semibold mb-2">AI Prompts Engineering</h3>
                <p class="text-sm">AI scripting for an Australian business with Chatbot Integration.</p>
                <a href="#contact" class="block mt-2 text-blue-600 hover:underline text-sm">Contact</a>
            </div>
        </div>
    </section>

    <!-- Success Stories -->
    <section id="success" class="py-20 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 bg-gray-900 glassmorphism animate-section">
        <h2 class="text-3xl font-bold text-center mb-10">Success Stories</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="section-card p-6 rounded-lg text-center">
                <img src="https://nirobtech.com/images/success-1.jpg" alt="Chatbot Integration Success 2025" class="w-full h-40 object-cover rounded-lg mb-3" loading="lazy">
                <h3 class="text-base font-semibold mb-2">E-Commerce Growth</h3>
                <p class="text-sm">Increased sales by 40% with Chatbot Integration for a USA store.</p>
                <a href="#contact" class="block mt-2 text-blue-600 hover:underline text-sm">Learn More</a>
            </div>
            <div class="section-card p-6 rounded-lg text-center">
                <img src="https://nirobtech.com/images/success-2.jpg" alt="Website Development Success 2025" class="w-full h-40 object-cover rounded-lg mb-3" loading="lazy">
                <h3 class="text-base font-semibold mb-2">Podcast Expansion</h3>
                <p class="text-sm">Doubled audience with a website for a UK podcaster.</p>
                <a href="#contact" class="block mt-2 text-blue-600 hover:underline text-sm">Learn More</a>
            </div>
            <div class="section-card p-6 rounded-lg text-center">
                <img src="https://nirobtech.com/images/success-3.jpg" alt="Automation Success 2025" class="w-full h-40 object-cover rounded-lg mb-3" loading="lazy">
                <h3 class="text-base font-semibold mb-2">Automation Efficiency</h3>
                <p class="text-sm">Saved 30% costs with automation in Australia.</p>
                <a href="#contact" class="block mt-2 text-blue-600 hover:underline text-sm">Learn More</a>
            </div>
        </div>
    </section>

    <!-- Buyer Questions -->
    <section id="buyer-questions" class="py-20 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 bg-gray-900 glassmorphism animate-section">
        <h2 class="text-3xl font-bold text-center mb-10">Common Buyer Questions</h2>
        <div class="space-y-4">
            <div class="section-card p-6 rounded-lg">
                <button onclick="toggleBuyerQuestion('buyer1')" class="w-full text-left text-base font-semibold flex justify-between items-center">
                    <span class="text-sm">How long does it take to deliver Chatbot Integration?</span>
                    <i class="fas fa-chevron-down"></i>
                </button>
                <div id="buyer1" class="buyer-question-answer mt-2 text-sm">
                    <p>Typically 7-14 days, depending on customization. Contact us for details.</p>
                </div>
            </div>
            <div class="section-card p-6 rounded-lg">
                <button onclick="toggleBuyerQuestion('buyer2')" class="w-full text-left text-base font-semibold flex justify-between items-center">
                    <span class="text-sm">Can I customize my website with Chatbot Integration?</span>
                    <i class="fas fa-chevron-down"></i>
                </button>
                <div id="buyer2" class="buyer-question-answer mt-2 text-sm">
                    <p>Yes, fully customizable with SEO and Chatbot Integration features.</p>
                </div>
            </div>
            <div class="section-card p-6 rounded-lg">
                <button onclick="toggleBuyerQuestion('buyer3')" class="w-full text-left text-base font-semibold flex justify-between items-center">
                    <span class="text-sm">What payment methods do you accept?</span>
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
                    "name": "How long does it take to deliver Chatbot Integration?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Typically 7-14 days, depending on customization. Contact us for details."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Can I customize my website with Chatbot Integration?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Yes, fully customizable with SEO and Chatbot Integration features."
                    }
                },
                {
                    "@type": "Question",
                    "name": "What payment methods do you accept?",
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
    <section id="faq" class="py-20 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 bg-gray-900 glassmorphism animate-section">
        <h2 class="text-3xl font-bold text-center mb-10">Frequently Asked Questions</h2>
        <div class="space-y-4">
            <div class="section-card p-6 rounded-lg">
                <button onclick="toggleFAQ('faq1')" class="w-full text-left text-base font-semibold flex justify-between items-center">
                    <span class="text-sm">What is Chatbot Integration?</span>
                    <i class="fas fa-chevron-down"></i>
                </button>
                <div id="faq1" class="faq-answer mt-2 text-sm">
                    <p>Automating customer support and sales with AI Chatbots for businesses.</p>
                </div>
            </div>
            <div class="section-card p-6 rounded-lg">
                <button onclick="toggleFAQ('faq2')" class="w-full text-left text-base font-semibold flex justify-between items-center">
                    <span class="text-sm">How does Chatbot Integration benefit my business?</span>
                    <i class="fas fa-chevron-down"></i>
                </button>
                <div id="faq2" class="faq-answer mt-2 text-sm">
                    <p>Improves efficiency, reduces costs, and enhances customer experience.</p>
                </div>
            </div>
            <div class="section-card p-6 rounded-lg">
                <button onclick="toggleFAQ('faq3')" class="w-full text-left text-base font-semibold flex justify-between items-center">
                    <span class="text-sm">Why choose Nirob Tech for Chatbot Integration?</span>
                    <i class="fas fa-chevron-down"></i>
                </button>
                <div id="faq3" class="faq-answer mt-2 text-sm">
                    <p>Proven expertise in USA, UK, Canada, Australia markets with 500+ projects by 2025.</p>
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
                    "name": "What is Chatbot Integration?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Automating customer support and sales with AI Chatbots for businesses."
                    }
                },
                {
                    "@type": "Question",
                    "name": "How does Chatbot Integration benefit my business?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Improves efficiency, reduces costs, and enhances customer experience."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Why choose Nirob Tech for Chatbot Integration?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Proven expertise in USA, UK, Canada, Australia markets with 500+ projects by 2025."
                    }
                }
            ]
        }
        </script>
    </section>

    <!-- Blog -->
    <section id="blog" class="py-20 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 animate-section">
        <h2 class="text-3xl font-bold text-center mb-10">Latest Blog Posts</h2>
        <div class="flex justify-center space-x-3 mb-6 flex-wrap">
            <button onclick="filterBlog('all')" class="cta-button text-white px-4 py-2 rounded-lg text-sm">All</button>
            <button onclick="filterBlog('chatbot')" class="cta-button text-white px-4 py-2 rounded-lg text-sm">Chatbot</button>
            <button onclick="filterBlog('website')" class="cta-button text-white px-4 py-2 rounded-lg text-sm">Website</button>
            <button onclick="filterBlog('automation')" class="cta-button text-white px-4 py-2 rounded-lg text-sm">Automation</button>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="blog-item section-card p-6 rounded-lg text-center active" data-category="all chatbot">
                <img src="https://nirobtech.com/images/blog-chatbot-2025.jpg" alt="Chatbot Integration Trends 2025" class="w-full h-40 object-cover rounded-lg mb-3" loading="lazy">
                <h3 class="text-base font-semibold mb-2">Chatbot Integration Trends 2025</h3>
                <p class="text-sm">Explore the latest advancements in Chatbot Integration for businesses.</p>
                <a href="#contact" class="block mt-2 text-blue-600 hover:underline text-sm">Read More</a>
            </div>
            <div class="blog-item section-card p-6 rounded-lg text-center" data-category="all website">
                <img src="https://nirobtech.com/images/blog-website-2025.jpg" alt="Website Development Tips 2025" class="w-full h-40 object-cover rounded-lg mb-3" loading="lazy">
                <h3 class="text-base font-semibold mb-2">Website Development Tips</h3>
                <p class="text-sm">Optimize your website with Chatbot Integration for growth.</p>
                <a href="#contact" class="block mt-2 text-blue-600 hover:underline text-sm">Read More</a>
            </div>
            <div class="blog-item section-card p-6 rounded-lg text-center" data-category="all automation">
                <img src="https://nirobtech.com/images/blog-automation-2025.jpg" alt="Business Automation Guide 2025" class="w-full h-40 object-cover rounded-lg mb-3" loading="lazy">
                <h3 class="text-base font-semibold mb-2">Business Automation Guide</h3>
                <p class="text-sm">How automation and Chatbot Integration transform operations.</p>
                <a href="#contact" class="block mt-2 text-blue-600 hover:underline text-sm">Read More</a>
            </div>
            <div class="blog-item section-card p-6 rounded-lg text-center" data-category="all automation">
                <img src="https://nirobtech.com/images/blog-ai-prompts-2025.jpg" alt="AI Prompts Engineering 2025" class="w-full h-40 object-cover rounded-lg mb-3" loading="lazy">
                <h3 class="text-base font-semibold mb-2">AI Prompts Engineering</h3>
                <p class="text-sm">Enhance Chatbot Integration with custom AI scripts.</p>
                <a href="#contact" class="block mt-2 text-blue-600 hover:underline text-sm">Read More</a>
            </div>
        </div>
    </section>

    <!-- Contact -->
    <section id="contact" class="py-20 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 bg-gray-900 glassmorphism animate-section">
        <h2 class="text-3xl font-bold text-center mb-10">Contact Nirob Tech</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="section-card p-8 rounded-lg">
                <h3 class="text-xl font-semibold mb-3">Get in Touch</h3>
                <p class="text-sm mb-3">Claim your 80% discount on Chatbot Integration now!</p>
                <p class="mb-2 text-sm"><i class="fas fa-envelope mr-2"></i> <a href="mailto:nirob@nirobtech.com" class="text-blue-600 hover:underline">nirob@nirobtech.com</a></p>
                <p class="mb-2 text-sm"><i class="fas fa-briefcase mr-2"></i> <a href="https://www.fiverr.com/users/muhnirob?ref=1083553" target="_blank" class="text-blue-600 hover:underline">Hire on Fiverr</a></p>
            </div>
            <div class="section-card p-8 rounded-lg">
                <h3 class="text-xl font-semibold mb-3">Send a Message</h3>
                <?php if (isset($success)): ?>
                    <p class="text-green-600 mb-3 text-sm"><?php echo $success; ?></p>
                <?php elseif (isset($error)): ?>
                    <p class="text-red-600 mb-3 text-sm"><?php echo $error; ?></p>
                <?php endif; ?>
                <form action="#contact" method="POST" class="space-y-3">
                    <input type="text" name="name" placeholder="Your Name" class="w-full p-2 rounded bg-gray-100 text-gray-800 text-sm" required>
                    <input type="email" name="email" placeholder="Your Email" class="w-full p-2 rounded bg-gray-100 text-gray-800 text-sm" required>
                    <textarea name="message" placeholder="Your Message" class="w-full p-2 rounded bg-gray-100 text-gray-800 h-24 text-sm" required></textarea>
                    <button type="submit" class="w-full cta-button text-white p-2 rounded text-sm">Send Message</button>
                </form>
            </div>
        </div>
    </section>

    <!-- Offer Section -->
    <section id="offer" class="py-20 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 bg-gray-900 glassmorphism animate-section">
        <h2 class="text-3xl font-bold text-center mb-10">Exclusive Offer</h2>
        <div class="swiper-container mb-6">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <h3 class="text-xl font-semibold mb-2">80% Discount!</h3>
                    <p class="text-sm mb-3">First 10 clients get 80% off on Chatbot Integration + lifetime support.</p>
                    <a href="#contact" class="cta-button text-white px-4 py-2 rounded-lg text-sm">Claim Now</a>
                </div>
                <div class="swiper-slide">
                    <h3 class="text-xl font-semibold mb-2">Join Our Mission</h3>
                    <p class="text-sm mb-3">Help us reach 500 Chatbot Integration projects by 2025!</p>
                    <a href="#contact" class="cta-button text-white px-4 py-2 rounded-lg text-sm">Get Involved</a>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
        <div class="section-card p-8 rounded-lg text-center">
            <h3 class="text-2xl font-bold mb-3">Limited Time Offer!</h3>
            <p class="text-base mb-3">First 10 Clients Get <b>80% Discount</b> + <b>Lifetime Support</b> on Chatbot Integration!</p>
            <div class="text-lg mb-3">
                <p>Offer Ends in: <span id="offerTimer">23:59:59</span></p>
            </div>
            <a href="#contact" class="cta-button text-white px-6 py-2 rounded-lg">Claim Now</a>
        </div>
    </section>

    <!-- Footer -->
    <footer class="py-12 bg-gray-900 glassmorphism animate-section">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                <div>
                    <h3 class="text-xl font-semibold mb-3">Nirob Tech</h3>
                    <p class="text-sm">Specializing in Chatbot Integration, targeting 500 projects by 2025 in USA, UK, Canada, Australia.</p>
                </div>
                <div>
                    <h3 class="text-xl font-semibold mb-3">Services</h3>
                    <ul class="text-sm space-y-2">
                        <li><a href="#services" class="hover:text-green-400">AI Chatbot Development</a></li>
                        <li><a href="#services" class="hover:text-green-400">Business Automation System</a></li>
                        <li><a href="#services" class="hover:text-green-400">Website Development & Management</a></li>
                        <li><a href="#services" class="hover:text-green-400">AI Prompts Engineering & Scripting</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-xl font-semibold mb-3">Quick Links</h3>
                    <ul class="text-sm space-y-2">
                        <li><a href="#about" class="hover:text-green-400">About</a></li>
                        <li><a href="#portfolio" class="hover:text-green-400">Portfolio</a></li>
                        <li><a href="#success" class="hover:text-green-400">Success Stories</a></li>
                        <li><a href="#buyer-questions" class="hover:text-green-400">Buyer Questions</a></li>
                        <li><a href="#faq" class="hover:text-green-400">FAQ</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-xl font-semibold mb-3">Newsletter</h3>
                    <form action="/newsletter" method="POST" class="space-y-2">
                        <input type="email" name="newsletter_email" placeholder="Your Email" class="w-full p-2 rounded bg-gray-100 text-gray-800 text-sm">
                        <button type="submit" class="w-full cta-button text-white p-2 rounded text-sm">Subscribe</button>
                    </form>
                </div>
            </div>
            <div class="mt-6 text-center text-sm">
                <p>© 2025 Nirob Tech. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- JavaScript -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        // Swiper
        const swiper = new Swiper('.swiper-container', {
            loop: true,
            autoplay: { delay: 4000 },
            pagination: { el: '.swiper-pagination', clickable: true },
            slidesPerView: 1,
            spaceBetween: 16,
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
            const timers = [document.getElementById('timer'), document.getElementById('offerTimer')];
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

        function filterBlog(category) {
            const items = document.querySelectorAll('.blog-item');
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
                    response.textContent = 'Thanks for your message! How can Nirob Tech assist with Chatbot Integration?';
                    messages.appendChild(response);
                    messages.scrollTop = messages.scrollHeight;
                }, 1000);
            }
        }
    </script>
</body>
</html>
