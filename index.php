<?php
declare(strict_types=1);

define('BASE_PATH', '');

$pageTitle = 'Aqua Education and Training Academy - Your Gateway to Japan';
$pageDescription = 'Nepal\'s premier academy for Japanese language, JLPT, and SSW certification preparation. Official liaison for Topa 21st Century Language School & Yu Language Group.';
$pageKeywords = 'Japanese language classes Nepal, JLPT preparation Kathmandu, SSW exam Nepal, study in Japan from Nepal';
$pageUrl = 'https://aquaeducation.com';
$currentPage = 'home';

$structuredData = [
    '@context' => 'https://schema.org',
    '@type' => 'EducationalOrganization',
    'name' => 'Aqua Education and Training Academy',
    'description' => 'Nepal\'s premier academy for Japanese language, JLPT, and SSW certification preparation.',
    'address' => [
        '@type' => 'PostalAddress',
        'streetAddress' => 'KG Tower 7F, Lazimpat-2',
        'addressLocality' => 'Kathmandu',
        'addressCountry' => 'NP'
    ],
    'telephone' => '01-4519666',
    'email' => 'ssw.edu.academy@gmail.com',
    'url' => 'https://aquaeducation.com'
];

require_once 'includes/meta.php';
?>

<main>
    <section class="hero" id="hero">
        <div class="hero-bg">
            <div class="hero-shapes">
                <div class="hero-shape"></div>
                <div class="hero-shape"></div>
                <div class="hero-shape"></div>
            </div>
        </div>
        
        <div class="hero-content">
            <div class="hero-text scroll-animate">
                <h1>Your Gateway to Japan<br><span>Learn. Train. Succeed.</span></h1>
                <p>Nepal's premier academy for Japanese language, JLPT, and SSW certification preparation. Official liaison for Topa 21st Century Language School & Yu Language Group.</p>
                <div class="hero-buttons">
                    <a href="services/index.php" class="btn btn-primary btn-lg">
                        <span>Explore Courses</span>
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M5 12h14M12 5l7 7-7 7"/>
                        </svg>
                    </a>
                    <a href="contact.php" class="btn btn-outline btn-lg">
                        <span>Start Your Journey</span>
                    </a>
                </div>
            </div>
            
            <div class="hero-visual scroll-animate" data-tilt>
                <div class="hero-card">
                    <div class="hero-stats">
                        <div class="stat-item">
                            <div class="stat-number" data-counter="500" data-suffix="+" data-duration="2000">0</div>
                            <div class="stat-label">Students Enrolled</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number" data-counter="95" data-suffix="%" data-duration="2000">0</div>
                            <div class="stat-label">Success Rate</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number" data-counter="5" data-suffix="+" data-duration="1500">0</div>
                            <div class="stat-label">Years Experience</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number" data-counter="2" data-suffix="" data-duration="1500">0</div>
                            <div class="stat-label">Partner Schools</div>
                        </div>
                    </div>
                </div>
                
                <div class="hero-float-element element-1">
                    <div class="float-icon">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M22 10v6M2 10l10-5 10 5-10 5z"/>
                            <path d="M6 12v5c3 3 9 3 12 0v-5"/>
                        </svg>
                    </div>
                    <div class="float-text">
                        JLPT N5 Pass Rate
                        <span>98% Success</span>
                    </div>
                </div>
                
                <div class="hero-float-element element-2">
                    <div class="float-icon">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <circle cx="12" cy="12" r="10"/>
                            <path d="M2 12h20M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/>
                        </svg>
                    </div>
                    <div class="float-text">
                        Official Liaison
                        <span>Japan Study Abroad</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section" id="about-snapshot">
        <div class="container">
            <div class="section-header scroll-animate">
                <span class="section-tag">Why Choose Us</span>
                <h2 class="section-title">Your Path to Japan Starts Here</h2>
                <p class="section-subtitle">Aqua Education and Training Academy serves as the official liaison office for Topa 21st Century Language School and Yu Language Group's study abroad affairs in Nepal.</p>
            </div>
            
            <div class="grid grid-3" data-stagger="150">
                <div class="card scroll-animate stagger-1">
                    <div class="card-icon">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M12 2L2 7l10 5 10-5-10-5z"/>
                            <path d="M2 17l10 5 10-5"/>
                            <path d="M2 12l10 5 10-5"/>
                        </svg>
                    </div>
                    <h3 class="card-title">Official Authorization</h3>
                    <p class="card-text">Authorized liaison for Topa 21st Century Language School and Yu Language Group, ensuring genuine and reliable study abroad pathways.</p>
                </div>
                
                <div class="card scroll-animate stagger-2">
                    <div class="card-icon">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/>
                            <circle cx="9" cy="7" r="4"/>
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87"/>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"/>
                        </svg>
                    </div>
                    <h3 class="card-title">Expert Instructors</h3>
                    <p class="card-text">Learn from certified Japanese language instructors and industry professionals with years of experience in JLPT and SSW preparation.</p>
                </div>
                
                <div class="card scroll-animate stagger-3">
                    <div class="card-icon">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/>
                            <polyline points="22 4 12 14.01 9 11.01"/>
                        </svg>
                    </div>
                    <h3 class="card-title">High Success Rate</h3>
                    <p class="card-text">Our intensive preparation programs have helped hundreds of students achieve their goals in JLPT exams and SSW certification.</p>
                </div>
                
                <div class="card scroll-animate stagger-4">
                    <div class="card-icon">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <rect x="2" y="3" width="20" height="14" rx="2" ry="2"/>
                            <line x1="8" y1="21" x2="16" y2="21"/>
                            <line x1="12" y1="17" x2="12" y2="21"/>
                        </svg>
                    </div>
                    <h3 class="card-title">Modern Learning</h3>
                    <p class="card-text">State-of-the-art facilities with interactive learning methods, multimedia resources, and a conducive environment for effective study.</p>
                </div>
                
                <div class="card scroll-animate stagger-5">
                    <div class="card-icon">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <circle cx="12" cy="12" r="10"/>
                            <polygon points="16.24 7.76 14.12 14.12 7.76 16.24 9.88 9.88 16.24 7.76"/>
                        </svg>
                    </div>
                    <h3 class="card-title">Comprehensive Support</h3>
                    <p class="card-text">From enrollment to placement, we provide end-to-end guidance including visa processing, pre-departure orientation, and arrival support.</p>
                </div>
                
                <div class="card scroll-animate stagger-6">
                    <div class="card-icon">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/>
                            <circle cx="12" cy="10" r="3"/>
                        </svg>
                    </div>
                    <h3 class="card-title">Strategic Location</h3>
                    <p class="card-text">Conveniently located in KG Tower, Lazimpat-2, Kathmandu, with easy access and modern amenities for students.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-light" id="services">
        <div class="container">
            <div class="section-header scroll-animate">
                <span class="section-tag">Our Specializations</span>
                <h2 class="section-title">Courses Designed for Your Success</h2>
                <p class="section-subtitle">Comprehensive programs covering Japanese language, JLPT preparation, and SSW certification to help you achieve your career goals in Japan.</p>
            </div>
            
            <div class="grid grid-3" data-stagger="100">
                <a href="services/japanese-language.php" class="card service-card scroll-animate stagger-1">
                    <div class="card-icon">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M12 2L2 7l10 5 10-5-10-5z"/>
                            <path d="M2 17l10 5 10-5"/>
                            <path d="M2 12l10 5 10-5"/>
                        </svg>
                    </div>
                    <h3 class="card-title">Japanese Language Classes</h3>
                    <p class="card-text">From beginner to advanced levels (N5-N1), structured curriculum with native-speaking instructors for comprehensive language mastery.</p>
                    <span class="card-link">Learn More <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>
                </a>
                
                <a href="services/jlpt-preparation.php" class="card service-card scroll-animate stagger-2">
                    <div class="card-icon">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
                            <polyline points="14 2 14 8 20 8"/>
                            <line x1="16" y1="13" x2="8" y2="13"/>
                            <line x1="16" y1="17" x2="8" y2="17"/>
                            <polyline points="10 9 9 9 8 9"/>
                        </svg>
                    </div>
                    <h3 class="card-title">JLPT Exam Preparation</h3>
                    <p class="card-text">Targeted preparation for all JLPT levels with practice tests, proven strategies, and mock exams to maximize your passing potential.</p>
                    <span class="card-link">Learn More <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>
                </a>
                
                <a href="services/ssw-preparation.php" class="card service-card scroll-animate stagger-3">
                    <div class="card-icon">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/>
                            <circle cx="8.5" cy="7" r="4"/>
                            <line x1="20" y1="8" x2="20" y2="14"/>
                            <line x1="23" y1="11" x2="17" y2="11"/>
                        </svg>
                    </div>
                    <h3 class="card-title">SSW Preparation Classes</h3>
                    <p class="card-text">Comprehensive training for the Specified Skilled Worker exam covering language proficiency and industry-specific knowledge.</p>
                    <span class="card-link">Learn More <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>
                </a>
                
                <a href="services/skill-exams.php" class="card service-card scroll-animate stagger-4">
                    <div class="card-icon">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/>
                        </svg>
                    </div>
                    <h3 class="card-title">Skill Exam Preparation</h3>
                    <p class="card-text">Focused preparation for various skill-based examinations required for employment and certification in Japan across multiple sectors.</p>
                    <span class="card-link">Learn More <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>
                </a>
                
                <a href="services/ssw-skill-training.php" class="card service-card scroll-animate stagger-5">
                    <div class="card-icon">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/>
                        </svg>
                    </div>
                    <h3 class="card-title">SSW Skill Training</h3>
                    <p class="card-text">Hands-on practical training in designated SSW industry sectors including nursing care, construction, agriculture, and food service.</p>
                    <span class="card-link">Learn More <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>
                </a>
                
                <a href="services/ssw-exam-preparation.php" class="card service-card scroll-animate stagger-6">
                    <div class="card-icon">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <circle cx="12" cy="12" r="10"/>
                            <polyline points="12 6 12 12 16 14"/>
                        </svg>
                    </div>
                    <h3 class="card-title">SSW Exam Preparation</h3>
                    <p class="card-text">Intensive exam-focused coaching for the SSW examination with mock tests, strategies, and personalized feedback to ensure success.</p>
                    <span class="card-link">Learn More <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>
                </a>
            </div>
            
            <div class="text-center mt-4 scroll-animate">
                <a href="services/index.php" class="btn btn-secondary btn-lg">
                    View All Services
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M5 12h14M12 5l7 7-7 7"/>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <section class="section" id="study-abroad-preview">
        <div class="container">
            <div class="study-abroad-grid">
                <div class="study-abroad-content scroll-animate-left">
                    <span class="section-tag">Study in Japan</span>
                    <h2 class="section-title">Your Official Pathway to Japan</h2>
                    <p class="section-subtitle">Aqua Education and Training Academy serves as the official liaison office for Topa 21st Century Language School and Yu Language Group's study abroad affairs in Nepal.</p>
                    
                    <ul class="feature-list">
                        <li>
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <polyline points="20 6 9 17 4 12"/>
                            </svg>
                            <span>Official student recruitment and guidance</span>
                        </li>
                        <li>
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <polyline points="20 6 9 17 4 12"/>
                            </svg>
                            <span>Short-term and long-term study programs</span>
                        </li>
                        <li>
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <polyline points="20 6 9 17 4 12"/>
                            </svg>
                            <span>Complete visa application support</span>
                        </li>
                        <li>
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <polyline points="20 6 9 17 4 12"/>
                            </svg>
                            <span>Pre-departure orientation and arrival support</span>
                        </li>
                    </ul>
                    
                    <div class="mt-3">
                        <a href="study-abroad.php" class="btn btn-primary">
                            Explore Study Programs
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M5 12h14M12 5l7 7-7 7"/>
                            </svg>
                        </a>
                    </div>
                </div>
                
                <div class="study-abroad-visual scroll-animate-right">
                    <div class="partner-logos">
                        <div class="partner-card">
                            <h4>Topa 21st Century Language School</h4>
                            <p>Leading Japanese language institution with decades of experience in language education</p>
                        </div>
                        <div class="partner-card">
                            <h4>Yu Language Group</h4>
                            <p>Established language group providing comprehensive study abroad services</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-light" id="testimonials">
        <div class="container">
            <div class="section-header scroll-animate">
                <span class="section-tag">Testimonials</span>
                <h2 class="section-title">What Our Students Say</h2>
                <p class="section-subtitle">Hear from students who achieved their dreams of studying and working in Japan through our programs.</p>
            </div>
            
            <div class="testimonials-grid grid grid-3" data-stagger="150">
                <div class="testimonial-card scroll-animate stagger-1">
                    <div class="testimonial-content">
                        <div class="testimonial-rating">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                        </div>
                        <p class="testimonial-text">"Aqua Education helped me pass JLPT N3 on my first attempt. The instructors are dedicated and the study materials are excellent. I'm now studying at Topa Language School in Japan."</p>
                    </div>
                    <div class="testimonial-author">
                        <div class="author-avatar">RS</div>
                        <div class="author-info">
                            <strong>Rajesh Sharma</strong>
                            <span>JLPT N3 Graduate, Currently in Japan</span>
                        </div>
                    </div>
                </div>
                
                <div class="testimonial-card scroll-animate stagger-2">
                    <div class="testimonial-content">
                        <div class="testimonial-rating">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                        </div>
                        <p class="testimonial-text">"The SSW preparation program was comprehensive and well-structured. The academy guided me through every step of the process, from exam preparation to visa application."</p>
                    </div>
                    <div class="testimonial-author">
                        <div class="author-avatar">PK</div>
                        <div class="author-info">
                            <strong>Priya Kumari</strong>
                            <span>SSW Exam Graduate, Working in Japan</span>
                        </div>
                    </div>
                </div>
                
                <div class="testimonial-card scroll-animate stagger-3">
                    <div class="testimonial-content">
                        <div class="testimonial-rating">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                        </div>
                        <p class="testimonial-text">"I started from zero in Japanese and now I'm N2 certified. The systematic approach and patient guidance from the instructors made all the difference. Truly grateful!"</p>
                    </div>
                    <div class="testimonial-author">
                        <div class="author-avatar">BR</div>
                        <div class="author-info">
                            <strong>Bikram Rai</strong>
                            <span>JLPT N2 Certified, University Student in Japan</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="cta-section">
        <div class="container">
            <div class="cta-content scroll-animate">
                <h2>Ready to Begin Your Journey to Japan?</h2>
                <p>Contact us today for a free consultation and take the first step towards your Japanese education and career goals.</p>
                <div class="cta-buttons">
                    <a href="contact.php" class="btn btn-white btn-lg">
                        Contact Us Today
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M5 12h14M12 5l7 7-7 7"/>
                        </svg>
                    </a>
                    <a href="tel:014519666" class="btn btn-outline btn-lg" style="border-color: white; color: white;">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
                        </svg>
                        01-4519666
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>

