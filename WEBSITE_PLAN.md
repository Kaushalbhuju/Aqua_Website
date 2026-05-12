# AQUA EDUCATION AND TRAINING ACADEMY - Website Plan & Content Outline

---

## 1. PROJECT OVERVIEW

| Attribute | Details |
|---|---|
| **Name** | Aqua Education and Training Academy |
| **Type** | Static, Fully Responsive Website |
| **Backend** | PHP 8.2.30 (for form processing, templating, includes) |
| **Features** | Animated components, mouse-responsive UI, mobile-first responsive design |
| **Location** | KG Tower 7F, Lazimpat-2, Kathmandu, Nepal |
| **Phone** | 01-4519666 |
| **Email** | ssw.edu.academy@gmail.com |
| **Affiliations** | Topa 21st Century Language School, Yu Language Group |

---

## 2. SITE ARCHITECTURE

```
index.php (Homepage)
│
├── about.php
├── services/
│   ├── index.php (Services Overview)
│   ├── japanese-language.php
│   ├── jlpt-preparation.php
│   ├── ssw-preparation.php
│   ├── skill-exams.php
│   └── ssw-skill-training.php
├── study-abroad.php
├── gallery.php
├── contact.php
│
├── includes/
│   ├── header.php
│   ├── footer.php
│   ├── navbar.php
│   └── meta.php
├── assets/
│   ├── css/
│   │   ├── style.css
│   │   ├── animations.css
│   │   └── responsive.css
│   ├── js/
│   │   ├── main.js
│   │   ├── animations.js
│   │   └── mouse-effects.js
│   ├── images/
│   └── fonts/
└── process/
    └── contact-form.php
```

---

## 3. PAGE-BY-PAGE CONTENT OUTLINE

---

### 3.1 HOMEPAGE (index.php)

#### Hero Section
- **Headline:** "Your Gateway to Japan — Learn. Train. Succeed."
- **Subheadline:** "Nepal's premier academy for Japanese language, JLPT, and SSW certification preparation."
- **CTA Buttons:** "Explore Courses" | "Start Your Journey"
- **Animation:** Parallax background with floating Japanese-inspired elements (cherry blossom particles, subtle wave motion), text reveal on scroll, cursor-following light effect
- **Background:** Gradient or image with overlay matching brand colors

#### About Snapshot
- **Title:** "Why Choose Aqua Education?"
- **Content:** Brief intro (2-3 lines) about the academy being the official liaison for Topa 21st Century Language School and Yu Language Group in Nepal.
- **Stats Counter (animated):**
  - Students Enrolled
  - Success Rate (%)
  - Years of Experience
  - Partner Institutions
- **Animation:** Number counters animate on scroll into viewport

#### Services Highlights
- **Title:** "Our Specializations"
- **Cards (6):**
  1. Japanese Language Classes
  2. JLPT Exam Preparation
  3. SSW Preparation Classes
  4. Skill Exam Preparation
  5. SSW Skill Training Classes
  6. SSW Exam Preparation
- **Card Interaction:** Hover lift effect with shadow, icon animation on hover, mouse-following tilt effect
- **CTA:** "View All Services →"

#### Study Abroad Feature
- **Title:** "Study in Japan"
- **Content:** Highlight short-term and long-term study programs, official recruitment and guidance services.
- **Image:** Students in Japan / academy classroom
- **Animation:** Image slide-in from side, text fade-up

#### Testimonials Carousel
- **Title:** "What Our Students Say"
- **3-4 testimonials** with student photos, names, courses taken, and outcomes
- **Animation:** Auto-rotating carousel with smooth transitions, pause on hover

#### Call-to-Action Banner
- **Text:** "Ready to Begin Your Journey to Japan?"
- **CTA:** "Contact Us Today" | "Call Now: 01-4519666"
- **Animation:** Pulsing CTA button, gradient shift on hover

#### Footer
- Logo
- Quick Links
- Services Links
- Contact Info (address, phone, email)
- Social Media Icons
- Copyright notice

