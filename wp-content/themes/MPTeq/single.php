<?php get_header()?>

<main>
    <section id="single1" class="design">
        <?php the_post_thumbnail()?>
        <div class="date-title">
            <h1><?php the_title()?></h1>
            <p>-<?php the_time("jS F Y")?></p>
        </div>
        <div class="content">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ac justo tristique, laoreet mi in,
                vehicula leo. Suspendisse sed nunc sapien. Nunc fringilla, ex at molestie dictum, nisi quam egestas
                purus, at hendrerit lacus mi egestas justo. Morbi sit amet vehicula risus. In nec luctus augue, eget
                varius nulla. Sed at velit erat. Mauris pretium feugiat placerat. Integer ut malesuada ligula, in
                commodo sem. Sed ut malesuada tellus. Proin dictum mi id imperdiet sodales. In vitae nulla sed mauris
                gravida porttitor. Nulla vel arcu at risus fermentum lacinia ac gravida felis. Vivamus neque erat,
                finibus sed imperdiet ut, pellentesque tempus leo. Curabitur faucibus, mauris in maximus convallis, ex
                odio ultrices metus, eu dignissim sem diam vel leo.</p>
            <p>Quisque sed lorem justo. Fusce pretium eros vel varius porttitor. Etiam ullamcorper urna leo, sed commodo
                purus tristique vel. Mauris vel tristique erat, non auctor magna. Vivamus cursus dolor accumsan aliquam
                mattis. Phasellus lacinia dolor at blandit lobortis. Morbi cursus eros vitae purus viverra lacinia.
                Etiam ut condimentum quam. Duis risus erat, rutrum ut ullamcorper non, fermentum vitae turpis. Proin
                interdum lacus a laoreet interdum. Proin molestie felis erat, eu dignissim nunc gravida sed. Praesent
                rutrum sollicitudin libero. Phasellus sed interdum eros, ac blandit lorem. Vivamus efficitur leo lorem,
                in egestas sem viverra non. Aenean a lorem tristique nulla euismod scelerisque. Class aptent taciti
                sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
            <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Ut tellus
                urna, efficitur at nibh a, auctor pellentesque ex. Praesent iaculis lectus sit amet nisi imperdiet,
                commodo consequat ex venenatis. Duis ligula dolor, maximus in dapibus in, iaculis at justo. Nunc
                commodo, nunc eu consectetur aliquam, diam diam tempor ante, non pharetra mi enim at velit. Vivamus
                vitae vehicula nulla. Ut eu neque ante. Nunc lobortis ligula eget pretium faucibus. Curabitur vel
                finibus orci, sit amet blandit sapien.</p>
        </div>
    </section>
    <section id="single2" class="design">
        <div id="wrap">
            <div id="left">
                <?php the_post_thumbnail()?>
                <p><?php the_time("jS F Y")?></p>
            </div>
            <div id="right">
                <h1><?php the_title()?></h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ac justo tristique, laoreet mi in,
                    vehicula leo. Suspendisse sed nunc sapien. Nunc fringilla, ex at molestie dictum, nisi quam egestas
                    purus, at hendrerit lacus mi egestas justo. Morbi sit amet vehicula risus. In nec luctus augue, eget
                    varius nulla. Sed at velit erat. Mauris pretium feugiat placerat. Integer ut malesuada ligula, in
                    commodo sem. Sed ut malesuada tellus. Proin dictum mi id imperdiet sodales. In vitae nulla sed
                    mauris
                    gravida porttitor. Nulla vel arcu at risus fermentum lacinia ac gravida felis. Vivamus neque erat,
                    finibus sed imperdiet ut, pellentesque tempus leo. Curabitur faucibus, mauris in maximus convallis,
                    ex
                    odio ultrices metus, eu dignissim sem diam vel leo.</p>
                <p>Quisque sed lorem justo. Fusce pretium eros vel varius porttitor. Etiam ullamcorper urna leo, sed
                    commodo
                    purus tristique vel. Mauris vel tristique erat, non auctor magna. Vivamus cursus dolor accumsan
                    aliquam
                    mattis. Phasellus lacinia dolor at blandit lobortis. Morbi cursus eros vitae purus viverra lacinia.
                    Etiam ut condimentum quam. Duis risus erat, rutrum ut ullamcorper non, fermentum vitae turpis. Proin
                    interdum lacus a laoreet interdum. Proin molestie felis erat, eu dignissim nunc gravida sed.
                    Praesent
                    rutrum sollicitudin libero. Phasellus sed interdum eros, ac blandit lorem. Vivamus efficitur leo
                    lorem,
                    in egestas sem viverra non. Aenean a lorem tristique nulla euismod scelerisque. Class aptent taciti
                    sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
                <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Ut tellus
                    urna, efficitur at nibh a, auctor pellentesque ex. Praesent iaculis lectus sit amet nisi imperdiet,
                    commodo consequat ex venenatis. Duis ligula dolor, maximus in dapibus in, iaculis at justo. Nunc
                    commodo, nunc eu consectetur aliquam, diam diam tempor ante, non pharetra mi enim at velit. Vivamus
                    vitae vehicula nulla. Ut eu neque ante. Nunc lobortis ligula eget pretium faucibus. Curabitur vel
                    finibus orci, sit amet blandit sapien.</p>
            </div>
        </div>
    </section>
    <input id="main-toggle" class="toggle" type="range" min="0" max="1" value="0">
</main>

<?php get_footer()?>