<style>
.service-card {
    display: block;
    text-decoration: none;
    color: inherit;
}

.service-card:hover {
    transform: translateY(-8px);
}

.card-link {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    margin-top: 15px;
    color: var(--secondary);
    font-weight: 600;
    font-size: 14px;
    transition: gap var(--transition);
}

.service-card:hover .card-link {
    gap: 10px;
}

.study-abroad-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 60px;
    align-items: center;
}

.study-abroad-content .section-tag {
    margin-bottom: 15px;
}

.study-abroad-content .section-title {
    text-align: left;
}

.feature-list {
    margin: 25px 0;
}

.feature-list li {
    display: flex;
    align-items: center;
    gap: 12px;
    margin-bottom: 15px;
    color: var(--text-secondary);
    font-size: 16px;
}

.feature-list svg {
    color: var(--success);
    flex-shrink: 0;
}

.partner-logos {
    display: flex;
    flex-direction: column;
    gap: 20px;
}

.partner-card {
    background: var(--bg-primary);
    border-radius: var(--radius-md);
    padding: 25px 30px;
    box-shadow: var(--shadow);
    border-left: 4px solid var(--secondary);
}

.partner-card h4 {
    font-size: 18px;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: 8px;
}

.partner-card p {
    color: var(--text-secondary);
    font-size: 14px;
    line-height: 1.6;
}

