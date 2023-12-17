<!-- jQuery -->
<script src="assets/admin/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="assets/admin/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="assets/admin/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="assets/admin/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="assets/admin/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="assets/admin/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="assets/admin/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="assets/admin/plugins/moment/moment.min.js"></script>
<script src="assets/admin/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="assets/admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="assets/admin/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="assets/admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="assets/admin/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<!-- <script src="assets/admin/dist/js/demo.js"></script> -->
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="assets/admin/dist/js/pages/dashboard.js"></script>
</body>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

  <script>
var ctxPie = document.getElementById('myChart').getContext('2d');
    var categoryStatistics = <?= json_encode($categoryStatistics) ?>;
    var labelsPie = categoryStatistics.map(function(item) {
        return item.category;
    });

    var valuesPie = categoryStatistics.map(function(item) {
        return item.total;
    });

var femaleCount = valuesPie[0]; // Assuming female count is the second value in the valuesPie array
var maleCount = valuesPie[1]; // Assuming male count is the first value in the valuesPie array


var chartPie = new Chart(ctxPie, {
    type: 'pie',
    data: {
        labels: labelsPie,
        datasets: [{
            label: 'Gender',
            data: valuesPie,
            backgroundColor: [
                'rgb(121, 120, 233)',
                'rgb(243, 121, 126)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        aspectRatio: 0.8,
        plugins: {
            legend: {
                position: 'bottom',
                align: 'start',
                labels: {
                    generateLabels: function(chart) {
                        var originalLabels = Chart.defaults.plugins.legend.labels.generateLabels(chart);
                        var maleLabel = Object.assign({}, originalLabels[0]);
                        var femaleLabel = Object.assign({}, originalLabels[1]);

                        maleLabel.text = "Employed: " + maleCount;
                        maleLabel.fillStyle = 'rgb(121, 120, 233)'; // Change the text color for male label
                        femaleLabel.text = "Unemployed: " + femaleCount;
                        femaleLabel.fillStyle = 'rgb(243, 121, 126)'; // Change the text color for female label

                        return [maleLabel, femaleLabel];
                    }
                }
            }
        }
    }
});
            </script>

</html>