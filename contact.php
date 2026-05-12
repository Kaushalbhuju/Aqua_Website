<?php
declare(strict_types=1);

define('BASE_PATH', '');

$pageTitle = 'Contact Us - Aqua Education and Training Academy';
$pageDescription = 'Get in touch with Aqua Education and Training Academy. Located at KG Tower 7F, Lazimpat-2, Kathmandu, Nepal. Phone: 01-4519666, Email: ssw.edu.academy@gmail.com';
$pageKeywords = 'contact Aqua Education Nepal, Japanese academy Kathmandu contact, SSW classes contact Lazimpat, study Japan consultancy contact';
$currentPage = 'contact';

$successMessage = $_GET['success'] ?? '';
$errorMessage = $_GET['error'] ?? '';

require_once 'includes/meta.php';
?>

<main>
    <section class="page-hero">
        <div class="container">
            <div class="breadcrumb">
                <a href="index.php">Home</a>
                <span>/</span>
                <span class="breadcrumb-current">Contact Us</span>
            </div>
            <div class="page-hero-content scroll-animate">
                <h1>Contact Us</h1>
                <p>Ready to start your journey to Japan? Get in touch with us today.</p>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="contact-grid">
                <div class="contact-info scroll-animate-left">
                    <h2 class="section-title" style="text-align: left;">Get in Touch</h2>
                    <p class="contact-intro">Whether you're interested in our Japanese language courses, JLPT preparation, SSW programs, or study abroad opportunities, we're here to help. Reach out to us and one of our counselors will get back to you promptly.</p>
                    
                    <div class="info-cards">
                        <div class="info-card">
                            <div class="info-icon">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/>
                                    <circle cx="12" cy="10" r="3"/>
                                </svg>
                            </div>
                            <div class="info-content">
                                <h4>Our Address</h4>
                                <p>KG Tower 7F, Lazimpat-2,<br>Kathmandu, Nepal</p>
                            </div>
                        </div>
                        
                        <div class="info-card">
                            <div class="info-icon">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
                                </svg>
                            </div>
                            <div class="info-content">
                                <h4>Phone Number</h4>
                                <p><a href="tel:014519666">01-4519666</a></p>
                            </div>
                        </div>
                        
                        <div class="info-card">
                            <div class="info-icon">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                                    <polyline points="22,6 12,13 2,6"/>
                                </svg>
                            </div>
                            <div class="info-content">
                                <h4>Email Address</h4>
                                <p><a href="mailto:ssw.edu.academy@gmail.com">ssw.edu.academy@gmail.com</a></p>
                            </div>
                        </div>
                        
                        <div class="info-card">
                            <div class="info-icon">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <circle cx="12" cy="12" r="10"/>
                                    <polyline points="12 6 12 12 16 14"/>
                                </svg>
                            </div>
                            <div class="info-content">
                                <h4>Office Hours</h4>
                                <p>Sunday - Friday: 10:00 AM - 6:00 PM<br>Saturday: Closed</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="contact-form-wrapper scroll-animate-right">
                    <div class="contact-form-card">
                        <h3>Send Us a Message</h3>
                        <p>Fill out the form below and we'll get back to you within 24 hours.</p>
                        
                        <?php if ($successMessage): ?>
                        <div class="form-success">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/>
                                <polyline points="22 4 12 14.01 9 11.01"/>
                            </svg>
                            <span><?= htmlspecialchars($successMessage) ?></span>
                        </div>
                        <?php endif; ?>
                        
                        <?php if ($errorMessage): ?>
                        <div class="form-error-box">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <circle cx="12" cy="12" r="10"/>
                                <line x1="12" y1="8" x2="12" y2="12"/>
                                <line x1="12" y1="16" x2="12.01" y2="16"/>
                            </svg>
                            <span><?= htmlspecialchars($errorMessage) ?></span>
                        </div>
                        <?php endif; ?>
                        
                        <form action="process/contact-form.php" method="POST" data-validate>
                            <input type="hidden" name="csrf_token" value="<?= bin2hex(random_bytes(32)) ?>">
                            
                            <div class="form-row">
                                <div class="input-group">
                                    <label class="input-label" for="name">Full Name *</label>
                                    <input type="text" id="name" name="name" class="input-field" placeholder="Enter your full name" required>
                                </div>
                            </div>
                            
                            <div class="form-row grid-2">
                                <div class="input-group">
                                    <label class="input-label" for="email">Email Address *</label>
                                    <input type="email" id="email" name="email" class="input-field" placeholder="your@email.com" required>
                                </div>
                                
                                <div class="input-group">
                                    <label class="input-label" for="phone">Phone Number</label>
                                    <input type="tel" id="phone" name="phone" class="input-field" placeholder="98XXXXXXXX">
                                </div>
                            </div>
                            
                            <div class="input-group">
                                <label class="input-label" for="subject">Subject *</label>
                                <select id="subject" name="subject" class="input-field" required>
                                    <option value="">Select a subject</option>
                                    <option value="general">General Inquiry</option>
                                    <option value="course">Course Information</option>
                                    <option value="study-abroad">Study Abroad</option>
                                    <option value="ssw-program">SSW Program</option>
                                    <option value="jlpt-prep">JLPT Preparation</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                            
                            <div class="input-group">
                                <label class="input-label" for="message">Your Message *</label>
                                <textarea id="message" name="message" class="input-field" placeholder="Tell us about your goals and how we can help you..." required></textarea>
                            </div>
                            
                            <button type="submit" class="btn btn-primary btn-lg" style="width: 100%;">
                                <span>Send Message</span>
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <line x1="22" y1="2" x2="11" y2="13"/>
                                    <polygon points="22 2 15 22 11 13 2 9 22 2"/>
                                </svg>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-light">
        <div class="container">
            <div class="section-header scroll-animate">
                <span class="section-tag">Find Us</span>
                <h2 class="section-title">Our Location</h2>
                <p class="section-subtitle">Visit us at our office in the heart of Kathmandu.</p>
            </div>
            
            <div class="map-wrapper scroll-animate">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3513.1234567890123!2d85.3123456!3d27.7123456!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1234567890abcdef!2sKG%20Tower!5e0!3m2!1sen!2snp!4v1234567890123"
                    width="100%" 
                    height="450" 
                    style="border:0; border-radius: var(--radius-lg);" 
                    allowfullscreen="" 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    </section>