.testimonials-grid {
    gap: 30px;
}

.testimonial-card {
    background: var(--bg-primary);
    border-radius: var(--radius-md);
    padding: 30px;
    box-shadow: var(--shadow);
}

.testimonial-content {
    margin-bottom: 20px;
}

.testimonial-rating {
    display: flex;
    gap: 4px;
    margin-bottom: 15px;
}

.testimonial-rating svg {
    color: var(--accent);
}

.testimonial-text {
    color: var(--text-secondary);
    font-size: 15px;
    line-height: 1.7;
    font-style: italic;
}

.testimonial-author {
    display: flex;
    align-items: center;
    gap: 15px;
    padding-top: 20px;
    border-top: 1px solid var(--border-light);
}

.author-avatar {
    width: 45px;
    height: 45px;
    background: linear-gradient(135deg, var(--secondary), var(--primary));
    border-radius: var(--radius-full);
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--text-white);
    font-weight: 700;
    font-size: 16px;
}

.author-info strong {
    display: block;
    color: var(--text-primary);
    font-size: 15px;
    margin-bottom: 2px;
}

.author-info span {
    color: var(--text-light);
    font-size: 13px;
}

.cta-section {
    background: linear-gradient(135deg, var(--secondary) 0%, var(--primary) 100%);
    padding: clamp(60px, 10vw, 100px) 0;
}

