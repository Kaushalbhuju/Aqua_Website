<?php
declare(strict_types=1);

define('BASE_PATH', '../');

$pageTitle = 'Skill Exam Preparation - Aqua Education and Training Academy';
$pageDescription = 'Skill exam preparation for various industries in Japan. Expert training for construction, nursing care, food service, and more sectors.';
$pageKeywords = 'skill exam preparation Nepal, Japan skill test Kathmandu, construction skill exam Japan, nursing care exam Nepal, skill certification Nepal';
$currentPage = 'service-skill';
$backPath = '../';

require_once $backPath . 'includes/meta.php';
?>

<main>
    <section class="page-hero service-hero" style="background: linear-gradient(135deg, #059669 0%, #047857 100%);">
        <div class="container">
            <div class="breadcrumb">
                <a href="../index.php">Home</a>
                <span>/</span>
                <a href="index.php">Services</a>
                <span>/</span>
                <span class="breadcrumb-current">Skill Exams</span>
            </div>
            <div class="page-hero-content scroll-animate">
                <h1>Skill Exam Preparation</h1>
                <p>Expert preparation for industry-specific skill examinations required for Japan.</p>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="service-intro">
                <div class="intro-content scroll-animate">
                    <span class="section-tag">Overview</span>
                    <h2 class="section-title" style="text-align: left;">Industry Skill Certification</h2>
                    <p>Working in Japan often requires passing industry-specific skill tests that demonstrate your competence in your chosen field. Our skill exam preparation courses provide comprehensive training to help you succeed in these examinations.</p>
                    <p>Whether you're targeting construction, nursing care, food service, or any other sector, our expert instructors will equip you with the knowledge and practical skills needed to pass your skill exam with confidence.</p>
                </div>
                <div class="intro-cta scroll-animate">
                    <div class="cta-card">
                        <h3>Find Your Sector</h3>
                        <p>Not sure which skill exam is right for you? Let us guide you.</p>
                        <a href="../contact.php" class="btn btn-primary">
                            Get Guidance
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-light">
        <div class="container">
            <div class="section-header scroll-animate">
                <span class="section-tag">Exam Types</span>
                <h2 class="section-title">Industries We Cover</h2>
                <p class="section-subtitle">Comprehensive preparation for skill exams across multiple sectors.</p>
            </div>
            
            <div class="industries-grid grid grid-3" data-stagger="100">
                <div class="industry-card scroll-animate stagger-1">
                    <div class="industry-icon">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M2 20h20M5 20V8l7-6 7 6v12"/>
                            <path d="M9 20v-6h6v6"/>
                        </svg>
                    </div>
                    <h3>Construction</h3>
                    <p>Preparation for construction industry skill tests covering safety protocols, techniques, and industry standards.</p>
                    <ul class="industry-topics">
                        <li>Building techniques</li>
                        <li>Safety standards</li>
                        <li>Equipment handling</li>
                        <li>Quality control</li>
                    </ul>
                </div>
                
                <div class="industry-card scroll-animate stagger-2">
                    <div class="industry-icon">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M22 12h-4l-3 9L9 3l-3 9H2"/>
                        </svg>
                    </div>
                    <h3>Nursing Care</h3>
                    <p>Comprehensive training for nursing care skill examinations including practical techniques and theoretical knowledge.</p>
                    <ul class="industry-topics">
                        <li>Patient care techniques</li>
                        <li>Medical terminology</li>
                        <li>Safety protocols</li>
                        <li>Communication skills</li>
                    </ul>
                </div>
                
                <div class="industry-card scroll-animate stagger-3">
                    <div class="industry-icon">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M18 8h1a4 4 0 0 1 0 8h-1M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"/>
                            <line x1="6" y1="1" x2="6" y2="4"/>
                            <line x1="10" y1="1" x2="10" y2="4"/>
                            <line x1="14" y1="1" x2="14" y2="4"/>
                        </svg>
                    </div>
                    <h3>Food Service</h3>
                    <p>Training for food service industry skill tests covering hygiene, food handling, and service standards.</p>
                    <ul class="industry-topics">
                        <li>Food safety & hygiene</li>
                        <li>Kitchen operations</li>
                        <li>Customer service</li>
                        <li>Japanese cuisine basics</li>
                    </ul>
                </div>
                
                <div class="industry-card scroll-animate stagger-4">
                    <div class="industry-icon">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M12 2a10 10 0 1 0 10 10 4 4 0 0 1-5-5 4 4 0 0 1-5-5"/>
                            <path d="M8.5 8.5v.01M16 15.5v.01M12 12v.01M11 17v.01M7 14v.01"/>
                        </svg>
                    </div>
                    <h3>Agriculture</h3>
                    <p>Skill exam preparation for agriculture sector including farming techniques and modern agricultural practices.</p>
                    <ul class="industry-topics">
                        <li>Crop management</li>
                        <li>Machinery operation</li>
                        <li>Farming techniques</li>
                        <li>Seasonal operations</li>
                    </ul>
                </div>
                
                <div class="industry-card scroll-animate stagger-5">
                    <div class="industry-icon">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <rect x="2" y="7" width="20" height="14" rx="2" ry="2"/>
                            <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/>
                        </svg>
                    </div>
                    <h3>Manufacturing</h3>
                    <p>Training for manufacturing industry skill tests covering assembly, quality control, and industrial standards.</p>
                    <ul class="industry-topics">
                        <li>Assembly line skills</li>
                        <li>Quality control</li>
                        <li>Equipment operation</li>
                        <li>Safety procedures</li>
                    </ul>
                </div>
                
                <div class="industry-card scroll-animate stagger-6">
                    <div class="industry-icon">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/>
                            <polyline points="9 22 9 12 15 12 15 22"/>
                        </svg>
                    </div>
                    <h3>Hospitality</h3>
                    <p>Preparation for hospitality industry skill tests covering hotel operations, guest services, and cultural awareness.</p>
                    <ul class="industry-topics">
                        <li>Hotel operations</li>
                        <li>Guest services</li>
                        <li>Japanese language for hospitality</li>
                        <li>Cultural etiquette</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="section-header scroll-animate">
                <span class="section-tag">Our Approach</span>
                <h2 class="section-title">How We Prepare You</h2>
            </div>
            
            <div class="approach-grid grid grid-2" data-stagger="120">
                <div class="approach-item scroll-animate stagger-1">
                    <div class="approach-number">01</div>
                    <div class="approach-content">
                        <h3>Theory Sessions</h3>
                        <p>Comprehensive classroom sessions covering the complete exam syllabus. Our instructors explain concepts clearly with practical examples and visual aids.</p>
                    </div>
                </div>
                
                <div class="approach-item scroll-animate stagger-2">
                    <div class="approach-number">02</div>
                    <div class="approach-content">
                        <h3>Practical Training</h3>
                        <p>Hands-on practical sessions in simulated work environments. Build real skills that you'll use on the job and demonstrate in exams.</p>
                    </div>
                </div>
                
                <div class="approach-item scroll-animate stagger-3">
                    <div class="approach-number">03</div>
                    <div class="approach-content">
                        <h3>Industry Equipment</h3>
                        <p>Training on industry-standard equipment and tools used in Japan. Familiarity with proper equipment handling is essential for practical exams.</p>
                    </div>
                </div>
                
                <div class="approach-item scroll-animate stagger-4">
                    <div class="approach-number">04</div>
                    <div class="approach-content">
                        <h3>Past Paper Practice</h3>
                        <p>Extensive practice with previous exam papers and mock tests. Analyze past questions to understand the exam pattern and common topics.</p>
                    </div>
                </div>
                
                <div class="approach-item scroll-animate stagger-5">
                    <div class="approach-number">05</div>
                    <div class="approach-content">
                        <h3>One-on-One Coaching</h3>
                        <p>Personalized coaching sessions for students who need extra attention. Identify weak areas and work on them with dedicated instructor support.</p>
                    </div>
                </div>
                
                <div class="approach-item scroll-animate stagger-6">
                    <div class="approach-number">06</div>
                    <div class="approach-content">
                        <h3>Post-Exam Support</h3>
                        <p>Even after the exam, we support you with placement assistance, interview preparation, and employer connections to help you start your career.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-light">
        <div class="container">
            <div class="section-header scroll-animate">
                <span class="section-tag">Why Choose Us</span>
                <h2 class="section-title">The Aqua Advantage</h2>
            </div>
            
            <div class="advantages-grid grid grid-4" data-stagger="100">
                <div class="advantage-item scroll-animate stagger-1">
                    <div class="advantage-icon">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <circle cx="12" cy="12" r="10"/>
                            <path d="M12 16v-4M12 8h.01"/>
                        </svg>
                    </div>
                    <h4>Expert Instructors</h4>
                    <p>Instructors with real industry experience who understand what employers in Japan expect.</p>
                </div>
                
                <div class="advantage-item scroll-animate stagger-2">
                    <div class="advantage-icon">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
                            <polyline points="14 2 14 8 20 8"/>
                        </svg>
                    </div>
                    <h4>Updated Curriculum</h4>
                    <p>Course materials aligned with the latest Japanese industry standards and exam requirements.</p>
                </div>
                
                <div class="advantage-item scroll-animate stagger-3">
                    <div class="advantage-icon">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/>
                            <polyline points="22 4 12 14.01 9 11.01"/>
                        </svg>
                    </div>
                    <h4>High Pass Rate</h4>
                    <p>Consistently high pass rates among our students, testament to our effective training methods.</p>
                </div>
                
                <div class="advantage-item scroll-animate stagger-4">
                    <div class="advantage-icon">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/>
                            <circle cx="8.5" cy="7" r="4"/>
                            <line x1="20" y1="8" x2="20" y2="14"/>
                            <line x1="23" y1="11" x2="17" y2="11"/>
                        </svg>
                    </div>
                    <h4>Placement Support</h4>
                    <p>Assistance with job placement after certification, connecting you with employers in Japan.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="cta-section">
        <div class="container">
            <div class="cta-content scroll-animate">
                <h2>Get Industry-Ready</h2>
                <p>Start your preparation for skill certification and open doors to career opportunities in Japan.</p>
                <div class="cta-buttons">
                    <a href="../contact.php" class="btn btn-white btn-lg">
                        Enroll Now
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                    </a>
                    <a href="ssw-skill-training.php" class="btn btn-outline btn-lg" style="border-color: white; color: white;">
                        View SSW Training
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>