#### SEO Keywords (Homepage)
```
Japanese language classes Nepal, JLPT preparation Kathmandu, SSW exam Nepal,
study in Japan from Nepal, Japanese academy Kathmandu, Topa 21st Century Nepal,
Yu Language Group Nepal, SSW training Nepal, Japan study abroad,
Japanese course Lazimpat, skilled worker Japan Nepal
```

---

### 3.2 ABOUT US (about.php)

#### Hero Banner
- **Title:** "About Aqua Education and Training Academy"
- **Breadcrumb:** Home > About Us
- **Background:** Subtle branded overlay

#### Our Story
- **Title:** "Our Story"
- **Content:**
  - Founded with the mission to bridge Nepal and Japan through education and training
  - Official liaison office for Topa 21st Century Language School and Yu Language Group
  - Responsibilities: recruiting and guiding students wishing to study in Japan (including short-term students), conducting publicity and promotional activities
  - Location: KG Tower 7F, Lazimpat-2, Kathmandu, Nepal

#### Mission & Vision
- **Mission:** "To empower Nepali students and professionals with the language skills, certifications, and cultural understanding needed to thrive in Japan."
- **Vision:** "To become Nepal's most trusted academy for Japanese education and SSW career pathways."

#### Our Authorization & Partnerships
- **Title:** "Official Partnerships"
- **Content:**
  - Authorized liaison for Topa 21st Century Language School
  - Authorized liaison for Yu Language Group
  - Responsibilities detailed: student recruitment, study abroad guidance, promotional activities
- **Logos:** Partner school logos (placeholders)

#### Our Team
- **Title:** "Meet Our Instructors"
- **Cards:** Instructor photos, names, qualifications, specialties (Japanese native speakers, certified JLPT instructors, SSW trainers)
- **Animation:** Card flip or fade-in on scroll

#### Why Choose Us (Value Propositions)
- Certified and experienced instructors
- Official partnerships with Japanese institutions
- Comprehensive curriculum from beginner to advanced
- Personalized study abroad guidance
- High success rate in JLPT and SSW exams
- Modern learning environment

#### SEO Keywords (About)
```
about Aqua Education Nepal, Japanese academy Lazimpat Kathmandu,
Topa 21st Century liaison Nepal, Yu Language Group Nepal,
Japanese language institute Kathmandu, study Japan consultancy Nepal
```

---

### 3.3 SERVICES OVERVIEW (services/index.php)

#### Hero Banner
- **Title:** "Our Courses & Services"
- **Subtitle:** "Comprehensive programs designed for your success in Japan"

#### Services Grid (6 Cards)
Each card includes:
- Icon/Illustration
- Title
- Short description (2-3 lines)
- "Learn More" link

1. **Japanese Language Classes** — From beginner (N5) to advanced (N1), structured curriculum with native-speaking instructors.
2. **JLPT Exam Preparation** — Targeted preparation for all JLPT levels with practice tests, strategies, and mock exams.
3. **SSW Preparation Classes** — Comprehensive training for the Specified Skilled Worker exam, including language and industry-specific knowledge.
4. **Skill Exam Preparation** — Focused preparation for various skill-based exams required for working in Japan.
5. **SSW Skill Training Classes** — Hands-on practical training in designated industry sectors for SSW certification.
6. **SSW Exam Preparation** — Intensive exam-focused coaching covering all test components.

#### Process / How It Works
- **Step 1:** Consultation & Assessment
- **Step 2:** Course Enrollment
- **Step 3:** Training & Preparation
- **Step 4:** Examination & Certification
- **Step 5:** Placement & Study Abroad Support
- **Animation:** Timeline with scroll-triggered step reveals

#### CTA Section
- **Text:** "Not sure which course is right for you?"
- **CTA:** "Book a Free Consultation"

#### SEO Keywords (Services)
```
Japanese courses Kathmandu, JLPT exam preparation Nepal, SSW classes Nepal,
skill exam Japan preparation, SSW training Kathmandu, Japanese language course Nepal,
JLPT N5 N4 N3 N2 N1 preparation, Specified Skilled Worker Nepal
```

---

### 3.4 JAPANESE LANGUAGE CLASSES (services/japanese-language.php)

