<?php 
// use Framer;
get_header();

// Show the hero.
Framer::_hero( 'standard', [
    'background_img_url'   => get_stylesheet_directory_uri() . '/assets/images/valisa-smiling-in-black-white.jpg',
    // 'background_img_url'   => get_stylesheet_directory_uri() . '/assets/images/daniel-wright-popping-bow-tie.jpg',
    // 'headline'             => "The Wright Tie for Every Occasion",
    // 'icon'                 => Framer::generate_logo( get_stylesheet_directory_uri() . '/assets/images/the-wright-tie-logo-icon-only.svg' ),
    'subtitle'             => "",
    // 'primary_button_label' => 'View Collection',
    // 'primary_button_link'  => home_url( 'shop' ),
    // 'primary_button_icon'  => 'fa-long-arrow-alt-right',
    'classes'           => [
        'has-parallax',
        'has-text-align-right',
        'no-overlay',
        'has-primary-color',
    ]
] );

?>

<section class="has-padding-xl">
    <div class="container has-text-align-center">
        <span class="autograph">He's just approving you to get you to His promise.</span>
        <hr />
    </div>
</section>

<section class="has-padding-xl">
    <div class="container">
        <div class="grid">
            <div class="col one-half is-full-on-mobile">
                <!-- <iframe allow="autoplay *; encrypted-media *;" frameborder="0" height="250" style="width:100%;max-width:660px;overflow:hidden;background:transparent;" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-storage-access-by-user-activation allow-top-navigation-by-user-activation" src="https://embed.music.apple.com/us/album/heart-check-single/1437680507?app=music"></iframe> -->
                    <iframe width="560" height="400" src="https://www.youtube.com/embed/GegoIOGxtCg?rel=0&howinfo=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="col one-half has-padding-xl is-full-on-mobile">
                <h2>Heart Check - The New Single</h2>
                <p>Available on Apple Music, Google Play, Spotify and all digital outlets.</p>
                <a class="button" href="https://itunes.apple.com/us/album/heart-check-single/1437680507">Stream Now <i class="fas fa-play"></i></a>
            </div>
        </div>
        <hr />
    </div>
</section>

<?php

Framer::_content( 'post', [
    'post_type' => 'post'
] );

?>

<section class="has-padding-xl">
    <div class="container has-text-align-center">
        <hr />
        <div class="grid">
            <div class="col">
                <h2>Special News</h2>
                <span>I'll be singing at W.I.L's event on March 30th in Greensboro, NC.</span>
                <br />
                <a href="https://www.eventbrite.com/e/live-music-concert-tickets-55349012386?aff=ebdssbdestsearch&utm-medium=discovery&utm-campaign=social&utm-content=attendeeshare&utm-source=cp&utm-term=destsearch"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/wil-live-music-concert.jpg" height="600" /></a>
            </div>
        </div>
        <hr />
    </div>
</section>

<section>
    <h2 class="has-text-align-center"><i class="fas fa-heart"></i> Follow me on Instagram <a href="https://instagram.com/valisamusic">@valisamusic</a></h2>
    <div class="grid">
        <div class="col has-width-25 has-no-margin is-full-on-mobile">
            <a href="https://www.instagram.com/p/Bo7tjVBA0Yn/"><img src="https://scontent-atl3-1.cdninstagram.com/vp/0040af8445d7559eb23ab5a8a1aea905/5CFA3DC6/t51.2885-15/e35/43322528_259454788106668_547949835438524280_n.jpg?_nc_ht=scontent-atl3-1.cdninstagram.com" width="100%" /></a>
        </div>
        <div class="col has-width-25 is-full-on-mobile">
            <a href="https://www.instagram.com/p/BpCoocxAzXq/"><img src="https://scontent-atl3-1.cdninstagram.com/vp/da622a2ba418991697c612930aab6965/5CFAF72D/t51.2885-15/e35/42891997_255543628639050_708353007271986685_n.jpg?_nc_ht=scontent-atl3-1.cdninstagram.com" width="100%" /></a>
        </div>
        <div class="col has-width-25 is-full-on-mobile">
            <a href="https://www.instagram.com/p/BjbK6Qjnt0Y/"><img src="https://scontent-atl3-1.cdninstagram.com/vp/ddff78f024e2ac2e2a8f8abe7b300734/5CFC9E47/t51.2885-15/e35/33046615_878395132345481_3182544390941835264_n.jpg?_nc_ht=scontent-atl3-1.cdninstagram.com" width="100%" /></a>
        </div>
    </div>
</section>
<?