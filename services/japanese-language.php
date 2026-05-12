<?php
declare(strict_types=1);

define('BASE_PATH', '../');

$pageTitle = 'Japanese Language Classes - Aqua Education and Training Academy';
$pageDescription = 'Learn Japanese from beginner (N5) to advanced (N1) with native-speaking instructors at Aqua Education. Comprehensive language courses in Kathmandu.';
$pageKeywords = 'Japanese language classes Kathmandu, learn Japanese Nepal, Japanese course N5 N4 N3 N2 N1, Japanese classes Lazimpat';
$currentPage = 'service-japanese';
$backPath = '../';

require_once $backPath . 'includes/meta.php';
?>

<main>
    <section class="page-hero service-hero" style="background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);">
        <div class="container">
            <div class="breadcrumb">
                <a href="../index.php">Home</a>
                <span>/</span>
                <a href="index.php">Services</a>
                <span>/</span>
                <span class="breadcrumb-current">Japanese Language</span>
            </div>
            <div class="page-hero-content scroll-animate">
                <h1>Japanese Language Classes</h1>
                <p>From beginner to advanced levels — structured curriculum with expert instructors.</p>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="service-intro">
                <div class="intro-content scroll-animate">
                    <span class="section-tag">Overview</span>
                    <h2 class="section-title" style="text-align: left;">Master Japanese from Beginner to Advanced</h2>
                    <p>Our Japanese language courses are designed to take you from absolute beginner to fluent speaker. Whether your goal is to pass JLPT, work in Japan, or study abroad, our structured curriculum and experienced instructors will guide you every step of the way.</p>
                    <p>We offer courses from N5 (beginner) to N1 (advanced), ensuring there's a perfect level for everyone. Small batch sizes, interactive learning methods, and regular assessments make our program highly effective.</p>
                </div>
                <div class="intro-cta scroll-animate">
                    <div class="cta-card">
                        <h3>Ready to Start?</h3>
                        <p>Contact us for a free placement test and consultation.</p>
                        <a href="../contact.php" class="btn btn-primary">
                            Book Free Test
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
                <span class="section-tag">Course Levels</span>
                <h2 class="section-title">JLPT Level Curriculum</h2>
                <p class="section-subtitle">Our structured curriculum covers all JLPT levels from N5 to N1.</p>
            </div>
            
            <div class="levels-grid" data-stagger="100">
                <div class="level-card scroll-animate stagger-1">
                    <div class="level-badge n5">N5</div>
                    <h3>Beginner Level</h3>
                    <p class="level-duration">3-4 months</p>
                    <p class="level-description">Perfect for absolute beginners. Learn hiragana, katakana, basic grammar, and everyday phrases to build a solid foundation.</p>
                    <ul class="level-topics">
                        <li>Hiragana & Katakana writing</li>
                        <li>Basic grammar structures</li>
                        <li>Everyday vocabulary (800+ words)</li>
                        <li>Simple conversation skills</li>
                        <li>Basic kanji (100+ characters)</li>
                    </ul>
                    <span class="level-target">Target: New learners with no prior experience</span>
                </div>
                
                <div class="level-card scroll-animate stagger-2">
                    <div class="level-badge n4">N4</div>
                    <h3>Elementary Level</h3>
                    <p class="level-duration">3-4 months</p>
                    <p class="level-description">Build on your basics with expanded vocabulary, more complex grammar, and conversational ability for daily situations.</p>
                    <ul class="level-topics">
                        <li>Expanded vocabulary (1500+ words)</li>
                        <li>Intermediate grammar patterns</li>
                        <li>Kanji reading (300+ characters)</li>
                        <li>Daily life conversations</li>
                        <li>Basic reading skills</li>
                    </ul>
                    <span class="level-target">Target: N5 graduates or equivalent knowledge</span>
                </div>
                
                <div class="level-card scroll-animate stagger-3">
                    <div class="level-badge n3">N3</div>
                    <h3>Intermediate Level</h3>
                    <p class="level-duration">4-5 months</p>
                    <p class="level-description">Develop ability to understand Japanese in everyday situations and some specialized topics. Bridge to advanced fluency.</p>
                    <ul class="level-topics">
                        <li>Intermediate grammar mastery</li>
                        <li>Reading comprehension skills</li>
                        <li>Kanji recognition (600+ characters)</li>
                        <li>Daily life Japanese fluency</li>
                        <li>Listening comprehension practice</li>
                    </ul>
                    <span class="level-target">Target: N4 graduates or equivalent knowledge</span>
                </div>
                
                <div class="level-card scroll-animate stagger-4">
                    <div class="level-badge n2">N2</div>
                    <h3>Upper Intermediate Level</h3>
                    <p class="level-duration">5-6 months</p>
                    <p class="level-description">Achieve professional-level Japanese. Master complex grammar, business vocabulary, and advanced reading/writing skills.</p>
                    <ul class="level-topics">
                        <li>Business Japanese vocabulary</li>
                        <li>Complex grammar structures</li>
                        <li>Advanced kanji (1000+ characters)</li>
                        <li>Reading newspapers & articles</li>
                        <li>Professional communication skills</li>
                    </ul>
                    <span class="level-target">Target: N3 graduates or equivalent knowledge</span>
                </div>
                
                <div class="level-card scroll-animate stagger-5">
                    <div class="level-badge n1">N1</div>
                    <h3>Advanced Level</h3>
                    <p class="level-duration">6-8 months</p>
                    <p class="level-description">Master academic and professional Japanese. Achieve near-native fluency for university studies or career advancement.</p>
                    <ul class="level-topics">
                        <li>Academic Japanese mastery</li>
                        <li>Complex kanji (2000+ characters)</li>
                        <li>Advanced reading & writing</li>
                        <li>Professional presentation skills</li>
                        <li>Cultural nuance understanding</li>
                    </ul>
                    <span class="level-target">Target: N2 graduates or equivalent knowledge</span>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="section-header scroll-animate">
                <span class="section-tag">What You'll Learn</span>
                <h2 class="section-title">Comprehensive Skill Development</h2>
            </div>
            
            <div class="skills-grid grid grid-2" data-stagger="100">
                <div class="skill-card scroll-animate stagger-1">
                    <div class="skill-icon">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M12 20h9M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"/>
                        </svg>
                    </div>
                    <h4>Reading & Writing</h4>
                    <p>Master hiragana, katakana, and kanji through systematic practice. Develop reading skills from basic texts to complex articles and documents.</p>
                </div>
                
                <div class="skill-card scroll-animate stagger-2">
                    <div class="skill-icon">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/>
                        </svg>
                    </div>
                    <h4>Grammar & Vocabulary</h4>
                    <p>Build a strong foundation in Japanese grammar patterns while expanding your vocabulary to communicate effectively in various situations.</p>
                </div>
                
                <div class="skill-card scroll-animate stagger-3">
                    <div class="skill-icon">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <polygon points="11 5 6 9 2 9 2 15 6 15 11 19 11 5"/>
                            <path d="M19.07 4.93a10 10 0 0 1 0 14.14M15.54 8.46a5 5 0 0 1 0 7.07"/>
                        </svg>
                    </div>
                    <h4>Listening & Speaking</h4>
                    <p>Develop conversational fluency through interactive speaking practice, listening exercises, and real-life scenario simulations.</p>
                </div>
                
                <div class="skill-card scroll-animate stagger-4">
                    <div class="skill-icon">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <circle cx="12" cy="12" r="10"/>
                            <path d="M2 12h20M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/>
                        </svg>
                    </div>
                    <h4>Cultural Understanding</h4>
                    <p>Learn Japanese culture, customs, and social etiquette to communicate appropriately and build meaningful relationships in Japanese society.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-light">
        <div class="container">
            <div class="section-header scroll-animate">
                <span class="section-tag">Class Features</span>
                <h2 class="section-title">Why Our Classes Stand Out</h2>
            </div>
            
            <div class="features-grid grid grid-3" data-stagger="100">
                <div class="feature-item scroll-animate stagger-1">
                    <div class="feature-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/>
                            <circle cx="9" cy="7" r="4"/>
                        </svg>
                    </div>
                    <h4>Small Batch Sizes</h4>
                    <p>Maximum 15 students per class for personalized attention and better interaction.</p>
                </div>
                
                <div class="feature-item scroll-animate stagger-2">
                    <div class="feature-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <circle cx="12" cy="12" r="10"/>
                            <path d="M2 12h20M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10"/>
                        </svg>
                    </div>
                    <h4>Native Speakers</h4>
                    <p>Learn from certified native Japanese speakers for authentic pronunciation and cultural insights.</p>
                </div>
                
                <div class="feature-item scroll-animate stagger-3">
                    <div class="feature-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/>
                        </svg>
                    </div>
                    <h4>Interactive Learning</h4>
                    <p>Modern teaching methods with multimedia resources, role-play, and practical exercises.</p>
                </div>
                
                <div class="feature-item scroll-animate stagger-4">
                    <div class="feature-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/>
                        </svg>
                    </div>
                    <h4>Regular Assessments</h4>
                    <p>Track your progress with weekly tests, monthly reviews, and mock exams.</p>
                </div>
                
                <div class="feature-item scroll-animate stagger-5">
                    <div class="feature-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"/>
                            <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"/>
                        </svg>
                    </div>
                    <h4>Study Materials</h4>
                    <p>Comprehensive textbooks, workbooks, and digital resources provided.</p>
                </div>
                
                <div class="feature-item scroll-animate stagger-6">
                    <div class="feature-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <circle cx="12" cy="12" r="10"/>
                            <polyline points="12 6 12 12 16 14"/>
                        </svg>
                    </div>
                    <h4>Flexible Schedules</h4>
                    <p>Morning, afternoon, and evening batches available. Weekend classes also offered.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="cta-section">
        <div class="container">
            <div class="cta-content scroll-animate">
                <h2>Start Your Japanese Learning Journey</h2>
                <p>Whether you're a complete beginner or looking to advance your skills, we have the perfect course for you.</p>
                <div class="cta-buttons">
                    <a href="../contact.php" class="btn btn-white btn-lg">
                        Enroll Now
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                    </a>
                    <a href="jlpt-preparation.php" class="btn btn-outline btn-lg" style="border-color: white; color: white;">
                        View JLPT Prep
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>

