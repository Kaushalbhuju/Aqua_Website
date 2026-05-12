<?php
declare(strict_types=1);

define('BASE_PATH', '../');

$pageTitle = 'Our Services - Aqua Education and Training Academy';
$pageDescription = 'Explore our comprehensive range of courses including Japanese language classes, JLPT preparation, SSW preparation, skill exam training, and more.';
$pageKeywords = 'Japanese courses Kathmandu, JLPT exam preparation Nepal, SSW classes Nepal, skill exam Japan preparation, SSW training Kathmandu';
$currentPage = 'services';

require_once 'includes/meta.php';
?>

<main>
    <section class="page-hero">
        <div class="container">
            <div class="breadcrumb">
                <a href="index.php">Home</a>
                <span>/</span>
                <span class="breadcrumb-current">Services</span>
            </div>
            <div class="page-hero-content scroll-animate">
                <h1>Our Courses & Services</h1>
                <p>Comprehensive programs designed for your success in Japan.</p>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="section-header scroll-animate">
                <span class="section-tag">What We Offer</span>
                <h2 class="section-title">Our Specializations</h2>
                <p class="section-subtitle">From beginner Japanese to advanced SSW preparation, we provide comprehensive training programs tailored to help you achieve your goals.</p>
            </div>
            
            <div class="services-showcase grid grid-3" data-stagger="100">
                <a href="japanese-language.php" class="service-showcase-card scroll-animate stagger-1">
                    <div class="showcase-icon">
                        <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                            <path d="M12 2L2 7l10 5 10-5-10-5z"/>
                            <path d="M2 17l10 5 10-5"/>
                            <path d="M2 12l10 5 10-5"/>
                        </svg>
                    </div>
                    <h3>Japanese Language Classes</h3>
                    <p>From beginner (N5) to advanced (N1), structured curriculum with native-speaking instructors for comprehensive language mastery.</p>
                    <span class="showcase-link">Learn More <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>
                </a>
                
                <a href="jlpt-preparation.php" class="service-showcase-card scroll-animate stagger-2">
                    <div class="showcase-icon">
                        <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
                            <polyline points="14 2 14 8 20 8"/>
                            <line x1="16" y1="13" x2="8" y2="13"/>
                            <line x1="16" y1="17" x2="8" y2="17"/>
                        </svg>
                    </div>
                    <h3>JLPT Exam Preparation</h3>
                    <p>Targeted preparation for all JLPT levels with practice tests, proven strategies, and mock exams to maximize your passing potential.</p>
                    <span class="showcase-link">Learn More <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>
                </a>
                
                <a href="ssw-preparation.php" class="service-showcase-card scroll-animate stagger-3">
                    <div class="showcase-icon">
                        <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                            <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/>
                            <circle cx="8.5" cy="7" r="4"/>
                            <line x1="20" y1="8" x2="20" y2="14"/>
                            <line x1="23" y1="11" x2="17" y2="11"/>
                        </svg>
                    </div>
                    <h3>SSW Preparation Classes</h3>
                    <p>Comprehensive training for the Specified Skilled Worker exam covering language proficiency and industry-specific knowledge.</p>
                    <span class="showcase-link">Learn More <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>
                </a>
                
                <a href="skill-exams.php" class="service-showcase-card scroll-animate stagger-4">
                    <div class="showcase-icon">
                        <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                            <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/>
                        </svg>
                    </div>
                    <h3>Skill Exam Preparation</h3>
                    <p>Focused preparation for various skill-based examinations required for employment and certification in Japan across multiple sectors.</p>
                    <span class="showcase-link">Learn More <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>
                </a>
                
                <a href="ssw-skill-training.php" class="service-showcase-card scroll-animate stagger-5">
                    <div class="showcase-icon">
                        <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                            <path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/>
                        </svg>
                    </div>
                    <h3>SSW Skill Training</h3>
                    <p>Hands-on practical training in designated SSW industry sectors including nursing care, construction, agriculture, and food service.</p>
                    <span class="showcase-link">Learn More <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>
                </a>
                
                <a href="ssw-exam-preparation.php" class="service-showcase-card scroll-animate stagger-6">
                    <div class="showcase-icon">
                        <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                            <circle cx="12" cy="12" r="10"/>
                            <polyline points="12 6 12 12 16 14"/>
                        </svg>
                    </div>
                    <h3>SSW Exam Preparation</h3>
                    <p>Intensive exam-focused coaching for the SSW examination with mock tests, strategies, and personalized feedback to ensure success.</p>
                    <span class="showcase-link">Learn More <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>
                </a>
            </div>
        </div>
    </section>

    <section class="section section-light">
        <div class="container">
            <div class="section-header scroll-animate">
                <span class="section-tag">How It Works</span>
                <h2 class="section-title">Our Process</h2>
                <p class="section-subtitle">A structured approach to guide you from enrollment to success.</p>
            </div>
            
            <div class="process-timeline">
                <div class="process-step scroll-animate">
                    <div class="step-number">1</div>
                    <div class="step-content">
                        <h3>Consultation & Assessment</h3>
                        <p>We assess your current level and discuss your goals to recommend the most suitable program for your needs.</p>
                    </div>
                </div>
                
                <div class="process-step scroll-animate">
                    <div class="step-number">2</div>
                    <div class="step-content">
                        <h3>Course Enrollment</h3>
                        <p>Once you choose your program, we help you enroll and provide all the necessary materials and schedule information.</p>
                    </div>
                </div>
                
                <div class="process-step scroll-animate">
                    <div class="step-number">3</div>
                    <div class="step-content">
                        <h3>Training & Preparation</h3>
                        <p>Expert instructors guide you through comprehensive training with interactive sessions, practice tests, and regular assessments.</p>
                    </div>
                </div>
                
                <div class="process-step scroll-animate">
                    <div class="step-number">4</div>
                    <div class="step-content">
                        <h3>Examination & Certification</h3>
                        <p>We help you register for exams and provide final preparation to ensure you're ready to pass with flying colors.</p>
                    </div>
                </div>
                
                <div class="process-step scroll-animate">
                    <div class="step-number">5</div>
                    <div class="step-content">
                        <h3>Placement & Study Abroad Support</h3>
                        <p>For those pursuing study abroad or work in Japan, we provide visa assistance, pre-departure orientation, and arrival support.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="cta-content scroll-animate" style="text-align: center; max-width: 600px; margin: 0 auto;">
                <h2>Not Sure Which Course is Right for You?</h2>
                <p style="color: var(--text-secondary); font-size: 18px; margin: 20px 0;">Book a free consultation with our counselors and let us help you plan your path to Japan.</p>
                <a href="../contact.php" class="btn btn-primary btn-lg">
                    Book Free Consultation
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M5 12h14M12 5l7 7-7 7"/>
                    </svg>
                </a>
            </div>
        </div>
    </section>
