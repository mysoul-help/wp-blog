<div class="specialists-block">
 <?php    
    while ( block_rows( 'specialists' ) ) :
        block_row( 'specialists' );        
        ?>        
            <div class="specialist">
                <div class="specialist-foto">
                    <img src="<?php block_sub_field( 'foto' ); ?>" alt="" />
                </div>
                <div class="specialist-name-online">
                    <div class="specialist-name"><?php block_sub_field( 'name' ); ?></div>
                    <div class="specialist-online"><?php esc_html_e( 'Online', 'razom' ); ?></div>
                </div>
                <div class="specialist-info">
                    <div class="specialist-price"><?php block_sub_field( 'price' ); ?> ₴ / <span><?php block_sub_field( 'experience' ); ?></span></div>
                    <div class="specialist-city"><?php block_sub_field( 'city' ); ?></div>
                </div>
            </div>        
        <?php
    endwhile;
    reset_block_rows( 'specialists' );
    ?>
</div>  