#### Course Overview
- **Title:** "Japanese Language Classes"
- **Description:** Structured Japanese language programs from absolute beginner to advanced proficiency levels.

#### Course Levels
| Level | Description | Duration | Target |
|---|---|---|---|
| N5 (Beginner) | Hiragana, Katakana, basic grammar, everyday phrases | 3-4 months | Absolute beginners |
| N4 (Elementary) | Expanded vocabulary, basic kanji, simple conversations | 3-4 months | N5 graduates |
| N3 (Intermediate) | Intermediate grammar, reading comprehension, daily life Japanese | 4-5 months | N4 graduates |
| N2 (Upper Intermediate) | Business Japanese, advanced reading, complex grammar | 5-6 months | N3 graduates |
| N1 (Advanced) | Academic and professional Japanese, fluency | 6-8 months | N2 graduates |

#### What You'll Learn
- Reading & Writing (Hiragana, Katakana, Kanji)
- Grammar & Vocabulary
- Listening & Speaking
- Cultural Understanding
- Business Japanese (advanced levels)

#### Class Features
- Small batch sizes for personalized attention
- Native Japanese speakers and certified instructors
- Interactive learning methods
- Regular assessments and progress tracking
- Supplemental study materials provided

#### Animation Ideas
- Level cards with staggered fade-in
- Interactive level progression diagram (hover to see details)
- Scroll-triggered skill icons animation

#### SEO Keywords
```
Japanese language classes Kathmandu, learn Japanese Nepal,
Japanese course N5 N4 N3 N2 N1, Japanese classes Lazimpat,
Japanese speaking course Nepal, beginner Japanese Kathmandu
```

---

### 3.5 JLPT PREPARATION (services/jlpt-preparation.php)

#### Overview
- **Title:** "JLPT Exam Preparation"
- **Description:** Intensive, exam-focused preparation for the Japanese Language Proficiency Test (JLPT) at all levels.

#### JLPT Levels Covered
- N5, N4, N3, N2, N1 — dedicated preparation courses for each level

#### Preparation Strategy
- **Mock Exams:** Full-length practice tests under exam conditions
- **Weakness Analysis:** Identify and strengthen weak areas
- **Time Management:** Strategies for completing each section within time limits
- **Vocabulary & Kanji Drills:** Targeted practice for high-frequency items
- **Reading Comprehension:** Techniques for fast and accurate reading
- **Listening Practice:** Exposure to various accents and speech speeds

#### Course Structure
- Classroom instruction (grammar, vocabulary, reading)
- Practice sessions (past papers, mock tests)
- Individual feedback and progress reports
- Exam registration assistance

#### Success Metrics
- Display pass rate statistics
- Student testimonials from successful candidates

#### Animation Ideas
- Animated progress bar showing preparation timeline
- Interactive JLPT level selector with details on hover
- Counter animation for pass rate percentage

#### SEO Keywords
```
JLPT preparation Kathmandu, JLPT exam Nepal, JLPT N5 preparation,
JLPT N3 classes Nepal, Japanese proficiency test preparation,
JLPT mock test Kathmandu, JLPT pass rate Nepal
```

---

### 3.6 SSW PREPARATION (services/ssw-preparation.php)

#### Overview
- **Title:** "SSW (Specified Skilled Worker) Preparation Classes"
- **Description:** Comprehensive preparation for the SSW examination, enabling Nepali workers to legally work in Japan across 14 designated industry sectors.

#### What is SSW?
- Explanation of the Specified Skilled Worker visa program
- 14 eligible industry sectors (nursing care, construction, agriculture, food service, etc.)
- Benefits: legal work pathway, competitive salary, career growth

#### Exam Components
1. **Japanese Language Test:** Basic Japanese proficiency (equivalent to JLPT N4 level)
2. **Skill Test:** Industry-specific knowledge and practical skills

#### Preparation Program
- Japanese language training (focused on SSW requirements)
- Industry-specific skill training
- Cultural orientation for working in Japan
- Mock examinations for both language and skill tests
- Visa application guidance

