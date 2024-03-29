<!--end::Main-->
<!-- begin::User Panel-->
<div id="kt_quick_user" class="offcanvas offcanvas-right p-10">
    <!--begin::Header-->
    <div class="offcanvas-header d-flex align-items-center justify-content-between pb-5">
        <h3 class="font-weight-bold m-0">User Profile
            <small class="text-muted font-size-sm ml-2"></small>
        </h3>
        <a href="#" class="btn btn-xs btn-icon btn-light btn-hover-primary" id="kt_quick_user_close">
            <i class="ki ki-close icon-xs text-muted"></i>
        </a>
    </div>
    <!--end::Header-->
    <!--begin::Content-->
    <div class="offcanvas-content pr-5 mr-n5">
        <!--begin::Header-->
        <div class="d-flex align-items-center mt-5">
            <div class="symbol symbol-100 mr-5">
                <div class="symbol-label" style="background-image:url(<?= base_url(); ?>assets/images/<?= $user['image'] ?>">
                </div>
                <i class="symbol-badge bg-success"></i>
            </div>
            <div class="d-flex flex-column">
                <a href="#" class="font-weight-bold font-size-h5 text-dark-75 text-hover-primary"><?= $user['nama'];  ?></a>
                <div class="text-muted mt-1"><?= $user['role']  ?></div>
                <div class="navi mt-2">
                    <a href="#" class="navi-item">
                        <span class="navi-link p-0 pb-2">
                            <span class="navi-icon mr-1">
                                <span class="svg-icon svg-icon-lg svg-icon-primary">
                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Mail-notification.svg-->
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <path d="M21,12.0829584 C20.6747915,12.0283988 20.3407122,12 20,12 C16.6862915,12 14,14.6862915 14,18 C14,18.3407122 14.0283988,18.6747915 14.0829584,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,8 C3,6.8954305 3.8954305,6 5,6 L19,6 C20.1045695,6 21,6.8954305 21,8 L21,12.0829584 Z M18.1444251,7.83964668 L12,11.1481833 L5.85557487,7.83964668 C5.4908718,7.6432681 5.03602525,7.77972206 4.83964668,8.14442513 C4.6432681,8.5091282 4.77972206,8.96397475 5.14442513,9.16035332 L11.6444251,12.6603533 C11.8664074,12.7798822 12.1335926,12.7798822 12.3555749,12.6603533 L18.8555749,9.16035332 C19.2202779,8.96397475 19.3567319,8.5091282 19.1603533,8.14442513 C18.9639747,7.77972206 18.5091282,7.6432681 18.1444251,7.83964668 Z" fill="#000000" />
                                            <circle fill="#000000" opacity="0.3" cx="19.5" cy="17.5" r="2.5" />
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon-->
                                </span>
                            </span>
                            <span class="navi-text text-muted text-hover-primary"><?= $user['email'];  ?></span>
                        </span>
                    </a>
                    <a style="background-color: rgba(50, 150, 69, 0.19); color: #329645;" class="btn btn-lg font-weight-bolder py-2 px-5 tombol-keluar">Sign Out</a>
                </div>
            </div>
        </div>
        <!--end::Header-->
        <!--begin::Separator-->
        <div class="separator separator-dashed mt-8 mb-5"></div>
        <!--end::Separator-->
        <!--begin::Nav-->
        <div class="navi navi-spacer-x-0 p-0">
            <!--begin::Item-->
            <a href="custom/apps/user/profile-1/personal-information.html" class="navi-item">
                <div class="navi-link">
                    <div class="symbol symbol-40 bg-light mr-3">
                        <div class="symbol-label">
                            <span class="svg-icon svg-icon-md svg-icon-success">
                                <!--begin::Svg Icon | path:assets/media/svg/icons/General/Notification2.svg-->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24" />
                                        <path d="M13.2070325,4 C13.0721672,4.47683179 13,4.97998812 13,5.5 C13,8.53756612 15.4624339,11 18.5,11 C19.0200119,11 19.5231682,10.9278328 20,10.7929675 L20,17 C20,18.6568542 18.6568542,20 17,20 L7,20 C5.34314575,20 4,18.6568542 4,17 L4,7 C4,5.34314575 5.34314575,4 7,4 L13.2070325,4 Z" fill="#000000" />
                                        <circle fill="#000000" opacity="0.3" cx="18.5" cy="5.5" r="2.5" />
                                    </g>
                                </svg>
                                <!--end::Svg Icon-->
                            </span>
                        </div>
                    </div>
                    <div class="navi-text">
                        <div class="font-weight-bold">My Profile</div>
                        <div class="text-muted">Account settings and more
                            <span class="label label-light-danger label-inline font-weight-bold">update</span>
                        </div>
                    </div>
                </div>
            </a>
            <!--end:Item-->
        </div>
        <!--end::Nav-->
        <!--begin::Separator-->
        <div class="separator separator-dashed my-7"></div>
        <!--end::Separator-->
        <!--begin::Notifications-->

        <!--end::Notifications-->
    </div>
    <!--end::Content-->
