<?php
/**
 * Page: 404 Not Found
 */
?>

<div class="page-header" style="background-image: linear-gradient(135deg, rgba(4, 47, 46, 0.85), rgba(15, 23, 42, 0.85)), url('https://images.unsplash.com/photo-1516426122078-c23e76319801?auto=format&fit=crop&w=1600&q=80');">
    <div class="container">
        <h1>404 - Page Not Found</h1>
        <div class="breadcrumb">
            <a href="<?php echo url('home'); ?>">Home</a> / <span>404</span>
        </div>
    </div>
</div>

<section class="section" style="text-align: center;">
    <div class="container" style="max-width: 600px;">
        <i class="fas fa-compass-drafting" style="font-size: 4rem; color: var(--primary); margin-bottom: 1.5rem;"></i>
        <h2>Oops! Looks like you got lost off the trail.</h2>
        <p style="color: var(--gray); margin: 1rem 0 2rem;">The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.</p>
        <a href="<?php echo url('home'); ?>" class="btn btn-primary"><i class="fas fa-home"></i> Back to Homepage</a>
    </div>
</section>
