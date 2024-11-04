<?php if (have_rows('love_sections')) : ?>
                        <?php $counter = 0; ?>
                        <?php while (have_rows('love_sections')) : the_row(); ?>
                            <div class="love_sections">
                                <div class="flex flex-col lg:flex-row lg:justify-between items-start gap-10 lg:gap-y-16 px-4 lg:px-48 py-8 max-w-7xl mx-auto <?php echo $counter % 2 == 0 ? 'lg:flex-row-reverse' : ''; ?>">
                                    
                                    <div class="flex flex-col items-start gap-8 decorated-list lg:w-5/12">
                                        <h2 class="text-3xl leading-snug font-bold mb-0"><?php the_sub_field('section_heading'); ?></h2>
                                        <div class="text-wrap text-md">
                                            <?php the_sub_field('section_text'); ?>
                                        </div>
                                    </div>
                                    
                                    <div class="h-full w-full lg:w-6/12">
                                        <?php 
                                        $image = get_sub_field('section_image');
                                        if ($image) {
                                            echo '<img src="' . esc_url($image) . '" alt="Service Image" class="aspect-square w-full h-full object-cover">';
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <?php $counter++; ?>
                        <?php endwhile; ?>
                    <?php endif; ?>