</div>
<!-- end::User Panel-->
<!--begin::Quick Cart-->

<!--begin::Scrolltop-->
<div id="kt_scrolltop" class="scrolltop">
    <span class="svg-icon">
        <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Up-2.svg-->
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <polygon points="0 0 24 0 24 24 0 24" />
                <rect fill="#000000" opacity="0.3" x="11" y="10" width="2" height="10" rx="1" />
                <path d="M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z" fill="#000000" fill-rule="nonzero" />
            </g>
        </svg>
        <!--end::Svg Icon-->
    </span>
</div>
<!--end::Scrolltop-->

<script>
    var HOST_URL = "https://preview.keenthemes.com/metronic/theme/html/tools/preview";
</script>
<!--begin::Global Config(global config for global JS scripts)-->
<script>
    var KTAppSettings = {
        "breakpoints": {
            "sm": 576,
            "md": 768,
            "lg": 992,
            "xl": 1200,
            "xxl": 1400
        },
        "colors": {
            "theme": {
                "base": {
                    "white": "#ffffff",
                    "primary": "#3699FF",
                    "secondary": "#E5EAEE",
                    "success": "#1BC5BD",
                    "info": "#8950FC",
                    "warning": "#FFA800",
                    "danger": "#F64E60",
                    "light": "#E4E6EF",
                    "dark": "#181C32"
                },
                "light": {
                    "white": "#ffffff",
                    "primary": "#E1F0FF",
                    "secondary": "#EBEDF3",
                    "success": "#C9F7F5",
                    "info": "#EEE5FF",
                    "warning": "#FFF4DE",
                    "danger": "#FFE2E5",
                    "light": "#F3F6F9",
                    "dark": "#D6D6E0"
                },
                "inverse": {
                    "white": "#ffffff",
                    "primary": "#ffffff",
                    "secondary": "#3F4254",
                    "success": "#ffffff",
                    "info": "#ffffff",
                    "warning": "#ffffff",
                    "danger": "#ffffff",
                    "light": "#464E5F",
                    "dark": "#ffffff"
                }
            },
            "gray": {
                "gray-100": "#F3F6F9",
                "gray-200": "#EBEDF3",
                "gray-300": "#E4E6EF",
                "gray-400": "#D1D3E0",
                "gray-500": "#B5B5C3",
                "gray-600": "#7E8299",
                "gray-700": "#5E6278",
                "gray-800": "#3F4254",
                "gray-900": "#181C32"
            }
        },
        "font-family": "Poppins"
    };
</script>
<!--end::Global Config-->
<!--begin::Global Theme Bundle(used by all pages)-->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="<?= base_url() ?>assets/plugins/global/plugins.bundle.js"></script>
<script src="<?= base_url() ?>assets/plugins/custom/prismjs/prismjs.bundle.js"></script>
<script src="<?= base_url() ?>assets/js/scripts.bundle.js"></script>
<!--end::Global Theme Bundle-->
<!--begin::Page Vendors(used by this page)-->
<script src="<?= base_url() ?>assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
<!-- <script src="//maps.google.com/maps/api/js?key=AIzaSyBTGnKT7dt597vo9QgeQ7BFhvSRP4eiMSM"></script> -->
<!-- <script src="<?= base_url() ?>assets/plugins/custom/gmaps/gmaps.js"></script> -->
<!-- <script src="<?= base_url() ?>assets/js/pages/features/maps/leaflet.js"></script> -->
<script src="<?= base_url() ?>assets/leaflet/leaflet.js"></script>
<script src="<?= base_url() ?>assets/js/leaflet.ajax.js"></script>
<!--end::Page Vendors-->
<!--begin::Page Scripts(used by this page)-->
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
<script src="<?= base_url() ?>assets/js/pages/widgets.js"></script>
<!-- <script src="<?= base_url() ?>assets/js/pages/myscript.js"></script> -->
<!-- <script src="<?= base_url() ?>assets/js/pages/custom/user/list-datatable.js"></script> -->
<script src="<?= base_url() ?>assets/js/pages/features/miscellaneous/sweetalert2.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
<!--end::Page Scripts-->

<script src="https://cdn.jsdelivr.net/npm/chart.js@3.6.0/dist/chart.min.js"></script>


