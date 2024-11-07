<form id="product-filters" method="get" action="<?php echo esc_url( home_url( '/shop/' ) ); ?>">
   <?php 
   // Get all field objects for products
   if ( function_exists('get_field_objects') ) {
       $fields = get_field_objects('product'); // 'product' refers to the post type
       
       if ( $fields ) {
           foreach ( $fields as $field_key => $field ) {
               // Only create filters for fields that have choices (checkbox, radio, select)
               if ( in_array( $field['type'], array('checkbox', 'select', 'radio') ) ) {
                   echo '<div class="filter-' . esc_attr( $field['name'] ) . '">';
                   echo '<label for="' . esc_attr( $field['name'] ) . '">' . esc_html( $field['label'] ) . '</label>';
                   
                   // Render as a select dropdown
                   echo '<select name="' . esc_attr( $field['name'] ) . '" id="' . esc_attr( $field['name'] ) . '">';
                   echo '<option value="">Select ' . esc_html( $field['label'] ) . '</option>'; // Placeholder option
                   
                   foreach ( $field['choices'] as $choice_key => $choice_label ) {
                       echo '<option value="' . esc_attr( $choice_key ) . '">' . esc_html( $choice_label ) . '</option>';
                   }
                   
                   echo '</select>';
                   echo '</div>';
               }
           }
       }
   }
   ?>

   <button type="submit">Filter</button>
</form>