#### Who Should Enroll?
- Individuals seeking employment opportunities in Japan
- Those who have completed basic Japanese language courses
- Workers looking to upgrade their skills and work legally in Japan

#### Animation Ideas
- Industry sector icon grid with hover expansion
- Animated flowchart showing SSW pathway
- Mouse-responsive parallax on hero section

#### SEO Keywords
```
SSW preparation Nepal, Specified Skilled Worker Nepal,
SSW exam Kathmandu, work in Japan from Nepal,
SSW visa preparation, SSW classes Kathmandu,
Japan work visa Nepal, SSW training program Nepal
```

---

### 3.7 SKILL EXAMS (services/skill-exams.php)

#### Overview
- **Title:** "Skill Exam Preparation"
- **Description:** Focused preparation for various skill-based examinations required for employment and certification in Japan.

#### Exam Types Covered
- Construction industry skill tests
- Food service industry exams
- Agriculture skill assessments
- Manufacturing industry tests
- Nursing care skill exams
- And other designated sector exams

#### Preparation Approach
- Theory sessions covering exam syllabus
- Practical hands-on training
- Industry-standard equipment and materials
- Past exam paper practice
- One-on-one coaching sessions

#### Benefits
- Expert instructors with industry experience
- Up-to-date curriculum aligned with Japanese standards
- High pass rate among our students
- Post-exam placement assistance

#### Animation Ideas
- Tabbed content for different industry sectors
- Before/after skill level comparison animation
- Hover-activated industry detail cards

#### SEO Keywords
```
skill exam preparation Nepal, Japan skill test Kathmandu,
construction skill exam Japan, nursing care exam Nepal,
food service exam Japan, skill certification Nepal,
Japan industry exam preparation
```

---

### 3.8 SSW SKILL TRAINING (services/ssw-skill-training.php)

#### Overview
- **Title:** "SSW Skill Training Classes"
- **Description:** Hands-on, practical training programs in designated SSW industry sectors to ensure students are job-ready for employment in Japan.

#### Training Sectors
| Sector | Training Focus |
|---|---|
| Nursing Care | Patient care techniques, communication, safety protocols |
| Construction | Building techniques, safety standards, equipment handling |
| Agriculture | Farming techniques, crop management, machinery operation |
| Food Service | Kitchen operations, hygiene standards, customer service |
| Manufacturing | Assembly line skills, quality control, safety procedures |
| Hospitality | Hotel operations, guest services, language skills |

#### Training Methodology
- Classroom theory + practical workshops
- Simulation-based learning
- Industry visits (where applicable)
- Assessment and certification
- Japanese workplace culture orientation

#### Duration & Schedule
- Flexible scheduling (morning/evening batches)
- Duration varies by sector (typically 2-4 months)
- Weekend intensive options available

#### Animation Ideas
- Sector cards with flip-to-reveal details
- Progress tracker animation showing training phases
- Video/image gallery with lightbox effect

#### SEO Keywords
```
SSW skill training Nepal, practical training Japan work,
nursing care training Kathmandu, construction training Nepal,
SSW hands-on training, Japan job-ready training Nepal,
SSW sector training Kathmandu
```

---

### 3.9 SSW EXAM PREPARATION (services/ssw-exam-preparation.php)

#### Overview
- **Title:** "SSW Exam Preparation"
- **Description:** Intensive, exam-focused coaching designed to maximize your chances of passing the SSW examination on the first attempt.

#### Exam Preparation Components
- **Language Section:** Focused Japanese language practice matching SSW language test format
- **Skill Section:** Industry-specific theory and practical exam preparation
- **Mock Tests:** Full-length simulated exams with detailed feedback
- **Exam Strategy:** Time management, question analysis, stress management

#### Intensive Coaching Features
- Small group sessions for personalized attention
- Individual weak area identification and remediation
- Regular progress assessments
- Exam registration and scheduling assistance
- Pre-exam confidence-building sessions

#### Success Stories
- Display student testimonials who passed SSW exams
- Statistics: pass rate, number of successful candidates

