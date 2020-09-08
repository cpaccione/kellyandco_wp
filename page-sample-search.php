<?php

/*

Template Name: Sample Search

*/


?>


<?php get_header(); ?>


    <div class="main-content">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <?php the_content(); ?>

            <?php endwhile; else: ?>

        <?php endif; ?>

    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="page-title">
                    <h2>Sample Searches</h2>
                </div>
            </div>
        </div>
    </div>

        <div class="sample-search">
            <div class="col">
                <h3><i class="fas fa-hand-holding-medical"></i> &nbsp;Benefits Administration Firms</h3>
                <ul>
                    <li>Chief Executive Officer</li>
                    <li>Chief Revenue Officer</li>
                    <li>Chief Operating Officer</li>
                    <li>Chief Marketing Officer</li>
                    <li>Chief Technology Officer</li>
                    <li>Executive Vice President of Health Solutions</li>
                    <li>Senior Vice President of Strategy & Solutions</li>
                    <li>Senior Vice President, Retirement Product Leader</li>
                    <li>Senior Vice President of Call Center Operations</li>
                    <li>Managing Director of Global Stock Plan Services</li>
                    <li>Health & Benefits Business Leader</li>
                    <li>Retirement Business Leader</li>
                    <li>Channel Leader</li>
                    <li>Vice President of Product Management</li>
                    <li>Vice President of Implementation</li>
                    <li>Sales Executive</li>
                </ul>
            </div>
            <div class="col">
                <h3><i class="fas fa-users"></i> &nbsp;Consulting Firms</h3>
                <ul>
                    <li>Chief Executive Officer</li>
                    <li>Chief Revenue Officer</li>
                    <li>Chief Operating Officer</li>
                    <li>Chief Marketing Officer</li>
                    <li>Chief Technology Officer</li>
                    <li>Executive Vice President of Health Solutions</li>
                    <li>Senior Vice President of Strategy & Solutions</li>
                    <li>Senior Vice President, Retirement Product Leader</li>
                    <li>Senior Vice President of Call Center Operations</li>
                    <li>Managing Director of Global Stock Plan Services</li>
                    <li>Health & Benefits Business Leader</li>
                    <li>Retirement Business Leader</li>
                    <li>Channel Leader</li>
                    <li>Vice President of Product Management</li>
                    <li>Vice President of Implementation</li>
                    <li>Sales Executive</li>
                </ul>
            </div>
            <div class="col">
                <h3><i class="far fa-building"></i> &nbsp;Corporations</h3>
                <ul>
                    <li>Chief Executive Officer</li>
                    <li>Chief Revenue Officer</li>
                    <li>Chief Operating Officer</li>
                    <li>Chief Marketing Officer</li>
                    <li>Chief Technology Officer</li>
                    <li>Executive Vice President of Health Solutions</li>
                    <li>Senior Vice President of Strategy & Solutions</li>
                    <li>Senior Vice President, Retirement Product Leader</li>
                    <li>Senior Vice President of Call Center Operations</li>
                    <li>Managing Director of Global Stock Plan Services</li>
                    <li>Health & Benefits Business Leader</li>
                    <li>Retirement Business Leader</li>
                    <li>Channel Leader</li>
                    <li>Vice President of Product Management</li>
                    <li>Vice President of Implementation</li>
                    <li>Sales Executive</li>
                </ul>
            </div>
            <div class="col">
                <h3><i class="fas fa-laptop-medical"></i> &nbsp;Digital Health Companies</h3>
                <ul>
                    <li>Chief Executive Officer</li>
                    <li>Chief Revenue Officer</li>
                    <li>Chief Operating Officer</li>
                    <li>Chief Marketing Officer</li>
                    <li>Chief Technology Officer</li>
                    <li>Executive Vice President of Health Solutions</li>
                    <li>Senior Vice President of Strategy & Solutions</li>
                    <li>Senior Vice President, Retirement Product Leader</li>
                    <li>Senior Vice President of Call Center Operations</li>
                    <li>Managing Director of Global Stock Plan Services</li>
                    <li>Health & Benefits Business Leader</li>
                    <li>Retirement Business Leader</li>
                    <li>Channel Leader</li>
                    <li>Vice President of Product Management</li>
                    <li>Vice President of Implementation</li>
                    <li>Sales Executive</li>
                </ul>
            </div>
        </div>

    <style>
        .sample-search {
            max-width: 1000px;
            margin: 0 auto 4rem auto;
            padding: 0 1rem 0 1rem;
            display: grid;
            grid-gap: 1rem;
            grid-template-columns: 1fr;
        }

        .sample-search .col h3 {
            margin-bottom: 1rem;
        }

        .sample-search .col ul {
            line-height: 2;
        }


        @media(min-width: 700px) {
                .sample-search {
                    grid-template-columns: 1fr 1fr;
                }
        }
    </style>

<?php get_footer(); ?>