.cta-content {
    text-align: center;
    max-width: 700px;
    margin: 0 auto;
}

.cta-content h2 {
    font-size: clamp(28px, 4vw, 40px);
    font-weight: 800;
    color: var(--text-white);
    margin-bottom: 15px;
}

.cta-content p {
    font-size: 18px;
    color: rgba(255, 255, 255, 0.9);
    margin-bottom: 30px;
}

.cta-buttons {
    display: flex;
    gap: 20px;
    justify-content: center;
    flex-wrap: wrap;
}

.cta-section .btn-outline {
    border-color: white;
    color: white;
}

.cta-section .btn-outline:hover {
    background: white;
    color: var(--primary);
}

@media (max-width: 992px) {
    .study-abroad-grid {
        grid-template-columns: 1fr;
        gap: 40px;
    }
    
    .study-abroad-content .section-title {
        text-align: center;
    }
    
    .study-abroad-content .section-subtitle {
        text-align: center;
    }
    
    .feature-list {
        text-align: left;
        display: inline-block;
    }
    
    .feature-list li {
        justify-content: flex-start;
    }
}

@media (max-width: 768px) {
    .cta-content h2 {
        font-size: 26px;
    }
    
    .cta-content p {
        font-size: 16px;
    }
    
    .cta-buttons {
        flex-direction: column;
        align-items: center;
    }
    
    .cta-buttons .btn {
        width: 100%;
        max-width: 280px;
    }
}
</style>

<?php require_once 'includes/footer.php'; ?>