@extends('portfolio.layouts.app')

@section('content')
    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="hero-bg">
            <div class="gradient-blob blob-1"></div>
            <div class="gradient-blob blob-2"></div>
            <div class="gradient-blob blob-3"></div>
        </div>

        <div class="hero-container container">
            <div class="hero-content">
                <p class="hero-greeting" data-aos="fade-down" data-aos-delay="100">Hello, I'm</p>
                <h1 class="hero-name" id="heroName">
                    <span class="name-letter">S</span><span class="name-letter">u</span><span
                        class="name-letter">m</span><span class="name-letter">i</span><span class="name-letter">t</span>
                    <span class="name-space"></span>
                    <span class="name-letter">S</span><span class="name-letter">h</span><span
                        class="name-letter">i</span><span class="name-letter">v</span><span
                        class="name-letter">h</span><span class="name-letter">a</span><span
                        class="name-letter">r</span><span class="name-letter">e</span>
                </h1>
                <div class="hero-role" data-aos="fade-up" data-aos-delay="300">
                    <span class="role-prefix">I'm a</span>
                    <span class="role-text" id="roleText"></span>
                    <span class="role-cursor">|</span>
                </div>
                <p class="hero-description" data-aos="fade-up" data-aos-delay="400">
                    Crafting robust, scalable web applications with modern technologies.
                    Passionate about clean code and exceptional user experiences.
                </p>
                <div class="hero-buttons" data-aos="fade-up" data-aos-delay="500">
                    <a href="#contact" class="btn btn-primary btn-glow">
                        <i class="bi bi-send-fill"></i> Hire Me
                    </a>
                    <a href="#projects" class="btn btn-outline">
                        <i class="bi bi-folder2-open"></i> View Work
                    </a>
                </div>
                <div class="hero-social" data-aos="fade-up" data-aos-delay="600">
                    <a href="https://github.com/sumitshivhare" target="_blank" rel="noopener" class="social-icon">
                        <i class="bi bi-github"></i>
                    </a>
                    <a href="https://linkedin.com/in/sumitshivhare" target="_blank" rel="noopener" class="social-icon">
                        <i class="bi bi-linkedin"></i>
                    </a>
                    <a href="mailto:s.shivhare985@gmail.com" class="social-icon">
                        <i class="bi bi-envelope-fill"></i>
                    </a>
                </div>
            </div>

            <div class="hero-image" data-aos="zoom-in" data-aos-delay="200">
                <div class="image-wrapper">
                    <div class="image-glow"></div>
                    <img src="{{ Vite::asset('resources/images/portfolio/profile.png') }}" alt="Sumit Shivhare"
                        class="profile-img">
                    <div class="image-ring"></div>
                </div>
                <div class="floating-cards">
                    <div class="float-card card-1">
                        <i class="bi bi-code-slash"></i>
                        <span>2+ Years</span>
                    </div>
                    <div class="float-card card-2">
                        <i class="bi bi-check-circle-fill"></i>
                        <span>15+ Projects</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="scroll-indicator" data-aos="fade-up" data-aos-delay="700">
            <a href="#about">
                <div class="mouse">
                    <div class="wheel"></div>
                </div>
                <span>Scroll Down</span>
            </a>
        </div>
    </section>

    <!-- About Section -->
    <section class="about section" id="about">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <span class="section-subtitle">Get to know me</span>
                <h2 class="section-title">About Me</h2>
            </div>

            <div class="about-content">
                <div class="about-image" data-aos="fade-right">
                    <div class="image-container">
                        <img src="{{ Vite::asset('resources/images/portfolio/about.png') }}" alt="About Sumit Shivhare">
                        <div class="experience-badge">
                            <span class="badge-number">2+</span>
                            <span class="badge-text">Years Experience</span>
                        </div>
                    </div>
                </div>

                <div class="about-info" data-aos="fade-left">
                    <h3 class="about-heading">I'm Sumit, a Laravel Developer based in Noida, India</h3>
                    <p class="about-text">
                        I'm a passionate Full Stack Web Developer with over 2 years of experience in building
                        modern, scalable web applications. I specialize in Laravel, PHP, and the TALL stack,
                        creating solutions that are both powerful and user-friendly.
                    </p>
                    <p class="about-text">
                        My journey in web development started during my BCA at AKTU University, and I've since
                        worked with companies like Exiliensoft, WTF Digital, and Recall Infotech, contributing
                        to diverse projects ranging from CRM systems to client-facing applications.
                    </p>

                    <div class="about-details">
                        <div class="detail-item">
                            <i class="bi bi-person-fill"></i>
                            <div>
                                <span class="detail-label">Name</span>
                                <span class="detail-value">Sumit Shivhare</span>
                            </div>
                        </div>
                        <div class="detail-item">
                            <i class="bi bi-envelope-fill"></i>
                            <div>
                                <span class="detail-label">Email</span>
                                <span class="detail-value">s.shivhare985@gmail.com</span>
                            </div>
                        </div>
                        <div class="detail-item">
                            <i class="bi bi-telephone-fill"></i>
                            <div>
                                <span class="detail-label">Phone</span>
                                <span class="detail-value">+91 9084804158</span>
                            </div>
                        </div>
                        <div class="detail-item">
                            <i class="bi bi-geo-alt-fill"></i>
                            <div>
                                <span class="detail-label">Location</span>
                                <span class="detail-value">Noida, U.P., India</span>
                            </div>
                        </div>
                    </div>

                    <div class="about-buttons">
                        <a href="#contact" class="btn btn-primary">
                            <i class="bi bi-chat-dots-fill"></i> Let's Talk
                        </a>
                        <a href="{{ asset('resume.pdf') }}" download class="btn btn-outline">
                            <i class="bi bi-download"></i> Download CV
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section class="skills section" id="skills">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <span class="section-subtitle">My abilities</span>
                <h2 class="section-title">Skills & Technologies</h2>
            </div>

            <div class="skills-content">
                <div class="skills-bars" data-aos="fade-right">
                    <h3 class="skills-category">Technical Skills</h3>

                    <div class="skill-item">
                        <div class="skill-header">
                            <span class="skill-name">Laravel / PHP</span>
                            <span class="skill-percent">90%</span>
                        </div>
                        <div class="skill-bar">
                            <div class="skill-progress" data-progress="90"></div>
                        </div>
                    </div>

                    <div class="skill-item">
                        <div class="skill-header">
                            <span class="skill-name">MySQL / Database</span>
                            <span class="skill-percent">85%</span>
                        </div>
                        <div class="skill-bar">
                            <div class="skill-progress" data-progress="85"></div>
                        </div>
                    </div>

                    <div class="skill-item">
                        <div class="skill-header">
                            <span class="skill-name">JavaScript / jQuery</span>
                            <span class="skill-percent">80%</span>
                        </div>
                        <div class="skill-bar">
                            <div class="skill-progress" data-progress="80"></div>
                        </div>
                    </div>

                    <div class="skill-item">
                        <div class="skill-header">
                            <span class="skill-name">HTML / CSS / Bootstrap</span>
                            <span class="skill-percent">95%</span>
                        </div>
                        <div class="skill-bar">
                            <div class="skill-progress" data-progress="95"></div>
                        </div>
                    </div>

                    <div class="skill-item">
                        <div class="skill-header">
                            <span class="skill-name">Livewire</span>
                            <span class="skill-percent">75%</span>
                        </div>
                        <div class="skill-bar">
                            <div class="skill-progress" data-progress="75"></div>
                        </div>
                    </div>

                    <div class="skill-item">
                        <div class="skill-header">
                            <span class="skill-name">Git / GitHub</span>
                            <span class="skill-percent">85%</span>
                        </div>
                        <div class="skill-bar">
                            <div class="skill-progress" data-progress="85"></div>
                        </div>
                    </div>
                </div>

                <div class="skills-icons" data-aos="fade-left">
                    <h3 class="skills-category">Technologies I Work With</h3>
                    <div class="tech-grid">
                        <div class="tech-item" data-aos="zoom-in" data-aos-delay="100">
                            <div class="tech-icon"><i class="bi bi-filetype-php"></i></div>
                            <span>PHP</span>
                        </div>
                        <div class="tech-item" data-aos="zoom-in" data-aos-delay="150">
                            <div class="tech-icon"><i class="bi bi-box"></i></div>
                            <span>Laravel</span>
                        </div>
                        <div class="tech-item" data-aos="zoom-in" data-aos-delay="200">
                            <div class="tech-icon"><i class="bi bi-database"></i></div>
                            <span>MySQL</span>
                        </div>
                        <div class="tech-item" data-aos="zoom-in" data-aos-delay="250">
                            <div class="tech-icon"><i class="bi bi-filetype-js"></i></div>
                            <span>JavaScript</span>
                        </div>
                        <div class="tech-item" data-aos="zoom-in" data-aos-delay="300">
                            <div class="tech-icon"><i class="bi bi-bootstrap"></i></div>
                            <span>Bootstrap</span>
                        </div>
                        <div class="tech-item" data-aos="zoom-in" data-aos-delay="350">
                            <div class="tech-icon"><i class="bi bi-filetype-css"></i></div>
                            <span>CSS/SCSS</span>
                        </div>
                        <div class="tech-item" data-aos="zoom-in" data-aos-delay="400">
                            <div class="tech-icon"><i class="bi bi-git"></i></div>
                            <span>Git</span>
                        </div>
                        <div class="tech-item" data-aos="zoom-in" data-aos-delay="450">
                            <div class="tech-icon"><i class="bi bi-code-square"></i></div>
                            <span>Ajax</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section class="projects section" id="projects">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <span class="section-subtitle">My work</span>
                <h2 class="section-title">Featured Projects</h2>
            </div>

            <div class="projects-filter" data-aos="fade-up" data-aos-delay="100">
                <button class="filter-btn active" data-filter="all">All</button>
                <button class="filter-btn" data-filter="laravel">Laravel</button>
                <button class="filter-btn" data-filter="fullstack">Full Stack</button>
                <button class="filter-btn" data-filter="frontend">Frontend</button>
            </div>

            <div class="projects-grid">
                <!-- Project 1 -->
                <div class="project-card" data-category="laravel" data-aos="fade-up" data-aos-delay="100">
                    <div class="project-image">
                        <img src="{{ Vite::asset('resources/images/portfolio/project1.jpg') }}" alt="Client Demos App">
                        <div class="project-overlay">
                            <div class="project-links">
                                <a href="https://clientdemos.app" target="_blank" rel="noopener" class="project-link">
                                    <i class="bi bi-link-45deg"></i>
                                </a>
                                <a href="https://github.com" target="_blank" rel="noopener" class="project-link">
                                    <i class="bi bi-github"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="project-info">
                        <h3 class="project-title">Client Demos App</h3>
                        <p class="project-description">A comprehensive client management and demo platform built with
                            Laravel.</p>
                        <div class="project-tech">
                            <span>Laravel</span>
                            <span>MySQL</span>
                            <span>Bootstrap</span>
                        </div>
                    </div>
                </div>

                <!-- Project 2 -->
                <div class="project-card" data-category="fullstack" data-aos="fade-up" data-aos-delay="200">
                    <div class="project-image">
                        <img src="{{ Vite::asset('resources/images/portfolio/project2.jpg') }}" alt="Vallela CRM">
                        <div class="project-overlay">
                            <div class="project-links">
                                <a href="https://vallela.clientdemos.app" target="_blank" rel="noopener"
                                    class="project-link">
                                    <i class="bi bi-link-45deg"></i>
                                </a>
                                <a href="https://github.com" target="_blank" rel="noopener" class="project-link">
                                    <i class="bi bi-github"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="project-info">
                        <h3 class="project-title">Vallela CRM System</h3>
                        <p class="project-description">Full-featured CRM with customer management, reporting, and analytics.
                        </p>
                        <div class="project-tech">
                            <span>Laravel</span>
                            <span>Livewire</span>
                            <span>MySQL</span>
                        </div>
                    </div>
                </div>

                <!-- Project 3 -->
                <div class="project-card" data-category="laravel" data-aos="fade-up" data-aos-delay="300">
                    <div class="project-image">
                        <img src="{{ Vite::asset('resources/images/portfolio/project3.jpg') }}" alt="HRMS Application">
                        <div class="project-overlay">
                            <div class="project-links">
                                <a href="https://hrms.clientdemos.app" target="_blank" rel="noopener" class="project-link">
                                    <i class="bi bi-link-45deg"></i>
                                </a>
                                <a href="https://github.com" target="_blank" rel="noopener" class="project-link">
                                    <i class="bi bi-github"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="project-info">
                        <h3 class="project-title">HRMS Application</h3>
                        <p class="project-description">Human Resource Management System with attendance, payroll, and
                            employee management.</p>
                        <div class="project-tech">
                            <span>Laravel</span>
                            <span>jQuery</span>
                            <span>Bootstrap</span>
                        </div>
                    </div>
                </div>

                <!-- Project 4 -->
                <div class="project-card" data-category="frontend" data-aos="fade-up" data-aos-delay="400">
                    <div class="project-image">
                        <img src="{{ Vite::asset('resources/images/portfolio/project4.jpg') }}" alt="Company Website">
                        <div class="project-overlay">
                            <div class="project-links">
                                <a href="#" target="_blank" rel="noopener" class="project-link">
                                    <i class="bi bi-link-45deg"></i>
                                </a>
                                <a href="https://github.com" target="_blank" rel="noopener" class="project-link">
                                    <i class="bi bi-github"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="project-info">
                        <h3 class="project-title">Company Portfolio</h3>
                        <p class="project-description">Modern responsive company website with animations and contact forms.
                        </p>
                        <div class="project-tech">
                            <span>HTML</span>
                            <span>CSS</span>
                            <span>JavaScript</span>
                        </div>
                    </div>
                </div>

                <!-- Project 5 -->
                <div class="project-card" data-category="fullstack" data-aos="fade-up" data-aos-delay="500">
                    <div class="project-image">
                        <img src="{{ Vite::asset('resources/images/portfolio/project5.jpg') }}" alt="E-commerce Platform">
                        <div class="project-overlay">
                            <div class="project-links">
                                <a href="#" target="_blank" rel="noopener" class="project-link">
                                    <i class="bi bi-link-45deg"></i>
                                </a>
                                <a href="https://github.com" target="_blank" rel="noopener" class="project-link">
                                    <i class="bi bi-github"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="project-info">
                        <h3 class="project-title">E-commerce Platform</h3>
                        <p class="project-description">Full-stack e-commerce solution with payment integration and admin
                            panel.</p>
                        <div class="project-tech">
                            <span>Laravel</span>
                            <span>Stripe</span>
                            <span>Bootstrap</span>
                        </div>
                    </div>
                </div>

                <!-- Project 6 -->
                <div class="project-card" data-category="laravel" data-aos="fade-up" data-aos-delay="600">
                    <div class="project-image">
                        <img src="{{ Vite::asset('resources/images/portfolio/project6.jpg') }}" alt="API Development">
                        <div class="project-overlay">
                            <div class="project-links">
                                <a href="#" target="_blank" rel="noopener" class="project-link">
                                    <i class="bi bi-link-45deg"></i>
                                </a>
                                <a href="https://github.com" target="_blank" rel="noopener" class="project-link">
                                    <i class="bi bi-github"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="project-info">
                        <h3 class="project-title">RESTful API Service</h3>
                        <p class="project-description">Secure REST API with authentication, rate limiting, and comprehensive
                            documentation.</p>
                        <div class="project-tech">
                            <span>Laravel</span>
                            <span>API</span>
                            <span>JWT</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Experience Section -->
    <section class="experience section" id="experience">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <span class="section-subtitle">My journey</span>
                <h2 class="section-title">Work Experience</h2>
            </div>

            <div class="timeline">
                <!-- Experience 1 -->
                <div class="timeline-item" data-aos="fade-up" data-aos-delay="100">
                    <div class="timeline-marker"></div>
                    <div class="timeline-content">
                        <div class="timeline-badge">Current</div>
                        <span class="timeline-date">Aug 2024 - Present</span>
                        <h3 class="timeline-title">Laravel Developer</h3>
                        <h4 class="timeline-company">Exiliensoft, Noida</h4>
                        <ul class="timeline-description">
                            <li>Developing and maintaining Laravel applications</li>
                            <li>Building client demos and product showcases</li>
                            <li>Working on projects: clientdemos.app, vallela.clientdemos.app, hrms.clientdemos.app</li>
                        </ul>
                        <div class="timeline-tech">
                            <span>Laravel</span>
                            <span>PHP</span>
                            <span>MySQL</span>
                            <span>Bootstrap</span>
                        </div>
                    </div>
                </div>

                <!-- Experience 2 -->
                <div class="timeline-item" data-aos="fade-up" data-aos-delay="200">
                    <div class="timeline-marker"></div>
                    <div class="timeline-content">
                        <span class="timeline-date">Jan 2024 - Jul 2024</span>
                        <h3 class="timeline-title">PHP Developer</h3>
                        <h4 class="timeline-company">WTF Digital, Noida</h4>
                        <ul class="timeline-description">
                            <li>Integrated CRUD functionalities for various modules ensuring data integrity</li>
                            <li>Designed responsive front-end layouts with HTML, CSS, and Bootstrap</li>
                            <li>Wrote secure and reusable backend code following MVC principles</li>
                            <li>Used Git and GitHub for version control and team collaboration</li>
                        </ul>
                        <div class="timeline-tech">
                            <span>PHP</span>
                            <span>HTML/CSS</span>
                            <span>Bootstrap</span>
                            <span>Git</span>
                        </div>
                    </div>
                </div>

                <!-- Experience 3 -->
                <div class="timeline-item" data-aos="fade-up" data-aos-delay="300">
                    <div class="timeline-marker"></div>
                    <div class="timeline-content">
                        <span class="timeline-date">Jul 2023 - Dec 2023</span>
                        <h3 class="timeline-title">Web Developer - Intern</h3>
                        <h4 class="timeline-company">Recall Infotech, Agra</h4>
                        <ul class="timeline-description">
                            <li>Assisted in developing and maintaining company websites using HTML, CSS, JavaScript, and PHP
                            </li>
                            <li>Worked on frontend styling and UI improvements to enhance user experience</li>
                            <li>Collaborated with senior developer to debug and optimize website performance</li>
                            <li>Integrated forms and handled basic database operations using MySQL</li>
                            <li>Gained hands-on experience with Git and XAMPP development environment</li>
                        </ul>
                        <div class="timeline-tech">
                            <span>HTML/CSS</span>
                            <span>JavaScript</span>
                            <span>PHP</span>
                            <span>MySQL</span>
                        </div>
                    </div>
                </div>

                <!-- Education -->
                <div class="timeline-item education" data-aos="fade-up" data-aos-delay="400">
                    <div class="timeline-marker education-marker"></div>
                    <div class="timeline-content">
                        <span class="timeline-date">2019 - 2023</span>
                        <h3 class="timeline-title">Education</h3>
                        <h4 class="timeline-company">AKTU University</h4>
                        <ul class="timeline-description">
                            <li><strong>MCA</strong> - Master of Computer Application (2022 - 2023)</li>
                            <li><strong>BCA</strong> - Bachelor of Computer Application (2019 - 2021)</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services section" id="services">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <span class="section-subtitle">What I offer</span>
                <h2 class="section-title">My Services</h2>
            </div>

            <div class="services-grid">
                <div class="service-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-icon">
                        <i class="bi bi-code-slash"></i>
                    </div>
                    <h3 class="service-title">Web Development</h3>
                    <p class="service-description">
                        Building robust, scalable web applications using Laravel, PHP, and modern frameworks with clean,
                        maintainable code.
                    </p>
                    <ul class="service-features">
                        <li><i class="bi bi-check2"></i> Custom Laravel Applications</li>
                        <li><i class="bi bi-check2"></i> Admin Panels & Dashboards</li>
                        <li><i class="bi bi-check2"></i> CRM & ERP Systems</li>
                    </ul>
                </div>

                <div class="service-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-icon">
                        <i class="bi bi-hdd-network"></i>
                    </div>
                    <h3 class="service-title">API Development</h3>
                    <p class="service-description">
                        Creating secure, well-documented RESTful APIs for mobile apps and third-party integrations.
                    </p>
                    <ul class="service-features">
                        <li><i class="bi bi-check2"></i> RESTful API Design</li>
                        <li><i class="bi bi-check2"></i> Authentication & Security</li>
                        <li><i class="bi bi-check2"></i> API Documentation</li>
                    </ul>
                </div>

                <div class="service-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-icon">
                        <i class="bi bi-palette"></i>
                    </div>
                    <h3 class="service-title">Frontend Design</h3>
                    <p class="service-description">
                        Crafting responsive, modern UI designs that look great on all devices with smooth animations.
                    </p>
                    <ul class="service-features">
                        <li><i class="bi bi-check2"></i> Responsive Design</li>
                        <li><i class="bi bi-check2"></i> Bootstrap Integration</li>
                        <li><i class="bi bi-check2"></i> Interactive UI/UX</li>
                    </ul>
                </div>

                <div class="service-card" data-aos="fade-up" data-aos-delay="400">
                    <div class="service-icon">
                        <i class="bi bi-database"></i>
                    </div>
                    <h3 class="service-title">Database Design</h3>
                    <p class="service-description">
                        Designing efficient database schemas and optimizing queries for maximum performance.
                    </p>
                    <ul class="service-features">
                        <li><i class="bi bi-check2"></i> Schema Design</li>
                        <li><i class="bi bi-check2"></i> Query Optimization</li>
                        <li><i class="bi bi-check2"></i> Data Migration</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact section" id="contact">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <span class="section-subtitle">Get in touch</span>
                <h2 class="section-title">Contact Me</h2>
            </div>

            <div class="contact-content">
                <div class="contact-info" data-aos="fade-right">
                    <h3 class="contact-heading">Let's work together</h3>
                    <p class="contact-text">
                        Have a project in mind or want to discuss opportunities? I'm always open to new ideas and
                        collaborations.
                    </p>

                    <div class="contact-cards">
                        <div class="contact-card">
                            <div class="contact-icon">
                                <i class="bi bi-envelope-fill"></i>
                            </div>
                            <div class="contact-details">
                                <span class="contact-label">Email</span>
                                <a href="mailto:s.shivhare985@gmail.com">s.shivhare985@gmail.com</a>
                            </div>
                        </div>

                        <div class="contact-card">
                            <div class="contact-icon">
                                <i class="bi bi-telephone-fill"></i>
                            </div>
                            <div class="contact-details">
                                <span class="contact-label">Phone</span>
                                <a href="tel:+919084804158">+91 9084804158</a>
                            </div>
                        </div>

                        <div class="contact-card">
                            <div class="contact-icon">
                                <i class="bi bi-whatsapp"></i>
                            </div>
                            <div class="contact-details">
                                <span class="contact-label">WhatsApp</span>
                                <a href="https://wa.me/919084804158" target="_blank">Chat with me</a>
                            </div>
                        </div>

                        <div class="contact-card">
                            <div class="contact-icon">
                                <i class="bi bi-geo-alt-fill"></i>
                            </div>
                            <div class="contact-details">
                                <span class="contact-label">Location</span>
                                <span>Noida, 201301, U.P., India</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="contact-form-wrapper" data-aos="fade-left">
                    <form id="contactForm" class="contact-form">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group">
                            <label for="name">Your Name</label>
                            <input type="text" id="name" name="name" class="form-control" placeholder="John Doe" required>
                            <span class="error-message" id="nameError"></span>
                        </div>

                        <div class="form-group">
                            <label for="email">Your Email</label>
                            <input type="email" id="email" name="email" class="form-control" placeholder="john@example.com"
                                required>
                            <span class="error-message" id="emailError"></span>
                        </div>

                        <div class="form-group">
                            <label for="subject">Subject</label>
                            <input type="text" id="subject" name="subject" class="form-control"
                                placeholder="Project Inquiry" required>
                            <span class="error-message" id="subjectError"></span>
                        </div>

                        <div class="form-group">
                            <label for="message">Your Message</label>
                            <textarea id="message" name="message" class="form-control" rows="5"
                                placeholder="Tell me about your project..." required></textarea>
                            <span class="error-message" id="messageError"></span>
                        </div>

                        <button type="submit" class="btn btn-primary btn-submit">
                            <span class="btn-text">Send Message</span>
                            <span class="btn-loading"><i class="bi bi-arrow-repeat"></i></span>
                            <i class="bi bi-send-fill"></i>
                        </button>
                    </form>

                    <div id="formSuccess" class="form-message success" style="display: none;">
                        <i class="bi bi-check-circle-fill"></i>
                        <p>Thank you! Your message has been sent successfully.</p>
                    </div>

                    <div id="formError" class="form-message error" style="display: none;">
                        <i class="bi bi-x-circle-fill"></i>
                        <p>Oops! Something went wrong. Please try again.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script>
        // Set current year in footer
        document.getElementById('currentYear').textContent = new Date().getFullYear();
    </script>
@endpush