<style>
.service-hero .breadcrumb a,
.service-hero .breadcrumb span {
    color: rgba(255, 255, 255, 0.8);
}

.service-hero .breadcrumb a:hover {
    color: white;
}

.service-hero .page-hero-content h1,
.service-hero .page-hero-content p {
    color: white;
}

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
    background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
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
    color: var(--primary);
}

.cta-card .btn:hover {
    background: var(--bg-secondary);
}

.levels-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 25px;
}

.level-card {
    background: var(--bg-primary);
    border-radius: var(--radius-md);
    padding: 30px;
    box-shadow: var(--shadow);
    position: relative;
    overflow: hidden;
}

.level-badge {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 60px;
    height: 60px;
    border-radius: var(--radius-full);
    font-size: 20px;
    font-weight: 800;
    color: white;
    margin-bottom: 20px;
}

.level-badge.n5 { background: linear-gradient(135deg, #4CAF50, #2E7D32); }
.level-badge.n4 { background: linear-gradient(135deg, #8BC34A, #689F38); }
.level-badge.n3 { background: linear-gradient(135deg, #FF9800, #F57C00); }
.level-badge.n2 { background: linear-gradient(135deg, #F44336, #D32F2F); }
.level-badge.n1 { background: linear-gradient(135deg, #9C27B0, #7B1FA2); }

.level-card h3 {
    font-size: 20px;
    font-weight: 700;
    color: var(--text-primary);
    margin-bottom: 5px;
}

.level-duration {
    color: var(--secondary);
    font-weight: 600;
    font-size: 14px;
    margin-bottom: 15px;
}

.level-description {
    color: var(--text-secondary);
    font-size: 14px;
    line-height: 1.7;
    margin-bottom: 20px;
}

.level-topics {
    margin-bottom: 15px;
}

.level-topics li {
    display: flex;
    align-items: center;
    gap: 10px;
    color: var(--text-secondary);
    font-size: 13px;
    padding: 6px 0;
    border-bottom: 1px solid var(--border-light);
}

.level-topics li:last-child {
    border-bottom: none;
}

.level-topics li::before {
    content: '→';
    color: var(--secondary);
}

.level-target {
    display: block;
    padding: 10px 15px;
    background: rgba(62, 156, 220, 0.1);
    color: var(--secondary);
    font-size: 12px;
    font-weight: 600;
    border-radius: var(--radius);
}

.skills-grid {
    gap: 25px;
}

.skill-card {
    background: var(--bg-primary);
    border-radius: var(--radius-md);
    padding: 30px;
    box-shadow: var(--shadow);
}

.skill-icon {
    width: 55px;
    height: 55px;
    background: linear-gradient(135deg, var(--secondary), var(--primary));
    border-radius: var(--radius);
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    margin-bottom: 20px;
}

.skill-card h4 {
    font-size: 18px;
    font-weight: 700;
    color: var(--text-primary);
    margin-bottom: 10px;
}

.skill-card p {
    color: var(--text-secondary);
    font-size: 14px;
    line-height: 1.7;
}

.features-grid {
    gap: 20px;
}

.feature-item {
    text-align: center;
    padding: 30px 20px;
    background: var(--bg-primary);
    border-radius: var(--radius-md);
    box-shadow: var(--shadow);
}

.feature-icon {
    width: 55px;
    height: 55px;
    background: linear-gradient(135deg, var(--secondary), var(--primary));
    border-radius: var(--radius-full);
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    margin: 0 auto 18px;
}

.feature-item h4 {
    font-size: 16px;
    font-weight: 700;
    color: var(--text-primary);
    margin-bottom: 8px;
}

.feature-item p {
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
    .levels-grid {
        grid-template-columns: 1fr;
    }
}
</style>

<?php require_once $backPath . 'includes/footer.php'; ?>