<?php
session_start();
require_once '../config/database.php';
$page_title = isset($page_title) ? $page_title : 'NirobTech';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="NirobTech provides AI Chatbot, Podcast Automation, Social Media Automation, Website Development, and Cybersecurity solutions for businesses in USA, UK, Canada, Australia, and worldwide.">
    <meta name="keywords" content="AI Chatbot, Podcast Automation, Social Media Automation, Website Development, Cybersecurity, NirobTech">
    <meta name="author" content="MUH Nirob">
    <title><?php echo htmlspecialchars($page_title); ?> - NirobTech</title>
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="icon" href="/assets/img/favicon.ico">
    <!-- Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-XXXXX-X"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-XXXXX-X');
    </script>
</head>
<body>
    <header>
        <div class="logo">
            <img src="/assets/img/logo.png" alt="NirobTech Logo">
            <h1>NirobTech</h1>
        </div>
        <nav>
            <ul>
                <li><a href="/index.php">Home</a></li>
                <li><a href="/about.php">About</a></li>
                <li><a href="/services.php">Services</a></li>
                <li><a href="/pricing.php">Pricing</a></li>
                <li><a href="/blog.php">Blog</a></li>
                <li><a href="/contact.php">Contact</a></li>
                <li><a href="/client-portal/dashboard.php">Client Portal</a></li>
            </ul>
        </nav>
        <div class="cta">
            <a href="/contact.php" class="btn">Get Started</a>
        </div>
    </header>a
