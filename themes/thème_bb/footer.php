
                </div>
        </section>
        <footer>
        <?php dynamic_sidebar('region-footer'); // Appel de la région footer grâce à la fonction interne wordpress 'dynamic_sidebar'  (créer dans functions.php)?>
        Réalisation by <a href="">johaN</a> © <?= date('Y');?> 
        </footer>
    </body>
    <?php wp_footer(); ?>
</html>
