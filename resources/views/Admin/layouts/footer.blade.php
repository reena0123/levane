<!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                {{-- <p>Copyright © Designed &amp; Developed by <a href="#" target="_blank">Quixkit</a> 2019</p>
                <p>Distributed by <a href="" target="_blank">Themewagon</a></p>  --}}
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{ asset('storage/admin/vendor/global/global.min.js') }}"></script>
    <script src="{{ asset('storage/admin/js/quixnav-init.js') }}"></script>
    <script src="{{ asset('storage/admin/js/custom.min.js') }}"></script>


    <!-- Vectormap -->
    <script src="{{ asset('storage/admin/vendor/raphael/raphael.min.js') }}"></script>
    <script src="{{ asset('storage/admin/vendor/morris/morris.min.js') }}"></script>


    <script src="{{ asset('storage/admin/vendor/circle-progress/circle-progress.min.js') }}"></script>
    <script src="{{ asset('storage/admin/vendor/chart.js/Chart.bundle.min.js') }}"></script>

    <script src="{{ asset('storage/admin/vendor/gaugeJS/dist/gauge.min.js') }}"></script>

    <!--  flot-chart js -->
    <script src="{{ asset('storage/admin/vendor/flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('storage/admin/vendor/flot/jquery.flot.resize.js') }}"></script>

    <!-- Owl Carousel -->
    <script src="{{ asset('storage/admin/vendor/owl-carousel/js/owl.carousel.min.js') }}"></script>

    <!-- Counter Up -->
    <script src="{{ asset('storage/admin/vendor/jqvmap/js/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('storage/admin/vendor/jqvmap/js/jquery.vmap.usa.js') }}"></script>
    <script src="{{ asset('storage/admin/vendor/jquery.counterup/jquery.counterup.min.js') }}"></script>

    <!-- Datatable -->
    <script src="{{ asset('storage/admin/vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('storage/admin/js/plugins-init/datatables.init.js') }}"></script>

    <script src="{{ asset('storage/admin/js/dashboard/dashboard-1.js') }}"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @stack('script')
</body>

</html>