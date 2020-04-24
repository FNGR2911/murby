  <footer>&copy; <?php echo date("Y"); ?> MURBY</footer>
  <?php if (getenv('APP_ENV') === "dev"): ?>
    <script src="http://localhost:35729/livereload.js"></script>
  <?php endif;?>
</body>
</html>