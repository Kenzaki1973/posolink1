<script src="assets/user/code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="assets/user/cdn.jsdelivr.net/npm/bootstrap%405.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/user/lib/wow/wow.min.js"></script>
    <script src="assets/user/lib/easing/easing.min.js"></script>
    <script src="assets/user/lib/waypoints/waypoints.min.js"></script>
    <script src="assets/user/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="assets/user/js/main.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<!-- Add this script to handle dynamic star rating -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
  $(document).ready(function() {
    $('.fa-star').on('click', function() {
      // Get the value of the clicked star
      var ratingValue = $(this).data('value');

      // Remove 'checked' class from all stars
      $('.fa-star').removeClass('checked');

      // Add 'checked' class to clicked star and previous stars
      $(this).addClass('checked');
      $(this).prevAll('.fa-star').addClass('checked');

      // Update the hidden input field with the selected rating
      $('#rateInput').val(ratingValue);
    });
  });
</script>
