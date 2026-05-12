<?php
declare(strict_types=1);

define('BASE_PATH', '../');

$pageTitle = 'SSW Skill Training - Aqua Education and Training Academy';
$pageDescription = 'Hands-on SSW skill training in designated sectors. Practical training for nursing care, construction, agriculture, and more industries in Japan.';
$pageKeywords = 'SSW skill training Nepal, practical training Japan work, nursing care training Kathmandu, construction training Nepal, SSW sector training';
$currentPage = 'service-ssw-skill';
$backPath = '../';

require_once $backPath . 'includes/meta.php';
?>

<main>
    <section class="page-hero service-hero" style="background: linear-gradient(135deg, #7C3AED 0%, #6D28D9 100%);">
        <div class="container">
            <div class="breadcrumb">
                <a href="../index.php">Home</a>
                <span>/</span>
                <a href="index.php">Services</a>
                <span>/</span>
                <span class="breadcrumb-current">SSW Skill Training</span>
            </div>
            <div class="page-hero-content scroll-animate">
                <h1>SSW Skill Training</h1>
                <p>Hands-on practical training in designated SSW industry sectors.</p>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="service-intro">
                <div class="intro-content scroll-animate">
                    <span class="section-tag">Overview</span>
                    <h2 class="section-title" style="text-align: left;">Job-Ready Training for Japan</h2>
                    <p>Our SSW Skill Training program goes beyond exam preparation to ensure you're truly job-ready. We provide hands-on, practical training in designated SSW industry sectors, giving you the real-world skills that Japanese employers value.</p>
                    <p>Training combines classroom theory with practical workshops, simulation-based learning, and industry-standard equipment. By the end of our program, you'll be confident and competent in your chosen field.</p>
                </div>
                <div class="intro-cta scroll-animate">
                    <div class="cta-card">
                        <h3>Start Training</h3>
                        <p>Build practical skills that employers in Japan are looking for.</p>
                        <a href="../contact.php" class="btn btn-primary">
                            Apply Now
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
                <span class="section-tag">Training Sectors</span>
                <h2 class="section-title">Sectors We Train</h2>
                <p class="section-subtitle">Comprehensive hands-on training across multiple SSW-designated industries.</p>
            </div>
            
            <div class="sectors-training-grid" data-stagger="100">
                <div class="training-sector scroll-animate stagger-1">
                    <div class="sector-header">
                        <div class="sector-icon">
                            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M22 12h-4l-3 9L9 3l-3 9H2"/>
                            </svg>
                        </div>
                        <h3>Nursing Care</h3>
                    </div>
                    <div class="sector-content">
                        <p>Comprehensive training for elderly care services in Japan, one of the most in-demand SSW sectors.</p>
                        <ul class="training-topics">
                            <li>Patient care techniques</li>
                            <li>Medical communication</li>
                            <li>Safety protocols</li>
                            <li>Dementia care</li>
                            <li>Rehabilitation support</li>
                        </ul>
                    </div>
                </div>
                
                <div class="training-sector scroll-animate stagger-2">
                    <div class="sector-header">
                        <div class="sector-icon">
                            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M2 20h20M5 20V8l7-6 7 6v12"/>
                            </svg>
                        </div>
                        <h3>Construction</h3>
                    </div>
                    <div class="sector-content">
                        <p>Training in construction techniques, safety standards, and equipment operation for Japan's construction industry.</p>
                        <ul class="training-topics">
                            <li>Building techniques</li>
                            <li>Safety standards</li>
                            <li>Equipment handling</li>
                            <li>Blueprint reading</li>
                            <li>Team coordination</li>
                        </ul>
                    </div>
                </div>
                
                <div class="training-sector scroll-animate stagger-3">
                    <div class="sector-header">
                        <div class="sector-icon">
                            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M12 2a10 10 0 1 0 10 10"/>
                                <path d="M12 2a7 7 0 0 0-7 7c0 5 7 13 7 13"/>
                            </svg>
                        </div>
                        <h3>Agriculture</h3>
                    </div>
                    <div class="sector-content">
                        <p>Practical farming training covering modern agricultural techniques used in Japan's agricultural sector.</p>
                        <ul class="training-topics">
                            <li>Crop management</li>
                            <li>Machinery operation</li>
                            <li>Greenhouse techniques</li>
                            <li>Harvesting methods</li>
                            <li>Quality standards</li>
                        </ul>
                    </div>
                </div>
                
                <div class="training-sector scroll-animate stagger-4">
                    <div class="sector-header">
                        <div class="sector-icon">
                            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M18 8h1a4 4 0 0 1 0 8h-1M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"/>
                            </svg>
                        </div>
                        <h3>Food Service</h3>
                    </div>
                    <div class="sector-content">
                        <p>Training in food service operations, Japanese cuisine basics, and hospitality standards for Japan's restaurants.</p>
                        <ul class="training-topics">
                            <li>Kitchen operations</li>
                            <li>Food hygiene standards</li>
                            <li>Japanese cuisine basics</li>
                            <li>Customer service</li>
                            <li>Menu knowledge</li>
                        </ul>
                    </div>
                </div>
                
                <div class="training-sector scroll-animate stagger-5">
                    <div class="sector-header">
                        <div class="sector-icon">
                            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <rect x="2" y="7" width="20" height="14" rx="2" ry="2"/>
                                <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/>
                            </svg>
                        </div>
                        <h3>Manufacturing</h3>
                    </div>
                    <div class="sector-content">
                        <p>Training in manufacturing processes, quality control, and industrial standards for Japanese factories.</p>
                        <ul class="training-topics">
                            <li>Assembly line skills</li>
                            <li>Quality control</li>
                            <li>Equipment operation</li>
                            <li>Safety procedures</li>
                            <li>Process improvement</li>
                        </ul>
                    </div>
                </div>
                
                <div class="training-sector scroll-animate stagger-6">
                    <div class="sector-header">
                        <div class="sector-icon">
                            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/>
                                <polyline points="9 22 9 12 15 12 15 22"/>
                            </svg>
                        </div>
                        <h3>Hospitality</h3>
                    </div>
                    <div class="sector-content">
                        <p>Training in hotel and accommodation services, preparing you for Japan's tourism and hospitality industry.</p>
                        <ul class="training-topics">
                            <li>Hotel operations</li>
                            <li>Guest services</li>
                            <li>Japanese etiquette</li>
                            <li>Front desk operations</li>
                            <li>Event management</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="section-header scroll-animate">
                <span class="section-tag">Training Method</span>
                <h2 class="section-title">Our Training Methodology</h2>
                <p class="section-subtitle">A blend of theory and practical experience to prepare you for real work in Japan.</p>
            </div>
            
            <div class="method-grid grid grid-2" data-stagger="120">
                <div class="method-item scroll-animate stagger-1">
                    <div class="method-icon">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
                            <polyline points="14 2 14 8 20 8"/>
                        </svg>
                    </div>
                    <h4>Classroom Theory</h4>
                    <p>Comprehensive theory sessions explaining the scientific and technical principles behind each skill. Foundation for practical application.</p>
                </div>
                
                <div class="method-item scroll-animate stagger-2">
                    <div class="method-icon">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/>
                        </svg>
                    </div>
                    <h4>Practical Workshops</h4>
                    <p>Hands-on training sessions where you practice skills in controlled environments. Build muscle memory and confidence.</p>
                </div>
                
                <div class="method-item scroll-animate stagger-3">
                    <div class="method-icon">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <polygon points="12 2 2 7 12 12 22 7 12 2"/>
                            <polyline points="2 17 12 22 22 17"/>
                            <polyline points="2 12 12 17 22 12"/>
                        </svg>
                    </div>
                    <h4>Simulation Learning</h4>
                    <p>Realistic workplace simulations that prepare you for actual job conditions in Japan. Experience Japanese work environment before arrival.</p>
                </div>
                
                <div class="method-item scroll-animate stagger-4">
                    <div class="method-icon">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/>
                            <circle cx="9" cy="7" r="4"/>
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87"/>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"/>
                        </svg>
                    </div>
                    <h4>Industry Visits</h4>
                    <p>Visits to actual workplaces and industries (where applicable) to observe real operations and understand Japanese work culture.</p>
                </div>
                
                <div class="method-item scroll-animate stagger-5">
                    <div class="method-icon">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/>
                        </svg>
                    </div>
                    <h4>Assessment & Certification</h4>
                    <p>Regular skills assessments to track progress. Certificate upon successful completion of the training program.</p>
                </div>
                
                <div class="method-item scroll-animate stagger-6">
                    <div class="method-icon">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <circle cx="12" cy="12" r="10"/>
                            <path d="M2 12h20M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10"/>
                        </svg>
                    </div>
                    <h4>Japanese Workplace Culture</h4>
                    <p>Training on Japanese workplace etiquette, communication styles, and cultural expectations for smooth integration.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-light">
        <div class="container">
            <div class="schedule-section scroll-animate">
                <h2 class="section-title" style="text-align: center;">Duration & Schedule</h2>
                <p class="section-subtitle" style="text-align: center;">Flexible options to fit your commitments.</p>
                
                <div class="schedule-cards grid grid-3" data-stagger="100">
                    <div class="schedule-card scroll-animate stagger-1">
                        <div class="schedule-badge">Most Popular</div>
                        <h4>Morning Batch</h4>
                        <p class="schedule-time">8:00 AM - 12:00 PM</p>
                        <p>Ideal for those with other daytime commitments. Focus on intensive skill training in the morning hours.</p>
                    </div>
                    
                    <div class="schedule-card scroll-animate stagger-2">
                        <h4>Afternoon Batch</h4>
                        <p class="schedule-time">1:00 PM - 5:00 PM</p>
                        <p>Perfect for students or those with morning jobs. Afternoon sessions with hands-on practical training.</p>
                    </div>
                    
                    <div class="schedule-card scroll-animate stagger-3">
                        <h4>Weekend Intensive</h4>
                        <p class="schedule-time">Sat - Sun Full Day</p>
                        <p>Comprehensive weekend program for working professionals. Intense training with practical sessions.</p>
                    </div>
                </div>
                
                <div class="duration-info">
                    <p><strong>Training Duration:</strong> Typically 2-4 months depending on the sector and individual progress.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="cta-section">
        <div class="container">
            <div class="cta-content scroll-animate">
                <h2>Get Job-Ready Today</h2>
                <p>Our hands-on training programs will prepare you for success in your chosen SSW sector.</p>
                <div class="cta-buttons">
                    <a href="../contact.php" class="btn btn-white btn-lg">
                        Apply for Training
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                    </a>
                    <a href="ssw-exam-preparation.php" class="btn btn-outline btn-lg" style="border-color: white; color: white;">
                        View Exam Prep
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
    background: linear-gradient(135deg, #7C3AED 0%, #6D28D9 100%);
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
    color: #7C3AED;
}

