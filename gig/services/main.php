<?php
// Contact Form Processing
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    
    // Email sending logic
    $to = "your-email@nirobtech.com"; // Replace with your email
    $subject = "New Contact Form Submission from nirobtech.com";
    $body = "Name: $name\nEmail: $email\nMessage: $message";
    $headers = "From: $email";
    
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
    <meta name="description" content="NirobTech by MUH Nirob offers AI Chatbot, Website Development, Podcast Automation, Social Automation, Ecosystem, API, AI Prompts Engineer, Podcast Promotion, and AI Solutions for your business growth.">
    <meta name="keywords" content="AI Chatbot, Website Development, Podcast Automation, Social Automation, Ecosystem, API, AI Prompts Engineer, Podcast Promotion, AI, NirobTech, MUH Nirob, Online Income">
    <meta name="author" content="MUH Nirob">
    
    <!-- Open Graph for Social Media -->
    <meta property="og:title" content="NirobTech - AI & Automation Solutions by MUH Nirob">
    <meta property="og:description" content="Transform your business with AI Chatbots, Website Development, Podcast Automation, Social Automation, and more by MUH Nirob.">
    <meta property="og:image" content="https://nirobtech.com/og-image.jpg">
    <meta property="og:url" content="https://nirobtech.com">
    <meta property="og:type" content="website">
    
    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="NirobTech - AI & Automation Solutions">
    <meta name="twitter:description" content="Explore AI-powered solutions and online income opportunities with MUH Nirob at NirobTech.">
    <meta name="twitter:image" content="https://nirobtech.com/og-image.jpg">

    <!-- Schema.org Structured Data -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "NirobTech",
        "url": "https://nirobtech.com",
        "logo": "https://nirobtech.com/logo.png",
        "contactPoint": {
            "@type": "ContactPoint",
            "email": "contact@nirobtech.com",
            "contactType": "Customer Service"
        },
        "founder": {
            "@type": "Person",
            "name": "MUH Nirob"
        },
        "sameAs": [
            "https://github.com/muhnirob24",
            "https://facebook.com/muhnirob",
            "https://linkedin.com/in/muhnirob"
        ]
    }
    </script>

    <title>NirobTech - AI & Automation Solutions by MUH Nirob</title>
    
    <!-- Favicon -->
    <link rel="icon" href="favicon.ico">
    
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    
    <!-- Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Custom CSS -->
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
        .service-card, .portfolio-card, .testimonial-card {
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
        }
        .service-card:hover, .portfolio-card:hover, .testimonial-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
        }
        .animate-hero {
            animation: fadeIn 1s ease-in-out;
        }
        @keyframes fadeIn {
            0% { opacity: 0; transform: translateY(20px); }
            100% { opacity: 1; transform: translateY(0); }
        }
        .chatbot {
            position: fixed;
            bottom: 20px;
            z-index: 1000;
            background: #00ff88;
            padding: 10px;
            border-radius: 50%;
            cursor: pointer;
        }
        .chatbot-left {
            left: 20px;
        }
        .chatbot-right {
            right: 20px;
        }
        .chatbot-window {
            display: none;
            position: fixed;
            bottom: 80px;
            width: 300px;
            background: #fff;
            color: #000;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
            padding: 15px;
        }
        .chatbot-window.active {
            display: block;
        }
    </style>
