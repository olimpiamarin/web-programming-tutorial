<?php include ("header-tpl.php") ?>
            <div id="breadcrumb">HOME : welcome home</div>

        <!--    <h1>Homework</h1>
            <p>Write some info about you.</p>
            <p>
                Make this web site as you wish. Change/Add any <strong>attributes</strong> you have learned in this example.
                Add/edit <strong>elements</strong> in HTML page as you wish, to create custom components in your page.
            </p>
            <h2>Exercises</h2>
            <ol>
                <li>Add new widget</li>
                <li>Make sure you understand how to find any elements with:
                    <ul>
                        <li>document.getElementById('element-id')</li>
                        <li>document.getElementsByClassName("class-name")</li>
                        <li>document.getElementsByTagName("a")</li>
                        <li>and nested combinations of those</li>
                    </ul>
                </li>
                <li>play in FireBug to find and change some attributes (color, display, width, height, etc.) of some elements</li>
                <li>Make all widgets collapsible</li>
            </ol>
            <p>I hope is all clear.</p>
            -->


<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <h1><?php the_title(); ?></h1>

    <p><?php the_content(__('(more...)')); ?></p>
    <hr> <?php endwhile; else: ?>
    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>

<?php include ("footer-tpl.php") ?>