</main>

<style>
.contact-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 60px;
    align-items: start;
}

.contact-intro {
    color: var(--text-secondary);
    font-size: 16px;
    line-height: 1.7;
    margin-bottom: 30px;
}

.info-cards {
    display: flex;
    flex-direction: column;
    gap: 20px;
}

.info-card {
    display: flex;
    gap: 20px;
    padding: 25px;
    background: var(--bg-secondary);
    border-radius: var(--radius);
    transition: all var(--transition);
}

.info-card:hover {
    transform: translateX(10px);
    box-shadow: var(--shadow);
}

.info-icon {
    width: 50px;
    height: 50px;
    background: linear-gradient(135deg, var(--secondary), var(--primary));
    border-radius: var(--radius);
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--text-white);
    flex-shrink: 0;
}

.info-content h4 {
    font-size: 16px;
    font-weight: 700;
    color: var(--text-primary);
    margin-bottom: 5px;
}

.info-content p {
    color: var(--text-secondary);
    font-size: 14px;
    line-height: 1.6;
}

.info-content a {
    color: var(--secondary);
    text-decoration: none;
}

.info-content a:hover {
    text-decoration: underline;
}

.contact-form-card {
    background: var(--bg-primary);
    border-radius: var(--radius-lg);
    padding: 40px;
    box-shadow: var(--shadow-lg);
}

.contact-form-card h3 {
    font-size: 24px;
    font-weight: 700;
    color: var(--text-primary);
    margin-bottom: 8px;
}

.contact-form-card > p {
    color: var(--text-secondary);
    font-size: 14px;
    margin-bottom: 25px;
}

.form-row {
    margin-bottom: 0;
}

.form-row.grid-2 {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 20px;
}

.form-error-box {
    display: flex;
    align-items: center;
    gap: 12px;
    padding: 15px 20px;
    background: rgba(239, 68, 68, 0.1);
    color: var(--error);
    border-radius: var(--radius);
    margin-bottom: 20px;
    font-size: 14px;
}

.map-wrapper {
    border-radius: var(--radius-lg);
    overflow: hidden;
    box-shadow: var(--shadow);
}

@media (max-width: 992px) {
    .contact-grid {
        grid-template-columns: 1fr;
        gap: 40px;
    }
}

@media (max-width: 768px) {
    .contact-form-card {
        padding: 25px;
    }
    
    .form-row.grid-2 {
        grid-template-columns: 1fr;
    }
    
    .info-card {
        padding: 20px;
    }
}
</style>

<?php require_once 'includes/footer.php'; ?>