<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="<?= $pageDescription ?? 'Aqua Education and Training Academy - Nepal\'s premier academy for Japanese language, JLPT, and SSW certification preparation.' ?>">
<meta name="keywords" content="<?= $pageKeywords ?? 'Japanese language classes Nepal, JLPT preparation Kathmandu, SSW exam Nepal, study in Japan from Nepal' ?>">
<meta name="author" content="Aqua Education and Training Academy">
<meta name="robots" content="index, follow">

<meta property="og:title" content="<?= $pageTitle ?? 'Aqua Education and Training Academy' ?>">
<meta property="og:description" content="<?= $pageDescription ?? 'Nepal\'s premier academy for Japanese language, JLPT, and SSW certification preparation.' ?>">
<meta property="og:type" content="website">
<meta property="og:url" content="<?= $pageUrl ?? 'https://aquaeducation.com' ?>">
<meta property="og:image" content="<?= BASE_PATH ?? '' ?>assets/images/og-image.jpg">

<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="<?= $pageTitle ?? 'Aqua Education and Training Academy' ?>">
<meta name="twitter:description" content="<?= $pageDescription ?? 'Nepal\'s premier academy for Japanese language, JLPT, and SSW certification preparation.' ?>">

<link rel="canonical" href="<?= $pageUrl ?? 'https://aquaeducation.com' ?>">
<link rel="icon" type="image/png" sizes="32x32" href="<?= BASE_PATH ?? '' ?>assets/images/favicon.png?v=2">
<link rel="icon" type="image/png" sizes="16x16" href="<?= BASE_PATH ?? '' ?>assets/images/favicon.png?v=2">
<link rel="apple-touch-icon" href="<?= BASE_PATH ?? '' ?>assets/images/favicon.png?v=2">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Noto+Sans+JP:wght@300;400;500;700&display=swap" rel="stylesheet">

<link rel="stylesheet" href="<?= BASE_PATH ?? '' ?>assets/css/variables.css">
<link rel="stylesheet" href="<?= BASE_PATH ?? '' ?>assets/css/animations.css">
<link rel="stylesheet" href="<?= BASE_PATH ?? '' ?>assets/css/components.css">
<link rel="stylesheet" href="<?= BASE_PATH ?? '' ?>assets/css/style.css">
<link rel="stylesheet" href="<?= BASE_PATH ?? '' ?>assets/css/responsive.css">

<title><?= $pageTitle ?? 'Aqua Education and Training Academy' ?></title>

<?php if (isset($structuredData)): ?>
<script type="application/ld+json">
<?= json_encode($structuredData, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) ?>
</script>
<?php endif; ?>