#### Animation Ideas
- Countdown timer animation for upcoming exam dates
- Animated checklist showing exam preparation milestones
- Testimonial cards with slide-in animation

#### SEO Keywords
```
SSW exam preparation Nepal, SSW test Kathmandu,
SSW coaching Nepal, pass SSW exam first attempt,
SSW mock test Nepal, SSW exam tips,
Specified Skilled Worker exam preparation Kathmandu
```

---

### 3.10 STUDY ABROAD - JAPAN (study-abroad.php)

#### Hero Banner
- **Title:** "Study in Japan"
- **Subtitle:** "Official recruitment and guidance for Topa 21st Century Language School & Yu Language Group"
- **Background:** Image of Japan / students in classroom

#### About Study Abroad Programs
- **Title:** "Your Official Study Abroad Partner"
- **Content:**
  - Aqua Education and Training Academy serves as the official liaison office for Topa 21st Century Language School and Yu Language Group's study abroad affairs in Nepal
  - Responsibilities include recruiting and guiding students (including short-term students) wishing to study in Japan
  - Conducting publicity and promotional activities on behalf of both schools

#### Partner Institutions
- **Topa 21st Century Language School**
  - Brief description of the school
  - Programs offered
  - Why choose this school
- **Yu Language Group**
  - Brief description
  - Programs offered
  - Why choose this school

#### Programs Available
| Program Type | Duration | Description |
|---|---|---|
| Short-Term Language Course | 1-3 months | Intensive Japanese language immersion |
| Long-Term Language Course | 6 months - 2 years | Comprehensive language and cultural program |
| University Preparation | 1-2 years | Academic Japanese and university entrance preparation |
| Vocational Training | 1-2 years | Specialized skill training programs |

#### Benefits of Studying in Japan
- World-class education system
- Safe and welcoming environment
- Cultural enrichment and global exposure
- Career opportunities in Japan and globally
- Pathway to SSW and other work visas
- Scholarships available

#### Application Process
1. **Initial Consultation** — Free assessment and guidance
2. **School Selection** — Choose the right program and institution
3. **Document Preparation** — Assistance with all required documents
4. **Application Submission** — We handle the application process
5. **Visa Processing** — Complete visa application support
6. **Pre-Departure Orientation** — Cultural and practical preparation
7. **Arrival Support** — Assistance with settling in Japan

#### Animation Ideas
- Interactive timeline for application process
- Partner school logo carousel
- Parallax scrolling with Japan scenery images
- Mouse-hover info cards for program details

#### SEO Keywords
```
study in Japan from Nepal, Japan study abroad Nepal,
Topa 21st Century Language School Nepal, Yu Language Group Nepal,
short-term study Japan, Japan language school Nepal,
study abroad consultancy Kathmandu, Japan student visa Nepal
```

---

### 3.11 GALLERY (gallery.php)

#### Photo Gallery
- **Categories:**
  - Classroom & Facilities
  - Events & Activities
  - Student Life
  - Graduation & Certifications
  - Cultural Programs
- **Layout:** Masonry grid with lightbox
- **Animation:** Lazy-load images with fade-in, hover zoom effect

#### Video Gallery
- Student testimonials
- Classroom recordings
- Event highlights

#### Student Success Stories
- Featured students with photos, courses, and achievements

#### SEO Keywords
```
Aqua Education gallery, Japanese academy facilities Kathmandu,
student success stories Nepal, Japan study abroad gallery,
Aqua Education events
```

---

### 3.12 CONTACT US (contact.php)

#### Contact Information
- **Address:** KG Tower 7F, Lazimpat-2, Kathmandu, Nepal
- **Phone:** 01-4519666
- **Email:** ssw.edu.academy@gmail.com

#### Contact Form Fields
- Full Name (required)
- Email Address (required)
- Phone Number
- Subject (dropdown: General Inquiry, Course Information, Study Abroad, SSW Program, JLPT Prep, Other)
- Message (textarea)
- Submit Button

#### Form Processing (PHP 8.2.30)
- Server-side validation using PHP 8.2 features
- Sanitization with `filter_input()` and `htmlspecialchars()`
- Email notification to ssw.edu.academy@gmail.com
- Success/error message display
- CSRF token protection

