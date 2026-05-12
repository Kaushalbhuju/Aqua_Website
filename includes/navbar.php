<nav class="navbar" id="navbar">
    <div class="nav-container">
        <a href="index.php" class="logo">
            <img src="assets/images/logo.png" alt="Aqua Education" class="logo-img">
            <span class="logo-text">
                <span class="logo-main">AQUA</span>
                <span class="logo-sub">Education & Training</span>
            </span>
        </a>

        <button class="nav-toggle" id="navToggle" aria-label="Toggle navigation">
            <span class="hamburger"></span>
        </button>

        <ul class="nav-menu" id="navMenu">
            <li class="nav-item">
                <a href="<?= BASE_PATH ?? '' ?>index.php" class="nav-link <?= $currentPage === 'home' ? 'active' : '' ?>">Home</a>
            </li>
            <li class="nav-item dropdown">
                <a href="<?= BASE_PATH ?? '' ?>services/index.php" class="nav-link <?= str_starts_with($currentPage ?? '', 'service') ? 'active' : '' ?>">
                    Services
                    <svg class="dropdown-icon" width="12" height="12" viewBox="0 0 12 12" fill="none">
                        <path d="M3 5L6 8L9 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
                    </svg>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="<?= BASE_PATH ?? '' ?>services/japanese-language.php">Japanese Language</a></li>
                    <li><a href="<?= BASE_PATH ?? '' ?>services/jlpt-preparation.php">JLPT Preparation</a></li>
                    <li><a href="<?= BASE_PATH ?? '' ?>services/ssw-preparation.php">SSW Preparation</a></li>
                    <li><a href="<?= BASE_PATH ?? '' ?>services/skill-exams.php">Skill Exams</a></li>
                    <li><a href="<?= BASE_PATH ?? '' ?>services/ssw-skill-training.php">SSW Skill Training</a></li>
                    <li><a href="<?= BASE_PATH ?? '' ?>services/ssw-exam-preparation.php">SSW Exam Prep</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="<?= BASE_PATH ?? '' ?>study-abroad.php" class="nav-link <?= ($currentPage ?? '') === 'study-abroad' ? 'active' : '' ?>">Study Abroad</a>
            </li>
            <li class="nav-item">
                <a href="<?= BASE_PATH ?? '' ?>gallery.php" class="nav-link <?= ($currentPage ?? '') === 'gallery' ? 'active' : '' ?>">Gallery</a>
            </li>
            <li class="nav-item">
                <a href="<?= BASE_PATH ?? '' ?>about.php" class="nav-link <?= ($currentPage ?? '') === 'about' ? 'active' : '' ?>">About Us</a>
            </li>
            <li class="nav-item">
                <a href="<?= BASE_PATH ?? '' ?>contact.php" class="nav-link <?= ($currentPage ?? '') === 'contact' ? 'active' : '' ?>">Contact</a>
            </li>
        </ul>

        <a href="<?= BASE_PATH ?? '' ?>contact.php" class="nav-cta">
            <span>Enroll Now</span>
            <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                <path d="M3 8H13M13 8L9 4M13 8L9 12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
            </svg>
        </a>
    </div>
</nav>