.sectors-training-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 25px;
}

.training-sector {
    background: var(--bg-primary);
    border-radius: var(--radius-md);
    overflow: hidden;
    box-shadow: var(--shadow);
}

.sector-header {
    display: flex;
    align-items: center;
    gap: 15px;
    padding: 20px 25px;
    background: linear-gradient(135deg, #7C3AED 0%, #6D28D9 100%);
    color: white;
}

.sector-icon {
    width: 50px;
    height: 50px;
    background: rgba(255,255,255,0.2);
    border-radius: var(--radius);
    display: flex;
    align-items: center;
    justify-content: center;
}

.sector-header h3 {
    font-size: 18px;
    font-weight: 700;
}

.sector-content {
    padding: 25px;
}

.sector-content > p {
    color: var(--text-secondary);
    font-size: 14px;
    line-height: 1.7;
    margin-bottom: 15px;
}

.training-topics {
    display: flex;
    flex-direction: column;
    gap: 8px;
}

.training-topics li {
    display: flex;
    align-items: center;
    gap: 10px;
    color: var(--text-secondary);
    font-size: 13px;
}

.training-topics li::before {
    content: '→';
    color: #7C3AED;
}

.method-grid {
    gap: 25px;
}

.method-item {
    display: flex;
    gap: 20px;
    padding: 25px;
    background: var(--bg-primary);
    border-radius: var(--radius);
    box-shadow: var(--shadow-sm);
}

.method-icon {
    width: 55px;
    height: 55px;
    background: linear-gradient(135deg, #7C3AED, #6D28D9);
    border-radius: var(--radius);
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    flex-shrink: 0;
}

.method-item h4 {
    font-size: 18px;
    font-weight: 700;
    color: var(--text-primary);
    margin-bottom: 8px;
}

.method-item p {
    color: var(--text-secondary);
    font-size: 14px;
    line-height: 1.7;
}

.schedule-section {
    padding: 50px;
    background: var(--bg-secondary);
    border-radius: var(--radius-lg);
}

.schedule-section .section-title {
    margin-bottom: 10px;
}

.schedule-section .section-subtitle {
    margin-bottom: 40px;
}

.schedule-cards {
    margin-bottom: 30px;
}

.schedule-card {
    background: var(--bg-primary);
    border-radius: var(--radius-md);
    padding: 30px;
    box-shadow: var(--shadow);
    text-align: center;
    position: relative;
}

.schedule-badge {
    position: absolute;
    top: -12px;
    left: 50%;
    transform: translateX(-50%);
    padding: 6px 20px;
    background: linear-gradient(135deg, #7C3AED, #6D28D9);
    color: white;
    font-size: 12px;
    font-weight: 600;
    border-radius: var(--radius-full);
}

.schedule-card h4 {
    font-size: 18px;
    font-weight: 700;
    color: var(--text-primary);
    margin-bottom: 10px;
}

.schedule-time {
    font-size: 14px;
    font-weight: 600;
    color: #7C3AED;
    margin-bottom: 15px;
}

.schedule-card p:last-child {
    color: var(--text-secondary);
    font-size: 14px;
}

.duration-info {
    text-align: center;
    padding: 20px;
    background: var(--bg-primary);
    border-radius: var(--radius);
}

.duration-info p {
    color: var(--text-secondary);
    font-size: 15px;
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
    
    .sectors-training-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (max-width: 768px) {
    .sectors-training-grid {
        grid-template-columns: 1fr;
    }
    
    .method-item {
        flex-direction: column;
        gap: 15px;
    }
    
    .schedule-section {
        padding: 30px;
    }
    
    .schedule-cards {
        grid-template-columns: 1fr;
    }
}
</style>

<?php require_once $backPath . 'includes/footer.php'; ?>