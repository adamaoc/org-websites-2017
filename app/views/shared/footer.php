<?php $year = date('Y'); ?>
<?php $URL = $_SERVER['HTTP_HOST']; ?>
<footer class="text-center">
  <p>With ♥ for Non-Profits</p>
  <p>ORG Websites and <a href="http://ampnetmedia.com" target="_blank">ampnetmedia</a>. ©<?= $year ?> all rights reserved.</p>
  <p><small><a href="http://<?= $URL ?>/terms">Terms of Service</a></small></p>
</footer>
<script src="http://<?= $URL ?>/public/js/main.js"></script>

<!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
<?php getComponent('analytics'); ?>

</body>
</html>
