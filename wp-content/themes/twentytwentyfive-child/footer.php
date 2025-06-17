<!-- CUSTOM FOOTER LOADED -->
<footer class="w-full bg-gray-900 text-white py-8 fixed bottom-0 left-0 right-0">
    <div class="container mx-auto px-4">
        <div class="flex justify-center">
             <?php
             wp_nav_menu([
                 'theme_location' => 'footer',
                  'container'      => false,
                  'menu_class'     => 'flex space-x-6 text-sm'
              ]);
             ?>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>