</main>

<style>
.services-showcase {
    gap: 30px;
}

.service-showcase-card {
    display: flex;
    flex-direction: column;
    background: var(--bg-primary);
    border-radius: var(--radius-lg);
    padding: 40px;
    box-shadow: var(--shadow);
    text-decoration: none;
    color: inherit;
    transition: all var(--transition);
    border: 2px solid transparent;
}

.service-showcase-card:hover {
    transform: translateY(-8px);
    box-shadow: var(--shadow-lg);
    border-color: var(--secondary);
}

.showcase-icon {
    width: 80px;
    height: 80px;
    background: linear-gradient(135deg, var(--secondary), var(--primary));
    border-radius: var(--radius-md);
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--text-white);
    margin-bottom: 25px;
}

.service-showcase-card h3 {
    font-size: 22px;
    font-weight: 700;
    color: var(--text-primary);
    margin-bottom: 15px;
}

.service-showcase-card p {
    color: var(--text-secondary);
    line-height: 1.7;
    flex-grow: 1;
}

.showcase-link {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    margin-top: 20px;
    color: var(--secondary);
    font-weight: 600;
    font-size: 15px;
    transition: gap var(--transition);
}

.service-showcase-card:hover .showcase-link {
    gap: 12px;
}

.process-timeline {
    max-width: 700px;
    margin: 0 auto;
    position: relative;
}

.process-timeline::before {
    content: '';
    position: absolute;
    left: 40px;
    top: 0;
    bottom: 0;
    width: 2px;
    background: linear-gradient(to bottom, var(--secondary), var(--primary));
}

.process-step {
    display: flex;
    gap: 30px;
    margin-bottom: 40px;
    position: relative;
}

.process-step:last-child {
    margin-bottom: 0;
}

.step-number {
    width: 80px;
    height: 80px;
    background: linear-gradient(135deg, var(--secondary), var(--primary));
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--text-white);
    font-size: 28px;
    font-weight: 800;
    flex-shrink: 0;
    position: relative;
    z-index: 1;
}

.step-content {
    padding-top: 15px;
}

.step-content h3 {
    font-size: 20px;
    font-weight: 700;
    color: var(--text-primary);
    margin-bottom: 8px;
}

.step-content p {
    color: var(--text-secondary);
    line-height: 1.7;
}

@media (max-width: 768px) {
    .service-showcase-card {
        padding: 30px;
    }
    
    .showcase-icon {
        width: 60px;
        height: 60px;
    }
    
    .showcase-icon svg {
        width: 30px;
        height: 30px;
    }
    
    .service-showcase-card h3 {
        font-size: 20px;
    }
    
    .process-timeline::before {
        left: 30px;
    }
    
    .step-number {
        width: 60px;
        height: 60px;
        font-size: 22px;
    }
}
</style>

<?php require_once '../includes/footer.php'; ?>