<!-- script tombol keluar -->
<script>
    $('.custom-file-input').on('change', function() {
        let filename = $(this).val().split('\\').pop();
        $(this).next('.custom-file-label').addClass("selected").html(filename);
    });

    $(".tombol-keluar").click(function(e) {
        Swal.fire({
            title: "Anda yakin ingin keluar dari sistem ?",
            text: "",
            icon: "warning",
            showCancelButton: true,
            cancelButtonText: "Batal",
            confirmButtonText: "Keluar !"
        }).then(function(result) {
            if (result.value) {
                document.location.href = "<?= base_url('auth/logout/'); ?>";
            }
        });
    });

    const flashData = $('.flash-data').data('flashdata');
    if (flashData) {
        Swal.fire({
            title: 'Data',
            text: 'Berhasil ' + flashData,
            icon: 'success'
        });
    }

    $('.tombol-hapus').on('click', function(e) {
        e.preventDefault();
        const href = $(this).attr('href');

        Swal.fire({
            title: 'Apakah anda yakin?',
            text: "Data akan dihapus",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#329645',
            cancelButtonColor: '#d33',
            cancelButtonText: 'Batal',
            confirmButtonText: 'Delete !'
        }).then((result) => {
            if (result.value) {
                document.location.href = href;
            }
        })
    })

    $(document).ready(function() {
        $(".add-more").click(function() {
            var html = $(".copy").html();
            $(".after-add-more").after(html);
        });

        // saat tombol remove dklik control group akan dihapus 
        $("body").on("click", ".remove", function() {
            $(this).parents(".control-group").remove();
        });
    });
</script>

<script type="text/javascript">
    $(document).ready(function() {
        $('#data-tabel').DataTable();
    });
</script>

<script>
    // Class definition
    var KTSelect2 = function() {
        // Private functions
        var demos = function() {
            // basic
            $('#kt_select2_1').select2({
                placeholder: "Select a state"
            });

            // nested
            $('#kt_select2_2').select2({
                placeholder: "Select a state"
            });

            // multi select


            // basic


            // loading data from array


            // loading remote data



            // custom styles

            // tagging support

        }

        var modalDemos = function() {
            $('#kt_select2_modal').on('shown.bs.modal', function() {
                // basic
                $('#kt_select2_1_modal').select2({
                    placeholder: "Select a state"
                });

                // nested
                $('#kt_select2_2_modal').select2({
                    placeholder: "Select a state"
                });

                // multi select
                $('#kt_select2_3_modal').select2({
                    placeholder: "Select a state",
                });

                // basic
                $('#kt_select2_4_modal').select2({
                    placeholder: "Select a state",
                    allowClear: true
                });
            });
        }

        // Public functions
        return {
            init: function() {
                demos();
                modalDemos();
            }
        };
    }();

    // Initialization
    jQuery(document).ready(function() {
        KTSelect2.init();
    });
</script>

<script>
    $('#kt_select2_2').select2({
        placeholder: "Select a state"
    });
</script>


<script>
    $(document).ready(function() {


        //request data desa
        $('#id_kecamatan').change(function() {
            var kecamatan_id = $('#id_kecamatan').val(); // ambil value id dari kecamatan
            if (kecamatan_id != '') {
                $.ajax({
                    url: '<?= base_url(); ?>Pengaduan/get_desa',
                    method: 'POST',
                    data: {
                        id_kecamatan: kecamatan_id
                    },
                    success: function(data) {
                        $('#id_desa').html(data)
                    }
                });
            }
        });
    });
</script>

<script>
    $(document).ready(function() {

        //request data desa
        $('#ttk_kecamatan').change(function() {
            var ttk_kecamatan = $('#ttk_kecamatan').val(); // ambil value id dari kecamatan
            if (ttk_kecamatan != '') {
                $.ajax({
                    url: '<?= base_url(); ?>Pemetaan/get_kec',
                    method: 'POST',
                    data: {
                        ttk_kecamatan: ttk_kecamatan
                    },
                    success: function(data) {
                        $('#id_kecamatan').html(data)
                    }
                });
            }
        });

    });
</script>


<script>
    new Chart(document.getElementById("horizontalBar"), {
        "type": "horizontalBar",
        "data": {
            "labels": ["Galing", "Orange", "Yellow", "Green", "Blue", "Purple", "Grey", "Grey"],
            "datasets": [{
                "label": "Tingkat Kekerasan Terhadap ",
                "data": [22, 33, 55, 12, 86, 23, 14, 14],
                "fill": false,
                "backgroundColor": ["rgba(255, 99, 132, 0.2)", "rgba(255, 159, 64, 0.2)",
                    "rgba(255, 205, 86, 0.2)", "rgba(75, 192, 192, 0.2)", "rgba(54, 162, 235, 0.2)",
                    "rgba(153, 102, 255, 0.2)", "rgba(201, 203, 207, 0.2)"
                ],
                "borderColor": ["rgb(255, 99, 132)", "rgb(255, 159, 64)", "rgb(255, 205, 86)",
                    "rgb(75, 192, 192)", "rgb(54, 162, 235)", "rgb(153, 102, 255)", "rgb(201, 203, 207)"
                ],
                "borderWidth": 2
            }]
        },
        "options": {
            "scales": {
                "xAxes": [{
                    "ticks": {
                        "beginAtZero": true
                    }
                }]
            }
        }
    });
