<?php $__env->startSection('content'); ?>

    <h3>Our Location</h3>

    <div id="map" style="width:100%;height:400px;"></div>

    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>

    <script>
    function myMap() {
    var text="hello";
    var myCenter = new google.maps.LatLng(27.706001,85.330206);
    var mapCanvas = document.getElementById("map");
    var mapOptions = {center: myCenter, zoom: 18};
    var map = new google.maps.Map(mapCanvas, mapOptions);
    var marker = new google.maps.Marker({position:myCenter});
    marker.setMap(map);
    google.maps.event.addListener(marker,'click',function() {
        var infowindow = new google.maps.InfoWindow({
        content: text
        });
    infowindow.open(map,marker);
    });
    }
    </script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBKqT0kqI_3z6DGHPb9Pjzgz_W4QlfK8VY&callback=myMap"></script>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\carservicemanagementsystem\resources\views/user/map.blade.php ENDPATH**/ ?>