<style>
.service-intro {
    display: grid;
    grid-template-columns: 1.5fr 1fr;
    gap: 50px;
    align-items: center;
}

.intro-content .section-tag {
    margin-bottom: 15px;
}

.intro-content .section-title {
    margin-bottom: 20px;
}

.intro-content p {
    color: var(--text-secondary);
    line-height: 1.8;
    margin-bottom: 15px;
}

.cta-card {
    background: linear-gradient(135deg, #059669 0%, #047857 100%);
    border-radius: var(--radius-lg);
    padding: 35px;
    text-align: center;
    color: white;
}

.cta-card h3 {
    font-size: 22px;
    font-weight: 700;
    margin-bottom: 10px;
}

.cta-card p {
    opacity: 0.9;
    margin-bottom: 25px;
    font-size: 15px;
}

.cta-card .btn {
    background: white;
    color: #059669;
}

.industry-card {
    background: var(--bg-primary);
    border-radius: var(--radius-md);
    padding: 30px;
    box-shadow: var(--shadow);
}

.industry-icon {
    width: 70px;
    height: 70px;
    background: linear-gradient(135deg, #059669, #047857);
    border-radius: var(--radius);
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    margin-bottom: 20px;
}

.industry-card h3 {
    font-size: 20px;
    font-weight: 700;
    color: var(--text-primary);
    margin-bottom: 12px;
}

.industry-card p {
    color: var(--text-secondary);
    font-size: 14px;
    line-height: 1.7;
    margin-bottom: 15px;
}

.industry-topics {
    display: flex;
    flex-direction: column;
    gap: 8px;
}

.industry-topics li {
    display: flex;
    align-items: center;
    gap: 8px;
    color: var(--text-secondary);
    font-size: 13px;
}

.industry-topics li::before {
    content: '→';
    color: #059669;
}

.approach-grid {
    gap: 25px;
}

.approach-item {
    display: flex;
    gap: 20px;
    padding: 25px;
    background: var(--bg-primary);
    border-radius: var(--radius);
    box-shadow: var(--shadow-sm);
}

.approach-number {
    font-size: 36px;
    font-weight: 800;
    color: #059669;
    opacity: 0.3;
    line-height: 1;
    flex-shrink: 0;
    width: 50px;
}

.approach-content h3 {
    font-size: 18px;
    font-weight: 700;
    color: var(--text-primary);
    margin-bottom: 8px;
}

.approach-content p {
    color: var(--text-secondary);
    font-size: 14px;
    line-height: 1.7;
}

.advantages-grid {
    gap: 20px;
}

.advantage-item {
    text-align: center;
    padding: 25px 20px;
    background: var(--bg-primary);
    border-radius: var(--radius-md);
    box-shadow: var(--shadow);
}

.advantage-icon {
    width: 55px;
    height: 55px;
    background: linear-gradient(135deg, #059669, #047857);
    border-radius: var(--radius-full);
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    margin: 0 auto 18px;
}

.advantage-item h4 {
    font-size: 16px;
    font-weight: 700;
    color: var(--text-primary);
    margin-bottom: 8px;
}

.advantage-item p {
    color: var(--text-secondary);
    font-size: 13px;
}

@media (max-width: 992px) {
    .service-intro {
        grid-template-columns: 1fr;
        gap: 30px;
    }
    
    .intro-cta {
        order: -1;
    }
    
    .cta-card {
        max-width: 400px;
        margin: 0 auto;
    }
}

@media (max-width: 768px) {
    .industries-grid {
        grid-template-columns: 1fr;
    }
    
    .approach-item {
        flex-direction: column;
        gap: 15px;
    }
    
    .advantages-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}
</style>

<?php require_once $backPath . 'includes/footer.php'; ?>