<?php
declare(strict_types=1);

define('BASE_PATH', '');

$pageTitle = 'Gallery - Aqua Education and Training Academy';
$pageDescription = 'Explore our photo gallery showcasing Aqua Education and Training Academy facilities, events, student activities, and more.';
$pageKeywords = 'Aqua Education gallery, Japanese academy facilities Kathmandu, student success stories Nepal, Japan study abroad gallery';
$currentPage = 'gallery';

require_once 'includes/meta.php';
?>

<main>
    <section class="page-hero">
        <div class="container">
            <div class="breadcrumb">
                <a href="index.php">Home</a>
                <span>/</span>
                <span class="breadcrumb-current">Gallery</span>
            </div>
            <div class="page-hero-content scroll-animate">
                <h1>Our Gallery</h1>
                <p>A glimpse into our academy, events, and student life.</p>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="section-header scroll-animate">
                <span class="section-tag">Explore</span>
                <h2 class="section-title">Moments at Aqua Education</h2>
                <p class="section-subtitle">Explore our facilities, events, and the vibrant learning environment we provide.</p>
            </div>
            
            <div class="gallery-filters scroll-animate">
                <button class="filter-btn active" data-filter="all">All</button>
                <button class="filter-btn" data-filter="classroom">Classroom</button>
                <button class="filter-btn" data-filter="events">Events</button>
                <button class="filter-btn" data-filter="students">Students</button>
                <button class="filter-btn" data-filter="cultural">Cultural</button>
            </div>
            
            <div class="gallery-grid" data-stagger="80">
                <div class="gallery-item scroll-animate stagger-1" data-category="classroom">
                    <div class="gallery-placeholder" style="background: linear-gradient(135deg, var(--secondary) 0%, var(--primary) 100%);">
                        <svg width="60" height="60" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" opacity="0.3">
                            <rect x="2" y="3" width="20" height="14" rx="2" ry="2"/>
                            <line x1="8" y1="21" x2="16" y2="21"/>
                            <line x1="12" y1="17" x2="12" y2="21"/>
                        </svg>
                        <span>Modern Classroom</span>
                    </div>
                    <div class="gallery-overlay">
                        <h4>Modern Classroom</h4>
                        <p>State-of-the-art learning environment</p>
                    </div>
                </div>
                
                <div class="gallery-item scroll-animate stagger-2" data-category="events">
                    <div class="gallery-placeholder" style="background: linear-gradient(135deg, var(--accent) 0%, var(--accent-dark) 100%);">
                        <svg width="60" height="60" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" opacity="0.3">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/>
                            <circle cx="9" cy="7" r="4"/>
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87"/>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"/>
                        </svg>
                        <span>Orientation Day</span>
                    </div>
                    <div class="gallery-overlay">
                        <h4>Student Orientation</h4>
                        <p>Welcoming new students</p>
                    </div>
                </div>
                
                <div class="gallery-item scroll-animate stagger-3" data-category="students">
                    <div class="gallery-placeholder" style="background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%);">
                        <svg width="60" height="60" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" opacity="0.3">
                            <path d="M22 10v6M2 10l10-5 10 5-10 5z"/>
                            <path d="M6 12v5c3 3 9 3 12 0v-5"/>
                        </svg>
                        <span>Graduation Ceremony</span>
                    </div>
                    <div class="gallery-overlay">
                        <h4>Graduation Day</h4>
                        <p>Celebrating achievements</p>
                    </div>
                </div>
                
                <div class="gallery-item scroll-animate stagger-4" data-category="cultural">
                    <div class="gallery-placeholder" style="background: linear-gradient(135deg, #E91E63 0%, #9C27B0 100%);">
                        <svg width="60" height="60" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" opacity="0.3">
                            <circle cx="12" cy="12" r="10"/>
                            <path d="M8 14s1.5 2 4 2 4-2 4-2"/>
                            <line x1="9" y1="9" x2="9.01" y2="9"/>
                            <line x1="15" y1="9" x2="15.01" y2="9"/>
                        </svg>
                        <span>Japanese Culture Day</span>
                    </div>
                    <div class="gallery-overlay">
                        <h4>Cultural Event</h4>
                        <p>Japanese cultural celebrations</p>
                    </div>
                </div>
                
                <div class="gallery-item scroll-animate stagger-5" data-category="classroom">
                    <div class="gallery-placeholder" style="background: linear-gradient(135deg, #00BCD4 0%, #009688 100%);">
                        <svg width="60" height="60" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" opacity="0.3">
                            <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/>
                        </svg>
                        <span>Study Materials</span>
                    </div>
                    <div class="gallery-overlay">
                        <h4>Learning Resources</h4>
                        <p>Comprehensive study materials</p>
                    </div>
                </div>
                
                <div class="gallery-item scroll-animate stagger-6" data-category="events">
                    <div class="gallery-placeholder" style="background: linear-gradient(135deg, var(--secondary) 0%, var(--primary-light) 100%);">
                        <svg width="60" height="60" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" opacity="0.3">
                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
                            <polyline points="14 2 14 8 20 8"/>
                        </svg>
                        <span>JLPT Results Day</span>
                    </div>
                    <div class="gallery-overlay">
                        <h4>Exam Results</h4>
                        <p>Celebrating JLPT successes</p>
                    </div>
                </div>
                
                <div class="gallery-item scroll-animate" data-category="students">
                    <div class="gallery-placeholder" style="background: linear-gradient(135deg, var(--accent) 0%, #D84315 100%);">
                        <svg width="60" height="60" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" opacity="0.3">
                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/>
                            <circle cx="12" cy="10" r="3"/>
                        </svg>
                        <span>Study Abroad Farewell</span>
                    </div>
                    <div class="gallery-overlay">
                        <h4>Departure Ceremony</h4>
                        <p>Sending students to Japan</p>
                    </div>
                </div>
                
                <div class="gallery-item scroll-animate" data-category="cultural">
                    <div class="gallery-placeholder" style="background: linear-gradient(135deg, #673AB7 0%, #512DA8 100%);">
                        <svg width="60" height="60" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" opacity="0.3">
                            <path d="M12 3v18M3 12h18"/>
                            <circle cx="12" cy="12" r="9"/>
                        </svg>
                        <span>Japanese Calligraphy</span>
                    </div>
                    <div class="gallery-overlay">
                        <h4>Calligraphy Workshop</h4>
                        <p>Traditional Japanese art</p>
                    </div>
                </div>
                
                <div class="gallery-item scroll-animate" data-category="events">
                    <div class="gallery-placeholder" style="background: linear-gradient(135deg, #4CAF50 0%, #2E7D32 100%);">
                        <svg width="60" height="60" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" opacity="0.3">
                            <circle cx="12" cy="12" r="10"/>
                            <polyline points="12 6 12 12 16 14"/>
                        </svg>
                        <span>SSW Training Session</span>
                    </div>
                    <div class="gallery-overlay">
                        <h4>SSW Workshop</h4>
                        <p>Practical training sessions</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-light">
        <div class="container">
            <div class="section-header scroll-animate">
                <span class="section-tag">Testimonials</span>
                <h2 class="section-title">Student Success Stories</h2>
                <p class="section-subtitle">Hear from our students who achieved their dreams.</p>
            </div>
            
            <div class="success-stories grid grid-3" data-stagger="150">
                <div class="success-card scroll-animate stagger-1">
                    <div class="success-header">
                        <div class="success-avatar">RS</div>
                        <div class="success-info">
                            <h4>Rajesh Sharma</h4>
                            <span>JLPT N3 Graduate</span>
                        </div>
                    </div>
                    <div class="success-content">
                        <p>"I started with zero knowledge of Japanese. The structured curriculum and dedicated instructors at Aqua helped me pass JLPT N3 in just 8 months. Now I'm studying at Topa Language School in Tokyo."</p>
                    </div>
                    <div class="success-footer">
                        <span class="badge badge-success">Now in Japan</span>
                    </div>
                </div>
                
                <div class="success-card scroll-animate stagger-2">
                    <div class="success-header">
                        <div class="success-avatar">PK</div>
                        <div class="success-info">
                            <h4>Priya Kumari</h4>
                            <span>SSW Certified</span>
                        </div>
                    </div>
                    <div class="success-content">
                        <p>"Aqua Education made my dream of working in Japan a reality. The SSW preparation program was comprehensive, and the support didn't stop after the exam. They helped me with everything until I arrived in Japan."</p>
                    </div>
                    <div class="success-footer">
                        <span class="badge badge-success">Working in Japan</span>
                    </div>
                </div>
                
                <div class="success-card scroll-animate stagger-3">
                    <div class="success-header">
                        <div class="success-avatar">BR</div>
                        <div class="success-info">
                            <h4>Bikram Rai</h4>
                            <span>JLPT N2 Certified</span>
                        </div>
                    </div>
                    <div class="success-content">
                        <p>"The JLPT N2 exam seemed impossible at first, but Aqua Education's intensive preparation course gave me the confidence and skills to succeed. I'm now pursuing my degree at a Japanese university."</p>
                    </div>
                    <div class="success-footer">
                        <span class="badge badge-success">University Student</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="cta-section">
        <div class="container">
            <div class="cta-content scroll-animate">
                <h2>Want to Be Our Next Success Story?</h2>
                <p>Join hundreds of students who have achieved their Japanese education goals with Aqua Education.</p>
                <a href="contact.php" class="btn btn-white btn-lg">
                    Enroll Now
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M5 12h14M12 5l7 7-7 7"/>
                    </svg>
                </a>
            </div>
        </div>
    </section>
