<!-- start footer -->
    </main>

    <footer class="footer">
      <div class="container">
        <div class="row">
          <div class="col-md-2">
            © Быковский Александр
          </div>
        </div>
      </div>
    </footer>
  <script src="assets/js/scripts.js?v=<?=mt_rand(0,999999)?>"></script>
  </body>
</html>
<?
$time = microtime(true) - $start;
echo '<!-- Время выполнения скрипта: '.round($time,6).' мс.-->';
?>