#### Map
- Embedded Google Map showing KG Tower, Lazimap-2, Kathmandu

#### Office Hours
- Sunday - Friday: 10:00 AM - 6:00 PM
- Saturday: Closed

#### Animation Ideas
- Form fields with focus animations (border glow, label float)
- Submit button with ripple effect on click
- Map fade-in on scroll
- Contact info cards with hover lift effect

#### SEO Keywords
```
contact Aqua Education Nepal, Japanese academy Kathmandu contact,
SSW classes contact Lazimpat, study Japan consultancy contact,
Aqua Education phone number, Aqua Education email
```

---

## 4. TECHNICAL CONSIDERATIONS

### 4.1 Responsive Design
- **Mobile-first approach** using CSS media queries
- Breakpoints: 320px, 480px, 768px, 1024px, 1280px, 1440px
- Flexible grid layouts using CSS Grid and Flexbox
- Touch-friendly navigation (hamburger menu on mobile)
- Responsive images with `srcset` and `sizes` attributes
- Font scaling with `clamp()` for fluid typography

### 4.2 Animation Integration
- **CSS Animations:**
  - `@keyframes` for complex animations
  - `transition` for hover effects
  - `transform` for 3D effects (card tilt, flip)
- **JavaScript Animations:**
  - Intersection Observer API for scroll-triggered animations
  - Custom cursor effects (mouse-following elements)
  - Parallax scrolling effects
  - Smooth scroll navigation
  - Number counter animations
  - Carousel/slider functionality
- **Performance Considerations:**
  - Use `will-change` and `transform` for GPU-accelerated animations
  - Respect `prefers-reduced-motion` media query for accessibility
  - Debounce scroll and resize event listeners
  - Lazy-load animations below the fold

### 4.3 Mouse-Responsive UI
- **Custom Cursor:** Subtle branded cursor with trailing effect
- **Hover Effects:** Card tilt following mouse position, magnetic buttons, spotlight hover backgrounds
- **Parallax Layers:** Multi-layer backgrounds responding to mouse movement
- **Interactive Elements:** Ripple effects on buttons, hover-triggered icon animations
- **Spotlight Effect:** Gradient overlay following cursor on cards/sections

### 4.4 PHP 8.2.30 Compatibility
- **Features to Utilize:**
  - Readonly properties for configuration classes
  - Enums for form field types, course levels, etc.
  - Match expressions for cleaner conditional logic
  - Nullsafe operator (`?->`) for safe property access
  - Named arguments for improved readability
  - Typed properties and return types throughout
- **Form Processing:**
  - Strict type declarations (`declare(strict_types=1)`)
  - PHP 8.2 sanitization and validation
  - Prepared statements if database is added later
  - Error handling with try-catch and custom error pages
- **Templating:**
  - PHP includes for reusable components (header, footer, navbar)
  - Simple routing for clean URLs
  - Environment-based configuration

### 4.5 Performance Optimization
- Minified CSS and JavaScript
- Image optimization (WebP format with fallbacks)
- Browser caching headers
- Lazy loading for images and animations
- Critical CSS inlined in `<head>`
- Defer/async for non-critical JavaScript

### 4.6 Accessibility (a11y)
- Semantic HTML5 elements
- ARIA labels and roles
- Keyboard navigation support
- Sufficient color contrast (WCAG AA)
- `prefers-reduced-motion` support
- Focus indicators for interactive elements

### 4.7 SEO Implementation
- Semantic HTML structure
- Meta tags (title, description, keywords, Open Graph, Twitter Cards)
- Structured data (JSON-LD for LocalBusiness, EducationalOrganization)
- XML sitemap
- Robots.txt
- Clean URLs
- Alt text for all images
- Internal linking strategy

---

## 5. SEO KEYWORDS SUMMARY (ALL SECTIONS)