</main>

<style>
.gallery-filters {
    display: flex;
    justify-content: center;
    gap: 15px;
    margin-bottom: 40px;
    flex-wrap: wrap;
}

.filter-btn {
    padding: 10px 25px;
    background: var(--bg-primary);
    border: 2px solid var(--border);
    border-radius: var(--radius-full);
    font-size: 14px;
    font-weight: 600;
    color: var(--text-secondary);
    cursor: pointer;
    transition: all var(--transition);
}

.filter-btn:hover,
.filter-btn.active {
    background: var(--secondary);
    border-color: var(--secondary);
    color: var(--text-white);
}

.gallery-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
    gap: 25px;
}

.gallery-item {
    position: relative;
    border-radius: var(--radius-md);
    overflow: hidden;
    cursor: pointer;
}

.gallery-placeholder {
    height: 250px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    gap: 15px;
    color: white;
}

.gallery-placeholder span {
    font-size: 18px;
    font-weight: 600;
}

.gallery-overlay {
    position: absolute;
    inset: 0;
    background: linear-gradient(to top, rgba(0,0,0,0.8) 0%, transparent 60%);
    display: flex;
    flex-direction: column;
    justify-content: flex-end;
    padding: 25px;
    opacity: 0;
    transition: opacity var(--transition);
}

