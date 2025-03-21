<footer>
  <p>&copy; <?= date('Y') ?> My Website</p>
</footer>
</body>

<script>
  function toggleForm() {
    document.getElementById('signup').style.display =
      document.getElementById('signup').style.display === 'none' ? 'block' : 'none';
    document.getElementById('login').style.display =
      document.getElementById('login').style.display === 'none' ? 'block' : 'none';
  }
</script>

</html>