</script>

<script>
    let ctx = document.getElementById('myChart').getContext('2d');
    let myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Galing', 'Jawai', 'Jawai Selatan', 'Paloh', 'Pemangkat', 'Sajad', 'Sajingan Besar', 'Salatiga', 'Sambas', 'Sebawi', 'Sejangkung', 'Selakau', 'Selakau Timur', 'Semparuk', 'Subah', 'Tangaran', 'Tebas', 'Tekarang', 'Teluk Keramat'],
            datasets: [{
                label: 'Jumlah Kasus per Kecamatan',
                data: [
                    '<?= $galing['kasus']; ?>',
                    '<?= $jawai['kasus']; ?>',
                    '<?= $jawaiSelatan['kasus']; ?>',
                    '<?= $paloh['kasus']; ?>',
                    '<?= $pemangkat['kasus']; ?>',
                    '<?= $sajad['kasus']; ?>',
                    '<?= $sajinganBesar['kasus']; ?>',
                    '<?= $salatiga['kasus']; ?>',
                    '<?= $sambas['kasus']; ?>',
                    '<?= $sebawi['kasus']; ?>',
                    '<?= $sejangkung['kasus']; ?>',
                    '<?= $selakau['kasus']; ?>',
                    '<?= $selakauTimur['kasus']; ?>',
                    '<?= $semparuk['kasus']; ?>',
                    '<?= $subah['kasus']; ?>',
                    '<?= $tangaran['kasus']; ?>',
                    '<?= $tebas['kasus']; ?>',
                    '<?= $tekarang['kasus']; ?>',
                    '<?= $telukKeramat['kasus']; ?>'
                ],
                backgroundColor: '#F8D800',
                borderColor: '#FDEB71',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            },
            plugins: {
                datalabels: {
                    color: '#000',
                    font: {
                        weight: 'bold',
                        size: '10'
                    }

                }
            }
        }
    });
</script>

<script>
    let uctx = document.getElementById('umurChart').getContext('2d');
    let umurChart = new Chart(uctx, {
        type: 'bar',
        data: {
            labels: ['0 - 5', '6 - 12', '13 - 17', '18 - 24', '25 - 44', '45 - 59', '60+'],
            datasets: [{
                label: 'Korban Berdasarkan Usia',
                data: [
                    '<?= $umur['satu']; ?> ',
                    '<?= $umur['dua']; ?>',
                    '<?= $umur['tiga']; ?>',
                    '<?= $umur['empat']; ?>',
                    '<?= $umur['lima']; ?>',
                    '<?= $umur['enam']; ?>',
                    '<?= $umur['tujuh']; ?>',
                ],
                backgroundColor: '#F8D800',
                borderColor: '#FDEB71',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            },
            plugins: {
                datalabels: {
                    color: '#000',
                    font: {
                        weight: 'bold',
                        size: '10'
                    }

                }
            }
        }
    });
</script>

<script>
    let yctx = document.getElementById('youChart').getContext('2d');
    let youChart = new Chart(yctx, {
        type: 'bar',
        data: {
            labels: [<?php foreach ($bentukKekerasan as $bkk) {
                            echo "'" . $bkk['jenis_kekerasan'] . "',";
                        } ?>],
            datasets: [{
                label: 'Jenis Kekerasan yang Dialami Korban',
                data: ['<?= $dataKekerasan['satu']; ?> ',
                    '<?= $dataKekerasan['dua']; ?>',
                    '<?= $dataKekerasan['tiga']; ?>',
                    '<?= $dataKekerasan['empat']; ?>',
                    '<?= $dataKekerasan['lima']; ?>',
                    '<?= $dataKekerasan['enam']; ?>',
                    '<?= $dataKekerasan['tujuh']; ?>',
                ],
                backgroundColor: '#F8D800',
                borderColor: '#FDEB71',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            },
            plugins: {
                datalabels: {
                    color: '#000',
                    font: {
                        weight: 'bold',
                        size: '10'
                    }

                }
            }
        }
    });
</script>


<!-- <script>
    const ctx = document.getElementById('myChart').getContext('2d');
    const myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
            datasets: [{
                label: '# of Votes',
                data: [12, 19, 3, 5, 2, 3],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script> -->

<?php include 'map/map_kabSambas.php'; ?>
<!-- end -->
</body>
<!--end::Body-->

</html>