</head>
<body class="bg-gradient-to-br from-indigo-900 to-blue-600 text-white">
    <!-- Floating Chatbots -->
    <div class="chatbot chatbot-left" onclick="toggleChatbot('chatbot1')">
        <i class="fas fa-robot fa-2x"></i>
    </div>
    <div class="chatbot chatbot-right" onclick="toggleChatbot('chatbot2')">
        <i class="fas fa-robot fa-2x"></i>
    </div>
    
    <!-- Chatbot Windows -->
    <div id="chatbot1" class="chatbot-window chatbot-left">
        <h3 class="text-lg font-semibold mb-2">Online Income Bot</h3>
        <p>Want to earn online? Join our team or explore opportunities!</p>
        <a href="https://www.profitableratecpm.com/q50i8hhww?key=c9f2fcf4e4236d197a23cc4d2405c35e" target="_blank" class="block bg-green-400 text-black p-2 rounded mt-2">Explore Now</a>
        <a href="#contact" class="block text-blue-600 underline mt-2">Join Our Team</a>
    </div>
    <div id="chatbot2" class="chatbot-window chatbot-right">
        <h3 class="text-lg font-semibold mb-2">Team Joining Bot</h3>
        <p>Join MUH Nirob's team to collaborate on exciting projects!</p>
        <a href="https://www.profitableratecpm.com/ejvxn2t4wn?key=dcc30e11dd326b70ccdb63ac5b6e22fb" target="_blank" class="block bg-green-400 text-black p-2 rounded mt-2">Get Started</a>
        <a href="#contact" class="block text-blue-600 underline mt-2">Contact Us</a>
    </div>
    
    <!-- Social Share Chatbot -->
    <div id="socialChatbot" class="chatbot-window" style="bottom: 140px; right: 20px;">
        <h3 class="text-lg font-semibold mb-2">Share NirobTech</h3>
        <p>Share our services with your network!</p>
        <div class="flex space-x-2 mt-2">
            <a href="https://www.facebook.com/sharer/sharer.php?u=https://nirobtech.com" target="_blank" class="bg-blue-600 p-2 rounded"><i class="fab fa-facebook-f"></i></a>
            <a href="https://twitter.com/intent/tweet?url=https://nirobtech.com&text=Check%20out%20NirobTech%20by%20MUH%20Nirob!" target="_blank" class="bg-blue-400 p-2 rounded"><i class="fab fa-twitter"></i></a>
            <a href="https://www.linkedin.com/shareArticle?url=https://nirobtech.com&title=NirobTech%20by%20MUH%20Nirob" target="_blank" class="bg-blue-800 p-2 rounded"><i class="fab fa-linkedin-in"></i></a>
        </div>
    </div>
    
    <!-- Service Info Chatbot -->
    <div id="serviceChatbot" class="chatbot-window" style="bottom: 200px; right: 20px;">
        <h3 class="text-lg font-semibold mb-2">About Our Services</h3>
        <p>Ask about our services or website sections!</p>
        <select onchange="showServiceInfo(this.value)" class="w-full p-2 rounded mt-2">
            <option value="">Select a Service</option>
            <option value="ai-chatbot">AI Chatbot</option>
            <option value="website-dev">Website Development</option>
            <option value="podcast-auto">Podcast Automation</option>
            <option value="social-auto">Social Automation</option>
            <option value="ecosystem">Ecosystem</option>
            <option value="api">API Development</option>
            <option value="ai-prompts">AI Prompts Engineer</option>
            <option value="podcast-promo">Podcast Promotion</option>
            <option value="ai-solutions">AI Solutions</option>
        </select>
        <div id="serviceInfo" class="mt-2"></div>
    </div>

    <!-- Header -->
    <header class="fixed top-0 w-full bg-black bg-opacity-80 z-50">
        <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4 flex justify-between items-center">
            <div class="text-2xl font-bold">NirobTech</div>
            <div class="space-x-4">
                <a href="#home" class="hover:text-green-400 transition">Home</a>
                <a href="#about" class="hover:text-green-400 transition">About</a>
                <a href="#services" class="hover:text-green-400 transition">Services</a>
                <a href="#portfolio" class="hover:text-green-400 transition">Portfolio</a>
                <a href="#testimonials" class="hover:text-green-400 transition">Testimonials</a>
                <a href="#faq" class="hover:text-green-400 transition">FAQ</a>
                <a href="#income" class="hover:text-green-400 transition">Online Income</a>
                <a href="#contact" class="hover:text-green-400 transition">Contact</a>
            </div>
        </nav>
    </header>

    <!-- Hero Section -->
    <section id="home" class="min-h-screen flex items-center justify-center text-center px-4 bg-cover bg-center" style="background-image: url('hero-bg.jpg')">
        <div class="animate-hero">
            <h1 class="text-5xl sm:text-6xl font-bold mb-6">NirobTech by MUH Nirob</h1>
            <p class="text-xl sm:text-2xl mb-8">Empowering businesses with AI, Automation, and Online Income Solutions.</p>
            <a href="#contact" class="bg-green-400 text-black px-6 py-3 rounded-lg font-semibold hover:bg-green-500 transition">Get Started</a>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-16 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-4xl font-bold text-center mb-12">About NirobTech</h2>
        <p class="text-lg text-center">Founded by MUH Nirob, NirobTech is a leading provider of AI-driven solutions, helping businesses automate processes, enhance online presence, and generate passive income through innovative strategies.</p>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-16 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-4xl font-bold text-center mb-12">Our Services</h2>
       

 <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- AI Chatbot -->
            <div class="service-card bg-white bg-opacity-10 p-6 rounded-lg">
                <h3 class="text-2xl font-semibold mb-4">AI Chatbot</h3>
                <p>Automate customer engagement with AI-powered chatbots.</p>
                <ul class="list-disc list-inside mt-4 text-sm">
                    <li>Custom Chatbot Design</li>
                    <li>Multi-Platform Integration</li>
                    <li>24/7 Customer Support Automation</li>
                    <li>NLP-Powered Responses</li>
                    <li>Analytics and Reporting</li>
                </ul>
                <a href="#contact" class="block mt-4 text-green-400 hover:underline">Learn More</a>
            </div>
            <!-- Website Development -->
            <div class="service-card bg-white bg-opacity-10 p-6 rounded-lg">
                <h3 class="text-2xl font-semibold mb-4">Website Development</h3>
                <p>Modern, responsive, and SEO-friendly websites.</p>
                <ul class="list-disc list-inside mt-4 text-sm">
                    <li>E-commerce Solutions</li>
                    <li>Custom Web Apps</li>
                    <li>SEO Optimization</li>
                    <li>UI/UX Design</li>
                    <li>Maintenance & Updates</li>
                </ul>
                <a href="#contact" class="block mt-4 text-green-400 hover:underline">Learn More</a>
            </div>
            <!-- Podcast Automation -->
            <div class="service-card bg-white bg-opacity-10 p-6 rounded-lg">
                <h3 class="text-2xl font-semibold mb-4">Podcast Automation</h3>
                <p>Streamline podcast production and publishing.</p>
                <ul class="list-disc list-inside mt-4 text-sm">
                    <li>Automated Editing</li>
                    <li>Episode Scheduling</li>
                    <li>Distribution to Platforms</li>
                    <li>Audio Enhancement</li>
                    <li>RSS Feed Management</li>
                </ul>
                <a href="#contact" class="block mt-4 text-green-400 hover:underline">Learn More</a>
            </div>
            <!-- Social Automation -->
            <div class="service-card bg-white bg-opacity-10 p-6 rounded-lg">
                <h3 class="text-2xl font-semibold mb-4">Social Automation</h3>
                <p>Boost your social media presence with automation.</p>
                <ul class="list-disc list-inside mt-4 text-sm">
                    <li>Content Scheduling</li>
                    <li>Analytics Tracking</li>
                    <li>Engagement Automation</li>
                    <li>Social Media Ads</li>
                    <li>Cross-Platform Posting</li>
                </ul>
                <a href="#contact" class="block mt-4 text-green-400 hover:underline">Learn More</a>
            </div>
            <!-- Ecosystem -->
            <div class="service-card bg-white bg-opacity-10 p-6 rounded-lg">
                <h3 class="text-2xl font-semibold mb-4">Ecosystem</h3>
                <p>Integrated digital ecosystems for seamless workflows.</p>
                <ul class="list-disc list-inside mt-4 text-sm">
                    <li>Cross-Platform Integration</li>
                    <li>Workflow Automation</li>
                    <li>Scalable Solutions</li>
                    <li>Data Synchronization</li>
                    <li>Custom Dashboards</li>
                </ul>
                <a href="#contact" class="block mt-4 text-green-400 hover:underline">Learn More</a>
            </div>
            <!-- API Development -->
            <div class="service-card bg-white bg-opacity-10 p-6 rounded-lg">
                <h3 class="text-2xl font-semibold mb-4">API Development</h3>
                <p>Custom APIs for seamless integration.</p>
                <ul class="list-disc list-inside mt-4 text-sm">
                    <li>RESTful API Design</li>
                    <li>Third-Party Integration</li>
                    <li>API Documentation</li>
                    <li>Secure API Endpoints</li>
                    <li>API Testing</li>
                </ul>
                <a href="#contact" class="block mt-4 text-green-400 hover:underline">Learn More</a>
            </div>
            <!-- AI Prompts Engineer -->
            <div class="service-card bg-white bg-opacity-10 p-6 rounded-lg">
                <h3 class="text-2xl font-semibold mb-4">AI Prompts Engineer</h3>
                <p>Design and optimize AI prompts for maximum efficiency.</p>
                <ul class="list-disc list-inside mt-4 text-sm">
                    <li>Prompt Optimization</li>
                    <li>AI Model Training</li>
                    <li>Custom AI Workflows</li>
                    <li>Content Generation</li>
                    <li>Prompt Testing</li>
                </ul>
                <a href="#contact" class="block mt-4 text-green-400 hover:underline">Learn More</a>
            </div>
            <!-- Podcast Promotion -->
            <div class="service-card bg-white bg-opacity-10 p-6 rounded-lg">
                <h3 class="text-2xl font-semibold mb-4">Podcast Promotion</h3>
                <p>Amplify your podcast reach with targeted marketing.</p>
                <ul class="list-disc list-inside mt-4 text-sm">
                    <li>Social Media Campaigns</li>
                    <li>SEO for Podcasts</li>
                    <li>Sponsorship Management</li>
                    <li>Audience Targeting</li>
                    <li>Analytics Reporting</li>
                </ul>
                <a href="#contact" class="block mt-4 text-green-400 hover:underline">Learn More</a>
            </div>
            <!-- AI Solutions -->
            <div class="service-card bg-white bg-opacity-10 p-6 rounded-lg">
                <h3 class="text-2xl font-semibold mb-4">AI Solutions</h3>
                <p>Advanced AI tools to drive innovation.</p>
                <ul class="list-disc list-inside mt-4 text-sm">
                    <li>Machine Learning Models</li>
                    <li>Data Analysis</li>
                    <li>AI Consulting</li>
                    <li>Predictive Analytics</li>
                    <li>Automation Solutions</li>
                </ul>
                <a href="#contact" class="block mt-4 text-green-400 hover:underline">Learn More</a>
            </div>
        </div>
    </section>

    <!-- Portfolio Section -->
    <section id="portfolio" class="py-16 bg-gray-900 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-4xl font-bold text-center mb-12">Our Portfolio</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="portfolio-card bg-white bg-opacity-10 p-6 rounded-lg">
                <img src="portfolio-1.jpg" alt="AI Chatbot Project by NirobTech" class="w-full h-48 object-cover rounded-lg mb-4">
                <h3 class="text-xl font-semibold">AI Chatbot for E-commerce</h3>
                <p>Developed a chatbot for 24/7 customer support.</p>
            </div>
            <div class="portfolio-card bg-white bg-opacity-10 p-6 rounded-lg">
                <img src="portfolio-2.jpg" alt="Website Development Project by NirobTech" class="w-full h-48 object-cover rounded-lg mb-4">
                <h3 class="text-xl font-semibold">Custom Website for Startup</h3>
                <p>Built a responsive website with SEO optimization.</p>
            </div>
            <div class="portfolio-card bg-white bg-opacity-10 p-6 rounded-lg">
                <img src="portfolio-3.jpg" alt="Podcast Automation Project by NirobTech" class="w-full h-48 object-cover rounded-lg mb-4">
                <h3 class="text-xl font-semibold">Podcast Automation Tool</h3>
                <p>Automated podcast publishing and distribution.</p>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="py-16 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-4xl font-bold text-center mb-12">What Our Clients Say</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="testimonial-card bg-white bg-opacity-10 p-6 rounded-lg">
                <p class="italic">"MUH Nirob's AI chatbot transformed our customer support!"</p>
                <p class="mt-4 font-semibold">- John Doe, CEO</p>
            </div>
            <div class="testimonial-card bg-white bg-opacity-10 p-6 rounded-lg">
                <p class="italic">"The website developed by NirobTech boosted our sales."</p>
                <p class="mt-4 font-semibold">- Jane Smith, Founder</p>
            </div>
            <div class="testimonial-card bg-white bg-opacity-10 p-6 rounded-lg">
                <p class="italic">"Podcast automation saved us hours of work!"</p>
                <p class="mt-4 font-semibold">- Alex Brown, Podcaster</p>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section id="faq" class="py-16 bg-gray-900 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-4xl font-bold text-center mb-12">Frequently Asked Questions</h2>
        <div class="space-y-4">
            <div class="bg-white bg-opacity-10 p-4 rounded-lg">
                <h3 class="text-lg font-semibold">What services does NirobTech offer?</h3>
                <p>We provide AI Chatbots, Website Development, Podcast Automation, Social Automation, and more.</p>
            </div>
            <div class="bg-white bg-opacity-10 p-4 rounded-lg">
                <h3 class="text-lg font-semibold">How can I join your team?</h3>
                <p>Contact us or explore our online income opportunities through the chatbot!</p>
            </div>
            <div class="bg-white bg-opacity-10 p-4 rounded-lg">
                <h3 class="text-lg font-semibold">What is the cost of your services?</h3>
                <p>Pricing depends on the project. Contact us for a custom quote!</p>
            </div>
        </div>
    </section>

    <!-- Online Income Section -->
    <section id="income" class="py-16 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-4xl font-bold text-center mb-12">Online Income Opportunities</h2>
        <p class="text-lg text-center mb-8">Want to earn passive income online? Join MUH Nirob's team or explore our proven strategies!</p>
        <div class="flex justify-center space-x-4">
            <a href="https://www.profitableratecpm.com/q50i8hhww?key=c9f2fcf4e4236d197a23cc4d2405c35e" target="_blank" class="bg-green-400 text-black px-6 py-3 rounded-lg font-semibold hover:bg-green-500 transition">Start Earning</a>
            <a href="#contact" class="bg-blue-400 text-black px-6 py-3 rounded-lg font-semibold hover:bg-blue-500 transition">Join Our Team</a>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-16 max-w-lg mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-4xl font-bold text-center mb-12">Contact Us</h2>
        <?php if (isset($success)) echo "<p class='text-green-400 text-center mb-4'>$success</p>"; ?>
        <?php if (isset($error)) echo "<p class='text-red-400 text-center mb-4'>$error</p>"; ?>
        <form method="POST" action="" class="space-y-4">
            <input type="text" name="name" placeholder="Your Name" required class="w-full p-3 rounded-lg bg-white bg-opacity-10 text-white border-none focus:outline-none focus:ring-2 focus:ring-green-400">
            <input type="email" name="email" placeholder="Your Email" required class="w-full p-3 rounded-lg bg-white bg-opacity-10 text-white border-none focus:outline-none focus:ring-2 focus:ring-green-400">
            <textarea name="message" placeholder="Your Message" rows="5" required class="w-full p-3 rounded-lg bg-white bg-opacity-10 text-white border-none focus:outline-none focus:ring-2 focus:ring-green-400"></textarea>
            <button type="submit" class="w-full bg-green-400 text-black p-3 rounded-lg font-semibold hover:bg-green-500 transition">Send Message</button>
        </form>
    </section>

    <!-- Footer -->
    <footer class="py-6 bg-black text-center">
        <p>© 2025 NirobTech by MUH Nirob. All Rights Reserved.</p>
        <div class="mt-4 space-x-4">
            <a href="https://github.com/muhnirob24" class="hover:text-green-400">GitHub</a>
            <a href="https://facebook.com/muhnirob" class="hover:text-green-400">Facebook</a>
            <a href="https://linkedin.com/in/muhnirob" class="hover:text-green-400">LinkedIn</a>
        </div>
    </footer>

    <!-- Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=YOUR-GA-ID"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'YOUR-GA-ID'); // Replace with your Google Analytics ID
    </script>

    <!-- Chatbot JavaScript -->
    <script>
        function toggleChatbot(id) {
            const chatbot = document.getElementById(id);
            chatbot.classList.toggle('active');
        }

        function showServiceInfo(service) {
            const serviceInfo = document.getElementById('serviceInfo');
            const info = {
                'ai-chatbot': 'Our AI Chatbots automate customer support, integrate with platforms, and provide analytics.',
                'website-dev': 'We build responsive, SEO-friendly websites with custom apps and e-commerce solutions.',
                'podcast-auto': 'Automate podcast editing, scheduling, and distribution with our advanced tools.',
                'social-auto': 'Boost your social media with automated content posting, ads, and analytics.',
                'ecosystem': 'Create integrated digital ecosystems for seamless business workflows.',
                'api': 'Develop secure, scalable APIs with comprehensive documentation.',
                'ai-prompts': 'Optimize AI prompts for content generation and model training.',
                'podcast-promo': 'Promote your podcast with targeted campaigns and SEO strategies.',
                'ai-solutions': 'Leverage AI for data analysis, predictive analytics, and automation.'
            };
            serviceInfo.innerHTML = info[service] || 'Please select a service to learn more.';
        }

        // Auto-open social chatbot after 5 seconds
        setTimeout(() => {
            document.getElementById('socialChatbot').classList.add('active');
        }, 5000);
    </script>

    <!-- Smooth Scrolling -->
    <script>
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>
</body>
</html>