| Page | Primary Keywords |
|---|---|
| **Homepage** | Japanese language classes Nepal, JLPT preparation Kathmandu, SSW exam Nepal, study in Japan from Nepal |
| **About** | about Aqua Education Nepal, Japanese academy Lazimpat, Topa 21st Century liaison Nepal |
| **Services** | Japanese courses Kathmandu, JLPT exam preparation Nepal, SSW classes Nepal, skill exam Japan preparation |
| **Japanese Language** | Japanese language classes Kathmandu, learn Japanese Nepal, Japanese course N5 N4 N3 N2 N1 |
| **JLPT Preparation** | JLPT preparation Kathmandu, JLPT exam Nepal, JLPT N5 preparation, JLPT mock test Kathmandu |
| **SSW Preparation** | SSW preparation Nepal, Specified Skilled Worker Nepal, work in Japan from Nepal, SSW visa preparation |
| **Skill Exams** | skill exam preparation Nepal, Japan skill test Kathmandu, construction skill exam Japan |
| **SSW Skill Training** | SSW skill training Nepal, practical training Japan work, nursing care training Kathmandu |
| **SSW Exam Prep** | SSW exam preparation Nepal, SSW test Kathmandu, pass SSW exam first attempt |
| **Study Abroad** | study in Japan from Nepal, Japan study abroad Nepal, Topa 21st Century Language School Nepal |
| **Gallery** | Aqua Education gallery, Japanese academy facilities Kathmandu, student success stories Nepal |
| **Contact** | contact Aqua Education Nepal, Japanese academy Kathmandu contact, SSW classes contact Lazimpat |

---

## 6. DESIGN GUIDELINES

### Color Palette (Assume logo-driven theme)
- **Primary:** Deep blue/navy (trust, education, professionalism)
- **Secondary:** Aqua/teal (water reference, freshness, growth)
- **Accent:** Warm gold/orange (energy, success, Japan-inspired)
- **Background:** White/light gray
- **Text:** Dark charcoal (#333)

### Typography
- **Headings:** Modern sans-serif (e.g., Inter, Poppins, or Noto Sans JP for Japanese text support)
- **Body:** Clean, readable sans-serif
- **Japanese Text Support:** Ensure Noto Sans JP or similar is loaded for Japanese characters

### UI Components
- Cards with hover lift and shadow effects
- Animated counters and progress indicators
- Smooth scroll navigation
- Hamburger menu (mobile)
- Breadcrumb navigation
- Back-to-top button with scroll animation
- Loading animations (subtle, branded)

---

## 7. RECOMMENDED TECHNOLOGY STACK

| Layer | Technology |
|---|---|
| **Frontend** | HTML5, CSS3, Vanilla JavaScript |
| **Animations** | CSS Animations, Intersection Observer API, custom JS |
| **Backend** | PHP 8.2.30 (form processing, includes, simple routing) |
| **Build** | No build tool required (static site), or optional Vite for asset optimization |
| **Icons** | Lucide Icons or inline SVGs |
| **Fonts** | Google Fonts (Inter, Noto Sans JP) |
| **Maps** | Google Maps Embed API |
| **Forms** | Custom PHP with validation, optional reCAPTCHA integration |

---

## 8. DEVELOPMENT PHASES

### Phase 1: Setup & Structure
- Initialize project directory structure
- Create base HTML templates with PHP includes
- Set up CSS and JavaScript files
- Configure PHP 8.2 environment

### Phase 2: Core Pages
- Homepage with hero, services, testimonials
- About Us page
- Contact Us page with form processing

### Phase 3: Service Pages
- All 6 service pages with detailed content
- Services overview page

### Phase 4: Study Abroad & Gallery
- Study abroad page with partner school info
- Gallery page with photo/video sections

### Phase 5: Animations & Interactions
- Scroll-triggered animations
- Mouse-responsive effects
- Parallax and custom cursor

### Phase 6: Testing & Optimization
- Cross-browser testing
- Mobile responsiveness verification
- Performance optimization
- SEO meta tags and structured data
- Accessibility audit

### Phase 7: Deployment
- Server configuration (PHP 8.2.30)
- SSL certificate setup
- Final testing on production server

---

*Document prepared for AQUA EDUCATION AND TRAINING ACADEMY website development project.*