.gallery-item:hover .gallery-overlay {
    opacity: 1;
}

.gallery-overlay h4 {
    color: white;
    font-size: 18px;
    font-weight: 700;
    margin-bottom: 5px;
}

.gallery-overlay p {
    color: rgba(255,255,255,0.8);
    font-size: 14px;
}

.gallery-item:hover .gallery-placeholder {
    transform: scale(1.05);
    transition: transform var(--transition);
}

.success-stories {
    gap: 30px;
}

.success-card {
    background: var(--bg-primary);
    border-radius: var(--radius-md);
    padding: 30px;
    box-shadow: var(--shadow);
}

.success-header {
    display: flex;
    align-items: center;
    gap: 15px;
    margin-bottom: 20px;
}

.success-avatar {
    width: 50px;
    height: 50px;
    background: linear-gradient(135deg, var(--secondary), var(--primary));
    border-radius: var(--radius-full);
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-weight: 700;
    font-size: 18px;
}

.success-info h4 {
    font-size: 18px;
    font-weight: 700;
    color: var(--text-primary);
}

.success-info span {
    font-size: 13px;
    color: var(--text-light);
}

.success-content p {
    color: var(--text-secondary);
    font-size: 15px;
    line-height: 1.7;
    font-style: italic;
    margin-bottom: 20px;
}

.success-footer {
    padding-top: 15px;
    border-top: 1px solid var(--border-light);
}

@media (max-width: 768px) {
    .gallery-filters {
        gap: 10px;
    }
    
    .filter-btn {
        padding: 8px 18px;
        font-size: 13px;
    }
    
    .gallery-placeholder {
        height: 200px;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const filterBtns = document.querySelectorAll('.filter-btn');
    const galleryItems = document.querySelectorAll('.gallery-item');
    
    filterBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            filterBtns.forEach(b => b.classList.remove('active'));
            this.classList.add('active');
            
            const filter = this.dataset.filter;
            
            galleryItems.forEach(item => {
                if (filter === 'all' || item.dataset.category === filter) {
                    item.style.display = 'block';
                    setTimeout(() => item.style.opacity = '1', 50);
                } else {
                    item.style.opacity = '0';
                    setTimeout(() => item.style.display = 'none', 300);
                }
            });
        });
    });
});
</script>

<?php require_once 'includes/footer.php'; ?>